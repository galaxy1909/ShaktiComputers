<?php 
ob_start();
session_start();
$pid=$_REQUEST['pid'];
$con=mysqli_connect(@"localhost","root","","shakticomputer");
$cid=$_SESSION['user'];
$sql="select * from cart where CustomerId = '$cid' and ProductId= '$pid';";
$result= mysqli_query($con,$sql);
echo "hello ";
echo $pid;
echo $cid;
$line=mysqli_fetch_array($result);
if($line['Piece'] > 0){
    $q=$line['Piece'];
    $q=$q + 1;
  $s1="UPDATE `cart` SET `Piece` = '$q' WHERE ProductId = '$pid';";
  if(mysqli_query($con,$s1)){
      header("Location:shop.php");
  }
}
else{
$s2="INSERT INTO `cart` (`CustomerId`, `ProductId`, `Piece`) VALUES ('$cid', '$pid', '1');";
if(mysqli_query($con,$s2)){
    header("Location:shop.php");
}
}
?>