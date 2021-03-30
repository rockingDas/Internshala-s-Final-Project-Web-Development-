<?php
	include("include/common.php");
	if(!isset($_SESSION['email']) or !isset($_GET['update'])){
		header("location: index.php");
	}
	include("include/header.php");
		$user_id=$_SESSION['id'];
		$sql="update users_items set status='Confirmed' where user_id='$user_id'";
		$result=mysqli_query($con,$sql);
		if(!$result){
			die("ERROR");
		}
?>
		
		<div class="container con-margin">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-4">
					<center>
						<div class="panel panel-success">
							<div class="panel-heading">
								<h2>Success</h2>
							</div>
							<div class="panel-body">
								<p> 
								Thank you for ordering from E-Store. The order shall be delivered to you shortly.<hr><br> Order some more electronic items <a href="home.php"><span class="text-success"><b>here</b></span></a>
								</p>
							</div>
							<div class="panel-footer">
								<button class="btn btn-warning btn-block">Rate Us</button>
							</div>
						</div>
					</center>
				</div>
			</div>
		</div>
		
<?php include("include/footer.php"); ?>