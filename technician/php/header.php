<?php include 'push.php';?>
<?php 
 ob_start();
 session_start();
 include('dbconnection.php');
 $id=$_SESSOIN['tech'];
 $s="select * from technician where TechnicianId='$id';";
 $result=mysqli_query($con,$s);
 $line=mysqli_fetch_array($result);
 if(isset($_SESSION['tech']))
 {
    
 }
 else{
    header("Location:login.php");
 }

?> 
        <title>Shakti Computer Technician</title>
        <link href="../img/favicon.ico" rel="icon">
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="../lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="../lib/animate/animate.min.css" rel="stylesheet">
        <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">

 <div class="top-bar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="logo">
                    <a href="index.php">
                        <img src="../img/logo.png" style="width:200px;"/>
                 </a>
                   
                </div>
            </div>
            <div class="col-lg-8 col-md-7 d-none d-lg-block">
                <div class="row">
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Opening Hour</h3>
                                <p>Mon - Sat, 8:00 - 9:00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Call Us</h3>
                                <p>9327293724</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Email Us</h3>
                                <p>shakticomputer@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Bar End -->

<!-- Nav Bar Start -->
<div class="nav-bar">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="accept_request.php" class="nav-item nav-link">Accept Request</a>
                    <a href="accept_order.php" class="nav-item nav-link">Accept Order</a>
                    <a href="c_s_order.php" class="nav-item nav-link">Update Order</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Create</a>
                        <div class="dropdown-menu">
                        <a href="cbill.php" class="dropdown-item">Request's Bill</a>
                            <a href="cworkreport.php" class="dropdown-item">Work Report</a>
                            </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">View</a>
                        <div class="dropdown-menu">
                            <a href="vworkreport.php" class="dropdown-item">Work Report</a>
                            <a href="request.php" class="dropdown-item">Accepted Request</a>
                            <a href="vsolution.php" class="dropdown-item">Solution</a>
                            <a href="vcomplaint.php" class="dropdown-item">Complaint</a>
                            <a href="vreply.php" class="dropdown-item">Reply</a>
                            <a href="chatbox_message.php" class="dropdown-item">Chat Bot Message</a>
                        </div>
                    </div>
                    <a href="#contact" class="nav-item nav-link">Contact</a>
                </div>
                <div class="nav-item dropdown mr-auto navbar-nav">
                <a class="nav-link  dropdown-toggle" data-toggle="dropdown" href="#">
                                   <?php 
                                   $id=$_SESSION['tech'];
                                   include('dbconnection.php');
                                   $sql="select * from technician where TechnicianId='$id';";
                                   $result=mysqli_query($con,$sql);
                                   $line=mysqli_fetch_array($result);
                                   $photo=$line['Photo'];
                                   $uname=$line['Username'];
                                   $name=strtolower($photo);
                                   echo "<img hieght=\"20px\"  style=\"border-radius: 70%; border:2px solid red;\"   width=\"30px\" src=\"$name\"/>&nbsp;";      
                                   echo $uname;                                    
                              ?> 
								</a>
                        <div class="dropdown-menu">
                            <a href="myaccount.php" class="dropdown-item">My Account</a>
                            <a href="uaccount.php" class="dropdown-item">Upadate Account</a>
                            <a href="cpassword.php" class="dropdown-item">Change Password</a>
                        </div>
                    </div>
                <div class="ml-auto">
                    <a class="btn btn-custom" href="logout.php">Logout</a>
                </div>
            </div>
        </nav>
    </div>
</div>
