<?php include 'header.php';?>
<?php 
$id=$_SESSION['tech'];
$sql="select * from technician where TechnicianId='$id';";
$result=mysqli_query($con,$sql);
$line=mysqli_fetch_array($result);
?>
<div>
<p style=" font-size: 100px; color: #202C45; font-weight: initial; margin-left: 400px;"> 
<strong>Welcome! <?php echo $line['Username']; ?></strong> </p>
</div>
<div class="team" id="about" name="about">

            <div class="container">
                <div class="section-header text-center">
                    <p>Meet Our Admin</p>
                    <h2>Our Owner & Founder</h2>
                </div>
               
                <div class="row">
                <?php 
                $sql="select * from admin";
                $result=mysqli_query($con,$sql);
                while($line=mysqli_fetch_array($result)){
                    $photo=$line['Photo'];
                    $n=strtolower($photo);
                ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="<?php echo $n; ?>" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2><?php echo $line['FirstName'];echo $line['LastName'];?></h2>
                                <p> <?php echo $line['Email'];?></p>
                                
                            </div>
                        </div>
                       
                    </div>
                    <?php 
                }
                 ?>
                </div>
            </div>
        </div>
        <!-- Team End -->
        <center>
        <?php
include('dbconnection.php');
$s="select * from technician";
$r=mysqli_query($con,$s);
?>
 <div class="col-lg-7 col-md-12">
                            <div class="card" style="min-height: 485px">
                                <div class="card-header card-header-text">
                                    
                                    <h4 class="card-title">Your Team Mates</h4>
                                    <p class="category">Technician</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-primary">
                                            <tr><th>ID</th>
                                            <th>Name</th>
                                            <th>Profession</th>
                                            <th>Phone</th>
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
                                                echo $l['Phone'];
                                                echo"</td>";
                                                echo "</tr>";
                                                }
                                            ?>                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
        </center>
        <br><br><br><br><br>
<?php include 'footer.php';?>