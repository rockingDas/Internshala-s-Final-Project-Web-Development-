<?php
	include("include/common.php");
	if(!isset($_SESSION['email'])){
		header("location: index.php");
	}
	include("include/header.php");
	
?>
		
		<div class="container con-margin">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-4">
					<h2>Change Password</h2>
					<br>
					<div class="p-10 mb-1 bg-success text-white">
						<?php 
						if(isset($_GET['pass_change'])){
						echo $_GET['pass_change'];
						} 
						?>
					</div>
					<br>
					<form method="POST" action="settings_script.php">
						<div class="form-group">
							<input type="password" class="form-control" name="old_pass" placeholder="Old Password">
							<div class="validation">
								<?php if(isset($_GET['pass_old_match'])){
									echo $_GET['pass_old_match'];
								} ?>
							</div>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="new_pass" placeholder="New Password">
							<div class="validation">
								<?php if(isset($_GET['pass_match'])){
									echo $_GET['pass_match'];
								} ?>
								<?php if(isset($_GET['pass_len'])){
									echo $_GET['pass_len'];
								} ?>
							</div>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="re_pass" placeholder="Re-type New Password">
							<div class="validation">
								<?php if(isset($_GET['pass_vali'])){
									echo $_GET['pass_vali'];
								} ?>
							</div>
						</div>
						<button type="submit" name="change" class="btn btn-primary">Change</button>
					</form>
				</div>
			</div>
		</div>
		
<?php include("include/footer.php"); ?>