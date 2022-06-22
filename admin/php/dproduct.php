<?php include 'header.php' ; ?>
<div class="wrapper">
<?php
$id=$_REQUEST['did'];
include('dbconnection.php');
$sql="delete from `product` where  `ProductId` = '$id' ";
if(mysqli_query($con,$sql)){
    header("Location:mproduct.php");
}
?>
 <?php include 'footer.php'; ?>
</div