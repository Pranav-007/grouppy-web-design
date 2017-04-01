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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

    <div class="row">
        <div class="col-sm-6 col-md-3">
            <input type="email" class="form-control" id="email" placeholder="Department">
        </div>

        <div class="col-sm-6 col-md-3">
            <select>
                <option value="none">SELECT TEACHER</option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>
        </div>

        <div class="col-sm-12 col-md-6"><textarea rows="1" cols="40" placeholder="TextArea"></textarea></div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            <button type="submit" class="btn btn-default">+ ADD</button>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
            <br><button type="submit" class="btn btn-primary">Submit!</button>
        </div>
    </div>
</div>


</body>
</html>