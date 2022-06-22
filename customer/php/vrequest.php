<?php include 'header-login.php';?>
<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>View Your Request</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
   <ol class="breadcrumb">
     <li class="breadcrumb-item"><a href="#">Home</a></li>
     <li class="breadcrumb-item active" aria-current="page">Request</li>
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
       
       <th scope="col">RequestId</th>
       <th scope="col">Description</th>
       <th scope="col">Audio</th>
       <th scope="col">TechnicianId</th>
       <th scope="col">Status</th>
      </tr>
     </thead>
     <tbody>
         <?php
         session_start();
         ob_start();
          include('dbconnection.php');
          $id=$_SESSION['user'];
          $sql="select * from problem where CustomerId=$id";
          $result=mysqli_query($con,$sql);
          
          while($line=mysqli_fetch_array($result)){         
 ?>
          

      <tr>
       
       <td>
       <?php echo $line['ProblemId'];?>
       </td>
       <td>
       <?php echo $line['Audio'];?>

       </td>
       <td>
       <?php echo $line['ProblemDesc'];?>

       </td>
       <td>
       <?php 
       
       if($line['TechnicianId'] == NULL){
           echo "Not Accepted";
       }
       else{
           echo $line['TechnicianId'];
       }
       ?>
       </td>
       <td class="product_count">
       <?php 
    if( $line['Status'] == 0){
        echo "Not Accepted";
    }
    else if( $line['Status'] == 1){
        echo "Accepted";
    }
    else if( $line['Status'] == 2){
        echo "Work In Progress";
    } 
    else if( $line['Status'] == 3){
        echo "Completed";
    }
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