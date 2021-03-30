<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/main.css" rel="stylesheet" type="text/css"/>
    <title>The E-Store</title>
  </head>
  <body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">E-Store</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<?php
						if(isset($_SESSION['email'])){
						?>
						<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
						<li><a href="setting.php"><span class="glyphicon glyphicon-user"></span>Settings</a></li>
						<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
					<?php
						}else{
					?>
						<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
					<li data-target="#loginModal" data-toggle="modal"><a href="#"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
						<li><a href="about.php"><span class="glyphicon glyphicon-tasks"></span>About Us</a></li>
						<li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span>Contact Us</a></li>
					<?php
						}
					?>
				</ul>
			</div>
		</div>
	</nav>
	<?php
	include("login_modal.php");
	  ?>