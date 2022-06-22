<?php include 'header.php' ; ?>
<div class="wrapper">
<?php
$id=$_REQUEST['did'];
include('dbconnection.php');
$sql="delete from `customer` where  `CustomerId` = '$id' ";
if(mysqli_query($con,$sql)){
    header("Location:muser.php");
}
?>
 <?php include 'footer.php'; ?>
</div