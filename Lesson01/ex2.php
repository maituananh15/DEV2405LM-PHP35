<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Toán tử trong PHP</h1>
    <hr>
    <h2>
        Toán tử số học: *, /, +, -, %
    </h2>
    <?php
        $a = 2;
        $b = 5;
        $c = $a * $b;
        echo "<p> $a * $b = $c";
        print_r("<br>");
        $d = $a + $b;
        echo "<p>  $a + $b = $d";
        print_r("<br>");
        $e = $a - $b;
        echo "<p>  $a - $b = $e";
        print_r("<br>");
        $f = $a / $b;
        echo "<p>  $a / $b = $f";
        print_r("<br>");
        $g = $a % $b;
        echo "<p>  $a % $b = $g";
        print_r("<br>");
    ?>
    <hr>
    <h2>Toán tử tăng giảm</h2>
    <?php
        $a = 100;
        $d = 200;
        $c = $a ++;
        echo '<p> $c =', $c;
        echo '<p> $a =', $a;
        $b = $d --;
        echo '<p> $b =', $b;
        echo '<p> $d =', $d;
    ?>
    <hr>
    <h2>Toán tử so sánh</h2>
    <?php 
        $a = 2;
        $b = 5;
        $c = $a > $b;
        echo '<p> $c =', $c .' kiểu dữ liệu:'.gettype($c);
        $c = $a < $b;
        echo '<p> $c =', $c;
        $x = 2.0;
        $d = $a == $x;
        echo '<p>  $d =' .$d;
        $d = $a === $x;
        echo '<p> $d =' .$d;
        $c = $a > 12 ? '$a > 1' : 'Sai';
        echo '<p> $c = '. $c;
    ?>
</body>
</html>