<?php include 'header-login.php'; ?>
<?php 
$oid=$_REQUEST['oid'];
$sql="select * from tblorder where Orderid='$oid';";
$result=mysqli_query($con,$sql);
$line=mysqli_fetch_array($result);
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"/>
<center>
<div class="container">
    <h2>Tracking Your Order</h2>
  <div class="row">
						<div class="col-12 col-md-10 hh-grayBox pt45 pb20">
							<div class="row justify-content-between">
                                <?php 
                                if($line['status']==0){
                                ?>
								<div class="order-tracking completed">
									<span class="is-complete"></span>
									<p>Ordered<br></p>
								</div>
								<div class="order-tracking">
									<span class="is-complete"></span>
									<p>Accepted<br></p>
								</div>
								<div class="order-tracking">
									<span class="is-complete"></span>
									<p>Dispatched<br><p>
								</div>
                                <div class="order-tracking">
									<span class="is-complete"></span>
									<p>Delivered<br><p>
								</div>
                                <?php 
                                }
                                ?>
                                <?php 
                                if($line['status']==1){
                                ?>
								<div class="order-tracking completed">
									<span class="is-complete"></span>
									<p>Ordered<br></p>
								</div>
								<div class="order-tracking completed">
									<span class="is-complete"></span>
									<p>Accepted<br></p>
								</div>
								<div class="order-tracking">
									<span class="is-complete"></span>
									<p>Dispatched<br><p>
								</div>
                                <div class="order-tracking">
									<span class="is-complete"></span>
									<p>Delivered<br><p>
								</div>
                                <?php 
                                }
                                ?>
                                <?php 
                                if($line['status']==2){
                                ?>
								<div class="order-tracking completed">
									<span class="is-complete"></span>
									<p>Ordered<br></p>
								</div>
								<div class="order-tracking completed">
									<span class="is-complete"></span>
									<p>Accepted<br></p>
								</div>
								<div class="order-tracking completed">
									<span class="is-complete"></span>
									<p>Dispatched<br><p>
								</div>
                                <div class="order-tracking">
									<span class="is-complete"></span>
									<p>Delivered<br><p>
								</div>
                                <?php 
                                }
                                ?>
                                <?php 
                                if($line['status']==3){
                                ?>
								<div class="order-tracking completed">
									<span class="is-complete"></span>
									<p>Ordered<br></p>
								</div>
								<div class="order-tracking completed">
									<span class="is-complete"></span>
									<p>Accepted<br></p>
								</div>
								<div class="order-tracking completed">
									<span class="is-complete"></span>
									<p>Dispatched<br><p>
								</div>
                                <div class="order-tracking completed">
									<span class="is-complete"></span>
									<p>Delivered<br><p>
								</div>
                                <?php 
                                }
                                ?>
							</div>
						</div>
					</div>
</div>
<a href="myorder.php"><button class="button">Your Orders</button></a>
<br><br>
</center>
<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Order Information</h1>
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
                <td>: <?php echo $line['Orderdate'];?></td>
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
              $sql="select * from tblorder where Orderid='$oid';";
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
    <center>
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
<style>
    .hh-grayBox {
  background-color: #f8f8f8;
  margin-bottom: 20px;
  padding: 35px;
  margin-top: 20px;
}
.pt45 {
  padding-top: 45px;
}
.order-tracking {
  text-align: center;
  width: 25%;
  position: relative;
  display: block;
}
.order-tracking .is-complete {
  display: block;
  position: relative;
  border-radius: 50%;
  height: 30px;
  width: 30px;
  border: 0px solid #afafaf;
  background-color: #f7be16;
  margin: 0 auto;
  transition: background 0.25s linear;
  z-index: 2;
}
.order-tracking .is-complete:after {
  display: block;
  position: absolute;
  content: "";
  height: 14px;
  width: 7px;
  top: -2px;
  bottom: 0;
  left: 5px;
  margin: auto 0;
  border: 0px solid #afafaf;
  border-width: 0px 2px 2px 0;
  transform: rotate(45deg);
  opacity: 0;
}
.order-tracking.completed .is-complete {
  border-color: #27aa80;
  border-width: 0px;
  background-color: #27aa80;
}
.order-tracking.completed .is-complete:after {
  border-color: #fff;
  border-width: 0px 3px 3px 0;
  width: 7px;
  left: 11px;
  opacity: 1;
}
.order-tracking p {
  color: #a4a4a4;
  font-size: 16px;
  margin-top: 8px;
  margin-bottom: 0;
  line-height: 20px;
}
.order-tracking p span {
  font-size: 14px;
}
.order-tracking.completed p {
  color: #000;
}
.order-tracking::before {
  content: "";
  display: block;
  height: 3px;
  width: calc(100% - 40px);
  background-color: #f7be16;
  top: 13px;
  position: absolute;
  left: calc(-50% + 20px);
  z-index: 0;
}
.order-tracking:first-child:before {
  display: none;
}
.order-tracking.completed:before {
  background-color: #27aa80;
}

</style>
<?php include 'footer.php';?>