<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_SESSION["email"])){
            echo "<h1> Xin chào: " .$_SESSION["email"] ."</h1>";
        }
        else{
             echo "<script> alert('Bạn chưa đăng nhập'); location.href='sectiondemo.php' </script>";
        }
    ?>
    <a href="dang-xuat.php">Đăng xuất</a>
</body>
</html>