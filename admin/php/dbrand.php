<?php include 'header.php' ; ?>
<div class="wrapper">
<?php
$id=$_REQUEST['did'];
include('dbconnection.php');
$sql="delete from `brand` where  `BrandId` = '$id' ";
if(mysqli_query($con,$sql)){
    header("Location:mbrand.php");
}
?>
 <?php include 'footer.php'; ?>
</div