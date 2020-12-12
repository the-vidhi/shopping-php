	<?php
	include 'connection.php';
	
	$name=$_POST['pname'];
	
		foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name){
			$temp = $_FILES["files"]["tmp_name"][$key];
			$iname = $_FILES["files"]["name"][$key];
			$x=$link->insert('product_imagetb',array('product_id'=>$name));
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
							header('location:image_show.php');
						}
					
				}
			}	
		}
		
	
?>