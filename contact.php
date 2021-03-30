<?php
	include("include/common.php");
	if(isset($_SESSION['email'])){
		header("location: home.php");
	}
	include("include/header.php");
?>

	<div class="container con-margin">
		<div class="row">
			<div class="col-md-8 col-sm-8 text-justify">
				<h2>LIVE SUPPORT</h2>
				<h5>
					24 hours | 7 days a week | 365 days a year Live Technical Support
				</h5>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
			<div class="col-md-4 col-sm-4">
				<img src="images/lts.jpg" class="img img-responsive center-block" alt="">
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-8 col-sm-8">
				<h2>CONTACT US</h2>
				<form>
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" class="form-control" name="name">
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="text" class="form-control" name="email">
					</div>
					<div class="form-group">
						<label for="message">Message:</label>
						<textarea name="message" class="form-control" id="" rows="5"></textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
				
			</div>
			<div class="col-md-4 col-sm-4">
				<h2>Company Information:</h2>
				Dummy Address<br><br>
				Lorem Ipsum Sit Amet<br><br>
				Dummy Pin<br><br>
				Dummy place<br><br>
				Telephone : 1-800-123-4567<br><br>
				Fax :(000)000 000 00 0<br><br>
				Email : info@dummy.com<br><br>
				Follow on: Facebook, Twitter
			</div>
		</div>
	</div>












<?php include("include/footer.php"); ?>