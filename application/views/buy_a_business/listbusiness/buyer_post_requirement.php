  
  <div id="gtco-features">
		<div class="container">
			<div class="row">
				<div class="col-md-12 gtco-heading">
					<div class="p-15">
					<h2>Buyer</h2>
					<div class="row">
							<div class="col-sm-3">
								<div class="feat-c-box">
									<ul>
										<li><a href="buy-a-business" class="active-page">Personal Detail</a></li>
										<li><a href="buy-a-business-profile">Business Profile</a></li>
										<li><a href="buy-a-business-post-requirement">Post your Requirement</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-9 r-bgc">
								<form name="lb_uprof" action="buy-userregister" method="post" data-toggle="validator" role="form" class="was-validated">
								<div class="form-c-box">
									<div class="col-sm-12">
										<div class="form-group">
										<label for="">Key Requirement</label>
										<input type="hidden" name="frm_id" id="frm_id" value="<?php echo $buyBusinessProfile[0]['form_id'];?>" />
										<input type="text" id="key_requirement" name="key_requirement" class="form-control" value="<?php echo $buyBusinessProfile[0]['key_requirement'];?>" placeholder="Business Heading" data-error="Key Requirement Required" required>
										</div>
									</div>
									
									
									<div class="col-sm-6">
										<div class="form-group">
										<label for="">Listing Category </label>
										<select class="form-control" id="listing_category" name="listing_category"> 
<?php
                            foreach( unserialize(CATEGORY_lISTING) as $priceUnitValue=>$priceUnitName ){
?>
			    <option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $buyBusinessProfile[0]['buy_listing_category']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
                            }
?>
																								
												</select>
										</div>
									</div>
									
									
										<div class="col-sm-6">
										<div class="form-group">
										<label for="">Location </label>
										  <select class="form-control" id="location" name="location"> 
<?php
                            foreach( unserialize(LOCATIONS) as $priceUnitValue=>$priceUnitName ){
?>
			    <option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $buyBusinessProfile[0]['buy_location']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
                            }
?>
																								
												</select>
										</div>
									</div>
								
								
									<div class="areu">
										<p>Investment range </p>
										    <div class="col-sm-6">
											  <div class="form-group">
												<label for="">Min</label>
												<div class="input-group">
												  <div class="input-group-addon currency">
													<select class="form-control" id="req_investment_min" name="req_investment_min"> 
<?php
                            foreach( unserialize(PRICES) as $priceUnitValue=>$priceUnitName ){
?>
			    <option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $buyBusinessProfile[0]['req_investment_min']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
                            }
?>
																								
												</select>
												  </div>
												  <!--<input type="text" class="form-control" placeholder="0000000000">-->
												</div>
											  </div>
											</div>
											<div class="col-sm-6">
											  <div class="form-group">
												<label for="">Max</label>
												<div class="input-group">
												  <div class="input-group-addon currency">
													<select class="form-control" id="req_investment_max" name="req_investment_max"> 
<?php
                            foreach( unserialize(PRICES) as $priceUnitValue=>$priceUnitName ){
?>
			    <option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $buyBusinessProfile[0]['req_investment_max']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
                            }
?>
																								
												</select>
												  </div>
												  <!--<input type="text" class="form-control" placeholder="0000000000">-->
												</div>
											  </div>
											</div>
									</div>
									
									<div class="col-sm-4"></div>
									<div class="col-sm-3">
										
									</div>
									<div class="col-sm-5" style="padding-right:0">
									<input type="hidden" name="frm_submit" value="bb_pr" />
										<button type="submit" class="savebtn">Save</button>
										<button type="submit" class="savebtn">Back</button>
									</div>
									
								</div>
								</form>
							</div>
							
							
							
					</div>		
							
					</div>
				</div>
			</div>
		</div>
	</div>
  
  <!--end section-->
