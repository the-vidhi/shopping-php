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
        <title>Rattle n Roll | Profile Edit</title>
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
	function fillbox(val) {
		var xhttp=new XMLHttpRequest();
		xhttp.onreadystatechange=function()
		{
			if(this.readyState==4 || this.status==200)
			{
				document.getElementById("city_name").innerHTML=this.responseText;
			}
		};
		xhttp.open("GET",val,true);
		xhttp.send();
	}
</script>
<script>
	function funValidation()
	{
		var s = true;
		document.getElementById("s1").innerHTML = "";
		document.getElementById("s2").innerHTML = "";
		document.getElementById("s3").innerHTML = "";
		document.getElementById("s4").innerHTML = "";
		document.getElementById("s5").innerHTML = "";
		document.getElementById("s6").innerHTML = "";
		//document.getElementById("s7").innerHTML = "";
		//document.getElementById("s8").innerHTML = "";
		document.getElementById("s9").innerHTML = "";
		document.getElementById("s10").innerHTML = "";
				
		var n=document.f1.uname.value;
		var a=document.f1.address.value;
		var pn=document.f1.pincode.value;
		var c=document.f1.contact.value;
		var e=document.f1.email.value;
		//var img = document.f1.vendor_photo.value;
		//var p=document.f1.password.value;
		//var cp=document.f1.cpassword.value;
		var st=document.f1.state_name.value;
		var ct=document.f1.city_name.value;
		
		
		var name_val_string=/^[A-Za-z_ ]{3,15}$/;
		if(n==0)
		{
			document.getElementById("s1").innerHTML="Enter Name";
			s=false;
		}
		else if(!name_val_string.test(n))
		{
			document.getElementById("s1").innerHTML="Length Must Be Between 3 to 15";
			s=false;
		}
		///^[A-Za-z]{10,200}$/;
		var address_val_string=/^[a-zA-Z0-9\s\,\''\-]*$/;
		if(a==0)
		{
			document.getElementById("s2").innerHTML="Enter Address";
			s=false;
		}
		else if(!address_val_string.test(a))
		{
			document.getElementById("s2").innerHTML="Length Must Be Between 10 to 200";
			s=false;
		}
		
		
		if(pn==0)
		{
			document.getElementById("s3").innerHTML="Enter Pincode";
			s=false;
		}
		//var contact_val_string=/^[0-9]{10}$/;
		if(c==0)
		{
			document.getElementById("s4").innerHTML="Enter Contact";
			s=false;
		}
		/* else if(!contact_val_string.test(c))
		{
			document.getElementById("s2").innerHTML="Length Must Be 10";
			s=false;
		}
		 */
		var email_val_string=/^([a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$)/;
		if(e==0)
		{
			document.getElementById("s5").innerHTML="Enter Email";
			s=false;
		}
		else if(!email_val_string.test(e))
		{
			document.getElementById("s5").innerHTML="Invalid email";
			s=false;
		}
		
		/*if(img == "")
		{
			document.getElementById("s6").innerHTML="Select Any Profile Image";
			s=false;
		}*/
		
		/*var pass_val_string=/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
		if(p==0)
		{
			document.getElementById("s7").innerHTML="Enter Password";
			s=false;
		}
		else if(!pass_val_string.test(p))
		{
			document.getElementById("s7").innerHTML="The string must contain at least 1 lowercase,1 uppercase, 1 numeric,one special character alphabetical character and eight characters or longer";
			s=false;
		}
		
		if(cp!=p)
		{
			document.getElementById("s8").innerHTML="Password Must Be match with above password";
			s=false;
		}*/
		
		if(st == "---Select State---")
		{
			document.getElementById("s9").innerHTML="select state";
			s=false;
		}
		
		if(ct == "---Select City---")
		{
			document.getElementById("s10").innerHTML="select city";
			s=false;
		}
	
		return s;
		
	}
</script>
    </head>
<?php


$id=$_SESSION['vendorsessionid'];
$u = $link->rawQueryOne("select * from vendor_reg where vendor_id = ?",array($id));

if($link->count >0)
{
	
		$vname = $u['vendor_name'];
		$vaddress = $u['vendor_address'];
		$vpincode = $u['vendor_pincode'];
		$vcontact = $u['vendor_contact'];
		$vemail = $u['vendor_email'];
		$vstate = $u['state_id'];
		$vcity = $u['city_id'];
		$vphoto = $u['vendor_photo'];
		$check = $u['contact_visible'];
}

?>
    <body>
       <!-- <div class="home-btn d-none d-sm-block">
            <a href="index.html" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div> -->
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-12 col-xl-10">
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Edit Profile</h5>
                                            
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
                                   
                                </div>
                                <div class="p-2">
                                    <form class="form-horizontal" method="post" enctype="multipart/form-data" name="f1" onSubmit="return funValidation();" >
									
									<div class="form-group">
										<div class="row">
                                            <div class="col-md-6">
                                                <div class="row" >
                                                    <div class="col-lg-10 ">
                                                        <div class="mt-4 mb-lg-6">
                                                            <label for="uname">Name</label>
															<input type="text" class="form-control" id="uname" name="uname" placeholder="Enter username" value="<?php echo $vname ; ?>">
															<span id="s1" style="color:red;"></span>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        
                                                    </div>
                                                    
                                                    <div class="col-lg-4">
                                                        <div>
                                                            <img class="img-thumbnail rounded-circle avatar-xl" alt="200x200" src="<?php echo $vphoto ; ?>" data-holder-rendered="true">  
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
									</div>
										<div class="form-group"> 										
                                            <label for="address">Address</label>
                                            <textarea class="form-control" id="address" name="address"><?php echo $vaddress; ?></textarea>
											<span id="s2" style="color:red;"></span>
                                        </div>
										<div class="form-group">
                                            <label for="pincode">Pincode</label>
                                            <input id="input-mask" name="pincode" class="form-control input-mask" data-inputmask="'mask': '999-999'" im-insert="true" value="<?php echo $vpincode ; ?>">
                                            <span class="text-muted">e.g "000-000"</span>
											<span id="s3" style="color:red;"></span>
                                        </div>
										<div class="form-group">									
                                            <label for="contact">Contact</label>
                                            <input id="contact" name="contact" class="form-control input-mask" data-inputmask="'mask': '99-9999999999'" value="<?php echo $vcontact ; ?>">
											
											
                                            <span class="text-muted">e.g "91-9999999999"</span>
											<span id="s4" style="color:red;"></span>
                                        </div>
										
										<div class="custom-control custom-switch mb-2" dir="ltr">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch1"   name="customSwitch1" value="<?php echo $check; ?>"
											<?php 
												if($check==1)
												{
													echo 'checked';
												}
											?>>
                                            <label class="custom-control-label" for="customSwitch1">Display contact publicly</label>
                                        </div>
										
									<!--	<div class="form-group custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="customCheck2" name="customCheck2" value="<?php echo $check; ?>"
											<?php 
												if($check==1)
												{
													echo 'checked';
												}
											?>>
											<label class="custom-control-label" for="customCheck2">Display contact publicly</label>
										</div> -->
										
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="<?php echo $vemail ; ?>">   
											<span id="s5" style="color:red;"></span>
                                        </div>
										
										<div class="form-group">
                                            <label for="email">Choose Profile : </label>
                                             <input type="file" name="vendor_photo">    
											<span id="s6" style="color:red;"></span>
										</div>
                                        
                                        
										
										<div class="form-group">
										<div class="row">
                                            <div class="col-sm-6">
											<label for="state">Select State : </label>
											
												
											<select class="btn btn-secondary" name="state_name" id="deptcombo" onchange="fillbox('city_dep.php?eid='+this.value)">
													
													  <option>---Select State---</option>
													   <?php
														$s = $link->rawQuery("select * from statetb");

														foreach($s as $s1)
														{
															?>
															<option value="<?php echo $s1["state_id"]; ?>"
															<?php 
															if($s1["state_id"]==$vstate)
																{
																	echo 'selected';
																} 
																?> >
															<?php echo $s1["state_name"]; ?>
															</option>
															<?php
														}
														?>
                                                   
                                             </div>   
											</select>
											<span id="s9" style="color:red;"></span>
                                        </div>
											
                                            <div class="col-sm-6">
                                                <label for="state">Select city : </label>
												<select id="city_name" name="city_name" class="btn btn-secondary">
													
													<option>---Select City---</option>
												<?php
												$c = $link->rawQuery("select * from citytb");
												foreach ($c as $c1) {
													?>
														<option value="<?php echo $c1["city_id"]; ?>" <?php 
														if($c1["city_id"]==$vcity)
															{
																echo 'selected';
															} 
															?> >
															<?php echo $c1["city_name"]; ?>
														</option>
													<?php
												}
											?>
												</select>
												<span id="s10" style="color:red;"></span>
                                        </div>
                                    </div>
                                              
                                        </div>
										
										
                                        </div>
                    
                                        <div class="mt-4">
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit" name="submit">Edit</button>
                                        </div>
                
                                        
						  </form>
                                </div>
            
                            </div>
                        </div>
                        

                    </div>
                </div>
				<?php
				if(isset($_POST['submit']))
				{
					$name = $_POST['uname'];	
					$address = $_POST['address'];	
					$pincode = $_POST['pincode'];	
					$contact = $_POST['contact'];	
					$email = $_POST['email'];	
					
					$state = $_POST['state_name'];	
					$city = $_POST['city_name'];
					
					if(isset($_POST['customSwitch1']))
					{
							$cnt='1';
					}
					else
					{
						$cnt='0';
					}
					
					$link->where("vendor_id",$id);
					$i = $link->update("vendor_reg",array('vendor_name' => $name , 'vendor_address' => $address , 'vendor_pincode' => $pincode , 'vendor_contact' => $contact , 'vendor_email' => $email , 'state_id' => $state ,'city_id' => $city ,'is_active'=>1,'contact_visible'=>$cnt));
					
					if($i)
					{
						$img = $_FILES['vendor_photo']['name'];
						$ext = pathinfo($img,PATHINFO_EXTENSION);
						$image = "vendor_".$id.".".$ext;
						if(move_uploaded_file($_FILES['vendor_photo']['tmp_name'],"../vendor_images/".$image))
						{
							//unlink($image);
							$link->where("vendor_id",$id);
							$u=$link->update("vendor_reg",array("vendor_photo"=>"../vendor_images/".$image));
						}
						if($i)
						{
							header('location:index.php');
						}
					}
				}
				?>
            </div>
        </div>
		<script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
		 <script src="assets/libs/inputmask/min/jquery.inputmask.bundle.min.js"></script>
		<script src="assets/js/pages/form-mask.init.js"></script>
        <script src="assets/js/app.js"></script>
    </body>
</html>

							