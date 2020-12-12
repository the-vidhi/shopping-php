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
	header('location:vendor_product_list.php');
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

if(@$_GET['cityid']){
$city_id = $_GET['cityid'];
$link->where("city_id",$city_id);
$d = $link->delete("citytb");
if($d)
{
	header('location:city_list.php');
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

if(@$_GET['userid']){
$u_id = $_GET['userid'];
$link->where("user_id",$u_id);
$d=$link->update("user_reg",array("is_active"=>1));
if($d)
{
	header('location:user_list.php');
}
}

if(@$_GET['uid']){
$u_id = $_GET['uid'];
$link->where("user_id",$u_id);
$d=$link->update("user_reg",array("is_active"=>0));
if($d)
{
	header('location:user_list.php');
}
}

if(@$_GET['imgid']){
$img_id = $_GET['imgid'];
$link->where("image_id",$img_id);
$d = $link->delete("product_imagetb");
if($d)
{
	header('location:image_show.php');
}
}

if(@$_GET['oid']){
$o_id = $_GET['oid'];
$link->where("order_id",$o_id);
$d=$link->update("ordertb",array("order_status"=>'Confirm'));
if($d)
{
	header('location:vendor_order_list.php');
}
}

if(@$_GET['odid']){
$od_id = $_GET['odid'];
$link->where("order_id",$od_id);
$d=$link->update("ordertb",array("order_status"=>'Shipped'));
if($d)
{
	header('location:vendor_order_list.php');
}
}

if(@$_GET['odrid']){
$od_id = $_GET['odrid'];
$link->where("order_id",$od_id);
$d=$link->update("ordertb",array("order_status"=>'Delivered'));
if($d)
{
	$link->where("order_id",$od_id);
	$d=$link->update("ordertb",array("is_paid"=>1));

	header('location:vendor_order_list.php');
}
}


?>




