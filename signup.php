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
<div class="jumbotron">
    <h1>Grouppy</h1>
    <h4>Registration</h4>
    <br>
    <h6 id="demo1" class="collapse">Login
        <form id="lform" class="form-inline">
            <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="pwd" placeholder="Enter password">
            </div>
            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-success">Login</button>
        </form>
    </h6>
    <h6>
        <nav>
            <ul class="nav masthead-nav">
                <li ><a href="index.php">Home</a></li>
                <li><a href="#">Features</a></li>
                <li class="active" ><a href="#"><span class="glyphicon glyphicon-user"></span>SignIn</a>
                </li>
            </ul>
        </nav>
    </h6>
</div>
<div class="container">
    <form class="form-horizontal" name="myForm" onsubmit="return validateForm()">
        <div class="form-group">
            <label class="control-label col-sm-2" for="usrname">Username:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="usrname" placeholder="Enter username">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="pwd" placeholder="Enter password">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Re Password:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="rpwd" placeholder="Enter password again">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="abc@example.com">
            </div>
            <div id="emailError" style="color: #d0d5d8;" ></div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default"  >Sign In</button>
            </div>
        </div>
    </form>
<div class="link">
    Already a   <a href="#" data-toggle="collapse" data-target="#demo1"><span class="glyphicon glyphicon-user"></span>User</a>
</div>
</div>
<script>
    setInterval(function(){
        var w = window.innerWidth
            || document.documentElement.clientWidth
            || document.body.clientWidth;
        if(w<1000)
        {
            document.getElementById("lform").className="";
        }
        else{
            document.getElementById("lform").className="form-inline";
        }
    },10);
function validateForm(){

}
function validateusrName(){
    var x = document.forms["myForm"]["usrname"].value;
    if (x == "") {
        alert("Username must be filled out");
        return false;
    }
}
</script>
</body>
</html>
