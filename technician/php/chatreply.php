<?php include 'header.php';?>
<?php 
$id=$_SESSION['tech'];
include('dbconnection.php');
$sql="select * from technician where TechnicianId = '$id' ";
$result=mysqli_query($con,$sql);
$line=mysqli_fetch_array($result);
?>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="<?php echo $line['Photo']; ?>"><span class="font-weight-bold"><?php echo $line['Username']; ?></span><span class="text-black-50"><?php echo $line['Email'];?></span><span></span></div>
        </div>
        <div class="col-md-7 border-right">
            
            <div class="p-3 py-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Reply</h4>
                    
                </div> 
            <form method="POST" action="" enctype="multipart/form-data">
                <?php 
                     $id=$_SESSION['tech'];
                     $wh=$_POST['reply'];
                     $mid=$_REQUEST['rid'];
                     
                    if($_POST['btnsubmit']){
                        $sql="UPDATE `message` SET `TMessage`='$wh' , `TechnicianId` = '$id' where `MessageId`='$mid'";
                        if(mysqli_query($con,$sql)){
                            header("Location:chatbox_message.php");
                        }
                    }
                    ?>

                    <div class="col-md-12">
                    <textarea id="reply" name="reply" type="text" class="form-control" placeholder="Reply" value=""></textarea></div>
                
                <div class="mt-5 text-center"><input id="btnsubmit" name="btnsubmit" class="btn btn-primary profile-button" type="submit"/></div>
                </div>


        </form>
        <h4 class="text">Older Reply</h4>

                <?Php 
                $mid=$_REQUEST['rid'];
                $sql="select * from message where TechnicianId='$id' order by date";
                $result=mysqli_query($con,$sql);
                $l=mysqli_fetch_array($result);
                while($l=mysqli_fetch_array($result)){
                    $cid=$l['CustomerId'];
                    $s1="select * from customer where CustomerId='$cid'";
                    $r1=mysqli_query($con,$s1);
                $l1=mysqli_fetch_array($r1);
                ?> 
            <div class="d-flex justify-content-between align-items-center mb-3 customer">
                    <?php echo $l1['FirstName'].":    ".$l['CMessage'];?>
            </div>
            <br>
            <br>
            <div class="d-flex justify-content-between align-items-center mb-3 technician">
                    <?php echo "You:     ".$l['TMessage'];?>
            </div>  
          <?php 
                }
          ?>

</div>
</div>
            </div>
    </div>
</div>
</div>
</div>
<?php include 'footer.php';?>

<style>
    
.button2{
  font-size:30px;
}
 body {
    background: linear-gradient(#9FA5D5,#E8F5C8);
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
.microphone{
  font-size:50px;
}
#record:hover{
    background-color:green;
}
.customer{
    border-color: #ccc;
  background-color: #ddd;
    float:left;
    height:40px;
    border-radius:5px;
}
.technician{
    border: 2px solid #dedede;
  background-color: #f1f1f1;
    float:right;
    height:40px;
    border-radius:5px;
}
</style>

</style>
<script> 
    let device = navigator.mediaDevices.getUserMedia({audio:true}); //function add(a,b){return a + b }
    device.then(stream => {getdata(stream)})                // let add = (a,b) => { a + b };

    function getdata(stream) {
      rec = new MediaRecorder(stream);
      rec.ondataavailable = e => {
        audioChunks.push(e.data);
        if (rec.state == "inactive"){
          let blob = new Blob(audioChunks,{type:'audio/mp3'});
          recordedAudio.src = URL.createObjectURL(blob);
          recordedAudio.controls=true;
          recordedAudio.autoplay=false;
          sendData(blob)
          }
        }
      }
    
    function sendData(data) {}
      record.onclick = e => {
        record.disabled = true;
        stopRecord.style.backgroundColor = "black"
        stopRecord.disabled=false;
        audioChunks = [];
        rec.start();
        }
      stopRecord.onclick = e => {
        record.disabled = false;
        stop.disabled=true;
        rec.stop();
        }
  </script>