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
<title>Rattle n Roll | City-Add</title>
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
	var city = document.f1.city_name.value;
	var state = document.f1.state_name.value;
	var ns=/^[A-Z]{1}[a-z_ ]+$/;
	if(state == "<--Select State-->")
	{
		document.getElementById("s2").innerHTML = "Please Select State";
		state_name.focus();
		s = false;
	}
	else{ 
	document.getElementById("s2").innerHTML = " ";
	}
	if(city == "")
	{
		document.getElementById("s1").innerHTML = "Please Enter City";
		city_name.focus();
		s = false;	
	}
	else if(!ns.test(city))
	{
		document.getElementById("s1").innerHTML = "First Letter Should Be Capital | Only Alphabets Are Allowed";
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
<h4 class="font-weight-bold py-3 mb-0">City Add</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item active"><a href="city_add.php">City Add</a></li>
</ol>
</div>


<form method="post" name="f1" onsubmit="return ck()">
<div class="card mb-4">

<div class="card-body">
<div class="form-group">
<div class="card mb-4">
<h6 class="card-header">Select State : </h6>
<div class="card-body demo-vertical-spacing-sm">
<select class="form-control" name="state_name" id="state_name">

<option><--Select State--></option>
<?php
$s = $link->rawQuery("select * from statetb");

foreach($s as $s1)
{
	?>
	<option value="<?php echo $s1["state_id"]; ?>">
	<?php echo $s1["state_name"]; ?>
	</option>
	<?php
}
?>
</select>
<span id="s2" class="text-primary"></span>
<div class="select2-primary">
	<label class="form-label"> City Name</label>
	<input type="text" class="form-control" name="city_name" id="city_name" placeholder="Enter City...">
	<span id="s1" class="text-primary"></span>
	<br>
	<br>
	<button type="submit" class="btn btn-primary" name="btnadd">Add</button>
</div>
</div>
</div>

</div>
</div>
</form>



<?php

if(isset($_POST['btnadd']))
{
	$city = $_POST["city_name"];
	$state = $_POST["state_name"];
	$qry = $link->insert("citytb",array("city_name"=>$city , "state_id"=>$state));
	
	if($qry)
	{
		header("Location:city_list.php");	
	}
}

?>

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

<script src="assets/js/demo.js"></script><script src="assets/js/analytics.js"></script>
</body>
</html>
