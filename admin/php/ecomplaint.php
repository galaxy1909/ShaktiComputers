<?php include 'header.php' ; ?>
<div class="wrapper">
<div class="form">
<form method="POST" action="" name="Complaint" style="max-width:500px;margin:auto">
  <h2 class="form-heading"><strong>Update Complaint Here</strong></h2>
  <?php
  $id=$_REQUEST['eid'];
  include('dbconnection.php');
  $sql="select * from complaint where ComplaintId='$id' ";
  $result=mysqli_query($con,$sql);
  $line=mysqli_fetch_array($result);
  if($_POST['btnsubmit']){
        $cid=$_POST['customerid'];
		$cdesc=$_POST['complaintdesc'];
		if(empty($cid))
		{
			echo "<p style=\"color:red\">Please Enter Customer ID</p>";		
		}
		else if(empty($cdesc))
		{
			echo "<p style=\"color:red\">Please Enter Complaint Description</p>";		
		}
		else
		{   $con=mysqli_connect(@"localhost","root","","shakticomputer");
			$sql="UPDATE `complaint` SET `Customerid` = '$cid' , `Complaintdesc` = '$cdesc' WHERE `Customerid` = '$id' ;";
			if(mysqli_query($con,$sql))
							{
							echo "<h4 style=\"color:green\">Record Updated successfully!</h4>";
                            header("Location:mcomplaint.php");
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
      <?php
      $s="select CustomerId,FirstName from customer";
      $result=mysqli_query($con,$s);
			while($line1=mysqli_fetch_array($result))
			{
        if($line1['CustomerId'] == $line['Customerid']){
          ?>
          <option value="<?php echo $line1['CustomerId'];?>" selected >
        <?php echo $line1['FirstName'];  ?>
        <?php
        }
        else{
        ?>
        <option value="<?php echo $line1['CustomerId'];?>" >
        <?php echo $line1['FirstName']; ?>
        </Option>
      <?php
      }
    }
      ?>
        
    </select>
</div> 
<div class="input-container">
    <i class="fa fa-rupee icon"></i>
    <input  name="complaintdesc" id="complaintdesc" class="input-field" type="text" placeholder="Complaint Description" value="<?php echo $line['Complaintdesc']; ?>" />
  </div>
  <input type="submit" class="btn" id="btnsubmit" name="btnsubmit" onclick="return Complaint();" value="Update Complaint" />
</form>
</div>
 <?php include 'footer.php'; ?>
</div>