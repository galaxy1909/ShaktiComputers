<?php include 'header-login.php';?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script>

function fun1(a,b,qua,pri)
{	
  var ans=pri/qua;
  ans=a.value*ans;
  b.value=ans;
  var amount = 0;
  amount = b.value + amount;
  var url="editcart.php"; 
}
</script>
<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Shopping Cart</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
   <ol class="breadcrumb">
     <li class="breadcrumb-item"><a href="#">Home</a></li>
     <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
   </ol>
    </nav>
				</div>
			</div>
 </div>
	</section>
<section class="cart_area">
 <div class="container">
  <div class="cart_inner">
   <div class="table-responsive">
    <table class="table">
     <thead>
      <tr>
       
       <th scope="col">Product</th>
       <th scope="col">Price</th>
       <th scope="col">Quantity</th>
       <th scope="col">Total</th>
       <th scope="col">Remove</th>
      </tr>
     </thead>
     <tbody>
         <?php
         session_start();
         ob_start();
          include('dbconnection.php');
          $id=$_SESSION['user'];
          $sql="select * from cart where CustomerId=$id";
          $result=mysqli_query($con,$sql);
          
          while($line=mysqli_fetch_array($result)){
              $pid=$line['ProductId'];
			  $q="quantity$pid";
			  $pr="price$pid";
              $s="select * from product where ProductId=$pid";
              $r=mysqli_query($con,$s);
              $l=mysqli_fetch_array($r);
				$amount;
			$price = $l['Price'];
			$qn=$line['Piece'];
			$total= $price * $qn;
			$amount=$amount+$total;          
 ?>
          

      <tr>
       
       <td>
       
        <div class="media">
         <div class="d-flex">
          <img src="img/cart/cart1.png" alt="">
         </div>
         
         <div class="media-body">
          <p><?php echo $l['ProductName']; ?></p>
         </div>
        </div>
       </td>
       <td>
        <h5><p id="price" name="price"><?php echo $l['Price'];?></p></h5>
       </td>
       <td>
       <div class="product_count">
       <div class="quantity buttons_added">
         <form method="POST" action="editcart.php">
               
	   <input type="number" min='1'; max="" oninput="return fun1(<?php echo $q; ?>,<?php echo $pr; ?>,<?php echo $line['Piece']; ?>,<?php echo $total; ?>);" name="<?php echo $q; ?>" id = "<?php echo $q; ?>"   value="<?php echo $line['Piece'];?>"  class="input-text qty text"  />
     
	</div>
       </td>
       <td class="product_count">
	   	   <input type="text" name="<?php echo $pr; ?>" id = "<?php echo $pr; ?>"  value="<?php echo $total; ?>"  class="input-text qty text"  />
  
       </td>
       <td>
        <div class="button_added">
          <?php 
           $productid=$line['ProductId'];
          ?>
         <?php echo "<a href=\"removefromcart.php?pid=$productid\" class=\"button\">Remove</a>" ?>
         </div>
        </td>  
      </tr>
      <?Php   
           if($line['Piece'] > 0){
             
     
      
          }
        }
      ?>
          
      <tr class="bottom_button">
       
       <td>
       
       </td>
       <td>

       </td>
       
      </tr>
      <tr class="bottom_button">
         <td>
              <input type ="submit" class="button" id="submit" name="submit" value="Update Cart"/>        
        </form>
        </td>
       <td>

       </td>
       <td>
        <h5>Subtotal</h5>
       </td>
       <td>
        <h5><?php echo $amount; ?></h5>
       </td>
      </tr>
      <tr class="shipping_area">
       <td class="d-none d-md-block">

       </td>
       <td>

       </td>
       
       
      </tr>
      <tr class="out_button_area">
       <td class="d-none-l">

       </td>
       <td class="">

       </td>
       <td>

       </td>
       <td>
        <div class="checkout_btn_inner d-flex align-items-center">
         <a class="gray_btn" href="shop.php">Continue Shopping</a>
         <a class="primary-btn ml-2" href="checkout.php">checkout</a>
        </div>
       </td>
      </tr>
     </tbody>
    </table>
   </div>
  </div>
 </div>
</section>
<?php include 'footer.php';?>