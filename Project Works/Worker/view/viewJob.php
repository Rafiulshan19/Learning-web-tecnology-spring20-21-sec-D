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
			<legend><b>View Recruitment Details</b></legend>
			<table>
				
				<tr>
					<td align="left">Show:</td>
					<td align="left">
						<select name="dept">
							<option value="2no">2</option>
							<option value="5no">5</option>
							<option value="10no" selected>10</option>
						</select>
					</td>
				</tr>		
			</table>
			<br>
			<table border="1">
			<thead>
				<tr>
					<th>Profile</th><th>Date</th><th>Task Allotted</th><th>Work Location</th><th>Status</th><th>Action</th>
				</tr>
			</thead>
			<tbody>	
				<tr> 
					<td>Worker- Jhon <br>Farmer- Rokon</td>
					<td>2021-01-15 to 2021-07-16 </td> 
					<td>Machine Cutting Of  Crops</td>
					<td>Rangpur, North Bangle, Bangladesh</td>
					<td>Seller-Approver<br>Worker- No </td> 
					<td><a href="viewReq1.php">View</a></td>
				</tr>
				<tr>
					<td>Worker- Jubair <br>Farmer- Taleb</td>
					<td>2021-01-17 to 2021-07-27 </td> 
					<td>Machine Task</td>
					<td>Rangpur, North Bangle, Bangladesh</td>
					<td>Seller-Approver<br>Worker- No </td> 
					<td><a href="viewReq2.php">View</a></td>
				</tr>
			</tbody>
			</table>
			<br><br>
			<a href="">Next</a>
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
