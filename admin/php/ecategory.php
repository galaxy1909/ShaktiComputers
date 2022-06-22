<?php include 'header.php' ; ?>
<div class="wrapper">
<div class="form">
<form method="POST" action="" name="category" style="max-width:500px;margin:auto">
  <h2 class="form-heading"><strong>Update Category</strong></h2>
  <?php
  $id=$_REQUEST['eid'];
  include('dbconnection.php');
  $sql="select * from `category` where CategoryId='$id'; ";
  $result=mysqli_query($con,$sql);
  $line=mysqli_fetch_array($result);
  if($_POST['btnsubmit']){
    $cname=$_POST['categoryname'];
		if(empty($cname))
		{
			echo "<p style=\"color:red\">Please Enter Category Name</p>";		
		}
		else
		{   
			
			$con=mysqli_connect(@"localhost","root","","shakticomputer");
			$sql="UPDATE `category` SET `CategoryName` = '$cname' WHERE `CategoryId` = '$id' ;";
			if(mysqli_query($con,$sql))
			{
			  echo "<h4 style=\"color:green\">Record Edited successfully!</h4>";
              header("Location:mcategory.php");
			}
			else
							{
							echo "<h4 style=\"color:red\">Error !</h4>";
							}
  }
}
  ?>
  <div class="input-container">
    <i class="fa fa-category icon"></i>
    <input name="categoryname" id="categoryname" class="input-field" type="text" placeholder="Category Name"  value="<?php echo $line['CategoryName']; ?>" />
  </div>
  <input type="submit" class="btn" id="btnsubmit" name="btnsubmit" onclick="return Technician();" value="Update Category" />
</form>
</div>

 <?php include 'footer.php'; ?>
</div>