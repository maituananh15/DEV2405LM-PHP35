<?php 
    if(isset($_POST["gpt"])){
        $a = $_POST["so_a"];
        $b = $_POST["so_b"];
        $c = $_POST["so_c"];
        if($a == 0){
            if($b == 0){
                if($c == 0)
                    echo "Phương trình vô số nghiệm". "<br />";
                else 
                    echo "Phương trình vô nghiệm". "<br />";
            }
            else
                echo "x = ". -$c/$b /"<br />";
        }
        else{
            $delta = $b * $b - 4 * $a * $c;
            if($delta < 0) echo "Phương trình vô nghiệm". "<br />";
            else if($delta == 0) echo "Phương trình có nghiệm kép: " .-$b/2*$a ."<br />";
            else echo "Phương trình có 2 nghiệm phân biệt: " . "x1 = ". (-$b + $delta)/2 * $a." ". "và" ." " . "x2 = ". (-$b - $delta)/2 * $a ."<br />";
        }
    }
?>