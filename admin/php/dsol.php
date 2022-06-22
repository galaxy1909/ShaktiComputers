<?php include 'header.php' ; ?>
<div class="wrapper">
<?php
$id=$_REQUEST['did'];
include('dbconnection.php');
$sql="delete from `recordedsoloution` where  `SolutionId` = '$id' ";
if(mysqli_query($con,$sql)){
    header("Location:msolution.php");
}
?>
 <?php include 'footer.php'; ?>
</div