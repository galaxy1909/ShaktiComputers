<?php include 'header-login.php';?>
<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>My Order</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
   <ol class="breadcrumb">
     <li class="breadcrumb-item"><a href="#">Home</a></li>
     <li class="breadcrumb-item active" aria-current="page">My Order</li>
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
       
       <th scope="col">OrderId</th>
       <th scope="col">ProductName</th>
       <th scope="col">Quantity</th>
       <th scope="col">Address</th>
       <th scope="col">Amount</th>
       <th scope="col">Date</th>      
       <th scope="col">Track Your Order</th>
      </tr>
     </thead>
     <tbody>
         <?php
         session_start();
         ob_start();
          include('dbconnection.php');
          $id=$_SESSION['user'];
          $sql="select * from tblorder  where CustomerId=$id order by Orderid desc";
          $result=mysqli_query($con,$sql);
          
          while($line=mysqli_fetch_array($result)){         
 ?>
          

      <tr>
       
       <td>
       <?php echo $line['Orderid'];?>
       </td>
       <td>
       <?php echo $line['Productname'];?>

       </td>
       <td>
       <?php 
           echo $line['Quantity'];
       ?>
       </td>
       <td>
       <?php 
            echo $line['Deliveryadd'];
       ?> 
       </td>
       <td>
       <?php 
           echo $line['Totalamount'];
       ?>
       </td>
       <td>
       <?php 
           echo $line['Orderdate'];
       ?>
       </td>
       <td>
           <?php $oid=$line['Orderid'];
           echo"<a href=\"trackorder.php?oid=$oid\"<button class=\"button\">Track</button>";
           ?>
       </td>
      </tr>
      <?Php                
          }
      ?>      
     </tbody>
    </table>
   </div>
  </div>
 </div>
</section>
<?php include 'footer.php';?>