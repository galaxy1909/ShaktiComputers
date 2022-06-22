<?php include 'header.php' ; ?>
<div class="wrapper">
<div class="form">
<form method="POST" action="" name="brand" style="max-width:500px;margin:auto" enctype="multipart/form-data">
  <h2 class="form-heading"><strong>Update Brand Here</strong></h2>
  <?php
  $id=$_REQUEST['eid'];
  include('dbconnection.php');
  $sql="select * from brand where BrandId='$id' ";
  $result=mysqli_query($con,$sql);
  $line=mysqli_fetch_array($result);
  if($_POST['btnsubmit']){
    $bname=$_POST['bname'];
		$blogo=$_POST['brandlogo'];

		if(empty($bname))
		{
			echo "<p style=\"color:red\">Please Enter your firstname</p>";		
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
			$s="UPDATE `brand` SET `BrandName` = '$bname' WHERE `BrandId` = '$id' ;";
			if(mysqli_query($con,$s))
							{
							echo "<h4 style=\"color:green\">Record Updated successfully!</h4>";
              header("Location:mbrand.php");
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
    <input name="bname" id="bname"class="input-field" type="text" placeholder="Brand Name"  value="<?php echo $line['BrandName']; ?>" />
  </div>
 
 <input type="submit" class="btn" id="btnsubmit" name="btnsubmit" onclick="return Brand();" value="Update Brand" />
</form>
</div>
 <?php include 'footer.php'; ?>
</div>