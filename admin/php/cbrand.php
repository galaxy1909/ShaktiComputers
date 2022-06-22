<?php include 'header.php' ; ?>
<script language="javascript" >
			function clearInputs()
			{
					document.getElementById('brandname').value='';
					document.getElementById('brandlogo').value='';
					document.getElementById('doj').value='';
			}
      </script>
<div class="wrapper">
<div class="form">
<form method="POST" action="" name="brand" style="max-width:500px;margin:auto">
  <h2 class="form-heading"><strong>Register New Brand</strong></h2>
  <?php 
    if($_POST['btnsubmit']){
		$bn=$_POST['brandname'];
    $blogo=$_POST['brandlogo'];
    $bdoj=$_POST['doj'];
		if(empty($bn) || empty($blogo) || empty($bdoj)){
			echo "<p style=\" color:red; \">Please Enter Details first<p>";
		}
		else
		{ 	$con=mysqli_connect(@"localhost","root","","shakticomputer");
			$sql="INSERT INTO `brand` (`BrandId`, `BrandName`, `BrandLogo`, `DOJ`) VALUES (NULL, '$bn', '$blogo', '$bdoj');";
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
    <input id="brandname" name="brandname" class="input-field" type="text" placeholder="Brand Name"value="<?php if(isset($_POST['brandname'])) echo $_POST['brandname']; ?>" />
  </div>
  <div class="input-container">
    <i class="fa fa-product-hunt icon"></i>
    <input id="brandlogo" name="brandlogo" class="input-field" type="file" placeholder="Brand Logo" value="<?php if(isset($_POST['brandlogo'])) echo $_POST['brandlogo']; ?>"/>
  </div>
    <div class="input-container">
    <i class="fa fa-btc icon"></i>
    <input id="doj" name="doj" class="input-field" type="text" placeholder="Date Of Joining"  onfocus="this.type='date'" onblur="this.type='text'" value="<?php if(isset($_POST['doj'])) echo $_POST['doj']; ?>"/>
  </div> 
  <input type="submit" class="btn" id="btnsubmit" name="btnsubmit" onclick="return Brand();" value="Create Brand" />
</form>
</div>
 <?php include 'footer.php'; ?>
</div>

 