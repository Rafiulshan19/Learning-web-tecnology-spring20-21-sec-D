<?php
	
	if(isset($_POST['submit'])){

		$name 		= $_POST['gender'];
		$value		= $_POST['male'];
		$value		= $_POST['female'];
		$value		= $_POST['other'];
		
		if($name == "gender" && $value =="male"){
			echo "male";
		}elseif($name == "gender" && $value =="female"){
			echo "female";
		}else{
			echo "other";
		}
	}
?>