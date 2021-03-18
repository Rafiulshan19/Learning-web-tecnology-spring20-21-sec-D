<?php
	session_start();
	
	if(isset($_POST['submit'])){
			
		$password	= $_POST['password'];
		$pass2 		= $_POST['pass2'];
		$repass		= $_POST['repass'];
			
		if($password == "" || $pass2 == "" || $repass == ""){
			echo " null submission...";
		}if($pass2 == $password){
			echo " New Password may not same";
		
		}if($pass2 != $repass){
			echo " "." password mismatch";
		}else{
			$user = $_SESSION['abc'];
			
			if($password == $user['password'] || $pass2 == $user['pass2'] || $repass == $user['repass']){
				
				$_SESSION['status'] = true;
				header('location: ../view/login.html');
			
			}else{ echo " oh!!!"; }
		}
	}
?>


