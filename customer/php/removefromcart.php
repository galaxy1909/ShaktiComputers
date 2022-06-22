<?php
session_start();
ob_start();
include('dbconnection.php');
$pid=$_REQUEST['pid'];
$id=$_SESSION['user'];
$sql="DELETE from cart where CustomerId='$id' and ProductId='$pid';";
if(mysqli_query($con,$sql)){
    header("Location:cart.php");
  }
?>