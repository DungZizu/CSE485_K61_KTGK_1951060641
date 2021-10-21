<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hệ Thống Quản Lý Bệnh Viện </title>
</head>
<body>
<?php 
    
    include('contant.php');

    

    if(isset($_GET['patientid']))
    {
        $id = $_GET['patientid'];
        $sql = "DELETE FROM patient WHERE patientid=$id";
        //Execute the Query
        $res = mysqli_query($conn, $sql);

        if($res==true)
        {
            $_SESSION['delete'] = "<div class='success'> Deleted Successfully.</div>";
            header('location:'.SITEURL.'DanhSach.php');
        }
        else
        {
            $_SESSION['delete'] = "<div class='error'>Failed to Delete.</div>";\
            header('location:'.SITEURL.'DanhSach.php');
        }

        

    }
    else
    {

        $_SESSION['unauthorize'] = "<div class='error'>Unauthorized Access.</div>";
        header('location:'.SITEURL.'DanhSach.php');
    }

?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>