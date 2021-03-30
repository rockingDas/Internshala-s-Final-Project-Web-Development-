	<?php
		if(isset($_SESSION['email'])){
		echo "   
			</body>
		</html>";
		}else{
			echo '
			
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<h4><b>Information</b></h4>
					<p><a href="about.php">About Us</a></p>
					<p><a href="contact.php">Contact Us</a></p>
				</div>
				<div class="col-sm-4">
					<h4><b>My Account</b></h4>
					<p data-target="#loginModal" data-toggle="modal"><a href="#">Login</a></p>
					<p><a href="signup.php">Signup</a></p>
				</div>
				<div class="col-sm-4">
					<h4><b>Contact Us</b></h4>
					<p>Contact:  +91-9876543210</p>
				</div>
			</div>
		</div>
	</footer>
  </body>
</html>
			
			';
		}
	?>
	