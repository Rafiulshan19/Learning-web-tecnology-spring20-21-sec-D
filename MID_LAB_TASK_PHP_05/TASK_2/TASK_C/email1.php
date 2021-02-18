
<!DOCTYPE html>
<html>
<head>
	<title>Email Input</title>
</head>
<body>
	<form method="post" action="">
		<fieldset>
			<legend>Email</legend>
			Email: <input type="email" name="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email'];} ?>"> <br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>