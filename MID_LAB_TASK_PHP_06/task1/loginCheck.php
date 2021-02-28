<?php
	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" ||$password == ""){
			echo "null submission";
		
		}else{         //A
			for($i = 0;$i <strlen($username); $i++){
				if(($username[$i] >='A' && $username[$i] <='Z')||($username[$i] >= 'a'&& $username[$i] <= 'z')|| ($username[$i] >= 0 && $username[$i] <= 9)||
				($username[$i] === '-')|| ($username[$i] === '_')){
					echo "success";
			break;
				}else{
					echo "User Name can contain alpha numeric characters, period, dash or underscore only!";
						break;
				}		//B
			}if(strlen($username) < 2){
				echo "User Name must contain at least two (2) characters!";
			}			//C
			if(strlen($password) < 8){
				echo "Password must not be less than eight (8) characters!";
			}			//D
			for($i = 0;$i<strlen($password); $i++){
				if(($password[$i] ='@')||($password[$i]='#')|| ($password[$i]='$')|| ($password[$i]='%')){
					echo " okk";
						break;
			}else{
				echo "Password must contain at least one of the special characters (@, #, $, %)"; 
					break;
				}
		}

		}
	}	
 ?>