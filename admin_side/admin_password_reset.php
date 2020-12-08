<?php 
ob_start();
include 'connection.php'; 
session_start();
if($_SESSION['adminsessionid']=="")
{
	header('location:Admin_Login.php');
}
?>

<!DOCTYPE html>
<html lang="en" class="default-style layout-fixed layout-navbar-fixed">
<head>
<title>Rattle n Roll | Change Password</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<meta name="description" content="Empire is one of the unique admin template built on top of Bootstrap 4 framework. It is easy to customize, flexible code styles, well tested, modern & responsive are the topmost key factors of Empire Dashboard Template" />
<meta name="keywords" content="bootstrap admin template, dashboard template, backend panel, bootstrap 4, backend template, dashboard template, saas admin, CRM dashboard, eCommerce dashboard">
<meta name="author" content="Codedthemes" />
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
</head>
<body>

<div class="page-loader">
<div class="bg-primary"></div>
</div>


<div class="authentication-wrapper authentication-2 px-4" style="background-image: url('assets/img/bg/21.jpg');">
<div class="authentication-inner py-5">

<form class="card" method="post" id="changepass" name="f1" onSubmit="return ck();">
<div class="p-4 p-sm-5">

<div class="d-flex justify-content-center align-items-center pb-2 mb-4">
<div class="ui-w-60">
<div class="w-100 position-relative">
<img src="assets/img/icon.jpeg" alt="Brand Logo" class="img-fluid">
<div class="clearfix"></div>
</div>
</div>
</div>

<h5 class="text-center text-muted font-weight-normal mb-4">Reset Your Password</h5>
<hr class="mt-0 mb-4">
<p>Current Password : </p>
<div class="form-group">
<input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Enter Current Password">
<span id="err_cpassword" style="color:red; float:left;"></span>
<br/>
<br/>

<div class="clearfix"></div>
</div>

<p>New Password : </p>
<div class="form-group">
<input type="password" class="form-control" name="npassword" id="npassword" onkeyup="check(this.value)" placeholder="Enter New Password">
<span id="err_npassword" style="color:red; float:left;"></span>
	<br/>
	<br/>	   
	
<div class="clearfix"></div>
</div>

<p>Password Confirmation : </p>
<div class="form-group">
<input type="password" class="form-control" name="rpassword" id="rpassword" onkeyup="check(this.value)" placeholder="ReEnter New Password">
<br/>
	<span id="err_rpassword" style="color:red; float:left;"></span>
	<br/>

<div class="clearfix"></div>
</div>

<p id="rerror"></p>
<input type="submit" class="btn btn-primary btn-block" name="submit" id="submit" onClick="updatepass()" value="Reset Password">
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

	$adminid=$_SESSION['adminsessionid'];
	$pass = $link->rawQueryOne("select admin_password from admin_login where admin_id=?",Array($adminid));
	$old_password = $pass['admin_password'];
	if($npassword == $rpassword)
	{
		if(strlen($npassword)<=6 || strlen($npassword)>=12)
		{
			echo "Password must be 6 to 12 character long";
		}
		else
		{
			if($old_password == $cpassword)
			{
				$link->where("admin_id",$adminid);
				$link->update("admin_login",Array("admin_password"=>$npassword));
				echo "Password is successfully changed.";
				header('location:index.php');
			}
			else
			{
				echo "Your old password id incorrect!";
			}
		}
	}
	else
	{
		echo "New password and repeat password must be same!";
	}
}
	 ?>
	 </span>
	
</div>
</form>

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
<script>
	$("#changepass").submit(function(e) {
		$.ajax({
		   type: "POST",
		   url: "changepass.php",
		   data: $("#changepass").serialize(), // serializes the form's elements.
		   success: function(data)
		   {
				$("#rerror").html(data);
				if(data == 'Password is successfully changed.')
				{
					$("#rerror").css("color","green");
					$("#cpassword").val("");
					$("#npassword").val("");
					$("#rpassword").val("");
				}
				else
				{
					$("#rerror").css("color","red");
				}
		   }
		});
		e.preventDefault(); // avoid to execute the actual submit of the form.
	});
	
	function check(rpass)
	{
		var npass = $("#npassword").val();
		if(npass == rpass)
		{
			$("#rerror").html("");
			$("#submit").attr("disabled",false);
		}
		else
		{
			$("#rerror").html("New password and Repeate password must be same!");
			$("#rerror").css("color","red");
			$("#submit").attr("disabled",false);
		}
	}
	</script>
</body>
</html>
