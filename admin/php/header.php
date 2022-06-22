<?php 
 ob_start();
 session_start();
 include('dbconnection.php');
 $id=$_SESSOIN['admin'];
 $sql="select * from admin where Adminid='$id'";
 $result=mysqli_query($con,$sql);
 $line=mysqli_fetch_array($result);
 if(isset($_SESSION['admin']))
 {
     
 }
 else
 {
     header("Location:login.php");
 }
?>

<html lang="en">
  <head>
        <title>VP admin</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/custom.css">  
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     	<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
	    <script src="../js/admin.js" language="javascript"></script>
        <style>
            .badge{
  position: relative;
  top: -40px;
  right: -30px;
  padding: 5px 10px;
  border-radius: 40%;
  background-color: red;
  color: white;
            }
</style>
      
  </head>
  <body>

<div class="body-overlay"></div>
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="../img/logo.png" style="width:300px; height:70px;"class="img-fluid"/></h3>
            </div>
            <ul class="list-unstyled components">
			<li  class="active">
                    <a href="admin.php" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
                </li>
		
		      
			
                <li>
                    <a href="maccount.php" class="dashboard"><i class="material-icons">account_circle</i><span>My Account</span></a>
                </li>
                <li>
                    
                    <a href="uaccount.php" class="dashboard"><i class="material-icons">account_circle</i><span>Update Account</span></a>
                </li>
                <li>
                    <a href="cpassword.php" class="dashboard"><i class="material-icons">lock</i><span>Change Password</span></a>
                </li>
                <li class="dropdown">
                    <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<i class="material-icons">add_circle</i><span>Create</span></a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                        <li>
                            <a href="ctechnician.php"><i class="material-icons">account_circle</i>Technician</a>
                        </li>
                        <li>
                            <a href="cuser.php"><i class="material-icons">account_circle</i>User</a>
                        </li>
                        <li>
                            <li>
                                <a href="cadmin.php"><i class="material-icons">account_circle</i>Admin</a>
                            </li>
                        <li>
                            <a href="corder.php"><i class="material-icons">list_alt</i>Order</a>
                        </li>
                        <li>
                            <a href="cproduct.php"><i class="material-icons">list</i>Product/Item</a>
                        </li>
						<li>
                            <a href="cbrand.php"><i class="material-icons">list</i>Brand</a>
                        </li>
						<li>
                            <a href="ccategory.php"><i class="material-icons">list</i>category</a>
                        </li>
						<li>
                            <a href="cproblem.php"><i class="material-icons">list</i>Request</a>
                        </li>
						<li>
                            <a href="ccomplaint.php"><i class="material-icons">list</i>Complaint</a>
                        </li>
						<li>
                            <a href="cworkreport.php"><i class="material-icons">list</i>Work Report</a>
                        </li>
						<li>
                            <a href="csolution.php"><i class="material-icons">list</i>Problem Solution</a>
                        </li>
                        <li>
                            <a href="cbill.php"><i class="material-icons">list</i>Request's Bill</a>
                        </li>
                    </ul>
                </li>
               
                <li class="dropdown">
                    <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<i class="material-icons">visibility</i><span>View</span></a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu2">
                       <li>
                            <a href="vtechnician.php"><i class="material-icons">account_circle</i>Technician</a>
                        </li>
                        <li>
                            <a href="vuser.php"><i class="material-icons">account_circle</i>User</a>
                        </li>
                        <li>
                            <li>
                                <a href="vadmin.php"><i class="material-icons">account_circle</i>Admin</a>
                            </li>
                        <li>
                            <a href="vorder.php"><i class="material-icons">list_alt</i>Order</a>
                        </li>
                        <li>
                            <a href="vproduct.php"><i class="material-icons">list</i>Product/Item</a>
                        </li>
						<li>
                            <a href="vbrand.php"><i class="material-icons">list</i>Brand</a>
                        </li>
						<li>
                            <a href="vcategory.php"><i class="material-icons">list</i>category</a>
                        </li>
						<li>
                            <a href="vproblem.php"><i class="material-icons">list</i>Request</a>
                        </li>
						<li>
                            <a href="vcomplaint.php"><i class="material-icons">list</i>Complaint</a>
                        </li>
						<li>
                            <a href="vworkreport.php"><i class="material-icons">list</i>Work Report</a>
                        </li>
						<li>
                            <a href="vsolution.php"><i class="material-icons">list</i>Problem Solution</a>
                        </li>
                        <li>
                            <a href="vquery.php"><i class="material-icons">list</i>Query</a>
                        </li>
                        <li>
                            <a href="vreply.php"><i class="material-icons">list</i>Reply</a>
                        </li>
                        <li>
                            <a href="vbill.php"><i class="material-icons">list</i>Request's Bill</a>
                        </li>
                        <li>
                            <a href="vchatbox.php"><i class="material-icons">list</i>Chat App Message</a>
                        </li>
                    </ul>
                </li>
				<li class="dropdown">
                    <a href="#homeSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<i class="material-icons">add_circle</i><span>Manage</span></a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu4">
                        <li>
                            <a href="mtechnician.php"><i class="material-icons">account_circle</i>Technician</a>
                        </li>
                        <li>
                            <a href="muser.php"><i class="material-icons">account_circle</i>User</a>
                        </li>
                        <li>
                            <li>
                                <a href="madmin.php"><i class="material-icons">account_circle</i>Admin</a>
                            </li>
                        <li>
                            <a href="morder.php"><i class="material-icons">list_alt</i>Order</a>
                        </li>
                        <li>
                            <a href="mproduct.php"><i class="material-icons">list</i>Product/Item</a>
                        </li>
						<li>
                            <a href="mbrand.php"><i class="material-icons">list</i>Brand</a>
                        </li>
						<li>
                            <a href="mcategory.php"><i class="material-icons">list</i>category</a>
                        </li>
						<li>
                            <a href="mproblem.php"><i class="material-icons">list</i>Problem</a>
                        </li>
						<li>
                            <a href="mcomplaint.php"><i class="material-icons">list</i>Complaint</a>
                        </li>
						<li>
                            <a href="mworkreport.php"><i class="material-icons">list</i>Work Report</a>
                        </li>
						<li>
                            <a href="msolution.php"><i class="material-icons">list</i>Problem Solution</a>
                        </li>
                        <li>
                            <a href="mbill.php"><i class="material-icons">list</i>Request's Bill</a>
                        </li>
                     </ul>
                </li>
                <li class="dropdown">
                    <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<i class="material-icons">block</i><span>Block/Unblock</span></a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu3">
                        <li>
                            <a href="btechnician.php"><i class="material-icons">account_circle</i>Techinician</a>
                        </li>
                        <li>
                            <a href="buser.php"><i class="material-icons">account_circle</i>User</a>
                        </li>
                        <li>
                            <a href="badmin.php"><i class="material-icons">account_circle</i>Admin</a>
                        </li>
                    </ul>
                </li>
                 
                <li>
                    <a href="c_s_order.php" class="dashboard"><i class="material-icons">account_circle</i><span>Update Order Progress</span></a>
                </li>
               <li class="">
                    <a href="logout.php"><i class="material-icons">logout</i><span>Logout</span></a>
                </li>        
             </ul>    
        </nav>
        <div id="content">
		<div class="top-navbar">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                        <span class="material-icons">arrow_back_ios</span>
                    </button>
                    <a class="navbar-brand" href="admin.php"> Dashboard 
                  
                </a>
					
                    <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="material-icons">more_vert</span>
                    </button>

                    <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">   
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                   <?php 
                                   $id=$_SESSION['admin'];
                                   include('dbconnection.php');
                                   $sql="select * from admin where Adminid='$id';";
                                   $result=mysqli_query($con,$sql);
                                   $line=mysqli_fetch_array($result);
                                   $photo=$line['Photo'];
                                   $uname=$line['FirstName'];
                                   $name=strtolower($photo);
                                   echo "<img hieght=\"20px\"  style=\"border-radius: 70%; border:2px solid red;\"   width=\"30px\" src=\"$name\"/>&nbsp;";      
                                   echo $uname;                                    
                              ?> 
								</a>
                            </li>
							
                        </ul>
                    </div>
                </div>
            </nav>
	    </div>
<?php include 'push.php';?>


