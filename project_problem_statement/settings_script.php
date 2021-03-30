<?php
	include("include/common.php");
	if(!isset($_SESSION['email'])){
		header("location: index.php");
	}
		
		if(isset($_POST['change'])){
			$user_id=$_SESSION['id'];
			$old_pass=$_POST['old_pass'];
			$new_pass=$_POST['new_pass'];
			$re_pass=$_POST['re_pass'];
			
			$old_pass=md5($old_pass);
			$sql="select * from users where id=? and password=?";
			$stmt=$con->prepare($sql);
			$stmt->bind_param("is",$user_id,$old_pass);
			$stmt->execute();
			$result=$stmt->get_result();
			//echo($old_pass)."<br>";
			//die($row_pass);
			if(($result->num_rows)==0){
				header("location: setting.php?pass_old_match=Your password don't match with old password");
			}else if($new_pass != $re_pass){
				header("location: setting.php?pass_vali=Your password dont match with new password!");
			}/*else if(preg_match('/[^A-Za-z0-9]/', $new_pass)){
				header("location: setting.php?pass_match=Your password can only contain numbers and letters");
			}else if(strlen($new_pass)>16 || strlen($new_pass)<8){
				header("location: setting.php?pass_len=Your password must be between 8 and 16 characters");
			}*/
			else{
				$stmt->close();
				$new_pass=md5($new_pass);
				$sql="update users set password=? where id=?";
				$stmt=$con->prepare($sql);
				$stmt->bind_param("si",$new_pass,$user_id);
				if($stmt->execute()){
					header("location: setting.php?pass_change=Your password changed successfully");
				}else{
					die("ERROR");
				}
			}
			
			
		
		}
		/*function validatePasswords($opw,$pw,$pw2){
			global $con;
			$user_id=$_SESSION['id'];
			$eopw=md5($opw);
			$sql="select password from users where password='$eopw' and id='$user_id'";
			$result=mysqli_query($con,$sql);
			if(!$result){
				die($result);
			}
			echo mysqli_num_rows($result);
			if(mysqli_num_rows($result)==0){
				header("location: setting.php?pass_old_match=Your password don't match with old password");
			}
			
			else if($pw != $pw2){
				header("location: setting.php?pass_vali=Your password dont match with new password!");
				
			}

			else if(preg_match('/[^A-Za-z0-9]/', $pw)){
				header("location: setting.php?pass_match=Your password can only contain numbers and letters");
			}

			else if(strlen($pw)>16 || strlen($pw)<8){
				header("location: setting.php?pass_len=Your password must be between 8 and 16 characters");
			}
			else{return true;}
			
			
		}*/
?>