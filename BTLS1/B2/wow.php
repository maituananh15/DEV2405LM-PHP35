<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h2 style="text-align: center;">Tìm kiếm sản phẩm </h2>
    <form action="SearchProduct.php" method="post" >
        <table style="width:450px; margin-left:560px; margin-top: 100px" cellpadding="10">
            <tr>
                <td>
                    <label for=".">Tên sản phẩm</label>
                </td>
                <td>
                    <input type="text" name="nameproduct" id="product"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for=".">Loại sản phẩm</label>
                </td>
                <td>
                    <select name="select" id="select">
                        <option value="Dell">Dell</option>
                        <option value="HP">HP</option>
                        <option value="Lenovo">Lenovo</option>
                        <option value="Gaming">Gaming</option>
                        <option value="Nitro">Nitro</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for=".">Giá sản phẩm</label>
                </td>
                <td>
                    <input type="text" name="price" id="price"/>
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                    <input type="submit" name="submit" id="submit" value="Tìm kiếm"/>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>