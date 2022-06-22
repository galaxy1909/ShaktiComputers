<?php include 'header.php' ; ?>

<div class="wrapper">
<div class="form">
<form method="POST" action="" name="workreport" style="max-width:500px;margin:auto">
  <h2 class="form-heading"><strong>Create Work Report</strong></h2>
  <?php 
              if($_POST['btnsubmit']){
                    
                     $tid=$_POST['technicianid'];
                     $wh=$_POST['workhours'];
                     $wrd=$_POST['date'];
                     $pid=$_POST['problemid'];
                     $psol=$_POST['problemsol'];
                 if( empty($tid)|| empty($wh)|| empty($wrd)||empty($pid) || empty($psol) ){
                        echo"<p style=\"color:red;\"> Please Enter Required Details</p>";
                }
                include('dbconnection.php');
                $sql="INSERT INTO `workreport` (`Workreportid`, `TechnicianId`, `Workhours`, `Date`, `ProblemId`, `Problemsol`,`Audio`) VALUES (NULL, '$tid', '$wh', '$wrd', '$pid', '$psol',NULL)";
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
					document.getElementById('technicianid').value='';
					document.getElementById('workhours').value='';
					document.getElementById('date').value='';
					document.getElementById('problemid').value='';
          document.getElementById('problemsol').value='';
				}
      </script>
 
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
    <div class="input-container">
    <i class="fa fa-btc icon"></i>
    <input id="workhours" name="workhours" class="input-field" type="text" placeholder="Work Hours" onkeydown = "return isNumeric(event.keyCode);" onpaste = "return false;" >
  </div>
  <div class="input-container">
    <i class="fa fa-btc icon"></i>
    <input id="date"  name="date" class="input-field" type="text" placeholder="Date" onfocus="this.type='date'" onblur="this.type='text'"  />
  </div>
  <div class="input-container">
    <i class="fa fa-product-hunt icon"></i>
    <select class=" input-field"  style="height:60px;" id="problemid" name="problemid">
      <option value="-1">--- Select Problem ---</option>
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
    <i class="fa fa-rupee icon"></i>
    <input  name="problemsol" id="problemsol" class="input-field" type="text" placeholder="Problem Solution" />
  </div>  
  <input type="submit" class="btn" onclick="return WorkReport();" id="btnsubmit" name="btnsubmit" value="Create Report" />
</form>
</div>
 <?php include 'footer.php'; ?>



