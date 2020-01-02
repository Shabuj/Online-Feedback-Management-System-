<?php
include('../dbconfig.php');
	
	$user_id=$_GET['user_id'];
	$status=$_GET['role'];
	if($status)
	{
	mysqli_query($conn,"update moderator SET status='0' where id='$user_id'");
	header('location:dashboard.php?info=show_moderator');
	}
	else
	{
	mysqli_query($conn,"update moderator SET status='1' where id='$user_id'");
	header('location:dashboard.php?info=show_moderator');
	}
	
	?>