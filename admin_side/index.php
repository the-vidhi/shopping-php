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
<title>Rattle n Roll | Dashboard</title>
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
<link rel="stylesheet" href="assets/libs/flot/flot.css">
<link rel="stylesheet" href="assets/libs/morris/morris.css">
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
<h4 class="font-weight-bold py-3 mb-0">Dashboard</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item "><a href="index.php">Dashboard</a></li>
</ol>
</div>
<h4 class="font-weight-bold py-3 mb-0"></h4>
<div class="row">


<div class="col-xl-3 col-md-6">
<div class="card  mb-4">
<div class="card-body text-center">
<i class="feather icon-package bg-primary ui-rounded-icon"></i>
<!--<i class="feather icon-mail bg-primary ui-rounded-icon"></i>-->
<h4 class="mt-2"><span class="text-primary">
<?php
$i=$link->rawQuery("select * from producttb");
$c=$link->count;
echo $c;
?>
</span> Products</h4>

<a href="product_list.php" ><button class="btn btn-primary btn-sm btn-round">Check them out</button></a>
</div>
</div>
</div>


<div class="col-xl-3 col-md-6">
<div class="card  mb-4">
<div class="card-body text-center">
<i class="feather icon-shopping-cart bg-success ui-rounded-icon"></i>
<!--<i class="feather icon-shopping-cart bg-success ui-rounded-icon"></i>-->
<h4 class="mt-2"><span class="text-success">
<?php
$i=$link->rawQuery("select * from ordertb");
$c=$link->count;
echo $c;
?>
</span> Orders</h4>

<a href="order_list.php"><button class="btn btn-success btn-sm btn-round">Check them out</button></a>
</div>
</div>
</div>


<div class="col-xl-3 col-md-6">
<div class="card  mb-4">
<div class="card-body text-center">
<i class="oi oi-people bg-danger ui-rounded-icon"></i>
<h4 class="mt-2"><span class="text-danger">
<?php
$i=$link->rawQuery("select * from user_reg");
$c=$link->count;
echo $c;
?>
</span> Users</h4>

<a href="User_Table.php"><button class="btn btn-danger btn-sm btn-round">Check Them Out</button></a>
</div>
</div>
</div>


<div class="col-xl-3 col-md-6">
<div class="card  mb-4">
<div class="card-body text-center">
<i class="feather icon-users bg-warning ui-rounded-icon"></i>
<h4 class="mt-2"><span class="text-warning">
<?php
$i=$link->rawQuery("select * from vendor_reg");
$c=$link->count;
echo $c;
?>
</span> Vendors</h4>

<a href="vendor_list.php"><button class="btn btn-warning btn-sm btn-round text-white">Check Them Out</button></a>
</div>
</div>
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
<script src="assets/libs/chart-am4/core.js"></script>
<script src="assets/libs/chart-am4/charts.js"></script>
<script src="assets/libs/chart-am4/animated.js"></script>
<script src="assets/libs/eve/eve.js"></script>
<script src="assets/libs/flot/flot.js"></script>
<script src="assets/libs/flot/curvedLines.js"></script>
<script src="assets/libs/raphael/raphael.js"></script>
<script src="assets/libs/morris/morris.js"></script>

<script src="assets/js/demo.js"></script><script src="assets/js/analytics.js"></script>
<script src="assets/js/pages/dashboards_analytics.js"></script>
</body>
</html>
