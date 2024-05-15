<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Bai5.css">
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
                        if(!isset($_GET["view"]) && $i == 1){
                            $selected = 'class = "selected" ';
                        }
                        elseif(isset($_GET["view"]) && $_GET["view"] == $key){
                            $selected = 'class = "selected" ';
                        }
                ?>
                <li>
                    <a <?php echo $selected; ?> href="Bai5.php?view=<?php echo $key; ?> "> <?php echo $value; ?></a>
                </li>
                <?php 
                    }
                ?>
            </ul>
        </nav>
    </div>
    <?php 
        if(!isset($_GET["lang"]) || $_GET["lang"] == "vi"){
            $Menu = array("home" => "Trang chủ", "about" => "Giới thiệu", "product" => "Sản phẩm", "service" => "Dịch vụ", "contact" => "Liên hệ");
        }
        else {
            $Menu = array("home" => "Home", "about" => "About", "product" => "Products", "service" => "Services", "contact" => "Contact");
        }
    ?>
    <div id="main" style="margin-top:100px;">
        <nav>
            <ul>
                <?php
                    $i = 0;
                    foreach($Menu as $key => $value){
                        $i++;
                        $selected = "";
                        if(!isset($_GET["view"]) && $i == 1){
                            $selected = 'class = "selected" ';
                        }
                        elseif(isset($_GET["view"]) && $_GET["view"] == $key){
                            $selected = 'class = "selected" ';
                        }
                ?>
                <li>
                    <a <?php echo $selected; ?> href="Bai5.php?view=<?php echo $key; ?>
                        &lang=<?php echo isset ($_GET['lang'])?$_GET['lang']:"" ?>">
                    <?php echo $value; ?></a>
                </li>
                <?php 
                    }
                ?>
            </ul>
            <ul id="language">
                    <li>
                        <a href="Bai5.php?view=<?php 
                            echo isset ($_GET["view"])?$_GET["view"]:"home" ?>
                            &lang=vi"> VI
                        </a>
                    </li>
                    <li>
                        <a href="Bai5.php?view=<?php 
                            echo isset ($_GET["view"])?$_GET["view"]:"home" ?>
                            &lang=en"> EN
                        </a>
                    </li>
            </ul>
        </nav>
    </div>
</body>
</html>