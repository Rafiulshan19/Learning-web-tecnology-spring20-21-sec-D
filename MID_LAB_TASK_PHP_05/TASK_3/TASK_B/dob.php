<?php
	
	if(isset($_POST['submit'])){

		$name 		= $_POST['dob'];
		if($name == ""){
			echo "null submission...";
		}else{
			echo "success";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Date of Birth Input</title>
</head>
<body>
	<form method="post" action="">
		<fieldset>
			<legend>Date of Birth</legend>
			Date of Birth: <input type="date" name="dob" value=""> <br>
			<hr>
			<input type="submit" name="submit" value="Submit">
			<br>
		</fieldset>
	</form>
	
</body>
</html>

