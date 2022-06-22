<?php include 'header.php' ; ?>
<script language="javascript" >
			function clearInputs()
			{
					document.getElementById('fname').value='';
					document.getElementById('lname').value='';
					document.getElementById('address').value='';
					document.getElementById('pincode').value='';
					document.getElementById('email').value='';
					document.getElementById('phone').value='';
                    document.getElementById('photo').value='';
		            document.getElementById('doj').value='';
					document.getElementById('username').value='';
					document.getElementById('password').value='';
					document.getElementById('cpassword').value='';
			}
      </script>
<div class="wrapper">
<div class="form">
<form method="POST" action="" name="technician" id="technician" enctype="multipart/form-data" style="max-width:500px;margin:auto">
  <h2 class="form-heading"><strong>Register New Technician</strong></h2>
  <?php
	if($_POST['btnsubmit'])
	{   
		include('dbconnection.php');
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
        $add=$_POST['address'];
		$pin=$_POST['pincode'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];					
		$doj=$_POST['doj'];
		$uname=$_POST['username'];
		$p=$_POST['password'];
		$cp=$_POST['cpassword'];
		$prof=$_POST['prof'];
		$rat=$_POST['rating'];
		$path=1;
		$s=$_POST['salary'];
		if(empty($fname))
		{
			echo "<p style=\"color:red\">Please Enter your firstname</p>";		
		}
		else if(empty($lname))
		{
			echo "<p style=\"color:red\">Please Enter your lastname</p>";		
		}
    else if(empty($add))
		{
			echo "<p style=\"color:red\">Please Enter your lastname</p>";		
		}
    else if(empty($pin))
		{
			echo "<p style=\"color:red\">Please Enter your lastname</p>";		
		}
    else if(empty($email))
		{
			echo "<p style=\"color:red\">Please Enter your Email</p>";		
		}
    else if(empty($phone))
		{
			echo "<p style=\"color:red\">Please Enter your Phone No.</p>";		
		}
    else if(empty($uname))
		{
			echo "<p style=\"color:red\">Please Enter your UserName</p>";		
		}
		else if(empty($p)||empty($cp))
		{
			echo "<p style=\"color:red\">Please Enter Password or Confirm Password</p>";		
		}
		else if($p!=$cp)
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
			$sql="INSERT INTO `technician` (`TechnicianId`, `FirstName`, `LastName`, `Address`, `Pincode`, `Email`, `Phone`, `Photo`,`Profession`,`Salary`, `DOJ`, `Username`, `Password`, `st`,`Rating`,`A_Status`) VALUES (NULL, '$fname', '$lname', '$add', '$pin', '$email', '$phone', '$path','$prof','$s','$doj', '$uname', '$p', 1,'$rat',0);";
			if(mysqli_query($con,$sql))
							{	
							echo "<h4 style=\"color:green\">Record inserted successfully!</h4>";
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
    <input name="fname" id="fname"class="input-field" type="text" placeholder="First Name" />
  </div>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input id="lname" name="lname" class="input-field" type="text" placeholder="Last Name" />
  </div>

  <div class="input-container">
    <i class="fa fa-address-card icon"></i>
    <input  name="address" id="address" class="input-field" type="textarea" placeholder="Address"/>
  </div>
  <div class="input-container">
    <i class="fa fa-pinterest-p icon"></i>
    <input  name="pincode" id="pincode" class="input-field" type="text" placeholder="Pincode"  onkeydown = "return isNumeric(event.keyCode);" onpaste = "return false; " />
  </div>
      <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input id="email" name="email" class="input-field" type="email" placeholder="Email"/>
  </div>
    <div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input id="phone" name="phone" class="input-field" type="text" placeholder="Phone" name="phone" onkeydown = "return isNumeric(event.keyCode);" onpaste = "return false;" >
  </div>
  <div class="input-container">
    <i class="fa fa-photo icon"></i>
    <input type="file" id="file"  name="file" class="input-field" placeholder="Upload Photo"/>
  </div>
      <div class="input-container">
    <i class="fa fa-datetime icon"></i>
    <input  name="doj" id="doj" class="input-field" type="date" placeholder="Join Date"  onkeydown = "return isNumeric(event.keyCode);" onpaste = "return false; " />
  </div>
  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input id="prof" name="prof" class="input-field" type="text" placeholder="Profession" value="<?php echo $line['Profession']; ?>"/>
  </div>
  <div class="input-container">
    <i class="fa fa-pinterest-p icon"></i>
    <input  name="salary" id="salary" class="input-field" type="text" placeholder="Salary"  onkeydown = "return isNumeric(event.keyCode);" onpaste = "return false; " />
  </div>
  <div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input id="rating" name="rating" class="input-field" type="text" placeholder="Rating" name="Rating" onkeydown = "return isNumeric(event.keyCode);" onpaste = "return false;" value="<?php echo $line['Rating']; ?>" >
  </div>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input  name="username" id="username"class="input-field" type="text" placeholder="Username">
  </div>  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input name="password" id="password" class="input-field" type="password" placeholder="Password"/>
  </div>
   <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input  name="cpassword" id="cpassword" class="input-field" type="password" placeholder="Confirm Password">
  </div>
  <input type="submit" class="btn" id="btnsubmit" name="btnsubmit" onclick="return Technician();" value="Create Technician" />
</form>
</div>
 <?php include 'footer.php'; ?>
</div>




