<?php
	ob_start();//new
	if(isset($_POST['registrationSubmitButton'])){
		$username=mysql_real_escape_string($_POST['register_username']);
		$password=mysql_real_escape_string($_POST['register_password']);
		$email=mysql_real_escape_string($_POST['register_email']);
		$sql="INSERT INTO user_accounts (user_name,user_email,user_password,user_date_time,user_status) VALUES ('$username','$email','$password',now(),'1')"; //1 for active user
		$result=mysql_query($sql);
		if (!$result) {
		    die('Invalid query: ' . mysql_error());
		}else{			
			echo "
				<script>
				alert('Registration Succesful. Please login to continue.');
				document.location.href='';
				</script>
				";
		}
	}else if(isset($_POST['loginSubmitButton'])){

		$un=mysql_real_escape_string($_POST['username']);
		$pw=mysql_real_escape_string($_POST['password']);
		
		$sql="SELECT user_id FROM `user_accounts` WHERE `user_name`='$un' AND `user_password`='$pw'";
		$result=mysql_query($sql);
		if (!$result) {
		   	die('Invalid query: ' . mysql_error());
		 	break;
		}
		if(mysql_num_rows($result)>0){
			$row=mysql_fetch_array($result);
			$_SESSION['bns_id']=$row['user_id'];
			header('Location: index.php');
			exit();//new
		}else{
			echo "<script>alert('Username or password does not match.');</script>";
		}
		
	}

	if(isset($_SESSION['bns_id'])){
		//Logged in, create log out button.
		echo"
			<div id='headerDiv'>
			<input class='btn btn-sm btn-danger' type='button' value='Log Out' id='logOutButton' name='logOutButton' onclick='logOutButtonPressed();'>
			</div>
		";
	}else {
		//Not logged in, creat sign in and registration button.
		echo"
			<div id='headerDiv'>
			<a class='btn btn-sm btn-primary' href='#loginForm' role='button' data-toggle='modal'>Log In</a>
			<a class='btn btn-sm btn-warning' href='#registraionForm' role='button' data-toggle='modal'>Register</a>			
			</div>
		";

	}

?>