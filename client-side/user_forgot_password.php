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
			
			$users = $link->rawQuery('SELECT * from user_reg where user_email = ?', Array ($email));
			if($link->count == 0)
			{
			
				echo "<script>window.location.replace('user_forgot_password.php?err=3');</script>";
			}
			else
			{
				$newPassword = randomPassword();
				$link->where ('user_email', $email);
				$link->update ('user_reg', Array ('user_password' => $newPassword ));
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
					echo "<script>window.location.replace('user_forgot_password.php?err=1');</script>";
				}
				else
				{
				    echo "<script>window.location.replace('user_forgot_password.php?err=2');</script>";
				}
				
			}
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
    <title>Baggage Battle | Login</title>

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
    'user_id': 'replace with value'
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
                                <h2>Forgot Password</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-10">
                            <div class="form-box">
                                <form class="form"  method="post"  >
                                    <div class="form__group row align-items-center">
                                        <label for="login_email" class="col-md-3 col-12 form__label text-md-right">Email</label>
                                        <div class="col-md-7 col-lg-6 col-12">
                                            <input type="email" name="email" id="login_email" class="form__input" value="<?php if(isset($_COOKIE['usercookie'])){echo $_COOKIE['usercookie'];} ?>">
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
                                    </div>
                                   
									
                                    <div class="form__group row align-items-center">
                                        <div class="col-lg-6 col-12 offset-lg-3 text-center">
                                            
											 <input type="submit" name="submit" class="btn btn--small btn-style-3" value="Submit" >
                                           
                                        </div>
                                    </div>
									
                                </form>
								  
                                <a class="create-account-link" href="user_login.php">Sign In here</a>
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
