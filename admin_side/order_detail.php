<?php 
ob_start();
include 'connection.php';
session_start();
if($_SESSION['adminsessionid']=="")
{
	header('location:Admin_Login.php');
}
 ?>
<!DOCTYPE html>
<html lang="en" class="default-style layout-fixed layout-navbar-fixed">
<head>
<title>Rattle n Roll | Order-Detail</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<meta name="description" content="Empire is one of the unique admin template built on top of Bootstrap 4 framework. It is easy to customize, flexible code styles, well tested, modern & responsive are the topmost key factors of Empire Dashboard Template" />
<meta name="keywords" content="bootstrap admin template, dashboard template, backend panel, bootstrap 4, backend template, dashboard template, saas admin, CRM dashboard, eCommerce dashboard">
<meta name="author" content="Codedthemes" />
<link rel="icon" type="image/x-icon" href="assets/img/icon.jpeg">

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

<link rel="stylesheet" href="assets/fonts/fontawesome.css">
<link rel="stylesheet" href="assets/fonts/ionicons.css">
<link rel="stylesheet" href="assets/fonts/linearicons.css">
<link rel="stylesheet" href="assets/fonts/open-iconic.css">
<link rel="stylesheet" href="assets/fonts/pe-icon-7-stroke.css">
<link rel="stylesheet" href="assets/fonts/feather.css">

<link rel="stylesheet" href="assets/css/bootstrap-material.css">
<link rel="stylesheet" href="assets/css/shreerang-material.css">
<link rel="stylesheet" href="assets/css/uikit.css">

<link rel="stylesheet" href="assets/libs/perfect-scrollbar/perfect-scrollbar.css">
<link rel="stylesheet" href="assets/libs/datatables/datatables.css">
</head>
<body>

<div class="page-loader">
<div class="bg-primary"></div>
</div>


<div class="layout-wrapper layout-2">
<div class="layout-inner">

<?php include 'include/side-bar.php'; ?>


<div class="layout-container">

<?php include 'include/header.php'; ?>


<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Order Detail</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item active"><a href="order_detail.php">Order Detail</a></li>
</ol>
</div>







<div class="row">	
<?php
if(@$_GET['oid'])
{
	$oid=$_GET['oid'];
	?>


<div class="col-md-12">
<div class="card">
<div class="card-body">
<div class="row align-items-center justify-contact-between">
<div class="col">
	
	<div class="btn btn-primary">
	    <?php echo $oid;?>
	</div>
</div>

</div>
<div class="table-responsive">
<table class="table m-0 mt-3">
<tr>


<th class="align-middle">Product Image</th>
<th class="align-middle">Product Name</th>
<th class="align-middle">Vendor Name</th>
<th class="text-right">Amount</th>

</tr>
<?php
$ss=$link->rawQuery("select * from producttb p , ordertb o ,order_producttb op,vendor_reg v where p.vendor_id=v.vendor_id and o.order_id=op.order_id and p.product_id=op.product_id and op.order_id=?",array($oid));
if($link->count > 0)
{
	foreach($ss as $s2)
	{?>

<tr>
<td class="align-middle">
<img src="<?php echo $s2['image']; ?>"  class="img-fluid img-radius wid-40" alt alt="" />
</td>
<td class=" align-middle">

	<?php echo $s2['product_name']; ?>

</td>
<td class="align-middle">
	<a href="vendor_detail.php?prodid=<?php echo $s2['product_id']; ?>">
	<?php echo $s2['vendor_name']; ?></a></td>
<td class="text-right align-middle">
				Rs.<?php echo $s2['product_price']; ?>
			
				</td>

</tr>
<?php
	}
}
?>
</table>
</div>
<hr class="mt-0">
<div class="card-body py-2">
				<div class="table-responsive">
				<table class="table table-borderless mb-0 w-auto table-sm float-right text-right">
				<tbody>
				<tr>
				</tr>
				<tr class="border-top">
				<td>
				<h5 class="m-0">Total:</h5>
				</td>
				<td class="font-weight-semibold">
				Rs.<?php echo $s2['order_amount']; ?>
				</td>
				</tr>
				</tbody>
				</table>
				</div>
				</div>

</div>
</div>



</div>


<?php	
	

}
?>
</div>
</div>


<?php include 'include/footer.php'; ?>
</div>

</div>

</div>

<div class="layout-overlay layout-sidenav-toggle"></div>
</div>


<script src="assets/js/pace.js"></script>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/libs/popper/popper.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/sidenav.js"></script>
<script src="assets/js/layout-helpers.js"></script>
<script src="assets/js/material-ripple.js"></script>

<script src="assets/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="assets/libs/datatables/datatables.js"></script>

<script src="assets/js/demo.js"></script>
<script>
        // DataTable start
        $('#report-table').DataTable({
            "lengthMenu": [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ]
        });
        // DataTable end
    </script>
</body>
</html>
