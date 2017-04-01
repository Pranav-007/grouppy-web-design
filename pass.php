<?php
/**
 * Created by PhpStorm.
 * User: Nikhil
 * Date: 3/31/2017
 * Time: 12:20 AM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <title>Grouppy | Get Password protection </title>
    <?php
    include 'cdn/CDN.php';
    ?>
    <link rel="stylesheet" href="css/signup.css">

</head>

<body>
<div class="headerS">
    <img src="" alt="" class="img-rounded" width="40px" height="40px">Grouppy
</div>
<br>
<div class="container">
    <div class="card">
        <div>
            <h1>Set your Password</h1>
        </div>
        <h4>Choose a password to sign-in Grouppy</h4>
        <br>
        <h6>Password</h6>
        <form name="nameForm" method="post">
            <input  name="pass" onkeyup="CheckPasswordStrength(this.value)" class="form-control inputBox-large-width inputBox inputBox-large-height" placeholder="Enter your Password" type="password" id="password">
            <div class="progress" style="max-width: 85%; margin-top: 2%">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0"
                     aria-valuemin="0" aria-valuemax="100" style="width:0%;" id="prog">
                    <span id="password_strength"></span>
                </div>
            </div>
            <h6><div style="font-family: 'Pavanam', sans-serif;">Password mus be at-least 6 characters long. Password should be strong <br>Example:abc_123</div></h6>
            <Button class="btn btn-default button-med-width">Get to Network&nbsp;<span class="glyphicon glyphicon-arrow-right"></span></Button>
        </form>

    </div>
    <p id="demo"></p>
</div>
<script src="js/pass.js"></script>

</body>
</html>
