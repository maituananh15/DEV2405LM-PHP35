<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
        // Mảng
        $a = array("Mai", "Tuấn", "Anh");
        echo $a[0] ." ".  $a[1] ." ".  $a[2] ;
        print_r("<br>");
        for($i = 0; $i <= 2; $i++){
            echo $a[$i] ." ";
        }

        print_r("<br>");

        $b = array("HN" => "Hà Nội", "MTA" => "Mai Tuấn Anh", "MSV" => "Mã Sinh Viên");
        echo "MTA is" . " " . $b['MTA']; 

        print_r("<br>");


        $c = array(
            array("Nguyễn", "Mạnh", "Hùng"),
            array("Trần", "Đắc", "Hoàng"),
            array("Lê", "Minh", "Hiếu")
        );
        for($i = 0; $i < 3; $i ++){
            for($j = 0; $j < 3; $j ++){
                echo $c[$i][$j] ." ";
            }
            print_r("<br>");
        }

        $d = array("1", "3", "5", "9", "7", "8", "2", "6", "4", "0");
        echo count($d);
        print_r("<br>");
        echo is_array($d);
        print_r("<br>");
        sort($d);
        for($k = 0; $k <= 9; $k ++){
            echo $d[$k]. " ";
        }
        array_shift($d);
        array_pop($d);
        print_r("<br>");
        for($i = 0; $i <= 7; $i ++){
            echo $d[$i]. " ";
        }
        
        echo("<hr>");

        // Hàm

        function test($a, $b, $c){
            if($a == 0 && $b == 0 && $c == 0) echo "Phương trình vô số nghiệm". "<br />";
            else if($a == 0){
                if($b == 0){
                    echo "x = ". -$c. "<br />";
                }
                else {
                    echo "x = ". -$c/$b /"<br />";
                }
            }
            else{
                $delta = $b * $b - 4 * $a * $c;
                if($delta < 0) echo "Phương trình vô nghiệm". "<br />";
                else if($delta == 0) echo "Phương trình có nghiệm kép: " .-$b/2*$a ."<br />";
                else echo "Phương trình có 2 nghiệm phân biệt: " . "x1 = ". (-$b + $delta)/2 * $a." ". "và" ." " . "x2 = ". (-$b - $delta)/2 * $a ."<br />";
            }
        }

        test(1, -6, 9);
        test(0, 0, 0);
        test(1, 5, 6);
        
        $e = array(1, 5, 6, 3, 7, 2, 8);
        sort($e);
        $i = 0; $j = 6;
        while($i <= $j){
            if($i < $j){
                echo $e[$j]. " ". $e[$i]. " ";
            }
            else echo $e[$i];
            $i++;$j--;
        }
        echo "<br />";
    ?>
</body>
</html>