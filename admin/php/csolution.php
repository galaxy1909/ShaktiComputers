<?php include 'header.php' ; ?>

<div class="wrapper">
<div class="form">
<form method="POST" action="" name="solution" style="max-width:500px;margin:auto">
  <h2 class="form-heading"><strong>Create Solution</strong></h2>
  <?php 
              if($_POST['btnsubmit']){
                    
                     $tid=$_POST['technicianid'];
                     $sid=$_POST['problemid'];
                     $sol=$_POST['problemsol'];
                if( empty($tid) || empty($sid || empty($sol)) ){
                  echo"<p style=\"color:red;\"> Please Enter Required Details</p>";
                }
                $con=mysqli_connect(@"localhost","root","","shakticomputer");
                $sql="INSERT INTO `recordedsoloution` (`SolutionId`, `TechnicianId`, `ProblemId`,`ProblemSol`) VALUES (NULL,'$tid', '$sid','$sol')";
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
					document.getElementById('problemid').value='';
					}
      </script>
    <div class="input-container">
    <i class="fa fa-product-hunt icon"></i>
    <select class="input-field" style="height:60px;" id="technicianid" name="technicianid">
    <option value="-1"> --Select Technician ID-- </option>
    <?php 
    include('dbconnection.php');
    $s="select * from technician";
    $result=mysqli_query($con,$s);
    while($line=mysqli_fetch_array($result))
    {
      ?>
      <option value="<?php echo $line['TechnicianId'] ?>">
        <?php echo $line['FirstName']?>
    </option>
    <?php 
    }
    ?>
    </select>
  </div>
  <div class="input-container">
    <i class="fa fa-product-hunt icon"></i>
     <textarea class="input-field"name="problemsol" id="problemsol" cols="5" rows="5" placeholder="Problem Solution"></textarea>
  </div>
  <div class="input-container">
    <i class="fa fa-product-hunt icon"></i>
    <select class="input-field" style="height:60px;" id="problemid" name="problemid">
    <option value="-1"> --Select Problem ID-- </option>
    <?php 
    include('dbconnection.php');
    $s="select * from problem";
    $result=mysqli_query($con,$s);
    while($line=mysqli_fetch_array($result))
    {
      ?>
      <option value="<?php echo $line['ProblemId'] ?>">
        <?php echo $line['ProblemDesc']?>
    </option>
    <?php 
    }
    ?>
    </select>
  </div>
  <input type="submit" class="btn" onclick="return Solution();"  id="btnsubmit" name="btnsubmit" value="Create Solution" />
</form>
</div>
 <?php include 'footer.php'; ?>
</div>
