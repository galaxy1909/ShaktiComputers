<?php include 'header.php' ; ?>
<div class="wrapper">
<?php
$id=$_REQUEST['did'];
$con=mysqli_connect(@"localhost","root","","shakticomputer");
$sql="delete from `complaint` where  `Complaintid` = '$id' ";
if(mysqli_query($con,$sql)){
    header("Location:mcomplaint.php");
}
?>
 <?php include 'footer.php'; ?>
</div>