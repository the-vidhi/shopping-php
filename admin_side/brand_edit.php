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
<title>Rattle n Roll | Brand-Edit</title>
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
	document.getElementById("s2").innerHTML = "";
	document.getElementById("s3").innerHTML = "";
	var bname = document.f1.txtbrand.value;
	var ns=/^[A-Z]{1}[a-z_ ]+$/;
	if(bname == "")
	{
		document.getElementById("s1").innerHTML = "Please Enter Brand Name";
		txtbrand.focus();
		s = false;
	}
	else if(!ns.test(bname))
	{
		document.getElementById("s1").innerHTML = "First Letter Should Be Capital | Only Alphabets Are Allowed";
		txtbrand.focus();
		s = false;
	}
	
	var desc = document.f1.txtdes.value;
	var ns=/^[a-zA-Z0-9\s\,\''\-]*$/;
	if(desc == "")
	{
		document.getElementById("s2").innerHTML = "Please Enter Brand Description";
		//txtdes.focus();
		s = false;
	}
	else if(!ns.test(desc))
	{
		document.getElementById("s2").innerHTML = "Length Must Be Between 3 to 100 | Only Alphabets Are Allowed";
		txtdes.focus();
		s = false;
	}
	
	/*var image = document.f1.file1.value;
	if(image == "")
	{
		document.getElementById("s3").innerHTML="Select Brand Logo";
		s=false;
	}*/
	
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
<h4 class="font-weight-bold py-3 mb-0">Brand Edit</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
<li class="breadcrumb-item active"><a href="brand_edit.php">Brand Edit</a></li>
</ol>
</div>

<?php

$id = $_GET['brand_id'];
$u = $link->rawQueryOne("select * from brandtb where brand_id = ?",array($id));

if($link->count >0)
{
	$name = $u["brand_name"];
	$desc = $u["brand_description"];
	$img = $u["brand_logo"];
}
?>

<form method="post" name="f1" onsubmit="return ck()" enctype="multipart/form-data">
<div class="card mb-4">
<h6 class="card-header">Enter Brand Details : </h6>
<div class="card-body">
<div class="form-group">
<label class="form-label">Enter Brand Name : </label>
<input type="text" class="form-control" value="<?php echo $name ; ?>" name="txtbrand" id="txtbrand" placeholder="Enter Name">
<span id="s1" class="text-primary"></span>
<div class="clearfix"></div>
</div>

<div class="form-group">
<label class="form-label">Description</label>
<input type="text" class="form-control" value="<?php echo $desc ; ?>" placeholder="Enter Description" name="txtdes" id="txtdes">
<span id="s2" class="text-primary"></span>
<div class="clearfix"></div>
</div>

<div class="form-group">
<label class="form-label">Select Brand Logo : </label>
<input type="file"  name="file1" id="file1" value="<?php echo $img ; ?>">
<img src="<?php echo $img;?>" class="img-fluid img-radius wid-120"> 
<span id="s3" class="text-primary"></span>
<div class="clearfix"></div>
</div>

<button type="submit" class="btn btn-primary" name="btnedit">Edit</button>
</div>

</div>
</div>
</form>
<?php

if(isset($_POST['btnedit']))
{
	
		
			$ct = $_POST["txtbrand"];
			$brdes=$_POST['txtdes'];
			$link->where("brand_id",$id);
			$i=$link->update("brandtb",array("brand_name"=>$ct,"brand_description"=>$brdes));
			if($i)
					{
						$img = $_FILES['file1']['name'];
						$ext = pathinfo($img,PATHINFO_EXTENSION);
						$image = "logo_".$id.".".$ext;
						if(move_uploaded_file($_FILES['file1']['tmp_name'],"../brand_logo/".$image))
						{
							unlink($image);
							$link->where("brand_id",$id);
							$u=$link->update("brandtb",array("brand_logo"=>"../brand_logo/".$image));
						}
						if($i)
						{
							header('location:brand_list.php');
						}
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
