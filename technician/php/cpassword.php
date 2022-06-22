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
        <div class="col-md-6 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="<?php echo $line['Photo']; ?>"><span class="font-weight-bold"><?php echo $line['Username']; ?></span><span class="text-black-50"><?php echo $line['Email'];?></span><span></span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <form method="POST" action="">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Change Password</h4>
                    <?php 
                     $id=$_SESSION['tech'];
                     $p=$_POST['p'];
                     $np=$_POST['np'];
                     $cp=$_POST['cp'];
                    if($_POST['btnsubmit']){
                        if($p == $line['Password']){
                             if($np != $cp){
                                 echo"<br><p style=\"color:red;margin:10px;\">New Password is Not matched with Confirm Password</p>";
                             }
                             else{
                                   $sql="UPDATE `technician` SET `Password` = '$np'  WHERE `TechnicianId` = '$id' ;";
                                   if(mysqli_query($con,$sql))
                                   {
                          

                                        }
                            
                                    else
                                        {
                                        echo "<h4 style=\"color:red\">Error !</h4>";
                                        }
                                }
                            }
                            }
                    ?>
                </div>
                <div class="row mt-3">
                <div class="col-md-12"><label class="labels">Current Password</label><input id="p" name="p" type="password" class="form-control" placeholder="Password" value=""></div>
                    <div class="col-md-12"><label class="labels">New Password</label><input id="np" name="np" type="password" class="form-control" placeholder="New Password" value=""></div>
                    <div class="col-md-12"><label class="labels">Confirm Password</label><input id="cp" name="cp" type="password" class="form-control" placeholder="Confirm Password" value=""></div>
                    
                </div>
                <div class="mt-5 text-center"><input id="btnsubmit" name="btnsubmit" class="btn btn-primary profile-button" type="submit"/></div>
            </div>
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