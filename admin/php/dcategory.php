<?php include 'header.php' ; ?>
<div class="wrapper">
<?php
$id=$_REQUEST['did'];
include('dbconnection.php');
$sql="delete from `category` where  `CategoryId` = '$id' ";
if(mysqli_query($con,$sql)){
    header("Location:mcategory.php");
}
?>
<?php include 'footer.php'; ?>
</div