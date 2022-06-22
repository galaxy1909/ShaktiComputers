<?php include 'header.php' ; ?>
<div class="wrapper">
<div class="form">
            <form method="POST" action="" name="problem" style="max-width:500px;margin:auto">
              <h2 class="form-heading"><strong>Create Problem</strong></h2>
              <?php 
			  $id=$_REQUEST['eid'];
			  include('dbconnection.php');
			  $sql="select * from `bill` where BillId='$id'; ";
			  $result=mysqli_query($con,$sql);
			  $line=mysqli_fetch_array($result);
                     $tid=$_POST['technicianid'];
                     $cid=$_POST['customerid'];
                     $a=$_POST['amount'];
                     $date=$_POST['date'];
					 if($_POST['btnsubmit']){
						$cid=$_POST['customerid'];
						$cdesc=$_POST['complaintdesc'];
						if(empty($cid))
						{
							echo "<p style=\"color:red\">Please Enter Customer ID</p>";		
						}
						else if(empty($tid))
						{
							echo "<p style=\"color:red\">Please Enter Complaint Description</p>";		
						}
						else
						{   $con=mysqli_connect(@"localhost","root","","shakticomputer");
							$sql="UPDATE `bill` SET `Customerid` = '$cid' , `TechnicianId` = '$tid',`Amount` = '$a',`Date` = '$date' WHERE `BillId` = '$id' ;";
							if(mysqli_query($con,$sql))
											{
											echo "<h4 style=\"color:green\">Record Updated successfully!</h4>";
											header("Location:mbill.php");
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
        if($line1['CustomerId'] == $line['CustomerId']){
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
    <i class="fa fa-product-hunt icon"></i>
    <select class=" input-field"  style="height:60px;" id="technicianid" name="technicianid">
      <?php
      $s="select TechnicianId,FirstName from technician";
      $result=mysqli_query($con,$s);
			while($line1=mysqli_fetch_array($result))
			{
        if($line1['TechnicianId'] == $line['TechnicianId']){
          ?>
          <option value="<?php echo $line1['TechnicianId'];?>" selected >
        <?php echo $line1['FirstName'];  ?>
        <?php
        }
        else{
        ?>
        <option value="<?php echo $line1['TechnicianId'];?>" >
        <?php echo $line1['FirstName']; ?>
        </Option>
      <?php
      }
    }
      ?>
        
    </select>
</div> 
            
           <div class="input-container"><i class="fa fa-product-hunt icon"></i>
                    <input id="date" name="date" type="text" class="input-field" value="<?php echo $line['Date'] ?>" placeholder="Date" onblur="this.type='text'" onfocus="this.type='date'">
                </div>
                    <div class="input-container"><i class="fa fa-product-hunt icon"></i>
                    <input id="amount" name="amount" type="text" class="input-field" placeholder="Amount" value="<?php echo $line['Amount'];?>" onkeydown = "return isNumeric(event.keyCode);" onpaste = "return false;">
                </div>            
              <input type="submit" class="btn" onclick="" id="btnsubmit" name="btnsubmit" value="Update Bill" />
            </form>
            </div>
    </div>
 <?php include 'footer.php'; ?>
</div>

 