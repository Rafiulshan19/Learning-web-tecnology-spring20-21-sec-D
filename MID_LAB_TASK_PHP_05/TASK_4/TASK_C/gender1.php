
<!DOCTYPE html>
<html>
<head>
	<title>Gender Input</title>
</head>
<body>
	<form method="post" action="">
		<fieldset>
		<tr>
			<legend>Gender</legend>
			<td>
			Male: <input type="radio" name="gender" value="<?php if(isset($_POST['gender'])){ echo $_POST['male'];} ?>"> 
			Female: <input type="radio" name="gender" value="<?php if(isset($_POST['gender'])){ echo $_POST['female'];} ?>"> 
			Other: <input type="radio" name="gender" value="<?php if(isset($_POST['gender'])){ echo $_POST['other'];} ?>"> 
			</td>
			<td><hr>	
			<input type="submit" name="submit" value="Submit">
			</td>
		
		
		</tr>
		</fieldset>
	</form>
	
</body>
</html>

