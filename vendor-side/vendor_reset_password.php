<?php 
ob_start();
include 'connection.php'; 
session_start();
//$sessionid=$_SESSION['vendorsessionid'];
if($_SESSION['vendorsessionid']=="")
{
	header('location:vendor_login.php');
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
        
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Change Current Password !</h5>
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
                                    </a>
                                </div>
                                <div class="p-2">
                                    <form class="form-horizontal" method="post" id="changepass" name="f1" onSubmit="return ck();">
        
                                        <div class="form-group">
                                            <label for="cpassword">Current Password</label>
											<input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Enter Current password">
											<span id="err_cpassword" style="color:red; float:left;"></span>
									   </div>
                
										<div class="form-group">
                                           <br> <label for="npassword">New Password</label>
											<input type="password" class="form-control" name="npassword" id="npassword" onkeyup="check(this.value)" placeholder="Enter New Password">
											<span id="err_npassword" style="color:red; float:left;"></span>
										</div>
                
                                        <div class="form-group">
                                         <br>   <label for="rpassword">Confirm Password</label>
                                            <input type="password" class="form-control" id="rpassword" name="rpassword" onkeyup="check(this.value)" placeholder="Enter Confirm password">
											<span id="err_rpassword" style="color:red; float:left;"></span>
									   </div>
										<div class="mt-3">
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
												
												$hash_pwd=hash('sha512',$npassword);
												$hash_cur_pwd=hash('sha512',$cpassword);

												$vendorid=$_SESSION['vendorsessionid'];
												$pass = $link->rawQueryOne("select vendor_password from vendor_reg where vendor_id = ?",Array($vendorid));
												$old_password = $pass['vendor_password'];
												if($npassword == $rpassword)
												{
													if(strlen($npassword)<=6 || strlen($npassword)>=12)
													{
														echo "Password must be 6 to 12 character long";
													}
													else
													{
														if($old_password == $hash_cur_pwd)
														{
															$link->where("vendor_id",$vendorid);
															$link->update("vendor_reg",Array("vendor_password"=>$hash_pwd));
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
										</div>
            
                                        <div class="mt-4 text-center">
                                           <class="text-muted"><i class="mdi mdi-lock mr-1"></i><a href="vendor_forgot_password.php"> Forgot your password?</a>
                                        </div>
                                    </form>
                                </div>
            
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                           
                            <p>© 2020 . Crafted with <i class="mdi mdi-heart text-danger"></i> by Rattle n Roll</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </body>
</html>

<script>
	$("#changepass").submit(function(e) {
		$.ajax({
		   type: "POST",
		   url: "changepass.php",
		   data: $("#changepass").serialize(), // serializes the form's elements.
		   success: function(data)
		   {
			   window.location.hre='index.php';
				/* $("#rerror").html(data);
				if(data == 'Password is successfully changed.')
				{
					window.location.hre='index.php';
					$("#rerror").css("color","green");
					$("#cpassword").val("");
					$("#npassword").val("");
					$("#rpassword").val("");
				}
				else
				{
					$("#rerror").css("color","red");
				} */
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