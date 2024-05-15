<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <h2 style="text-align: center;"> Giải phương trình bậc hai </h2>
    <h3 style="text-align: center;"> ax<sup>2</sup> + bx + c = 0</h3>
    <form action="code.php" method="post">
        <table style="margin-left: 610px" cellpadding ="10">
            <tr>
            <td> <label for=".">Số a </label> </td>
            <td>
                <input type="text" name="so_a"> 
            </td>
            </tr>
            <tr>
            <td> <label for=".">Số b </label> </td>
            <td>
                <input type="text" name="so_b"> 
            </td>
            </tr>
            <tr>
            <td> <label for=".">Số c </label> </td>
            <td>
                <input type="text" name="so_c"> 
            </td>
            </tr>
        </table>
        <input type="submit" name="gpt" value="Giải phương trình" style="margin-left: 700px; margin-top:20px">
    </form>
</body>
</html>