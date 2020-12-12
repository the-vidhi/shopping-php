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
    <title>Rattle n Roll | Our Products</title>

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
	<link rel="stylesheet" href="assets/css/range-slider.css">
    <!-- modernizr JS
    ============================================ -->
    <script src="assets/js/modernizr-2.8.3.min.js"></script>

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
            <h2 class="page-title color--white">Our Products</h2>
        </section>
        <!-- Page Header End -->

        <!-- Breadcumb area Start -->
        <div class="breadcumb-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="breadcumb">
                            <li class="breadcumb__list"><a class="breadcumb__link" href="index.php">Home</a></li>
                            <li class="breadcumb__list"><a class="breadcumb__link current" href="">Our Products</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcumb area End -->

        <!-- Main content wrapper Start -->
        <div class="main-content-wrapper">
            <div class="shop-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 order-lg-1 order-2">
                            <!-- Sidebar Start -->
                            <aside class="sidebar shop-sidebar">
                                <div class="search-filter">
                                    <div class="search-filter__single section-title section-title--3 mb--30">
                                        <h2>Filter By</h2>
                                    </div>

                                    <div class="search-filter__single search-filter__clear mb--30">
                                        <a class="clear-btn" href=""><i class="fa fa-times"></i> clear all</a>
                                    </div>

									
									
									 <div class="search-filter__single search-filter__price mb--30">
                                        <div class="section-title section-title--3">
                                            <h2>Price</h2>
                                        </div>
										
										
										<div class="middle">
										<div class="container">
										<div class="slider-container">
										<span class="bar"><span class="fill"></span></span>
										<input type="range" name="range" min="0" max="5000" value="0" step="50"  id="range_value" class="product_check slider fillslider"> <br><br><br>
										Price below RS :  <span id="price_display">--</span>
										</div>
										
										</div>
										</div>
                                     </div>
									
                                    <!-- Category Search filter Start -->
                                    <div class="search-filter__single search-filter__category mb--30">
                                        <div class="section-title section-title--3">
                                            <h2>Categories</h2>
                                        </div>
                                        <ul class="search-filter__list">
										<?php
										$qry = $link->rawQuery("select distinct(category_name) from product_categorytb c ,producttb p where p.category_id=c.category_id order by p.product_id desc");
										foreach($qry as $row)
										{
											?>
											 <li class="custom-checkbox">
                                                <input type="checkbox" name="" id="category" class="product_check" value="<?php echo $row['category_name'] ; ?>">
                                                <label for="" class=""><?php echo $row['category_name']; ?></label>
                                            </li>
											<?php
										}
										?>
                                         </ul>
                                    </div>
                                    <!-- Category Search filter End -->
								
									 
									 <div class="search-filter__single search-filter__category mb--30">
                                        <div class="section-title section-title--3">
                                            <h2>Brand</h2>
                                        </div>
                                        <ul class="search-filter__list">
										<?php
										$qry = $link->rawQuery("select distinct(brand_name) from brandtb b , producttb p where b.brand_id=p.brand_id order by b.brand_id");
										foreach($qry as $row)
										{
											?>
											 <li class="custom-checkbox">
                                                <input type="checkbox" name="" id="brand" class="product_check" value="<?php echo $row['brand_name'] ; ?>">
                                                <label for="" class=""><?php echo $row['brand_name']; ?></label>
                                            </li>
											<?php
										}
										?>
                                         </ul>
                                    </div>
									<!-- Brand Search filter End -->
									
                                     
                                   
                                    <!-- Price Search filter End -->

                                     
                                    <div class="search-filter__single search-filter__size mb--30">
                                        <div class="section-title section-title--3">
                                            <h2>Age</h2>
                                        </div>
                                         <ul class="search-filter__list">
										 <?php
										$qry = $link->rawQuery("select distinct(age_ratio) from agetb a,producttb p where p.age_id=a.age_id order by a.age_id");
										foreach($qry as $q)
										{
											?>
											  <li class="custom-radio">
                                                <input type="radio" name="age" id="age" class="product_check" value="<?php echo $q['age_ratio']; ?>">
                                                <label for="" class="" ><span></span><?php echo $q['age_ratio']; ?></label>
                                            </li>
											<?php
										}
										?>
                                           
                                           
                                        </ul>
                                    </div>
                                    <!-- Size Search filter End -->

                                   

                                    

                                </div>
                               
                            </aside>
                            <!-- Sidebar End -->
                        </div>
                        <div class="col-lg-9 order-lg-2 order-1 mb-md--30"> 
                            <!-- Shop Toolbar Start -->
                            <div class="shop-toolbar d-flex flex-md-row flex-column justify-content-between align-items-md-center">
                                <div class="shop-toolbar__grid-list">
                                    <ul class="nav">
                                        <li>
                                            <a data-toggle="tab" href="#grid"><i class="fa fa-th"></i></a>
                                        </li>
                                        <li>
                                            <a class="active" data-toggle="tab" href="#list"><i class="fa fa-list"></i></a>
                                        </li>
                                    </ul>
                                    
                                </div>
                                
                            </div>
                            <!-- Shop Toolbar End -->

                            <!-- Shop Layout Start -->
                            <div class="main-shop-wrapper">
                                <div class="tab-content" id="myTabContent-2">
                                    <div class="tab-pane" id="grid">
                                        <div class="product-grid-view">
                                            <div class="row" id="result">
                                               
                                               <?php
											   
											   if(@$_GET['bid'])
												{
													$id=$_GET['bid'];
													$sql=$link->rawQuery("select * from producttb p,product_categorytb c,product_imagetb pi,brandtb b ,vendor_reg v where p.vendor_id = v.vendor_id and v.is_active = 1 and b.brand_id=p.brand_id and c.category_id=p.category_id and p.product_id=pi.product_id and b.brand_id=$id and p.status = 'Available' group by p.product_id");
													$c=$link->count;
												}
												else if(@$_GET['cid'])
												{
													$id=$_GET['cid'];
													$sql=$link->rawQuery("select * from producttb p,product_categorytb c,product_imagetb pi,brandtb b ,vendor_reg v where p.vendor_id = v.vendor_id and v.is_active = 1 and c.category_id=p.category_id and p.product_id=pi.product_id and c.category_id=$id  and p.status = 'Available'group by p.product_id");
													$c=$link->count;
												}
												else if(@$_GET['age'])
												{
													$id=$_GET['age'];
													$sql=$link->rawQuery("select * from producttb p,product_categorytb c,agetb a ,product_imagetb pi ,vendor_reg v where p.vendor_id = v.vendor_id and v.is_active = 1 and a.age_id=p.age_id and c.category_id=p.category_id and p.product_id=pi.product_id and a.age_id=$id and p.status = 'Available' group by p.product_id");
													$c=$link->count;
												}
												else{
													$sql = $link->rawQuery("select * from product_imagetb pi,producttb p,product_categorytb c,brandtb b ,vendor_reg v where p.vendor_id = v.vendor_id and v.is_active = 1 and p.product_id=pi.product_id and p.category_id=c.category_id and b.brand_id=p.brand_id and p.status = 'Available' group by p.product_id");
												}
															if($link->count > 0)
															{
																foreach($sql as $row)
																{
																	?>
											
                                               
                                                    <!-- Product Box Start -->
                                                    
                                                        
																<div class="col-xl-4 col-md-6">
															<!-- Product Box Start -->
															<div class="product-box variable-product">
																<div class="product-box__meta">
                                                                <a href="" class="product-box__category"><?php echo $row['category_name']; ?></a>
                                                            </div>
																<div class="product-box__image">
																	<img src="<?php echo $row['image']; ?>" alt="product image" class="primary_image">
																	<img src="<?php echo $row['product_image']; ?>" alt="product image" class="secondary_image">
																	<a href="single_product.php?prodid=<?php echo $row['product_id'];?>" class="quick-view"> <i class="fa fa-eye"></i> </a>
																</div>
																<div class="product-box__footer">
																	<div class="product-box__desc">
																		<a href="single_product.php?prodid=<?php echo $row['product_id'];?>" class="product-box__title"><?php  echo $row['product_name']; ?></a>
																		<p class="product-box__price">
																			<span class="sale-price">Rs.<?= number_format($row['product_price']); ?>/-</span>
																			
																		</p>
																	</div>
																	<form method="post">
																<div class="product-box__links">
																	<input type="hidden" name="hiddeen_id" value="<?php echo $row['product_id'];?>">
																	<input type="submit" class="btn add-to-cart btn-style-2" name="AddToCart" value="Add To Cart">
																</div>
																</form>
																</div>
															</div>
															<!-- Product Box End -->                        
														</div>
														<?php	
																}
															}
															else{
																
																echo '<span  style="color:red;">There are no Products available in this category </span>';
															}
															
														?>
                                                        
                                                        
                                                    
                                                    <!-- Product Box End -->                        
                                                
											
                                                
                                                
                                                
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
									
                                   <div class="tab-pane show active" id="list">
                                        <div class="product-list-view" id="listresult">
										<?php
											if(@$_GET['bid'])
												{
													$id=$_GET['bid'];
													$sql1=$link->rawQuery("select * from producttb p,product_categorytb c,product_imagetb pi,brandtb b ,vendor_reg v where p.vendor_id = v.vendor_id and v.is_active = 1 and b.brand_id=p.brand_id and c.category_id=p.category_id and p.product_id=pi.product_id and b.brand_id=$id and p.status = 'Available' group by p.product_id");
													$c=$link->count;
												}
												else if(@$_GET['cid'])
												{
													$id=$_GET['cid'];
													$sql1=$link->rawQuery("select * from producttb p,product_categorytb c,product_imagetb pi,brandtb b ,vendor_reg v where p.vendor_id = v.vendor_id and v.is_active = 1 and c.category_id=p.category_id and p.product_id=pi.product_id and c.category_id=$id and p.status = 'Available' group by p.product_id");
													$c=$link->count;
												}
												else if(@$_GET['age'])
												{
													$id=$_GET['age'];
													$sql1=$link->rawQuery("select * from producttb p,product_categorytb c,agetb a ,product_imagetb pi ,vendor_reg v where p.vendor_id = v.vendor_id and v.is_active = 1 and a.age_id=p.age_id and c.category_id=p.category_id and p.product_id=pi.product_id and a.age_id=$id and p.status = 'Available' group by p.product_id");
													$c=$link->count;
												}
												else{
													$sql1 = $link->rawQuery("select * from product_imagetb pi,producttb p,product_categorytb c,brandtb b ,vendor_reg v where p.vendor_id = v.vendor_id and v.is_active = 1 and p.product_id=pi.product_id and p.category_id=c.category_id and b.brand_id=p.brand_id and p.status = 'Available' group by p.product_id");
												}
															
															if($link->count > 0)
															{
																foreach($sql1 as $row)
																{
																	?>
                                            <div class="product-box product-box--list variable-product">
											
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="product-box__image">
                                                            <img src="<?php echo $row['image']; ?>" alt="product image" class="primary_image">
                                                            <img src="<?php echo $row['product_image']; ?>" alt="product image" class="secondary_image">
                                                            <a href="single_product.php?prodid=<?php echo $row['product_id'];?>" data-toggle="" data-target="#productModal" class="quick-view"> <i class="fa fa-eye"></i> </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="product-box__meta">
                                                                <a href="" class="product-box__category"><?php echo $row['category_name']; ?></a>
                                                            </div>
                                                        <div class="product-box__desc">
                                                            <a href="single_product.php?prodid=<?php echo $row['product_id'];?>" class="product-box__title"><?php  echo $row['product_name']; ?></</a>
                                                            <p class="product-box__price">
                                                                <span class="sale-price">Rs.<?= number_format($row['product_price']); ?>/-</span>
                                                               
                                                            </p>
                                                            <p class="product-box__short-desc"><?php echo $row['product_description']; ?></p>
                                                            <form method="post">
																<div class="product-box__links">
																	<input type="hidden" name="hiddeen_id" value="<?php echo $row['product_id'];?>">
																	<input type="submit" class="btn add-to-cart btn-style-2" name="AddToCart" value="Add To Cart">
																</div>
																</form>
                                                        </div>
                                                    </div>
                                                </div>
												
                                            </div>
                                            <?php			
																}
															}
															else{
																
																echo '<span  style="color:red;">There are no Products available in this category </span>';
															}
															
														?>
                                        </div>
                                    </div> 
									
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
    


<?php
if(isset($_GET['logo']))
{
	$lgid = $_GET['logo'];
	$sql = $link->rawQuery("select * from brandtb where brand_id = $lgid");
	foreach($sql as $s)
	{ 
		
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
	<script src="assets/js/jquery-3.5.1.min.js"></script>

	 <script type="text/javascript">
	$(document).ready(function(){
		//alert("hello");
		$(".product_check").click(function(){
			var action = 'data';
			var brand = get_filter_text('brand');
			var category = get_filter_text('category');
			var range = $("#range_value").val();
			$("#price_display").html(range);
			var minimum_price = $('#hidden_minimum_price').val();
			var maximum_price = $('#hidden_maximum_price').val();
			
			var product_price = get_filter_text('product_price');
			var age = get_filter_text('age');

			$.ajax({
				url : 'fetch_data.php',
				method : 'POST',
				data : {action:action,brand:brand,category:category,range:range,minimum_price:minimum_price,maximum_price:maximum_price,product_price:product_price,age:age},
				success :function(response){
					$("#result").html(response);
					$("#listresult").html(response);
					
				}
			});
			
			
		
		});
		function get_filter_text(text_id)
		{
			var filterData = [];
			$('#'+text_id+':checked').each(function(){
				filterData.push($(this).val());

			});
			return filterData;
		}
		
		
		
	});
	
	


</script>
	
</body>
</html>
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