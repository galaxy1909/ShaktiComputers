<?php include 'header.php' ; ?>
<script language="javascript" >
			function clearInputs()
			{
					document.getElementById('fname').value='';
					document.getElementById('lname').value='';
					document.getElementById('email').value='';
					document.getElementById('phone').value='';
					document.getElementById('photo').value='';
					document.getElementById('username').value='';
                    document.getElementById('password').value='';
					document.getElementById('cpassword').value='';
			}
      </script>
<div class="wrapper">
<div class="form">
<form method="POST" action="" name="admin"  enctype="multipart/form-data" style="max-width:500px;margin:auto">
  <h2 class="form-heading"><strong>Update Admin</strong></h2>
  <?php
  $id=$_REQUEST['eid'];
  include('dbconnection.php');
  $sql="select * from admin where Adminid='$id' ";
  $result=mysqli_query($con,$sql);
  $line=mysqli_fetch_array($result);
  if($_POST['btnsubmit']){
    $fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
$path=1;
		$flag=0;
		if(empty($fname))
		{
			echo "<p style=\"color:red\">Please Enter your firstname</p>";		
		}
		else if(empty($lname))
		{
			echo "<p style=\"color:red\">Please Enter your lastname</p>";		
		}
		else if(empty($email))
		{
			echo "<p style=\"color:red\">Please Enter Email.</p>";		
		}
		else if(empty($phone))
		{
			echo "<p style=\"color:red\">Password is not matched with Confirm Password</p>";		
		}
		else
		{   
			$path="../../images/".$_FILES['file']['name'];						
									if(file_exists("../../images/".$_FILES['file']['name']))
									 {
										echo "<p style=\"color:red; text-align:center; font-weight:bold\">File Name Already Exists. Please Rename the File and Try Again.</p>";
									 }
									else
									 { 
										$allowed =  array('gif','png','jpg','jpeg','JPG','PNG','GIF','JPEG');
										$filename = $_FILES['file']['name'];
										$ext = pathinfo($filename, PATHINFO_EXTENSION);
										if(!in_array($ext,$allowed))
										{
											 echo "<p style=\"color:red; text-align:center; font-weight:bold\">Not Compatible Format. Please upload only image file.</p>";
										}
										else{
										 move_uploaded_file($_FILES['file']['tmp_name'],"../../images/".$_FILES['file']['name']);
									}
		}	
    
			$con=mysqli_connect(@"localhost","root","","shakticomputer");
			$sql="UPDATE `admin` SET `FirstName` = '$fname' , `LastName` = '$lname' ,  `Email` = '$email'  , `PhoneNO` = '$phone' ,   `Photo` = '$path' WHERE `Adminid` = '$id' ;";
			if(mysqli_query($con,$sql))
							{
							echo "<h4 style=\"color:green\">Record Updated successfully!</h4>";
              header("Location:madmin.php");
              echo '<script>clearInputs();</script>'; 
							}
			else
							{
							echo "<h4 style=\"color:red\">Error !</h4>";
							}
  }
}
  ?>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input name="fname" id="fname"class="input-field" type="text" placeholder="First Name"  value="<?php echo $line['FirstName']; ?>" />
  </div>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input id="lname" name="lname" class="input-field" type="text" placeholder="Last Name" value="<?php echo $line['LastName']; ?>"/>
  </div>
  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input id="email" name="email" class="input-field" type="email" placeholder="Email" value="<?php echo $line['Email']; ?>"/>
  </div>
    <div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input id="phone" name="phone" class="input-field" type="text" placeholder="Phone" name="phone" onkeydown = "return isNumeric(event.keyCode);" onpaste = "return false;" value="<?php echo $line['PhoneNo']; ?>" >
  </div>
  <div class="input-container">
    <i class="fa fa-photo icon"></i>
    <input id="file"  name="file" class="input-field" type="file" placeholder="Upload Photo" value=""/>
  </div>

   <input type="submit" class="btn" id="btnsubmit" name="btnsubmit" onclick="return Admin();" value="Update Brand" />
</form>
</div>
 <?php include 'footer.php'; ?>
</div>