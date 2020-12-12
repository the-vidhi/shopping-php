<?php 
ob_start();
include 'connection.php'; 
session_start();
if($_SESSION['vendorsessionid']=="")
{
	header('location:vendor_login.php');
}
$sessionid = $_SESSION['vendorsessionid'];
$sql = $link->rawQuery("select * from vendor_reg where vendor_id = $sessionid and is_active = 0");
if($link->count > 0)
{ ?>
<script>
	alert("You are no more longer available on this page");
	window.location = 'vendor_login.php';
</script>

<?php
}

?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Rattle n Roll | Change Password</title>
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

    </head>

    <body>
        
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Change Your Current Password !</h5>
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
                                                <img src="assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <form class="form-horizontal" method="post" name="f1">
        
                                        <div class="form-group">
                                            <label for="cpassword">Current Password</label>
											<input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Enter Current password">
											<span id="err_cpassword" style="color:red; float:left;"></span>
									   </div>
                
										<div class="form-group">
                                            <label for="npassword">New Password</label>
											<input type="password" class="form-control" name="npassword" id="npassword" onkeyup="check(this.value)" placeholder="Enter New Password">
											<span id="err_npassword" style="color:red; float:left;"></span>
										</div>
                
                                        <div class="form-group">
                                            <label for="rpassword">Confirm Password</label>
                                            <input type="password" class="form-control" id="rpassword" name="rpassword" onkeyup="check(this.value)" placeholder="Enter Confirm password">
											<span id="err_cpassword" style="color:red; float:left;"></span>
									   </div>
										<div class="mt-3">
										<p id="rerror"></p>
                                            <input class="btn btn-primary btn-block waves-effect waves-light" type="submit" name="submit" id="submit" onClick="updatepass()" value="Reset">
											<span id="err_all" style="color:red; float:left;">
										</div>
            
                                        <div class="mt-4 text-center">
                                           <class="text-muted"><i class="mdi mdi-lock mr-1"></i> Forgot your password?</a>
                                        </div>
                                    </form>
                                </div>
            
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                           
                            <p>© 2020 Skote. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

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
<?php

if(isset($error))
{
	echo $error;
}

if(@$_POST['submit'])
{
	$cpassword=$_POST['cpassword'];
	$npassword=$_POST['npassword'];
	$rpassword=$_POST['rpassword'];
	
	$i=$link->rawQuery("select vendor_password from vendor_reg where vendor_id=$sessionid");
	$old_password=$i['vendor_password'];
	
	if($npassword == $rpassword)
	{
		if($old_password == $cpassword)
		{
			$link->where("vendor_id",$sessionid);
			$link->update("vendor_reg",array("vendor_password"=>$npassword));
			header('location:index.php');
		}
		else
		{
			echo 'Password is not match with current password';
		}
	}
	echo 'new and confirm password Must be match';
	
	
}
?>