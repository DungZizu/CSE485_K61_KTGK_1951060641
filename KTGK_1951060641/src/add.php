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
<div class="main-content">
    <div class="wrapper">
        <h1>Thêm</h1>

        <br><br>

        <?php 
            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        ?>

        <form action="" method="POST" enctype="multipart/form-data">
        
            <table class="tbl-30">

                <tr>
                    <td>patientid: </td>
                    <td>
                        <input type="text" name="id" placeholder="id">
                    </td>
                </tr>

                <tr>
                    <td>firstname</td>
                    <td>

                        <textarea name="firstname" cols="30" rows="5" placeholder="...."></textarea>
                    </td>
                </tr>
                <tr>
                    <td>lastname</td>
                    <td>

                        <textarea name="lastname" cols="30" rows="5" placeholder="...."></textarea>
                    </td>
                </tr>

                <tr>
                    <td>dateofbirth</td>
                    <td>
                        <input type="date" name="birth">
                    </td>
                </tr>

                <tr>
                    <td>Gioitinh </td>
                    <td>
                        <input type="text" name="sex">
                    </td>
                </tr>

                <tr>
                    <td>Phone: </td>
                    <td>
                        <input type="number" name="Phone">
                    </td>

                </tr>

                <tr>
                    <td>Email: </td>
                    <td>
                        <input type="text" name="Email"> 
                        
                    </td>
                </tr>

                <tr>
                    <td>Chiều Cao</td>
                    <td>
                        <input type="number" name="Cao">
                    </td>
        
                </tr>
                <tr>
                    <td>Cân Nặng</td>
                    <td>
                        <input type="number" name="Nang">
                    </td>
        
                </tr>
                <tr>
                    <td>Nhóm Máu</td>
                    <td>
                        <input type="text" name="mau">
                    </td>
        
                </tr>
                <tr>
                    <td>Ngày lập sổ</td>
                    <td>
                        <input type="date" name="Lapso">
                    </td>
        
                </tr>
                <tr>
                    <td>Ngày cập nhật</td>
                    <td>
                        <input type="date" name="update">
                    </td>
        
                </tr>
                


                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>

        
        <?php 

            
            if(isset($_POST['submit']))
            {
                
                
                //1. Get the DAta from Form
                $patientid = $_POST['patientid'];
                $firstname= $_POST['firstname'];
                $lastname=$_POST['lastname'];
                $dateofbrith = $_POST['dateofbirth'];
                $gender=$_POST['gender'];
                $mobile=$_POST['mobile'];
                $email=$_POST['email'];
                $height=$_POST['height'];
                $weight=$_POST['weight'];
                $blood = $_POST['blood_type'];
                $created_on=$_POST['created_on'];
                $modified_on=$_POST['modified_on'];

                
                if(isset($_POST['patientid']))
                {
                    $patientid = $_POST['patientid'];
                }
                
            

                
                $sql2 = "INSERT INTO patient SET 
                
                    
                ";

                //Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                //CHeck whether data inserted or not
                //4. Redirect with MEssage to Manage Food page
                if($res2 == true)
                {
                    //Data inserted Successfullly
                    $_SESSION['add'] = "<div class='success'>Added Successfully.</div>";
                    header('location:'.SITEURL.'DanhSach.php');
                }
                else
                {
                    
                    $_SESSION['add'] = "<div class='error'>Failed to Add.</div>";
                    header('location:'.SITEURL.'DanhSach.php');
                }

                
            }

        ?>


    </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>