<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_SESSION["username"])){
            echo "Name: " .$_SESSION["username"] . "<br />";
        }
        if(isset($_SESSION["pass"])){
            echo "Passwrod: ".$_SESSION["pass"]. "<br />";
        }
    ?>
    <a href="dang-xuat.php">Đăng xuất</a>
</body>
</html>