<?php
	
	if(isset($_POST['submit'])){

		$email 		= $_POST['email'];
		if($email == ""){
			echo "null submission...";
		}else{
			echo "success";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Email Input</title>
</head>
<body>
	<form method="post" action="">
		<fieldset>
			<legend>Email</legend>
			Email: <input type="email" name="email" value=""> <br>
			<hr>
			<input type="submit" name="submit" value="Submit">
			<br>
		</fieldset>
	</form>
	
</body>
</html>