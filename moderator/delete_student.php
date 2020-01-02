<?php
include('../dbconfig.php');
	
	$info=$_GET['id'];
	
	mysqli_query($conn,"delete from user where id='$info'");
	header('location:index.php?page=show');
?>