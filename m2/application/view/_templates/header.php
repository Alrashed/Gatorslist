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
      <footer class="footer">
      <div class="container text-center">
        <p class="text-muted">SFSU Software Engineering Project, Summer 2016. For Demonstration Only</p>
      </div>
    </footer>

    <!-- logo -->
    <header class="masthead">
    <div class="logo title-top-margin navbar-static-top">
        Gatorslist
    </div>
    </header>
    <!--Nav Bar-->
    <nav class="navbar navbar-default navbar-static-top shadow">
        <div class="container-fluid " style="font-weight:600; font-size:16px; margin-left:10%; margin-right:10%">
            <div class="navbar-header">
                <a class="navbar-brand" style="font-weight:700; font-size:20px" href="<?php echo URL; ?>home/index">Gatorslist</a>
            </div>
            
          <?php if (isset($_SESSION['loggedInUser_id'])) : ?>
            
            <ul class="nav navbar-nav" >
                <li><a href="<?php echo URL; ?>sell/index">Sell Your Items</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
<!--                <li><a href="--><?php //echo URL; ?><!--useraccount/index""><span class="glyphicon glyphicon-user"></span> Logged in as --><?php //echo htmlspecialchars($_SESSION['Email']); ?><!--</a></li>-->
                <li><a href="<?php echo URL; ?>useraccount/index""><span class="glyphicon glyphicon-user"></span> Logged in as <?php echo htmlspecialchars($_SESSION['Email']); ?></a></li>
                <li><a href="<?php echo URL; ?>logout/destroySession"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>
            
          <?php else : ?>
            
            <ul class="nav navbar-nav" id="hover-this-tab">
                <li><a href="<?php echo URL; ?>sell/index">Sell Your Items</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right ">
                <li class="hover-this-tab"><a href="<?php echo URL; ?>users/index"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                <li><a href="<?php echo URL; ?>login/index"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
            
          <?php endif; ?>
            
        </div>
        
        
      <?php if (isset($_SESSION['loggedInUser_id'])) : ?>
                        
      <?php endif; ?>
        
    </nav>
    <div class="text-center welcome">
      <h2><small>Here you can purchase a variety of items or sell your own items amongst your fellow SFSU students!</small></h2>
    </div>
    <div class="container" style="margin-bottom:2%">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3" style="background:#FEFEFE;">
                <form action="<?php echo URL; ?>products/searchproducts" method="POST">      
                      <div class="margin-right-1 float-left">
                        <select  name="category" class="form-control">
                            <option value="">All Categories</option>
                            
                            <?php foreach ($categories as $category) { ?>
                                <option value= "<?php if (isset($category->Category_name)) echo htmlspecialchars($category->Category_name, ENT_QUOTES, 'UTF-8'); ?>"><?php if (isset($category->Category_name)) echo htmlspecialchars($category->Category_name, ENT_QUOTES, 'UTF-8'); ?></option>

                            <?php } ?>
<!--                            <option value="book">Books</option>-->
<!--                            <option value="furniture">Furniture</option>-->
<!--                            <option value="electronics">Electronics</option>-->
<!--                            <option value="clothing">Clothing</option>-->
<!--                            <option value="office suppies">Office Supplies</option>-->
<!--                            <option value="other">Other</option>-->
                        </select>
                      </div>
                      <input id ="search_field" class="form-control input-attributes float-left " type="text" name="searchinput" value="" placeholder="Search for book, furniture, laptop, etc" required />
                      <div class="float-left">
                      <input class="btn btn-default" type="submit" name="submit_search_product" value="Search" />
                    </div>
				<!-- /input-group -->
                </form> 
        </div>
    </div>
</div>
