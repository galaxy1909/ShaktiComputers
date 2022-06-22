<?php
 include ('header.php') ; 
include('dbconnection.php');
$s="select * from technician;";
$r=mysqli_query($con,$s);
?>
<?php include 'popup.php'; ?>
<div id="mydiv" class="wrapper">
<div class="main-content">
    
			<div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                       <span class="material-icons">Requast</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Request</strong></p>
                                    <?php 
                                    $null=NULL;
                                    $sql="select * from problem";
                                    $result=mysqli_query($con,$sql);
                                    while($line=mysqli_fetch_array($result)){
                                    if($line['A_Status'] == 0)
                                    {
                                        $c1=$c1+1;
                                    }
                                    }
                                    echo "<span class=\"badge badge-pill badge-primary\">$c1</span>";
                                    ?>
                                    <h3 class="card-title">
                                       <?php 
                                         $sql="select * from problem";
                                         $result=mysqli_query($con,$sql);
                                         $count = mysqli_num_rows($result);
                                         echo $count;
                                       ?> 
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-info">info</i>
                                        <a href="#" data-toggle="modal" data-target="#myModal1">Till Today</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-rose">
                                       <span class="material-icons">shopping_cart</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Orders</strong></p>
                                    <?php 
                                    $null=NULL;
                                    $sql="select * from tblorder";
                                    $result=mysqli_query($con,$sql);
                                    while($line=mysqli_fetch_array($result)){
                                    if($line['A_Status'] == 0)
                                    {
                                        $c2=$c2+1;
                                    }
                                    }
                                    echo "<span class=\"badge badge-pill badge-primary\">$c2</span>";
                                    ?>
                                    <h3 class="card-title">
                                       <?php 
                                         $sql="select * from tblorder";
                                         $result=mysqli_query($con,$sql);
                                         $count = mysqli_num_rows($result);
                                         echo $count;
                                       ?> 
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">local_offer</i><a href="#" data-toggle="modal" data-target="#myModal2">Received</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-success">
                                        <img src="https://img.icons8.com/ios-filled/50/000000/get-revenue.png"/>

                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Technician</strong></p>
                                    <?php 
                                    $null=NULL;
                                    $sql="select * from technician";
                                    $result=mysqli_query($con,$sql);
                                    while($line=mysqli_fetch_array($result)){
                                    if($line['A_Status'] == 0)
                                    {
                                        $c3=$c3+1;
                                    }
                                    }
                                    echo "<span class=\"badge badge-pill badge-primary\">$c3</span>";
                                    ?>
                                    <h3 class="card-title">
                                       <?php 
                                         $sql="select * from technician";
                                         $result=mysqli_query($con,$sql);
                                         $count = mysqli_num_rows($result);
                                         echo $count;
                                       ?> 
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> <a href="#"data-toggle="modal" data-target="#myModal3">Joined</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-info">
                                    <span class="material-icons">branding_watermark</span>
                               </div>
                                </div>
                                <div class="card-content">
                                
                                    <p class="category"><strong>Bill</strong></p>
                                    <?php 
                                    $null=NULL;
                                    $sql="select * from bill";
                                    $result=mysqli_query($con,$sql);
                                    while($line=mysqli_fetch_array($result)){
                                    if($line['A_Status'] == 0)
                                    {
                                        $c4=$c4+1;
                                    }
                                    }
                                    echo "<span class=\"badge badge-pill badge-primary\">$c4</span>";
                                    ?>
                                    <h3 class="card-title">
                                       <?php 
                                         $sql="select * from bill";
                                         $result=mysqli_query($con,$sql);
                                         $count = mysqli_num_rows($result);
                                         echo $count;
                                       ?> 
                                    </h3>                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> <a href="#" data-toggle="modal" data-target="#myModal4">Just Updated</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<center>
					<div class="row">
                        <div class="col-lg-6 col-md-10">
                            <div class="card" style="min-height: 485px">
                                <div class="card-header card-header-text">
                                    
                                    <h4 class="card-title">Employees Stats</h4>
                                    <p class="category">Recent Employees</p>
                                </div>
                                <div style="height:400px"class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-primary">
                                            <tr><th>ID</th>
                                            <th>Name</th>
                                            <th>Profession</th>
                                            <th>Salary</th>
                                            <th>Address</th>
                                        </tr></thead>
                                        <tbody>
                                             <?php 
                                            while($l=mysqli_fetch_array($r)){
                                                echo "<tr>";
                                               echo"<td>";
                                               echo $l['TechnicianId'];
                                               echo"</td>";
                                                echo"<td>";
                                                echo $l['FirstName'];
                                                echo"</td>";
                                                echo"<td>";
                                                echo $l['Profession'];
                                                echo"</td>";
                                                echo"<td>";
                                                echo $l['Salary'];
                                                echo"</td>";
                                                echo"<td>";
                                                echo $l['Address'];
                                                echo"</td>";
                                                echo "</tr>";
                                                }
                                            ?>                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-9">
                            <div class="card" style="min-height: 485px">
                                <div class="card-header card-header-text">
                                    
                                    <h4 class="card-title">Order Stats</h4>
                                    <p class="category">Recent Order</p>
                                </div>
                                <div style="height:400px;"class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-primary">
                                            <tr><th>ID</th>
                                            <th>Customer Name</th>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>Address</th>
                                            <th>Order Date</th>
                                            <th>Amount</th>
                                            <th>Status</th>

                                        </tr></thead>
                                        <tbody>
                                             <?php 
                                             $s6="select * from `tblorder` ORDER BY Orderdate DESC;";
                                             $r6=mysqli_query($con,$s6);
                                            while($l6=mysqli_fetch_array($r6)){
                                                $cid=$l6['Customerid'];
                                                $s5="select  * from customer where CustomerId='$cid';";
                                                $r5=mysqli_query($con,$s5);
                                                $l5=mysqli_fetch_array($r5);
                                                echo "<tr>";
                                               echo"<td>";
                                               echo $l6['Orderid'];
                                               echo"</td>";
                                                echo"<td>";
                                                echo $l5['FirstName'];
                                                echo"</td>";
                                                echo"<td>";
                                                echo $l6['Productname'];
                                                echo"</td>";
                                                echo"<td>";
                                                echo $l6['Quantity'];
                                                echo"</td>";
                                                echo"<td>";
                                                echo $l6['Deliveryadd'];
                                                echo"</td>";
                                                echo"<td>";
                                                echo $l6['Orderdate'];
                                                echo"</td>";
                                                echo"<td>";
                                                echo $l6['Totalamount'];
                                                echo"</td>";
                                                echo "<td>";
				if($l6['status']==0){
					echo "<p style=\"color:red; font-size:20px; font-weight: bold;\">Not Accepted</p>";
				}
				else if($l6['status']==1){
					echo "<p style=\"color:black; font-size:20px; font-weight: bold;\">Accepted</p>";
				}
				else if($l6['status']==2){
					echo "<p style=\"color:blue; font-size:20px; font-weight: bold;\">Dispatched</p>";
				}
				else if($l6['status']==3){
					echo "<p style=\"color:green; font-size:20px;font-weight: bold;\">Delivered</p>";
				}
				echo "</td>";
                                                echo "</tr>";
                                                }
                                            ?>                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                                            </center>
     
					
					</div>
 </div>
 
 <?php include 'footer.php'; ?>
<script>
   
	setTimeout("location.reload(true);",30000);

</script>
</script>