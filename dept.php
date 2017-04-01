<?php
/**
 * Created by PhpStorm.
 * User: noaman
 * Date: 30/03/2017
 * Time: 13:13
 */

?>

<!DOCTYPE html>
<html>
<head>
    <title>Department</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
        include 'cdn/CDN.php';
    ?>
    <link rel="stylesheet" type="text/css" href="./css/dept.css">
</head>

<body>

<div class="navItems">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
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
                    <li><a href="#">Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Get Your Own Network</a></li>

                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">About us</a></li>
                    <li>
                        <Button class="btn btn-default navbar-btn" data-placement="bottom" data-toggle="popover"
                                data-title="Login" data-container="body" type="button" data-html="true"><span
                                class="glyphicon glyphicon-user"> </span>&nbspLogin
                        </Button>
                    </li>
                    <?php include 'templates/loginPop.php'; ?>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
<div class="container">

<div class="wrapper">
    <div id="dept0" class="dept inputBox-inline" style="margin-top:2%;">
     <form class="form-inline">
         <div class="form-group">
             <input class="form-control" type="text" placeholder="Enter department name" id="deptname" name="deptname">
         </div>
         <div class="form-group">
             <div class="dropdown" style="font-size: 16pt;">
                 <button class="btn btn-xs btn-default dropdown-toggle" style="font-size: 16pt; margin-bottom: 5%; width:200px; font-family: 'Lobster', cursive; margin-left: 5%;" type="button" id="dropdownMenu1" data-toggle="dropdown">Head of department</button>
                 <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                     <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Unsorted <span class="badge">12</span></a></li>
                     <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action <span class="badge">42</span></a></li>
                     <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here <span class="badge">42</span></a></li>
                 </ul>
             </div>

         </div>
             <div class="form-group">

                 <textarea class="form-control" placeholder="Description" style="margin-left:10%;" rows="1" id="comment"></textarea>
             </div>

     </form>

    </div>
</div>
    <div class="dept1" style="margin-top: 20px;">

        <button type="submit" onclick="createComponents()" class="btn btn-default">+ ADD another Department</button>
        <button style="margin-left: 5%;" onclick="removeComponent()" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></button>

        <button style="margin-left: 5%;" type="submit" class="btn btn-primary">Submit!</button>


    </div>
</div>

<script src="./js/dept.js"></script>

</body>
</html>