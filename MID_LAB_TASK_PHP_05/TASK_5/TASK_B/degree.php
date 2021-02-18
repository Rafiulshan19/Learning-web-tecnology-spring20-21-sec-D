<?php

	if(isset($_POST['submit']))
	{

		$name = $_POST['degree'];

		if($name == ""){
			echo "null submission";
		}else{
			echo "success...";
		}
	}else{
		echo "Invalid request...";
	}
	
?>

<html>

<head>
	<title>Degree Input</title>
</head>
<body>

	<form method="post" action="degreeCheck.php">
		<fieldset>
			<legend>Degree</legend>
			 <input type="Checkbox" name="" value="">SSC
			   <input type="Checkbox" name="" value="">HSC
			   <input type="Checkbox" name="" value="">BSc
			   <input type="Checkbox" name="" value="">MSc

			   <br>
				<hr>
				<input type="submit" name="submit" value="Submit">
				
		</fieldset>
	</form>
</body>
</html>