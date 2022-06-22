 <?php include 'header.php' ; ?>
<div class="wrapper">
<div class="form">
            <form method="POST" action="" name="problem" style="max-width:500px;margin:auto">
              <h2 class="form-heading"><strong>Create Problem</strong></h2>
              <?php 
              if($_POST['btnsubmit']){
                    
                     $pd=$_POST['problemdesc'];
                     $tid=$_POST['technicianid'];
                     $cid=$_POST['customerid'];
                if( empty($pd)||empty($cid)){
                  echo"<p style=\"color:red;\"> Please Enter Required Details</p>";
                }
                $con=mysqli_connect(@"localhost","root","","shakticomputer");
                $sql="INSERT INTO `problem` (`ProblemId`, `ProblemDesc`,`Audio`, `TechnicianId`, `CustomerId`,`Status`) VALUES (NULL,'$pd',NULL,NULL,'$cid',0);";
                if(mysqli_query($con,$sql)){
                  echo"<p style=\"color:green;\">Record Inserted Successfully</p>";
                  echo '<script>clearInputs();</script>'; 
                }
                else{
                  echo"<p style=\"color:red;\">Error</p>";
                }
              }
              ?>
             <script language="javascript" >
			function clearInputs()
			{
					document.getElementById('problemdesc').value='';
					document.getElementById('problemsol').value='';
					document.getElementById('technicianid').value='';
					document.getElementById('customerid').value='';
				}
      </script>

              <div class="input-container">
                <i class="fa fa-product-hunt icon"></i>
                <textarea id="problemdesc" name="problemdesc" class="input-field" type="text" placeholder="Product Description"  value="<?php if(isset($_POST['problemdesc'])) echo $_POST['problemdesc'];?>"></textarea>
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
              
              <input type="submit" class="btn" onclick="return Problem();" id="btnsubmit" name="btnsubmit" value="Create Problem" />
            </form>
            </div>
    </div>
 <?php include 'footer.php'; ?>
</div>

 