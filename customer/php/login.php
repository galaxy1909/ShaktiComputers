<?php
ob_start();
include ('header.php');
?>
<section class="login_box_area section-margin">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<div class="hover">
							<h4>New to our website?</h4>
							<a class="button button-account" href="register.php">Create an Account</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Log in to enter</h3>
						<form class="row login_form" action="#/" id="contactForm" method="POST">
							<div class="col-md-12 form-group">
							<?php

if(isset($_POST['btnsubmit']))
{
	 $un=$_POST['uname'];
	 $ps=$_POST['password'];
	 include('dbconnection.php');	
	 $sql="select * from customer where Username='$un' AND Password='$ps'";
	 $result=mysqli_query($con,$sql);
	 $line = mysqli_fetch_array($result);
	 $aid = $line["CustomerId"];
	 $count = mysqli_num_rows($result);
	 session_start();
	 if($count==1)
	 {
		 if($line['st'] == 1){
		 $_SESSION['user']=$aid;
		 header("Location: index-login.php");
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
								<input type="text" class="form-control" id="uname" name="uname" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
								</div>
							</div>
							<div class="col-md-12 form-group">
								<input type="submit" id="btnsubmit" name="btnsubmit" value="Log In" class="button button-login w-100" />
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php include 'footer.php'; ?>