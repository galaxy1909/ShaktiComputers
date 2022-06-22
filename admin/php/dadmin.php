<?php include 'header.php' ; ?>
<div class="wrapper">
<?php
$id=$_REQUEST['did'];
include('dbconnection.php');
$sql="delete from `admin` where  `Adminid` = '$id' ";
if(mysqli_query($con,$sql)){
    header("Location:madmin.php");
}
?>
 <?php include 'footer.php'; ?>
</div