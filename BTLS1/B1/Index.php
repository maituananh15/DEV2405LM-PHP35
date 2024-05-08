<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký thành viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <section>
        <h2 style="text-align:center;">Đăng ký thành viên</h2>
        <form action="Loginmember.php" method="post">
            <table style="width:650px; margin-left:560px; margin-top: 100px" cellpadding="10">
                <tr>
                    <td>
                        <label for="">Tên đăng nhập </label>
                    </td>
                    <td>
                        <input type="text" placeholder="Tên đăng nhập" name="namelogin"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Mật khẩu</label>
                    </td>
                    <td>
                        <input type="password" name="pasword" placeholder="Mật khẩu"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Họ và tên</label>
                    </td>
                    <td>
                        <input type="type" name="name" placeholder="Họ Tên"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Email</label>
                    </td>
                    <td>
                        <input type="email" name="email" placeholder="Email"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Giới tính</label>
                    </td>
                    <td>
                        <input type="radio" name="gender" value="Nam"/> Nam
                        <input type="radio" name="gender" value="Nữ"/> Nữ
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Sở thích</label>
                    </td>
                    <td>
                        <input type="checkbox" name="sothich[] " value="Đá bóng"/> Đá bóng
                        <input type="checkbox" name="sothich[] " value="Cầu lông"/> Cầu lông
                        <input type="checkbox" name="sothich[] " value="Du lich"/> Du lịch
                        <input type="checkbox" name="sothich[] " value="Nghe nhạc"/> Nghe nhạc
                        <input type="checkbox" name="sothich[] " value="Bóng bàn"/> Bóng bàn
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Tỉnh thành</label>
                    </td>
                    <td>
                        <select name="select" id="select" style="width:140px;">
                            <option value="0"> -- Chọn Tỉnh -- </option>
                            <option value="Hà Nội"> Hà Nội </option>
                            <option value="Hải Phòng"> Hải Phòng </option>
                            <option value="Quảng Ninh"> Quảng Ninh </option>
                            <option value="Nghệ An"> Nghệ An </option>
                            <option value="Hà Tĩnh"> Hà Tĩnh </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Mô tả</label>
                    </td>
                    <td>
                        <textarea name="tex" id="tex" cols="30" rown="1" placeholder="Mô tả thông tin"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <input type="submit" value="Đồng ý" name="submit"/>
                        <input type="reset"  value="Làm lại" name="reset"/> 
                    </td>
                </tr>
            </table>
        </form>
    </section>
</body>
</html>