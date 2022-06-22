<?php include 'header.php';?>
<script language="javascript" >
			function clearInputs()
			{
					document.getElementById('fname').value='';
					document.getElementById('lname').value='';
					document.getElementById('address').value='';
					document.getElementById('pincode').value='';
					document.getElementById('email').value='';
					document.getElementById('birthdate').value='';
          document.getElementById('gender').value='';
          document.getElementById('phone').value='';
          document.getElementById('photo').value='';
          document.getElementById('username').value='';
          document.getElementById('password').value='';
          document.getElementById('cpassword').value='';
			}
      </script>
<section class="login_box_area section-margin">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<div class="hover">
							<h4>Already have an account?</h4>
							<a class="button button-account" href="login.php">Login Now</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner register_form_inner">
						<h3>Create an account</h3>
						<form class="row login_form" action="" id="register_form" method="POST" enctype="multipart/form-data" >
						<?php
	if($_POST['submit'])
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
        $add=$_POST['address'];
		$pin=$_POST['pin'];
		$email=$_POST['email'];
        $bd=$_POST['bdate'];
        $gen=$_POST['gender'];
		$phone=$_POST['phone'];
		$uname=$_POST['uname'];
		$p=$_POST['password'];
		$cp=$_POST['cpassword'];
        $path=1;
		if(empty($fname))
		{
			echo "<p class=\"p\">Please Enter your firstname</p>";		
		}
		else if(empty($lname))
		{
			echo "<p class=\"p\">Please Enter your lastname</p>";		
		}
    else if(empty($add))
		{
			echo "<p class=\"p\">Please Enter your lastname</p>";		
		}
    else if(empty($pin))
		{
			echo "<p class=\"p\">Please Enter your lastname</p>";		
		}
    else if(empty($email))
		{
			echo "<p class=\"p\">Please Enter your Email</p>";		
		}
    else if(empty($bd))
		{
			echo "<p class=\"p\">Please Enter your Birth Date</p>";		
		}
    else if(empty($gen))
		{
			echo "<p class=\"p\">Please Enter your Gender</p>";		
		}
    else if(empty($phone))
		{
			echo "<p class=\"p\">Please Enter your Phone No.</p>";		
		}
   else if(empty($uname))
		{
			echo "<p class=\"p\">Please Enter your UserName</p>";		
		}
		else if(empty($p)||empty($cp))
		{
			echo "<p class=\"p\">Please Enter Password or Confirm Password</p>";		
		}
		else if($p!=$cp)
		{
			echo "<p class=\"p\">Password is not matched with Confirm Password</p>";		
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
			$sql="INSERT INTO `customer` (`CustomerId`, `FirstName`, `LastName`, `Address`, `Pincode`, `Email`, `Birthdate`, `Gender`, `Phone`, `Photo`, `Username`, `Password`,`st`)  VALUES (NULL,'$fname','$lname','$add','$pin','$email','$bd','$gen','$phone','$path','$uname','$p','1');";
			if(mysqli_query($con,$sql))
							{
							echo "<p style=\"background:green;\">Record inserted successfully!</p>";
                            echo '<script>clearInputs();</script>'; 
							header("location:login.php");
	 }
	
							else
							{
							echo "<h4 style=\"color:red\">Error !</h4>";
							}
		}
	}
  ?>
						<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'">
							</div>
							<div class="col-md-12 form-group">
								<textarea type="text" class="form-control" id="address" name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'"></textarea>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="pin" name="pin" placeholder="Pincode" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pincode'"onkeydown = "return isNumeric(event.keyCode);" onpaste = "return false; " >
              </div>
			  <div class="col-md-12 form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
              </div>
			  <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="bdate" name="bdate" placeholder="Birth Date" onfocus="this.type ='date'" onblur="this.type= 'text'">
              </div>
    <div class="col-md-12">
	<label class="radio-inline radio">
		Select Your Gender:
      <input type="radio" name="gender"  id="gender" value="male" checked>Male
    </label>
    <label class="radio-inline radio">
      <input type="radio" name="gender" id="gender" value="female">Female
    </label>
</div>
<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" onkeydown = "return isNumeric(event.keyCode);" onpaste = "return false; " >
              </div>
			  <div class="col-md-12 form-group">
					<input type="file" class="form-control" id="file" name="file" placeholder="Photo">
              </div>
			  <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="uname" name="uname" placeholder="User Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
              </div>
              <div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
              </div>
			  
              <div class="col-md-12 form-group">
								<input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'">
							</div>
							
							<div class="col-md-12 form-group">
								<input type="submit" value="Register" id="submit" name="submit" class="button button-register w-100" />
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php include 'footer.php';?>

<style>
	.radio{
		padding-right:10px;
		padding-left:10px;
		font-size:17px;
	}
	.p{
		color:white;
		background:red;
		display:center;
		text-align:center;
		font-size:19px;
		border-radius:5px;
		margin-left:40px;
	}
</style>