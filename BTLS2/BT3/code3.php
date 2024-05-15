<?php 
if(isset($_POST["search"])){
    $so = $_POST["so"];
    $i = 0;
    $sum1 = 0;
    $sum2 = 0;
    $sochan = $sole = "";
    while($i <= $so){
        if($i % 2 == 0){
            $sum1 += $i;
            $sochan .= $i ." ";
        }
        else{
            $sum2 += $i;
            $sole .= $i ." ";
        }
        $i++;
    }
    echo "Các số chẵn: ". $sochan ."<br />";
    echo "Các số lẻ: ". $sole ." <br />";
    echo "Tổng các số chẵn: ". $sum1 ."<br />";
    echo "Tổng các số lẻ: ". $sum2 ."<br />";
}
?>