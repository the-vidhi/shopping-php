<?php
include 'connection.php';
/* if(@$_POST['btn-add'])
{
	$filename=$_FILES['product_image']['name'];
	$tmpname=$_FILES['product_image']['tmp_name'];
	$filetype=$_FILES['product_image']['type'];

	for($i=0;$i<=count($tmpname)-1;$i++)
	{
		$name=addcslashes($filename[$i]);
		$tmp=addcslashes(file_get_contents($tmpname[$i]));
		$sql=$link->insert("product_imagetb",array('product_image'=>$tmp));
		
	}
}
 */
 
	
		//$name=$_POST['pname'];
		//$qry = $link->rawQuery("select * from producttb where product_id = ?",array($i));
		
			//foreach($qry as $q)
			
			$productid = $_GET['pid'];
			foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name){
			$temp = $_FILES["files"]["tmp_name"][$key];
			$iname = $_FILES["files"]["name"][$key];
			$x=$link->insert('product_imagetb',array('product_id'=>$productid));
			if($x)
			{
				$ext = pathinfo($iname, PATHINFO_EXTENSION);
				$y="product_".$x.".".$ext;
			 
				if(empty($temp))
				{
					break;
				}
				 
				if(move_uploaded_file($temp,"../product_images/".$y))
				{
					
					$link->where('image_id',$x);
					$z=$link->update('product_imagetb',array('product_image'=>"../product_images/".$y));
					if($z)
						{
							header('location:vendor_product_list.php');
						}
					
				}
			}	
		
			
		
		}
	
	
?>