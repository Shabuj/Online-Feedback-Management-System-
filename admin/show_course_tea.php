<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_moderator.php?id='+id;
     }
}
</script>	


<?php
	echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
	echo "<tr>";
	
	echo "<th>S.No</th>";
	echo "<th>Course Title</th>";
	echo "<th>Course Teacher</th>";
	echo "<th>Update</th>";
	echo "<th>Delete</th>";
	echo "</tr>";
	
	$i=1;
	$que=mysqli_query($conn,"select * from tc");
	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['t_name']."</td>";
		echo "<td>".$row['t_course']."</td>";
		echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=edit_moderator'><span class='glyphicon glyphicon-pencil'style=color:green;></span></a></td>";
		
		
		echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:red;></span></a></td>";
		
		echo "</tr>";
		$i++;
	}
	
?>