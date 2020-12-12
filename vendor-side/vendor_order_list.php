<?php
ob_start();
include 'connection.php';
session_start();
if($_SESSION['vendorsessionid']=="")
{
	header('location:vendor_login.php');
}
$sessionid=$_SESSION['vendorsessionid'];
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
        <title>Rattle n Roll | Order List</title>
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
		<?php include 'include/header.php'; ?>
             <!-- ========== Left Sidebar Start ========== -->
		<?php include 'include/side-bar.php'; ?>
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
                                    <h4 class="mb-0 font-size-18">Order List</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Order List</li>
                                         </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        
                        <!-- end row -->

                        
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Orders</h4>
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead class="thead-light">
                                                    <tr>
                                                        
                                                       
                                                        <th>User ID</th>
                                                        <th>Order Date</th>
                                                        <th>Order Amount</th>
                                                        <th>Order Status</th>
                                                        <th>Action</th>
                                                        <th>Payment Method</th>
														<th>Payment Status</th>
                                                        <th>View Details</th>
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
											  
												$sql=$link->rawQuery("select * from ordertb o,payment_typetb pt,order_producttb op,producttb p where p.product_id=op.product_id and o.payment_type_id=pt.payment_type_id and o.order_id=op.order_id and p.vendor_id=$sessionid group by o.order_id");
												$total_rows=$link->count;
												$total_pages = ceil($total_rows / $rec_per_page);
										 
												$sql=$link->rawQuery("select * from ordertb o,payment_typetb pt,order_producttb op,producttb p where p.product_id=op.product_id and o.payment_type_id=pt.payment_type_id and o.order_id=op.order_id and p.vendor_id=$sessionid group by o.order_id LIMIT $offset, $rec_per_page");
												foreach($sql as $s)
												{
													if($link->count >0)
													{?>
														
													
                                                    <tr>
                                                       
                                                        <td><span class="badge badge-pill badge-dark font-size-12"><?php echo $s['user_id'];?></span></td>
                                                        <td>
                                                            <?php echo $s['order_date'];?>
                                                        </td>
                                                        <td>
                                                            <?php echo $s['order_amount'];?>
                                                        </td>
														
                                                        <td>
														<?php
														if($s['order_status']=="Delivered"){
														?>
                                                            <span class="badge badge-pill badge-success font-size-12">Delivered</span>
														<?php }
														else if($s['order_status']=="Waiting"){
														?>
                                                            <span class="badge badge-pill badge-danger font-size-12">Waiting</span>
														<?php }
														else if($s['order_status']=="Shipped"){
														?>
                                                            <span class="badge badge-pill badge-primary font-size-12">Shipped</span>
														<?php }
														else
														{
														?>
														<span class="badge badge-pill badge-warning font-size-12">Confirm</span>
														<?php }?>
                                                        </td>
														
														<td class="align-middle">
														<?php if($s['order_status']=="Waiting")
														{?>
														<a href="delete.php?oid=<?php echo $s['order_id']; ?>"><span class="btn btn-warning btn-sm">Confirm</span></a>
														<?php } else if($s['order_status']=="Confirm"){ ?> 
														<a href="delete.php?odid=<?php echo $s['order_id']; ?>"><span class="btn btn-primary btn-sm">Shipping</span></a>
														<?php } else if($s['order_status']=="Shipped"){ ?> 
														<a href="delete.php?odrid=<?php echo $s['order_id']; ?>"><span class="btn btn-success btn-sm">Delivere</span></a>
														<?php } else { ?> 
														<a href=""></a>
														<?php } ?>


														</td>

											
                                                        <td>
                                                            <i class="fab fa-cc-mastercard mr-1"></i><?php echo $s['payment_type'];?>
                                                        </td>
														
														<td>
														<?php
														if($s['is_paid']==1){
														?>
                                                            <span class="badge badge-pill badge-success font-size-12">Paid</span>
														<?php }
														else
														{
														?>
														<span class="badge badge-pill badge-warning font-size-12">Not Paid</span>
														<?php }?>
                                                        </td>
														
                                                        <td>
                                                        <center><a class="btn btn-info btn-rounded waves-effect waves-light mb-2 mr-2" href="vendor_order_details.php?ordid=<?php echo $s['order_id']; ?>" role="button"><i class="bx bx-show-alt"></i></a></center>
                                                    </td>
                                                    </tr>
													<?php }
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
                                        <!-- end table-responsive -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <!-- Modal -->
                
                <!-- end modal -->

                
            </div>
            <!-- end main content-->
			<?php include 'include/footer.php'; ?>
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

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <script src="assets/js/pages/dashboard.init.js"></script>

        <script src="assets/js/app.js"></script>
    </body>

</html>