<?php
error_reporting(1);
    include('../dbconfig.php');
    extract($_POST);
    if(isset($save))
    { 

   $sql= mysqli_query($conn,"select * from tc where t_name='$teacher' and t_course='$course' ");
    $r=mysqli_num_rows($sql);
   

    if($r==true)
    {
    	 echo "<span style='color:red; font-size:25px;'>This  Course is already Existed.!!!.</span>";
    
    }  
    else
    {
    
        mysqli_query($conn,"insert into tc(t_name,t_course) VALUES('$teacher','$course')");
        
    //$subject ="New User Account Creation";
  //  $from="csepust@gmail.com";
    //$message ="User name: ".$user_name." Password ".$pass;
   // $headers = "From:".$from;
   // mail($email,$subject,$message,$headers);
        
    $err="<font color='green'>New Courses Successfully Added.</font>";
    }
    
}   

?>


<h1 class="page-header">Select Course Teacher</h1>
<div class="col-lg-8" style="margin:15px;">
    <form method="post">
    
    <div class="control-group form-group">
        <div class="controls">
            <label><?php echo @$err;?></label>
        </div>
    </div>


    <div class="control-group form-group">
        <div class="controls">
            <label>Select Course Title :</label>
  <select name="course" class="form-control" placeholder="select course" required>
              <?php 
             $con=mysqli_query($conn,"select * from courses");


             while($res=mysqli_fetch_assoc($con))
             {
             ?>
                    <option> <?php echo $res['course_title']; ?></option>
              <?php } ?>
                    </select>
        </div>
    </div>
    

 
    <div class="control-group form-group">
        <div class="controls">
            <label>Select Course Teacher :</label>
  <select name="teacher" class="form-control" placeholder="select teacher" required>
                  
                  <?php 
$con=mysqli_query($conn,"select * from faculty");


while($res=mysqli_fetch_assoc($con))
{
?>  
                    <option> <?php echo $res['Name']; ?></option>
                      <?php } ?>
                    </select>
        </div>
    </div>
  
    

    

          
    
    
    <div class="control-group form-group">
        <div class="controls">
                <input type="submit" class="btn btn-success" name="save" value="Add New Course Teacher">
        </div>
    </div>
    </form>


</div>