<!-- <?php 
    if(isset($_POST["search"])){
        $thang = $_POST["sothang"];
        if($thang == 1) echo "Tháng giêng";
        else if($thang == 2) echo "Tháng hai";
        else if($thang == 3) echo "Tháng ba";
        else if($thang == 4) echo "Tháng tư";
        else if($thang == 5) echo "Tháng năm";
        else if($thang == 6) echo "Tháng sáu";
        else if($thang == 7) echo "Tháng bảy";
        else if($thang == 8) echo "Tháng tám";
        else if($thang == 9) echo "Tháng chín";
        else if($thang == 10) echo "Tháng mười";
        else if($thang == 11) echo "Tháng mười một";
        else if($thang == 12) echo "Tháng chạp";
        else echo "Không có tháng" . " " . $thang;
    }
?> -->

<?php 
 if(isset($_POST["search"])){
    $thang = $_POST["sothang"];
    switch($thang){
        case 1:
            echo "Tháng giêng";
            break;
        case 2:
            echo "Tháng hai";
            break;
        case 3:
            echo "Tháng ba";
            break;
        case 4:
            echo "Tháng tư";
            break;
        case 5:
            echo "Tháng năm";
            break;
        case 6:
            echo "Tháng sáu";
            break;
        case 7:
            echo "Tháng bảy";
            break;
        case 8:
            echo "Tháng tám";
            break;
        case 9:
            echo "Tháng chín";
            break;
        case 10:
            echo "Tháng mười";
            break;
        case 11:
            echo "Tháng mười một";
            break;
        case 12:
            echo "Tháng chạp";
            break;
        default:
            echo "Không có tháng" . " " .$thang;
            break;
        
    }
 }
?>