<?php include 'header.php';?>

       <div class="footer" id="contact" name="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Get In Touch</h2>
                            <p><i class="fa fa-map-marker-alt"></i>Gangotri Complex, Gotri</p>
                            <p><i class="fa fa-phone-alt"></i>9327293724</p>
                            <p><i class="fa fa-envelope"></i>shakticomputer@gmail.com</p>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Popular Links</h2>
                            <a href="">About Us</a>
                            <a href="">Contact Us</a>
                            <a href="accept_request.php">Accept Request</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Useful Links</h2>
                            <a href="">Create Work Report</a>
                            <a href="">Salary History</a>
                            <a href="">View Work Report</a>
                            <a href="">Complaints</a>
                            <a href="accept_order.php">Accepted Order</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-newsletter">
                            <h2>Contact</h2>
                            <form method="POST" action="">
                                <?php 
                                $id=$_SESSION['tech'];
                                $q=$_POST['query'];
                                if($_POST['btnsubmit']){
                                    include('dbconnection.php');
                                    $sql="INSERT INTO t_contact (`ContactId`,`TechnicianId`,`Query`) VALUES (NULL,'$id','$q')";
                                    if(mysqli_query($con,$sql)){

                                    }
                                    else{
                                        echo"<p style=\"color:red;\"> Error! </p>";
                                    }
                                }
                               ?>
                                <textarea id="query" name="query" class="form-control" placeholder="Query"></textarea>
                                <br>
                                <input type="submit" id="btnsubmit" name="btnsubmit" class="btn btn-custom"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <p>&copy; <a href="#">Shakti Computer</a>, All Right Reserved. Designed By <a href="">Varun Prajapati</a></p>
            </div>
        </div>
             <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="../lib/easing/easing.min.js"></script>
        <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="../lib/waypoints/waypoints.min.js"></script>
        <script src="../lib/counterup/counterup.min.js"></script>
        
        <script src="../mail/jqBootstrapValidation.min.js"></script>
        <script src="../mail/contact.js"></script>

        <script src="../js/main.js"></script>