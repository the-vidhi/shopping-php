<?php 
ob_start();
include 'connection.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="this is a demo meta description">
    <meta name="keywords" content="this is a demo meta keywords">
    <title>Rattle n Roll | Dashboard</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/img/icon.jpeg">
    <link rel="apple-touch-icon" href="assets/img/icon.jpeg">



    <!-- ************************* CSS ************************* -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- All Plugins CSS css -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- style css -->
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- modernizr JS
    ============================================ -->
    <script src="assets/js/modernizr-2.8.3.min.js"></script>
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="include/script.js"></script>
   

</head>
<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
 

    <!-- Main Wrapper Start -->

    <div class="wrapper">

        <!-- Header area Start -->
		<?php include'include/header.php';?>
        <!-- Header area End -->
<div id="display"></div>
        <!-- Slider area Start -->
        <section class="slider-area pb--40">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="slider-wrapper owl-carousel" id="homepage-slider">
                            <!-- Single Slider Start -->
                            <div class="single-slider" style="background-image: url(assets/img/banner-1.jpg);">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-8 offset-xl-1">
                                            <div class="slider-content">
                                                <h1 class="heading-primary" data-animation="fadeInUp" data-delay=".2s" data-duration=".6s">Why Pay</h1>
                                                <h1 class="heading-primary" data-animation="fadeInLeft" data-delay=".3s" data-duration=".7s"><span>Retail prices ?</span></h1>
                                                <p class="slider-content__text" data-animation="fadeInRight" data-delay=".4s" data-duration=".8s">TOY ADVENTURES ARE CRAZY, NOT SURE HOW LONG WE CAN KEEP THIS UP</p>
                                                <a href="" class="btn slider-btn btn-style-1" data-animation="fadeInDown" data-delay=".5s" data-duration=".9s">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Slider End -->

                            <!-- Single Slider Start -->
                            <div class="single-slider" style="background-image: url(assets/img/banner-2.jpg);">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-8 offset-xl-1">
                                            <div class="slider-content">
                                                <h1 class="heading-primary" data-animation="fadeInUp" data-delay=".2s" data-duration=".6s">Buy, Sale and find </h1>
                                                <h1 class="heading-primary" data-animation="fadeInLeft" data-delay=".3s" data-duration=".7s"><span>Your choice</span></h1>
                                                <p class="slider-content__text" data-animation="fadeInRight" data-delay=".4s" data-duration=".8s">TOY ADVENTURES ARE CRAZY, NOT SURE HOW LONG WE CAN KEEP THIS UP</p>
                                                <a href="" class="btn slider-btn btn-style-1" data-animation="fadeInDown" data-delay=".5s" data-duration=".9s">Shop Now</a>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Slider End -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Slider area End -->
        

        <!-- Product Category area Start -->
        <section class="product-category-area pt--40 pb--30">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Shop Toys By Age</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-category js-product-category-carousel owl-carousel">
						
							<?php
							$sql=$link->rawQuery("select * from agetb");
							foreach($sql as $s)
							{?>
							<a href="age_sort.php?id=<?php echo $s['age_id'];?>">
							<div class="single-blog__date">
								<span class="date"><?php echo $s['age_ratio'];?></span>
                            </div>
                            </a>
							<?php }
							?>
                            
                            <!--<div class="product-category__single">
                                <a href="shop.html" class="product-category__thumb"><img src="assets/img/thumb-4.png" alt="age category"></a>
                            </div>
                            <div class="product-category__single">
                                <a href="shop.html" class="product-category__thumb"><img src="assets/img/thumb-5.png" alt="age category"></a>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Category area End -->
        

        <!-- Banner Box area Start -->
        
        <!-- Banner Box area End -->
        

        <!-- Our Porducts area Start -->
        <section class="our-products-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Our Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters product-tab">
                    <div class="col-md-3">
                        <!-- Product Tab Head Start -->
                        <div class="nav flex-column nav-pills product-tab__head" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link product-tab__link active" id="artsandcrafts-tab" data-toggle="tab" href="#artsandcrafts" role="tab" aria-controls="artsandcrafts" aria-selected="true">Water Equipments</a>
                            <a class="nav-link product-tab__link" id="dollsandaccessories-tab" data-toggle="tab" href="#dollsandaccessories" role="tab" aria-controls="dollsandaccessories" aria-selected="false">Remote COntrols</a>
                            <a class="nav-link product-tab__link" id="babyannbell-tab" data-toggle="tab" href="#babyannbell" role="tab" aria-controls="babyannbell" aria-selected="false">Kids Furniture</a>
                            <a class="nav-link product-tab__link" id="floorgyms-tab" data-toggle="tab" href="#floorgyms" role="tab" aria-controls="floorgyms" aria-selected="false">Floor Gyms</a>
                            <a class="nav-link product-tab__link" id="sciencekit-tab" data-toggle="tab" href="#sciencekit" role="tab" aria-controls="sciencekit" aria-selected="false">Rider </a>
                        </div>
                        <!-- Product Tab Head End -->
                    </div>
                   <div class="col-md-9">
                        <!-- Product Tab Content Start -->
                        <div class="tab-content product-tab__content" id="v-pills-tabContent">
                            <div class="tab-pane product-tab__pane show active" id="artsandcrafts" role="tabpanel" aria-labelledby="artsandcrafts-tab">
                                <div class="product-tab__carousel owl-carousel js-product-carousel">
                                    <!-- Product Box Start -->
									<?php
									$sql=$link->rawQuery("select * from producttb p,vendor_reg v,product_imagetb pi,product_categorytb c where p.vendor_id = v.vendor_id and v.is_active = 1 and c.category_id=p.category_id and p.product_id=pi.product_id and p.category_id='125' and p.status = 'Available' group by p.product_id");
									if($link->count > 0)
									{
										foreach($sql as $s)
										{
											//$prodid=$s['product_id'];
									?>
                                    <div class="product-box variable-product">
                                         <div class="product-box__meta">
                                            <a href="filter-by.php?cid=<?php echo $s['category_id']; ?>" class="product-box__category"><?php echo $s['category_name']; ?></a>
                                        </div>
                                        <div class="product-box__image">
                                            <img src="<?php echo $s['image'];?>" alt="product image" class="primary_image">
                                            <img src="<?php echo $s['product_image']; ?>" alt="product image" class="secondary_image">
											
										   <a href="single_product.php?prodid=<?php echo $s['product_id'];?>" class="quick-view"> <i class="fa fa-eye"></i> </a>
                                        </div>
                                        <div class="product-box__footer">
                                            <div class="product-box__desc">
                                                <a href="single-product.html" class="product-box__title"><?php echo $s['product_name'];?></a>
                                                <p class="product-box__price">
                                                    <span class="sale-price">Rs.<?= number_format($s['product_price']); ?>/-</span>
                                                   
                                                </p>
                                            </div>
											<form method="post">
                                            <div class="product-box__links">
												<input type="hidden" name="hiddeen_id" value="<?php echo $s['product_id'];?>">
                                                <input type="submit" class="btn add-to-cart btn-style-2" name="AddToCart" value="Add To Cart">
                                            </div>
											</form>
											
                                        </div>
                                    </div>
									<?php
										}
									}?>
                                   

                                </div>
                            </div>
                            
                            <div class="tab-pane product-tab__pane" id="dollsandaccessories" role="tabpanel" aria-labelledby="dollsandaccessories-tab">
                                <div class="product-tab__carousel owl-carousel js-product-carousel">
                                    <!-- Product Box Start -->
									<?php
									$sql=$link->rawQuery("select * from producttb p,product_imagetb pi,product_categorytb c,vendor_reg v where p.vendor_id = v.vendor_id and v.is_active = 1 and c.category_id=p.category_id and p.product_id=pi.product_id and p.category_id='112' and p.status = 'Available' group by p.product_id");
									if($link->count > 0)
									{
										foreach($sql as $s)
										{?>
                                    <div class="product-box variable-product">
									 <div class="product-box__meta">
                                            <a href="filter-by.php?cid=<?php echo $s['category_id']; ?>" class="product-box__category"><?php echo $s['category_name']; ?></a>
                                        </div>
                                        <div class="product-box__image">
                                            <img src="<?php echo $s['image'];?>" alt="product image" class="primary_image">
                                            <img src="<?php echo $s['product_image']; ?>" alt="product image" class="secondary_image">
                                            <a href="single_product.php?prodid=<?php echo $s['product_id'];?>" class="quick-view"> <i class="fa fa-eye"></i> </a>
                                        </div>
                                        <div class="product-box__footer">
                                            <div class="product-box__desc">
                                                <a href="single-product.html" class="product-box__title"><?php echo $s['product_name'];?></a>
                                                <p class="product-box__price">
                                                    <span class="sale-price">Rs.<?= number_format($s['product_price']); ?>/-</span>
                                                    
                                                </p>
                                            </div>
                                            <form method="post">
                                            <div class="product-box__links">
												<input type="hidden" name="hiddeen_id" value="<?php echo $s['product_id'];?>">
                                                <input type="submit" class="btn add-to-cart btn-style-2" name="AddToCart" value="Add To Cart">
                                            </div>
											</form>
											
                                        </div>
                                    </div>
									<?php
										}
									}?>
                                </div>
                            </div>
                            <div class="tab-pane product-tab__pane" id="babyannbell" role="tabpanel" aria-labelledby="babyannbell-tab">
                                <div class="product-tab__carousel owl-carousel js-product-carousel">
                                    <!-- Product Box Start -->
									<?php
									$sql=$link->rawQuery("select * from producttb p,product_imagetb pi,product_categorytb c ,vendor_reg v where p.vendor_id = v.vendor_id and v.is_active = 1 and c.category_id=p.category_id and p.product_id=pi.product_id and p.category_id='130' and p.status = 'Available' group by p.product_id");
									if($link->count > 0)
									{
										foreach($sql as $s)
										{?>
                                    <div class="product-box variable-product">
                                         <div class="product-box__meta">
                                            <a href="filter-by.php?cid=<?php echo $s['category_id']; ?>" class="product-box__category"><?php echo $s['category_name']; ?></a>
                                        </div>
                                        <div class="product-box__image">
                                            <img src="<?php echo $s['image'];?>" alt="product image" class="primary_image">
                                            <img src="<?php echo $s['product_image']; ?>" alt="product image" class="secondary_image">
                                            <a href="single_product.php?prodid=<?php echo $s['product_id'];?>"  class="quick-view"> <i class="fa fa-eye"></i> </a>
                                        </div>
                                        <div class="product-box__footer">
                                            <div class="product-box__desc">
                                                <a href="single-product.html" class="product-box__title"><?php echo $s['product_name'];?></a>
                                                <p class="product-box__price">
                                                    <span class="sale-price">Rs.<?= number_format($s['product_price']); ?>/-</span>
                                                   
                                                </p>
                                            </div>
                                            <form method="post">
                                            <div class="product-box__links">
												<input type="hidden" name="hiddeen_id" value="<?php echo $s['product_id'];?>">
                                                <input type="submit" class="btn add-to-cart btn-style-2" name="AddToCart" value="Add To Cart">
                                            </div>
											</form>
											
                                        </div>
                                    </div>
									<?php
										}
									}?>
                                </div>
                            </div>
							<div class="tab-pane product-tab__pane" id="floorgyms" role="tabpanel" aria-labelledby="floorgyms-tab">
                                <div class="product-tab__carousel owl-carousel js-product-carousel">
                                    <!-- Product Box Start -->
									<?php
									$sql=$link->rawQuery("select * from producttb p,product_imagetb pi,product_categorytb c ,vendor_reg v where p.vendor_id = v.vendor_id and v.is_active = 1 and c.category_id=p.category_id and p.product_id=pi.product_id and p.category_id='115' and p.status = 'Available' group by p.product_id");
									if($link->count > 0)
									{
										foreach($sql as $s)
										{
									?>
                                    <div class="product-box variable-product">
									 <div class="product-box__meta">
                                            <a href="filter-by.php?cid=<?php echo $s['category_id']; ?>" class="product-box__category"><?php echo $s['category_name']; ?></a>
                                        </div>
                                        <div class="product-box__image">
                                            <img src="<?php echo $s['image'];?>" alt="product image" class="primary_image">
                                            <img src="<?php echo $s['product_image']; ?>" alt="product image" class="secondary_image">
                                            <a href="single_product.php?prodid=<?php echo $s['product_id'];?>" class="quick-view"> <i class="fa fa-eye"></i> </a>
                                        </div>
                                        <div class="product-box__footer">
                                            <div class="product-box__desc">
                                                <a href="single-product.html" class="product-box__title"><?php echo $s['product_name'];?></a>
                                                <p class="product-box__price">
                                                    <span class="sale-price">Rs.<?= number_format($s['product_price']); ?>/-</span>
                                                    
                                                </p>
                                            </div>
                                            <form method="post">
                                            <div class="product-box__links">
												<input type="hidden" name="hiddeen_id" value="<?php echo $s['product_id'];?>">
                                                <input type="submit" class="btn add-to-cart btn-style-2" name="AddToCart" value="Add To Cart">
                                            </div>
											</form>
											
                                        </div>
                                    </div>
									<?php
										}
									}?>
                                </div>
                            </div>
							<div class="tab-pane product-tab__pane" id="sciencekit" role="tabpanel" aria-labelledby="sciencekit-tab">
                                <div class="product-tab__carousel owl-carousel js-product-carousel">
                                    <!-- Product Box Start -->
									<?php
									$sql=$link->rawQuery("select * from producttb p,product_imagetb pi,product_categorytb c ,vendor_reg v where p.vendor_id = v.vendor_id and v.is_active = 1 and c.category_id=p.category_id and p.product_id=pi.product_id and p.category_id='129'and p.status = 'Available' group by p.product_id");
									if($link->count > 0)
									{
										foreach($sql as $s)
										{
									?>
                                    <div class="product-box variable-product">
									 <div class="product-box__meta">
                                            <a href="filter-by.php?cid=<?php echo $s['category_id']; ?>" class="product-box__category"><?php echo $s['category_name']; ?></a>
                                        </div>
                                        <div class="product-box__image">
                                            <img src="<?php echo $s['image'];?>" alt="product image" class="primary_image">
                                            <img src="<?php echo $s['product_image']; ?>" alt="product image" class="secondary_image">
                                            <a href="single_product.php?prodid=<?php echo $s['product_id'];?>" class="quick-view"> <i class="fa fa-eye"></i> </a>
                                        </div>
                                        <div class="product-box__footer">
                                            <div class="product-box__desc">
                                                <a href="single-product.html" class="product-box__title"><?php echo $s['product_name'];?></a>
                                                <p class="product-box__price">
                                                    <span class="sale-price">Rs.<?= number_format($s['product_price']); ?>/-</span>
                                                    
                                                </p>
                                            </div>
                                            <form method="post">
                                            <div class="product-box__links">
												<input type="hidden" name="hiddeen_id" value="<?php echo $s['product_id'];?>">
                                                <input type="submit" class="btn add-to-cart btn-style-2" name="AddToCart" value="Add To Cart">
                                            </div>
											</form>
											
                                        </div>
                                    </div>
									<?php
										}
									}?>
                                </div>
                            </div>
                        </div>
                        <!-- Product Tab Content End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Porducts area End -->
        

        <!-- Banner Box area Start -->
        <div class="banner-box-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner-box">
                            
                                <img src="assets/img/3_1.jpg" alt="promo">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Box area End -->
        

        <!-- Featured Product area Start -->
        <section class="featured-product-area pt--40 pb--80">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Latest Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="featured-produts owl-carousel js-featured-product">
                            <?php
							$sql=$link->rawQuery("select * from producttb p,product_categorytb c,product_imagetb pi ,vendor_reg v where p.vendor_id = v.vendor_id and v.is_active = 1 and c.category_id=p.category_id and p.product_id = pi.product_id and p.status = 'Available' group by p.product_id order by rand() limit 10");
							if($link->count > 0)
							{
								foreach($sql as $s)
								{?>
							
							<div class="featured-produts__group">
                                <!-- Featured Product box Start -->
								
								
                                <div class="product-box variable-product">
                                    <div class="product-box__meta">
                                            <a href="filter-by.php?cid=<?php echo $s['category_id']; ?>" class="product-box__category"><?php echo $s['category_name']; ?></a>
                                        </div>
                                    <div class="product-box__image">
                                        <img src="<?php echo $s['image'];?>" alt="product image" class="primary_image">
                                        <img src="<?php echo $s['product_image']; ?>" alt="product image" class="secondary_image">
										<a href="single_product.php?prodid=<?php echo $s['product_id'];?>" class="quick-view"> <i class="fa fa-eye"></i> </a>
                                    </div>
                                    <div class="product-box__footer">
                                        <div class="product-box__desc">
                                            <a class="product-box__title"><?php echo $s['product_name'];?></a>
                                            <p class="product-box__price">
                                                <span class="sale-price">Rs.<?= number_format($s['product_price']); ?>/-</span>
                                               
                                            </p>
                                        </div>
                                        <form method="post">
                                            <div class="product-box__links">
												<input type="hidden" name="hiddeen_id" value="<?php echo $s['product_id'];?>">
                                                <input type="submit" class="btn add-to-cart btn-style-2" name="AddToCart" value="Add To Cart">
                                            </div>
										</form>
											
                                    </div>
                                </div>
                                <!-- Featured Product box End -->

                                <!-- Featured Product box Start -->
                                
                                
                                <!-- Featured Product box End -->

                            </div>
							<?php
							}
						}?>
                            


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured Product area End -->
        

        <!-- Top Categories area Start -->
        <section class="top-categories-area ptb--80 bg--gray">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title section-title--2">
                            <h2>Top Categories This Week</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb--30">
                        <div class="banner-box">
                            
                                <img src="assets/img/4_1.jpg" alt="promo">
                            
                            <h4>Boy's Toys</h4>
                        </div>
                    </div>
                    <div class="col-md-6 mb--30">
                        <div class="banner-box">
                            
                                <img src="assets/img/5_1.jpg" alt="promo">
                           
                            <h4>Girl's Toys</h4>
                        </div>
                    </div>
                    <div class="col-md-6 mb-sm--30">
                        <div class="banner-box">
                          
                                <img src="assets/img/6_1.jpg" alt="promo">
                            
                            <h4>Electronic Toys</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="banner-box">
                           
                                <img src="assets/img/7_1.jpg" alt="promo">
                           
                            <h4>Education Toys</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Top Categories area End -->
        

        <!-- Combine Product area Start -->
        <section class="combine-product-area pt--80 pb--40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="row mb-md--30">
                            
                            <div class="col-lg-12 col-md-6">
                                        <!-- Best Seller Product Area Start -->
                                        <div class="best-seller-product">
                                            <div class="section-title section-title--3">
                                                <h2>Random Products</h2>
                                            </div>
                                            <div class="best-seller-product__carousel--4 owl-carousel js-best-seller-carousel-2">    
                                                <div class="best-seller-product__group--2">
												<?php
												$sql = $link->rawQuery("select * from producttb p,vendor_reg v where p.vendor_id = v.vendor_id and v.is_active = 1 and p.product_colour = 'blue' and p.status = 'Available' ORDER BY rand() LIMIT 5");
												foreach($sql as $s)
												{
												?>
                                                    <!-- Product Box Small Start -->
                                                    <div class="product-box product-box--small variable-product">
                                                        <div class="product-box__left">
                                                            <div class="product-box__image">
                                                                <img src="<?php echo $s['image'];?>" alt="product image" class="primary_image">
                                                                <img src="<?php echo $s['image'];?>" alt="product image" class="secondary_image">
															</div>
                                                        </div>
                                                        <div class="product-box__right">
                                                            <div class="product-box__desc">
                                                                <a href="single_product.php?prodid=<?php echo $s['product_id'];?>" class="product-box__title"><?php echo $s['product_name'];?></a>
                                                                <p class="product-box__price">
                                                                    <span class="sale-price">Rs.<?= number_format($s['product_price']); ?>/-</span>
                                                                    
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div> 
												<?php
												}
												?>
                                                    
                                                </div>      
                                                <div class="best-seller-product__group--2">

                                                    <!-- Product Box Small Start -->
                                                    <?php
												$sql = $link->rawQuery("select * from producttb p,vendor_reg v where p.vendor_id = v.vendor_id and v.is_active = 1 and p.product_colour = 'black' and p.status = 'Available' ORDER BY rand() limit 5");
												foreach($sql as $s)
												{
												?>
                                                    <!-- Product Box Small Start -->
                                                    <div class="product-box product-box--small variable-product">
                                                        <div class="product-box__left">
                                                            <div class="product-box__image">
                                                                <img src="<?php echo $s['image'];?>" alt="product image" class="primary_image">
                                                                <img src="<?php echo $s['image'];?>" alt="product image" class="secondary_image">
															</div>
                                                        </div>
                                                        <div class="product-box__right">
                                                            <div class="product-box__desc">
                                                                <a href="single_product.php?prodid=<?php echo $s['product_id'];?>" class="product-box__title"><?php echo $s['product_name'];?></a>
                                                                <p class="product-box__price">
                                                                    <span class="sale-price">Rs.<?= number_format($s['product_price']); ?>/-</span>
                                                                   
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div> 
												<?php
												}
												?>
                                                </div>      
                                                <div class="best-seller-product__group--2">

                                                    <!-- Product Box Small Start -->
                                                    <?php
												$sql = $link->rawQuery("select * from producttb p,vendor_reg v where p.vendor_id = v.vendor_id and v.is_active = 1 and p.product_colour = 'green' and p.status = 'Available' ORDER BY rand() limit 5");
												foreach($sql as $s)
												{
												?>
                                                    <!-- Product Box Small Start -->
                                                    <div class="product-box product-box--small variable-product">
                                                        <div class="product-box__left">
                                                            <div class="product-box__image">
                                                                <img src="<?php echo $s['image'];?>" alt="product image" class="primary_image">
                                                                <img src="<?php echo $s['image'];?>" alt="product image" class="secondary_image">
															</div>
                                                        </div>
                                                        <div class="product-box__right">
                                                            <div class="product-box__desc">
                                                                <a href="single_product.php?prodid=<?php echo $s['product_id'];?>" class="product-box__title"><?php echo $s['product_name'];?></a>
                                                                <p class="product-box__price">
                                                                    <span class="sale-price">Rs.<?= number_format($s['product_price']); ?>/-</span>
                                                                    
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div> 
												<?php
												}
												?>
                                                </div>      
                                                <div class="best-seller-product__group--2">

                                                    <!-- Product Box Small Start -->
                                                    <?php
												$sql = $link->rawQuery("select * from producttb p,vendor_reg v where p.vendor_id = v.vendor_id and v.is_active = 1 and p.product_colour = 'yellow' and p.status = 'Available' ORDER BY rand() limit 5");
												foreach($sql as $s)
												{
												?>
                                                    <!-- Product Box Small Start -->
                                                    <div class="product-box product-box--small variable-product">
                                                        <div class="product-box__left">
                                                            <div class="product-box__image">
                                                                <img src="<?php echo $s['image'];?>" alt="product image" class="primary_image">
                                                                <img src="<?php echo $s['image'];?>" alt="product image" class="secondary_image">
                                                            </div>
                                                        </div>
                                                        <div class="product-box__right">
                                                            <div class="product-box__desc">
                                                                <a href="single_product.php?prodid=<?php echo $s['product_id'];?>" class="product-box__title"><?php echo $s['product_name'];?></a>
                                                                <p class="product-box__price">
                                                                    <span class="sale-price">Rs.<?= number_format($s['product_price']); ?>/-</span>
                                                                   
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div> 
												<?php
												}
												?>
                                                </div> 
                                            </div>
                                        </div>
                                        <!-- Best Seller Product Area End -->
                                    </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row mb--30">
                            <div class="col-12">
                                <div class="produtct-combo-tab">
                                    <div class="nav nav-tabs produtct-combo-tab__head" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link produtct-combo-tab__link active" id="new-tab" data-toggle="tab" href="#new" role="tab" aria-controls="new" aria-selected="true">
                                            New Arrival
                                        </a>
                                        <a class="nav-item nav-link produtct-combo-tab__link" id="best-seller-tab" data-toggle="tab" href="#best-seller" role="tab" aria-controls="best-seller" aria-selected="false">   Best Seller
                                        </a>
                                    </div>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane produtct-combo-tab__pane fade show active" id="new" role="tabpanel" aria-labelledby="new-tab">
											<div class="best-seller-product__carousel owl-carousel js-best-seller-carousel">
                                             <?php
													$sql=$link->rawQuery("select * from producttb p,product_imagetb pi ,vendor_reg v where p.vendor_id = v.vendor_id and v.is_active = 1 and p.product_id=pi.product_id and v.vendor_id=202 and p.status = 'Available' group by p.product_id");
													if($link->count > 0)
													{
														foreach($sql as $s)
														{
													?>
												<div class="best-seller-product__group">
                                                    <!-- Best Seller Product Box Horizontal Start -->
													
                                                    <div class="product-box variable-product product-box--horizontal">
                                                        <div class="product-box__left">
                                                            <div class="product-box__image">
                                                                <img src="<?php echo $s['image'];?>" alt="product image" class="primary_image">
                                                                <img src="<?php echo $s['product_image']; ?>" alt="product image" class="secondary_image">
                                                                <a href="single_product.php?prodid=<?php echo $s['product_id'];?>" class="quick-view"> <i class="fa fa-eye"></i> </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-box__right">
                                                            <div class="product-box__desc">
                                                                <a class="product-box__title"><?php echo $s['product_name'];?></a>
                                                                <p class="product-box__price">
                                                                    <span class="sale-price">Rs.<?= number_format($s['product_price']); ?>/-</span>
                                                                </p>
                                                                <form method="post">
                                            <div class="product-box__links">
												<input type="hidden" name="hiddeen_id" value="<?php echo $s['product_id'];?>">
                                                <input type="submit" class="btn add-to-cart btn-style-2" name="AddToCart" value="Add To Cart">
                                            </div>
											</form>
											
                                                            </div>                                  
                                                        </div>
                                                    </div>
												</div>
                                                <?php
													}
													}?>
												   
                                            </div>
											
                                        </div>
                                        <div class="tab-pane produtct-combo-tab__pane fade" id="best-seller" role="tabpanel" aria-labelledby="best-seller-tab">
                                            <div class="best-seller-product__carousel owl-carousel js-best-seller-carousel">
                                                <?php
												$sql=$link->rawQuery("select * from producttb p,product_categorytb c,product_imagetb pi ,vendor_reg v where p.vendor_id = v.vendor_id and v.is_active = 1 and p.category_id=c.category_id and p.product_id=pi.product_id and p.vendor_id=229 and p.status = 'Available' group by p.product_id");
												if($link->count > 0)
												{
													foreach($sql as $s)
													{
												?>
												<div class="best-seller-product__group">
                                                    <!-- Best Seller Product Box Horizontal Start -->
                                                    <div class="product-box variable-product product-box--horizontal">
                                                        <div class="product-box__left">
                                                            <div class="product-box__image">
                                                                <img src="<?php echo $s['image'];?>" alt="product image" class="primary_image">
                                                                <img src="<?php echo $s['product_image']; ?>" alt="product image" class="secondary_image">
                                                                <a href="single_product.php?prodid=<?php echo $s['product_id'];?>" class="quick-view"> <i class="fa fa-eye"></i> </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-box__right">
                                                            <div class="product-box__desc">
                                                                <a class="product-box__title"><?php echo $s['product_name'];?></a>
                                                                <p class="product-box__price">
                                                                    <span class="sale-price">Rs.<?= number_format($s['product_price']); ?>/-</span>
                                                                </p>
                                                               <form method="post">
																<div class="product-box__links">
																	<input type="hidden" name="hiddeen_id" value="<?php echo $s['product_id'];?>">
																	<input type="submit" class="btn add-to-cart btn-style-2" name="AddToCart" value="Add To Cart">
																</div>
																</form>
											
                                                            </div>                                  
                                                        </div>
                                                    </div>
                                                </div>
												<?php
													}
												}?>
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="section-title">
                                    <h2>Hot Deals</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <!-- Tranding Product Area Start -->
                                <div class="trending-product__carousel owl-carousel js-tanding-product-1">

                                    <!-- Tranding Product Box Start -->
									<?php
									$sql=$link->rawQuery("select * from producttb p,vendor_reg v,product_imagetb pi,product_categorytb c where p.vendor_id = v.vendor_id and v.is_active = 1 and c.category_id=p.category_id and p.product_id=pi.product_id and p.category_id='122' and p.status = 'Available' group by p.product_id");
									if($link->count > 0)
									{
										foreach($sql as $s)
										{
									?>
							
                                    <div class="product-box variable-product">
                                        <div class="product-box__meta">
                                            <a href="filter-by.php?cid=<?php echo $s['category_id']; ?>" class="product-box__category"><?php echo $s['category_name']; ?></a>
                                        </div>
                                        <div class="product-box__image">
                                            <img src="<?php echo $s['image'];?>" alt="product image" class="primary_image">
                                            <img src="<?php echo $s['product_image']; ?>" alt="product image" class="secondary_image">
                                            <a href="single_product.php?prodid=<?php echo $s['product_id'];?>" class="quick-view"> <i class="fa fa-eye"></i> </a>
                                        </div>
                                        <div class="product-box__footer">
                                            <div class="product-box__desc">
                                                <a class="product-box__title"><?php echo $s['product_name'];?></a>
                                                <p class="product-box__price">
                                                    <span class="sale-price">Rs.<?= number_format($s['product_price']); ?>/-</span>
                                                    
                                                </p>
                                            </div>
                                            <form method="post">
                                            <div class="product-box__links">
												<input type="hidden" name="hiddeen_id" value="<?php echo $s['product_id'];?>">
                                                <input type="submit" class="btn add-to-cart btn-style-2" name="AddToCart" value="Add To Cart">
                                            </div>
											</form>
											
                                        </div>
                                    </div>
									<?php
										}
									}?>
                                    
                                </div>
                                <!-- Tranding Product Area End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Combine Product area End -->
        


        <!-- Banner Box area Start -->
        <div class="banner-box-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner-box">
                           
                                <img src="assets/img/9_1.jpg" alt="promo">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Box area End -->
        

        <!-- Blog area Start -->
        <!--<section class="blog-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Our Vendors</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                        <div class="blog-carousel owl-carousel">
                            <?php
				$sql = $link->rawQuery("select * from vendor_reg");
				foreach($sql as $s)
				{ ?>
                    <div class="col-lg-9 col-sm-9 mb-sm--60">
						<div class="team-member">
							<div class="team-member__thumb">
								<img src="<?php echo $s['vendor_photo'];?>" alt="team">
								
							</div>
							<h3 class="team-member__name"><?php echo $s['vendor_name'];?></h3>
                               
                        </div>
                    </div>
				<?php } ?>
                            
                        </div>                    
                   

                </div>
            </div>
        </section>-->
        <!-- Blog area End -->
        

        <!-- Clients area Start -->
        <section class="featured-product-area pt--40 pb--80">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="client-carousel owl-carousel">
                            <?php
							$sql=$link->rawQuery("select * from brandtb where brand_name != 'other'");
							if($link->count > 0)
							{
								foreach($sql as $s)
								{?>
							
							<div class="featured-produts__group">
                                <div class="product-box variable-product">
                                    <div class="product-box__image">
                                        <img src="<?php echo $s['brand_logo'];?>" alt="product image" class="primary_image">
                                        <img src="<?php echo $s['brand_logo']; ?>" alt="product image" class="secondary_image">
										<!--<a href="age_sort.php?logo=<?php echo $s['brand_id']; ?>" data-toggle="modal" data-target="#productModal" class="quick-view"> <i class="fa fa-eye"></i> </a>-->
                                    </div>
                                </div>
                               </div>
							<?php
							}
						}?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Clients area End -->
        

        <!-- Footer area Start -->
        <?php include'include/footer.php';?>
        <!-- Footer area End -->
        


    </div>

    <!-- Main Wrapper End -->



    <!-- Scroll To Top -->
    
    <a class="scroll-to-top" href=""><i class="fa fa-angle-double-up"></i></a>




    <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
          <div class="modal-footer">
            <div class="social-share">
                <span>Share</span>
                <ul class="social ml--30">
                    <li class="social__item"><a href="" class="social__link"><i class="fa fa-facebook social__icon"></i></a></li>
                    <li class="social__item"><a href="" class="social__link"><i class="fa fa-twitter social__icon"></i></a></li>
                    <li class="social__item"><a href="" class="social__link"><i class="fa fa-google-plus social__icon"></i></a></li>
                    <li class="social__item"><a href="" class="social__link"><i class="fa fa-pinterest social__icon"></i></a></li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
if(@$_POST['AddToCart'])
{
	if(!@$_SESSION)
	{
		session_start();
	}
	$sessionid=$_SESSION['usersessionid'];
	if($_SESSION['usersessionid']=="")
	{?>
		<script>
			var rt = confirm("You have to logged in for Add to cart !");
			if(rt == true)
			{
				window.location.href="user_login.php";
			}
			else 
			{
				alert("Whenever You want you can login... Thank You");
			}
		</script>
		
	
	<?php
	}
	else
	{
		$prid=$_POST['hiddeen_id'];
		//$pqty = $_POST['qty'];
		$s = $link->rawQuery("select * from carttb where product_id=$prid and user_id=$sessionid");
		if($link->count > 0)
		{
			foreach($s as $s1)
			{
				$cid = $s1['cart_id'];
				$product_qty = $s1['qty'];
				$proid = $s1['product_id'];
				$user_id = $s1['user_id'];
				//$order_id = $s1['order_id'];
				//$qtyy = $product_qty+1;
				if($proid == $prid)
				{
					$link->where("cart_id",$cid);
					$i=$link->update("carttb",array("qty"=>1));
					if($i)
					{
						//header('Location'.$_SERVER['REQUEST_URI']);
						header("location:index.php");
					}
				}				
			}
		}
		else
		{
			$p=$link->insert("carttb",array("product_id"=>$prid,"user_id"=>$sessionid,"qty"=>1));
			if($p)
			{
				//header('Location'.$_SERVER['REQUEST_URI']);
				header("location:index.php");
			}
		}
	}
}
?>







    <!-- ************************* JS ************************* -->

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="assets/js/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</body>
</html>