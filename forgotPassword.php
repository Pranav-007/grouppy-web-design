<?php
/**
 * Created by PhpStorm.
 * User: Nikhil
 * Date: 4/2/2017
 * Time: 12:11 AM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Grouppy | Login</title>
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
            <h1><span class="glyphicon glyphicon-lock"></span>Reset Your password</h1>
        </div>
        <br>

        <form name="nameForm" method="post">
            <h6>Password:</h6>

            <input  name="pass"  onkeyup="CheckPasswordStrength(this.value)" class="form-control inputBox-large-width inputBox inputBox-large-height" placeholder="Password" type="password" id="password">

            <h6>Re-Enter Password:</h6>

            <input  name="rpass"  class="form-control inputBox-large-width inputBox inputBox-large-height" placeholder="Re-Password" type="password" id="rpassword">
            <div class="progress" style="max-width: 85%; margin-top: 2%">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0"
                     aria-valuemin="0" aria-valuemax="100" style="width:0%;" id="prog">
                    <span id="password_strength"></span>
                </div>
            </div>
            <Button class="btn btn-default button-med-width">Reset Password&nbsp<span class="glyphicon glyphicon-arrow-right"></span></Button>
        </form>

    </div>
    <script src="js/pass.js"></script>
</div>
</body>
</html>

