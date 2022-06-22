<?php include 'header-login.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Make Request</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
   <ol class="breadcrumb">
     <li class="breadcrumb-item"><a href="#">Home</a></li>
     <li class="breadcrumb-item active" aria-current="page">Request-Make Request</li>
   </ol>
    </nav>
				</div>
			</div>
 </div>
	</section>
<div class="body">
<div class="form">
  <div class="form-toggle"></div>
  <div class="form-panel one">
    <div class="form-header">
      <center><h1>Send Us Request</h1></center>
    </div>
   
    <div class="form-content">
      <form method="POST" action="">
      <?php 
    $id=$_SESSION['user'];
    $pd=$_POST['pd'];
    $path=$_POST['recordedAudio'];
    echo $path;
    if($_POST['submit']){
        $sql="INSERT INTO `problem` (`ProblemId`, `ProblemDesc`,`Audio`, `TechnicianId`, `CustomerId`, `Status`,`A_Status`) VALUES (NULL, '$pd',NULL, NULL, '$id', NULL,0);";
        if(mysqli_query($con,$sql)){
            header("Location:vrequest.php");
        }
    }
  ?>
        <div class="form-group">
          <label>Problem Description</label>
          <textarea id="pd" rows="7"cols="5" type="text" name="pd" required="required"></textarea>
</div>
<center>
<p class="or">OR </p>
<div class="microphone">
<a href="requesta.php"><i  id="audio" class="fa fa-microphone"></i></a>
  <br>
  </center>
        <div class="form-group">
          <input style="background:#353DB5;"type="submit" id="submit" name="submit" value="submit">
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<?php include 'footer.php'; ?>
<style>


.body {
  color: rgba(0, 0, 0, 0.6);
  font-family: "Roboto", sans-serif;
  font-size: 14px;
  line-height: 1.6em;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.overlay, .form-panel.one:before {
  position: absolute;
  top: 0;
  left: 0;
  display: none;
  background: rgba(0, 0, 0, 0.8);
  width: 100%;
  height: 100%;
}

.form {
  z-index: 15;
  position: relative;
  background: #FFFFFF;
  width: 600px;
  border-radius: 4px;
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
  box-sizing: border-box;
  margin: 10px auto 10px;
  overflow: hidden;
}
.form-toggle {
  z-index: 10;
  position: absolute;
  top: 60px;
  right: 60px;
  background: #FFFFFF;
  width: 60px;
  height: 60px;
  border-radius: 100%;
  transform-origin: center;
  transform: translate(0, -25%) scale(0);
  opacity: 0;
  cursor: pointer;
  transition: all 0.3s ease;
}
.form-toggle:before, .form-toggle:after {
  content: "";
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  width: 30px;
  height: 4px;
  background: #4285F4;
  transform: translate(-50%, -50%);
}
.form-toggle:before {
  transform: translate(-50%, -50%) rotate(45deg);
}
.form-toggle:after {
  transform: translate(-50%, -50%) rotate(-45deg);
}
.form-toggle.visible {
  transform: translate(0, -25%) scale(1);
  opacity: 1;
}
.form-group {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 0 0 20px;
}

.form-group textarea,input {
  outline: none;
  display: block;
  background: rgba(0, 0, 0, 0.1);
  width: 100%;
  border: 0;
  border-radius: 4px;
  box-sizing: border-box;
  padding: 12px 20px;
  color: rgba(0, 0, 0, 0.6);
  font-family: inherit;
  font-size: inherit;
  font-weight: 500;
  line-height: inherit;
  transition: 0.3s ease;
}
.form-group textarea,input:focus {
  color: rgba(0, 0, 0, 0.8);
}
.two .form-group textarea,input {
  color: #FFFFFF;
}
.two .form-group textarea,input:focus {
  color: #FFFFFF;
}
.form-group button {
  outline: none;
  background: #4285F4;
  width: 100%;
  border: 0;
  border-radius: 4px;
  padding: 12px 20px;
  color: #FFFFFF;
  font-family: inherit;
  font-size: inherit;
  font-weight: 500;
  line-height: inherit;
  text-transform: uppercase;
  cursor: pointer;
}
.two .form-group button {
  background: #FFFFFF;
  color: #4285F4;
}
.form-group .form-remember {
  font-size: 12px;
  font-weight: 400;
  letter-spacing: 0;
  text-transform: none;
}
.form-group .form-remember input[type=checkbox] {
  display: inline-block;
  width: auto;
  margin: 0 10px 0 0;
}
.form-group .form-recovery {
  color: #4285F4;
  font-size: 12px;
  text-decoration: none;
}
.form-panel {
  padding: 60px calc(5% + 60px) 60px 60px;
  box-sizing: border-box;
}


.form-header {
  margin: 0 0 40px;
}
.form-header h1 {
  padding: 4px 0;
  color: #4285F4;
  font-size: 24px;
  font-weight: 700;
  text-transform: uppercase;
}
.two .form-header h1 {
  position: relative;
  z-index: 40;
  color: #FFFFFF;
}
.pen-footer {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  width: 600px;
  margin: 20px auto 100px;
}
.pen-footer a {
  color: #FFFFFF;
  font-size: 12px;
  text-decoration: none;
  text-shadow: 1px 2px 0 rgba(0, 0, 0, 0.1);
}
.pen-footer a .material-icons {
  width: 12px;
  margin: 0 5px;
  vertical-align: middle;
  font-size: 12px;
}

.cp-fab {
  background: #FFFFFF !important;
  color: #4285F4 !important;
}
.microphone{
  font-size:50px;
}
.or{
  font-size:30px;
}
</style>
