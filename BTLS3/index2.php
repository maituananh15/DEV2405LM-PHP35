<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php 
    echo "<h2>". session_id() ."</h2>";
    if(isset($_POST["login"])){
        $user = $_POST["username"];
        $pass = $_POST["pass"];

        $ck = $_POST["check"];

        $_SESSION["username"] = $user;
        $_SESSION["pass"] = $pass;

        echo "<h2>" .$_SESSION["username"] ."</h2>";
        echo "<h2>" .$_SESSION["pass"] ."</h2>";
    
        if(isset($ck)){
            setcookie("username", $user.time() + 3600);
            setcookie("pass", $pass.time() + 3600);
        }
        header("Location:section.php");
    }
?>
    <div class="col-md-6 col-md-offset-3 mb30">
        <h2>Login System</h2>
        <form action="" method="post">
            <div class="from-group">
                <label for="user_name">UserName</label>
                <input type="text" class="form-control" name="username" placeholder="Nhập tên đăng nhập" >
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="pass" class="form-control" placeholder="Nhập mật khẩu">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="check" > Remember me
                </label>
            </div>
            <div>
                <button type="submit" class="btn btn-default" name="login" >Login</button>
            </div>
        </form>
    </div>
</body>
</html>