<?php
	include("include/common.php");
	include("include/Check-if-added.php");
	$user_id=$_SESSION['id'];
	if(isset($_GET['id'])){
		$item_id=$_GET['id'];
	}else{die("ERROR");}
	
	if (check_if_added_to_cart($item_id)) 
	{
		header("location: cart.php");
	}else{
		$query="INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
		$result=mysqli_query($con,$query);
		if($result){
		header("location: cart.php");
		}else{
		die("error");
	}
	}
	
	
	