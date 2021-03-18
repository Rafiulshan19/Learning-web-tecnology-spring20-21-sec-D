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
		<fieldset style="width:90%;">
			<legend><b>PROFILE</b></legend>
			<table>
				<tr>
					<td>
						<tr>Name:</tr>
						Bob<hr>
				
						<tr> Email :</tr>
						bob@gmail.com
						<hr>
				
						<tr> Date of Birth :</tr>
						19/09/1998<hr>
						<tr> Biodata :</tr>
							<hr>
						<tr> Contact Number :</tr>
						019*******2<hr>
					</td>
					<td>
						<img src="../assets/avatar2.png" width="100px" height="80px"><br>
						<a href="propic.php">Change Profile Picture </a>
					</td>
				</tr>
				
			</table>
			<a href="editP.php"> Edit Profile </a>
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

