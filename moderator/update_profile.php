<?php
	extract($_POST);
	if(isset($save))
	{	
	
	mysqli_query($conn,"update moderator set name='$n',semister='$sem',	password='$pass' roll='$roll' where name='".$_SESSION['moderator_login']."'");	

$err="<font color='green'>Faculty Details updated</font>";

	}

$con=mysqli_query($conn,"select * from moderator where name='".$_SESSION['moderator_login']."'");

$res=mysqli_fetch_assoc($con);	
//print_r($res);
?>


<!--<h3 class="page-header">Update Profile</h3>
--><div class="col-lg-8" style="margin:15px;">
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
        	<label>Password :</label>
          <input type="text" value="<?php echo @$res['password'];?>"  name="pass" class="form-control" required>
        </div>
    </div>
	
	
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Semester</label>
  <input type="text"  name="sem" value="<?php echo @$res['semister'];?>" class="form-control" required>
        </div>
    </div>
                  
	
	
	<div class="control-group form-group">
    	<div class="controls">
            	<input type="submit" class="btn btn-success" name="save" value="Update  Profile">
        </div>
  	</div>
	</form>


</div>