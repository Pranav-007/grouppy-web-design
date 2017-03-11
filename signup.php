
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
</div>
<div class="container">

    <form class="form-horizontal" name="myForm">
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
                <button type="submit" class="btn btn-default" >Sign In</button>
            </div>
        </div>
    </form>


</div>


</body>
</html>
