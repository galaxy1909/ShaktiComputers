<?php include 'header-login.php';?>
<?php 
$id=$_SESSION['user'];
include('dbconnection.php');
$sql="select * from customer where CustomerId = '$id' ";
$result=mysqli_query($con,$sql);
$line=mysqli_fetch_array($result);
?>
<div class="body">
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
                     $id=$_SESSION['user'];
                     $fn=$_POST['fname'];
                     $ln=$_POST['lname'];
                     $ph=$_POST['phone'];
                     $em=$_POST['email'];
                     $add=$_POST['add'];
                     $pin=$_POST['pin'];
                     $bd=$_POST['bdate'];
                     $path=1;
                     if($_POST['btnsubmit1']){
                        $sql="UPDATE `customer` SET `FirstName` = '$fn' , `LastName` = '$ln' , `Address` = '$add' , `Pincode`= '$pin' , `Email` = '$em'  , `Phone` = '$ph' , `Birthdate` = '$bd' WHERE `CustomerId` = '$id' ;";
                        if(mysqli_query($con,$sql))
                        {
                             header("Location:myaccount.php");

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
                    <div class="col-md-12"><label class="labels">Pincode</label><input id="pin" name="pin" type="text" class="form-control" placeholder="Pincode" value="<?php echo $line['Pincode']; ?>"></div>
                    <div class="col-md-12"><label class="labels">Birth Date</label><input id="bdate" name="bdate" type="text" class="form-control" onfocus="this.type='date'" onblur="this.type='text'"placeholder="Birthdate" value="<?php echo $line['Birthdate']; ?>"></div>
                </div>
                <div class="mt-5 text-center"><input id="btnsubmit1" name="btnsubmit1" class="btn btn-primary profile-button" type="submit"/></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Profile Photo</span></div><br>
                <div class="col-md-12"><label class="labels">Profile Pic</label><input id="file" name="file" type="file" class="form-control" placeholder="" value=""></div> <br>
                <div class="mt-5 text-center"><input id="btnsubmit2" name="btnsubmit2" class="btn btn-primary profile-button" type="submit"/></div>
            </div>
            </form>

        </div>
    </div>
</div>
</div>
</div>
                    </div>
<?php include 'footer.php';?>
<style>
 .body {
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