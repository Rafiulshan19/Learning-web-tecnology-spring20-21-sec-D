<?php
	$title = "Home page";
	include('header.php');
?>
<table border="1"  width="100%">
 	<tr height="100px">
		<td colspan="3" align="right">
			Logged in as <a href=""> <?php echo $_SESSION['abc']['username']?> |</a><a href="../controller/logout.php"> Logout</a>
		</td>
	</tr>
	<tr colspan="3" height="450px">
		<td width="200px">
	<div id="nav_bar">
				<b>My Account</b> 
				<br>
				<br>
				<hr>
		<li><a href="home.php"> Home </a>	</li>
		<li><a href="viewP.php">View Profile</a></li> 
		<li><a href="editP.php">Edit Profile</a></li> 
		<li><a href="changePass.php">Change Password</a></li>
		<li><a href="propic.php">Change Profile Picture</a></li>
		<li><a href="viewJob.php">View Your Jobs</a></li>	
		<li><a href="contact.php">Contact</a></li>
		<li><a href="../controller/logout.php">Logout</a></li> <br>
	</div>
	</td>
	<td colspan="3">
	<div id="page_title">
		<form method="post" action=""> 

		<fieldset style="width:95%;">
			<legend><b>View Worker Request Details</b></legend>

		<form method="post" action="">

		<fieldset style="width:80%">
			<table>
				<tr>
					<td><b>Task Allotted</b></td> <td>:</td>
					<td>Machine Cutting of Crops</td>
				</tr>
				
				<tr>
					<td><b>Worker Profile</b></td><td>:</td>
					<td>Hello, this</td>
				</tr>

				<tr>
					<td><b>Worker Detail</b></td><td>:</td>
					<td>
						Jhon
					<td>
				</tr>

				<tr>
					<td><b>Work Period</b></td><td>:</td>
					<td>2021-01-15 to 2021-07-16</td>
				</tr>
				<tr>
					<td><b>Work Location</b></td><td>:</td>
					<td>Rangpur, North Bangle, Bangladesh</td>
				</tr>
				<tr>
					<td><b>Incentive</b></td> <td>:</td> 
					<td>12,000tk</td>
				</tr>
				<tr>
					<td><b>Status</b></td><td>:</td>
					<td>Apporved						
					</td>
					<td align="right">
						<fieldset>change status
						<select name="status">
							<option value="pending">Pending</option>
							<option value="apporved">Apporved</option>
							<option value="select" selected>Apporved</option>
						</select>
						</fieldset>
					</td>	
				</tr>				
				
			</table>
		</fieldset>
	</form>
	<br>
	<input type="submit" name="update" value="update">
			<br><br>
		
		</fieldset>
	</form>		
	</div>
	</td>

	</tr>
	<div id="main_content">
		<br>
		<br>
		<br>
	</div>
	
</table>
<?php include('footer.php') ?>
