<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <h2 style="text-align:center;"> Nhập vào số tháng chuyển thành chữ</h2>
    <form action="code2.php" method="post">
        <div style="margin-left:570px">
            <label for="." style="margin-right:30px">Nhập vào số tháng:</label>
            <input type="text" name="sothang">
        </div>
        <div style="margin-left:730px; margin-top:30px;">
            <input type="submit" name="search" value="Tìm tháng">
        </div>
    </form>
</body>
</html>