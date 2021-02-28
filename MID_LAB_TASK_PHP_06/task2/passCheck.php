<?php

	if(isset($_POST['submit'])){
		
		$pass1 = $_POST['pass1'];
		$pass2 = $_POST['pass2'];
		$repass = $_POST['repass'];
		
		if($pass2 == $pass1){
			echo "New Password may not same";
		
		}
		if($pass2 != $repass){
			echo " "."password mismatch";
		}else{
			echo "submitted";
		}
	}	
	
 ?>

