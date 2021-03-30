<?php
	include("include/common.php");
	if(isset($_SESSION['email'])){
		header("location: home.php");
	}
	include("include/header.php");
?>
		
		<div class="container con-margin">
			<div class="row">
				<div class="col-sm-6">
					<img src="images/suf.jpg" class="img img-responsive center-block" alt="">
				</div>
				<div class="col-sm-4 col-sm-offset-2">
					<h2><b>SIGN UP</b></h2>
						<div class="validation">
						<?php if(isset($_GET['error'])){
									echo $_GET['error'];
								} ?>
						</div>
					<form method="POST" action="signup_script.php">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Name" pattern="^[A-Za-z0-9_]{2,15}$" name="name" required="true">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Email" name="email" required="true">
							<div class="validation">
								
								<?php if(isset($_GET['email_exist'])){
								echo $_GET['email_exist'];
							} ?>
							<?php if(isset($_GET['email_val'])){
								echo $_GET['email_val'];
							} ?>
								
							</div>
							
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Password" name="password" required="true">
							<?php/* if(isset($_GET['pass_len'])){
							echo $_GET['pass_len'];}
								if(isset($_GET['pass_match'])){
								echo $_GET['pass_match'];
							} */?>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Contact" name="contact" required="true">
							<div class="validation">
								<?php if(isset($_GET['contact_len'])){
								echo $_GET['contact_len'];}
									if(isset($_GET['contact_match'])){
									echo $_GET['contact_match'];
								} ?>
							</div>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="City" name="city" required="true">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Address" name="address" required="true">
						</div>
						<div class="text-right">
							<button type="submit" name="signup" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
<?php include("include/footer.php"); ?>