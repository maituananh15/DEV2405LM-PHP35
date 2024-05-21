<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <?php
            include("views/header.php");
        ?>
    </header>

    <nav>
        <?php 
            include("views/nav.php");
        ?>
    </nav>

    <section id="sideBar">
        <?php 
            include("views/sideBar.php");
        ?>
    </section>

    <section id="main">
       <div class="row">
        <div class="container my-3">
                <!-- navleft -->
                <?php 
                    include("views/navleft.php");
                ?>
            </div>
            <div class="col-md-10">
                <!-- content -->
                <?php 
                    include("views/content.php");
                ?>
            </div>
       </div>
    </section>

    <footer>
        <?php 
            include("views/footer.php");
        ?>
    </footer>
    
</body>
</html>