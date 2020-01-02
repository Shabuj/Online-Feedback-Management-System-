<?php 
session_start();
include('../dbconfig.php');
error_reporting(1);

$user= $_SESSION['moderator_login'];
if($user=="")
{header('location:../index.php');}
$sql=mysqli_query($conn,"select * from moderator where name='$user' ");
$users=mysqli_fetch_assoc($sql);
?>


<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_student.php?id='+id;
     }
}
</script>	


<?php
	echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
	echo "<tr>";
	
	echo "<th>S.No</th>";
	echo "<th>Name</th>";
	echo "<th>Roll</th>";
	echo "<th>Email</th>";
	echo "<th>Semester</th>";
	
	echo "<th>Delete</th>";
	echo "<th>Status</th>";
	echo "</tr>";
	
	$i=1;
	$sql=mysqli_query($conn,"select * from user where semister= '".$users['semister']."'");
	
	while($row=mysqli_fetch_array($sql))
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['roll']."</td>";
		
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['semister']."</td>";
	
		
		
		echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:red;></span></a></td>";
		
		
		
		if($row['status'])
		{
		echo "<td><a href='update_status.php?user_id=".$row['id']."&status=".$row['status']."'><span class='glyphicon glyphicon-user' style=color:red;></span></a></td>";
		}
		else
		{
		echo "<td><a href='update_status.php?user_id=".$row['id']."&status=".$row['status']."'><span class='glyphicon glyphicon-user' style=color:green;></span></a></td>";
		}
		echo "</tr>";
		$i++;
	}
	
?>

	