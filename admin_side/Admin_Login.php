<?php 
ob_start();
include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en" class="default-style layout-fixed layout-navbar-fixed">
<head>
<title>Rattle n Roll | Login</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="Empire is one of the unique admin template built on top of Bootstrap 4 framework. It is easy to customize, flexible code styles, well tested, modern & responsive are the topmost key factors of Empire Dashboard Template" />
<meta name="keywords" content="bootstrap admin template, dashboard template, backend panel, bootstrap 4, backend template, dashboard template, saas admin, CRM dashboard, eCommerce dashboard">
<meta name="author" content="" />
<link rel="icon" type="image/x-icon" href="assets/img/icon.jpeg">

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

<link rel="stylesheet" href="assets/fonts/fontawesome.css">
<link rel="stylesheet" href="assets/fonts/ionicons.css">
<link rel="stylesheet" href="assets/fonts/linearicons.css">
<link rel="stylesheet" href="assets/fonts/open-iconic.css">
<link rel="stylesheet" href="assets/fonts/pe-icon-7-stroke.css">
<link rel="stylesheet" href="assets/fonts/feather.css">

<link rel="stylesheet" href="assets/css/bootstrap-material.css">
<link rel="stylesheet" href="assets/css/shreerang-material.css">
<link rel="stylesheet" href="assets/css/uikit.css">

<link rel="stylesheet" href="assets/libs/perfect-scrollbar/perfect-scrollbar.css">

<link rel="stylesheet" href="assets/css/pages/authentication.css">
<script>

function ck()
{

var s = true;

document.getElementById("s1").innerHTML = "";
document.getElementById("s2").innerHTML = "";
var e = document.f1.admin_email.value;
var em = /^([a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$)/;

if(e == 0)
{
     document.getElementById("s1").innerHTML = "Enter Email";
	 admin_email.focus();
	 s = false;
}
else if(!em.test(e))
{
    document.getElementById("s1").innerHTML = "Enter Valid Email";
	admin_email.focus();
	 s = false;
}

var p = document.f1.admin_password.value;

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

<div class="page-loader">
<div class="bg-primary"></div>
</div>


<div class="authentication-wrapper authentication-2 ui-bg-cover ui-bg-overlay-container px-4" style="background-image: url('assets/img/bg/21.jpg');">
<div class="ui-bg-overlay bg-dark opacity-25"></div>
<div class="authentication-inner py-5">
<div class="card">
<div class="p-4 p-sm-5">

<div class="d-flex justify-content-center align-items-center pb-2 mb-4">
<div class="ui-w-60">
<div class="w-100 position-relative">
<img src="assets/img/icon.jpeg" alt="Brand Logo" class="img-fluid">
<div class="clearfix"></div>
</div>
</div>
</div>








<h5 class="text-center text-muted font-weight-normal mb-4">Login to Your Account</h5>

<!--<form method="post" name="f1" onSubmit="return funValidation();">-->
<form name="f1" method="post" onSubmit="return ck();" >
<div class="form-group">
<label class="form-label">Email</label>
<input type="text" class="form-control" id="admin_email" name="admin_email" value="<?php if(isset($_COOKIE['admincookie'])){echo $_COOKIE['admincookie'];} ?>">
<span id="s1" style="color:red;"></span>

<br>
<div class="clearfix"></div>
</div>

<div class="form-group">
<label class="form-label d-flex justify-content-between align-items-end">
<span>Password</span>
<a href="admin_forgot_password.php" class="d-block small">Forgot password?</a>
</label>
<input type="password" class="form-control" id="admin_password" name="admin_password">
<span id="s2" style="color:red;"></span>
<div class="clearfix"></div>
</div>
<?php
if(isset($_GET['err']) && $_GET['err'] == 1)
{
	echo "<span style='color:red;'>Email & Password Are Not Match!!</span>";
}
?>
</br>
</br>
<div class="d-flex justify-content-between align-items-center m-0">

<label class="custom-control custom-checkbox m-0">
 <input type="checkbox" class="custom-control-input" name="remember_me">
<span class="custom-control-label">Remember me</span>
</label>

<!--<button type="button" class="btn btn-primary" name="submit">Sign In</button>-->
<input type="submit" value="Sign In" name="submit" class="btn btn-primary">
</div>
</form>

</div>
<!--<div class="card-footer py-3 px-4 px-sm-5">
<div class="text-center text-muted">
Don't have an account yet?
<a href="admin_register.php">Sign Up</a>
</div>
</div>-->
</div>
</div>
</div>


<script src="assets/js/pace.js"></script>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/libs/popper/popper.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/sidenav.js"></script>
<script src="assets/js/layout-helpers.js"></script>
<script src="assets/js/material-ripple.js"></script>

<script src="assets/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="assets/js/demo.js"></script><script src="assets/js/analytics.js"></script>
</body>
</html>

<?php
 
if(isset($_POST['submit']))
{
	$ad_email = $_POST['admin_email'];
	$ad_pass = $_POST['admin_password'];
	

		$s = $link->rawQueryOne("select * from admin_login where admin_email = ? and admin_password = ?",array($ad_email,$ad_pass));
		if($link->count > 0)
		{
			session_start();
			$_SESSION['adminsessionid'] = $s['admin_id'];
			$_SESSION['adminsessionname'] = $s['admin_name'];
			
			$admin_email=$s['admin_email'];
					
			header('location:index.php');
		}
		else
		{
			if(!$s)
			{
				header('location:Admin_Login.php?err=1');
			}
		}

		
	if(!empty($_POST['remember_me']))
	{
		setcookie("admincookie",$admin_email,time() + 24 * 60 * 60);
	}
	else
	{
		setcookie("admincookie","");
	}
}
?>
