<h2>Bảng lưu thông tin </h2>
<?php 
    if(isset($_COOKIE["username"])){
        echo $_COOKIE["username"];
    }
    if(isset($_COOKIE["pass"])){
        echo $_COOKIE["pass"];
    }
    echo "<hr />";
    print_r($_COOKIE);
?>
