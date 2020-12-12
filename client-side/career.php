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
    <title>Rattle n Roll | Career</title>

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
/*function ck()
{
	var s = true;
	
	document.getElementById("s1").innerHTML = "";
	document.getElementById("s2").innerHTML = "";
	document.getElementById("s3").innerHTML = "";
	document.getElementById("s4").innerHTML = "";
	
	var n = document.f1.career_name.value;
	var mail = document.f1.career_email.value;
	var phone = document.f1.career_phone.value;
	var res = document.f1.career_resume.value;
	
	document.getElementById("s1").innerHTML = "";
	var payment_type = document.f1.career_name.value;
	var ns=/^[A-Z]{1}[a-z_ ]+$/;
	if(payment_type == "")
	{
		document.getElementById("s1").innerHTML = "Please Enter Payment Type";
		txtpayment.focus();
		s = false;
	}
	else if(!ns.test(payment_type))
	{
		document.getElementById("s1").innerHTML = "First Letter Should Be Capital | Only Alphabets Are Allowed";
		txtpayment.focus();
		s = false;
	}
	
return s;
}*/
</script>
<script>
function ck()
{
	var s = true;
	
	document.getElementById("s1").innerHTML = "";
	document.getElementById("s2").innerHTML = "";
	document.getElementById("s3").innerHTML = "";
	document.getElementById("s4").innerHTML = "";
	
	var n = document.f1.career_name.value;
	var mail = document.f1.career_email.value;
	var phone = document.f1.career_phone.value;
	var res = document.f1.image.value;
	
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
	
	var pf=/^((\+){1}91){1}[1-9]{1}[0-9]{9}$/;
	if(phone == 0)
	{
		document.getElementById("s3").innerHTML = "Enter Phone Number";
		s = false;
	}
	else if(!pf.test(phone))
	{
		document.getElementById("s3").innerHTML = "Formate Is Not Match";
		s = false;
	}
	
	if(res == 0)
	{
		document.getElementById("s4").innerHTML = "Select Resume";
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
            <h2 class="page-title color--white">Career</h2>
        </section>
        <!-- Page Header End -->

        <!-- Breadcumb area Start -->
        <div class="breadcumb-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="breadcumb">
                            <li class="breadcumb__list"><a class="breadcumb__link" href="index.php">Home</a></li>
                            <li class="breadcumb__list"><a class="breadcumb__link current" href="contact_us.php">Career</a></li>
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
                        
                        <div class=" col-md-12">
                            <div class="form-box">
                                <div class="section-title">
                                    <h2>Career</h2>
                                </div>
                                <form class="form form--contact" id="contact-form" method="post" name="f1" onsubmit="return ck()" enctype="multipart/form-data">
                                    <div class="form__group row">
                                        <label for="contact_name" class="col-lg-3 col-12 form__label text-lg-right">Full Name</label>
                                        <div class="col-lg-7 col-12">
                                            <input type="text" name="career_name" id="career_name" class="form__input" placeholder="Enter Full Name...">
											<span id="s1" style="color:red;"></span>
                                        </div>
										
                                    </div>
                                    <div class="form__group row">
                                        <label for="contact_email" class="col-lg-3 col-12 form__label text-lg-right">Email Address</label>
                                        <div class="col-lg-7 col-12">
                                            <input type="email" name="career_email" id="career_email" class="form__input" placeholder="Enter Email Address...">
											<span id="s2" style="color:red;"></span>
									   </div>
										
                                    </div>
                                    <div class="form__group row">
                                        <label for="contact_subject" class="col-lg-3 col-12 form__label text-lg-right">Phone</label>
                                        <div class="col-lg-7 col-12">
                                            <input type="text" name="career_phone" id="career_phone" class="form__input" placeholder="+919999999999">
											<span id="s3" style="color:red;"></span>
										</div>
										
                                    </div>
                                    <div class="form__group row">
                                        <label for="contact_message" class="col-lg-3 col-12 form__label text-lg-right">Resume</label>
                                        <div class="col-lg-7 col-12">
                                              <input type="file" name="image" id="image" class="form__input">
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
	$name = $_POST['career_name'];
	$email = $_POST['career_email'];
	$phone = $_POST['career_phone'];
	
	$i = $link->insert("careertb",array("career_name"=>$name,"career_email"=>$email,"career_phone"=>$phone,"user_id"=>$sessionid));
	if($i)
	{	
		$img = $_FILES['image']['name'];
		$ext = pathinfo($img,PATHINFO_EXTENSION);
		$image = "resume_".$i.".".$ext;
		if(move_uploaded_file($_FILES['image']['tmp_name'],"../resume/".$image))
		{
			$link->where("career_id",$i);
			$link->update("careertb",array("career_resume"=>"../resume/".$image));
			header('location:index.php');
		}
		
		
	}
	
}
?>