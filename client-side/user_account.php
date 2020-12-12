<?php
ob_start();
include 'connection.php';
session_start();
$sessionid=$_SESSION['usersessionid'];
if($_SESSION['usersessionid']=="")
{
	header("location:user_login.php");
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
    <title>Rattle n Roll | User Account</title>

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
	
	<script type="text/javascript">
		function fillbox(val) {
		var xhttp=new XMLHttpRequest();
		xhttp.onreadystatechange=function()
		{
			if(this.readyState==4 || this.status==200)
			{
				document.getElementById("select_city").innerHTML=this.responseText;
			}
		};
		xhttp.open("GET",val,true);
		xhttp.send();
	}
	</script>
	<script>
	function funValidation()
	{
		var s = true;
		document.getElementById("s1").innerHTML = "";
		document.getElementById("s2").innerHTML = "";
		document.getElementById("s3").innerHTML = "";
		
		document.getElementById("s6").innerHTML = "";
		document.getElementById("s7").innerHTML = "";
		document.getElementById("s8").innerHTML = "";
		document.getElementById("s9").innerHTML = "";
				
		var n=document.f11.name.value;
		var c=document.f11.contact.value;
		var e=document.f11.email.value;
		
		var a=document.f11.address.value;
		var pn=document.f11.pincode.value;
		var st=document.f11.select_state.value;
		var ct=document.f11.select_city.value;
		
		
		var name_val_string=/^[A-Za-z]{3,15}$/;
		if(n==0)
		{
			document.getElementById("s1").innerHTML="Enter Name";
			s=false;
		}
		else if(!name_val_string.test(n))
		{
			document.getElementById("s1").innerHTML="Length Must Be Between 3 to 15";
			s=false;
		}
		
		var contact_val_string=/^((\+){1}91){1}[1-9]{1}[0-9]{9}$/;
		if(c==0)
		{
			document.getElementById("s2").innerHTML="Enter Contact";
			s=false;
		}
		else if(!contact_val_string.test(c))
		{
			document.getElementById("s2").innerHTML="Formate Must Be Match [+910000000000]";
			s=false;
		}
		
		var email_val_string=/^([a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$)/;
		if(e=="")
		{
			document.getElementById("s3").innerHTML="Enter Email";
			s=false;
		}
		else if(!email_val_string.test(e))
		{
			document.getElementById("s3").innerHTML="Invalid email";
			s=false;
		}
		
		var address_val_string=/^[a-zA-Z0-9\s\,\''\-]{10,200}$/;
		if(a==0)
		{
			document.getElementById("s6").innerHTML="Enter Address";
			s=false;
		}
		else if(!address_val_string.test(a))
		{
			document.getElementById("s6").innerHTML="Length Must Be Between 10 to 200";
			s=false;
		}
		
		var pin_val_string=/^[1-9][0-9]{5}$/;
		if(pn==0)
		{
			document.getElementById("s7").innerHTML="Enter Pincode";
			s=false;
		}
		else if(!pin_val_string.test(pn))
		{
			document.getElementById("s7").innerHTML="Only Numeric of six Digits";
		}
		
		if(st == "---Select State---")
		{
			document.getElementById("s8").innerHTML="select state";
			s=false;
		}
		
		if(ct == "---Select City---")
		{
			document.getElementById("s9").innerHTML="select city";
			s=false;
		}
	
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

        <?php include 'include/header.php'; ?>	
        
        <!-- Header area End -->

        <!-- Page Header Start -->
        <section class="page-header">
            <h2 class="page-title color--white">My Account</h2>
        </section>
        <!-- Page Header End -->

        <!-- Breadcumb area Start -->
        <div class="breadcumb-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="breadcumb">
                            <li class="breadcumb__list"><a class="breadcumb__link" href="index.php">Home</a></li>
                            <li class="breadcumb__list"><a class="breadcumb__link current" href="">My Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcumb area End -->

        <!-- Main Content wrapper start -->

        <section class="main-content-wrapper">
            <div class="page-inner section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            
                            <div class="user-dashboard-tab">
                                <div class="row">
                                    <div class="col-lg-3 mb-sm--40">
                                        <div class="user-dashboard-tab__head nav flex-column" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active" data-toggle="pill" role="tab" href="#dashboard" aria-controls="dashboard" aria-selected="true">Dashboard</a>
                                            <a class="nav-link" data-toggle="pill" role="tab" href="#orders" aria-controls="orders" aria-selected="true">Orders</a>
                                            <!--<a class="nav-link" data-toggle="pill" role="tab" href="#downloads" aria-controls="downloads" aria-selected="true">Downloads</a>-->
                                            <!--<a class="nav-link" data-toggle="pill" role="tab" href="#addresses" aria-controls="addresses" aria-selected="true">Addresses</a>-->
                                            <a class="nav-link" data-toggle="pill" role="tab" href="#accountdetails" aria-controls="accountdetails" aria-selected="true">Account Details</a>
                                            <a class="nav-link" data-toggle="pill" role="tab" href="#addresses" aria-controls="addresses" aria-selected="true">Logout</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="user-dashboard-tab__content tab-content">
                                            <div class="tab-pane fade show active" id="dashboard">
                                                <h3>Dashboard</h3>
                                                <p>From your account dashboard. you can easily check & view your <a href="">recent orders</a>, manage your <a href="">shipping and billing addresses</a> and <a href="">edit your password and account details</a>.</p>
                                            </div>
                                            <div class="tab-pane fade" id="orders">
                                                <h3>Orders</h3>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Order ID</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Total</th>
                                                            <th>Payment type</th>
                                                            <th>Bill</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
													<?php
													$sql=$link->rawQuery("select * from ordertb o,payment_typetb p where o.payment_type_id = p.payment_type_id and user_id=$sessionid");
													if($link->count > 0)
													{
														foreach($sql as $s)
														{
													?>
                                                        <tr>
                                                            <td><?php echo $s['order_id'];?></td>
                                                            <td><?php echo $s['order_date'];?></td>
                                                            <td><?php echo $s['order_status'];?></td>
                                                            <td><?php echo $s['order_amount'];?></td>
                                                            <td><?php echo $s['payment_type'];?></td>
                                                            
                                                            <td><a href="order_details.php?oid=<?php echo $s['order_id']; ?>" class="btn btn--small btn-style-3">View</a></td>
                                                        </tr>
														<?php
														}
													}?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="downloads">
                                                <h3>Downloads</h3>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Product</th>
                                                            <th>Downloads</th>
                                                            <th>Expires</th>
                                                            <th>Download</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Volga - Ecommerce Bootstrap Template</td>
                                                            <td>August 10, 2018</td>
                                                            <td>Never</td>
                                                            <td><a href="" class="btn btn--small btn-style-3">Download File</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Volga - Ecommerce Bootstrap Template</td>
                                                            <td>September 19, 2018</td>
                                                            <td>Never</td>
                                                            <td><a href="" class="btn btn--small btn-style-3">Download File</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="addresses">
                                                
												<p></p>
                                                <p></p>
                                                <h4>Are you sure you want to logout ?</h4><br><br><br>
                                                <a href="user_logout.php" class="btn btn--small btn-style-3 mb--20">Logout</a>
                                                
                                            </div>
											<?php
											$s=$link->rawQueryOne("select * from user_reg where user_id=$sessionid");
											if($link->count > 0)
											{
												$name=$s['user_name'];
												$contact=$s['user_contact'];
												$email=$s['user_email'];
												$address=$s['user_address'];
												$pincode=$s['pincode'];
												$state=$s['state_id'];
												$city=$s['city_id'];
												$img = $s['user_image'];
											}
											
											?>
                                            <div class="tab-pane fade" id="accountdetails">
                                                <h3>Account Details</h3>
												<div class="row">
												<div class="col-lg-10">
												<form class="form" method="post" name="f11" enctype="multipart/form-data" onSubmit="return funValidation();">
													<div class="form__group row align-items-center">
														<label for="name" class="col-md-3 col-12 form__label text-md-right">Name</label>
														<div class="col-md-7 col-lg-6 col-12">
															<input type="text" name="name" id="name" class="form__input" value="<?php echo $name;?>">
															<span id="s1" style="color:red;"></span>
														</div>
													</div>
													<div class="form__group row align-items-center">
														<label for="contact" class="col-md-3 col-12 form__label text-md-right">Contact</label>
														<div class="col-md-7 col-lg-6 col-12">
															<input type="text" name="contact" id="contact" class="form__input" value="<?php echo $contact;?>">
															<span id="s2" style="color:red;"></span>
														</div>
													</div>
													<div class="form__group row align-items-center">
														<label for="email" class="col-md-3 col-12 form__label text-md-right">Email</label>
														<div class="col-md-7 col-lg-6 col-12">
															<input type="email" name="email" id="email" class="form__input" value="<?php echo $email;?>">
															<span id="s3" style="color:red;"></span>
														</div>
													</div>
													<div class="form__group row align-items-center">
														<label for="address" class="col-md-3 col-12 form__label text-md-right">Address</label>
														<div class="col-md-7 col-lg-6 col-12">
															<input type="text" name="address" id="address" class="form__input" value="<?php echo $address;?>">
															<span id="s6" style="color:red;"></span>
														</div>
													</div>
													<div class="form__group row align-items-center">
														<label for="pincode" class="col-md-3 col-12 form__label text-md-right">Pincode</label>
														<div class="col-md-7 col-lg-6 col-12">
															<input type="text" name="pincode" id="pincode" class="form__input" value="<?php echo $pincode;?>">
															<span id="s7" style="color:red;"></span>
														</div>
													</div>
													<div class="form__group row align-items-center">
														<label for="select_state" class="col-md-3 col-12 form__label text-md-right">State</label>
														<div class="col-md-7 col-lg-6 col-12">
															<select name="select_state" id="select_state" class="form__input" onChange="fillbox('city_dep.php?eid='+this.value)">
															
															<option>---Select State---</option>
											<?php
											$selectstate = $link->rawQuery("select * from statetb");
											if($link->count > 0) {
												foreach($selectstate as $s1)
												{ ?>

													<option value="<?php echo $s1['state_id']; ?>" 
													<?php 
													if($s1["state_id"]==$state)
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
											<span id="s8" style="color:red;"></span>
														</div>
													</div>
													<div class="form__group row align-items-center">
														<label for="select_city" class="col-md-3 col-12 form__label text-md-right">City</label>
														<div class="col-md-7 col-lg-6 col-12">
															<select name="select_city" id="select_city" class="form__input">
															
															<option>---Select City---</option>
															<?php
															$c = $link->rawQuery("select * from citytb");
															foreach ($c as $c1) {
															?>
															<option value="<?php echo $c1["city_id"]; ?>" <?php 
															if($c1["city_id"]==$city)
															{
																echo 'selected';
															} 
															?> >
															<?php echo $c1["city_name"]; ?>
															</option>
															<?php
																}
															?>
															</select>
															<span id="s9" style="color:red;"></span>
														</div>
													</div>
													
													<div class="form__group row align-items-center">
														<label for="image" class="col-md-3 col-12 form__label text-md-right">Profile Picture</label>
														<div class="col-md-7 col-lg-6 col-12">
															<input type="file" name="image" id="image" class="form__input">
															<span id="s10" style="color:red;"></span>
														</div>
													</div>
																   
													<div class="form__group row p-0 mb-20">
														<div class="col-12 text-right">
														<!--<input type="submit" name="btn-submit" value="register">-->
														  <button type="submit" class="btn btn-small btn-style-3" name="btn-submit">Save Changes</button>
														</div>
													</div>    
                                                    
                                                </form>
												</div>
												<div class="col-lg-2">
												<div class="myimg">
													
														<img src="<?php echo $img;?>"  alt="Blog Thumb" height="100" width="200" >
													
													
												</div>
												</div>
												
												<?php
if(isset($_POST['btn-submit']))
{
	$uname=$_POST['name'];
	$con=$_POST['contact'];
	$mail=$_POST['email'];
	$add=$_POST['address'];
	$pin=$_POST['pincode'];
	$st=$_POST['select_state'];
	$ct=$_POST['select_city'];
	
	$link->where("user_id",$sessionid);
	$i=$link->update("user_reg",array('user_name'=>$uname,'user_contact'=>$con,'user_email'=>$mail,'user_address'=>$add,'pincode'=>$pin,'state_id'=>$st,'city_id'=>$ct));
	
	if($i)
	{	
		$img = $_FILES['image']['name'];
		$ext = pathinfo($img,PATHINFO_EXTENSION);
		$image = "user_".$sessionid.".".$ext;
		if(move_uploaded_file($_FILES['image']['tmp_name'],"../user_images/".$image))
		{
			$link->where("user_id",$sessionid);
			$link->update("user_reg",array("user_image"=>"../user_images/".$image));
			//header('location:user_login.php');
		}
		
		$s = $link->rawQueryOne("select * from user_reg where user_name = ? ",array($name));
		if($link->count > 0)
		{
			/* session_start();
			$_SESSION['vendorsessionid'] = $s['vendor_id']; */
			header('location:index.php');
		} 
	}
}
?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>    
            </div>
        </section>

        <!-- Main Content wrapper end -->


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
        <?php include 'include/footer.php';?>
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
