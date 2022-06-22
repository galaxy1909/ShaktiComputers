<?php 
ob_start();
include('dbconnection.php');
$id=$_REQUEST['bid'];
$s="UPDATE `customer` SET `st` = 0 where `CustomerId` = '$id' ;";
if(mysqli_query($con,$s)){
    header("Location:buser.php");
}

?>