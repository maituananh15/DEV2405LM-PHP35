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
        if(isset($_POST["btnLogin"])){
            $email = $_POST["email"];
            $pass = $_POST["pass"];
             // kiểm tra có rêmmber
             $ck = $_POST["remember"];
        }
        if(isset($ck)){
            setcookie("email",$email.time() + 3600);
            setcookie("pass",$pass.time() + 3600);
        }

        header("Location:cookies-result.php");
    ?>
    <section>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="email" class="form-email-label">Email address</label>
                <input type="email" class="form-email-control" id="email" name="email" aria-describedby="EmailHelp">
            </div>
            <div class="mb-3">
                <label for="pass" class="form-pass-label">Example Pass</label>
                <input type="pass" class="form-pass-control" id="pass" name="pass" placeholder="PassHelp">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label for="remember" class="form-check-label">Remember</label>
            </div>
        </form>
    </section>
</body>
</html>