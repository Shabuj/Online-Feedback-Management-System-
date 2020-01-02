<?php
error_reporting(1);
    include('../dbconfig.php');
    extract($_POST);
    if(isset($save))
    {   
    
        mysqli_query($conn,"insert into moderator(name,roll,semister,password) VALUES('$name','$roll','$sem','$pass')");
        
    $subject ="New User Account Creation";
    $from="csepust@gmail.com";
    $message ="User name: ".$user_name." Password ".$pass;
    $headers = "From:".$from;
    mail($email,$subject,$message,$headers);
        
    $err="<font color='green'>New Moderator Successfully Added.</font>";
    
    
}   

?>


<h1 class="page-header">Add Moderator</h1>
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
               <!-- <input type="text" value="<?php echo @$name;?>" name="name" class="form-control" required> -->
               <input type="text"  name="name" class="form-control" placeholder="Enter Moderator name" required>


        </div>
    </div>
    
    <div class="control-group form-group">
        <div class="controls">
            <label>Roll :</label>
                <input type="text"  name="roll" placeholder="Enter roll" class="form-control" required>
        </div>
    </div>
    

    <div class="control-group form-group">
        <div class="controls">
            <label>Semester</label>
  <select name="sem" class="form-control" placeholder="select semister" required>
                    
                    <option>i</option>
                    <option>ii</option>
                    <option>iii</option>
                    <option>iv</option>
                    <option>v</option>
                    <option>vi</option>
                    <option>vii</option>
                    <option>viii</option>
                    </select>
        </div>
    </div>

     <div class="control-group form-group">
        <div class="controls">
            <label>Password :</label>
                <input type="password"   name="pass" placeholder="Enter password" class="form-control" required>
        </div>
    </div>
                  
    
    
    <div class="control-group form-group">
        <div class="controls">
                <input type="submit" class="btn btn-success" name="save" value="Add New Moderator">
        </div>
    </div>
    </form>


</div>