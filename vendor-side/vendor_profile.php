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
        <title>Rattle n Roll | Vendor Profile</title>
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

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php include 'include/header.php';?>

            <!-- ========== Left Sidebar Start ========== -->
            <?php include'include/side-bar.php';?>
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
                                    <h4 class="mb-0 font-size-18">Vendor Details</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                             <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                            <li class="breadcrumb-item active">My Profile</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        <div class="row">
                           
                                <div class="col-xl-4">
                                     
                                            <div class="product-detai-imgs">
                                                <div class="row">
                                                    
                                                    <div class=" offset-md-1 ">
                                                        <div class="tab-content" id="v-pills-tabContent">
                                                            <div class="tab-pane fade show active" id="product-1" role="tabpanel" aria-labelledby="product-1-tab">
                                                                <div>
																<?php
																$sessionid= $_SESSION['vendorsessionid'];
																$qry = $link->rawQuery("select * from vendor_reg v,citytb c,statetb s where c.city_id=v.city_id and s.state_id=v.state_id and v.vendor_id=$sessionid");
																if($link->count > 0)
																{
																	foreach($qry as $q)
																	{
																		?>
																	 <img src="<?php echo $q["vendor_photo"]; ?>" alt="" class="img-fluid mx-auto d-block" style="height: 100px;width: 150px;">
																<?php
																	}
																}
																?>
																</div>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                       
										  										
								</div>
								 <div class="col-xl-6">
                                     <div class="row-2">
                                                    
                                                    <div class="col-md-7 offset-md-1 col-9 align-middle">
                                                        <div class="tab-content" id="v-pills-tabContent">
                                                            <div class="tab-pane fade show active" id="product-1" role="tabpanel" aria-labelledby="product-1-tab">
                                                                <div>
																<h3 ><b><?php echo $q['vendor_name'];?></b></h3>
																</div>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                        
                                                    </div>
													
                                                </div>
                                            
                                                
                                                  
													
													
                                                					
												</div>
                                    
                                        

                                        <div class="col-xl-12">
                                            <div class="mt-4 mt-xl-3">
                                           
                                                

                                             
                                                

                                                
                                                <div class="table-responsive">
                                            <table class="table mb-0 table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" style="width: 400px;">E-mail</th>
                                                        <td><?php echo $q['vendor_email'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Contact</th>
                                                        <td><?php echo $q['vendor_contact'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Address</th>
                                                        <td><?php echo $q['vendor_address'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Pincode</th>
                                                        <td><?php echo $q['vendor_pincode'];?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">State Name</th>
                                                        <td><?php echo $q['state_name'];?></td>
                                                    </tr>
													<tr>
                                                        <th scope="row">city Name</th>
                                                        <td><?php echo $q['city_name'];?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                                
                                            </div>
											</div>
											<div class="mt-5">
                                        
										
                                        
                                    </div>
                                  
                                    <!-- end row -->

                                    
                                    <!-- end Specifications -->

                                    
                               
                            
                            <!-- end card -->
                        </div>
                        <!-- end row -->

                        
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <?php include 'include/footer.php';?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-right">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
