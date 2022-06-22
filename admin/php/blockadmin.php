<?php 
ob_start();

include('dbconnection.php');
$id=$_REQUEST['bid'];
$s="UPDATE `admin` SET `st` = 0 where `Adminid` = '$id' ;";
if(mysqli_query($con,$s)){
    header("Location:badmin.php");
}

?>