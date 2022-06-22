<?php include 'header.php' ; ?>
<?php
session_start();
$id=$_REQUEST['rid'];
include('dbconnection.php');
$sql="select * from t_contact where ContactId='$id' ";
$result=mysqli_query($con,$sql);
$line=mysqli_fetch_array($result);
$tid=$line['TechnicianId'];
$s="select * from technician where TechnicianId='$tid'";
$r=mysqli_query($con,$s);
$l=mysqli_fetch_array($r);
?>
<div class="wrapper">
<div class="form">
<form method="POST" action="" name="admin"  enctype="multipart/form-data" style="max-width:500px;margin:auto">
  <h2 class="form-heading"><strong>Reply to <?php echo $l['FirstName'];?></strong></h2>
  <?php
  session_start();
 
  $reply=$_POST['reply'];
  if($_POST['btnsubmit']){
   
		if(empty($reply))
		{
			echo "<p style=\"color:red\">Please Enter your firstname</p>";		
		}
		else
		{   
			
    
			$con=mysqli_connect(@"localhost","root","","shakticomputer");
			$sql="INSERT INTO `reply` (`ReplyId`, `ContactId`, `Reply`) VALUES (NULL, '$id', '$reply');;";
			if(mysqli_query($con,$sql))
							{
							echo "<h4 style=\"color:green\">Record Updated successfully!</h4>";
                            header("Location:vquery.php");
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
    <textarea name="reply" id="reply"class="input-field" type="text" placeholder="Reply"></textarea>
  </div>
   <input type="submit" class="btn" id="btnsubmit" name="btnsubmit"  value="Reply" />
</form>
</div>
<br><br><br>
 <?php include 'footer.php'; ?>
</div>