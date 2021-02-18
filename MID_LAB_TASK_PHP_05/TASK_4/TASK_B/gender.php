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

<!DOCTYPE html>
<html>
<head>
	<title>Gender Input</title>
</head>
<body>
	<form method="post" action="">
		<fieldset>
			<legend>Gender</legend>
				<tr>
					<td>
						<input type="radio" name="gender" value="male"> Male
						<input type="radio" name="gender" value="female"> Female
						<input type="radio" name="gender" value="other"> Other 
					</td>				
					<td>
					<hr>
						<input type="submit" name="button" value="Submit"><br>
					</td>
					
				</tr>
					
		</fieldset>
	</form>
	
</body>
</html>


