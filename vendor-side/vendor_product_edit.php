<?php 
ob_start();
include 'connection.php'; 
session_start();
$sessionid=$_SESSION['vendorsessionid'];
if($_SESSION['vendorsessionid']=="")
{
	header('location:vendor_login.php');
}
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
        <title>Baggge Battle | Edit Products</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/icon.jpeg" >

        <!-- select2 css -->
        <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

        <!-- dropzone css -->
        <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />

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
		document.getElementById("s1").innerHTML = "";
		document.getElementById("s2").innerHTML = "";
		document.getElementById("s3").innerHTML = "";
		document.getElementById("s4").innerHTML = "";
		document.getElementById("s5").innerHTML = "";
		document.getElementById("s6").innerHTML = "";
		document.getElementById("s7").innerHTML = "";
		document.getElementById("s8").innerHTML = "";
		document.getElementById("s9").innerHTML = "";
		document.getElementById("s10").innerHTML = "";
				
		var n=document.f1.pname.value;
		var c=document.f1.colour.value;
		var p=document.f1.price.value;
		var a=document.f1.age_ratio.value;
		var b=document.f1.brand.value;
		var ct = document.f1.category.value;
		var g=document.f1.gender.value;
		var d=document.f1.description.value;
		var img=document.f1.file.value;
		var status=document.f1.status.value;
		
		var name_val_string=/^[A-Za-z_ ]{3,50}$/;
		if(n == 0)
		{
			document.getElementById("s1").innerHTML="Enter Name";
			s=false;
		}
		else if(!name_val_string.test(n))
		{
			document.getElementById("s1").innerHTML="First Letter Should Be Capital | Only Alphabets Are Allowed";
			s=false;
		}
		
		if(c == 0)
		{
			document.getElementById("s2").innerHTML="Choose Any Colour";
			s=false;
		}
		
		var price_val_string=/^(\$|)([1-9]\d{0,2}(\,\d{3})*|([1-9]\d*))(\.\d{2})?$/;
		if(p==0)
		{
			document.getElementById("s3").innerHTML="Enter Price";
			s=false;
		}
		else if(isNaN(p))
		{
			document.getElementById("s3").innerHTML="Only Digits Are Allowed";
			s=false;
		}
		else if(!price_val_string.test(p))
		{
			document.getElementById("s3").innerHTML="Digits Must be Like 000.00";
			s=false;
		}
		
		if(a == "--- select age ---")
		{
			document.getElementById("s4").innerHTML="Select Age Ratio";
			s=false;
		}
		
		if(b== "--- Select Brand ---")
		{
			document.getElementById("s5").innerHTML="Select Brand";
			s=false;
		}
		
		if(ct== "--- Select Category ---")
		{
			document.getElementById("s6").innerHTML="Select Category";
			s=false;
		}
		
		if(g == 0)
		{
			document.getElementById("s7").innerHTML="Please Select Gender";
			s=false;
		}
		
		if(d==0)
		{
			document.getElementById("s8").innerHTML="Please	Enter Description";
			s=false;
		}
		
		/* if(img==0)
		{
			document.getElementById("s9").innerHTML="Please	Select Product Image";
			s=false;
		} */

		if(status==0)
		{
			document.getElementById("s10").innerHTML="Please Select Status";
			s=false;
		}
		
		return s;
		
	}
</script>
		
    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php include 'include/header.php';?>

            <!-- ========== Left Sidebar Start ========== -->
             <?php include 'include/side-bar.php';?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Edit Product</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Edit Products</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                          
											<?php
											$prod_id = $_GET['prodid'];
											$s = $link->rawQuery("select * from producttb where product_id=?",array($prod_id));
											if($link->count >0)
											{
												foreach($s as $s1)
												{
													$name=$s1['product_name'];
													$colour=$s1['product_colour'];
													$price=$s1['product_price'];
													$age=$s1['age_id'];
													$cat=$s1['category_id'];
													$br=$s1['brand_id'];
													$gender=$s1['gender'];
													$desc=$s1['product_description'];
													$status=$s1['status'];
													$imgfile = $s1['image'];
												}
											}
											?>  
                                        <form method="post" enctype="multipart/form-data" name="f1" onSubmit="return ck();">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="name">Product Name</label>
                                                        <input id="pname" name="pname" type="text" class="form-control"  value="<?php echo $name;?>">
														<span id="s1" style="color:red;"></span>
													</div>
                                                    <div class="form-group">
                                                        <label class="control-label">Colour</label>
        
                                                        <select class="select2 form-control " name="colour" data-placeholder="Choose ...">
                                                            <option value="Red"
															<?php if($colour == "Red")
															{ echo 'selected';}
															?>>Red</option>
															
                                                            <option value="White"
															<?php if($colour == "White")
															{ echo 'selected';}
															?>>White</option>
															
															<option value="Black"
															<?php if($colour == "Black")
															{ echo 'selected';}
															?>>Black</option>
															
															<option value="Blue"
															<?php if($colour == "Blue")
															{ echo 'selected';}
															?>>Blue</option>
															
															<option value="Orange"
															<?php if($colour == "Orange")
															{ echo 'selected';}
															?>>Orange</option>
															
															<option value="Yellow"
															<?php if($colour == "Yellow")
															{ echo 'selected';}
															?>>Yellow</option>
															
															<option value="Cyan"
															<?php if($colour == "Cyan")
															{ echo 'selected';}
															?>>Cyan</option>
															
															<option value="Pink"
															<?php if($colour == "Pink")
															{ echo 'selected';}
															?>>Pink</option>
															
															<option value="Green"
															<?php if($colour == "Green")
															{ echo 'selected';}
															?>>Green</option>
															
															<option value="Brown"
															<?php if($colour == "Brown")
															{ echo 'selected';}
															?>>Brown</option>
															
                                                            </select>
															
															
                                                        </select>
													<span id="s2" style="color:red;"></span>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="price">Price</label>
                                                        <input id="price" name="price" type="text" class="form-control"value="<?php echo $price; ?>">
														<span id="s3" style="color:red;"></span>
												   </div>
													
													<div class="form-group">
                                                        <label class="control-label">Age ratio</label>
                                                        <select class="form-control select2" name="age_ratio">
															<option>--- select age ---</option>
                                                            <?php
															$s = $link->rawQuery("select * from agetb");

															foreach($s as $s1)
															{
																?>
																<option value="<?php echo $s1["age_id"]; ?>"
																<?php 
																if($s1["age_id"]==$age)
																{
																	echo 'selected';
																} 
																?>>
																<?php echo $s1["age_ratio"]; ?>
																</option>
																<?php
															}
															?>
                                                            </select>
															<span id="s4" style="color:red;"></span>
                                                    </div>
													<div class="form-group">
                                                        <label class="control-label">Brand</label>
                                                        <select class="form-control select2"name="brand">
                                                            <option>--- Select Brand ---</option>
													   <?php
														$s = $link->rawQuery("select * from brandtb");

														foreach($s as $s1)
														{
															?>
															<option value="<?php echo $s1["brand_id"]; ?>"
															<?php 
															if($s1["brand_id"]==$br)
															{
																echo 'selected';
															} 
															?>>
															<?php echo $s1["brand_name"]; ?>
															</option>
															<?php
														}
														?>
                                                        </select>
														<span id="s5" style="color:red;"></span>
                                                    </div>
													
													</div>
													
        
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Category</label>
                                                        <select class="form-control select2"name="category">
                                                            <option>--- Select Category ---</option>
													   <?php
														$s = $link->rawQuery("select * from product_categorytb");

														foreach($s as $s1)
														{
															?>
															<option value="<?php echo $s1["category_id"]; ?>"
															<?php 
															if($s1["category_id"]==$cat)
																{
																	echo 'selected';
																} 
																?>>
															<?php echo $s1["category_name"]; ?>
															</option>
															<?php
														}
														?>
                                                        </select>
														<span id="s6" style="color:red;"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Gender</label>
														
														<div class="custom-control custom-radio mb-2">
                                                        <input type="radio" id="customRadio1" name="gender" class="custom-control-input" value="Male"
														<?php if($gender == "Male")
															{ echo 'checked';}
															?>>
														
                                                        <label class="custom-control-label" for="customRadio1">Male</label>
														</div>
														
														<div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="gender" class="custom-control-input" value="Female"
														<?php 
														if($gender == "Female")
														{echo 'checked';}
														?>>
                                                        <label class="custom-control-label" for="customRadio2">Female</label>
														</div>
														
														<div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio3" name="gender" class="custom-control-input" value="Both"
														<?php if($gender == "Both")
															{ echo 'checked';}
															?>>
                                                        <label class="custom-control-label" for="customRadio3">Both</label>
														</div>
														<span id="s7" style="color:red;"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="description">Product Description</label>
                                                        <textarea class="form-control" id="description" rows="5" name="description"><?php echo $desc; ?></textarea>
                                                    
													<span id="s8" style="color:red;"></span>
													</div>
													<div class="form-group">
                                                        <label class="control-label">Status</label>
        
                                                        <select class="select2 form-control select2-multiple" name="status" data-placeholder="Choose ...">
                                                            <option value="Available" <?php if($status == "Available")
															{ echo 'selected';}
															?>>Available</option>
                                                            <option value="Out Of Stock" <?php if($status == "Out Of Stock")
															{ echo 'selected';}
															?>>Out Of Stock</option>
                                                            </select>	
														<span id="s10" style="color:red;"></span>
                                                    </div>
                                                    <div class="form-group">
														Select Main Image &nbsp &nbsp <input type="file" name="file"> 
														<img src="<?php echo $imgfile ; ?>" height="50" weight="50">
													<span id="s9" style="color:red;"></span>
													</div>
                                                </div>
                                            </div>
											
                                            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light" name="btn-save">Save Changes</button>
                                            <button type="submit" class="btn btn-secondary waves-effect" name="btn-cancle">Cancel</button>
                                        </form>
        
                                    </div>
                                <!--</div>

                                <div class="card">-->
								<?php

if(isset($_POST['btn-save']))
{
	$nname = $_POST['pname'];	
	$ncolour=$_POST['colour'];
	$nprice=$_POST['price'];
	$nage=$_POST['age_ratio'];
	$ncat=$_POST['category'];
	$nbrand=$_POST['brand'];
	$ngender=$_POST['gender'];
	$ndesc=$_POST['description'];
	$nstatus=$_POST['status'];
	
	$link->where("product_id",$prod_id);
	$i = $link->update("producttb",array("product_name"=>$nname ,"product_colour"=>$ncolour,"age_id"=>$nage,"gender"=>$ngender,"product_price"=>$nprice,"category_id"=>$ncat,"brand_id"=>$nbrand,"product_description"=>$ndesc,"vendor_id"=>$sessionid,"status"=>$nstatus));
		
	$img = $_FILES['file']['name'];
	$ext = pathinfo($img,PATHINFO_EXTENSION);
	$image = "product_".$prod_id.".".$ext;
	if(move_uploaded_file($_FILES['file']['tmp_name'],"../product_main_images/".$image))
	{
		//unlink($image);
		$link->where("product_id",$prod_id);
		$u=$link->update("producttb",array("image"=>"../product_main_images/".$image));
	}		
	if($i)
	{
		header('location:vendor_product_list.php');
	}
}
?>
                                </div> <!-- end card-->
        
                                
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <?php  include 'include/footer.php';?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- select 2 plugin -->
        <script src="assets/libs/select2/js/select2.min.js"></script>

        <!-- dropzone plugin -->
        <script src="assets/libs/dropzone/min/dropzone.min.js"></script>

        <!-- init js -->
        <script src="assets/js/pages/ecommerce-select2.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>

