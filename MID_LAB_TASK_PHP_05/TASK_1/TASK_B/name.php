<?php
	
	if(isset($_POST['submit'])){

		$name 		= $_POST['myname'];
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
	<title>Name Input</title>
</head>
<body>
	<form method="post" action="">
		<fieldset>
			<legend>Name</legend>
			Name: <input type="text" name="myname" value=""> <br>
			<hr>
			<input type="submit" name="submit" value="Submit">
			<br>
		</fieldset>
	</form>
	
</body>
</html>