  
  <div id="gtco-features">
		<div class="container">
			<div class="row">
				<div class="col-md-12 gtco-heading">
					<div class="p-15">
					<h2>Real Estate</h2>
					<div class="row">
							<div class="col-sm-3">
								<div class="feat-c-box">
									<ul>
										<li><a href="real-estate-basic-information" >Property Information</a></li>
										<li><a href="real-estate-tenancy-description" >Tenancy Description</a></li>
										<li><a href="real-estate-tenancy-details" class="active-page">Tenancy Details</a></li>
										<li><a href="re-business-preview">Preview</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-9 r-bgc">
							 <form name="lb_uprof" action="realestate_userregister" method="post" data-toggle="validator" role="form" class="was-validated">
								<div class="form-c-box">
								<div class="areu">
									<div class="col-sm-12">
									<div class="col-sm-8">
										<div class="form-group">
										<label for="">Features/Facilities</label>
										<input type="hidden" name="frm_id" id="frm_id" value="<?php echo $sellBusinessDescription[0]['form_id'];?>" />
										<textarea id="features" name="features" class="form-control" placeholder="Security, Vallet Parking etc" rows="3"  data-error="Features required" required><?php echo $sellBusinessDescription[0]['features'];?></textarea>
										<div class="help-block with-errors"></div>
									    </div>
									</div>
									</div>
									
									<div class="col-sm-12">
									<div class="col-sm-8">
										<div class="form-group">
										<label for="">Location Advantage</label>
										
										<textarea id="location_advantages" name="location_advantages" class="form-control" placeholder="Near Metro, Airport etc" rows="3"  data-error="Location Advantages required" required><?php echo $sellBusinessDescription[0]['location_advantages'];?></textarea>
										<div class="help-block with-errors"></div>
									    </div>
									</div>
									</div>
									
									<div class="col-sm-12">
									<div class="col-sm-8">
										<div class="form-group">
										<label for="">Reason for Sale</label>
										
										<textarea id="reason_sale" name="reason_sale" class="form-control" placeholder="" rows="3"  data-error="Reason for Sale required" required><?php echo $sellBusinessDescription[0]['reason_sale'];?></textarea>
										<div class="help-block with-errors"></div>
									    </div>
									</div>
									</div>
									
									<div class="col-sm-12">
										  <div class="col-sm-3">
												<div class="form-group">
													<label for="">Expected ROI % At Present</label>
													<input type="text" id="roi_present" name="roi_present" class="form-control" placeholder="%" value="<?php echo $sellBusinessDescription[0]['roi_present'];?>"  data-error="ROI Present required" required>
													<div class="help-block with-errors"></div>
												</div>
											</div>
									</div>		
									
									
									<div class="col-sm-12">
										  <div class="col-sm-3">
												<div class="form-group">
													<label for="">Expected ROI % After Escalation</label>
													<input type="text" id="roi_escalation" name="roi_escalation" class="form-control" placeholder="%" value="<?php echo $sellBusinessDescription[0]['roi_escalation'];?>"  data-error="ROI Escalation required" required>
													<div class="help-block with-errors"></div>
												</div>
											</div>
									</div>
									
									
									<div class="col-sm-12">
										  <div class="col-sm-3">
												<div class="form-group">
													<label for="">Other Income (If Any):</label>
													<input type="text" id="other_income" name="other_income" class="form-control" placeholder="" value="<?php echo $sellBusinessDescription[0]['other_income'];?>"  data-error="Other Income required" required>
													<div class="help-block with-errors"></div>
												</div>
											</div>
									</div>
									
						<div class="col-sm-12">			
						<div class="col-sm-6" style="padding-left: 0px;">
                        <div class="form-group">
                        <label for="latest_revenu">Asking Price<span style="color: #ec0102;">*</span></label>
						<div class="input-group">
									<div class="input-group-addon currency" style="width: 58px;">
										<select  class="form-control" id="price_currency" name="price_currency" onChange="resetPriceUnit('#price_unit',this.value)" > 
<?php
											foreach( unserialize(PRICE_UNITS) as $priceUnitValue=>$priceUnitName ){
?>
												<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessDescription[0]['price_currency']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
											}
?>
										</select>
									</div>
										<input type="text" class="form-control" pattern="[1-9]{1}[0-9]*" id="price_value" name="price_value" placeholder="Amount" value="<?php echo $sellBusinessDescription[0]['price_value'];?>"  style="width: 78px; height: 39px;" data-error="Asking Price required" required>
										<div class="input-group-addon currency" style="align: left; float: left; width: 120px; height: 39px; ">
											<select class="form-control" id="price_unit" name="price_unit" align="left"> 
<?php
													if($sellBusinessDescription[0]['price_unit']=='INR'){
													foreach( unserialize(PRICE_UNITS_INR) as $priceUnitValue=>$priceUnitName ){
														//echo $buyBusinessProfile[0]['investment_min'];
													?>
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessDescription[0]['price_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
													}}else{
														foreach( unserialize(PRICE_UNITS_USD) as $priceUnitValue=>$priceUnitName ){
														//echo $buyBusinessProfile[0]['investment_min'];
													?>
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessDescription[0]['price_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
													}
													}	
?>
											</select>
										</div>
										
									</div>
								<div class="chk_err_max" style="color: #a94442;"></div>		
								<div class="help-block with-errors"></div>
                        
								</div>
								</div>
								</div>
								</div>	
									
																	
										
									
									<div class="col-sm-4"></div>
									<div class="col-sm-3">
										
									</div>
									<div class="col-sm-5" style="padding-right:0">
										 <input type="hidden" name="frm_submit" value="sb_td" />
										<button type="submit" class="savebtn">Save &amp; Continue</button>
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
 