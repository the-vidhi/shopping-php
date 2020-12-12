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
                                <li class="contact-info__list d-none d-md-inline-block"><h4 class="sale-price"><?php echo "Welcome To Our Shop " . $s['user_name'];?> </h4>
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
                                        <a class="dropdown-item" href="checkout.html">Checkout</a>
                                        <a class="dropdown-item" href="user_logout.php">Log out</a>
                                      </div>
									 
                                    </div>
                                </div>
                                <div class="currency-selector header-top__nav--item">
                                    <div class="dropdown header-top__dropdown">
                                      <a href="cart.php">
                                        CART
                                      </a>
                                      
                                    </div>
                                </div>
									
                                <div class="language-selector header-top__nav--item">
                                    <div class="dropdown header-top__dropdown">
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
            <div class="header-middle header-3--middle">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-3 col-sm-4">
                            <div class="header-middle__left">
                                <!-- Logo Start -->
                                <a href="index.html" class="logo-box">
                                    <img src="assets/img/logo.jpg" alt="logo" class="img-fluid">
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
                                <input type="text" class="search-form__input" placeholder="Enter your search key">
                                <div class="search-form__group search-form__group--select">
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
                                </div>
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
										$sql=$link->rawQuery("select * from cart_itemtb ci,carttb c where c.cart_id=ci.cart_id and user_id=$sessionid");
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
            <div class="header-bottom header-3--bottom fixed-header">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col">
                            <nav class="main-navigation">
                                <!-- Mainmenu Start -->
                                <ul class="mainmenu mainmenu--3">
                                    <li class="mainmenu__item menu-item-has-children">
                                        <a href="index.php" class="mainmenu__link">Home</a>
                                        <!--<ul class="sub-menu">
                                            <li>
                                                <a href="index.html">Home One</a>
                                            </li>
                                            <li>
                                                <a href="index-2.html">Home Two</a>
                                            </li>
                                            <li>
                                                <a href="index-3.html">Home Three</a>
                                            </li>
                                            <li>
                                                <a href="index-4.html">Home Four</a>
                                            </li>
                                        </ul>-->
                                    </li>
                                    <li class="mainmenu__item menu-item-has-children">
                                        <a href="" class="mainmenu__link">Category</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children">
                                                <a href="shop.html">Shop Grid</a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="shop.html">Shop Left Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-right-sidebar.html">Shop Right Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-grid-view-3-col.html">Shop 3 Column</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-grid-view-4-col.html">Shop 4 Column</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="shop-list-view.html">Shop List</a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="shop-list-view.html">Shop List View Left Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-list-view-right-sidebar.html">Shop List View Right Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-list-view-right-fullwidth.html">Shop List View Fullwidth</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="single-product.html" class="mainmenu-sub__link">Single Products</a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="single-product.html">Product Details</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-product-group.html">Group Product Details</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-product-link.html">Link Product Details</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-product-variable.html">Variable Product Details</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mainmenu__item menu-item-has-children">
                                        <a href="legal-notice.html" class="mainmenu__link">Age wise</a>
                                        <ul class="megamenu three-column">
                                            <li>
                                                <a href="#">Column One</a>
                                                <ul>
                                                    <li class="">
                                                        <a href="about-us.html" class="">About Us</a>
                                                    </li>
                                                    <li class="">
                                                        <a href="best-sales.html" class="">Best Products</a>
                                                    </li>
                                                    <li class="">
                                                        <a href="cart.html" class="">Cart</a>
                                                    </li>
                                                    <li class="">
                                                        <a href="checkout.html" class="">Checkout</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Column Two</a>
                                                <ul>
                                                    <li class="">
                                                        <a href="compare.html" class="">Compare</a>
                                                    </li>
                                                    <li class="">
                                                        <a href="login.html" class="">Login</a>
                                                    </li>
                                                    <li class="">
                                                        <a href="register.html" class="">Register</a>
                                                    </li>
                                                    <li class="">
                                                        <a href="stores.html" class="">Stores</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Column Three</a>
                                                <ul>
                                                    <li>
                                                        <a href="wishlist.html">Wishlist</a>
                                                    </li>
                                                    <li>
                                                        <a href="terms-and-conditions.html">Terms &amp; Conditions</a>
                                                    </li>
                                                    <li>
                                                        <a href="legal-notice.html">Legal Notice</a>
                                                    </li>
                                                    <li>
                                                        <a href="payment.html">Secure Payment</a>
                                                    </li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="mainmenu__item menu-item-has-children">
                                        <a href="blog-2-column-left-sidebar.html" class="mainmenu__link">Brand</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="blog-2-column-left-sidebar.html">Blog Two Column Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-2-column-right-sidebar.html">Blog Two Column right Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-3-column.html">Blog Three Column</a>
                                            </li>
                                            <li>
                                                <a href="single-blog-left-sidebar.html">Blog Details Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="single-blog-right-sidebar.html">Blog Details Right Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mainmenu__item"><a href="contact-us.html" class="mainmenu__link">Career</a></li>
                                    <li class="mainmenu__item"><a href="contact-us.html" class="mainmenu__link">Contact Us</a></li>
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