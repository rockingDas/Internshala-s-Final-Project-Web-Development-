<?php
	include("include/common.php");
	$user_id=$_SESSION['id'];
	if(isset($_GET['id'])){
		$id=$_GET['id'];
	}else{die("ERROR");}
	$sql="delete from users_items where user_id='$user_id' and id='$id'";
	$result=mysqli_query($con,$sql);
	
	if($result){
		header("location: cart.php");
	}
	else{
		die("ERROR");
	}
?>