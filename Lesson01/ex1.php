<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Mã nguồn php
        echo "<h1> Giới thiệu về PHP </h1>";
        echo "<h2> Biến, hằng, kiểu dữ liệu, ...</h2>";

        // Khai báo biến
        $name = "Mai Tuấn Anh";
        $age = 20;

        print_r($name);
        print_r("<br>");
        print_r($age);

        // Hằng

        define("PI", 3.145);
        echo "<p> Hằng PI:</p>" .PI;
        print_r("<br>");

        $a = "Hello";
        $b = "$a Word";
        $c = "{$a} Word";
        print_r($a);
        print_r("<br>");
        print_r($b);
        print_r("<br>");
        print_r($c);

        echo("<hr>");

        $st = "P";
        $st[1] = "H";
        $st[2] = "P";
        echo "$st";
    ?>
</body>
</html>