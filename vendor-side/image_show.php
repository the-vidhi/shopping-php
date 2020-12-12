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
        <title>Rattle n Roll | Image List</title>
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

            <?php include 'include/header.php'?>
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
                                    <h4 class="mb-0 font-size-18">Image List</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                             <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Image List</li>
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
                                        
                
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap">
                                                <thead class="thead-light">
                                                    <tr>
                                                        
                                                        <th>Product Image</th>
                                                        <th>Product Name</th>
                                                    
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php
												if (isset($_GET['pageno'])) 
												{
													$pageno = $_GET['pageno'];
												}
												else 
												{
													$pageno = 1;
												}
												$rec_per_page = 3;
												$offset = ($pageno-1) * $rec_per_page;
											  
												$sql = $link->rawQuery("select * from producttb p,product_categorytb pc where p.category_id=pc.category_id and p.vendor_id=$sessionid");
												$total_rows=$link->count;
												$total_pages = ceil($total_rows / $rec_per_page);
										 
												$sql = $link->rawQuery("select * from producttb p,product_categorytb pc where p.category_id=pc.category_id and p.vendor_id=$sessionid LIMIT $offset, $rec_per_page");
												if($link->count > 0)
												{
													foreach($sql as $s1)
													{ ?>
													<tr>		
													<td class="align-middle"><img class="rounded avatar-md" src="<?php echo $s1["image"]; ?>"></td>
													<td class="align-middle"><?php echo $s1['product_name']; ?></td>
													
													
													<td>
                                                        <a class="btn btn-primary btn-rounded waves-effect waves-light mb-2 mr-2 align-middle" href="multiple_image_list.php?prodid=<?php echo $s1['product_id']; ?>" role="button"><i class="bx bx-show-alt"></i></a>
                                                    </td>
													
													<?php
													}
												}		
												?>	
                                                </tbody>
                                            </table>
                                        </div>
                                        <ul class="pagination pagination-rounded justify-content-end mb-2">
                                            <li class="page-item">
                                                <a class="page-link" href="?pageno=1" aria-label="Previous">
                                                    <i class="mdi mdi-chevron-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item active">
												<a class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
											</li>
											<li class="page-item">
												<a class="page-link" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
											</li>
                                            <li class="page-item">
                                                <a class="page-link" href="?pageno=<?php echo $total_pages; ?>" aria-label="Next">
                                                    <i class="mdi mdi-chevron-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <!-- Modal -->
                

                
                <?php include 'include/footer.php'; ?>
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

        <script src="assets/js/app.js"></script>

    </body>
</html>
