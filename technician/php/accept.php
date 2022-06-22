<?php 
include('dbconnection.php');
session_start();
$id=$_REQUEST['aid'];
$tid=$_SESSION['tech'];
$sql="UPDATE problem SET `status` = 1 ,  `TechnicianId` = '$tid' Where `ProblemId` = '$id';";
if(mysqli_query($con,$sql)){
           header("Location:accept_request.php");
           
}
?>