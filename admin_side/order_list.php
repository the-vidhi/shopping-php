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
<title>Rattle n Roll | Order-List</title>
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
<h4 class="font-weight-bold py-3 mb-0">Order List</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item active"><a href="order_List.php">Order List</a></li>
</ol>
</div>
<div class="row">

<div class="col-xl-12">
<div class="card">
<div class="card-body">
<div class="row align-items-center m-l-0">
<div class="col-sm-6">
</div>
<div class="col-sm-6 text-right">

</div>
</div>
<div class="table-responsive">
<table id="report-table" class="table mb-0">
<thead class="thead-light">
<tr>


<th>User Name</th>
<th>Order Status</th>
<th>Payment Type</th>
<th>Order Amount</th>
<th>Order Date</th>
<th>Delivered Date</th>
<th>Paid Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php


$sql = $link->rawQuery("select * from ordertb o, user_reg u ,payment_typetb pt,producttb p,order_producttb op where p.product_id=op.product_id and u.user_id=o.user_id and pt.payment_type_id=o.payment_type_id and o.order_id=op.order_id group by o.order_id");
if($link->count > 0)
{
	foreach($sql as $s1)
	{ ?>

<tr>
	
	<td class="align-middle"><?php echo $s1['user_name']; ?></td>
	<td class="align-middle">
	
	<?php if($s1['order_status']=='Waiting')
		{
			?>
		<span class="badge badge-danger"><?php echo $s1['order_status']; ?></span>
		<?php 
		} 
		else if($s1['order_status']=='Confirm')
		{
			?>
		<span class="badge badge-warning"><?php echo $s1['order_status']; ?></span>
		<?php 
		} 
		else if($s1['order_status']=='Shipped')
		{
			?>
		<span class="badge badge-primary"><?php echo $s1['order_status']; ?></span>
		<?php 
		}
		else if($s1['order_status']=='Delivered'){ 
		?> 
		<span class="badge badge-success"><?php echo $s1['order_status']; ?></span>
		<?php 
		} 
		?>
	</td>
	<td class="align-middle"><?php echo $s1['payment_type']; ?></td>
	<td class="align-middle"><?php echo $s1['order_amount']; ?></td>
	<td class="align-middle"><?php echo $s1['order_date']; ?></td>
	<td class="align-middle"><?php echo $s1['deliver_date']; ?></td>
	</span>
	
	<td class="align-middle">
	<?php if($s1['is_paid']==1)	
	{
	?>
	<span class="badge badge-success"><?php echo "Paid"; ?></span>
	<?php
	}
	else
	{
		?>
	<span class="badge badge-danger"><?php echo "Remaining"; ?></span>
	<?php
	}
	?>
	</td>
	<td class="table-action">
		<a href="order_detail.php?oid=<?php echo $s1['order_id']; ?>" class="btn btn-icon btn-outline-primary"><i class="feather icon-eye"></i></a>
		<!--<a href="#!" class="btn btn-icon btn-outline-success"><i class="feather icon-edit"></i></a>-->
		<!--<a href="delete.php?ordid=<?php echo $s1['order_id']; ?>" class="btn btn-icon btn-outline-danger"><i class="feather icon-trash-2"></i></a>-->
	</td>
</tr>

<?php
	}
} ?>
</tbody>
</table>
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


			<?php
			$con1=mysqli_connect('localhost','root','','welcomee');
if(@$_POST['btn-clear'])
{
	header("location:product_category_list.php");
}

if(@$_POST['btn-submit'])
{
	$cat_name=$_POST['categoryname'];
	//$i= $link->insert("product_categorytb",array("category_name"=>$cat_name));
	
	$q="insert into product_categorytb values(null,'$cat_name')";
	$res=mysqli_query($con1,$q);

	if($res)
	{
		header("location:product_category_list.php");
	}
}


?>

			
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
