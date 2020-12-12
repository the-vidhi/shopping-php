<div class="form-row mb--30">
                                                    <div class="form__group col-md-6">
                                                        <label for="select_state" class="form__label">State </label>
                                                        <select class="country_select" id="select_state" name="select_state">
														
																			<option>---Select State---</option>
															<?php
															include 'connection.php';
															$selectstate = $link->rawQuery("select * from statetb");
															if($link->count > 0) {
																foreach($selectstate as $s1)
																{ ?>

																	<option value="<?php echo $s1['state_id']; ?>"
																	><?php echo $s1['state_name']; ?></option>
																		<?php
																}
															} 
															?>
														</select>
															<span id="s5" style="color:red;"></span>
                                                    </div>
													<div class="form__group col-md-6">
                                                        <label for="select_city" class="form__label">City </label>
                                                        <select class="country_select" id="select_city" name="select_city">
                                                            <option>---Select City---</option>
																
														</select>
														<span id="s6" style="color:red;"></span>
                                                    </div>
													
                                                </div>
												
												 <script src="assets/js/jquery.min.js"></script>
	
	<script type="text/javascript">
		 $('#select_state').on('change',function(){
		   var stateid=$(this).val();
		  alert(stateid);
		   if(stateid)
		   {   
		// var xhttp=new XMLHttpRequest();
		// xhttp.onreadystatechange=function()
		// {
			// if(this.readyState==4 || this.status==200)
			// {
				// document.getElementById("select_city").innerHTML=this.responseText;
			// }
		// };
		// xhttp.open("GET",val,true);
		// xhttp.send();
		$.ajax({
				   type:'POST',
				   url:'city_dep.php',
				   data:'state='+stateid,
				   success:function(html){
					   alert(html);
				   $('#select_city').html(html);
				   }
			   });
		   }
		   else
		   {
			  $('#select_state').html('<option value="">---Select---</option>'); 
		   }
	});
</script>