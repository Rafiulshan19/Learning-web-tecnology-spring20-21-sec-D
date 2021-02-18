
<!DOCTYPE html>
<html>
<head>
	<title>Date of Birth Input</title>
</head>
<body>
	<form method="post" action="">
		<fieldset>
			<legend>Date of Birth</legend>
			Date of Birth: <input type="date" name="dob" value="<?php if(isset($_POST['dob'])){ echo $_POST['dob'];} ?>"> <br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>