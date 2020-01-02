<?php
error_reporting(1);
    include('../dbconfig.php');
    extract($_POST);
    if(isset($save))
    {   
    
        mysqli_query($conn,"insert into courses(course_title,course_code,semister,t_id) VALUES('$title','$code','$sem','$teacher')");
        
    $subject ="New User Account Creation";
    $from="csepust@gmail.com";
    $message ="User name: ".$user_name." Password ".$pass;
    $headers = "From:".$from;
    mail($email,$subject,$message,$headers);
        
    $err="<font color='green'>New Courses Successfully Added.</font>";
    
    
}   

?>


<h1 class="page-header">Add Courses </h1>
<div class="col-lg-8" style="margin:15px;">
    <form method="post">
    
    <div class="control-group form-group">
        <div class="controls">
            <label><?php echo @$err;?></label>
        </div>
    </div>
    
    <div class="control-group form-group">
        <div class="controls">
            <label>Course Title:</label>
               <!-- <input type="text" value="<?php echo @$name;?>" name="name" class="form-control" required> -->
               <input type="text"  name="title" class="form-control" placeholder="Enter course title" required>


        </div>
    </div>
    
    <div class="control-group form-group">
        <div class="controls">
            <label>Course Code :</label>
                <input type="text"  name="code" placeholder="Enter code" class="form-control" required>
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
            <label>Select course teacher</label>
  <select name="teacher" class="form-control" placeholder="select teacher" required>
                    
                    <?php
//$sql=mysqli_query($conn,"select * from faculty where semester='".$users['semester']."'");
  $sql=mysqli_query($conn,"select * from faculty");
    while($r=mysqli_fetch_array($sql))
    {

    echo "<option value='".$r['id']."'>".$r['Name']."</option>";
    }
         ?>
            
                    
                    </select>
        </div>
    </div>
          
    
    
    <div class="control-group form-group">
        <div class="controls">
                <input type="submit" class="btn btn-success" name="save" value="Add New Courses">
        </div>
    </div>
    </form>


</div>