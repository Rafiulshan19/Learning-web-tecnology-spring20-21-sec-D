<?php

    if(isset($_POST['submit']))
    {
    if(!empty($_POST['select']))
     {
        $selected = $_POST['select'];
        echo 'Choose: ' .$selected;
    } 
    else 
    {
        echo 'select:';
    }
    
?>

<html>
<head>
	<title>Blood Group Input</title>
</head>
<body>
	<form method="post" action="bloodCheck.php" >
	
	<label>Blood Group</label>
	<select name="select">
	<option>A+</option>
	<option>B+</option>
	<option>AB</option>
	<option>A-</option>
	<option>B-</option>
	<option>AB+</option>
	</select>
	<hr>
<input type="submit" name="submit" value="Choose option">

</form>

</body>
</html>