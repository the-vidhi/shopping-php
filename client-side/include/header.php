<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script> 
</head>


<header class="header header-1">
            <div class="header-top header-1--top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8 text-center text-lg-left">
						<?php
						if(!@$_SESSION)
						{
							session_start();
						}
						if(@$_SESSION['usersessionid']!="")
						{
							$sessionid=$_SESSION['usersessionid'];	
							$sql=$link->rawQuery("select * from user_reg where user_id=$sessionid");
							foreach($sql as $s){}
							?>
						
                            <!-- Contact Info Start -->
                            <ul class="contact-info contact-info--1">
                                <li class="contact-info__list d-none d-md-inline-block"><h4 class="sale-price"> </h4>
							</ul>
						   <!-- Contact Info End -->

							</div>
							<div class="col-lg-4">

                            <!-- Header Top Nav Start -->
							<div class="header-top__nav header-top__nav--1 d-flex justify-content-lg-end justify-content-center">
                                <div class="user-info header-top__nav--item">
                                    <div class="dropdown header-top__dropdown">
										<a class="dropdown-toggle" id="userID" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											My Account
											<i class="fa fa-angle-down"></i>
										</a>
										<div class="dropdown-menu" aria-labelledby="userID">
											<a class="dropdown-item" href="user_account.php">My Account</a>
											<a class="dropdown-item" href="user_password_reset.php">Change Password</a>
											<a class="dropdown-item" href="user_logout.php">Log out</a>
										</div>
                                    </div>
                                </div>
                                <div class="currency-selector header-top__nav--item">
                                    <div class="dropdown header-top__dropdown">
                                    Welcome... &nbsp&nbsp <span style="font-family: Libre Franklin, sans-serif; color: blue;font-weight: 700;"><?php echo $s['user_name']; ?></span>  
                                    </div>
                                </div>
									
                                
                            </div>
							<?php
							//unset($_SESSION['usersessionid']);
							}
							else
							{	?>
							<ul class="contact-info contact-info--1">
                                <li class="contact-info__list d-none d-md-inline-block"><?php echo ""; ?>
							</ul>
							</div>
							<div class="col-lg-4">

							<div class="header-top__nav header-top__nav--1 d-flex justify-content-lg-end justify-content-center">
                                <div class="user-info header-top__nav--item">
                                    <div class="dropdown header-top__dropdown">
										<a href="user_login.php">
											<b>SIGN IN </b>
										</a> <b>|</b>
										<a href="user_reg.php">
											<b>SIGN UP</b>
										</a>
									</div>
								</div>
							</div>
							<?php
							} ?>
                            
                            <!-- Header Top Nav End -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle header-1--middle">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-3 col-sm-4" style="padding-left: 0px;">
                            <div class="header-middle__left">
                                <!-- Logo Start -->
                                <a href="index.html" class="logo-box">
                                    <img src="assets/img/logo.jpeg" alt="logo" class="img-fluid" style="height: 80px;width: 188px;">
                                </a>
                                <!-- Logo End -->

                                <!-- Category Nav Start -->
                                <!--<div class="category-nav d-lg-block d-none">
                                    <h2 class="category-nav__title" id="js-cat-nav-title"><i class="fa fa-bars"></i> <span>Categories</span></h2>

                                <ul class="category-nav__menu hidden-in-default" id="js-cat-nav">
                                    <li class="category-nav__menu__item has-children">
                                        <a href="shop.html">Toys & Hobbies</a>
                                        <div class="category-nav__submenu">
                                            <div class="category-nav__submenu--inner">
                                                <h3 class="category-nav__submenu__title">Books &amp; Board Games</h3>
                                                <ul>
                                                    <li><a href="shop.html">Arts &amp; Crafts</a></li>
                                                    <li><a href="shop.html">Baby & Toddler Toys</a></li>
                                                    <li><a href="shop.html">Building Toys</a></li>
                                                    <li><a href="shop.html">Dolls & Accessories</a></li>
                                                    <li><a href="shop.html">Electronics for Kids</a></li>
                                                    <li><a href="shop.html">Games</a></li>
                                                </ul>
                                            </div>
                                            <div class="category-nav__submenu--inner">
                                                <h3 class="category-nav__submenu__title">Baby Dolls</h3>
                                                <ul>
                                                    <li><a href="shop.html">Baby Alive Dolls</a></li>
                                                    <li><a href="shop.html">Baby Annabell</a></li>
                                                    <li><a href="shop.html">Barbie</a></li>
                                                    <li><a href="shop.html">Bratz</a></li>
                                                    <li><a href="shop.html">Cupcake Surprise</a></li>
                                                    <li><a href="shop.html">DC Comics</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="category-nav__menu__item has-children">
                                        <a href="shop.html">Electronics</a>
                                        <div class="category-nav__submenu">
                                            <div class="category-nav__submenu--inner">
                                                <h3 class="category-nav__submenu__title">Cameras</h3>
                                                <ul>
                                                    <li><a href="shop.html">Cords and Cables</a></li>
                                                    <li><a href="shop.html">gps accessories</a></li>
                                                    <li><a href="shop.html">Microphones</a></li>
                                                    <li><a href="shop.html">Wireless Transmitters</a></li>
                                                </ul>
                                            </div>
                                            <div class="category-nav__submenu--inner">
                                                <h3 class="category-nav__submenu__title">GamePad</h3>
                                                <ul>
                                                    <li><a href="shop.html">cube lifestyle hd</a></li>
                                                    <li><a href="shop.html">gopro hero4</a></li>
                                                    <li><a href="shop.html">handycam cx405</a></li>
                                                    <li><a href="shop.html">vixia hf r600</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="category-nav__menu__item has-children">
                                        <a href="shop.html">cosmetic</a>
                                        <div class="category-nav__submenu">
                                            <div class="category-nav__submenu--inner">
                                                <h3 class="category-nav__submenu__title">health & beauty</h3>
                                                <ul>
                                                    <li><a href="shop.html">Healthcare</a></li>
                                                    <li><a href="shop.html">Scented Candles</a></li>
                                                    <li><a href="shop.html">Toiletries</a></li>
                                                    <li><a href="shop.html">Vitamins</a></li>
                                                </ul>
                                            </div>
                                            <div class="category-nav__submenu--inner">
                                                <h3 class="category-nav__submenu__title">makeup</h3>
                                                <ul>
                                                    <li><a href="shop.html">Blush</a></li>
                                                    <li><a href="shop.html">Bronzers</a></li>
                                                    <li><a href="shop.html">Concealers</a></li>
                                                    <li><a href="shop.html">Face</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="category-nav__menu__item has-children">
                                        <a href="shop.html">Vegetables & Fruits</a>
                                        <div class="category-nav__submenu">
                                            <div class="category-nav__submenu--inner">
                                                <h3 class="category-nav__submenu__title">Fruit</h3>
                                                <ul>
                                                    <li><a href="shop.html">Apples</a></li>
                                                    <li><a href="shop.html">Avocados</a></li>
                                                    <li><a href="shop.html">Bananas</a></li>
                                                    <li><a href="shop.html">Foundations</a></li>
                                                    <li><a href="shop.html">Citrus</a></li>
                                                </ul>
                                            </div>
                                            <div class="category-nav__submenu--inner">
                                                <h3 class="category-nav__submenu__title">Vegetables</h3>
                                                <ul>
                                                    <li><a href="shop.html">Avocados</a></li>
                                                    <li><a href="shop.html">Cucumbers</a></li>
                                                    <li><a href="shop.html">Eggplant</a></li>
                                                    <li><a href="shop.html">Fresh Herbs</a></li>
                                                    <li><a href="shop.html">Local Farm Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="category-nav__menu__item">
                                        <a href="shop.html">Accessories</a>
                                    </li>
                                    <li class="category-nav__menu__item">
                                        <a href="shop.html">Meat &amp; Seafood</a>
                                    </li>
                                    <li class="category-nav__menu__item">
                                        <a href="shop.html">Games</a>
                                    </li>
                                    <li class="category-nav__menu__item hidden-menu-item">
                                        <a href="shop.html">Microphone</a>
                                    </li>
                                    <li class="category-nav__menu__item">
                                        <a href="shop.html" class="js-expand-hidden-menu"> More Categories</a>
                                    </li>
                                </ul>
                                </div>--> 
                                <!-- Category Nav End -->

                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 order-3 order-lg-2">
                            <!-- Search Form Start -->
                            <form action="#" class="search-form search-form--1">
                                <input type="text" id="search" class="search-form__input" placeholder="Enter your search key">
                               
							   <!--<div class="search-form__group search-form__group--select">
                                    <select name="category" id="searchCategory" class="search-form__select">
                                        <option value="all">All Categories</option>
                                        <option value="3">Toys &amp; Hobbies</option>
                                        <option value="3">- -  Books &amp; Board Games</option>
                                        <option value="3">- - - -  Arts &amp; Crafts</option>
                                        <option value="3">- - - -  Arts &amp; Crafts</option>
                                        <option value="3">- - - -  Arts &amp; Crafts</option>
                                        <option value="3">- - - -  Arts &amp; Crafts</option>
                                        <option value="3">- - - -  Arts &amp; Crafts</option>
                                        <option value="3">Toys &amp; Hobbies</option>
                                        <option value="3">- -  Books &amp; Board Games</option>
                                        <option value="3">- - - -  Arts &amp; Crafts</option>
                                        <option value="3">- - - -  Arts &amp; Crafts</option>
                                        <option value="3">- - - -  Arts &amp; Crafts</option>
                                        <option value="3">- - - -  Arts &amp; Crafts</option>
                                        <option value="3">- - - -  Arts &amp; Crafts</option>
                                        <option value="3">Toys &amp; Hobbies</option>
                                        <option value="3">- -  Books &amp; Board Games</option>
                                        <option value="3">- - - -  Arts &amp; Crafts</option>
                                        <option value="3">- - - -  Arts &amp; Crafts</option>
                                        <option value="3">- - - -  Arts &amp; Crafts</option>
                                        <option value="3">- - - -  Arts &amp; Crafts</option>
                                        <option value="3">- - - -  Arts &amp; Crafts</option>
                                        <option value="3">Toys &amp; Hobbies</option>
                                        <option value="3">- -  Books &amp; Board Games</option>
                                        <option value="3">- - - -  Arts &amp; Crafts</option>
                                        <option value="3">- - - -  Arts &amp; Crafts</option>
                                        <option value="3">- - - -  Arts &amp; Crafts</option>
                                        <option value="3">- - - -  Arts &amp; Crafts</option>
                                        <option value="3">- - - -  Arts &amp; Crafts</option>
                                        <option value="3">Toys &amp; Hobbies</option>
                                        <option value="3">Toys &amp; Hobbies</option>
                                        <option value="3">Toys &amp; Hobbies</option>
                                        <option value="3">Toys &amp; Hobbies</option>
                                        <option value="3">Toys &amp; Hobbies</option>
                                    </select>
                                </div>-->
                                <button class="search-form__submit form-btn">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                            <!-- Search Form End -->
                        </div>
                        <div class="col-lg-2 col-sm-8 order-2 order-lg-3">

                            <!-- Header Cart Start -->
							<?php
							if(@$_SESSION['usersessionid']!="")
							{
							?>
							<div class="header-cart header-cart--1">
                                <a class="header-cart__dropdown-toggle" id="cartDropdown">
                                    <i class="fa fa-shopping-cart header-cart__icon"></i>
                                    <sup class="header-cart__count">
									
									<?php
										$sessionid=$_SESSION['usersessionid'];
										$sql=$link->rawQuery("select * from carttb  where user_id=$sessionid");
										$c=$link->count;
										if($c > 0)
										{
											echo $c;
										}
										else
										{
											echo '0';
										}
									?>
									</sup>
                                </a>
								<div class="header-cart__dropdown-menu">
								<?php
								$sql=$link->rawQuery("select * from carttb c,producttb p where p.product_id=c.product_id and c.user_id=$sessionid");
								if($link->count > 0)
								{?>
                                    <div class="header-cart__content">
                                        <a class="header-cart__close-btn" id="cart-close" href=""><i class="fa fa-times"></i></a>
                                        <?php
										$total=0;
										foreach($sql as $s)
										{
											$q=$s['qty'];
											$p=$s['product_price'];
											$stotal=$q*$p;
											$total=$stotal+$total;
										?>
										<div class="header-cart__item">
                                            <div class="header-cart__item--image">
                                                <img src="<?php echo $s['image'];?>" alt="product">
                                                <span class="header-cart__item--quantity"><?php echo $s['qty'];?></span>
                                            </div>
                                            <div class="header-cart__item--content">
                                                <h4><a href=""><?php echo $s['product_name'];?></a> </h4>
                                                <p><?= number_format($s['product_price']); ?> * <?php echo $s['qty'];?> = <?= number_format($stotal); ?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												<a href="cart.php?id=<?php echo $s['cart_id'];?>"><i class="fa fa-times"></i></a>
												</p>
												
                                                <!--<span>Size: S</span>
                                                <span>Color: Yello</span>-->
                                            </div>
                                        </div>
										<?php
											}
										?>
                                        <ul class="header-cart__list">
                                            <li class="header-cart__single">
                                                <span class="header-cart__single--title">Subtotal</span>
                                                <span class="header-cart__single--ammount"><?= number_format($total); ?></span>
                                            </li>
                                            <li class="header-cart__single">
                                                <span class="header-cart__single--title">Shipping</span>
                                                <span class="header-cart__single--ammount">Free</span>
                                            </li>
                                            
                                            <li class="header-cart__single">
                                                <span class="header-cart__single--title">Total</span>
                                                <span class="header-cart__single--ammount"><?= number_format($total); ?></span>
                                            </li>
                                        </ul>
                                        <div class="header-cart__btn">
										<a href="cart.php?cid=<?php echo $s['user_id'];?>" class="btn btn--small btn-style-3">View Cart</a>
                                           <a href="checkout.php?cid=<?php echo $s['user_id'];?>" class="btn btn--small btn-style-3">Checkout</a>
                                        </div>
                                        
                                    </div>
								<?php
								}
								else
								{?>
									<span style="color:red;"><h4 align="center">Your Cart is empty</h4></span>
								<?php
								}
									?>
                                </div>
                            </div>
							<?php
								} ?>
                            <!-- Header Cart End -->

                        </div>
                        <div class="col-12 d-lg-none order-4">
                            <!-- Category Mobile Menu Start -->
                            <div class="category-moble-menu"></div>
                            <!-- Category Mobile Menu End -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-1--bottom fixed-header">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col">
                            <nav class="main-navigation">
                                <!-- Mainmenu Start -->
                                <ul class="mainmenu">
                                     <li class="mainmenu__item"><a href="index.php" class="mainmenu__link">Home</a></li>
                                    <li class="mainmenu__item menu-item-has-children">
                                        <a href="" class="mainmenu__link">Categories</a>
                                        <ul class="megamenu three-column">
                                            <li>
                                                
                                                <ul>
                                                    <?php
														$cat = $link->rawQuery("select * from product_categorytb limit 0,7");
														foreach($cat as $c)
														{
															?>
															 <li>
																<a href="filter-by.php?cid=<?php echo $c['category_id']; ?>"><?php echo $c['category_name']; ?></a>
															</li>
															<?php
														}
														?>
                                                </ul>
                                            </li>
                                            <li>
                                                
                                                <ul>
                                                    <?php
														$cat = $link->rawQuery("select * from product_categorytb limit 7,7");
														foreach($cat as $c)
														{
															?>
															 <li>
																<a href="filter-by.php?cid=<?php echo $c['category_id']; ?>"><?php echo $c['category_name']; ?></a>
															</li>
															<?php
														}
														?>
                                                </ul>
                                            </li>
                                            <li>
                                                
                                                <ul>
                                                    <?php
													$cat = $link->rawQuery("select * from product_categorytb limit 14,6");
													foreach($cat as $c)
													{
														?>
														 <li>
															<a href="filter-by.php?cid=<?php echo $c['category_id']; ?>"><?php echo $c['category_name']; ?></a>
														</li>
														<?php
													}
													?>
                                                </ul>
                                            </li>
											
                                        </ul>
                                    </li>
                                    <li class="mainmenu__item menu-item-has-children">
                                        <a href="" class="mainmenu__link">Age Wise</a>
                                        <ul class="sub-menu">
										<?php
										$age = $link->rawQuery("select * from agetb");
										foreach($age as $a)
										{
											?>
											 <li>
                                                <a href="filter-by.php?age=<?php echo $a['age_id']; ?>"><?php echo $a['age_ratio']; ?></a>
                                            </li>
											<?php
										}
										?>
                                           
                                        </ul>
                                    </li>
                                    <li class="mainmenu__item menu-item-has-children">
                                        <a href="" class="mainmenu__link">Brand</a>
                                        <ul class="sub-menu">
										<?php
										$brand = $link->rawQuery("select * from brandtb");
										foreach($brand as $b)
										{
											?>
											 <li>
                                                <a href="filter-by.php?bid=<?php echo $b['brand_id']; ?>"><?php echo $b['brand_name']; ?></a>
                                            </li>
											<?php
										}
										?>
                                           
                                        </ul>
                                    </li>
                                    <li class="mainmenu__item"><a href="career.php" class="mainmenu__link">Career</a></li>
                                    <li class="mainmenu__item"><a href="contact_us.php" class="mainmenu__link">Contact Us</a></li>
									<a href="../vendor-side/vendor_login.php" target="_blank" class="btn btn--small btn-style-3">Sell Products</a>
                                </ul>
                                <!-- Mainmenu End -->
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- Main Mobile Menu Start -->
                            <div class="mobile-menu"></div>
                            <!-- Main Mobile Menu End -->
                        </div>
                    </div>
                </div>
            </div>
        </header>