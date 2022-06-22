<?php include 'header-login.php';?>
<?php 
include('dbconnection.php');
ob_start();
session_start();
$pd = $_REQUEST['date'];
$id=$_SESSION['user'];
$sql="select * from tblorder where CustomerId='$id' AND Orderdate='$pd'";
$result=mysqli_query($con,$sql);
$line=mysqli_fetch_array($result);
?>
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Order Confirmation</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index-login.php">Home</a></li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->
  
  <!--================Order Details Area =================-->
  <section class="order_details section-margin--small">
    <div class="container">
      <p class="text-center billing-alert">Thank you. Your order has been received. We will notify you when order will be shipped.</p>
      <div class="row mb-5">
        <div class="col-md-6 col-xl-4 mb-4 mb-xl-0">
          <div class="confirmation-card">
            <h3 class="billing-title">Order Info</h3>
            <table class="order-rable">
              <tr>
                <td>Order number</td>
                <td>: <?php echo $line['Orderid']; ?></td>
              </tr>
              <tr>
                <td>Date</td>
                <td>: <?php echo $pd;?></td>
              </tr>
              
              <tr>
                <td>Payment method</td>
                <td>:COD</td>
              </tr>
            </table>
          </div>
        </div>
        <div class="col-md-6 col-xl-6 mb-6 mb-xl-4">
          <div class="confirmation-card">
            <h3 class="billing-title">Shipping Address</h3>
            <table class="order-rable">
              <tr>
              <td>Address:</td>
                <td><?php echo $line['Deliveryadd'];?></td>
              </tr>
              <tr>
              <td>Pincode:</td>
                <td><?php echo $line['Pincode'];?></td>
              </tr>
            
            </table>
          </div>
        </div>
        
      </div>
      <div class="order_details_table">
        <h2>Order Details</h2>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $sql="select * from tblorder where CustomerId='$id' AND Orderdate='$pd'";
              $result=mysqli_query($con,$sql);
                 while($line=mysqli_fetch_array($result)){
                  
                   $subtotal=$line['Totalamount'];
                   $total = $total + $subtotal;
              ?>
              <tr>
                <td>
                  <p><?php echo $line['Productname'];?></p>
                </td>
                <td>
                  <h5>x <?php echo $line['Quantity']; ?></h5>
                </td>
                <td>
                  <p><?php echo $line['Totalamount'];?></p>
                </td>
              </tr>
              <?php 
                 }
              ?>
              <tr>
                <td>
                  <h4>Subtotal</h4>
                </td>
                <td>
                  <h5></h5>
                </td>
                <td>
                  <p><?php echo $total;?></p>
                </td>
              </tr>
              <tr>
                <td>
                  <h4>Shipping</h4>
                </td>
                <td>
                  <h5></h5>
                </td>
                <td>
                  <p>Flat rate: 50.00</p>
                </td>
              </tr>
              <tr>
                <td>
                  <h4>Total</h4>
                </td>
                <td>
                  <h5></h5>
                </td>
                <td>
                  <h4><?php echo $total + 50;?></h4>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

<style>
.button-9 {
  appearance: button;
  backface-visibility: hidden;
  background-color: #405cf5;
  border-radius: 6px;
  border-width: 0;
  box-shadow: rgba(50, 50, 93, .1) 0 0 0 1px inset,rgba(50, 50, 93, .1) 0 2px 5px 0,rgba(0, 0, 0, .07) 0 1px 1px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  font-family: -apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue",Ubuntu,sans-serif;
  font-size: 100%;
  height: 44px;
  line-height: 1.15;
  margin: 12px 0 0;
  outline: none;
  overflow: hidden;
  padding: 0 25px;
  position: relative;
  text-align: center;
  text-transform: none;
  transform: translateZ(0);
  transition: all .2s,box-shadow .08s ease-in;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: 300px;
}

.button-9:disabled {
  cursor: default;
}

.button-9:focus {
  box-shadow: rgba(50, 50, 93, .1) 0 0 0 1px inset, rgba(50, 50, 93, .2) 0 6px 15px 0, rgba(0, 0, 0, .1) 0 2px 2px 0, rgba(50, 151, 211, .3) 0 0 0 4px;
}
</style>
  </section>
  <!--================End Order Details Area =================-->
<?php include 'footer.php'; ?>