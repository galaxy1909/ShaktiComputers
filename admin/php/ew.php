<?php include 'header.php' ; ?>
<div class="wrapper">
<div class="form">
<form method="POST" action="" name="Work Report" style="max-width:500px;margin:auto">
  <h2 class="form-heading"><strong>Update Work Report Here</strong></h2>
  <?php
  $id=$_REQUEST['eid'];
  include('dbconnection.php');
  $sql="select * from workreport where Workreportid='$id' ";
  $result=mysqli_query($con,$sql);
  $line=mysqli_fetch_array($result);
  if($_POST['btnsubmit']){
        $tid=$_POST['technicianid'];
		$wh=$_POST['workhours'];
		$date=$_POST['date'];
		$pid=$_POST['problemid'];
		if(empty($tid))
		{
			echo "<p style=\"color:red\">Please Enter Technician ID</p>";		
		}
		else if(empty($wh))
		{
			echo "<p style=\"color:red\">Please Enter Work Hours</p>";		
		}
		else if(empty($date))
		{
			echo "<p style=\"color:red\">Please Enter Date.</p>";		
		}
		else if(empty($pid))
		{
			echo "<p style=\"color:red\">Problem ID</p>";		
		}
		else
		{   $con=mysqli_connect(@"localhost","root","","shakticomputer");
			$sql="UPDATE `workreport` SET `TechnicianId` = '$tid' , `Workhours` = '$wh' ,  `Date` = '$date'  , `ProblemId` = '$pid' WHERE `Workreportid` = '$id' ;";
			if(mysqli_query($con,$sql))
							{
							echo "<h4 style=\"color:green\">Record Updated successfully!</h4>";
              header("Location:mworkreport.php");
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
    <i class="fa fa-btc icon"></i>
    <input id="workhours" name="workhours" class="input-field" type="text" placeholder="Work Hours" onkeydown = "return isNumeric(event.keyCode);" onpaste = "return false;" value="<?php echo $line['Workhours']; ?>" />
  </div>
  <div class="input-container">
    <i class="fa fa-btc icon"></i>
    <input id="date"  name="date" class="input-field" type="text" placeholder="Date" onfocus="this.type='date'" onblur="this.type='text'"  value="<?php echo $line['Date'];?>"/>
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
    <i class="fa fa-rupee icon"></i>
    <input  name="problemsol" id="problemsol" class="input-field" type="text" placeholder="Problem Solution" value="<?php echo $line['Problemsol']; ?>" />
  </div>  
   <input type="submit" class="btn" id="btnsubmit" name="btnsubmit" onclick="return WorkReport();" value="Update Work Report" />
</form>
</div>
 <?php include 'footer.php'; ?>
</div>