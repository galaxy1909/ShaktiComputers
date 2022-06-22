<?php include 'header.php' ; ?>
<div class="wrapper">
<?php
$id=$_REQUEST['did'];
include('dbconnection.php');
$sql="delete from `workreport` where  `Workreportid` = '$id' ";
if(mysqli_query($con,$sql)){
    header("Location:mworkreport.php");
}
?>
 <?php include 'footer.php'; ?>
</div