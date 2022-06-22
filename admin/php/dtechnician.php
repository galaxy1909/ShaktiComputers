<?php include 'header.php'; ?>
<div class="wrapper">
    <?php 
    $id=$_REQUEST['did'];
    include('dbconnection.php');
    $sql="delete from `technician` where  `TechnicianId` = '$id' ";
    if(mysqli_query($con,$sql)){
        header("Location:mtechnician.php");
    }
    ?>
<?php include 'footer.php';?>
</div>