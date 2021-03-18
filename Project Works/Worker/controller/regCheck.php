<?php
	session_start();

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$name 		= $_POST['name'];
		$email 		= $_POST['email'];
		$dob		= $_POST['dob'];
		$bio		= $_POST['bio'];
		$con		= $_POST['con'];
		$password 	= $_POST['password'];
		$repass 	= $_POST['repass'];

		if($username == "" || $name == "" || $email == "" || $dob == ""|| $bio == ""||$con == ""|| $password == ""){
			echo "invalid information...please try again!";
		}else{

			if($password == $repass){

				//echo "registration success...";
				//echo "<a href='login.html'>SignIn </a>";

				//store user information
				$user = [
							'id'		=>1, 
							'name'		=>$name, 
							'username'	=>$username, 
							'email'		=>$email, 
							'dob'		=>$dob,
							'password'	=>$password,
							'pass2'		=>$pass2,
							'repass'	=>$repass
						];

				$_SESSION['abc'] = $user;
				//$_SESSION['username'] = $username;
				//$_SESSION['password'] = $password;

				header('location: ../view/login.html');
			}else{
				echo "password & re-type password mismatch...";
			}
		}
	}
?>
