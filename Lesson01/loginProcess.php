<?php 
    // Lấy dữ liệu trên form: $_POST

    $taikhoan = $_POST["txtTaiKhoan"];
    $matkhau = $_POST["txtMatKhau"];

    echo "<h1> Welcome to, $taikhoan; mật khẩu của bạn: $matkhau";
?>

<?php 
    // Lấy dữ liệu trên form: $_REQUEST

    $taikhoan = $_REQUEST["txtTaiKhoan"];
    $matkhau = $_REQUEST["txtMatKhau"];

    echo "<hr/> REQUEST: Welcome to, $taikhoan; mật khẩu của bạn: $matkhau";
?>
