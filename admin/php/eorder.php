<?php include 'header.php' ; ?>
<div class="wrapper">
<div class="form">
<form method="POST" action="" name="order" style="max-width:500px;margin:auto">
  <h2 class="form-heading"><strong>Update Order Details Here</strong></h2>
  <?php
  $id=$_REQUEST['eid'];
  include('dbconnection.php');
  $sql="select * from tblorder where Orderid='$id' ";
  $result=mysqli_query($con,$sql);
  $line=mysqli_fetch_array($result);
  if($_POST['btnsubmit']){
    $da=$_POST['address'];
		$pc=$_POST['pincode'];
		$pr=$_POST['price'];
		$q=$_POST['quantity'];
		if(empty($da))
		{
			echo "<p style=\"color:red\">Please Enter your Address</p>";		
		}
		else if(empty($pc))
		{
			echo "<p style=\"color:red\">Please Enter your Pincode</p>";		
		}
		else if(empty($pr))
		{
			echo "<p style=\"color:red\">Please Enter Price.</p>";		
		}
		else
		{   $con=mysqli_connect(@"localhost","root","","shakticomputer");
			$sql="UPDATE `tblorder` SET `Quantity`= '$q',`Deliveryadd` = '$da' , `Pincode` = '$pc',`Totalamount` = '$pr'  WHERE `Orderid` = '$id' ;";
			if(mysqli_query($con,$sql))
							{
							echo "<h4 style=\"color:green\">Record Updated successfully!</h4>";
                            header("Location:morder.php");
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
    <input id="quantity" name="quantity" class="input-field" type="text" placeholder="Quntity" value="<?php echo $line['Quantity']; ?>"/>
  </div>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input name="address" id="address"class="input-field" type="text" placeholder="Delivery Address"  value="<?php echo $line['Deliveryadd']; ?>" />
  </div>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input id="pincode" name="pincode" class="input-field" type="text" placeholder="Pincode" value="<?php echo $line['Pincode']; ?>"/>
  </div>
  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input id="price" name="price" class="input-field" type="text" placeholder="Price" value="<?php echo $line['Totalamount']; ?>"/>
  </div>
<input type="submit" class="btn" id="btnsubmit" name="btnsubmit" onclick="return Admin();" value="Update Order" />
</form>
</div>
<br><br><br><br><br><br><br><br>
 <?php include 'footer.php'; ?>
</div>