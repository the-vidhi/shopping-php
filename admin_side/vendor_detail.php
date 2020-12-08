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
<title>Rattle n Roll | Vendor-Profile</title>
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
<h4 class="font-weight-bold py-3 mb-0">Vendor Profile</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item active"><a href="vendor_detail.php">Vendor Profile</a></li>
</ol>
</div>	
<div class="row">

<div class="col-12">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-lg-5">

<?php
if(@$_GET['vid'])
{
	$vid=$_GET['vid'];
	$qry = $link->rawQuery("select * from vendor_reg v,statetb s,citytb c where s.state_id=v.state_id and c.city_id=v.city_id and v.vendor_id=$vid");
	if($link->count > 0)
	{
		foreach($qry as $q)
		{
			?>
		<img src="<?php echo $q["vendor_photo"]; ?>"class="d-block w-100" alt="Product images">
	<?php
		}
	}
}
else
{
	header('location:product_list.php');
}
?>


</div>
<div class="col-lg-7">
<form class="pl-lg-4">
<h6 class="text-muted">Vendor Information</h6>
<h3 class="mt-0"><?php echo $q["vendor_name"]; ?><i class="mdi mdi-square-edit-outline ml-2"></i></h3>
<p class="mb-1"><?php echo $q["vendor_email"]; ?></p>

<div class="mt-4">


</div>
<div class="mt-4">
<ul class="list-unstyled">
<li>
<div class="media">

<div class="media-body">
<strong class="">Address :</strong>
<span><?php echo $q["vendor_address"]; ?></span>
</div>
</div>
</li>
<li class="mt-2">
<div class="media">
<div class="media-body">
<strong class="">Pincode :</strong>
<span><?php echo $q["vendor_pincode"]; ?></span>
</div>
</div>
</li>
<li class="mt-2">
<div class="media">
<div class="media-body">
<strong class="">Contact :</strong>
<span><?php echo $q["vendor_contact"]; ?></span>
</div>
</div>
</li>
<li class="mt-2">
<div class="media">
<div class="media-body">
<strong class="">State :</strong>
<span><?php echo $q["state_name"]; ?></span>
</div>
</div>
</li>
<li class="mt-2">
<div class="media">
<div class="media-body">
<strong class="">City :</strong>
<span><?php echo $q["city_name"]; ?></span>
</div>
</div>
</li>
</ul>
<div class="mt-3">
<h5>
<?php if($q['is_active']== 0)
{?>
<span class="badge badge-danger">Not Active</span>
<?php } else{ ?> 
<span class="badge badge-success">Active</span>
<?php } ?>


</h5>
</div>
</div>

</form>
</div>

</div>

</div>
</div>
<table id="report-table" class="clients-table table table-hover m-0">
<!--<thead class="thead-light">
<tr>
<th>Profile</th>
<th>Subject</th>
<th>Message</th>
</tr>
</thead>-->


<tr>
<th><font size="5px">Reviews</font></th>
</tr>

<tbody>
<?php


$qry = $link->rawQuery("select * from reviewtb r,user_reg u where u.user_id = r.user_id and r.vendor_id = $vid");
if($link->count > 0)
{
	foreach($qry as $q)
	{ ?>

		<tr>
		<td class="align-middle py-3">
		<div class="media align-items-center">		
			<img src="<?php echo $q['user_image'];?>" class="d-block ui-w-40 rounded-circle" alt>
			<div class="media-body flex-basis-auto pl-3">
				<div><?php echo $q['user_name']; ?></div>
				<div class="text-muted small"><?php echo $q['user_email']; ?></div>
			</div>		
		</div>		
		</td>
		<td class="align-middle py-3"><?php echo $q['review_title']; ?></td>
		<td class="align-middle py-3"><?php echo $q['review']; ?></td>
		</tr>

<?php
	}
}
else
{
	echo '<tr><td>There are no reviews</td></tr>';
}

?>
</tbody>
</table>
</div>

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
