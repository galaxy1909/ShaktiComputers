<?php include 'header.php' ; ?>

<div class="wrapper">
<div class="form">
<form method="POST" action="" name="product" enctype="multipart/form-data" style="max-width:500px;margin:auto" >
  <h2 class="form-heading"><strong>Update Product Here</strong></h2>
  <?php
  $id=$_REQUEST['eid'];
  include('dbconnection.php');
  $sql="select * from product where ProductId='$id' ";
  $result=mysqli_query($con,$sql);
  $line=mysqli_fetch_array($result);
  if($_POST['btnsubmit']){
        $pname=$_POST['pname'];
		$cid=$_POST['categoryid'];
		$bid=$_POST['brandid'];
		$pr=$_POST['price'];
		$flag=0;
    $path=1;
		if(empty($pname))
		{
			echo "<p style=\"color:red\">Please Enter your Product Name!</p>";		
		}
		else if(empty($cid))
		{
			echo "<p style=\"color:red\">Please Enter your Category ID!</p>";		
		}
    else if(empty($pr))
		{
			echo "<p style=\"color:red\">Please Enter Price!</p>";		
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
			$s="UPDATE `product` SET `ProductName` = '$pname' , `CategoryId` = '$cid'  ,   `Price` = '$pr' WHERE `ProductId` = '$id' ;";
			if(mysqli_query($con,$s))
							{
							echo "<h4 style=\"color:green\">Record Edited successfully!</h4>";
              header("Location:mproduct.php");
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
    <input name="pname" id="pname"class="input-field" type="text" placeholder="Product Name"  value="<?php echo $line['ProductName']; ?>" />
  </div>
  <div class="input-container">
    <i class="fa fa-product-hunt icon"></i>
    <select class=" input-field"  style="height:60px;" id="categoryid" name="categoryid">
      <option value="<?php echo $line['CategoryId']; ?>"><?php echo $line['CategoryId']; ?></option>
      <?php
      include('dbconnection.php');
      $s="select * from category";
      $result=mysqli_query($con,$s);
			while($line1=mysqli_fetch_array($result))
			{
        ?>
        <option value="<?php echo $line1['CategoryId'];?>" >
        <?php echo $line1['CategoryName']; ?>
        </Option>
      <?php
      }
      ?>
        
    </select>    
  </div>
  
  <div class="input-container">
    <i class="fa fa-amount icon"></i>
    <input id="price"  name="price" class="input-field" type="text" onkeydown = "return (event.keyCode);" onpaste = "return false;" placeholder="Price" value="<?php echo $line['Price']; ?>"/>
  </div>

   <input type="submit" class="btn" id="btnsubmit" name="btnsubmit" onclick="return Product();" value="Update Product" />
</form>
</div>
 <?php include 'footer.php'; ?>
</div>