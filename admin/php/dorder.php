<?php include 'header.php' ; ?>
<div class="wrapper">
<?php
$id=$_REQUEST['did'];
include('dbconnection.php');
$sql="delete from `tblorder` where  `Orderid` = '$id' ";
if(mysqli_query($con,$sql)){
    header("Location:morder.php");
}
?>
 <?php include 'footer.php'; ?>
</div