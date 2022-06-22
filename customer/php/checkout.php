<?php include 'header-login.php';?>
	<!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Product Checkout</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->
  
  
  <!--================Checkout Area =================-->
  <section class="checkout_area section-margin--small">
    <div class="container">
        
        <center>
        <div class="billing_details">
           <form method="POST" action="">
                <div class="col-lg-4">
                    <div class="order_box">
                        <h2>Your Order</h2>
                        <ul class="list">
                            <li><a href="#"><h4>Product <span>Total</span></h4></a></li>
                            <?php
          include('dbconnection.php');
          $id=$_SESSION['user'];
          $sql="select *  from cart where CustomerId=$id";
          $result=mysqli_query($con,$sql);
          
          while($line=mysqli_fetch_array($result)){
              $pid=$line['ProductId'];
              $s="select * from product where ProductId=$pid";
              $r=mysqli_query($con,$s);
              $l=mysqli_fetch_array($r);     
         ?>
           <li><a href="#"><?php echo $l['ProductName']; ?><span class="middle">x <?php echo $line['Piece'] ;?></span> <span class="last">
        <?php 
           $amount;
           $price = $l['Price'];
           $q=$line['Piece'];
           $total= $price * $q;
           echo $total;
           $amount=$amount+$total;
        ?></span></a></li>
         <?php 
         if($_POST['submit']){
           $s1="select * from customer where CustomerId='$id'";
           $r1=mysqli_query($con,$s1);
           $l1=mysqli_fetch_array($r1);
           $pn=$l['ProductName'];     
           $pa=$l1['Address'];
           $pp=$l1['Pincode'];
           $pd=date("Y-m-d h:i:sa");
           $pta=$total;
          $sql="INSERT INTO `tblorder` (`Orderid`, `Customerid`, `Productid`, `Productname`,`Quantity` ,`Deliveryadd`, `Pincode`, `Orderdate`, `Totalamount`, `status`,`A_Status`) VALUES (NULL,'$id','$pid','$pn','$q','$pa','$pp','$pd','$pta',0,0);";
           if(mysqli_query($con,$sql)){
             $s2="DELETE FROM cart where CustomerId='$id'";
             mysqli_query($con,$s2);
             header("Location:confirmation.php?date=$pd");
           }
         }
                        }
                        ?>
                        </ul>
                        <ul class="list list_2">
                            <li><a href="#">Subtotal <span><?php echo $amount; ?></span></a></li>
                            <li><a href="#">Total <span><?php echo $amount;?></span></a></li>
                        </ul>
                        
                        <div class="creat_account">
                            <input type="checkbox" id="f-option4" name="selector" required>
                            <label for="f-option4">I’ve read and accept the </label>
                            <a href="#">terms & conditions*</a>
                        </div>
                        <div class="text-center">
                          
                          <input type="submit" class="button button-paypal" id="submit" name="submit" value="Order"/>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
</center>
    </div>
  </section>
 
<?php include 'footer.php';?>
