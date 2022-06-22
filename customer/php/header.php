<?php 
ob_start();
include('dbconnection.php');
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
          <a class="navbar-brand logo_h" href="index.php"><img  src="../img/logo.png" style="height:70px;width:200px;"alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
              <li class="nav-item submenu dropdown">
                <a href="shop.php" class="nav-link">Shop</a>
    							</li>
              
              <li class="nav-item"><a class="nav-link" href="request.php">Make Request</a></li>
              <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            </ul>

            <ul class="nav-shop">
              <li class="nav-item"><a class="button button-header" href="login.php">Login</a></li>           
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <script>
  function isNumeric(keyCode){

return ((keyCode >= 48 && keyCode <= 57) || keyCode == 8 || (keyCode >= 96 && keyCode <= 106) ||  keyCode == 9 || keyCode == 190 ||  keyCode == 13);
}
</script>
