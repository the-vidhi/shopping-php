<?php 
ob_start();
include 'connection.php';
?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Rattle n Roll | Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/icon.jpeg" >

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
	
	<script>

	function ck()
	{

	var s = true;

	document.getElementById("s1").innerHTML = "";
	document.getElementById("s2").innerHTML = "";
	var e = document.f1.username.value;
	var em = /^([a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$)/;

	if(e == 0)
	{
		 document.getElementById("s1").innerHTML = "Enter Email";
		 username.focus();
		 s = false;
	}
	else if(!em.test(e))
	{
		document.getElementById("s1").innerHTML = "Enter Valid Email";
		username.focus();
		 s = false;
	}

	var p = document.f1.userpassword.value;
	if(p == 0)
	{
		 document.getElementById("s2").innerHTML = "Enter Password";
		 //admin_password.focus();
		 s = false;
	}
	return s;
	}

	</script>
		
    </head>

    <body>
        <div class="home-btn d-none d-sm-block">
            <a href="" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div>
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Welcome Back !</h5>
                                            <p>Sign in to continue to Rattle n Roll.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div>
                                    
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="assets/images/icon.jpeg" alt="" class="rounded-circle" height="65">
                                            </span>
                                        </div>
                                  
                                </div>
                                <div class="p-2">
                                    <form class="form-horizontal needs-validation" name="f1" method="post" onSubmit="return ck();" novalidate>
        
                                        <div class="form-group">
                                            <label for="username">Email</label>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter email" required value="<?php if(isset($_COOKIE['vendorcookie'])){echo $_COOKIE['vendorcookie'];} ?>">
											<span id="s1" style="color:red;"></span>
											<br>
                                        </div>
                
                                        <div class="form-group">
                                            <label for="userpassword">Password</label>
                                            <input type="password" class="form-control" id="userpassword" name="userpassword" placeholder="Enter password" required value="<?php if(isset($_COOKIE['vendorcookiepass'])){echo $_COOKIE['vendorcookiepass'];} ?>">
											<span id="s2" style="color:red;"></span>
                                        </div>
										<?php
										if(isset($_GET['err']) && $_GET['err'] == 1)
										{
											echo "<span style='color:red;'>Email & Password Are Not Match!!</span>";
										}
										
										if(isset($_GET['err']) && $_GET['err'] == 2)
										{
											echo "<span style='color:red;'>You are Not Yet Approved To Be Logged In!!</span>";
										}
										?>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customControlInline" name="remember_me" checked>
                                            <label class="custom-control-label" for="customControlInline" >Remember me</label>
                                        </div>
                                        
                                        <div class="mt-3">
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit" name="submit">Log In</button>
                                        </div>
            
                                        <div class="mt-4 text-center">
                                            <a href="vendor_forgot_password.php" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Forgot your password?</a>
                                        </div>
                                    </form>
                                </div>
								<?php 
							if(isset($_POST['submit']))
							{
								$email = $_POST['username'];
								$pass = $_POST['userpassword'];
								$hash_pwd=hash('sha512',$pass);
								

									$s = $link->rawQueryOne("select * from vendor_reg where vendor_email = ? and vendor_password = ?",array($email,$hash_pwd));
									if($link->count > 0)
									{
										if($s['is_active']==1)
										{
											session_start();
											$_SESSION['vendorsessionid'] = $s['vendor_id'];
											$_SESSION['vendorsessionname'] = $s['vendor_name'];
											
											$vendor_email=$s['vendor_email'];
											//$vendor_pass=$s['vendor_password'];
											
											
													
											header('location:index.php');
										}
										else
										{
											header('location:vendor_login.php?err=2');
										}
									}
									else
									{
										if(!$s)
										{
											header('location:vendor_login.php?err=1');
										}
									}

									
								if(!empty($_POST['remember_me']))
								{
									setcookie("vendorcookie",$vendor_email,time() + 24 * 60 * 60);
									setcookie("vendorcookiepass",$vendor_pass,time() + 24 * 60 * 60);
								}
								else
								{
									setcookie("vendorcookie","");
									setcookie("vendorcookiepass","");
								}
							}
								?>
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <p>Don't have an account ? <a href="vendor_reg.php" class="font-weight-medium text-primary"> SIGN UP </a> </p>
                            <p>© 2020 Rattle n Roll . Crafted with <i class="mdi mdi-heart text-danger"></i> by Brinda & Vidhi</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
		<script src="assets/libs/parsleyjs/parsley.min.js"></script>
		 <script src="assets/js/pages/form-validation.init.js"></script>
    </body>
</html>
