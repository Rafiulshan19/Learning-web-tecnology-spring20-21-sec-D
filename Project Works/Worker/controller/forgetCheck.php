<?php
	session_start();
	
	if(isset($_POST['submit'])){
			
		$email	=	$_POST['email'];
			
		if($email == ""){
			echo "Null Submission";
		}else{
			$user = $_SESSION['abc'];
			
			if($email == $user['email']){
				
				$_SESSION['status'] = true;
				header('location: ../view/login.html');
			
			}else{ echo "no"; }
		}
	}
?>

