<?php 
  ob_start();
?>
<html>
    <head>
        <title>Login</title>
<link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/custom.css">  
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     	<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
	    <script src="../js/admin.js" language="javascript"></script>
        <link href="../css/login.css" rel="stylesheet" />
        </head>
        <body>
		<div class="top-navbar">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                <div class="sidebar-header">
                <h3><img src="../img/logo.png" class="img-fluid"/><span>Shakti Computer</span></h3>
</nav>
            </div>  


<div class="section">
<div class="container">
<div class="row full-height justify-content-center">
<div class="col-12 text-center align-self-center py-5">
<div class="section pb-5 pt-5 pt-sm-2 text-center">
<div class="card-3d-wrap mx-auto">
<div class="card-3d-wrapper">
<div class="card-front">
<div class="center-wrap">
<div class="section text-center">
<form  method="POST" name="login" id="login" action="">
<h4 class="mb-4 pb-3">Log In</h4>

<?php

           if(isset($_POST['btnsubmit']))
           {
                $un=$_POST['uname'];
                $ps=$_POST['password'];
                include('dbconnection.php');	
                $sql="select * from admin where Username='$un' AND Passcode='$ps'";
                $result=mysqli_query($con,$sql);
                $line = mysqli_fetch_array($result);
                $aid = $line["Adminid"];
                $count = mysqli_num_rows($result);
                session_start();
                if($count==1)
                {
                    if($line['st'] == 1){
                    $_SESSION['admin']=$aid;
                    header("Location: admin.php");
                    }
                    else{
                        echo "<p style = \"color:red\">You are BLocked By Admin</p>";
                    }
                }
                else
                {
                    echo "<p style = \"color:red\">Invalid Username/Password</p>";
                }
           }
?>
<div class="form-group">
<input type="text" name="uname" id="uname" class="form-style" placeholder="User Name"  />
<i class="input-icon uil uil-at"></i>
</div>	
<div class="form-group mt-2">
<input type="password" name="password"  id="password"  class="form-style" placeholder="Password"/>
<i class="input-icon uil uil-lock-alt"></i>
</div><br>
<input type="submit" class="btn" id="btnsubmit" name="btnsubmit" class="form-style"/>
<p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
        </body>
        </html>