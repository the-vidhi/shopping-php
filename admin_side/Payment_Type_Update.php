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
<title>Rattle n Roll  | Payment-Type-Edit</title>
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
<script>
function ck()
{
	var s = true;
	
	document.getElementById("s1").innerHTML = "";
	var payment_type = document.f1.txtpayment.value;
	var ns=/^[A-Z]{1}[a-z_ ]+$/;
	if(payment_type == "")
	{
		document.getElementById("s1").innerHTML = "Please Enter Payment Type";
		txtpayment.focus();
		s = false;
	}
	else if(!ns.test(payment_type))
	{
		document.getElementById("s1").innerHTML = "First Letter Should Be Capital | Only Alphabets Are Allowed";
		txtpayment.focus();
		s = false;
	}
	
return s;
}
</script>
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
<h4 class="font-weight-bold py-3 mb-0">Payment Type Edit</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item active"><a href="payment_type_list.php">Payment Type Edit</a></li>
</ol>
</div>

<?php

$id = $_GET['uid'];
$u = $link->rawQueryOne("select * from payment_typetb where payment_type_id = ?",array($id));

if($link->count >0)
{
	$payment = $u["payment_type"];
}
?>

<form method="post" name="f1" onsubmit="return ck()">
<div class="card mb-4">
<h6 class="card-header"> Payment Type Name : </h6>
<div class="card-body">
<div class="form-group">

<input type="text" class="form-control" id="txtpayment" name="txtpayment" value="<?php echo $payment ; ?>">
<span id="s1" class="text-primary"></span>
<br>
<br>
<button type="submit" class="btn btn-primary" name="btnadd">Edit</button>
</div>

</div>
</div>
</form>






<?php
if(isset($_POST["btnadd"]))
{
	$payment = $_POST["txtpayment"];
	
	$link->where("payment_type_id",$id);
	$i = $link->update("payment_typetb",array('payment_type' =>  $payment ));
	if($i)
	{
		header("location:Payment_Type_List.php");
	}

}
?>

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

<script src="assets/js/demo.js"></script><script src="assets/js/analytics.js"></script>
</body>
</html>
