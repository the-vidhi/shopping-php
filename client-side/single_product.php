<?php 
ob_start();
include 'connection.php';

if(@$_GET['prodid'])
{
	$prodid=$_GET['prodid'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="this is a demo meta description">
    <meta name="keywords" content="this is a demo meta keywords">
    <title>Rattle n Roll | Product Details</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/img/icon.jpeg">
    <link rel="apple-touch-icon" href="assets/img/icon.jpeg">



    <!-- ************************* CSS ************************* -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/color.css">
	
    <!-- All Plugins CSS css -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- style css -->
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- modernizr JS
    ============================================ -->
    <script src="assets/js/modernizr-2.8.3.min.js"></script>
	<script>
	function ck()
	{
	var s = true;
	
	document.getElementById("s1").innerHTML = "";
	var n = document.f1.reviewTitle.value;
	
	if(n == 0)
	{
		document.getElementById("s1").innerHTML = "Enter Title";
		s = false;
	}
	
	
	document.getElementById("s2").innerHTML = "";
	var n = document.f1.review.value;
	
	if(n == 0)
	{
		document.getElementById("s2").innerHTML = "Enter Review";
		s = false;
	}
	
	document.getElementById("s3").innerHTML = "";
	var n = document.f1.authorName.value;
	
	if(n == 0)
	{
		document.getElementById("s3").innerHTML = "Enter Your Name";
		s = false;
	}
	return s;
}
</script>
</head>
<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->


    <!-- Main Wrapper Start -->

    <div class="wrapper">

        <!-- Header area Start -->

        <?php include 'include/header.php'; ?>
        
        <!-- Header area End -->

        <!-- Page Header Start -->
        <section class="page-header">
            <h2 class="page-title color--white">Product Details</h2>
        </section>
        <!-- Page Header End -->

        <!-- Breadcumb area Start -->
        <div class="breadcumb-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="breadcumb">
                            <li class="breadcumb__list"><a class="breadcumb__link" href="index.php">Home</a></li>
                            <li class="breadcumb__list"><a class="breadcumb__link current" href=""> Product Details </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcumb area End -->

        <!-- Main Content Wrapper Start -->
        <div class="main-content-wrapper">
            <div class="single-products-area section-padding">
                <!-- Single Product Start -->
                <section class="single-product pb--40">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
							<?php
							$sql=$link->rawQuery("select * from producttb where product_id=$prodid");
							foreach($sql as $q)
							{
							}
							?>
                                <!-- Tab Content Start -->
                                <div class="slider-wrapper slider-wrapper--3 owl-carousel" id="homepage-slider">
                           <?php
							$qry=$link->rawQuery("select * from producttb p,product_imagetb pi,agetb a ,product_categorytb pc,brandtb b,vendor_reg v where v.vendor_id = p.vendor_id and b.brand_id = p.brand_id and p.category_id=pc.category_id and a.age_id=p.age_id and p.product_id=pi.product_id and pi.product_id=$prodid");
							foreach($qry as $q)
							{
								$cat = $q['category_id'];
							?>
								
                            <img class="single-slider" src="<?php echo $q['product_image'];?>">
							    <!--<div class="container">-->
                                    <!--<div class="row">-->
                                        
                                   <!-- </div>->
                               <!-- </div>-->
                            <!--</div>-->
							<?php
							} ?>
                        </div>
                                <!-- Tab Content End -->
                                
                                <!-- Product Thumbnail Carousel Start -->
                                
                                <!-- Product Thumbnail Carousel End -->
                            </div>
                            <div class="col-lg-7">
                                <!-- Single Product Content Start -->
                                <div class="single-product__content">               
                                    <h2 class="single-product__name"><?php echo $q['product_name'];?></h2>
                                    
									<div class="product-varients__color pb--20">
										<p class="product-varients__label">Color</p>
										
										<?php
										if($q['product_colour']=="White")
										{
											?>
												<label for="dark" class="mycolor white-color"></label>
										<?php
										}
										else if($q['product_colour']=="Yellow")
										{
											?>
											 <label for="yellow-light" class="product-varients__color--label yellow-light-color"></label>
											<?php
										}
										else if($q['product_colour']=="Blue")
										{
											?>
											
												<label for="blue-light" class="product-varients__color--label blue-light-color"></label>
												<?php
										}
										else if($q['product_colour']=="Red")
										{
											?>
											<label for="" class="mycolor red-color"></label>
											<?php
										}
										else if($q['product_colour']=="Black")
										{
											?>
											<label for="" class="mycolor black-color" ></label>
											<?php
										}
										else if($q['product_colour']=="Orange")
										{
											?>
											<label for="" class="mycolor orange-color"></label>
											<?php
										}
										else if($q['product_colour']=="Cyan")
										{
											?>
											<label for="" class="mycolor cyan-color"></label>
											<?php
										}
										else if($q['product_colour']=="Pink")
										{
											?>
											<label for="" class="mycolor pink-color"></label>
											<?php
										}
										else if($q['product_colour']=="Green")
										{
											?>
											<label for="" class="mycolor green-color"></label>
											<?php
										}
										else if($q['product_colour']=="Brown")
										{
											?>
											<label for="" class="mycolor brown-color"></label>
											<?php
										}
										?>
									</div>
												
                                    <p class="single-product__referance"><b>Age Range: </b><?php echo $q['age_ratio'];?></p>
									
                                    <div class="single-product__price">
                                        
                                        <span class="sale-price">Rs.<?= number_format($q['product_price']); ?>/-</span>
                                        
                                    </div>
                                    <p class="single-product__short-desc"><?php echo $q['product_description'];?></p>
									<form method="post">
                                    <div class="product-action-wrapper pb--30">
									
                                        <!--<div class="quantity">
                                            <input type="number" class="quantity-input" name="qty" id="qty1" value="1">
                                        </div>-->
										
										<input type="submit" class="btn add-to-cart btn-style-2" name="AddToCart" value="Add To Cart">
									
								   </div>  
								   </form>
                                    <p class="product-availability"><i class="fa fa-check"></i> In Stock</p> 
                                    <div class="block-reassurance">
                                        <ul>
                                            <li>
                                                <div class="block-reassurance-item">
                                                    <img src="assets/img/ic_verified_user_black_36dp_1x.png" alt="reassurance">
                                                    <span>Security Policy </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-reassurance-item">
                                                    <img src="assets/img/ic_local_shipping_black_36dp_1x.png" alt="reassurance">
                                                    <span>Delivery Policy </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-reassurance-item">
                                                    <img src="assets/img/ic_swap_horiz_black_36dp_1x.png" alt="reassurance">
                                                    <span>No-Return Policy </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Single Product Content End -->
                            </div>
                        </div>
						<div class="row">
                        <div class="col-lg-4">
						</div>
                        <div class="col-lg-5">
						
						
                        </div>
                        </div>
                    </div>
                </section>
                <!-- Single Product End -->

                <!-- Single Product Tab Start -->
                <section class="single-product-tab pt--30 pb--30">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="single-product-tab__head nav nav-tab" id="singleProductTab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-desc-tab" data-toggle="tab" href="#nav-desc" role="tab" aria-controls="nav-desc" aria-selected="true">Description</a>
                                    <a class="nav-item nav-link" id="nav-details-tab" data-toggle="tab" href="#nav-details" role="tab" aria-controls="nav-details" aria-selected="true">Product Details</a>
                                    <a class="nav-item nav-link" id="nav-details1-tab" data-toggle="tab" href="#nav-details1" role="tab" aria-controls="nav-details1" aria-selected="true">Vendor Details</a>
                                    <a class="nav-item nav-link" id="nav-review-tab" data-toggle="tab" href="#nav-review" role="tab" aria-controls="nav-review" aria-selected="true">Vendor review</a>
                                </div>
                                <div class="single-product-tab__content tab-content">
                                    <div class="tab-pane fade show active" id="nav-desc" role="tabpanel" aria-labelledby="nav-desc-tab">
                                        <p class="product-description"><?php echo $q['product_description'];?></p>
                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="nav-details" aria-labelledby="nav-details-tab">
                                        <div class="product-details">
                                            <div class="product-manufacturer">
												<a href=""><img src="<?php echo $q['brand_logo'];?>" alt="manufacturer"></a>
                                            </div>
                                            
											<?php
											$brandid = $q['brand_id'];
											$sqll=$link->rawQuery("select * from producttb p,brandtb b where p.brand_id=b.brand_id and p.brand_id=$brandid");
											$c=$link->count;
											?>
                                            <div class="product-out-of-stock"></div>
                                            <div class="product-features">
                                                
                                                <ul class="data-sheet">
                                                    <li>Brand Name</li>
                                                    <li><?php echo $q['brand_name'];?></li>
                                                    <li>Items</li>
                                                    <li><?php echo $c;?></li>
                                                    <li>Description</li>
                                                    <li><?php echo $q['brand_description'];?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
									<div class="tab-pane" role="tabpanel" id="nav-details1" aria-labelledby="nav-details1-tab">
                                        <div class="product-details">
                                            <div class="product-manufacturer">
												<a href=""><img src="<?php echo $q['vendor_photo'];?>" alt="manufacturer"></a>
                                            </div>
                                            
											<?php
											$vid = $q['vendor_id'];
											$sqll=$link->rawQuery("select * from citytb c,vendor_reg v where v.city_id = c.city_id and v.vendor_id = $vid");
											foreach($sqll as $s){
												$c=$s['city_name'];
											}
											?>
                                            <div class="product-out-of-stock"></div>
                                            <div class="product-features">
                                                
                                                <ul class="data-sheet">
                                                    <li>Vendor Name</li>
                                                    <li><?php echo $q['vendor_name'];?></li>
                                                    <li>Email</li>
                                                    <li><?php echo $q['vendor_email'];?></li>
                                                    <li>City</li>
                                                    <li><?php echo $c;?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="nav-review" aria-labelledby="nav-review-tab">
									<?php
									if(@$_SESSION['usersessionid']=="")
									{?>
										<form method="post">
										<input type="submit" name="not_login" value="write review !" class="review-btn">
										</form>
										<?php
										if(@$_POST["not_login"])
										{?>
											<script>
												var rt = confirm("You have to logged in for write a review !");
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
									}
									else
									{?>
										<a class="review-btn" data-toggle="modal" data-target="#reviewModal">write your review !</a>
									
									<?php
									}
									?>
                                        
                                        
										
										
										<div class="row justify-content-center">
											<div class="col-lg-10 col-xl-8">
												<div class="testimonial-carousel owl-carousel">
												<?php
												$vid = $q['vendor_id'];
												$sql=$link->rawQuery("select * from reviewtb r,user_reg u where u.user_id=r.user_id and r.vendor_id = $vid ");
												foreach($sql as $s){
												?>
													<div class="testimonial">
														<div class="testimonial__desc">
															<p><?php echo $s['review_title'];?></p>
														</div>
														<div class="testimonial__author">
															<div class="testimonial__author-img">
																<!--<img src="assets/img/testimonial1.png" alt="author">-->
																<img src="<?php echo $s['user_image'];?>" alt="author">
															</div>
															<div class="testimonial__author-content">
																<h5><?php echo $s['user_name'];?></h5>
																<p><?php echo $s['review'];?></p>
															</div>
														</div>
													</div>
													<?php
													} ?>
												</div>
											</div>
										</div>
										
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Single Product Tab End -->

                <!-- Related Product Area Start -->
				
				
				<section class="related-product pt--30">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-title">
                                    <h2>Related Products</h2>
                                </div>                        
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="related-product__carousel owl-carousel js-related-product">
                                    <!-- Product Box Start -->
									<?php
										$sql3 = $link->rawQuery("select * from producttb p,product_imagetb pi ,vendor_reg v where p.vendor_id = v.vendor_id and v.is_active = 1 and p.product_id = pi.product_id and p.category_id = $cat and p.status = 'Available' group by p.product_id order by rand()");
										 foreach($sql3 as $s)
										 {
											 ?>
                                    <div class="product-box variable-product">
                                        <div class="product-box__meta">
                                        </div>
                                        <div class="product-box__image">
                                            <img src="<?php echo $s['image']; ?>" alt="product image" class="primary_image">
                                            <img src="<?php echo $s['product_image']; ?>" alt="product image" class="secondary_image">
                                            <a href="single_product.php?prodid=<?php echo $s['product_id'];?>" data-toggle="" data-target="" class="quick-view"> <i class="fa fa-eye"></i> </a>
                                        </div>
                                        <div class="product-box__footer">
                                            <div class="product-box__desc">
                                                <a href="single_product.php" class="product-box__title"><?php echo $s['product_name']; ?></a>
                                                <p class="product-box__price">
                                                    
                                                    <span class="sale-price">Rs.<?= number_format($s['product_price']); ?>/-</span>
                                                </p>
                                            </div>
											<form method="post">
                                            <div class="product-box__links">
												<input type="hidden" name="hiddeen_id" value="<?php echo $s['product_id'];?>">
                                                <input type="submit" class="btn add-to-cart btn-style-2" name="AddCart" value="Add To Cart">
                                            </div>
											</form>
                                        </div>
                                    </div>
									<?php
									 }
									?>
									
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
				
				
                
                <!-- Related Product Area End -->
            </div>
        </div>
        <!-- Main Content Wrapper End -->

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
        <?php include 'include/footer.php'; ?>
        <!-- Footer area End -->
        


    </div>

    <!-- Main Wrapper End -->



    <!-- Scroll To Top -->
    
    <a class="scroll-to-top" href=""><i class="fa fa-angle-double-up"></i></a>




    <!-- Modal -->
   

    <!-- Review Modal -->
    <div class="review-modal modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Write your review</h2>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="review-modal__left">
							<?php
							$sql6 = $link->rawQuery("select * from producttb where product_id=$prodid");
							foreach($sql6 as $s6)
							{
                                ?>
								
								
								<img src="<?php echo $s6['image']; ?>" alt="product" class="product-img">
                                <h4 class="product-name"><?php echo $s6['product_name']; ?></h4>
                                <p><?php echo $s6['product_description']; ?></p>
								<?php
							}
							?>
							</div>
                        </div>
						
                        <div class="col-md-6">
                            <div class="review-modal__right">
                                <h2>Write your review</h2>
                                <div class="your-rating">
                                    <h5>Quality</h5>
                                    <span class="ratings">
                                        <a href=""><i class="fa fa-star"></i></a>
                                        <a href=""><i class="fa fa-star"></i></a>
                                        <a href=""><i class="fa fa-star"></i></a>
                                        <a href=""><i class="fa fa-star"></i></a>
                                        <a href=""><i class="fa fa-star"></i></a>
                                    </span>
                                </div>
                                <form class="review-form" method="post" name="f1" onSubmit="return ck();">
									<?php
									$sql7 = $link->rawQuery("select * from producttb where product_id=$prodid");
									foreach($sql7 as $s7)
									{
										?>
										<input type="hidden" name="vendorid" value="<?php echo $s7['vendor_id']; ?>"/>
										
										<?php
									}
									?>
                                    <div class="review-form__group">
                                        <label for="reviewTitle" class="review-form__label">Title for your review <sup>*</sup></label>
                                        <input id="reviewTitle" type="text" name="reveiw-title" class="review-form__input">
										<span id="s1" style="color:red;"></span>
                                    </div>
                                    <div class="review-form__group">
                                        <label for="review" class="review-form__label">Your review <sup>*</sup></label>
                                        <textarea id="review" name="review" class="review-form__input review-form__input--textarea"></textarea>
										<span id="s2" style="color:red;"></span>
                                    </div>
                                    <div class="review-form__group">
                                        <label for="authorName" class="review-form__label">Your name <sup>*</sup></label>
                                        <input id="authorName" type="text" name="username" class="review-form__input">
										<span id="s3" style="color:red;"></span>
                                    </div>
                                    <p class="review-form__note"><sup>*</sup>Required fields</p>
                                    <div class="review-form__btn-group">
                                        <button type="submit" name="btnsubmit" class="btn review-form__btn">Send</button>
                                        <span>Or</span>
                                        <button type="button" class="btn review-form__btn close" data-dismiss="modal" aria-label="Close">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
						
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
	{
		header('location:user_login.php');
	}
	
	else
	{
		//$pqty = $_POST['qty'];
		$s = $link->rawQuery("select * from carttb where product_id=$prodid");
		if($s)
		{
			foreach($s as $s1)
			{
				$cid = $s1['cart_id'];
				$product_qty = $s1['qty'];
				$proid = $s1['product_id'];
				$user_id = $s1['user_id'];
				//$order_id = $s1['order_id'];
				//$qtyy = $pqty+$product_qty;
				if($proid == $prodid)
				{
					$link->where("cart_id",$cid);
					$i=$link->update("carttb",array("qty"=>1));
					if($i)
					{
						header("location:".$_SERVER['REQUEST_URI']);
					}
				}				
			}
		}
		else
		{		
			$p=$link->insert("carttb",array("product_id"=>$prodid,"user_id"=>$sessionid,"qty"=>1));
			if($p)
			{
				header("location:".$_SERVER['REQUEST_URI']);
			}
		}
	}
} 
if(@$_POST['AddCart'])
{
	if(!@$_SESSION)
	{
		session_start();
	}
	$sessionid=$_SESSION['usersessionid'];
	if($_SESSION['usersessionid']=="")
	{
		header('location:user_login.php');
	}
	else
	{
		
		$prid=$_POST['hiddeen_id'];
		//$pqty = $_POST['qty'];
		$s = $link->rawQuery("select * from carttb where product_id=$prid and user_id = $sessionid");
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
						header("location:".$_SERVER['REQUEST_URI']);
					}
				}				
			}
		}
		else
		{
			$p=$link->insert("carttb",array("product_id"=>$prid,"user_id"=>$sessionid,"qty"=>1));
			if($p)
			{
				header("location:".$_SERVER['REQUEST_URI']);
			}
		}
	}
} 


if(isset($_POST['btnsubmit']))
{
	$review = $_POST['review'];
	$title = $_POST['reveiw-title'];
	$vid=$_POST['vendorid'];
	$name=$_POST['username'];
	$i = $link->insert("reviewtb",array('user_id' => $sessionid ,'vendor_id' => $vid,'review_title' => $title, 'review' => $review, 'user_name'=>$name ,'product_id' => $prodid ));
	
	if($i)
	{
		header("location:".$_SERVER['REQUEST_URI']);
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