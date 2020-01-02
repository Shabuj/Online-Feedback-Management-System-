<?php 
session_start();
include('../dbconfig.php');
error_reporting(1);

$user= $_SESSION['faculty_login'];

$sql=mysqli_query($conn,"select * from faculty where Name='$user' ");
$users=mysqli_fetch_assoc($sql);
?>



<?php
	echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:5px ;>";
	
	
	
	
	$sql=mysqli_query($conn,"select * from faculty where id='".$users['id']."'");
	
	while($row=mysqli_fetch_array($sql))
	{
		echo "<tr>";
		
		if($row['status'])
		{
		echo "<td width='100%' align='center'><a href='update_status.php?user_id=".$row['id']."&status=".$row['status']."'> <span style='color:green; font-size:25px; text-align:center'>START</span>;</a></td>";
		}
		else
		{
		echo "<td width='100%' align='center'><a href='update_status.php?user_id=".$row['id']."&status=".$row['status']."'> <span style='color:red; font-size:25px; text-align:center;'>STOP</span>;</a></td>";
		}
		echo "</tr>";
		
	}
	
?>

	