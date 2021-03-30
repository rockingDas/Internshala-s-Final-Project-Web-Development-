<?php
	include("include/common.php");
	
	if(isset($_POST['signup'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$contact=$_POST['contact'];
		$city=$_POST['city'];
		$address=$_POST['address'];
		

		
		$sql="select * from users where email='$email'";
		//die($sql);
		$stmt=$con->prepare($sql);
		$stmt->bind_param("s",$email);
		$stmt->execute();
		$result=$stmt->get_result();
		
		//$result = $con->query($sql);
		//var_dump($result);
		//echo "<br>".$result->num_rows;
		//die($result->num_rows);
		
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			header("location: signup.php?email_exist=The Email entered is invalid.");
		}
		else if(($result->num_rows) > 0){
			header("location: signup.php?email_val=This Email address is already registered.");
			//header("location: index.php?nouser=0");
			//die("error");
		}
		else if(preg_match('/[^0-9]/',$contact)){
			header("location: signup.php?contact_match=Your Contact Number can only contain numbers.");
		}
		else if((strlen($contact)) != 10){
			header("location: signup.php?contact_len=Contact Number should be exact 10 digit.");
		}
		else{
			$email=$con->real_escape_string($email);
			$password=$con->real_escape_string($password);
			$password=md5($password);
			$name=$con->real_escape_string($name);
		
		//$stmt->close();
		
			$st=$con->prepare("insert into users(name,email,password,contact,city,address) values(?,?,?,?,?,?)");
			
			$st->bind_param("ssssss",$name,$email,$password,$contact,$city,$address);
			
			if ($st->execute()) {
				$new_id=$con->insert_id;
				$_SESSION['email']=$email;
				$_SESSION['id']=$new_id;
				header("location: home.php");
			} else {
				header("location: signup.php?error=Error happen.Try again");
			}
		}
		
		/*$query="insert into users(name,email,password,contact,city,address) values('$name','$email','$password','$contact','$city','$address')";
		//die($query);
		$result=mysqli_query($con,$query);
		if(!$result){
			header("location: signup.php?error=Error happen.Try again");
		}else{
			$new_id=mysqli_insert_id($con);
			$_SESSION['email']=$email;
			$_SESSION['id']=$new_id;
			header("location: home.php");
		}*/
		
	}
	
?>