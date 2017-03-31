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
    <title>Grouppy | User Registration </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" href="css/mycustomCss.css">
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
        <form name="nameForm">
            <input name="pass" class="form-control inputBox-large-width inputBox inputBox-large-height" placeholder="Enter your Password" type="password" id="password">
            <div class="progresS">
                <div class="inputBox-inline progBorder" id="progress1"></div>
                <div class="inputBox-inline progBorder" id="progress2"></div>
                <div class="inputBox-inline progBorder" id="progress3"></div>
                <div class="inputBox-inline progBorder" id="progress4"></div>
                <div class="inputBox-inline progHeader" id="progheader">Weak</div>

            </div>
            <h6><div style="font-family: Arial;">Please enter the username that is all lower case and username will be unique containing only letters, numbers, hyphens,and underscore</div></h6>
            <Button class="btn btn-default button-med-width">Get to Network&nbsp;<span class="glyphicon glyphicon-arrow-right"></span></Button>
        </form>

    </div>
    <p id="demo"></p>
</div>


</body>
</html>
