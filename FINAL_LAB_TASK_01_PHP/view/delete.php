<?php
	$title = "Delete Page";
	require_once('../model/userModel.php');
	//include_once('../controller/delYes.php');

	echo $_GET['id'];
?>

	<fieldset style="width:350px">
		<legend>Confirmation</legend>
			<table>
					<tr>Do you want to delete the user?</tr>
					
					<tr>
						<td></td>
						<td>
							<input type="submit" name="submit" value="Yes">
							
						</td>
						<td>
							<input type="submit" name="submit" value="No">
						</td>
					</tr>
				</table>
	</fieldset>

	
<?php
	$status = deleteUser($id);
				
				if($status == Yes){
					header('location: ../view/user_list.php');
				}else{
					echo "Sorry";
				}

?>