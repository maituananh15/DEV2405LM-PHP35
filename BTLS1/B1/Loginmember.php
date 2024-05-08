<h2 style="text-align:center;">
    Thông tin đăng ký
</h2>
<table style="width:650px; margin-left:600px; margin-top: 100px" cellpadding="10">
                <tr>
                    <td>
                        <label for="">Tên đăng nhập </label>
                    </td>
                    <td>
                        <?php echo $_POST["namelogin"]?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Mật khẩu</label>
                    </td>
                    <td>
                    <?php echo $_POST["pasword"]?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Họ và tên</label>
                    </td>
                    <td>
                    <?php echo $_POST["name"]?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Email</label>
                    </td>
                    <td>
                    <?php echo $_POST["email"]?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Giới tính</label>
                    </td>
                    <td>
                        <?php echo $_POST["gender"]?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Sở thích</label>
                    </td>
                    <td>
                    <?php 
                        $sothich = $_POST["sothich"];
                        $i = 0;
                        foreach ($sothich as $key => $value){
                            $i++;
                            if($i ==1) echo $value;
                            else echo "," .$value;
                        }
                    ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Tỉnh thành</label>
                    </td>
                    <td>
                    <?php echo $_POST["select"]?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Mô tả</label>
                    </td>
                    <td>
                    <?php echo $_POST["tex"]?>
                    </td>
                </tr>
            </table>
</table>