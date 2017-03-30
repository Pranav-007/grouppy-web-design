<?php
/**
 * Created by PhpStorm.
 * User: Nikhil
 * Date: 3/30/2017
 * Time: 2:19 PM
 */?>
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

    <link rel="stylesheet" href="css/userPage.css">
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">GROUPPY</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li ><a href="index.php">Home</a></li>
                <li><a href="#">Get Your Own Network</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">About us</a></li>
                <li class="active"><a href="#">User<img src="./images/white-background.png" class="img-circle" alt="user-image" width="25" height="22"> </a> </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span>&nbsp;Home <span class="sr-only">(current)</span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;Friends</a></li>
                <li><a href="#">Recent Activity</a></li>
                <li><a href="#">Search Domain</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="">Report</a></li>
                <li><a href=""><span class="glyphicon glyphicon-wrench"></span>&nbsp;Settings</a></li>
                <li><a href=""><span class="glyphicon glyphicon-off"></span>&nbsp;Logout</a></li>

            </ul>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Profile</h1>

            <div class="row placeholders">
                <div class="col-xs-6 col-sm-3 placeholder">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                    <h4>UserName</h4>
                    <span class="text-muted">UserFull name</span>
                </div>

            </div>

            <h2 class="sub-header">Profile Section</h2>

        </div>
    </div>
</div>
</body>
</html>