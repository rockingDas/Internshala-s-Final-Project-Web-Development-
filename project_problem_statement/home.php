<?php
	include("include/common.php");
	if(!isset($_SESSION['email'])){
		header("location: index.php");
	}
	include("include/header.php");
	include("include/Check-if-added.php");
?>
	
		<div class="container-fluid con-margin">
			<div class="row text-center">
				<div class="col-md-4 col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>Realme X7 5G</h4>
						</div>
						<div class="panel-body">
						<img src="images/1.jpeg" class="img img-responsive center-block">
							<h5>6 GB RAM | 128 GB ROM
16.33 cm (6.43 inch) Full HD+ Display
64MP + 8MP + 2MP | 16MP Front Camera</h5>
							<p>Price: ₹19,999</p>
							<?php if(!isset($_SESSION['email'])) { ?>                       
							<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 <?php } 
							 else {
							 if (check_if_added_to_cart(1)) 
							 {
								 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
							 } 
							 else 
							 { ?>
							 <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
							 <?php
									}
								}
							 ?> 
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>Redmi 9 Power</h4>
						</div>
						<div class="panel-body">
						<img src="images/2.jpeg" class="img img-responsive center-block">
							<h5>4 GB RAM | 64 GB ROM
16.59 cm (6.53 inch) Full HD+ Display
48MP Rear Camera | 8MP Front Camera</h5>
							<p>Price: ₹10,499</p>
							<?php if(!isset($_SESSION['email'])) { ?>                       
							<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 <?php } 
							 else {
							 if (check_if_added_to_cart(2)) 
							 {
								 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
							 } 
							 else 
							 { ?>
							 <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
							 <?php
									}
								}
							 ?> 
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>SAMSUNG Galaxy F62</h4>
						</div>
						<div class="panel-body">
						<img src="images/3.jpeg" class="img img-responsive center-block">
							<h5>6 GB RAM | 128 GB ROM | Expandable Upto 1 TB
17.02 cm Full HD+ Display
64MP + 12 + 5 + 5 | 32MP Front Camera</h5>
							<p>Price: ₹23,999</p>
							<?php if(!isset($_SESSION['email'])) { ?>                       
							<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 <?php } 
							 else {
							 if (check_if_added_to_cart(3)) 
							 {
								 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
							 } 
							 else 
							 { ?>
							 <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
							 <?php
									}
								}
							 ?> 
						</div>
					</div>
				</div>
			
			</div>
			
			<div class="row text-center">
				<div class="col-md-4 col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>Realme C12</h4>
						</div>
						<div class="panel-body">
						<img src="images/4.jpeg" class="img img-responsive center-block">
							<h5>3 GB RAM | 32 GB ROM | Expandable Upto 256 GB
16.56 cm HD+ Display
13MP + 2MP + 2MP | 5MP Front Camera</h5>
							<p>Price: ₹8,499</p>
							<?php if(!isset($_SESSION['email'])) { ?>                       
							<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 <?php } 
							 else {
							 if (check_if_added_to_cart(4)) 
							 {
								 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
							 } 
							 else 
							 { ?>
							 <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
							 <?php
									}
								}
							 ?> 
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>MOTOROLA Razr 5G</h4>
						</div>
						<div class="panel-body">
						<img src="images/5.jpeg" class="img img-responsive center-block">
							<h5>8 GB RAM | 256 GB ROM
15.75 cm (6.2 inch) HD+ Display
48MP Rear Camera | 20MP Front Camera</h5>
							<p>Price: ₹1,09,999</p>
							<?php if(!isset($_SESSION['email'])) { ?>                       
							<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 <?php } 
							 else {
							 if (check_if_added_to_cart(5)) 
							 {
								 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
							 } 
							 else 
							 { ?>
							 <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
							 <?php
									}
								}
							 ?> 
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>IQOO 3</h4>
						</div>
						<div class="panel-body">
						<img src="images/6.jpeg" class="img img-responsive center-block">
							<h5>8 GB RAM | 256 GB ROM
16.36 cm (6.44 inch) Full HD+ Display
48MP + 13MP + 13MP + 2MP | 16MP Front Camera</h5>
							<p>Price: ₹27,990</p>
							<?php if(!isset($_SESSION['email'])) { ?>                       
							<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 <?php } 
							 else {
							 if (check_if_added_to_cart(6)) 
							 {
								 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
							 } 
							 else 
							 { ?>
							 <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
							 <?php
									}
								}
							 ?> 
						</div>
					</div>
				</div>
			
			</div>
			

		</div>
  
<?php include("include/footer.php"); ?>