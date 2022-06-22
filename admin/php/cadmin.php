<?php include 'header.php' ; ?>
<?php include 'dbconntection.php'; ?>
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
<form method="POST" action="" name="admin" style="max-width:500px;margin:auto">
  <h2 class="form-heading"><strong>Register New Admin </strong></h2>
  <?php
	if($_POST['btnsubmit'])
	{   $timezone = new DateTimeZone("Asia/Kolkata");
        $date = new DateTime();
        $date->setTimezone($timezone);
        $d= $date->format('Y-m-d h:i:s');
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$uname=$_POST['username'];
		$p=$_POST['password'];
		$cp=$_POST['cpassword'];
		$flag=0;
		if(empty($fname))
		{
			echo "<p style=\"color:red\">Please Enter your firstname</p>";		
		}
		else if(empty($lname))
		{
			echo "<p style=\"color:red\">Please Enter your lastname</p>";		
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
										$allowed =  array('gif','png','jpg','jpeg','JPG','PNG','GIF','JPEG','jfif','JFIF');
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
			$sql="INSERT INTO `admin` (`Adminid`, `FirstName`, `LastName`, `Email`, `PhoneNo`, `Photo`, `Regdate`, `Username`, `Passcode`) VALUES (NULL,'$fname','$lname','$email','$phone','$path','$d','$uname','$p');";
			$q="select * from admin";
			$result=mysqli_query($con,$q);
			if($uname){		
			while($line=mysqli_fetch_array($result))
						{
							if($line['Username']==$uname)
							{
								echo "<h4 style=\"color:red\">This username already exists!</h4>";
								$flag=1;
							}
						}
			}
			
			if($flag == 0){
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
	}
  ?>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input name="fname" id="fname"class="input-field" type="text" placeholder="First Name"  value="<?php if(isset($_POST['fname'])) echo $_POST['fname'];?>" />
  </div>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input id="lname" name="lname" class="input-field" type="text" placeholder="Last Name" value="<?php if(isset($_POST['lname'])) echo $_POST['lname']; ?>"/>
  </div>
  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input id="email" name="email" class="input-field" type="email" placeholder="Email" value="<?php if(isset($_POST['email'])) echo $_POST['emails']; ?>"/>
  </div>
    <div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input id="phone" name="phone" class="input-field" type="text" placeholder="Phone" name="phone" onkeydown = "return isNumeric(event.keyCode);" onpaste = "return false;" value="<?php if(isset($_POST['phone'])) echo $_POST['phone']; ?>" >
  </div>
  <div class="input-container">
    <i class="fa fa-photo icon"></i>
    <input id="file"  name="file" class="input-field" type="file" placeholder="Upload Photo" value="<?php if(isset($_POST['photo'])) echo $_POST['photo']; ?>"/>
  </div>
   <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input  name="username" id="username"class="input-field" type="text" placeholder="Username" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>">
  </div>  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input name="password" id="password" class="input-field" type="password" placeholder="Password" value="<?php if(isset($_POST['password'])) echo $_POST['password']; ?>"/>
  </div>
   <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input  name="cpassword" id="cpassword" class="input-field" type="password" placeholder="Confirm Password" value="<?php if(isset($_POST['cpassword'])) echo $_POST['cpassword']; ?>"/>
  </div>
  <input type="submit" class="btn" id="btnsubmit" name="btnsubmit" onclick="return Admin();" value="Create Admin" />
</form>
</div>
 <?php include 'footer.php'; ?>
</div>