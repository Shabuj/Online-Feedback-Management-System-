<?php
	extract($_POST);
	if(isset($save))
	{	
	
	mysqli_query($conn,"update moderator set name='$n',roll	='$roll',semister='$sem',	password='$pass' where id='".$_GET['id']."'");	

$err="<font color='green'>Moderator Details updated</font>";

	}

$con=mysqli_query($conn,"select * from moderator where id='".$_GET['id']."'");

$res=mysqli_fetch_assoc($con);	

?>


<h1 class="page-header">Update  Moderator</h1>
<div class="col-lg-8" style="margin:15px;">
	<form method="post">
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label><?php echo @$err;?></label>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Name:</label>
            	<input type="text" value="<?php echo @$res['name'];?>" name="n" class="form-control" required>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Roll:</label>
            	<input type="text" value="<?php echo @$res['roll'];?>" name="roll" class="form-control" required>
        </div>
   	</div>
 	
	<div class="control-group form-group">
        <div class="controls">
            <label>Semester:</label>
  <input type="text"  name="sem" value="<?php echo @$res['semister'];?>" class="form-control" required>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Password :</label>
          <input type="text" value="<?php echo @$res['password'];?>"  name="pass" class="form-control" required>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
            	<input type="submit" class="btn btn-success" name="save" value="Update  Moderator">
        </div>
  	</div>
	</form>


</div>