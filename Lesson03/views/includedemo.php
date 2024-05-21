<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hàm include trong PHP </title>
</head>
<body>
    <h1>Hàm include() trong PHP</h1>
    <?php 
        include("views/wrong.php");

        echo "<h2>Well come to include in PHP </h2>";

        include("ok.php");
    ?>
</body>
</html>