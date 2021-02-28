<?php
	session_start();

	if(isset($_POST['submit'])){
		$name 		= $_POST['name'];
		$email 		= $_POST['email'];
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$repass 	= $_POST['repass'];
		$gender 	= $_POST['gender'];
		$day		= $_POST['day'];
		$month		= $_POST['month'];
		$year		= $_POST['year'];
	//	$dob 		= [ $day , $month , $year ];
		if($username == "" || $name == "" || $email == "" || $password == ""|| $repass == ""|| $gender == ""|| $day == ""|| $month == ""|| $year == ""){
			echo "invalid information...please try again!";
		}else{

			if($password == $repass){

				$user = [
							'name'		=>$name,  
							'email'		=>$email,
							'username'	=>$username,
							'password'	=>$password,
							'repass'    =>$repass,
							'gender' 	=>$gender,
							'day'		=>$day,
							'month'		=>$month,
							'year'		=>$year
							
						];

				$_SESSION['myuser'] = $user;
				header('location: login.html');
			}else{
				echo "password & re-type password mismatch...";
			}
		}
	}
?>

