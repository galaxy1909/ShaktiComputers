<?php include 'header.php' ; ?>
<div class="wrapper">
<div class="form">
<form method="POST" action="" name="problem" style="max-width:500px;margin:auto">
  <h2 class="form-heading"><strong>Update Problem Here</strong></h2>
  <?php
  $id=$_REQUEST['eid'];
  include('dbconnection.php');
  $sql="select * from problem where ProblemId='$id' ";
  $result=mysqli_query($con,$sql);
  $line=mysqli_fetch_array($result);
  if($_POST['btnsubmit']){
        $pd=$_POST['prdesc'];
		$csol=$_POST['prsol'];
		$bid=$_POST['brandid'];
		$photo=$_POST['photo'];
		$pr=$_POST['price'];
		$flag=0;
		if(empty($pd))
		{
			echo "<p style=\"color:red\">Please Enter your Problem Description!</p>";		
		}
		else if(empty($csol))
		{
			echo "<p style=\"color:red\">Please Enter Problem Solution!</p>";		
		}

		else
		{   $con=mysqli_connect(@"localhost","root","","shakticomputer");
			$sql="UPDATE `problem` SET `ProblemDesc` = '$pd' , `ProblemSol` = '$csol'  WHERE `ProblemId` = '$id' ;";
			if(mysqli_query($con,$sql))
							{
							echo "<h4 style=\"color:green\">Record Edited successfully!</h4>";
              header("Location:mproblem.php");
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
    <i class="fa fa-user icon"></i>
    <textarea name="prdesc" id="prdesc"class="input-field" type="text" placeholder="Problem Description"  ><?php echo $line['ProblemDesc']; ?></textarea>
  </div>
 
     <div class="input-container">
    <i class="fa fa-photo icon"></i>
    <input id="prsol" name="prsol" class="input-field" type="text" placeholder="Photo"  value="<?php echo $line['ProblemSol']; ?>" >
  </div>
 
   <input type="submit" class="btn" id="btnsubmit" name="btnsubmit" onclick="return Product();" value="Update Problem"/>
</div>
 <?php include 'footer.php'; ?>
</div>