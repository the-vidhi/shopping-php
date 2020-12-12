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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="this is a demo meta description">
    <meta name="keywords" content="this is a demo meta keywords">
    <title>Rattle n Roll | Password Reset</title>

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

      <?php include 'include/header.php' ; ?>
        
        <!-- Header area End -->

        <!-- Page Header Start -->
        <section class="page-header">
            <h2 class="page-title color--white">Reset Password</h2>
        </section>
        <!-- Page Header End -->

        <!-- Main content wrapper start -->

        <div class="main-content-wrapper">
            <div class="page-inner section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h2>Log in to your account</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-10">
                            <div class="form-box">
                                <form class="form"  method="post" name="f1" onSubmit="return ck();" >
                                    <div class="form__group row align-items-center">
                                        <label for="cpassword" class="col-md-3 col-12 form__label text-md-right">Current Password</label>
                                        <div class="col-md-7 col-lg-6 col-12">
                                            <input type="password" name="cpassword" id="cpassword" class="form__input">
											<button class="pass-show-btn" type="button">Show</button>
											<span id="err_cpassword" style="color:red;" ></span>
                                        </div>
                                    </div>
                                    <div class="form__group row align-items-center">
                                        <label for="npassword" class="col-md-3 col-12 form__label text-md-right">New Password</label>
                                        <div class="col-md-7 col-lg-6 col-12">
                                            <input type="password" name="npassword" id="npassword" class="form__input">
                                            <button class="pass-show-btn" type="button">Show</button>
											<span id="err_npassword" style="color:red;"></span>
                                        </div>
										
                                    </div>
									<div class="form__group row align-items-center">
                                        <label for="rpassword" class="col-md-3 col-12 form__label text-md-right">confirm password</label>
                                        <div class="col-md-7 col-lg-6 col-12">
                                            <input type="password" name="rpassword" id="rpassword" class="form__input">
                                            <button class="pass-show-btn" type="button">Show</button>
											<span id="err_rpassword" style="color:red;"></span>
                                        </div>
										
                                    </div>
									
									<!--<div class="col-12 col-md-7 col-xl-6 offset-md-6">
                                            <div class="custom-checkbox">
                                                <input type="checkbox" name="receiveOffes" id="receiveOffes" class="custom-checkbox__input">
                                                <label for="receiveOffes" class="custom-checkbox__label">Remember Me</label>
                                            </div>
                                    </div>-->
                                    <div class="form__group row align-items-center">
                                        <div class="col-lg-6 col-12 offset-lg-3 text-center">
                                            <!--<a href="" class="forgot-pass">Forgot your password?</a>-->
											 <?php
												if(isset($_GET['err']) && $_GET['err'] == 1)
												{
													echo "<span style='color:red;'>Email & Password Are Not Match!!</span>";
												}
												?>
                                            <input type="submit" name="submit" class="btn btn--small btn-style-3" value="Reset password">
											<span id="err_all" style="color:red; float:left;">
											<?php 
											if(isset($error))
											{
												echo $error;
											}

											if(@$_POST['submit'])
											{
												$cpassword = $_POST['cpassword'];
												$npassword = $_POST['npassword'];
												$rpassword = $_POST['rpassword'];
												
												$hash_pwd=hash('sha512',$npassword);
												$hash_cur_pwd=hash('sha512',$cpassword);

												$sessionid=$_SESSION['usersessionid'];
												$pass = $link->rawQueryOne("select user_password from user_reg where user_id = ?",Array($sessionid));
												$old_password = $pass['user_password'];
												if($npassword == $rpassword)
												{
													if(strlen($npassword)<=6 || strlen($npassword)>12)
													{
														echo "Password must be 6 to 12 character long";
													}
													else
													{
														if($old_password == $hash_cur_pwd)
														{
															$link->where("user_id",$sessionid);
															$link->update("user_reg",Array("user_password"=>$hash_pwd));
															echo "Password is successfully changed.";
															header('location:index.php');
														}
														else
														{
															//header('location:indexcc.php');
															echo "<br><b>Your old password is incorrect!</b>";
														}
													}
												}
												else
												{
													echo "New password and repeat password must be same!";
												}
											}
												 ?>
                                        </div>
                                    </div>
									
                                </form>
                                
                            </div>
                        </div>
                    </div>   
                </div>   
            </div>
        </div>

		
	?>
		
        <!-- Main content wrapper end -->


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
<script>

function ck()
{
	var s = true;
	
	document.getElementById("err_cpassword").innerHTML = "";
	document.getElementById("err_npassword").innerHTML = "";
	document.getElementById("err_rpassword").innerHTML = "";
	var c = document.f1.cpassword.value;
	var n = document.f1.npassword.value;
	var r = document.f1.rpassword.value;
	
	if(c == "")
	{
		document.getElementById("err_cpassword").innerHTML = "Enter Current Password";
		cpassword.focus();
		s = false;
	}
	var pass_val_string=/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
	if(n == "")
	{
		document.getElementById("err_npassword").innerHTML="Enter New Password";
		s=false;
	}
	else if(!pass_val_string.test(n))
	{
		document.getElementById("err_npassword").innerHTML="The string must contain at least 1 lowercase,1 uppercase, 1 numeric,one special character alphabetical character and eight characters or longer";
		s=false;
	}
	
	if(n!=r)
	{
		document.getElementById("err_rpassword").innerHTML="Password Must Be match with above password";
		s=false;
	}
	return s;
}
</script>