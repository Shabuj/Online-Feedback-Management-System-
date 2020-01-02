<?php 
extract($_POST);
if(isset($save))
{

	if($e=="" || $p=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{

$sql=mysqli_query($conn,"select * from moderator where name='$e' and password='$p'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$_SESSION['moderator_login']=$e;
header('location:moderator');
}

else
{

$err="<font color='red'>Invalid login details</font>";

}
}
}

?>
<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">

<form method="post">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><h2>Moderator Login Form</h2></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4"> User Name :</div>
		<div class="col-sm-5">
		<input type="text" name="e" class="form-control" placeholder="Enter Username.." /></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4"> Password :</div>
		<div class="col-sm-5">
		<input type="password" name="p" class="form-control" placeholder="Enter password.." /></div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4"></div>
		<div class="col-sm-8">
		<input type="submit" value="Login" name="save" class="btn btn-info"/>
		
		</div>
	</div>
</form>	
</div>
</div>