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
	<!--Nav Bar-->
    <nav class="navbar navbar-default navbar-fixed-top ">
      <div class="container-fluid " style="font-weight:600; font-size:16px; margin-left:10%; margin-right:10%">
        <div class="navbar-header">
          <a class="navbar-brand" style="font-weight:700; font-size:20px" href="#">Gatorslist</a>
        </div>
        <ul class="nav navbar-nav "  >
          <li><a href="<?php echo URL; ?>home/index">Home</a></li>
          <li><a href="<?php echo URL; ?>sell/index">Sell Your Items</a></li>
          <li><a href="<?php echo URL; ?>products/index">Product Listing</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo URL; ?>register/index"><span class="glyphicon glyphicon-user"></span> Register</a></li>
          <li><a href="<?php echo URL; ?>login/index"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </nav>
    <!-- logo -->
    <div class="logo title-top-margin">
        Gatorslist
    </div>
