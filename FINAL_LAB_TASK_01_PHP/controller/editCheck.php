<?php
	session_start();
	require_once('../model/userModel.php');
	
	//$user = getAllUser();

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$name 		= $_POST['name'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];

		if($username == ""  || $password == ""){
			echo "invalid information...please try again!";
		}else{

				$user = [
							
							'username'	=>$username, 
							'email'		=>$email, 
							'password'	=>$password,
							'type'		=>'user'
						];

				$status = updateUser($user);
				
				if($status){
					echo "ok";
				}else{
					echo "Db error";
				}
			
		}
	}
?>


