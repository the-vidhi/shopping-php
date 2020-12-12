<?php 
ob_start();
include 'connection.php';
session_start();
$sessionid=$_SESSION['usersessionid'];
if($_SESSION['usersessionid']=="")
{
	header('location:user_login.php');
}
if(@$_GET['cid'])
{
	$cid=$_GET['cid'];
}
else
{?>
	<script>
	alert("Fill Your cart to make order");
	window.location="index.php";
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
    <title>Rattle n Roll | Checkout</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link rel="apple-touch-icon" href="assets/img/icon.png">



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
<script>
function ck()
{
	var s = true;
	
	document.getElementById("s1").innerHTML = "";
	var n = document.f1.name.value;
	var ns=/^[A-Za-z]{3,15}$/;
	if(n == 0)
	{
		document.getElementById("s1").innerHTML = "Enter Name";
		s = false;
	}
	else if(!ns.test(n))
	{
		document.getElementById("s1").innerHTML = "Enter Valid Name";
		s = false;
	}
	
	document.getElementById("s2").innerHTML = "";
	var n = document.f1.email.value;
	var ns=/^([a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$)/;
	if(n == 0)
	{
		document.getElementById("s2").innerHTML = "Enter Email";
		s = false;
	}
	else if(!ns.test(n))
	{
		document.getElementById("s2").innerHTML = "Enter Valid Email";
		s = false;
	}
	
	document.getElementById("s3").innerHTML = "";
	var contact = document.f1.contact.value;
	var con_formate=/^((\+){1}91){1}[1-9]{1}[0-9]{9}$/;
	if(contact == 0)
	{
		document.getElementById("s3").innerHTML = "Enter Contact Number";
		s = false;
	}
	else if(!con_formate.test(contact))
	{
		document.getElementById("s3").innerHTML = "Formate Is Not Match";
		s = false;
	}
	
	document.getElementById("s4").innerHTML = "";
	var p = document.f1.zipcode.value;
	var pin_formate=/^[1-9][0-9]{5}$/;
	if(p == 0)
	{
		document.getElementById("s4").innerHTML = "Enter Zipcode";
		s = false;
	}
	else if(!pin_formate.test(p))
	{
		document.getElementById("s4").innerHTML = "Formate Is Not Match";
		s = false;
	}
	
	document.getElementById("s5").innerHTML = "";
	var st = document.f1.select_state.value;
	
	if(st == "---Select State---")
	{
		document.getElementById("s5").innerHTML = "Select State";
		s = false;
	}
	document.getElementById("s6").innerHTML = "";
	var c = document.f1.select_city.value;
	
	/* if(c == "---Select City---")
	{
		document.getElementById("s6").innerHTML = "Select City";
		s = false;
	}
	 */	
	document.getElementById("s7").innerHTML = "";
	var a = document.f1.streetAddress.value;
	var add_formate =/^[a-zA-Z0-9\s\,\''\-]{10,200}$/;
	if(a == 0)
	{
		document.getElementById("s7").innerHTML = "Enter Street Address";
		s = false;
	}
	else if(!add_formate.test(a))
	{
		document.getElementById("s7").innerHTML = "Length Must Be Between 10 to 200";
		s = false;
	}
	
	/*document.getElementById("s8").innerHTML = "";
	var a = document.f1.apartment.value;
	var add_formate =/^[a-zA-Z0-9\s\,\''\-]{10,200}$/;
	if(a == 0)
	{
		document.getElementById("s8").innerHTML = "Enter Apartment, suite, unit, etc..";
		s = false;
	}
	else if(!add_formate.test(a))
	{
		document.getElementById("s8").innerHTML = "Length Must Be Between 10 to 200";
		s = false;
	}*/
	
	/*document.getElementById("s9").innerHTML = "";
	var a = document.f1.orderNotes.value;
	var add_formate =/^[a-zA-Z0-9\s\,\''\-]{10,200}$/;
	if(a == 0)
	{
		document.getElementById("s9").innerHTML = "Enter Address";
		s = false;
	}
	else if(!add_formate.test(a))
	{
		document.getElementById("s9").innerHTML = "Length Must Be Between 10 to 200";
		s = false;
	}*/
	
	document.getElementById("s10").innerHTML = "";
	var g = document.f1.paymentMethods.value;
	if(g == 0)
	{
		document.getElementById("s10").innerHTML="Please Select Payment Type Method";
		s=false;
	}
	/*
	document.getElementById("s11").innerHTML = "";
	var tandc = document.f1.termsandconditions.value;
	if(tandc == 0)
	{
		document.getElementById("s11").innerHTML="Please agree to terms and conditions";
		s=false;
	}*/
	
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
		 <?php include'include/header.php'; ?>
        <!-- Header area End -->

        <!-- Page Header Start -->
        <section class="page-header">
            <h2 class="page-title color--white">Checkout</h2>
        </section>
        <!-- Page Header End -->

        <!-- Breadcumb area Start -->
        <div class="breadcumb-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="breadcumb">
                            <li class="breadcumb__list"><a class="breadcumb__link" href="index.php">Home</a></li>
                            <li class="breadcumb__list"><a class="breadcumb__link" href="cart.php">Shopping Cart</a></li>
                            <li class="breadcumb__list"><a class="breadcumb__link current" href="">Checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcumb area End -->

        <!-- Main content wrapper start -->

        <div class="main-content-wrapper">
            <div class="checkout-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!--<div class="user-actions">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="user-actions__single user-actions__login">
                                            <h3><i class="fa fa-user-circle-o"></i> Returning Customer? <span class="expand_action" data-attr="#checkout_login">Click here to login.</span></h3>
                                            <div id="checkout_login" class="checkout-login user-actions__form hide-in-default">
                                                <div class="checkout-login__info">
                                                    <p class="checkout-login__text">
                                                        If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section.
                                                    </p>
                                                    <form class="form">
                                                        <div class="form-row">
                                                            <div class="form__group col-md-6 col-12">
                                                                <label class="form__label" for="email">Username Or Email <sup>*</sup></label>
                                                                <input type="email" name="email" id="email" class="form__input">
                                                            </div>
                                                            <div class="form__group col-md-6 col-12">
                                                                <label class="form__label" for="login_password">Password <sup>*</sup></label>
                                                                <input type="password" name="login_password" id="login_password" class="form__input">
                                                            </div>
                                                        </div>
                                                        <div class="form-row align-items-center">
                                                            <div class="form__group col-lg-1">
                                                                <button type="submit" class="btn btn--small btn-style-3">Login</button>
                                                            </div>
                                                            <div class="form__group col-lg-2">
                                                                <div class="custom-checkbox">
                                                                    <input type="checkbox" name="subscribeNewsletter" id="subscribeNewsletter" class="custom-checkbox__input">
                                                                    <label for="subscribeNewsletter" class="custom-checkbox__label">Remember me</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-12">
                                                                <a href="" class="forgot-pass">Forgot your password?</a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="user-actions__single user-actions__coupon">
                                            <h3><i class="fa fa-gift"></i> Have A Coupon? <span class="expand_action" data-attr="#coupon_info">Click Here To Enter Your Code.</span></h3>
                                            <div id="coupon_info" class="user-actions__form hide-in-default">
                                                <form action="#" class="form">
                                                    <div class="row">
                                                        <div class="col-12 col-md-6">
                                                            <div class="form__flex-group">
                                                                <input type="text" name="coupon" id="coupon" class="form__input mr--20">
                                                                <button type="submit" class="btn btn--small btn-style-3">Apply Coupon</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
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
					<?php	$sql=$link->rawQuery("select * from carttb c,producttb p where p.product_id = c.product_id and c.user_id=$sessionid");
							if($link->count > 0)
							{  ?>					
                            <div class="checkout-area pt--60">
							<form class="form" method="post" name="f1" onSubmit="return ck();" >
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="section-title">
                                            <h2>Billing Details</h2>
                                        </div>
                                        <div class="checkout-form">
                                            
                                                <div class="form-row mb--30">
                                                    <div class="form__group col-md-6">
                                                        <label for="name" class="form__label">First Name <span>*</span></label>
                                                        <input type="text" name="name" id="name" class="form__input" value=<?php echo $uname; ?>>
														<span id="s1" style="color:red;"></span>
                                                    </div>
                                                    <div class="form__group col-md-6">
                                                        <label for="email" class="form__label">Email Address <span>*</span></label>
                                                        <input type="email" name="email" id="email" class="form__input" value=<?php echo $uemail; ?>>
														<span id="s2" style="color:red;"></span>
												   </div>
                                                </div>
                                                <div class="form-row mb--30">
                                                    <div class="form__group col-md-6">
                                                        <label for="contact" class="form__label">Contact</label>
                                                        <input type="text" name="contact" id="contact" class="form__input" value=<?php echo $ucontact; ?>>
														<span id="s3" style="color:red;"></span>
                                                    </div>
                                                    <div class="form__group col-md-6">
                                                        <label for="zipcode" class="form__label">Zip Code <span>*</span></label>
                                                        <input type="text" name="zipcode" id="zipcode" class="form__input" value=<?php echo $upincode; ?>>
														<span id="s4" style="color:red;"></span>
                                                    </div>
                                                </div>
                                                <div class="form-row mb--30">
                                                    <div class="form__group col-md-6">
                                                        <label for="select_state" class="form__label">State </label>
                                                       <select name="select_state" id="select_state" class="form__input" onChange="fillbox('city_dep.php?eid='+this.value)">
															
															<option>---Select State---</option>
											<?php
															$selectstate = $link->rawQuery("select * from statetb");
															if($link->count > 0) {
																foreach($selectstate as $s1)
																{ ?>

																	<option value="<?php echo $s1['state_id']; ?>"
																	<?php 
																		if($s1["state_id"]==$ustate)
																			{
																				echo 'selected';
																			} 
																			?>
																	><?php echo $s1['state_name']; ?></option>
																		<?php
																}
															} 
															?>
											</select>
															<span id="s5" style="color:red;"></span>
                                                    </div>
													<div class="form__group col-md-6">
                                                        <label for="select_city" class="form__label">City </label>
                                                        <select name="select_city" id="select_city" class="form__input">
											
														<option>---Select City---</option>
														<?php
															$selectcity = $link->rawQuery("select * from citytb");
															if($link->count > 0) {
																foreach($selectcity as $s1)
																{ ?>

																	<option value="<?php echo $s1['city_id']; ?>"
																	<?php 
																		if($s1["city_id"]==$ucity)
																			{
																				echo 'selected';
																			} 
																			?>
																	><?php echo $s1['city_name']; ?></option>
																		<?php
																}
															} 
															?>	
														</select>
														<span id="s6" style="color:red;"></span>
                                                    </div>
													
                                                </div>
                                                
                                                <div class="form-row mb--30">
                                                    <div class="form__group col-12">
                                                        <label for="streetAddress" class="form__label">Street Address</label>
                                                        <input type="text" name="streetAddress" id="streetAddress" class="form__input" value=<?php echo $uadd; ?>>
														<span id="s7" style="color:red;"></span>
                                                    </div>
                                                </div>
                                                <div class="form-row mb--30">
                                                    <div class="form__group col-12">
                                                        <label for="apartment" class="form__label">Apartment, suite, unit etc. (optional)</label>
                                                        <input type="text" name="apartment" id="apartment" class="form__input">
														<span id="s8" style="color:red;"></span>
                                                    </div>
                                                </div>
												
												
                                                <div class="form-row">
                                                    <div class="form__group col-12">
                                                        <label for="orderNotes" class="form__label">Order Notes</label>
                                                        <textarea class="form__input form__input--textarea" id="orderNotes" name="orderNotes" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
														<span id="s9" style="color:red;"></span>
													</div>
                                                </div>
												
                                           
                                        </div>
                                    </div>
									
                                    <div class="col-lg-5 mt-md--30">
                                        <div class="section-title">
                                            <h2>Your Order</h2>
                                        </div>
                                        <div class="order-details mb--30">
                                            <table class="order-table">
										<?php 	$sql=$link->rawQuery("select * from carttb c,producttb p where p.product_id = c.product_id and c.user_id=$sessionid");
												if($link->count > 0)
												{ ?>
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Unit Price</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
												<?php
												
													$total=0;
													foreach($sql as $s)
													{
														
														$q=$s['qty'];
														$p=$s['product_price'];
														$stotal=$q*$p;
														$total=$stotal+$total;
												?>
                                                <tbody>
                                                    <tr>
													<input type="hidden" name="qty[]" value="<?php echo $s['qty'] ;?>">
													<td><?php echo $s['product_name'];?><strong>   x   <?php echo $s['qty'];?></strong></td>
                                                        <td><?php echo $s['product_price'];?></td>
                                                        <td><?php echo $stotal;?></td>
                                                    </tr>
                                                </tbody>
												<?php
													}
												?>
                                                <tfoot>
                                                    <tr class="cart-subtotal">
                                                        <td>Cart Subtotal</td>
                                                        <td>-</td>
                                                        <td><?php echo $total;?></td>
                                                    </tr>
                                                    <tr class="order-total">
                                                        <td>Order Total</td>
                                                        <td>-</td>
                                                        <td><?php echo $total;?></td>
                                                    </tr>
                                                </tfoot>
												<?php
												}
												else
												{
													echo '<h4>No Products Available to checkout</h4>';?>
													<a href="index.php">continue with shopping</a>
										<?php	}?>
                                            </table>
                                        </div>
                                        <div class="checkout-payment">
                                                <div class="form-row">
                                                    <div class="form__group col-12">
                                                        <div class="custom-radio">
                                                            <input type="radio" name="paymentMethods" id="cashdelivery" class="custom-radio__input" value="2013">
                                                            <label for="cashdelivery" class="custom-radio__label"> <span></span> Cash on Delivery</label>
                                                        </div>
                                                        <p class="checkout-payment__info">Pay with cash upon delivery.</p>
															
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form__group col-12">
                                                        <div class="custom-radio custom-radio--2">
                                                            <input type="radio" name="paymentMethods" id="paypal" class="custom-radio__input" value="2014">
                                                            <label for="paypal" class="custom-radio__label"> <span></span> PayPal Express Checkout</label>
                                                        </div>
                                                        <p class="checkout-payment__info">Pay via PayPal. You can pay with your credit card if you don’t have a PayPal account.</p>
													<span id="s10" style="color:red;"></span>
													</div>
													
                                                </div>
												
                                                <!--<div class="form-row">
                                                    <div class="form__group col-12">
                                                        <div class="custom-checkbox">
                                                            <input type="checkbox" name="termsandconditions" id="termsandconditions" class="custom-checkbox__input" value="termsandconditions">
                                                            <label for="termsandconditions" class="custom-checkbox__label">I agree to the <a href="">terms of service</a> and will adhere to them unconditionally.</label>
                                                        <span id="s11" style="color:red;"></span>
														</div>
														
                                                    </div>
                                                </div>-->
                                                <div class="form-row">
                                                    <div class="form__group col-12">
                                                        <input type="submit" class="btn btn-style-3 btn--fullwidth" name="PlaceOrder" value="Place Order" data-toggle="modal" data-target="#exampleModal">
													</div>
                                                </div>
                                           
                                        </div>
                                    </div>
                                </div>
							</form>	
                            </div>
							<?php
							}
							else
							{ ?>
							<span style="color:red;"><h3>Please Select Products to checkout</h3><span style="color:red;"><br><br><br><br>
						<a href="index.php"><input type="submit" class="btn btn-style-3 btn" name="shopping" value="Continue with shopping"></a>
					<?php	}
							?>
<?php
if(@$_POST['PlaceOrder'])
{
	$cid=$_GET['cid'];
	$st='Confirm';
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$zipcode = $_POST['zipcode'];
	$state = $_POST['select_state'];
	$city = $_POST['select_city'];
	$street = $_POST['streetAddress'];
	$apt = $_POST['apartment'];
	$note = $_POST['orderNotes'];
	$payment = $_POST['paymentMethods']; 
	
	if($_POST['paymentMethods'] == '2013')
	{
		$is_paid = 0;
	}
	if($_POST['paymentMethods'] == '2014')
	{
		$is_paid = 1;
	}
	
	$ii=$link->insert("ordertb",array("user_id"=>$sessionid,"order_status"=>$st,"payment_type_id"=>$payment,"order_amount"=>$total,"cart_id"=>$cid,"is_paid"=>$is_paid));
	if($ii)
	{
		$info = $link->insert("billtb",array("user_id"=>$sessionid,"user_name"=>$name,"bill_email"=>$email,"bill_contact"=>$contact,"bill_zip"=>$zipcode,"state_id"=>$state,"city_id"=>$city,"bill_street"=>$street,"bill_appartment"=>$apt,"order_notes"=>$note,"order_id"=>$ii));	
		if($info)
		{
			$sql=$link->rawQuery("select * from carttb c,producttb p where c.product_id=p.product_id and c.user_id=$sessionid");
			$c=$link->count;
			foreach($sql as $sq)
			{
				$prid=$sq['product_id'];
				$price=$sq['product_price'];
				$qq=$sq['qty'];
				
				$iii=$link->insert("order_producttb",array("order_id"=>$ii,"product_id"=>$prid,"qty"=>$qq,"price"=>$price));
				header("location:order_confirm.php");
			}
			if($iii)
			{
				$link->where("user_id",$sessionid);
				$d=$link->delete("carttb");
				if($_POST['paymentMethods'] == "2014")
				{
					header("location:paypal.php?total=".$total);
				}
				if($_POST['paymentMethods'] == "2013")
				{
					header("location:order_confirm.php");
				}
			}
		}
	}
}				
?>							
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
										<a href="age_sort.php?logo=<?php echo $s['brand_id']; ?>" data-toggle="modal" data-target="#productModal" class="quick-view"> <i class="fa fa-eye"></i> </a>
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
    

    <!-- Popper JS -->
    <script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    
	<script type="text/javascript">
		 $('#select_state').on('change',function(){
		   var stateid=$(this).val();
		 // alert(stateid);
		   if(stateid)
		   {   
		// var xhttp=new XMLHttpRequest();
		// xhttp.onreadystatechange=function()
		// {
			// if(this.readyState==4 || this.status==200)
			// {
				// document.getElementById("select_city").innerHTML=this.responseText;
			// }
		// };
		// xhttp.open("GET",val,true);
		// xhttp.send();
		$.ajax({
				   type:'POST',
				   url:'city_dep1.php',
				   data:'state='+stateid,
				   success:function(html){
				   $('#select_city').html(html);
				   }
			   });
		   }
		   else
		   {
			  $('#select_state').html('<option value="">---Select---</option>'); 
		   }
	});
</script>
</body>

</html>