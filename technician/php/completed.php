<?php 
include('dbconnection.php');
session_start();
$id=$_REQUEST['cid'];
$sql="UPDATE problem SET `status` = 3   Where `ProblemId` = '$id';";
if(mysqli_query($con,$sql)){
           header("Location:request.php");
           
}
?>