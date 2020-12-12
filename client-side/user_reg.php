<?php 
ob_start();
include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="this is a demo meta description">
    <meta name="keywords" content="this is a demo meta keywords">
    <title>Rattle n Roll | User Reset Password</title>

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
	var contact = document.f1.contact.value;
	var con_formate=/^((\+){1}91){1}[1-9]{1}[0-9]{9}$/;
	if(contact == 0)
	{
		document.getElementById("s2").innerHTML = "Enter Contact Number";
		s = false;
	}
	
	else if(!con_formate.test(contact))
	{
		document.getElementById("s2").innerHTML = "Formate Is Not Match";
		s = false;
	}
	
	
	
	
	document.getElementById("s3").innerHTML = "";
	var n = document.f1.email.value;
	var ns=/^([a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$)/;
	if(n == 0)
	{
		document.getElementById("s3").innerHTML = "Enter Email";
		s = false;
	}
	else if(!ns.test(n))
	{
		document.getElementById("s3").innerHTML = "Enter Valid Email";
		s = false;
	}
	
	document.getElementById("s4").innerHTML = "";
	var p = document.f1.password.value;
	var pass_formate=/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
	if(p == 0)
	{
		document.getElementById("s4").innerHTML = "Enter Password";
		s = false;
	}
	else if(!pass_formate.test(p))
	{
		document.getElementById("s4").innerHTML = "The string must contain at least 1 lowercase,1 uppercase, 1 numeric,one special character alphabetical character and eight characters or longer";
		s = false;
	}
	
	document.getElementById("s5").innerHTML = "";
	var cp = document.f1.cpassword.value;
	
	if(cp!=p)
		{
			document.getElementById("s5").innerHTML="Password Must Be match with above password";
			s=false;
		}
		
	
	
	document.getElementById("s6").innerHTML = "";
	var a = document.f1.address.value;
	var add_formate =/^[a-zA-Z0-9\s\,\''\-]{10,200}$/;
	if(a == 0)
	{
		document.getElementById("s6").innerHTML = "Enter Address";
		s = false;
	}
	else if(!add_formate.test(a))
	{
		document.getElementById("s6").innerHTML = "Length Must Be Between 10 to 200";
		s = false;
	}
	
	document.getElementById("s7").innerHTML = "";
	var p = document.f1.pincode.value;
	var pin_formate=/^[1-9][0-9]{5}$/;
	if(p == 0)
	{
		document.getElementById("s7").innerHTML = "Enter Pincode";
		s = false;
	}
	else if(!pin_formate.test(p))
	{
		document.getElementById("s7").innerHTML = "Formate Is Not Match";
		s = false;
	}
	
	document.getElementById("s8").innerHTML = "";
	var st = document.f1.select_state.value;
	
	if(st == "---Select State---")
	{
		document.getElementById("s8").innerHTML = "Enter State";
		s = false;
	}
	document.getElementById("s9").innerHTML = "";
	var c = document.f1.select_city.value;
	
	if(c == "---Select City---")
	{
		document.getElementById("s9").innerHTML = "Enter State";
		s = false;
	}
	document.getElementById("s10").innerHTML = "";
	var img = document.f1.image.value;
	
	if(img == "")
		{
			document.getElementById("s10").innerHTML="Select Any Profile Image";
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
            <h2 class="page-title color--white">Register</h2>
        </section>
        <!-- Page Header End -->

        <!-- Breadcumb area Start -->
        <div class="breadcumb-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="breadcumb">
                            <li class="breadcumb__list"><a class="breadcumb__link" href="index.php">Home</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcumb area End -->

        <!-- Main content wrapper start -->

        <div class="main-content-wrapper">
            <div class="page-inner section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h2>Create an account</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-7 col-md-11">
                            <div class="form-box">
                                <span class="mb--20">Already have an account? <a href="user_login.php">Log in instead!</a></span>
                                <form class="form" method="post" enctype="multipart/form-data" name="f1" onSubmit="return ck();" >
                                   
                                    <div class="form__group row align-items-center">
                                        <label for="name" class="col-md-3 col-12 form__label text-md-right">Name</label>
                                        <div class="col-md-7 col-lg-6 col-12">
                                            <input type="text" name="name" id="name" class="form__input" placeholder="Enter User Name...">
											<span id="s1" style="color:red;"></span>
                                        </div>
                                    </div>
                                    <div class="form__group row align-items-center">
                                        <label for="contact" class="col-md-3 col-12 form__label text-md-right">Contact</label>
                                        <div class="col-md-7 col-lg-6 col-12">
                                            <input type="text" name="contact" id="contact" class="form__input" placeholder="+910000000000">
											<span id="s2" style="color:red;"></span>
                                        </div>
                                    </div>
                                    <div class="form__group row align-items-center">
                                        <label for="email" class="col-md-3 col-12 form__label text-md-right">Email</label>
                                        <div class="col-md-7 col-lg-6 col-12">
                                            <input type="email" name="email" id="email" class="form__input" placeholder="abc@gmail.com">
											<span id="s3" style="color:red;"></span>
                                        </div>
                                    </div>
                                    <div class="form__group row align-items-center">
                                        <label for="password" class="col-md-3 col-12 form__label text-md-right">Password</label>
                                        <div class="col-md-7 col-lg-6 col-12">
                                            <input type="password" name="password" id="password" class="form__input" placeholder="Enter Password...">
                                            <button class="pass-show-btn" type="button">Show</button>
											<span id="s4" style="color:red;"></span>
                                        </div>
                                    </div>
									<div class="form__group row align-items-center">
                                        <label for="cpassword" class="col-md-3 col-12 form__label text-md-right">Confirm Password</label>
                                        <div class="col-md-7 col-lg-6 col-12">
                                            <input type="password" name="cpassword" id="cpassword" class="form__input" placeholder="Re-Type Password...">
                                            <button class="pass-show-btn" type="button">Show</button>
											<span id="s5" style="color:red;"></span>
                                        </div>
                                    </div>
                                    <div class="form__group row align-items-center">
                                        <label for="address" class="col-md-3 col-12 form__label text-md-right">Address</label>
                                        <div class="col-md-7 col-lg-6 col-12">
                                            <input type="text" name="address" id="address" class="form__input" placeholder="Enter Address...">
											<span id="s6" style="color:red;"></span>
                                        </div>
                                    </div>
									<div class="form__group row align-items-center">
                                        <label for="pincode" class="col-md-3 col-12 form__label text-md-right">Pincode</label>
                                        <div class="col-md-7 col-lg-6 col-12">
                                            <input type="text" name="pincode" id="pincode" class="form__input" placeholder="000000">
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

									<option value="<?php echo $s1['state_id']; ?>"><?php echo $s1['state_name']; ?></option>
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
                                          <input type="submit" class="btn btn-small btn-style-3" name="btn-submit" value="Register">
										
									   </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>  
                </div>    
            </div>
        </div>

        <!-- Main content wrapper end -->


        <!-- Clients area Start -->
        
        <!-- Clients area End -->
        

        <!-- Footer area Start -->
         <?php include 'include/footer.php'; ?>
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
<?php
if(isset($_POST['btn-submit']))
{
	$name = $_POST['name'];
	$contact=$_POST['contact'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$address=$_POST['address'];
	$pincode=$_POST['pincode'];
	$state=$_POST['select_state'];
	$city=$_POST['select_city'];
	
	$hash_pwd=hash('sha512',$password);
	
	$i = $link->insert("user_reg",array("user_name"=>$name,"user_contact"=>$contact,"user_email"=>$email,"user_password"=>$hash_pwd,"user_address"=>$address,"pincode"=>$pincode,"city_id"=>$city,"state_id"=>$state,"is_active"=>1));
	if($i)
	{	
		$img = $_FILES['image']['name'];
		$ext = pathinfo($img,PATHINFO_EXTENSION);
		$image = "user_".$i.".".$ext;
		if(move_uploaded_file($_FILES['image']['tmp_name'],"../user_images/".$image))
		{
			$link->where("user_id",$i);
			$link->update("user_reg",array("user_image"=>"../user_images/".$image));
			header('location:user_login.php');
		}
		
		$s = $link->rawQueryOne("select * from user_reg where user_name = ? ",array($name));
		if($link->count > 0)
		{
			/*session_start();
			$_SESSION['vendorsessionid'] = $s['vendor_id'];*/
			header('location:user_login.php');
		} 
	}
}
?>