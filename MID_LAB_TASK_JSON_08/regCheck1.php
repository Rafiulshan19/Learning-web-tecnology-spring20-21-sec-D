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
							'name'		=> 'shan',  
							'email'		=> 'shan@aiub.edu' ,
							'username'	=> 'shan1',
							'password'	=> 123,
							'repass'    => 123,
							'gender' 	=> 'male',
							'day'		=> 10,
							'month'		=> 11,
							'year'		=> 1999
							
						];
				$json = json_encode($user);
				echo $json;
				
				//header('location: login.html');
			}else{
				echo "password & re-type password mismatch...";
			}
		}
	}
?>

