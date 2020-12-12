<footer class="footer footer--1">
            <div class="footer-top">
                <div class="container">
                    <div class="row pb--30 footer-method-box-row">
                        <!-- Method Box Start -->
                        <div class="col-md-3">
                            <div class="method-box">
                                <div class="method-box__icon">
                                    <i class="fa fa-paper-plane-o"></i>
                                </div>
                                <div class="method-box__content">
                                    <h4>Free Delivery</h4>
									</div>
                            </div>
                        </div>
                        <!-- Method Box End -->

                        <!-- Method Box Start -->
                        <div class="col-md-3">
                            <div class="method-box">
                                <div class="method-box__icon">
                                    <i class="fa fa-credit-card"></i>
                                </div>
                                <div class="method-box__content">
                                    <h4>Cod</h4>
                                    <p>Cash On Delivery</p>
                                </div>
                            </div>
                        </div>
                        <!-- Method Box End -->

                        <!-- Method Box Start -->
                        <div class="col-md-3">
                            <div class="method-box">
                                <div class="method-box__icon">
                                    <i class="fa fa-gift"></i>
                                </div>
                                <div class="method-box__content">
                                    <h4>Pay Pal</h4>
                                    <p>Secured Payment</p>
                                </div>
                            </div>
                        </div>
                        <!-- Method Box End -->

                        <!-- Method Box Start -->
                        <div class="col-md-3">
                            <div class="method-box">
                                <div class="method-box__icon">
                                    <i class="fa fa-support"></i>
                                </div>
                                <div class="method-box__content">
                                    <h4>Free Support</h4>
                                   </div>
                            </div>
                        </div>
                        <!-- Method Box End -->

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <hr class="line">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12">
                            <hr class="line">
                        </div>
                    </div>
                    <div class="row ptb--30 footer-widget-row">
                        <!-- Footer Widget Start -->
                        <div class="col-lg-4">
                            <div class="footer-widget">
                                <h3 class="widget-title">Contact Us</h3>
                                <div class="address-widget">
                                    <p><i class="fa fa-map-marker"></i>253 FF, Massimo,<br>
									opp. Tirupati Shyam Villa,<br>
									Bhimrad Althan Road,<br>
									Surat – 39 017.<br>
									Gujarat, India.
									</p>
                                    <p><i class="fa fa-phone"></i> +91-9080706050</p>
                                    <p><i class="fa fa-phone"></i> <a href="mailo:acc@rattlenroll.com">acc@rattlenroll.com</a></p>
                                </div>
                               
                            </div>
                        </div>
                        <!-- Footer Widget End -->

                        <!-- Footer Widget Start -->
                        <div class="col-lg-3 col-md-4">
                            <div class="footer-widget">
                                <h3 class="widget-title">Category</h3>
                                <div class="menu-widget">
								<ul>
								<?php
								$q = $link->rawQuery("select * from product_categorytb");
								if($q)
								{
									?>
									
                                        <li><a href="filter-by.php?cid=121">Educational toys</a></li>
                                        <li><a href="filter-by.php?cid=122">Soft toys</a></li>
                                        <li><a href="filter-by.php?cid=114">Dolls</a></li>
                                        <li><a href="filter-by.php?cid=129">Rider</a></li>
                                        <li><a href="filter-by.php?cid=116">Activity boards</a></li>
                                        <li><a href="filter-by.php?cid=119">Sports equipments</a></li>
                                    
									<?php
								}
								?>
                                 </ul>   
                                </div>
                            </div>
                        </div>
                        <!-- Footer Widget End -->

                        <!-- Footer Widget Start -->
                        <div class="col-lg-3 col-md-4">
                            <div class="footer-widget">
                                <h3 class="widget-title">Our Brand</h3>
                                <div class="menu-widget">
                                    <ul>
                                        <li><a href="filter-by.php?bid=1">Shop Name</a></li>
                                        <li><a href="filter-by.php?bid=5">Retroge</a></li>
                                        <li><a href="filter-by.php?bid=6">Designers</a></li>
                                        <li><a href="filter-by.php?bid=7">Oceandor</a></li>
                                        <li><a href="filter-by.php?bid=8">Photograph</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Footer Widget End -->

                        <!-- Footer Widget Start -->
                        <div class="col-lg-2 col-md-4">
                            <div class="footer-widget">
                                <h3 class="widget-title">Products</h3>
                                <div class="menu-widget">
                                    <ul>
                                        <li><a href="single_product.php?prodid=24">Safari Dreams</a></li>
                                        <li><a href="single_product.php?prodid=26">Teddy Doremon</a></li>
                                        <li><a href="single_product.php?prodid=32">Easy Chair</a></li>
                                        <li><a href="single_product.php?prodid=42">Teddy Pillow</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Footer Widget End -->

                    </div>
                    
                    
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <!-- Copyright Text Start -->
                            <p class="copyright-text">
                                Copyright <a href="">Rattle n Roll</a>. All rights reserved
                            </p>
                            <!-- Copyright Text End -->
                        </div>
                    </div>
                </div>
            </div>
        </footer>