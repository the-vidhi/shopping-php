<?php 
ob_start();
include 'connection.php';
session_start();
$sessionid=$_SESSION['usersessionid'];
if($_SESSION['usersessionid']=="")
{
	header('location:user_login.php');
}
if(@$_GET['oid'])
{
	$oid=$_GET['oid'];
}
else
{?>
	<script>
	alert("Choose which order's details you want to see");
	window.location="user_account.php";
	</script>
<?php 
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
    <title>Rattle n Roll | Order Details </title>

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

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->


    <!-- Main Wrapper Start -->

    <div class="wrapper">

        <!-- Header area Start -->
		 <?php include'include/header.php'; ?>
        <!-- Header area End -->

        <!-- Page Header Start -->
        <section class="page-header">
            <h2 class="page-title color--white">Order Details</h2>
        </section>
        <!-- Page Header End -->

        <!-- Breadcumb area Start -->
        <div class="breadcumb-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="breadcumb">
                            <li class="breadcumb__list"><a class="breadcumb__link" href="index.php">Home</a></li>
                            <li class="breadcumb__list"><a class="breadcumb__link" href="user_account.php">Order List</a></li>
                            <li class="breadcumb__list"><a class="breadcumb__link current" href="">Order Details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcumb area End -->

        <!-- Main content wrapper start -->

        <div class="main-content-wrapper">
            <div class="checkout-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            
                            <!-- Checkout Area Start -->
							<?php
							
							$qry = $link->rawQuery("select * from user_reg u ,citytb c,statetb s where s.state_id=u.state_id and c.city_id=u.city_id and u.user_id=$sessionid ");
							foreach($qry as $q)
							{
								$uname = $q['user_name'];
								$uemail = $q['user_email'];
								$ucontact = $q['user_contact'];
								$ucity = $q['city_id'];
								$ustate = $q['state_id'];
								$uadd = $q['user_address'];
								$upincode = $q['pincode'];
							}
							?>
                            <div class="checkout-area pt--10">
							<form class="form" method="post" name="f1" onSubmit="return ck();" >
                                <div class="row">
                                    
									
                                    <div class="col-lg-12">
                                        <div class="section-title">
                                            <h2>Your Order</h2>
                                        </div>
										
										<div class="order-details">
                                            <table class="order-table">
											<thead>
                                                    <tr>
														<th>Order Date</th>
														<th>Address</th>
                                                        <th>User Information</th>
                                                    </tr>
                                                </thead>
												<?php
												$sql=$link->rawQuery("select * from ordertb o,billtb b,statetb s,citytb c where b.state_id = s.state_id and b.city_id = c.city_id and o.order_id = b.order_id and o.user_id=$sessionid and o.order_id = $oid");
												if($link->count > 0)
												{
													$total=0;
													foreach($sql as $s)
													{
														$street = $s['bill_street'];
														$apt = $s['bill_appartment'];
														$city = $s['city_name'];
														$state = $s['state_name'];
														$zip = $s['bill_zip'];
														
													?>
											    <tbody>
                                                    <tr>
													<td><?php echo $s['order_date']; ?></td>
													
													<td><?php echo $street; ?><br>
                                                        <?php echo $apt;?><br><br>
                                                        <?php echo $city;?><br><br>
                                                        <?php echo $state;?><br><br>
                                                        <?php echo $zip;?>
													</td>
													<td><?php echo $s['user_name']; ?><br><br>
													<?php echo $s['bill_email']; ?><br><br>
													<?php echo $s['bill_contact']; ?><br>
													</td>
                                                    </tr>
													
                                                </tbody>
												<?php	}
												}
												?>
                                                <thead>
												<tr><td></td><td></td><td></td></tr>
                                                    <tr style="background-color:darkgray;">
                                                        <th>Product</th>
                                                        <th>Unit Price</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
												<?php
												$sql=$link->rawQuery("select * from ordertb o,order_producttb op,producttb p where p.product_id = op.product_id and o.order_id = op.order_id and o.user_id=$sessionid and o.order_id = $oid");
												if($link->count > 0)
												{
													$total=0;
													foreach($sql as $s)
													{
														
														$q=$s['qty'];
														$p=$s['product_price'];
														$stotal=$q*$p;
														$total=$stotal+$total;
												?>
                                                <tbody>
                                                    <tr style="background-color:gainsboro;">
													<input type="hidden" name="qty[]" value="<?php echo $s['qty'] ;?>">
													<td><strong><?php echo $s['product_name'];?></strong>&nbsp&nbsp&nbsp&nbsp   x &nbsp&nbsp&nbsp&nbsp    <?php echo $s['qty'];?></td>
                                                        <td><?php echo $s['product_price'];?></td>
                                                        <td><?php echo $stotal;?></td>
                                                    </tr>
                                                </tbody>
												<?php
													}
												}?>
                                                <tfoot>
                                                    
                                                    <tr class="order-total" style="background-color:darkgray;">
                                                        <td>Order Total</td>
                                                        <td>-</td>
                                                        <td><?php echo $total;?></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
										
										
                                        
                                    </div>
                                </div>
							</form>	
							</div>
		
		
		                    <!-- Checkout Area End -->
                        </div>
                    </div> 
                </div>     
            </div>
        </div>

        <!-- Main content wrapper end -->


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