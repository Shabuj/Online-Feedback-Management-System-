<?php 
extract($_POST);
if(isset($update))
{
//dob


$query="update user set name='$n', roll='$roll', email='$e', semister='$sem' where email='".$_SESSION['user']."'";

//$query="insert into user values('','$n','$e','$pass','$mob','$gen','$hob','$imageName','$dob',now())";
mysqli_query($conn,$query);



$err="<font color='blue'>Profie updated successfully !!</font>";


}


//select old data
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='".$_SESSION['user']."'");
$res=mysqli_fetch_assoc($sql);

?>
<h2 align="center">Update Your Profile</h2>

		<form method="post">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Enter Your name</td>
					<Td><input class="form-control" value="<?php echo $res['name'];?>"  type="text" name="n"/></td>
				</tr>


				<tr>
					<td>Enter Your Roll:</td>
					<Td><input class="form-control" value="<?php echo $res['roll'];?>"  type="text" name="roll"/></td>
				</tr>


				<tr>
					<td>Enter Your email </td>
					<Td><input class="form-control" type="email" readonly="true" value="<?php echo $res['email'];?>"  name="e"/></td>
				</tr>
				
				
				
				<tr>
					<td>Select Your Semester</td>
					<Td><select name="sem" class="form-control"  value="<?php echo $res['semister'];?>"required>
					
					<option>i</option>
					<option>ii</option>
					<option>iii</option>
					<option>iv</option>
					<option>v</option>
					<option>vi</option>
					<option>vii</option>
					<option>viii</option>
					</select>
					</td>
				</tr>
				
				<tr>
					
					
<Td colspan="2" align="center">
<input type="submit" class="btn btn-default" value="Update My Profile" name="update"/>
<input type="reset" class="btn btn-default" value="Reset"/>
				
					</td>
				</tr>
			</table>
		</form>
	