<?php 
ob_start();
include 'connection.php';
if(!@$_SESSION)
{
	session_start();
}
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
    <title>Rattle n Roll | Contact-Us</title>

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
	
	<script>
function ck()
{
	var s = true;
	
	document.getElementById("s1").innerHTML = "";
	document.getElementById("s2").innerHTML = "";
	document.getElementById("s3").innerHTML = "";
	document.getElementById("s4").innerHTML = "";
	
	var n = document.f1.contact_name.value;
	var mail = document.f1.contact_email.value;
	var sub = document.f1.contact_subject.value;
	var msg = document.f1.contact_message.value;
	
	var ns=/^[A-Za-z_ ]{3,50}$/;
	if(n == 0)
	{
		document.getElementById("s1").innerHTML = "Enter Name";
		s = false;
	}
	else if(!ns.test(n))
	{
		document.getElementById("s1").innerHTML = "First Letter Should Be Capital | Only Alphabets Are Allowed";
		s = false;
	}
	
	var es=/^([a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$)/;
	if(mail == 0)
	{
		document.getElementById("s2").innerHTML = "Enter email";
		s = false;
	}
	else if(!es.test(mail))
	{
		document.getElementById("s2").innerHTML = "Enter Valid Email";
		s = false;
	}
	
	if(sub == 0)
	{
		document.getElementById("s3").innerHTML = "Enter Subject";
		s = false;
	}
	
	if(msg == 0)
	{
		document.getElementById("s4").innerHTML = "Enter Message";
		s = false;
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

        <?php include 'include/header.php';?>
        
        <!-- Header area End -->

        <!-- Page Header Start -->
        <section class="page-header">
            <h2 class="page-title color--white">Contact US</h2>
        </section>
        <!-- Page Header End -->

        <!-- Breadcumb area Start -->
        <div class="breadcumb-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="breadcumb">
                            <li class="breadcumb__list"><a class="breadcumb__link" href="index.php">Home</a></li>
                            <li class="breadcumb__list"><a class="breadcumb__link current" href="contact_us.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcumb area End -->

        <!-- Main content wrapper Start -->

        <div class="main-content-wrapper">
            <!-- Contact Us area Start -->    
            <section class="contact-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="store-info">
                                <h4>STORE INFORMATION</h4>
                                <div class="store-info__item">
                                    <i class="fa fa-map-marker"></i>
                                    <div class="store-info__data">
                                        <p>253 FF, Massimo, opp. Tirupati Shyam Villa,
										Bhimrad Althan Road,
										Surat – 39 017,Gujarat
										 <br> India</p>
                                    </div>
                                </div>
                                <div class="store-info__item">
                                    <i class="fa fa-phone"></i>
                                    <div class="store-info__data">
                                        <p>Call Us: <br> <a href="tel:+91-9080706050">+91-9080706050</a></p>
                                    </div>
                                </div>
                                <div class="store-info__item">
                                    <i class="fa fa-envelope"></i>
                                    <div class="store-info__data">
                                        <p>Email Us: <br> <a href="mailto:acc@rattlenroll.com">acc@rattlenroll.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <div class="form-box">
                                <div class="section-title">
                                    <h2>Contact Us</h2>
                                </div>
                                <form class="form form--contact" id="contact-form" method="post" name="f1" onSubmit="return ck();" >
                                    <div class="form__group row">
                                        <label for="contact_name" class="col-lg-3 col-12 form__label text-lg-right">Name</label>
                                        <div class="col-lg-7 col-12">
                                            <input type="text" name="contact_name" id="contact_name" class="form__input">
											<span id="s1" style="color:red;"></span>
                                        </div>
										
                                    </div>
                                    <div class="form__group row">
                                        <label for="contact_email" class="col-lg-3 col-12 form__label text-lg-right">Email Address</label>
                                        <div class="col-lg-7 col-12">
                                            <input type="email" name="contact_email" id="contact_email" class="form__input">
											<span id="s2" style="color:red;"></span>
										</div>
										
                                    </div>
                                    <div class="form__group row">
                                        <label for="contact_subject" class="col-lg-3 col-12 form__label text-lg-right">Subject</label>
                                        <div class="col-lg-7 col-12">
                                            <input type="text" name="contact_subject" id="contact_subject" class="form__input">
											<span id="s3" style="color:red;"></span>
										</div>
										
                                    </div>
                                    <div class="form__group row">
                                        <label for="contact_message" class="col-lg-3 col-12 form__label text-lg-right">Message</label>
                                        <div class="col-lg-9">
                                            <textarea id="contact_message" name="contact_message" class="form__input form__input--textarea"></textarea>
											<span id="s4" style="color:red;"></span>
										</div>
										
                                    </div>
                                    <div class="form__group text-right">
                                        <input type="submit" class="btn btn--small btn-style-3" name="submit" value="submit">
                                    </div>

                                    <div class="form__output">
                                        <p class="form__messege"></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>    
            <!-- Contact Us area End -->
        </div>

        <!-- Main content wrapper End -->

        <!-- Clients area Start -->
       
        <!-- Clients area End -->
        

        <!-- Footer area Start -->
		<?php include 'include/footer.php';?>
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
if(@$_POST['submit'])
{
	$name = $_POST['contact_name'];
	$email = $_POST['contact_email'];
	$subject = $_POST['contact_subject'];
	$message = $_POST['contact_message'];
	$i = $link->insert("contact_us_tb",array("contact_us_name"=>$name,"contact_us_email"=>$email,"contact_us_subject"=>$subject,"contact_us_message"=>$message,"user_id"=>$sessionid));
	
	if($i)
	{
		header('location:index.php');
	}
}
?>