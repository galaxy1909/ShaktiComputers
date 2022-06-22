<?php include 'header.php' ; ?>

<div class="wrapper">
<div class="form">
<form method="POST" action="" name="technician" id="technician" enctype="multipart/form-data" style="max-width:500px;margin:auto">
  <h2 class="form-heading"><strong>Change Password</strong></h2>
  <?php
  include('dbconnection.php');
   session_start();
   $id=$_SESSION['admin'];
   $ps=$_POST['password'];
   $cps=$_POST['cpassword'];
       if($_POST['btnsubmit']){
        if(empty($cps) || empty($ps)){
          echo "<p style=\"color:red\">Please Enter Password or confirm Password!</p>";		
         }
         else{
       $sql="UPDATE `admin` SET `Passcode` = '$ps' where `Adminid` = $id";
       if(mysqli_query($con,$sql)){
        echo "<p style=\"color:green\">Password Updated Successfully</p>";
        echo '<script>clearInputs();</script>'; 
        header("Location:admin.php");
       }
       else{
        echo "<p style=\"color:red\">Error!</p>";		
       }
      }
   }
  ?>
  <script language="javascript" >
			function clearInputs()
			{
	        document.getElementById('password').value='';
					document.getElementById('cpassword').value='';
			}
      </script>
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input  name="password" id="password" class="input-field" type="password" placeholder=" New Password">
  </div>
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input  name="cpassword" id="cpassword" class="input-field" type="text" placeholder="Confirm Password">
  </div>
  <input type="submit" class="btn" id="btnsubmit" name="btnsubmit"  value="Submit" />
</form>
</div>
 <?php include 'footer.php'; ?>
</div>
