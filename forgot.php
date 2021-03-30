<?php
	include("include/common.php");
	if(isset($_SESSION['email'])){
		header("location: home.php");
	}
	include("include/header.php");
	
?>
		
		<div class="container con-margin">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-4">
					<h2>Reset Password</h2>
					<br>
					<div class="p-10 mb-1 bg-danger text-white">
						<?php 
						if(isset($_GET['not_define'])){
							echo "<script type='text/javascript'>console.log('Go to forgot_script line no 23 and 24')</script>";
						echo $_GET['not_define'];
						} 
						?>
					</div>
					<div class="p-10 mb-1 bg-success text-white">
						<?php 
						if(isset($_GET['pass_change'])){
						echo $_GET['pass_change'];
						} 
						?>
					</div>
					<br>
					<form method="POST" action="forgot_script.php">
						<div class="form-group">
							<input type="email" class="form-control" name="email" placeholder="Your registered email">
							<div class="validation">
								<?php if(isset($_GET['email_val'])){
									echo $_GET['email_val'];
									}
										if(isset($_GET['email_exist'])){
									echo $_GET['email_exist'];
								} ?>
							</div>
						</div>
						<button type="submit" name="send" class="btn btn-primary">Send Password</button>
					</form>
				</div>
			</div>
		</div>
		
			</body>
		</html>