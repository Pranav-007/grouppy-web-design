
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
    <link rel="stylesheet" href="css/createnetwork.css">

</head>

<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Grouppy</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">

            <ul class="nav navbar-nav navbar-right">
                <li ><a href="" class="noLink">looking to an existing network?</a></li>
                <li><a href="#" class="btn btn-primary">Join Now</a> </li>
            </ul>
         </div>
    </div>
</nav>

<div id="left-card">

        <div class="formNet">
            <div class="heading">
                Create a New Network
            </div>
            <form name="nameForm" method="post" id="formNetwork">

                <input  name="pass"  class="form-control inputBox-large-width-1 inputBox inputBox-large-height fontCursive" placeholder="Type your network name here" type="text" id="networkName">
                <div id="agree-line"><input type="checkbox" name="agreement" value="yes" style="margin-top: 5%;">&nbsp;I agree all terms and condition<br></div>
                <div id="errormsg" color=""></div>
                <Button class="btn btn-default button-large-width" style="font-size: 20pt;margin-left: 30%">Next&nbsp;<span class="glyphicon glyphicon-arrow-right"></span></Button>
            </form>
        </div>

    </div>

    <div id="right-card">
        <img src="images/anim-donk.gif" align="center" width="400px" height="400px" style="margin-top: 5%; margin-left: 30%;">
    </div>


</body>
</html>
