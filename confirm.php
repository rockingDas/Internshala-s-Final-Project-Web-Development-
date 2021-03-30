<?php
	include("include/common.php");
	if(!isset($_SESSION['email']) or !isset($_GET['update'])){
		header("location: index.php");
	}
	include("include/header.php");
	$user_id=$_SESSION['id'];
	
	$sql="select p.id,p.name,p.price,up.id from items as p INNER JOIN users as u INNER JOIN users_items as up on p.id = up.item_id and u.id = up.user_id WHERE u.id='$user_id' and status='Added to cart'";
	
	$result=mysqli_query($con,$sql);
	$sum=0;

	
	
?>
		
		<div class="container con-margin">
			<div class="row">
				<div class="col-sm-5 col-sm-offset-4">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Item Number</th>
								<th>Item Name</th>
								<th>Price</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							
						<?php
								if(mysqli_num_rows($result)>0){
									
								
						while($row=mysqli_fetch_array($result)){
							echo"
							<tr>
								<td>".$row[0]."</td>
								<td>".$row[1]."</td>
								<td>".$row[2]."</td>
								</tr>";
							echo "<br>";
							$sum+=$row['price'];
	 }
						?>
							
							<tr>
								<td></td>
								<td>Total</td>
								<td>Rs <?= $sum ?>/-</td>
								<td><a href="success.php?update=1"><button class="btn btn-primary btn-block">Confirm Order</button></a></td>
								<td><a href="cart.php"><button class="btn btn-primary btn-block">Back</button></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
	</div><?php } ?>
		
<?php include("include/footer.php"); ?>