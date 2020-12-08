<?php
include'connection.php';

if(@$_GET['id'])
{
	$cat_id = $_GET['id'];
	$link->where("category_id",$cat_id);
	$d = $link->delete("product_categorytb");
	if($d)
	{
		header('location:product_category_list.php');
	}
}

if(@$_GET['payid']){
$pay_id = $_GET['payid'];
$link->where("payment_type_id",$pay_id);
$d = $link->delete("payment_typetb");
if($d)
{
	header('location:payment_type_list.php');
}
}

if(@$_GET['prodid']){
$prod_id = $_GET['prodid'];
$link->where("product_id",$prod_id);
$d = $link->delete("producttb");
if($d)
{
	header('location:product_list.php');
}
}

if(@$_GET['ordid']){
$ord_id = $_GET['ordid'];
$link->where("order_id",$ord_id);
$d = $link->delete("ordertb");
if($d)
{
	header('location:order_detail.php');
}
}

if(@$_GET['stateid']){
$state_id = $_GET['stateid'];
$link->where("state_id",$state_id);
$d = $link->delete("statetb");
if($d)
{
	header('location:state_list.php');
}
}

if(@$_GET['id']){
$city_id = $_GET['id'];
$link->where("city_id",$city_id);
$d = $link->delete("citytb");
if($d)
{
	header('location:city_list.php');
}
}

if(@$_GET['brid']){
$br_id = $_GET['brid'];
$link->where("brand_id",$br_id);
$d = $link->delete("brandtb");
if($d)
{
	header('location:brand_list.php');
}
}

if(@$_GET['venid']){
$ven_id = $_GET['venid'];
$link->where("vendor_id",$ven_id);
$d=$link->update("vendor_reg",array("is_active"=>0));
if($d)
{
	header('location:vendor_list.php');
}
}

if(@$_GET['vendid']){
$ven_id = $_GET['vendid'];
$link->where("vendor_id",$ven_id);
$d=$link->update("vendor_reg",array("is_active"=>1));
if($d)
{
	header('location:vendor_list.php');
}
}

if(@$_GET['vid']){
$ven_id = $_GET['vid'];
$link->where("vendor_id",$ven_id);
$d=$link->update("vendor_reg",array("is_approved"=>1));
if($d)
{
	header('location:vendor_list.php');
}
}


if(@$_GET['vdid']){
$ven_id = $_GET['vdid'];
$link->where("vendor_id",$ven_id);
$d=$link->update("vendor_reg",array("is_approved"=>0));
if($d)
{
	header('location:vendor_list.php');
}
}

if(@$_GET['userid']){
$u_id = $_GET['userid'];
$link->where("user_id",$u_id);
$d=$link->update("user_reg",array("is_active"=>1));
if($d)
{
	header('location:User_Table.php');
}
}

if(@$_GET['uid']){
$u_id = $_GET['uid'];
$link->where("user_id",$u_id);
$d=$link->update("user_reg",array("is_active"=>0));
if($d)
{
	header('location:User_Table.php');
}
}


if(@$_GET['actprid']){
$act_id = $_GET['actprid'];
$link->where("act_product_id",$act_id);
$d=$link->update("act_producttb",array("act_status"=>1));
if($d)
{
	header('location:auction_product_list.php');
}
}

if(@$_GET['actpridd']){
$act_id = $_GET['actpridd'];
$link->where("act_product_id",$act_id);
$d=$link->update("act_producttb",array("act_status"=>0));
if($d)
{
	header('location:auction_product_list.php');
}
}
?>


<!--<td class="align-middle">
<?php if($s1['is_approved']== 0)
{?>
<a href="delete.php?vid=<?php echo $s1['vendor_id']; ?>"><span class="btn btn-success btn-sm">Approve</span></a>
<?php } else{ ?> 
<a href="delete.php?vdid=<?php echo $s1['vendor_id']; ?>"><span class="btn btn-danger btn-sm">Refuse</span></a>
<?php } ?>

</td>-->



