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
<title>Rattle n Roll | Profile</title>
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
<h4 class="font-weight-bold py-3 mb-0">Admin Profile</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item active"><a href="admin_profile.php">Admin Profile</a></li>
</ol>
</div>
<div class="row">

<div class="col-xl-8">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-lg-5">
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
<div class="carousel-inner">
<div class="carousel-item active">

<?php
$sessionid= $_SESSION['adminsessionid'];
$qry = $link->rawQuery("select * from admin_login where admin_id=$sessionid");
if($link->count > 0)
{
	foreach($qry as $q)
	{
		?>
	<img src="<?php echo $q["admin_photo"]; ?>"class="d-block w-100" alt="Product images">
<?php
	}
}
?>

<br><br><br><br>
</div>
</div>

</div>
</div>
<div class="col-lg-7">
<form class="pl-lg-4">
<h6 class="text-muted">Personal Information</h6>
<h3 class="mt-0"><?php echo $_SESSION['adminsessionname'];?><i class="mdi mdi-square-edit-outline ml-2"></i></h3>
<p class="mb-1">

<?php echo $q["admin_email"]; ?>

</p>




</form>
</div>

</div>
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




<?php 

if(isset($_POST['btn-submit']))
{
	if(@$_GET['action']=="update")
	{
		$ct = $_POST["categoryName"];
		$link->where("category_id",$cat_id);
		$i=$link->update("product_categorytb",array("category_name"=>$ct));
		if($i)
		{
			header("location:product_category_list.php");
		}
	}	
	else
	{
		$catname = $_POST['categoryName'];
		$i = $link->insert("product_categorytb",array("category_name"=>$catname));
		
		if($i)
		{
			header("Location:product_category_list.php");
		}
	}
}
?>




<?php
if(@$_GET['action']=="update")
{
	$cat_id = $_GET['catid'];
	$u = $link->rawQueryOne("select * from product_categorytb where category_id = ?",array($cat_id));

	if($link->count >0)
	{
		$cat= $u["category_name"];
	}

}
?>

