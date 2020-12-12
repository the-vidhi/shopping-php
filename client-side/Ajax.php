<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="this is a demo meta description">
    <meta name="keywords" content="this is a demo meta keywords">
    <title>Kobe - Multi Store eCommerce Bootstrap 4 Template</title>

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
    <script type="text/javascript" src="Search/script.js"></script>
   

</head>
<body>


<?php
include "include/db.php";
if (isset($_POST['search']))
{
   $Name = $_POST['search'];
   $Query = "SELECT * FROM producttb WHERE product_name LIKE '%$Name%' LIMIT 5";
   $ExecQuery = MySQLi_query($con, $Query);
   echo '
<ul>
   '; ?>
   
 
<section class="featured-product-area pt--40 pb--80">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Searched Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                   
                        
						
                            <?php
							while ($Result = MySQLi_fetch_array($ExecQuery)) {
							   ?>
							    <div class="col-3">
							   <div class="featured-produts owl-carousel js-featured-product">
							<li onclick='fill("<?php echo $Result['product_name']; ?>")'>
							<a>
							
							<div class="featured-produts__group">
                                <div class="product-box variable-product">
                                    
                                    <div class="product-box__image">
                                        <img src="<?php echo $Result['image'];?>" alt="product image" class="primary_image">
                                        <img src="<?php echo $Result['image'];?>" alt="product image" class="secondary_image">
                                        <a href="single_product.php?prodid=<?php echo $Result['product_id'];?>" class="quick-view"> <i class="fa fa-eye"></i> </a>
                                    </div>
                                    <div class="product-box__footer">
                                        <div class="product-box__desc">
                                            <a href="single-product.html" class="product-box__title"><?php echo $Result['product_name'];?></a>
                                            <p class="product-box__price">
                                                <span class="sale-price"><?php echo $Result['product_price'];?></span>
                                                <span class="regular-price">&dollar;20.50</span>
                                            </p>
                                        </div>
                                        <form method="post">
                                            <div class="product-box__links">
												<input type="hidden" name="hiddeen_id" value="<?php echo $Result['product_id'];?>">
                                                <input type="submit" class="btn add-to-cart btn-style-2" name="AddToCart" value="Add To Cart">
                                            </div>
										</form>
                                    </div>
                                </div>
                            </div>
							</div>
							 </div>
							<?php
						} ?>
						
                        
                   
                </div>
            </div>            
</section> 
   
   
</ul>   
 <?php
}
?>
 <!-- ************************* JS ************************* -->

    
    <script src="assets/js/vendor/jquery.min.js"></script>

    <script src="assets/js/popper.min.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>

   <script src="assets/js/plugins.js"></script>

    <!--<script src="assets/js/main.js"></script>-->
</body>	   
   
   <!-- Below php code is just for closing parenthesis. Don't be confused. -->
   </html>