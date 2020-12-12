<?php
     ob_start();
include 'connection.php';
session_start();
$sessionid=$_SESSION['usersessionid'];
if($_SESSION['usersessionid']=="")
{
	header('location:user_login.php');
}
    
    for($i=0;$i<count($_POST['cart_id']);$i++)
    {
            $cart_id=$_POST['cart_id'][$i];
			$qty=$_POST['qty'][$i];
			$product_id=$_POST['product_id'][$i];
			
			if($qty >=1)
			{
			    $link->where("cart_id",$cart_id);
    			$sql=$link->update("carttb",array("qty"=>$qty));
    			if($sql)
    			{
    			    echo "";
    			}
    			else
    			{
    			    echo "Err";
    			}    
			}
			
    }
?>