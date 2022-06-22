<?php include 'header.php' ; ?>

<div class="wrapper">
<div class="form">
<form method="POST" action="" name="order"id="order" style="max-width:500px;margin:auto">
  <h2 class="form-heading"><strong>Create Order</strong></h2>
  <?php 
    if($_POST['btnsubmit']){
		$pn=$_POST['pname'];
    $pa=$_POST['deliveryaddress'];
    $pp=$_POST['pincode'];
    $pd=$_POST['orderdate'];
    $pcid=$_POST['customerid'];
    $ppid=$_POST['productid'];
    $pta=$_POST['totalamount'];
    $qa=$_POST['quantity'];
		if(empty($pn) || empty($pa) || empty($pp) || empty($pd) || empty($pta)){
			echo "<p style=\" color:red; \">Please Enter Details first<p>";
		}
		else
		{ 	
      include('dbconnection.php');
			$sql="INSERT INTO `tblorder` (`Orderid`, `Customerid`, `Productid`, `Productname`,`Quantity`, `Deliveryadd`, `Pincode`, `Orderdate`, `Totalamount`, `status`,`A_Status`) VALUES (NULL,'$pcid','$ppid','$pn','$qa','$pa','$pp','$pd','$pta',0,0);";
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
    <script language="javascript" >
			function clearInputs()
			{
					document.getElementById('pname').value='';
					document.getElementById('deliveryaddress').value='';
					document.getElementById('pincode').value='';
					document.getElementById('orderdate').value='';
					document.getElementById('customerid').value='';
					document.getElementById('productid').value='';
          document.getElementById('totalamount').value='';
			}
      </script>
   <div class="input-container">
    <i class="fa fa-product-hunt icon"></i>
    <input id="pname" name="pname" class="input-field" type="text" placeholder="Product Name" value="<?php if(isset($_POST['pname'])) echo $_POST['pname']; ?>" />
  </div>
  <div class="input-container">
    <i class="fa fa-product-hunt icon"></i>
    <input id="quantity" name="quantity" class="input-field" type="text" placeholder="Quantity"  onkeydown = "return isNumeric(event.keyCode);" onpaste = "return false;" value="<?php if(isset($_POST['quantity'])) echo $_POST['quantity']; ?>" >
  </div>
  <div class="input-container">
    <i class="fa fa-address-card icon"></i>
    <input  name="deliveryaddress" id="deliveryaddress" class="input-field" type="textarea" placeholder="Delivery Address" value="<?php if(isset($_POST['deliveryaddress'])) echo $_POST['deliveryaddress']; ?>"/>
  </div>
      <div class="input-container">
    <i class="fa fa-product-hunt icon"></i>
    <input id="pincode" name="pincode" class="input-field" type="text" placeholder="Pincode" name="Pincode" onkeydown = "return isNumeric(event.keyCode);" onpaste = "return false;" value="<?php if(isset($_POST['pincode'])) echo $_POST['pincode']; ?>" >
  </div>
  <div class="input-container">
    <i class="fa fa-opera icon"></i>
    <input  name="orderdate" id="orderdate" class="input-field" type="text" placeholder="Order Date" onfocus="this.type='date'" onblur="this.type='text'" value="<?php if(isset($_POST['orderdate'])) echo $_POST['orderdate']; ?>"/>
  </div>
  <div class="input-container">
    <i class="fa fa-product-hunt icon"></i>
    <select class=" input-field"  style="height:60px;" id="productid" name="productid">
      <option value="-1">--- Select ProductID ---</option>
      <?php
      include('dbconnection.php');
      $s="select * from product";
      $result=mysqli_query($con,$s);
			while($line=mysqli_fetch_array($result))
			{
        ?>
        <option value="<?php echo $line['ProductId'];?>" >
        <?php echo $line['ProductName']; ?>
        </Option>
      <?php
      }
      ?>
        
    </select>
    
  </div>
  <div class="input-container">
    <i class="fa fa-product-hunt icon"></i>
    <select class=" input-field"  style="height:60px;" id="customerid" name="customerid">
      <option value="-1">--- Select CustomerID ---</option>
      <?php
      include('dbconnection.php');
      $s="select * from customer";
      $result=mysqli_query($con,$s);
			while($line=mysqli_fetch_array($result))
			{
        ?>
        <option value="<?php echo $line['CustomerId'];?>" >
        <?php echo $line['FirstName']; ?>
        </Option>
      <?php
      }
      ?>
        
    </select>
    
  </div>
  <div class="input-container">
    <i class="fa fa-rupee icon"></i>
    <input  name="totalamount" id="totalamount"class="input-field" type="text" placeholder="Total Amount" onkeydown = "return isNumeric(event.keyCode);" onpaste = "return false;" value="<?php if(isset($_POST['totalamount'])) echo $_POST['totalamount']; ?>" />
  </div>  
  <input type="submit" class="btn"id="btnsubmit" name="btnsubmit" onclick="return Order();" value="Create Order" />
</form>
</div>
 <?php include 'footer.php'; ?>
</div>



