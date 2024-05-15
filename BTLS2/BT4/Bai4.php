<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Bai4.css">
</head>
<body>
    <div id="main">
    <nav>
        <ul>
            <?php 
                $Menu = array("home" => "Trang chủ", "about" => "Giới thiệu", "product" => "Sản phẩm", "service" => "Dịch vụ", "contact" => "Liên hệ");
                $i = 0;
                foreach($Menu as $key => $value){
                    $i++;
                    $selected = "";
                    if(!isset($_GEt["view"]) && $i == 1){
                        $selected = 'class = "selected" ';
                    }
                    elseif(isset($_GET["view"]) && $_GET["view"] == $key){
                        $selected = 'class = "selected" ';
                    }
            ?>
            <li>
                <a <?php echo $selected; ?> href="Bai4.php?view=<?php echo $key; ?> "> <?php echo $value; ?></a>
            </li>
            <?php 
                }
            ?>
        </ul>
    </nav>
</div>
</body>
</html>