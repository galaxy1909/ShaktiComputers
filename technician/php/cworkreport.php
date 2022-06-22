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
                <form method="POST" action="" enctype="multipart/form-data">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Create Work Report</h4>
                    <?php 
                     $id=$_SESSION['tech'];
                     $wh=$_POST['workhour'];
                     $pid=$_POST['problemid'];
                     $ps=$_POST['ps'];
                     $d=$_POST['date'];
                     if(empty($ps))
                     { $ps="---------"; }
                     echo $ps;
                    if($_POST['btnsubmit1']){
                        $path="../../audio/".$_FILES['file']['name'];					
      move_uploaded_file($_FILES['file']['tmp_name'],"../../audio/".$_FILES['file']['name']);
                    $sql="INSERT INTO `workreport` (`Workreportid`, `TechnicianId`, `Workhours`, `Date`, `ProblemId`, `Problemsol`,`Audio`) VALUES (NULL, '$id', '$wh', '$d', '$pid', '$ps','$path');";
                     if(mysqli_query($con,$sql))
                        {
                            
                          

                        }
                        else
                                        {
                                        echo "<h4 style=\"color:red\">Error !</h4>";
                                        }
                     }
                    
                    ?>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Work Hours</label><input id="workhour" name="workhour" type="text" class="form-control" placeholder="Work Hours" value=""></div>
                    <div class="col-md-6"><label class="labels">Date</label><input id="date" name="date" type="text" class="form-control" value="" placeholder="Date" onblur="this.type='text'" onfocus="this.type='date'"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">ProblemId</label>
                    <select class="form-control"  style="height:60px;" id="problemid" name="problemid">
                    <option value="-1">--- Select Problem ---</option>
                    <?php
                    include('dbconnection.php');
                    $s="select * from problem";
                    $result=mysqli_query($con,$s);
			        while($line=mysqli_fetch_array($result))
			       {
                     ?>
                     <option value="<?php echo $line['ProblemId'];?>" >
                     <?php echo $line['ProblemDesc']; ?>
                     </Option>
                     <?php
                     }
                     ?>
        
    </select>
    
  </div>
                    <div class="col-md-12"><label class="labels">Problem Solution</label>
                    <textarea id="ps" name="ps" type="text" class="form-control" placeholder="Problem Solution" value=""></textarea></div>
                </div>
                <br>
              <center>  
            <h4>OR</h4>
<div class="microphone">
<i id="audio" class="fa fa-microphone"></i>
<br>
<p class="button2">
    <button class="btn btn-secondary profile-button"type="button" id="record">Record</button>
    <button class="btn btn-secondary profile-button"type="button" id="stopRecord" disabled>Stop</button>
  </p>
  <p>
    <audio id=recordedAudio></audio>        
  </p>
  </center>
  <div class="col-md-12"><label class="labels">Problem Solution(Download After Recording And then upload it)</label>
                    <input id="file" name="file" type="file" class="form-control" placeholder="Problem Solution" value=""></div>
                </div>
                <div class="mt-5 text-center"><input id="btnsubmit1" name="btnsubmit1" class="btn btn-primary profile-button" type="submit"/></div>
            </div>
        </div>
        </form>

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