<?php 
ob_start();
include 'connection.php';
session_start();
$sessionid=$_SESSION['usersessionid'];
if($_SESSION['usersessionid']=="")
{
	header('location:user_login.php');
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="this is a demo meta description">
    <meta name="keywords" content="this is a demo meta keywords">
    <title>Rattle n Roll | Order Confirm</title>

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
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->


    <!-- Main Wrapper Start -->

    <div class="wrapper">

        <!-- Header area Start -->

       <?php include'include/header.php'; ?>
        
        <!-- Header area End -->

        <!-- Page Header Start -->
        <!--<section class="page-header">
            <h2 class="page-title color--white">Payment</h2>
        </section>-->
        <!-- Page Header End -->

        <!-- Breadcumb area Start -->
        
        <!-- Breadcumb area End -->

        <!-- Main Content wrapper Start -->
        <section class="main-content-wrapper">
            <div class="page-inner section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <center><h2> Order Confirm</h2></center>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <center>
                            
                            <img src="../Success.gif" align="center">   
                            </center>
                        </div>
						<div class="col-md-12">
						<center>
						<br>
						<br>
						<br>
						<p style="font-size: 3.3rem; font-family: Georgia, serif; color: green;
							line-height: 2.4rem;
							font-weight: 700;
						";>THANK YOU</p>
						<br>
						<br>
						
							<a href="index.php"><button type="submit" class="btn btn--small btn-style-3">Back to shop</button></a>
						</center>
						</div> 
                    </div> 
                </div>     
            </div>
        </section>
        <!-- Main Content wrapper End -->



        <!-- Clients area Start -->
        <div class="clients-area pt--40 pb--80">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="client-carousel owl-carousel">
                            <div class="single-client">
                                <img src="assets/img/1.jpg" alt="client">
                            </div>
                            <div class="single-client">
                                <img src="assets/img/2.jpg" alt="client">
                            </div>
                            <div class="single-client">
                                <img src="assets/img/3.jpg" alt="client">
                            </div>
                            <div class="single-client">
                                <img src="assets/img/4.jpg" alt="client">
                            </div>
                            <div class="single-client">
                                <img src="assets/img/5.jpg" alt="client">
                            </div>
                            <div class="single-client">
                                <img src="assets/img/6.jpg" alt="client">
                            </div>
                            <div class="single-client">
                                <img src="assets/img/4.jpg" alt="client">
                            </div>
                            <div class="single-client">
                                <img src="assets/img/5.jpg" alt="client">
                            </div>
                            <div class="single-client">
                                <img src="assets/img/6.jpg" alt="client">
                            </div>
                            <div class="single-client">
                                <img src="assets/img/4.jpg" alt="client">
                            </div>
                            <div class="single-client">
                                <img src="assets/img/5.jpg" alt="client">
                            </div>
                            <div class="single-client">
                                <img src="assets/img/6.jpg" alt="client">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Clients area End -->

        <!-- Footer area Start -->
        <?php include'include/footer.php'; ?>
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
          <div class="modal-body">
            <div class="row">
                <div class="col-md-5">
                    <div class="tab-content product-thumb-large">
                        <div id="thumb1" class="tab-pane active show fade">
                            <img src="assets/img/printed-summer-dress.jpg" alt="product thumb">
                        </div>
                        <div id="thumb2" class="tab-pane fade">
                            <img src="assets/img/printed-summer-dress-1.jpg" alt="product thumb">
                        </div>
                        <div id="thumb3" class="tab-pane fade">
                            <img src="assets/img/printed-summer-dress-2.jpg" alt="product thumb">
                        </div>
                        <div id="thumb4" class="tab-pane fade">
                            <img src="assets/img/printed-summer-dress-3.jpg" alt="product thumb">
                        </div>
                    </div>
                    <div class="product-thumbnail">
                        <div class="thumb-menu owl-carousel" id="thumbmenu">
                            <div class="thumb-menu-item">
                                <a href="#thumb1" data-toggle="tab" class="nav-link active">
                                    <img src="assets/img/printed-summer-dress.jpg" alt="product thumb">
                                </a>
                            </div>
                            <div class="thumb-menu-item">
                                <a href="#thumb2" data-toggle="tab" class="nav-link">
                                    <img src="assets/img/printed-summer-dress-1.jpg" alt="product thumb">
                                </a>
                            </div>
                            <div class="thumb-menu-item">
                                <a href="#thumb3" data-toggle="tab" class="nav-link">
                                    <img src="assets/img/printed-summer-dress-2.jpg" alt="product thumb">
                                </a>
                            </div>
                            <div class="thumb-menu-item">
                                <a href="#thumb4" data-toggle="tab" class="nav-link">
                                    <img src="assets/img/printed-summer-dress-3.jpg" alt="product thumb">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <h3 class="product-title">Printed Summer Dress</h3>
                    <div class="product-price">
                        <span class="regular-price">&dollar; 30.50</span>
                        <span class="sale-price">&dollar; 28.98</span>
                        <span class="discount-badge">save 5%</span>
                    </div>
                    <p class="product-desc">Long printed dress with thin adjustable straps. V-neckline and wiring under the bust with ruffles at the bottom of the dress.</p>
                    <div class="product-varients">
                        <div class="product-varients__size pb--30">
                            <p class="product-varients__label">Size</p>
                            <select class="product-varients__select">
                                <option value="1">S</option>
                                <option value="2">M</option>
                                <option value="3">L</option>
                            </select>
                        </div>
                        <div class="product-varients__color pb--40">
                            <p class="product-varients__label">Color</p>
                            <ul class="product-varients__color--group">
                                <li>
                                    <input type="radio" id="dark" name="varient-color" class="product-varients__color--input">
                                    <label for="dark" class="product-varients__color--label dark-color"></label>
                                </li>
                                <li>
                                    <input type="radio" id="yellow-light" name="varient-color" class="product-varients__color--input">
                                    <label for="yellow-light" class="product-varients__color--label yellow-light-color"></label>
                                </li>
                                <li>
                                    <input type="radio" id="blue-light" name="varient-color" class="product-varients__color--input">
                                    <label for="blue-light" class="product-varients__color--label blue-light-color"></label>
                                </li>
                                <li>
                                    <input type="radio" id="yellow" name="varient-color" class="product-varients__color--input">
                                    <label for="yellow" class="product-varients__color--label yellow-color"></label>
                                </li>
                            </ul>
                        </div>
                    </div> 
                    <div class="product-action-wrapper pb--30">
                        <div class="quantity">
                            <input type="number" class="quantity-input" name="qty" id="qty" value="1">
                        </div>
                        <a href="" class="btn add-to-cart btn-style-2">
                            Add To Cart
                        </a>
                    </div>  
                    <p class="product-availability"><i class="fa fa-check"></i> In Stock</p> 
                </div>
            </div>
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