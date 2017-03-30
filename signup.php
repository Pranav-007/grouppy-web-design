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

    <link rel="stylesheet" href="css/loginpage.css">
</head>

<body>
<div class="container">
    <div class="row">

        <!-- Mixins-->
        <!-- Pen Title-->
        <div class="pen-title">
            <h1>Grouppy SignIn </h1>
        </div>
        <div class="container">
            <div class="card"></div>
            <div class="card">
                <h1 class="title">Signup</h1>
                <form>
                   <div id="nameInput">
                    <div class="input-container">
                        <input type="text" id="fname" required="required"/>
                        <label for="fname">First Name</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="text" id="lname" required="required"/>
                        <label for="lname">Last Name</label>
                        <div class="bar"></div>
                    </div>
                   </div>
                    <div class="input-container">
                        <input type="text" id="username" required="required"/>
                        <label for="Username">Username</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="email" id="" required="required"/>
                        <label for="Username">Username</label>
                        <div class="bar"></div>
                    </div>

                    <div class="input-container">
                        <input type="password" id="Password" required="required"/>
                        <label for="Password">Password</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="password" id="rePassword" required="required"/>
                        <label for="RePassword">Re-Enter Password</label>
                        <div class="bar"></div>
                    </div>
                    <div class="button-container">
                        <button><span>SignIn</span></button>
                    </div>
                    <div class="footer"><a href="./login.php">Already a User</a></div>
                </form>
            </div>

            <!-- Portfolio--><a id="portfolio" href="./index.php" title="View my portfolio!"><i class="fa fa-link">Home</i></a>
        </div>
    </div>
</body>
</html>
