<?php
include 'connection.php';
if(isset($_POST['action'])){
	$sql = "select * from producttb p ,agetb a,product_categorytb c,brandtb b ,vendor_reg v where p.vendor_id = v.vendor_id and v.is_active = 1 and a.age_id=p.age_id and p.status = 'Available' and b.brand_id=p.brand_id and p.category_id=c.category_id ";

	if(isset($_POST['brand'])){
		$brand = implode("','", $_POST['brand']);
		$sql .="and brand_name in('".$brand."')";
	}
	if(isset($_POST['category'])){
		$category = implode("','", $_POST['category']);
		$sql .="and category_name in('".$category."')";
	}
	 
	if(isset($_POST['age'])){
		$age = implode("','", $_POST['age']);
		$sql .="and age_ratio in('".$age."')";
	}
	if(isset($_POST["range"]))
	 {
		 $myprice = $_POST["range"] ;
		 //$range = implode("','", $_POST['range']);
		$sql .="and product_price <=".$myprice ;
	 }
	
	
	$result = $link->rawQuery($sql);
	$listresult = $link->rawQuery($sql);
	$output = '';
	$list ='';
	if($link->count > 0 )
	{
		foreach($result as $row)
	{
		$output .='
				<div class="col-xl-4 col-md-6">
			<!-- Product Box Start -->
			<div class="product-box variable-product">
				<div class="product-box__meta">
					<a href="" class="product-box__category">'.$row['category_name'].'</a>
				</div>
				<div class="product-box__image">
					<img src="'.$row['image'].'" alt="product image" class="primary_image">
					<img src="'. $row['image'].'" alt="product image" class="secondary_image">
					<a href="single_product.php" class="quick-view"> <i class="fa fa-eye"></i> </a>
				</div>
				<div class="product-box__footer">
					<div class="product-box__desc">
						<a href="single-product.php" class="product-box__title">'.$row['product_name'].'</a>
						<p class="product-box__price">
							<span class="sale-price">Rs.'.number_format($row['product_price']).'/-</span>
							
						</p>
					</div>
					<form method="post">
					<div class="product-box__links">
						<input type="hidden" name="hiddeen_id" value="'.$row['product_id'].'">
						<input type="submit" class="btn add-to-cart btn-style-2" name="AddToCart" value="Add To Cart">
					</div>
					</form>
				</div>
			</div>
			<!-- Product Box End -->                        
		</div>
		
		
			
			';		
	}
	}
	else if($link->count > 0)
			{
				foreach($result as $row )
			{
				$list .='
			<div class="product-box product-box--list variable-product">
											
				<div class="row">
					<div class="col-md-4">
						<div class="product-box__image">
							<img src="'.$row['image'].'" alt="product image" class="primary_image">
							<img src="'.$row['image'].'" alt="product image" class="secondary_image">
							<a href="single_product.php" class="quick-view"> <i class="fa fa-eye"></i> </a>
						</div>
					</div>
					<div class="col-md-8">
						<div class="product-box__meta">
								<a href="" class="product-box__category">'.$row['category_name'].'</a>
							</div>
						<div class="product-box__desc">
							<a href="single_product.php" class="product-box__title">'.$row['product_name'].'</</a>
							<p class="product-box__price">
								<span class="sale-price">Rs.'. number_format($row['product_price']).'/-</span>
							   
							</p>
							<p class="product-box__short-desc">'.$row['product_description'].'</p>
							<form method="post">
							<div class="product-box__links">
								<input type="hidden" name="hiddeen_id" value="'.$row['product_id'].'">
								<input type="submit" class="btn add-to-cart btn-style-2" name="AddToCart" value="Add To Cart">
							</div>
							</form>
						</div>
					</div>
				</div>
				
			</div>
			';
			}
			}
	
	else {
		$output = "There are no Products available ";
	}
	echo $output;
}
?>
<?php
if(@$_POST['AddToCart'])
{
	if(!@$_SESSION)
	{
		session_start();
	}
	$sessionid=$_SESSION['usersessionid'];
	if($_SESSION['usersessionid']=="")
	{
		header('location:user_login.php');
	}
	else
	{
		$prid=$_POST['hiddeen_id'];
		//$pqty = $_POST['qty'];
		$s = $link->rawQuery("select * from carttb where product_id=$prid and user_id=$sessionid");
		if($link->count > 0)
		{
			foreach($s as $s1)
			{
				$cid = $s1['cart_id'];
				$product_qty = $s1['qty'];
				$proid = $s1['product_id'];
				$user_id = $s1['user_id'];
				//$order_id = $s1['order_id'];
				//$qtyy = $product_qty+1;
				if($proid == $prid)
				{
					$link->where("cart_id",$cid);
					$i=$link->update("carttb",array("qty"=>1));
					if($i)
					{
						header('location:'.$_SERVER['REQUEST_URI']);
					}
				}				
			}
		}
		else
		{
			$p=$link->insert("carttb",array("product_id"=>$prid,"user_id"=>$sessionid,"qty"=>1));
			if($p)
			{
				header('location:'.$_SERVER['REQUEST_URI']);
			}
		}
	}
}
?>