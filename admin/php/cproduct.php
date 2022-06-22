<?php include 'header.php' ; ?>
<script language="javascript" >
			function clearInputs()
			{
					document.getElementById('pname').value='';
					document.getElementById('categoryid').value='';
					document.getElementById('brandid').value='';
					document.getElementById('brandname').value='';
					document.getElementById('photo').value='';
					document.getElementById('doj').value='';
          document.getElementById('price').value='';
			}
      </script>
<div class="wrapper">
<div class="form">
<form method="POST" action="" name="product" style="max-width:500px;margin:auto" enctype="multipart/form-data">
  <h2 class="form-heading"><strong>Register New Product</strong></h2>
  <?php 
    if($_POST['btnsubmit']){
        $pn=$_POST['pname'];
        $pci=$_POST['categoryid'];
        $pbid=$_POST['brandid'];
        $pbn=$_POST['brandname'];
        $pd=$_POST['doj'];
        $ppr=$_POST['price'];
        $path=1;
      if(empty($pn) || empty($pci) || empty($pbid) || empty($pbn) || empty($pd) || empty($ppr)){
        echo "<p style=\"color:red\"> Please Enter Requiered Details </p>";
      }
      else{
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
      $sql="INSERT INTO `product` (`ProductId`, `ProductName`, `CategoryId`, `BrandId`, `BrandName`, `Photo`, `DOJ`, `Price`) VALUES (NULL, '$pn', '$pci', '$pbid', '$pbn', '$path', '$pd', '$ppr');";
      if(mysqli_query($con,$sql)){
        echo "<p style=\"color:green\">Record Inserted Successfully </p>";
        echo '<script>clearInputs();</script>'; 
      }
      else{
        echo "<p style=\"color:red\"> Error!</p>";
      }
    }
  }
  ?>
     <div class="input-container">
    <i class="fa fa-product-hunt icon"></i>
    <input id="pname" name="pname" class="input-field" type="text" placeholder="Product Name" value="<?php if(isset($_POST['pname'])) echo $_POST['pname']; ?>" />
  </div>
  <div class="input-container">
    <i class="fa fa-product-hunt icon"></i>
    <select class=" input-field"  style="height:60px;" id="categoryid" name="categoryid">
      <option value="-1">--- Select Category ---</option>
      <?php
      include('dbconnection.php');
      $s="select * from category";
      $result=mysqli_query($con,$s);
			while($line=mysqli_fetch_array($result))
			{
        ?>
        <option value="<?php echo $line['CategoryId'];?>" >
        <?php echo $line['CategoryName']; ?>
        </Option>
      <?php
      }
      ?>
        
    </select>    
  </div>
  <div class="input-container">
    <i class="fa fa-product-hunt icon"></i>
    <select class=" input-field"  style="height:60px;" id="brandid" name="brandid">
      <option value="-1">--- Select Brand ID ---</option>
      <?php
      include('dbconnection.php');
      $s="select * from brand";
      $result=mysqli_query($con,$s);
			while($line=mysqli_fetch_array($result))
			{
        ?>
        <option value="<?php echo $line['BrandId'];?>" >
        <?php echo $line['BrandName']; ?>
        </Option>
      <?php
      }
      ?>
        
    </select>    
  </div>
  <div class="input-container">
    <i class="fa fa-btc icon"></i>
    <input id="brandname"  name="brandname" class="input-field" type="text" placeholder="Brand Name" value="<?php if(isset($_POST['brandname'])) echo $_POST['brandname']; ?>" />
  </div>
    <div class="input-container">
    <i class="fa fa-photo icon"></i>
    <input id="file"  name="file" class="input-field" type="file" placeholder="Upload Photo" value="<?php if(isset($_POST['photo'])) echo $_POST['photo']; ?>"/>
  </div>
    <div class="input-container">
    <i class="fa fa-calendar-alt icon"></i>
    <input  name="doj" id="doj" class="input-field" type="text" placeholder="Join Date" onfocus="this.type='date'" onblur="this.type='text'" value="<?php if(isset($_POST['doj'])) echo $_POST['doj']; ?>" />
  </div>
  <div class="input-container">
    <i class="fa fa-rupee icon"></i>
    <input  name="price" id="price"class="input-field" type="text" placeholder="Price" onkeydown = "return isNumeric(event.keyCode);" onpaste = "return false;"value="<?php if(isset($_POST['price'])) echo $_POST['price']; ?>" />
  </div>  
  <input type="submit" class="btn" name="btnsubmit" id="btnsubmit" onclick="return Product();" value="Create Product" />
</form>
</div>
 <?php include 'footer.php'; ?>
</div>



