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
                <form method="POST" action="">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Create Bill</h4>
                    <?php 
                     $id=$_SESSION['tech'];
                     $cid=$_POST['customerid'];
                     $pid=$_POST['problemid'];
                     $a=$_POST['amount'];
                     $d=$_POST['date'];
                    if($_POST['btnsubmit1']){
                        
                    $sql="INSERT INTO `bill` (`BillId`, `ProblemId`, `TechnicianId`, `CustomerId`, `Amount`, `Date`,`A_Status`) VALUES (NULL, '$pid', '$id', '$cid', '$a', '$d',0);";
                     if(mysqli_query($con,$sql))
                        {
                          header("Location:index.php");

                        }
                        else
                                        {
                                        echo "<h4 style=\"color:red\">Error !</h4>";
                                        }
                     }
                    
                    ?>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Request Id</label>
                    <select class="form-control" id="problemid" name="problemid">
                    <option value="-1">--- Select Request ---</option>
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
        
    </select></div>
                    <div class="col-md-6"><label class="labels">Customer ID</label>
                    <select class="form-control" id="customerid" name="customerid">
                    <option value="-1">--- Select Customer ---</option>
                    <?php
                    include('dbconnection.php');
                    $s="select * from customer";
                    $result=mysqli_query($con,$s);
			        while($line=mysqli_fetch_array($result))
			       {
                     ?>
                     <option value="<?php echo $line['CustomerId'];?>" >
                     <?php echo $line['FirstName']; ?>
                     </Option>
                     <?php
                     }
                     ?>
        
    </select>
                </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Date</label>
                    <input id="date" name="date" type="text" class="form-control" value="" placeholder="Date" onblur="this.type='text'" onfocus="this.type='date'">
  </div>
                    <div class="col-md-6"><label class="labels">Amount</label>
                    <input id="amount" name="amount" type="text" class="form-control" placeholder="Amount" value="" onkeydown = "return isNumeric(event.keyCode);" onpaste = "return false;"></div>
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
<script>
    function isNumeric(keyCode){

return ((keyCode >= 48 && keyCode <= 57) || keyCode == 8 || (keyCode >= 96 && keyCode <= 106) ||  keyCode == 9 || keyCode == 190 ||  keyCode == 13);
}
</script>