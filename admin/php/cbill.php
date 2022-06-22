<?php include 'header.php' ; ?>
<div class="wrapper">
<div class="form">
            <form method="POST" action="" name="problem" style="max-width:500px;margin:auto">
              <h2 class="form-heading"><strong>Create Problem</strong></h2>
              <?php 
                     $id=$_POST['technicianid'];
                     $cid=$_POST['customerid'];
                     $pid=$_POST['requestid'];
                     $a=$_POST['amount'];
                     $d=$_POST['date'];
                    if($_POST['btnsubmit']){
                        
                    $sql="INSERT INTO `bill` (`BillId`, `ProblemId`, `TechnicianId`, `CustomerId`, `Amount`, `Date`,`A_Status`) VALUES (NULL, '$pid', '$id', '$cid', '$a', '$d',0);";
                     if(mysqli_query($con,$sql))
                        {
                            echo "<h4 style=\"color:green\">Inserted Successfully !</h4>";

                        }
                        else
                                        {
                                        echo "<h4 style=\"color:red\">Error !</h4>";
                                        }
                     }
                    
                    ?>
             <script language="javascript" >
			function clearInputs()
			{
					document.getElementById('requestid').value='';
					document.getElementById('customerid').value='';
					document.getElementById('technicianid').value='';
					document.getElementById('date').value='';
                    document.getElementById('amount').value='';

				}
      </script>

              
              <div class="input-container">
    <i class="fa fa-product-hunt icon"></i>
    <select class=" input-field"  style="height:60px;" id="requestid" name="requestid">
      <option value="-1">--- Select Request ---</option>
      <?php
      include('dbconnection.php');
      $s="select * from problem";
      $result=mysqli_query($con,$s);
			while($line=mysqli_fetch_array($result))
			{
        ?>
        <option value="<?php echo $line['ProblemId'];?>" >
        <?php echo $line['ProblemDesc']; ?>
        </Option>
      <?php
      }
      ?>
        
    </select>
    </div>
              <div class="input-container">
    <i class="fa fa-product-hunt icon"></i>
    <select class=" input-field"  style="height:60px;" id="customerid" name="customerid">
      <option value="-1">--- Select Customer ---</option>
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
    <i class="fa fa-product-hunt icon"></i>
    <select class=" input-field"  style="height:60px;" id="technicianid" name="technicianid">
      <option value="-1">--- Select Technician ---</option>
      <?php
      include('dbconnection.php');
      $s="select * from technician";
      $result=mysqli_query($con,$s);
			while($line=mysqli_fetch_array($result))
			{
        ?>
        <option value="<?php echo $line['TechnicianId'];?>" >
        <?php echo $line['FirstName']; ?>
        </Option>
      <?php
      }
      ?>
        
    </select>
           </div>
           <div class="input-container"><i class="fa fa-product-hunt icon"></i>
                    <input id="date" name="date" type="text" class="input-field" value="" placeholder="Date" onblur="this.type='text'" onfocus="this.type='date'">
                </div>
                    <div class="input-container"><i class="fa fa-product-hunt icon"></i>
                    <input id="amount" name="amount" type="text" class="input-field" placeholder="Amount" value="" onkeydown = "return isNumeric(event.keyCode);" onpaste = "return false;">
                </div>            
              <input type="submit" class="btn" onclick="" id="btnsubmit" name="btnsubmit" value="Create Bill" />
            </form>
            </div>
    </div>
 <?php include 'footer.php'; ?>
</div>

 