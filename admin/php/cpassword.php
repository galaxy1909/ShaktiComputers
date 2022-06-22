<?php include 'header.php' ; ?>

<div class="wrapper">
<div class="form">
<form method="POST" action="" name="technician" id="technician" enctype="multipart/form-data" style="max-width:500px;margin:auto">
  <h2 class="form-heading"><strong>Change Password</strong></h2>
  <?php
   session_start();
   $id=$_SESSION['admin'];
   $sql="select * from admin where Adminid='$id'";
   $result=mysqli_query($con,$sql);
   $line=mysqli_fetch_array($result);
   $ps=$_POST['cpassword'];
   if($_POST['btnsubmit']){
       if(empty($ps)){
        echo "<p style=\"color:red\">Please Enter your Password</p>";		
    }
    else{
        if($ps == $line['Passcode']){
            header("Location:npassword.php");
        }
        else{
            echo "<p style=\"color:red\">Please Enter Correct Password</p>";		
        }
    }
   }
  ?>
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input  name="cpassword" id="cpassword" class="input-field" type="text" placeholder="Password">
  </div>
  <input type="submit" class="btn" id="btnsubmit" name="btnsubmit"  value="Submit" />
</form>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
 <?php include 'footer.php'; ?>
</div>
