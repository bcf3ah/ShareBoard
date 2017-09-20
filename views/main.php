<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ShareBoard</title>
    <link rel="stylesheet" href="<?php echo ROOT_PATH ?>assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo ROOT_PATH ?>assets/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">ShareBoard</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo ROOT_URL ?>">Home</a></li>
                <li><a href="<?php echo ROOT_URL ?>shares">Shares</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['is_logged_in'])): ?>
                    <li><a>Welcome <?php echo $_SESSION['user_data']['name'] ?></a></li>
                    <li><a href="<?php echo ROOT_URL ?>users/logout">Logout</a></li>
                <?php else: ?>
                    <li><a href="<?php echo ROOT_URL ?>users/login">Login</a></li>
                    <li><a href="<?php echo ROOT_URL ?>users/register">Register</a></li>
                <?php endif; ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>

<div class="container">
    <div class="row">
        <?php Message::display() ?>
        <?php require($view); ?>
    </div> <!-- end main row -->
</div> <!-- end main container -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</html>