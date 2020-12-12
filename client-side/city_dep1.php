<?php 
        include 'connection.php';
        $v=$_POST["state"];
        $selectcity = $link->rawQuery("select * from citytb where state_id=?",array($v));
		
		if($link->count > 0) {
			foreach($selectcity as $s1)
			{ ?>

				<option value="<?php echo $s1['city_id']; ?>"><?php echo $s1['city_name']; ?></option>
					<?php
			}
		}
   ?>