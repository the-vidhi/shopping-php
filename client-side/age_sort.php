<?php 
ob_start();
include 'connection.php';
/* if(@$_GET['id'])
{
	$id=$_GET['id'];
	$sql=$link->rawQuery("select * from producttb where age_id=$id");
	$c=$link->count;
}
 */
/* if(@$_GET['id1'])
{
	$id1=$_GET['id1'];
	$sql=$link->rawQuery("select * from producttb where product_colour = '$id1'");
	$c=$link->count;
} */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="this is a demo meta description">
    <meta name="keywords" content="this is a demo meta keywords">
    <title>Rattle n Roll | Sorting Products</title>

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

        <!-- Page Header Start -->
        <section class="page-header">
            <h2 class="page-title color--white">Age Wise Filter</h2>
        </section>
        <!-- Page Header End -->

        <!-- Breadcumb area Start -->
        <div class="breadcumb-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="breadcumb">
                            <li class="breadcumb__list"><a class="breadcumb__link" href="index.php">Home</a></li>
                            <li class="breadcumb__list"><a class="breadcumb__link current" href="">Age Wise Filter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcumb area End -->
		
		<div id="display"></div>
        
		<!-- Main content wrapper Start -->
        <div class="main-content-wrapper">
            <div class="shop-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <!-- Sidebar Start -->
                            <aside class="sidebar shop-sidebar">
                                <div class="row mb-md--30">
                                    <div class="col-12">
                                        <!-- Category Block Start -->
                                        <div class="category-block mb--30">
                                            <h3>Toys &amp; Hobbies</h3>
                                            <ul class="category-block__menu">
                                                <li>
                                                    <div class="category-block__menu-item">
                                                        <a href="">Choose colour</a>
                                                        <span class="expand-navbar" data-target="#navbarToggleExternalContent"></span>
                                                    </div>
                                                    <ul id="navbarToggleExternalContent" class="hide-in-default">
                                                    <?php
													$qry=$link->rawQuery("select distinct(product_colour) from producttb");
													foreach($qry as $q)
													{
													?>
														<li><a href="age_sort.php?id1=<?php echo $q['product_colour']; ?>"> &nbsp&nbsp
														<?php
														if($q['product_colour']=="White")
														{
															?>
																<label for="" class="mycolor white-color"></label>
														<?php
														}
														else if($q['product_colour']=="Yellow")
														{
															?>
															 <label for="" class="product-varients__color--label yellow-light-color"></label>
															<?php
														}
														else if($q['product_colour']=="Blue")
														{
															?>
															
																<label for="" class="product-varients__color--label blue-light-color"></label>
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
														</a></li>													
                                                    <?php
													}
													?>
													
                                                    </ul>
                                                </li>
                                                <!--<li>
                                                    <div class="category-block__menu-item">
                                                        <a href="">Books &amp; Board Games</a>
                                                        <span class="expand-navbar" data-target="#navbarToggleExternalContent-2"></span>
                                                    </div>
                                                    <ul id="navbarToggleExternalContent-2" class="hide-in-default">
                                                        <li><a href="">Arts &amp; Crafts</a></li>
                                                        <li><a href="">Arts &amp; Crafts</a></li>
                                                        <li><a href="">Arts &amp; Crafts</a></li>
                                                        <li><a href="">Arts &amp; Crafts</a></li>
                                                        <li><a href="">Arts &amp; Crafts</a></li>
                                                        <li><a href="">Arts &amp; Crafts</a></li>
                                                    </ul>
                                                </li>-->
                                            </ul>
                                        </div>
                                        <!-- Category Block End -->  
                                    </div>
                                   
                                    <div class="col-lg-12 col-md-6">
                                        <!-- Best Seller Product Area Start -->
                                        <div class="best-seller-product">
                                            <div class="section-title section-title--3">
                                                <h2>Related Products</h2>
                                            </div>
                                            <div class="best-seller-product__carousel--4 owl-carousel js-best-seller-carousel-2">    
                                                <div class="best-seller-product__group--2">
												<?php
												$sql = $link->rawQuery("select * from producttb where product_colour = 'blue' and status = 'Available' limit 4");
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
												$sql = $link->rawQuery("select * from producttb where product_colour = 'black' and status = 'Available' limit 4");
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
												$sql = $link->rawQuery("select * from producttb where product_colour = 'green'and status = 'Available' limit 4");
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
												$sql = $link->rawQuery("select * from producttb where product_colour = 'yellow' and status = 'Available' limit 4");
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
                            </aside>
                            <!-- Sidebar End -->
                        </div>
                        <div class="col-lg-9">
                            <div class="section-title">
                                <h2>Age Wise Filter</h2>
                            </div>
                            <!-- Shop Layout Start -->
                            <div class="shop-layout">
                                <div class="shop-toolbar d-flex flex-md-row flex-column justify-content-between align-items-md-center">
                                    <div class="shop-toolbar__grid-list">
                                        <ul class="nav">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#grid"><i class="fa fa-th"></i></a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#list"><i class="fa fa-list"></i></a>
                                            </li>
                                        </ul>
                                        <!--<span class="shop-toolbar__product-count">There Are 13 Products.</span>-->
                                    </div>
                                    
                                </div>
                                <div class="main-shop-wrapper">
                                    <div class="tab-content" id="myTabContent-2">
                                        <div class="tab-pane show active" id="grid">
                                            <div class="product-grid-view">
                                                <div class="row no-gutters">
												<?php
												if(@$_GET['id'])
												{
													$id=$_GET['id'];
													$sql=$link->rawQuery("select * from producttb p,product_imagetb pi where p.product_id=pi.product_id and age_id=$id and p.status = 'Available' group by p.product_id");
													$c=$link->count;
												}
												if(@$_GET['id1'])
												{
													$id1=$_GET['id1'];
													$sql=$link->rawQuery("select * from producttb p,product_imagetb pi where p.product_id=pi.product_id and product_colour = '$id1' and p.product_id and p.status = 'Available' group by p.product_id");
													$c=$link->count;
												}

														foreach($sql as $s)
														{ ?>
															
														
                                                    <div class="col-lg-4 col-md-6">
                                                        <!-- Product Box Start -->
                                                        <div class="product-box variable-product">
                                                            <div class="product-box__meta">
                                                                
                                                            </div>
                                                            <div class="product-box__image">
                                                                <img src="<?php echo $s['image'];?>" alt="product image" class="primary_image">
                                                                <img src="<?php echo $s['product_image'];?>" alt="product image" class="secondary_image">
                                                                <a href="single_product.php?prodid=<?php echo $s['product_id'];?>" class="quick-view"> <i class="fa fa-eye"></i> </a>
                                                            </div>
                                                            <div class="product-box__footer">
                                                                <div class="product-box__desc">
                                                                    <a href="" class="product-box__title"><?php echo $s['product_name'];?></a>
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
                                                        <!-- Product Box End -->                        
                                                    </div>
                                                    <?php }
												
												 ?>
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="list">
                                            <div class="product-list-view">
											<?php
												if(@$_GET['id'])
												{
													$id=$_GET['id'];
													$sql=$link->rawQuery("select * from producttb p,product_categorytb c,product_imagetb pi where c.category_id=p.category_id and p.product_id=pi.product_id and age_id=$id and p.status = 'Available' group by p.product_id");
													$c=$link->count;
												}
												if(@$_GET['id1'])
												{
													$id1=$_GET['id1'];
													$sql=$link->rawQuery("select * from producttb p,product_categorytb c,product_imagetb pi where c.category_id=p.category_id and p.product_id=pi.product_id and product_colour = '$id1' and p.product_id and p.status = 'Available' group by p.product_id");
													$c=$link->count;
												}

												if($link->count > 0)
													{
														foreach($sql as $s)
														{ ?>
												
                                                <div class="product-box product-box--list variable-product">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="product-box__image">
                                                                <img src="<?php echo $s['image'];?>" alt="product image" class="primary_image">
                                                                <img src="<?php echo $s['product_image'];?>" alt="product image" class="secondary_image">
                                                                <a href="single_product.php?prodid=<?php echo $s['product_id'];?>" class="quick-view"> <i class="fa fa-eye"></i> </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="product-box__meta">
                                                                <a href="" class="product-box__category"><?php echo $s['category_name']; ?></a>
                                                            </div>
                                                            <div class="product-box__desc">
                                                                <a href="" class="product-box__title"><?php echo $s['product_name'];?></a>
                                                                <p class="product-box__price">
                                                                    <span class="sale-price">Rs.<?= number_format($s['product_price']); ?>/-</span>
                                                                   
                                                                </p>
                                                                <p class="product-box__short-desc"><?php echo $s['product_description'];?></p>
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
												<?php }
													}
													else
													{
														echo 'There are no Products available in this category';
													}
												 ?>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="product-pagintaion d-flex flex-column flex-md-row justify-content-between align-items-md-center">
                                        <p class="showing-product">Showing 1-12 of 13 item(s)</p>
                                        <ul class="page-list">
                                            <li class="prev"><a href=""><i class="fa fa-angle-left"></i> Previous</a></li>
                                            <li class="current"><a href="">1</a></li>
                                            <li><a href="">2</a></li>
                                            <li class="next"><a href="">Next <i class="fa fa-angle-right"></i> </a></li>
                                        </ul>
                                    </div>-->
                                </div>
                            </div>
                            <!-- Shop Layout End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content wrapper End -->

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
        <?php include 'include/footer.php'?>
        <!-- Footer area End -->
        


    </div>

    <!-- Main Wrapper End -->



    <!-- Scroll To Top -->
    
    <a class="scroll-to-top" href=""><i class="fa fa-angle-double-up"></i></a>



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
		$s = $link->rawQuery("select * from carttb where product_id=$prid");
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
						header('Location'.$_SERVER['REQUEST_URI']);
					}
				}				
			}
		}
		else
		{
			$p=$link->insert("carttb",array("product_id"=>$prid,"user_id"=>$sessionid,"qty"=>1));
			if($p)
			{
				header('Location'.$_SERVER['REQUEST_URI']);
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