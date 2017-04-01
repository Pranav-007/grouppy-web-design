<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <title>Grouppy | User Registration </title>
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
        <h1>What's your name?</h1>
        </div>
        <h4>Your name will be displayed for your profile in Grouppy</h4>
        <br>
        <h6>Your Name:</h6>
        <form name="nameForm">
        <input name="fname" class="form-control inputBox-small-width inputBox-inline inputBox inputBox-large-height" placeholder="First Name" type="text" id="fname">
        <input name="lname" class="form-control inputBox-small-width inputBox-inline inputBox inputBox-large-height" placeholder="Last Name" type="text" id="lname">
        <h6>Username:</h6>
        <input name="uname" class="form-control inputBox-large-width inputBox inputBox-large-height" placeholder="Username" type="text" id="username">
            <h6><div style="font-family: Arial;">Please enter the username that is all lower case and username will be unique containing only letters, numbers, hyphens,and underscore</div></h6>
        <Button class="btn btn-default button-med-width">Continue to Password&nbsp;<span class="glyphicon glyphicon-arrow-right"></span></Button>
        </form>
    </div>
    <p id="demo"></p>
</div>
<script src="js/signup.js"></script>

</body>
</html>
