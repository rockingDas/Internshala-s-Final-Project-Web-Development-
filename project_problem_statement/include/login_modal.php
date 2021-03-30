<div class="container">
	<div class="row">
		<div class="col-xs-12">
			
			<div class="modal fade" data-keyboard="false" data-backdrop="static" id="loginModal" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Login</h4>
						</div>
						<div class="modal-body">
							<p>Don't have an account?<a href="signup.php"><b>Register</b></a></p>
							<form method="POST" action="login_submit.php">
								<div class="form-group">
									<input type="email" name="email" class="form-control" placeholder="Email" required="true">
								</div>
								<div class="form-group">
									<input type="password" name="password" class="form-control" placeholder="Password" required="true">
								</div>
								<button type="submit" name="login" class="btn btn-primary">Login</button>
							</form>
						</div>
						<div class="modal-footer">
							<p class="mr-auto"><a href="forgot.php"><b>Forgot Password?</b></a><p>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>