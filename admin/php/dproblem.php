<?php include 'header.php' ; ?>
<div class="wrapper">
<?php
$id=$_REQUEST['did'];
include('dbconnection.php');
$sql="delete from `problem`  where  `problem`.`ProblemId` = '$id';";
if(mysqli_query($con,$sql)){
    header("Location:mproblem.php");
}
?>
 <?php include 'footer.php'; ?>
</div