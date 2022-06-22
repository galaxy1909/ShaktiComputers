<?php include 'header.php' ; ?>
<script language="javascript" >
			function clearInputs()
			{
					document.getElementById('categoryname').value='';
					document.getElementById('categoryid').value='';
			}
      </script>
<div class="wrapper">
<div class="form">
<form method="POST" action="" name="category" style="max-width:500px;margin:auto">
  <h2 class="form-heading"><strong>Create Category</strong></h2>
  <?php 
    if($_POST['btnsubmit']){
		$cid=$_POST['categoryid'];
		$cn=$_POST['categoryname'];
		if(empty($cid) || empty($cn)){
			echo "<p style=\" color:red; \">Please Enter Details first<p>";
		}
		else
		{ 	$con=mysqli_connect(@"localhost","root","","shakticomputer");
			$sql="INSERT INTO `category` (`CategoryId`, `CategoryName`) VALUES ('$cid', '$cn');";
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
    <i class="fa fa-product-hunt icon"></i>
    <input name="categoryid" id="categoryid"class="input-field" type="text" placeholder="Category Id" onkeydown = "return isNumeric(event.keyCode);" onpaste = "return false;" value="<?php if(isset($_POST['categoryid'])) echo $_POST['categoryid']; ?>"/>
  </div>
  <div class="input-container">
    <i class="fa fa-product-hunt icon"></i>
    <input id="categoryname" name="categoryname" class="input-field" type="text" placeholder="Category Name" value="<?php if(isset($_POST['categoryname'])) echo $_POST['categoryname']; ?>"/>
  </div>
  <input type="submit" class="btn" id="btnsubmit" name="btnsubmit" onclick="return Category();" value="Create Category" />
</form>
</div>
 <?php include 'footer.php'; ?>
</div>


