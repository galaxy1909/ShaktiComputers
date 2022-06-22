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
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <form method="POST" action="" enctype="multipart/form-data">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                    <?php 
                     $id=$_SESSION['tech'];
                     $fn=$_POST['fname'];
                     $ln=$_POST['lname'];
                     $ph=$_POST['phone'];
                     $em=$_POST['email'];
                     $prof=$_POST['prof'];
                     $path=1;
                     $path="../../images/".$_FILES['file']['name'];
                     echo $path;
                     if($_POST['btnsubmit1']){
                        $sql="UPDATE `technician` SET `FirstName` = '$fn' , `LastName` = '$ln' ,  `Email` = '$em'  , `Phone` = '$ph' , `Profession` = '$prof' WHERE `TechnicianId` = '$id' ;";
                        if(mysqli_query($con,$sql))
                        {
                          

                                        }
                        else
                                        {
                                        echo "<h4 style=\"color:red\">Error !</h4>";
                                        }
                     }
                     if($_POST['btnsubmit2']){
                         $id=$_SESSION['tech'];
                         $path="../../images/".$_FILES['file']['name'];						
                              move_uploaded_file($_FILES['file']['tmp_name'],"../../images/".$_FILES['file']['name']);
                        
                        $s1="UPDATE `technician` SET `Photo` = '$path'  WHERE `TechnicianId` = '$id' ;";
                        if(mysqli_query($con,$s1))
                        {
                                     header("Location:myaccount.php");

                                        }
                        else
                                        {
                                        echo "<h4 style=\"color:red\">Error !</h4>";
                                        }
                     }
                    ?>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">First Name</label><input id="fname" name="fname" type="text" class="form-control" placeholder="First Name" value="<?php echo $line['FirstName']; ?>"></div>
                    <div class="col-md-6"><label class="labels">Last Name</label><input id="lname" name="lname" type="text" class="form-control" value="<?php echo $line['LastName']; ?>" placeholder="Last Name"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">PhoneNumber</label><input id="phone" name="phone" type="text" class="form-control" placeholder="enter phone number" value="<?php echo $line['Phone']; ?>"></div>
                    <div class="col-md-12"><label class="labels">Address</label><input id="add" name="add" type="text" class="form-control" placeholder="enter address" value="<?php echo $line['Address']; ?>"></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input id="email" name="email" type="text" class="form-control" placeholder="enter email id" value="<?php echo $line['Email']; ?>"></div>
                    <div class="col-md-12"><label class="labels">Profession</label><input id="prof" name="prof" type="text" class="form-control" placeholder="education" value="<?php echo $line['Profession']; ?>"></div>
                </div>
                <div class="mt-5 text-center"><input id="btnsubmit1" name="btnsubmit1" class="btn btn-primary profile-button" type="submit"/></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Profile Photo</span></div><br>
                <div class="col-md-12"><label class="labels">Profile Pic</label>
                <input id="file" name="file" type="file" class="form-control" placeholder="" value="<?php $line['Photo'];?>"></div> <br>
                <div class="mt-5 text-center"><input id="btnsubmit2" name="btnsubmit2" class="btn btn-primary profile-button" type="submit"/></div>
            </div>
            </form>

        </div>
    </div>
</div>
</div>
</div>
<?php include 'footer.php';?>

<style>
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
</style>