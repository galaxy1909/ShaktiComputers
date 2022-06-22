<?php 
include('dbconnection.php');
session_start();
$id=$_REQUEST['wid'];
$sql="UPDATE problem SET `status` = 2   Where `ProblemId` = '$id';";
if(mysqli_query($con,$sql)){
           header("Location:request.php");
           
}
?>