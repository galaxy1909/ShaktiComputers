<?php include 'header-login.php';?>
<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Shop</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
   <ol class="breadcrumb">
     <li class="breadcrumb-item"><a href="#">Home</a></li>
     <li class="breadcrumb-item active" aria-current="page">Shop</li>
   </ol>
    </nav>
				</div>
			</div>
 </div>
	</section>
<section class="section-margin--small mb-5">
    <div class="container">
      <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5">
          <div class="sidebar-categories">
            <div class="head">Categories</div>
            <ul class="main-categories">
              <li class="common-filter">
                <form action="" method="POST">
                  <ul>
                    <?php 
                    $sql="select * from category";
                    $result=mysqli_query($con,$sql);
                    while($line=mysqli_fetch_array($result)){
                    ?>
                    <li class="filter-list"><input class="pixel-radio" type="" id="ram" name="brand"><label for="men"><?php echo $line['CategoryName']; ?></label></li>
                    <?php } ?>
                  </ul>
                </form>
              </li>
            </ul>
          </div>
          
        </div>
        <div class="col-xl-9 col-lg-8 col-md-7">
          <!-- Start Filter Bar -->
          
          <!-- End Filter Bar -->
          <!-- Start Best Seller -->
          <section class="lattest-product-area pb-40 category-list">
            <div class="row">
                  <?php
                  include('dbconnection.php');
                  $sql="select * from product";
                  $result=mysqli_query($con,$sql);
                  while($line=mysqli_fetch_array($result)){
                   $photo=$line['Photo'];
                   $n=strtolower($photo);
                   $name=$line['ProductName'];
                   $cid=$line['CategoryId'];
                   $sql="select * from Category where CategoryId='$cid' ";
                   $r=mysqli_query($con,$sql);
                   $l=mysqli_fetch_array($r);
                   
                   ?>
                    <div class="col-md-6 col-lg-4">
                    <div class="card text-center card-product">
                  <div class="card-product__img">
                    <img class="card-img" src="<?php echo $n?>" style="height:200px;width:200px" alt="">
                    <ul class="card-product__imgOverlay">
                      <li><?Php $id=$line['ProductId']; echo "<button><a href=\"addtocart.php?pid=$id\"><i class=\"ti-shopping-cart\"></i></a></button>";?></li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <p><?php echo $l['CategoryName'];?></p>
                    <h4 class="card-product__title"><a href="#"><?php echo $name;?></a></h4>
                    <p class="card-product__price"><?php echo $line['Price'];?></p>
                  </div>
                  </div>
                  </div>
                  <?php
                  }
                  ?>
            </div>
          </section>
          <!-- End Best Seller -->
        </div>
      </div>
    </div>
  </section>
	<!-- ================ category section end ================= -->		  

	

	<!-- ================ Subscribe section start ================= -->		  
  <section class="subscribe-position">
    <div class="container">
      <div class="subscribe text-center">
        <h3 class="subscribe__title">Get Update From Anywhere</h3>
        <p>Bearing Void gathering light light his eavening unto dont afraid</p>
        <div id="mc_embed_signup">
          <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe-form form-inline mt-5 pt-1">
            <div class="form-group ml-sm-auto">
              <input class="form-control mb-1" type="email" name="EMAIL" placeholder="Enter your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" >
              <div class="info"></div>
            </div>
            <button class="button button-subscribe mr-auto mb-1" type="submit">Subscribe Now</button>
            <div style="position: absolute; left: -5000px;">
              <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
            </div>

          </form>
        </div>
        
      </div>
    </div>
  </section>
  <?php include 'footer.php';?>