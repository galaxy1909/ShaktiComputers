 <?php include 'header.php' ; ?>
 <script language="javascript" >
			function clearInputs()
			{
					document.getElementById('customerid').value='';
					document.getElementById('complintdesc').value='';
			}
      </script>
<div class="wrapper">
<div class="form">
<form method="POST" action="" name="complaint" style="max-width:500px;margin:auto">
  <h2 class="form-heading"><strong>Register New Complaint</strong></h2>
   <?php
	if($_POST['btnsubmit'])
	{
		$cid=$_POST['customerid'];
		$cdes=$_POST['complaintdesc'];
        if(empty($cid) || empty($cdes)){
			echo"<p style=\" color:red;\"> Please Enter All required details</p>";
		}
		else
		{ 	$con=mysqli_connect(@"localhost","root","","shakticomputer");
			$sql="INSERT INTO `complaint` (`Complaintid`, `Customerid`, `Complaintdesc`) VALUES (NULL, '$cid', '$cdes')";
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
    <i class="fa fa-btc icon"></i>
    <textarea id="complaintdesc"  name="complaintdesc" class="input-field" type="text" placeholder="Complaint Description" ></textarea>
  </div>
     
  <input type="submit" class="btn" onclick="return Complaint();" id="btnsubmit" name="btnsubmit" value="Create Complaint" />
</form>
</div>
 <?php include 'footer.php'; ?>
</div>



