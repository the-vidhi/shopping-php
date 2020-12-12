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
$mail->Password = "brinda1999";

 	
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
			
			$users = $link->rawQuery('SELECT * from vendor_reg where vendor_email = ?', Array ($email));
			if($link->count == 0)
			{
			
				echo "<script>window.location.replace('vendor_forgot_password.php?err=3');</script>";
			}
			else
			{
				$newPassword = randomPassword();
				$link->where ('vendor_email', $email);
				$link->update ('vendor_reg', Array ('vendor_password' => $newPassword ));
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
					echo "<script>window.location.replace('vendor_forgot_password.php?err=1');</script>";
				}
				else
				{
				    echo "<script>window.location.replace('vendor_forgot_password.php?err=2');</script>";
				}
				
			}
		}
?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Recover Password | Rattle n Roll</title>
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
                                            <h5 class="text-primary"> Forgot Password</h5>
                                            <p>Forgot-Password with Rattle n Roll.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div>
                                    <a href="index.html">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="assets/images/icon.jpeg" alt="" class="rounded-circle" height="65">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                
                                <div class="p-2">
                                    <div class="alert alert-success text-center mb-4" role="alert">
                                        Enter your Email and instructions will be sent to you!
                                    </div>
                                    <form class="form-horizontal" method="post" action="vendor_forgot_password.php">
            
                                        <div class="form-group">
                                            <label for="useremail">Email</label>
                                            <input type="email" class="form-control" name="email" id="useremail" placeholder="Enter email">
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
										</div>
                    
                                        <div class="form-group row mb-0">
                                            <div class="col-12 text-right">
                                                
												<input type="submit" name="submit" class="btn btn-primary w-md waves-effect waves-light" value="Submit" >
											</div>
                                        </div>
    
                                    </form>
                                </div>
            
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <p>Remember It ? <a href="vendor_login.php" class="font-weight-medium text-primary"> Sign In here</a> </p>
                            <p>© 2020 Rattle n Roll . Crafted with <i class="mdi mdi-heart text-danger"></i> by Brinda & Vidhi</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
