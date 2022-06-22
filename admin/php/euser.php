<?php include 'header.php' ; ?>
<div class="wrapper">
<div class="form">
<form method="POST" action="" name="user" style="max-width:500px;margin:auto" enctype="multipart/form-data" >
  <h2 class="form-heading"><strong>Update User Here</strong></h2>
  <?php
  $id=$_REQUEST['eid'];
  include('dbconnection.php');
  $sql="select * from customer where CustomerId = '$id' ";
  $result=mysqli_query($con,$sql);
  $line=mysqli_fetch_array($result);
  if($_POST['btnsubmit']){
        $fname=$_POST['fname'];
		    $lname=$_POST['lname'];
		    $email=$_POST['email'];
		    $phone=$_POST['phone'];
        $add=$_POST['address'];
        $pc=$_POST['pincode'];
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
			echo "<p style=\"color:red\">Password is not matched with Confirm Password</p>";		
		}
		else
		{   
      
    
  $id=$_REQUEST['eid'];
      $s="UPDATE `customer` SET `FirstName` = '$fname' , `LastName` = '$lname' ,  `Address` = '$add' ,`Pincode` = '$pc',`Email` = '$email'  , `Phone` = '$phone'  WHERE `customer`.`CustomerId` = '$id' ";
			        if(mysqli_query($con,$s))
							{
							echo "<h4 style=\"color:green\">Record Updated successfully!</h4>";
                            header("Location:muser.php");
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
    <input id="address" name="address" class="input-field" type="text" placeholder="Address" value="<?php echo $line['Address']; ?>"/>
  </div>
  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input id="pincode" name="pincode" class="input-field" type="text" placeholder="Pincode" onkeydown = "return isNumeric(event.keyCode);" onpaste = "return false;" value="<?php echo $line['Pincode']; ?>"/>
  </div>
  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input id="email" name="email" class="input-field" type="email" placeholder="Email" value="<?php echo $line['Email']; ?>"/>
  </div>
    <div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input id="phone" name="phone" class="input-field" type="text" placeholder="Phone" name="phone" onkeydown = "return isNumeric(event.keyCode);" onpaste = "return false;" value="<?php echo $line['Phone']; ?>" >
  </div>
  

   <input type="submit" class="btn" id="btnsubmit" name="btnsubmit" onclick="return User();" value="Update User" />
</form>
</div>
 <?php include 'footer.php'; ?>
</div>