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
<form method="POST" action="" name="technician" style="max-width:500px;margin:auto"  enctype="multipart/form-data" >
  <h2 class="form-heading"><strong>Update Technician</strong></h2>
  <?php
  $id=$_REQUEST['eid'];
  include('dbconnection.php');
  $sql="select * from `technician` where TechnicianId='$id'; ";
  $result=mysqli_query($con,$sql);
  $line=mysqli_fetch_array($result);
  if($_POST['btnsubmit']){
    $fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$photo=$_POST['photo'];
		$prof=$_POST['prof'];
		$rat=$_POST['rating'];
		$salary=$_POST['salary'];
		$flag=0;
		$path=1;
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
			echo "<p style=\"color:red\">Please Enter Phone NO.!</p>";		
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
			$sql="UPDATE `technician` SET `FirstName` = '$fname' , `LastName` = '$lname' ,  `Email` = '$email'  , `Phone` = '$phone' , `Profession` = '$prof',`Salary` = '$salary',`Rating`='$rat' WHERE `TechnicianId` = '$id' ;";
			if(mysqli_query($con,$sql))
			{
			  echo "<h4 style=\"color:green\">Record inserted successfully!</h4>";
              header("Location:mtechnician.php");
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
    <input id="phone" name="phone" class="input-field" type="text" placeholder="Phone" name="phone" onkeydown = "return isNumeric(event.keyCode);" onpaste = "return false;" value="<?php echo $line['Phone']; ?>" >
  </div>
  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input id="prof" name="prof" class="input-field" type="text" placeholder="Profession" value="<?php echo $line['Profession']; ?>"/>
  </div>
  <div class="input-container">
    <i class="fa fa-salary icon"></i>
    <input id="salary" name="salary" class="input-field" type="text" placeholder="Salary" onkeydown = "return isNumeric(event.keyCode);" onpaste = "return false;" value="<?php echo $line['Salary']; ?>" >
  </div>
  <div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input id="rating" name="rating" class="input-field" type="text" placeholder="Rating" name="Rating" onkeydown = "return isNumeric(event.keyCode);" onpaste = "return false;" value="<?php echo $line['Rating']; ?>" >
  </div>
    <input type="submit" class="btn" id="btnsubmit" name="btnsubmit" onclick="return Technician();" value="Update Technician" />
</form>
</div>

 <?php include 'footer.php'; ?>
</div>