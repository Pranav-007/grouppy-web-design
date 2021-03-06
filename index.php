
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

    <title>Grouppy</title>
    <?php
    include 'cdn/CDN.php';
    ?>
    <link rel="stylesheet" href="css/indexcss.css">
</head>

<body>
<div class="navItems">
    <nav class="navbar navbar-default">
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
                    <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Get Your Own Network</a></li>

                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">About us</a></li>
                    <li><Button class="btn btn-default navbar-btn" data-placement="bottom" data-toggle="popover" data-title="Login" data-container="body" type="button" data-html="true"><span class="glyphicon glyphicon-user"> </span>&nbspLogin</Button></li>
                    <?php include 'templates/loginPop.php';?>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
<div class="container">
    <div id="tag-line">
        <h1>Make Your Network to Share Your Work</h1>
        <BR>
        <BR>
        <div class="searchField inputBox inputBox-med-width">
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-search"></span></span>
                <input type="text" class="form-control" placeholder="Search your Network here...." aria-describedby="sizing-addon1">
            </div>
        </div>
    </div>
</div>

</div>
<?php
 include 'templates/footer.php';
?>
<script>
    $("[data-toggle=popover]").popover({
        html: true,
        content: function() {
            return $('#popover-content').html();
        }
    });

</script>
</body>
</html>
