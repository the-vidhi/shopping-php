<?php
require_once 'connection.php';
ob_start();
include 'connection.php'; 

session_start();
if($_SESSION['adminsessionid']=="")
{
	header('location:Admin_Login.php');
}

?>


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Shopse HTML5 Css3 Template" />
    <meta name="description" content="Shopse - Multipurpose eCommerce HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/icon.jpeg">
    <!-- Title  -->
    <title>Change Password</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Animate -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <!-- themify -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Icon font -->
	  <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/icon-font.css">
    <!-- Menu -->
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/slick.css">
    <!-- default -->
    <link rel="stylesheet" href="css/default.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive -->
    <link rel="stylesheet" href="css/responsive.css">
	

	

	
</head>
    <body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">
            <div class="biz-preloader"></div>
        </div>
    </div>
    <!-- header start -->
    <?php
	include 'header/header.php';
	?>
    <!-- header end -->

        <!-- page- title area start -->
        <div class="page-title-area pt-200 pb-200">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title text-center mb-20">
                            <h3>Change Password </h3>
                        </div>
                        <div class="breadcrum-list">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item">
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Change Password</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page- title area end -->
		
		<div class="login-area gray-bg pt-40 pb-130">
            <div class="container">
                <div class="row">
                   
                    <div class="col-md-12">
                        <div class="login-content mb-30">
                           
                            <form action="#" method="post" id="changepass">
						
		
                                <label>Current Password</label>
                                <input type="text" name="cpassword" id="cpassword" placeholder="Enter Current Password"/>
								 <span id="err_cpassword" style="color:red; float:left;"></span>
								 <br/>
								 <br/>
								 
                               <label>New Password</label>								
                               <input type="password" name="npassword" id="npassword" placeholder="Enter New Password"/>							   
							    <span id="err_npassword" style="color:red; float:left;"></span>
								<br/>
								<br/>	   
                								
								<label>Confirm Password </label>
								<br/>
								<input type="password" name="rpassword" id="rpassword" onkeyup="check(this.value)" placeholder="ReEnter New Password"/>
								<br/>
								 <span id="err_cpassword" style="color:red; float:left;"></span>
								 <br/>
							
								
								
								<p id="rerror"></p>
                                <input class="login-sub" type="submit" value="Change Password" name="submit" id="submit" onClick="updatepass()"/>
								 <span id="err_all" style="color:red; float:left;">
								 <?php 
								 if(isset($error))
								 {
									echo $error;
								 }
								 ?>
								 </span>
								
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		


        <!-- footer start -->
        <?php require_once('footer/footer.php');
	   ?>
        <!-- footer end -->



        <!-- Modal Search -->
        <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form>
                        <input type="text" placeholder="Search here...">
                        <button>
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="js/modernizr-3.5.0.min.js"></script>
        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <!-- popper.min -->
        <script src="js/popper.min.js"></script>
        <!-- bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- owl carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- isotope.pkgd.min js -->
        <script src="js/isotope.pkgd.min.js"></script>
        <!-- one page js -->
        <script src="js/one-page-nav-min.js"></script>
        <!-- isotope.pkgd.min js -->
        <script src="js/slick.min.js"></script>
        <!-- ajax form js -->
        <script src="js/ajax-form.js"></script>
        <!-- animate -->
        <script src="js/wow.min.js"></script>
        <!-- scrollup.min -->
        <script src="js/jquery.scrollUp.min.js"></script>
        <!-- imagesloaded.min -->
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <!-- popup.min -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!-- plugins -->
        <script src="js/plugins.js"></script>
        <!-- custom scripts -->
        <script src="js/main.js"></script>
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
