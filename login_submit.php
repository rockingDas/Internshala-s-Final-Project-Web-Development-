<?php
	include("include/common.php");
	
	if(isset($_POST['login'])){
		$email=mysqli_real_escape_string($con,$_POST['email']);
		$password=mysqli_real_escape_string($con,$_POST['password']);
		
		$encrypt_password=md5($password);
		
		$query="select id,email from users where email='$email' and password='$encrypt_password'";
		//die($query);
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)==0){
			header("location: index.php?nouser=0");
		}else{
			$row=mysqli_fetch_assoc($result);
			$_SESSION['id']=$row['id'];
			$_SESSION['email']=$row['email'];
			header("location: home.php");
		}
	}
?>