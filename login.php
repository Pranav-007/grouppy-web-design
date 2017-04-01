
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
            <h1><span class="glyphicon glyphicon-user"></span>Login to Grouppy</h1>
        </div>
        <br>

        <form name="nameForm" method="post">
            <h6>Username:</h6>
            <input name="uname" class="form-control inputBox-large-width inputBox inputBox-large-height" placeholder="Username" type="text" id="username">
            <h6>Password:</h6>

            <input  name="pass"  class="form-control inputBox-large-width inputBox inputBox-large-height" placeholder="Password" type="password" id="password">

            <Button class="btn btn-default button-med-width">Login to Grouppy&nbsp<span class="glyphicon glyphicon-arrow-right"></span></Button>
        </form>

    </div>
    <p id="demo"></p>
</div>
</body>
</html>
