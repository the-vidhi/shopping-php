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
<title>Rattle n Roll  | User List</title>
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
<h4 class="font-weight-bold py-3 mb-0">User List</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item"><a href="User_Table.php">User List</a></li>
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

<th>Profile</th>
<th>User Name</th>
<th>User Email</th>
<th>User Contact</th>
<th>User Address</th>
<th>State Name</th>
<th>City Name</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php


$qry = $link->rawQuery("select * from user_reg u , statetb s , citytb c where c.city_id=u.city_id and s.state_id=u.state_id");
if($link->count > 0)
{
	foreach($qry as $q1)
	{ ?>

		<tr>

		
		<td class="align-middle"><img src="<?php echo $q1['user_image'];?>" class="d-block ui-w-50 rounded-circle" alt></td>
		<td class="align-middle"><?php echo $q1['user_name']; ?></td>
		<td class="align-middle"><?php echo $q1['user_email']; ?></td>
		<td class="align-middle"><?php echo $q1['user_contact']; ?></td>
		<td class="align-middle"><?php echo $q1['user_address']; ?></td>
		<td class="align-middle"><?php echo $q1['state_name']; ?></td>
		<td class="align-middle"><?php echo $q1['city_name']; ?></td>
		<td class="align-middle">
		<?php if($q1['is_active']== 0)
		{?>
		<span class="badge badge-danger">Not Active</span>
		<?php } else{ ?> 
		<span class="badge badge-success">Active</span>
		<?php } ?>
		</td>
		
		<td class="align-middle">
		
		<?php if($q1['is_active']== 0)
		{?>
		<a href="delete.php?userid=<?php echo $q1['user_id']; ?>"><span class="btn btn-success btn-sm">Active</span></a>
		<?php } else{ ?> 
		<a href="delete.php?uid=<?php echo $q1['user_id']; ?>"><span class="btn btn-danger btn-sm">Deactive</span></a>
		<?php } ?>

		</td>
		
		</tr>

<?php
	}
}
?>
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
