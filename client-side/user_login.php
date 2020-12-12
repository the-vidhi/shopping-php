<?php
ob_start();
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="this is a demo meta description">
    <meta name="keywords" content="this is a demo meta keywords">
    <title>Rattle n Roll | Login</title>

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
            <h2 class="page-title color--white">Login</h2>
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
                                        <label for="login_email" class="col-md-3 col-12 form__label text-md-right">Email</label>
                                        <div class="col-md-7 col-lg-6 col-12">
                                            <input type="email" name="login_email" id="login_email" class="form__input"value="<?php if(isset($_COOKIE['usercookie'])){echo $_COOKIE['usercookie'];} ?>">
											<span id="s1" style="color:red;" ></span>
                                        </div>
                                    </div>
                                    <div class="form__group row align-items-center">
                                        <label for="login_password" class="col-md-3 col-12 form__label text-md-right">Password</label>
                                        <div class="col-md-7 col-lg-6 col-12">
                                            <input type="password" name="login_password" id="login_password" class="form__input">
                                            <button class="pass-show-btn" type="button">Show</button>
											<span id="s2" style="color:red;"></span>
                                        </div>
										
                                    </div>
									<div class="form__group row align-items-center">
										<div class="custom-checkbox" style="padding-left: 160px;" >
											<input type="checkbox" name="remember_me" id="remember_me" class="custom-checkbox__input" checked>
											<label for="remember_me" class="custom-checkbox__label" >Remember me</label>
										</div>
                                    </div>
									<div class="form__group row align-items-center">
										
									</div>
                                    <div class="form__group row align-items-center">
                                        <div class="col-lg-6 col-12 offset-lg-3 text-center">
										<?php
											if(isset($_GET['err']) && $_GET['err'] == 1)
											{
												echo "<span style='color:red; font-size:15px;'><b>Email & Password Are Not Match!!</b></span>";
											}
											if(isset($_GET['err']) && $_GET['err'] == 2)
											{
												echo "<span style='color:red; font-size:15px;'><b>You are not allowed to Logged In!!</b></span>";
											}
										?>
                                            <br><br><a href="user_forgot_password.php" class="forgot-pass">Forgot your password?</a>
											 
                                            <button type="submit" name="submit" class="btn btn--small btn-style-3">Sign in</button>
                                        </div>
                                    </div>
									
                                </form>
                                <a class="create-account-link" href="user_reg.php">No account? Create one here</a>
                            </div>
                        </div>
                    </div>   
                </div>   
            </div>
        </div>

		<?php
		if(isset($_POST['submit']))
		{
			$email = $_POST['login_email'];
			$password = $_POST['login_password'];
			$hash_pwd=hash('sha512',$password);
			

				$s = $link->rawQueryOne("select * from user_reg where user_email = ? and user_password = ?",array($email,$hash_pwd));
				if($link->count > 0)
				{
					if($s['is_active']==1)
					{
						session_start();
						$_SESSION['usersessionid'] = $s['user_id'];
						$_SESSION['usersessionname'] = $s['user_name'];
						
						$user_email=$s['user_email'];
								
						header('location:index.php');
					}
					else
					{
						header('location:user_login.php?err=2');
					}
				}
				else
				{
					if(!$s)
					{
						header('location:user_login.php?err=1');
					}
				}

			if(!empty($_POST['remember_me']))
			{
				setcookie("usercookie",$user_email,time() + 24 * 60 * 60);
			}
			else
			{
				setcookie("usercookie","");
			}
		}
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

document.getElementById("s1").innerHTML = "";
document.getElementById("s2").innerHTML = "";
var e = document.f1.login_email.value;
var em = /^([a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$)/;

if(e == 0)
{
     document.getElementById("s1").innerHTML = "Enter Email";
	 login_email.focus();
	 s = false;
}
else if(!em.test(e))
{
    document.getElementById("s1").innerHTML = "Enter Valid Email";
	login_email.focus();
	 s = false;
}

var p = document.f1.login_password.value;

if(p == 0)
{
     document.getElementById("s2").innerHTML = "Enter Password";
	 
	 s = false;
}
return s;
}

</script>