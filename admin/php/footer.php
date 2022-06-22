 <footer class="footer">
                <div class="container-fluid">
				  <div class="row">
				  <div class="col-md-6">
                    <nav class="d-flex">
                        <ul class="m-0 p-0">
                            <li>
                                <a href="admin.php">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="maccount.php">
                                    My Account
                                </a>
                            </li>
                            <li>
                                <a href="uaccount.php">
                                    Update Account
                                </a>
                            </li>
                            <li>
                                <a href="logout.php">
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </nav>
                   
                </div>
				<div class="col-md-6">
				 <p class="copyright d-flex justify-content-end"> &copy 2022 Design by &nbsp;
                        <a href="../../../ShaktiComputers/customer/php/index.php" target="_blank"> &nbsp; Shakti Computer PVT Limited</a>&nbsp;&nbsp; <a href="admin.php"> Admin Dashboard</a>
                    </p>
				</div>
				  </div>
				    </div>
            </footer>
</div>

   <script src="../js/jquery-3.3.1.slim.min.js"></script>
   <script src="../js/popper.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
   <script src="../js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
  $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
				$('#content').toggleClass('active');
            });
			
			 $('.more-button,.body-overlay').on('click', function () {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });
			
        });
</script>
