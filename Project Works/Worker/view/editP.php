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
		<li><a href="../controller/logout.php">Logout</a></li> <br>>	
	</div>
	</td>
	<td colspan="3">
	<div id="page_title">
		<form method="post" action=""> 
		<fieldset style="width:90%;">
			<legend><b>EDIT PROFILE</b></legend>
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name" value="Bob" ></td>
				<tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="email" value="bob@aiub.edu"> </td>
									<tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
				</tr>
				<tr>
					<td>Biodata:</td>
					<td><input type="text" name="bio" value=""> </td>
									<tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
				</tr>
				<tr>
					<td>Contact Number:</td>
					<td><input type="text" name="con" value="019*******2"> </td>
									<tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
				</tr>
				<tr>
					<td>Date of Birth:</td>
					<td><input type="date" name="dob" value="23/12/1999">
						
				<tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                </tr>
						
					</td>
				</tr>
			</table>
			
			<input type="submit" name="submit" value="Submit"><br>
			<br>
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
