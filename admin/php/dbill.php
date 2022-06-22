<?php include 'header.php' ; ?>
<div class="wrapper">
<?php
$id=$_REQUEST['did'];
include('dbconnection.php');
$sql="delete from `bill`  where  `bill`.`BillId` = '$id';";
if(mysqli_query($con,$sql)){
    header("Location:mbill.php");
}
?>
 <?php include 'footer.php'; ?>
</div