<!doctype html>
<html class="no-js" lang="zxx">
<?php
ob_start();
include 'connection.php';
session_start();
$sessionid=$_SESSION['usersessionid'];
if($_SESSION['usersessionid']=="")
{		
	header('location:user_login.php');
}
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="this is a demo meta description">
    <meta name="keywords" content="this is a demo meta keywords">
    <title>Rattle n Roll | Cart</title>

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

</head>
    <body>
            <!-- Add your site or application content here -->
            
            <!--organicfood wrapper start--> 
           <?php 
		   include('include/header.php');
		   ?>
             <!--organicfood wrapper end-->
             
            <!--breadcrumb area start-->
           <section class="page-header">
            <h2 class="page-title color--white">Cart</h2>
        </section>
		
		<div class="breadcumb-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="breadcumb">
                            <li class="breadcumb__list"><a class="breadcumb__link" href="index.php">Home</a></li>
                            <li class="breadcumb__list"><a class="breadcumb__link current" href="">Cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
             <!--breadcrumb area end-->
			 
			 <div class="main-content-wrapper">
            <div class="cart-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-title">
                                        <h2>Shopping Cart</h2>
                                    </div>
                                </div>
                            </div>
							<?php
							$sql=$link->rawQuery("select * from carttb c,producttb p where  c.product_id=p.product_id and c.user_id=$sessionid");
							if($link->count > 0)
							{
												
							?>
                            <div class="row">
                                <div class="col-12">
                                    <!-- Cart Area Start -->
                                    <form method="post" class="form form--cart" id="cart_form" name="cart_form">
                                        <div class="cart-table table-content table-responsive">
                                            <table class="table mb--30">
                                                <thead>
                                                    <tr>
                                                        <th>remove</th>
                                                        <th>Images</th>
                                                        <th>Product</th>
                                                       
                                                       
                                                        <th>Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php
													$total=0;
													foreach($sql as $s)
													{
														$q=$s['qty'];
														$p=$s['product_price'];
														$stotal=$q*$p;
														$total=$stotal+$total;
												?>
													<tr>
													<input type="hidden" name="cart_id[]" value="<?php echo $s['cart_id'] ;?>">
							                        <input type="hidden" name="product_id[]" value="<?php echo $s['product_id']; ?>">
                                                        <td><a href="cart.php?id=<?php echo $s['cart_id'];?>"><i class="fa fa-times"></i></a></td>
                                                        <td>
															<a href="single_product.php?prodid=<?php echo $s['product_id'];?>"><img src="<?php echo $s['image'];?>" alt="product"></a>
                                                        </td>
                                                        <td class="cart-product-price"><h3><a href=""><?php echo $s['product_name'];?></a></h3></td>
                                                        <!--<td><strong><?php echo $s['product_price'];?></strong></td>-->
                                                       <!-- <td>
														
                                                           <div class="quantity">
														   
																<input type="number" class="quantity-input" name="qty[]" onchange="q();"  value="<?php echo $s['qty']?>">
                                                           </div> 
															
                                                        </td>-->
                                                        <td><strong><?php echo $stotal;?></strong></td>
														<input type="hidden" name="hidden" value="<?php echo $stotal;?>">
                                                    </tr>
                                                    <?php
													}
												
												?>
                                                </tbody>
                                            </table>
                                        </div>

                                        
                                        <div class="row justify-content-md-end">
                                            <div class="col-md-5">
                                                <div class="cart-page-total">
                                                    <h2>Cart Totals</h2>
                                                    <ul>
                                                        <li>
                                                            <span>Subtotal</span>
                                                            <span><?php echo $total;?></span>
                                                        </li>
                                                        <li>
                                                            <span>Subtotal</span>
                                                            <span><?php echo $total;?></span>
                                                        </li>
                                                    </ul>
                                                    <a href="checkout.php?cid=<?php echo $s['cart_id'];?>" class="btn btn--small btn-style-3">Proceed to Checkout</a>
                                                </div>
                                            </div>
                                        </div>
										
                                    </form>
                                    <!-- Cart Area End -->  
                                </div>
                            </div>
							<?php
							}
							else
							{
								echo '<center><span style="color:red;"><h4>Your Cart is Empty</h4></span><br><br>'; ?>
								<a href="index.php"><button type="submit" class="btn btn--small btn-style-3">Continue shopping</button></a>
					<?php			
							echo '</center>';
							}
							?>
                        </div>
                    </div>
                </div>      
            </div>
        </div>
			 
			 
            
        
            <!--organicfood wrapper start--> 
             <div class="organic_food_wrapper" style="background-color: #f6f6f6;">     
                <!-- footer start -->
                <?php 
				include('include/footer.php');
				?>
                
                <!-- footer end -->
                
                
                
            </div>
           
           
           
           
           
           
           <!--organicfood wrapper end--> 
            
    
            
  
		
		
		<!-- all js here -->
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script>
		function abc1(id)
		{
			
		$.ajax({
		   url: "remove_cart.php?cid="+id,
		   	// serializes the form's elements.
		   success: function(data)
		   {
			  
				if(data == '')
				{
				   location.reload(true); 
				}
				
		   }
		});
	}
	</script>
	<script>
   function q()
   {
       	$.ajax({
			 type: "POST",
		   url: "update_cart.php",
		   data: $("#cart_form").serialize(),
				
				// serializes the form's elements.
		   success: function(data)
		   {
		       	if(data == '')
				{
				   location.reload(true); 
				}
			
		   }
		});
   }
	
    $("#cart_form").submit(function(e) {
		$.ajax({
			 type: "POST",
		   url: "insert_order_item.php",
		   data: $("#cart_form").serialize(),
				
				// serializes the form's elements.
		   success: function(data)
		   {
		       	if(data == '')
				{
				    window.location.href='checkout.php';
				}
				else
				{
				}
		   }
		});
		e.preventDefault(); // avoid to execute the actual submit of the form.
	});
	</script>
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
<?php
if(@$_GET['id'])
{
	$id=$_GET['id'];
	$link->where("cart_id",$id);
	$d = $link->delete("carttb");
	if($d)
	{
		header('location:cart.php');
	}
}
?>