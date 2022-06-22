<?php 
ob_start();
session_start();
include('dbconnection.php');
$id=$_SESSION['user'];
if($_SESSION['user']){

}
else{
    header("Location:login.php");
}
?>
<title>Shakti Computer- Home</title>
	<link rel="icon" href="../img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="../vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="../vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="../vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="../vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
  
  <link rel="stylesheet" href="../css/style.css">
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="index.php"><img  src="../img/logo.png" style="height:70px;width:150px;"alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item "><a class="nav-link" href="index-login.php">Home</a></li>
              <li class="nav-item submenu dropdown">
                <a href="shop.php" class="nav-link">Shop</a>
							</li>
              
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Request</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="request.php">Make Request</a></li>
                  <li class="nav-item"><a class="nav-link" href="vrequest.php">View Request</a></li>
                </ul>
							</li>
              <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Account</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="myaccount.php">My Account</a></li>
                  <li class="nav-item"><a class="nav-link" href="updateaccount.php">Upadate Account</a></li>
                  <li class="nav-item"><a class="nav-link" href="cpassword.php">Change Password</a></li>
                  <li class="nav-item"><a class="nav-link" href="myorder.php">My Order</a></li>
                </ul>
							</li>
              </ul>&nbsp;
            <ul class="nav-shop">
              <li class="nav-item"><button><a href="cart.php"><i class="ti-shopping-cart"></i></a><span class="nav-shop__circle">
               <?php
                $sql="select * from cart";
                $result=mysqli_query($con,$sql);
                $num=mysqli_num_rows($result);
                echo $num;
               ?>
              </span></button> </li>
              <li class="nav-item"><a class="button button-header" href="checkout.php">Buy Now</a></li> 
              
              <li class="nav-item"><a class="button button-header" href="logout.php">Logout</a></li>           
            </ul>
            <?php
                $sql="select * from customer where CustomerId='$id';";
                $result=mysqli_query($con,$sql);
                $line=mysqli_fetch_array($result);
                $photo=$line['Photo'];
                $name=strtolower($photo);
                echo "<img hieght=\"20px\"  style=\"border-radius: 70%; border:2px solid red;\"   width=\"30px\" src=\"$name\"/>&nbsp;";
                echo $line['FirstName'];
            ?>
          </div>
        </div>
      </nav>
    </div>
  </header>
  