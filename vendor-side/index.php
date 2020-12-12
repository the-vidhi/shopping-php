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
        <title>Rattle n Roll | Dashboard </title>
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
                                    <h4 class="mb-0 font-size-18">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item active">Welcome to Dashboard</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="text-muted font-weight-medium">Orders</p>
                                                        <h4 class="mb-0">
														<?php
														$i=$link->rawQuery("select * from ordertb o,order_producttb op,producttb p where p.product_id=op.product_id and o.order_id=op.order_id	and p.vendor_id=$sessionid");
														$c=$link->count;
														echo $c;
														?>
														</h4>
                                                    </div>

                                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                                        <span class="avatar-title">
                                                            <i class="fas fa-pen-alt font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="text-muted font-weight-medium">Products</p>
                                                        <h4 class="mb-0">
														<?php
														$i=$link->rawQuery("select * from producttb where vendor_id=$sessionid");
														$c=$link->count;
														echo $c;
														?>
														</h4>
                                                    </div>

                                                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                        <span class="avatar-title">
                                                            <i class="fas fa-dolly-flatbed font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="text-muted font-weight-medium">Total Sale</p>
                                                        <h4 class="mb-0">
														<?php
														
													    $i=$link->rawQuery("select * from ordertb o,order_producttb op,producttb p where p.product_id=op.product_id and o.order_id=op.order_id and o.is_paid=1 and p.vendor_id=$sessionid ");
														if($link->count > 0)
														{
															$total=0;
															foreach($i as $s)
															{
																$q=$s['product_price'];
																$total=$q+$total;
															}
															echo $total;
														}
														else echo '0';
														
														?>
														</h4>
                                                    </div>

                                                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                        <span class="avatar-title">
                                                            <i class="mdi mdi-bag-checked font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									
                                </div>
								
                                <!-- end row -->

                                
                        </div>
                        <!-- end row -->

                        
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Completed Orders</h4>
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead class="thead-light">
                                                    <tr>
                                                        
                                                        <th>Order ID</th>
                                                        <th>User ID</th>
                                                        <th>Order Date</th>
                                                        <th>Delivered Date</th>
                                                        <th>Order Amount</th>
                                                        <th>Order Status</th>
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
											  
												$sql=$link->rawQuery("select * from ordertb o,payment_typetb pt,order_producttb op,producttb p where p.product_id=op.product_id and o.payment_type_id=pt.payment_type_id and o.order_id=op.order_id and p.vendor_id=$sessionid and o.order_status='Delivered' group by o.order_id ");
												$total_rows=$link->count;
												$total_pages = ceil($total_rows / $rec_per_page);
										 
												$sql=$link->rawQuery("select * from ordertb o,payment_typetb pt,order_producttb op,producttb p where p.product_id=op.product_id and o.payment_type_id=pt.payment_type_id and o.order_id=op.order_id and p.vendor_id=$sessionid and o.order_status='Delivered' group by o.order_id LIMIT $offset, $rec_per_page");
												if($link->count >0)
												{
													
													foreach($sql as $s)
													{?>
														
													
                                                    <tr>
                                                        <td><?php echo $s['order_id'];?></td>
                                                        <td><?php echo $s['user_id'];?></td>
                                                        <td>
                                                            <?php echo $s['order_date'];?>
                                                        </td>
														<td>
                                                            <?php echo $s['deliver_date'];?>
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
														else
														{
														?>
														<span class="badge badge-pill badge-warning font-size-12">Shipped</span>
														<?php }?>
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
                <div class="modal fade exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="mb-2">Product id: <span class="text-primary">#SK2540</span></p>
                                <p class="mb-4">Billing Name: <span class="text-primary">Neal Matthews</span></p>

                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Product</th>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <div>
                                                        <img src="assets/images/product/img-7.png" alt="" class="avatar-sm">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div>
                                                        <h5 class="text-truncate font-size-14">Wireless Headphone (Black)</h5>
                                                        <p class="text-muted mb-0">$ 225 x 1</p>
                                                    </div>
                                                </td>
                                                <td>$ 255</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div>
                                                        <img src="assets/images/product/img-4.png" alt="" class="avatar-sm">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div>
                                                        <h5 class="text-truncate font-size-14">Phone patterned cases</h5>
                                                        <p class="text-muted mb-0">$ 145 x 1</p>
                                                    </div>
                                                </td>
                                                <td>$ 145</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h6 class="m-0 text-right">Sub Total:</h6>
                                                </td>
                                                <td>
                                                    $ 400
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h6 class="m-0 text-right">Shipping:</h6>
                                                </td>
                                                <td>
                                                    Free
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h6 class="m-0 text-right">Total:</h6>
                                                </td>
                                                <td>
                                                    $ 400
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end modal -->

                
            </div>
            <!-- end main content-->
			<?php include 'include/footer.php'; ?>
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

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <script src="assets/js/pages/dashboard.init.js"></script>

        <script src="assets/js/app.js"></script>
    </body>

</html>