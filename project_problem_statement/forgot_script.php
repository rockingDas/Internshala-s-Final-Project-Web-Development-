<?php
	include("include/common.php");
	
	if(isset($_POST['send'])){
		$email=$_POST['email'];
		
		$sql="select * from users where email=?";
		$stmt=$con->prepare($sql);
		$stmt->bind_param("s",$email);
		$stmt->execute();
		$result=$stmt->get_result();
		
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			header("location: forgot.php?email_val=The Email entered is invalid.");
		}
		else if(($result->num_rows) == 0){
			header("location: forgot.php?email_exist=This Email address is not registered.");
		}
		
		else{
			$stmt->close();
			
			define('EMAIL');//define with valid gmail address or any email provider(change line 41 if not using gmail). example@gmail.com
			define('PASS');//define with valid password related to email account
			
			if(!defined('EMAIL') && !defined('PASS')){
				header("location: forgot.php?not_define=Please define your SMTP credentials first. See Console for more information.");
			}
			
			$reset_password=rand();
			
			/*PHA MAIL CODE*/
			
			require 'PHPMailer/PHPMailerAutoload.php';

			$mail = new PHPMailer;

			//$mail->SMTPDebug = 4;                             // Enable verbose debug output

			$mail->isSMTP();                                    // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  					// Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                             // Enable SMTP authentication
			$mail->Username = EMAIL;                 			// SMTP username
			$mail->Password = PASS;                           	// SMTP password
			$mail->SMTPSecure = 'tls';                          // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                  // TCP port to connect to

			$mail->setFrom(EMAIL, 'Demo');
			$mail->addAddress($email);     // Add a recipient

			$mail->addReplyTo(EMAIL);
			/*$mail->addCC('cc@example.com');
			$mail->addBCC('bcc@example.com');*/

			$mail->isHTML(true);                                 // Set email format to HTML

			$mail->Subject = 'Password Reset';
			$mail->Body    = '<b>Your New Password: </b>'.$reset_password.'<br>Please Log In with new password';
			$mail->AltBody = '<br>Please Log In with new password';

			if(!$mail->send()) {
				echo 'Message could not be sent.';
				echo '<br>Mailer Error: ' . $mail->ErrorInfo;
			} else {
				
				$reset_password=md5($reset_password);
				$sql="update users set password=? where email=?";
				$stmt=$con->prepare($sql);
				$stmt->bind_param("ss",$reset_password,$email);
				if($stmt->execute()){
					header("location: forgot.php?pass_change=New password sent to your registered email.");
				}else{
					header("location: forgot.php?pass_change=Error happened! Try Again");
				}
				
				
			}

			
			

			
			
		}
	}
?>