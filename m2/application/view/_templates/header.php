<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<!-- Bootstrap -->
<link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>


<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Gatorslist</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JS -->
    <!-- please note: The JavaScript files are loaded in the footer to speed up page construction -->
    <!-- See more here: http://stackoverflow.com/q/2105327/1114320 -->
    <!-- CSS -->
    <link href="<?php echo URL; ?>css/style.css" rel="stylesheet">
    
</head>
<body>

    <!-- logo -->
    <header class="masthead">
    <div class="logo title-top-margin navbar-static-top">
        Gatorslist
    </div>
    </header>
    <!--Nav Bar-->
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid " style="font-weight:600; font-size:16px; margin-left:10%; margin-right:10%">
            <div class="navbar-header">
                <a class="navbar-brand" style="font-weight:700; font-size:20px" href="<?php echo URL; ?>home/index">Gatorslist</a>
            </div>
            
          <?php if (isset($_SESSION['loggedInUser_id'])) : ?>
            
            <ul class="nav navbar-nav">
                <li><a href="<?php echo URL; ?>sell/index">Sell Your Items</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo URL; ?>"><span class="glyphicon glyphicon-user"></span> Logged in as <?php echo htmlspecialchars($_SESSION['Email']); ?></a></li>
                <li><a href="<?php echo URL; ?>logout/destroySession"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>
            
          <?php else : ?>
            
            <ul class="nav navbar-nav">
                <li><a href="<?php echo URL; ?>sell/index">Sell Your Items</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo URL; ?>users/index"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                <li><a href="<?php echo URL; ?>login/index"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
            
          <?php endif; ?>
            
        </div>
        
      <?php if (isset($_SESSION['loggedInUser_id'])) : ?>
                        
      <?php endif; ?>
        
    </nav>