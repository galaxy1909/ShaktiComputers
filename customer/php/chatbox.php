<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
.container1 {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
  width:70%;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
  float:right;
}

.container1::after {
  content: "";
  clear: both;
  display: table;
}

.container1 img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container1 img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
.chat-btn {
    position:fixed;
    right: 14px;
    bottom: 30px;
    cursor: pointer;
    z-index: 10;

}

.chat-btn .close {
    display: none
}

.chat-btn i {
    transition: all 0.9s ease
}

#check:checked~.chat-btn i {
    display: block;
    pointer-events: auto;
    transform: rotate(180deg)
}

#check:checked~.chat-btn .comment {
    display: none
}
.chat-btn i {
    font-size: 22px;
    color: #fff !important
}

.chat-btn {
    width: 50px;
    height: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50px;
    background-color: blue;
    color: #fff;
    font-size: 22px;
    border: none
}

.wrapper {
    position: fixed;
    z-index: 10;
    right: 20px;
    bottom: 100px;
    width: 300px;
    background-color: #fff;
    border-radius: 5px;
    opacity: 0;
    transition: all 0.4s
}

#check:checked~.wrapper {
    opacity: 1
}

.header {
    padding: 13px;
    background-color: #21A2F1;
    border-radius: 5px 5px 0px 0px;
    margin-bottom: 10px;
    color: white;
}

.chat-form {
    padding: 15px
}

.chat-form input,
textarea,
button {
    margin-bottom: 10px
}

.chat-form textarea {
    resize: none
}

.form-control:focus,
.btn:focus {
    box-shadow: none
}

.btn,
.btn:focus,
.btn:hover {
    background-color: blue;
    border: blue
}

#check {
    display: none !important
}
</style>
<script language="javascript">
			function clearInput()
			{
					document.getElementById('message').value='';
			}
      </script>
 
 <input type="checkbox" id="check"> <label class="chat-btn" for="check"> <i class="fa fa-comment comment"></i>
 <i class="fa fa-close close"></i> </label>
<div class="wrapper">
    <div class="header">
        <h6>Chat with Us</h6>
    </div>
    
    

<form class="form" id="chatbox" method="POST" action="">
<?php 
session_start();
ob_start();
    include('dbconnection.php');
    $id=$_SESSION['user'];
   $s = "select * from message where CustomerId='$id' Order By MessageId DESC LIMIT 2";
   $r=mysqli_query($con,$s);
   while($line = mysqli_fetch_array($r)){
 ?>
<div class="container1 darker">
  <p><?php echo $line['CMessage']; ?></p>
</div>
<br><br><br><br>
<?php if($line['TMessage'] != NULL){?>
<div class="container1">
  <p><?php  echo $line['TMessage'];
  ?> 
</p>
</div>
<?php
}
   }
?>
    <?php
    
    include('dbconnection.php');
      $id=$_SESSION['user'];
        $m=$_POST['message'];
        $date=date("Y/m/d");
     if($_POST['submit'])
     {
       if($m != NULL){
         $sql="INSERT INTO `message` (`MessageId`, `TechnicianId`, `CustomerId`, `CMessage`, `TMessage`,`Date`,`T_Status`) VALUES (NULL, NULL, '$id', '$m', NULL,'$date',0);";
        if(mysqli_query($con,$sql)){
            echo"<script>clearInput();</script>";
                }
                else{
                    echo "error";
                }
              }
     }
    ?>
    <input type="text" class="form-control" placeholder="Your Text Message" id="message" name="message"/>
    <input type="submit" id="submit" name="submit" class="btn btn-success btn-block" value="submit"> 
</form>
</div>
</div>

