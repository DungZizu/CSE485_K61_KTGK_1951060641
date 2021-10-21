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
<div class="container">
        <h1 class="title">Danh Sách Chi Tiết</h1>
    </div>
    <div class="main">
        <div class="container">
            <a href="add.php"> <button class="btn btn-success"><i class="fas fa-user-plus">Thêm</button></a>
            <a href="ChiTiet.php"><button class="btn btn-success"><i class="fas fa-user-plus">Chi Tiết</button></a>
            <?php

                     if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }
                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Họ</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
                    <?php
                    // Quy trình 4 bước
                    // Bước 01: Đã tạo sẵn, gọi lại thôi
                    include 'contant.php';
                    // Bước 02: Thực hiện TRUY VẤN
                    $sql = "SELECT * FROM patient";
                   
                    $result = mysqli_query($conn,$sql); //Lưu kết quả trả về vào result
                    // Bước 03: Phân tích và xử lý kết quả
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                            
                ?>

                    <tr>
                        <th scope="row"><?php echo $row['patientid']; ?> </th>
                        <td><?php echo $row['firstname']; ?></td>
                        <td><?php echo $row['lastname']; ?></td>

                        

                        <td><a href="update.php?id=<?php echo $row['patientid']; ?>"><button
                                    class="btn btn-secondary">Sửa</button></a></td>
                        <td><a href="delete.php?id=<?php echo $row['patientid']; ?>"><button class="btn btn-danger">Xóa
                                    </button</a>
                        </td>

                    </tr>
                    <?php
                        }
                    }
                ?>

                    
                </tbody>
            </table>

        </div>
    </div>

                      


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>