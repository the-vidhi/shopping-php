<?php
include 'connection.php'; 
require_once ('../Forgot_pass/phpmailer/PHPMailerAutoload.php');

$mail = new PHPMailer();
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 587; // or 587
$mail->IsHTML(true);
$mail->Username = "brindaraycha.1999@gmail.com";
$mail->Password = "Brinda1999";

 	
		function randomPassword() 
		{
			$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
			$pass = array(); //remember to declare $pass as an array
			$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
			for ($i = 0; $i < 8; $i++) 
			{
				$n = rand(0, $alphaLength);
				$pass[] = $alphabet[$n];
			}
			return implode($pass); //turn the array into a string
		}
		if(isset($_REQUEST['submit']))
		{
			//include 'connection.php';
			$email = $_REQUEST['email'];
			
			$users = $link->rawQuery('SELECT * from admin_login where admin_email = ?', Array ($email));
			if($link->count == 0)
			{
			
				echo "<script>window.location.replace('admin_forgot_password.php?err=3');</script>";
			}
			else
			{
				$newPassword = randomPassword();
				$link->where ('admin_email', $email);
				$link->update ('admin_login', Array ('admin_password' => $newPassword ));
				$var = "<html>
						<head>
						<style>
						.imgclass
						{
							height:20px;
							width:20px;
							vertical-align:bottom;
						}

						</style>
						</head>
									<body>
									<img src='admin/images/alogo.png' height='100px' width='100px' />
										<p>Dear Customer,</p></br>

					<p style='margin:0px;'>Please use this Password to login: ".$newPassword." </p></br>
					
					
					<p style='margin:0px;'>New City Light Road</p></br>
					<p style='margin:0px;'>Surat-395017</p>

				</body>
			</html>";
				$mail->SetFrom("Rattle n Roll","brindaraycha.1999@gmail.com");
				$mail->Subject = "New Password for Rattle n Roll Account";
				
				$mail->MsgHTML($var);
				$mail->addAddress($email);
				//$mail->AddAddress("info@wishgourmet.com.au");

				if($mail->Send())
				{
					echo "<script>window.location.replace('admin_forgot_password.php?err=1');</script>";
				}
				else
				{
				    echo "<script>window.location.replace('admin_forgot_password.php?err=2');</script>";
				}
				
			}
		}
?>
<!DOCTYPE html>
<html lang="en" class="default-style layout-fixed layout-navbar-fixed">
<head>
<title>Rattle n Roll | Forgot Password</title>
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

<script async src="https://www.googletagmanager.com/gtag/js?id=AW-806499461"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-806499461');
</script>
<script>
  gtag('event', 'page_view', {
    'send_to': 'AW-806499461',
    'vendor_id': 'replace with value'
  });
</script>
<!-- Event snippet for Adwishgourmet conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
var callback = function () {
if (typeof(url) != 'undefined') {
window.location = url;
}
};
gtag('event', 'conversion', {
'send_to': 'AW-806499461/c3hYCPr80YkBEIXpyIAD',
'event_callback': callback
});
return false;
}
</script>

</head>
<body>

<div class="page-loader">
<div class="bg-primary"></div>
</div>


<div class="authentication-wrapper authentication-2 px-4" style="background-image: url('assets/img/bg/21.jpg');">
<div class="authentication-inner py-5">

<form class="card">
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
<p>Enter your email address and we will send you a link to reset your password.</p>
<div class="form-group">
<input type="text" class="form-control" name="email"  placeholder="Enter your email address">
<?php 
if(isset($_REQUEST['err']) && $_REQUEST['err'] == 1)
{
	echo "<span style='color:green;'>New Password has been mailed successfully.</span>";
} 
else if(isset($_REQUEST['err']) && $_REQUEST['err'] == 2)
{
	echo "<span style='color:red;'>Mail not sent Try again later.</span>";
}
else if(isset($_REQUEST['err']) && $_REQUEST['err'] == 3)
{
	echo "<span style='color:red;'>Email Id does not exists.</span>";
}
?>
<div class="clearfix"></div>
</div>
<input type="submit" name="submit" class="btn btn-primary btn-block" value="Send password reset email" >

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
</body>
</html>
