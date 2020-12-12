<?php

$paypalUrl='https://www.sandbox.paypal.com/cgi-bin/webscr';
			$paypalId='vidhieeepatel1645@gmail.com';
			?>
			
			<form action="<?php echo $paypalUrl; ?>" method="post" name="frmPayPal1">
					<div class="panel price panel-red">
						<input type="hidden" name="business" value="<?php echo $paypalId;?>">
						<input type="hidden" name="cmd" value="_xclick">
						<input type="hidden" name="amount" value="<?php echo $_GET['total'];?>">
						<input type="hidden" name="no_shipping" value="1">
						<input type="hidden" name="currency_code" value="INR">
						<div class="panel-footer">
							<button style="display:none;" class="btn btn-lg btn-block btn-danger" href="#" id="pay">PAY NOW!</button>
						</div>
					</div>
    			</form>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
			<script>
			window.onload=function(){
			  document.getElementById("pay").click();
			};
			</script>
				