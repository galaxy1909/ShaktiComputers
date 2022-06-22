<?php include 'header.php' ; ?>
<div class="wrapper">
<div class="form">
<form method="POST" action="" name="Solution" style="max-width:500px;margin:auto">
  <h2 class="form-heading"><strong>Update Problem Solution Here</strong></h2>
  <?php
  $id=$_REQUEST['eid'];
  include('dbconnection.php');
  $sql="select * from recordedsoloution where SolutionId='$id' ";
  $result=mysqli_query($con,$sql);
  $line=mysqli_fetch_array($result);
  if($_POST['btnsubmit']){
        $tid=$_POST['technicianid'];
		$pid=$_POST['problemid'];
    $sol=$_POST['problemsol'];
		if(empty($tid))
		{
			echo "<p style=\"color:red\">Please Enter Technician ID</p>";		
		}
		else if(empty($pid))
		{
			echo "<p style=\"color:red\">Please Enter Problem ID</p>";		
		}
		else
		{   $con=mysqli_connect(@"localhost","root","","shakticomputer");
			$sql="UPDATE `recordedsoloution` SET `TechnicianId` = '$tid' , `ProblemId` = '$pid', `ProblemSol` = '$sol' WHERE `SolutionId` = '$id' ;";
			if(mysqli_query($con,$sql))
							{
							echo "<h4 style=\"color:green\">Record Updated successfully!</h4>";
              header("Location:msolution.php");
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
  <div class="input-container">
    <i class="fa fa-product-hunt icon"></i>
    <select class=" input-field"  style="height:60px;" id="problemid" name="problemid">
      <?php
      $s="select * from problem";
      $result=mysqli_query($con,$s);
			while($line2=mysqli_fetch_array($result))
			{
        if($line2['ProblemId'] == $line['ProblemId']){
          ?>
          <option value="<?php echo $line2['ProblemId'];?>" selected >
        <?php echo $line2['ProblemDesc'];  ?>
        <?php
        }
        else{
        ?>
        <option value="<?php echo $line2['ProblemId'];?>" >
        <?php echo $line2['ProblemDesc']; ?>
        </Option>
      <?php
      }
    }
      ?>
        
    </select>
    
  </div>
  <div class="input-container">
    <i class="fa fa-product-hunt icon"></i>
     <textarea class="input-field"name="problemsol" id="problemsol" cols="5" rows="5" placeholder="Problem Solution"><?php echo $line['ProblemSol']; ?></textarea>
  </div>
  <input type="submit" class="btn" id="btnsubmit" name="btnsubmit" onclick="return WorkReport();" value="Update Solution" />
</form>
</div>
 <?php include 'footer.php'; ?>
</div>