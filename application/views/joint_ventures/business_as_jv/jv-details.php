<div id="gtco-features">
    <div class="container">
      <div class="row">
        <div class="col-md-12 gtco-heading ">
          <div class="p-15">
          <h2>List your Business as Joint Ventures </h2>
          <div class="row">
              <div class="col-sm-3">
                <div class="feat-c-box">
                  <ul>
                    <!--<li><a href="list-your-business-user-profile-jv" class="active-page">User Profile</a></li>-->
                    <li><a href="list-your-business-basic-information-jv">Basic Information</a></li>
                    <li><a href="list-your-business-description-jv">Business Description</a></li>
                    <li><a href="list-your-business-additional-details-jv">Additional Details</a></li>
					<li><a href="list-your-business-jv-details-jv" class="active-page">JV-details</a></li>
                    <li><a href="list-your-business-additional-details-uploads-jv">Uploads</a></li>
                    <li><a href="list-your-business-package-details-jv">Package Details</a></li>
                    <li><a href="list-your-business-additional-services-jv">Additional Services</a></li>
                    <li><a href="list-your-business-payment-jv">Payment</a></li>
                    <li><a href="list-your-business-preview-jv">Preview</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-9 r-bgc">
			  <form name="lb_uprof" action="jv_userregister" method="post" data-toggle="validator" role="form" class="was-validated">
                <div class="form-c-box">
					<div class="areu">
                  <div class="col-sm-12">
                  <div class="col-sm-4">
                    <div class="form-group">
                    <label for="">Purpose of JV<span style="color: #ec0102;">*</span></label>
					<input type="hidden" name="frm_id" id="frm_id" value="<?php echo $sellJvDetails[0]['form_id'];?>" />
                   				
			<select onchange="getPropId(this.id, this)" class="form-control" id="purposeJv" name="purposeJv" data-error="Purpose of JV required" required> 
			<option value="">Select</option>
			<option <?php if('Technical' == $sellJvDetails[0]['purpose_jv']){echo 'selected=selected';}?>>Technical</option>
			<option <?php if('Financial' == $sellJvDetails[0]['purpose_jv']){echo 'selected=selected';}?>>Financial</option>
			<option <?php if('Others' == $sellJvDetails[0]['purpose_jv']){echo 'selected=selected';}?>>Others</option>
			
			</select>
					
					<div class="help-block with-errors"></div>
                    </div>
                  </div>
                   <div class="col-sm-4 Pjvother" style="display:none;">
                    <div class="form-group">
                    <label for="">Others<span style="color: #ec0102;">*</span></label>
                    <input type="text" id="purpose_jv_other" name="purpose_jv_other" class="form-control" value="<?php echo $sellJvDetails[0]['purpose_jv_other'];?>" placeholder="Purpose of JV" data-error="Other Purpose of JV required" required >
					<div class="help-block with-errors"></div>
					<div class="purposeJVother" style="display:none;color:#EC0102;">Other Purpose of JV Required</div>
                    </div>
                  </div>
                  <div class="col-sm-4 nature" style="display:none;">
                    <div class="form-group">
                    <label for="">Nature of Technical JV</label>
                    <input type="text" id="natureJv" name="natureJv" class="form-control" value="<?php echo $sellJvDetails[0]['nature_jv'];?>" placeholder="Nature of Technical JV" >
					<div class="help-block with-errors"></div>
                    </div>
                  </div>
                </div>                 
                    <div class="col-sm-12">
                    <div class="row">
				        <div class="col-sm-6">
                        <div class="form-group">
                        <label for="latest_revenu">Previous Investment<span style="color: #ec0102;">*</span></label>
						<div class="input-group">
									<div class="input-group-addon currency" style="width: 58px;">
										<select  class="form-control" id="previous_investment_currency" name="previous_investment_currency" onChange="resetPriceUnit('#latest_revenu_unit',this.value)" > 
<?php
											foreach( unserialize(PRICE_UNITS) as $priceUnitValue=>$priceUnitName ){
?>
												<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellJvDetails[0]['previous_investment_currency']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
											}
?>
										</select>
									</div>
										<input type="text" class="form-control" pattern="[0-9]{1}[0-9]*" id="previous_investment" name="previous_investment" placeholder="Amount" value="<?php echo $sellJvDetails[0]['prev_investment'];?>"  style="width: 78px; height: 39px;" data-error="Previous Investment required" required>
										<div class="input-group-addon currency" style="align: left; float: left; width: 120px; height: 39px; ">
											<select class="form-control" id="previous_investment_unit" name="previous_investment_unit" align="left"> 
<?php
													if($sellJvDetails[0]['previous_investment_unit']=='INR'){
													foreach( unserialize(PRICE_UNITS_INR) as $priceUnitValue=>$priceUnitName ){
														//echo $buyBusinessProfile[0]['investment_min'];
													?>
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellJvDetails[0]['previous_investment_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
													}
													}
													else if($sellJvDetails[0]['previous_investment_unit']==''){
														foreach( unserialize(PRICE_UNITS_INR) as $priceUnitValue=>$priceUnitName ){			
														//echo $buyBusinessProfile[0]['investment_min'];
														
														//print_r($priceUnitName);
													?>
														<option value="<?php echo $priceUnitName;?>"><?php echo $priceUnitName;?></option>
<?php
													}
												}
													
													else{
														foreach( unserialize(PRICE_UNITS_USD) as $priceUnitValue=>$priceUnitName ){
														//echo $buyBusinessProfile[0]['investment_min'];
													?>
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellJvDetails[0]['previous_investment_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
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
				 
				  
                     <div class="col-sm-12">               
                     <!--<div class="col-sm-4">
                    <div class="form-group">
                    <label for="">Investment Required<span style="color: #ec0102;">*</span></label>
					<select class="form-control" id="investment_required" name="investment_required" data-error="Investment required" required> 
<?php
                            foreach( unserialize(PRICES) as $priceUnitValue=>$priceUnitName ){
?>
			    <option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellJvDetails[0]['reqd_investment']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
                            }
?>
                          </select>
						  <div class="help-block with-errors"></div>
                   
                    </div>
                  </div>-->
				                  <div class="col-sm-4 padd0">
                        <div class="form-group">
                        <label for="ask_price">Investment Required<span style="color: #ec0102;">*</span></label>
								<div class="input-group">
									<div class="input-group-addon currency" style="width: 58px;">
										<select class="form-control" id="ask_price_currency" name="investment_required_currency" onChange="resetPriceUnit('#ask_price_unit',this.value)" > 
<?php
											foreach( unserialize(PRICE_UNITS) as $priceUnitValue=>$priceUnitName ){
?>
												<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellJvDetails[0]['investment_required_currency']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
											}
?>
										</select>
										
									</div>
										<input type="text" class="form-control" pattern="[1-9]{1}[0-9]*" id="ask_price" name="investment_required" placeholder="Amount" value="<?php if($sellJvDetails[0]['reqd_investment']>0){echo $sellJvDetails[0]['reqd_investment'];};?>" onkeyup="resetPriceRange('#price_range_type',this.value)" style="width: 78px; height: 39px;" data-error="Asking Price required" required>
										<div class="input-group-addon currency" style="align: left; float: left; width: 115px; height: 39px; ">
											<select class="form-control" id="ask_price_unit" name="investment_required_unit" align="left" onchange="resetPriceRange('#price_range_type',this.value)"> 
<?php
													if($sellJvDetails[0]['investment_required_currency']=='INR'){
														foreach( unserialize(PRICE_UNITS_INR) as $priceUnitValue=>$priceUnitName ){			
														//echo $buyBusinessProfile[0]['investment_min'];
														
														//print_r($priceUnitName);
													?>
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellJvDetails[0]['investment_required_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
													}
												}
												else if($sellJvDetails[0]['investment_required_currency']==''){
														foreach( unserialize(PRICE_UNITS_INR) as $priceUnitValue=>$priceUnitName ){			
														//echo $buyBusinessProfile[0]['investment_min'];
														
														//print_r($priceUnitName);
													?>
														<option value="<?php echo $priceUnitName;?>"><?php echo $priceUnitName;?></option>
<?php
													}
												}
												else{
														foreach( unserialize(PRICE_UNITS_USD) as $priceUnitValue=>$priceUnitName ){			
														//echo $buyBusinessProfile[0]['investment_min'];
													?>
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellJvDetails[0]['investment_required_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
													}
														
													}	
?>
											</select>
										</div>
										
								</div>
						<div class="chk_err_min" style="color: #a94442;"></div>		
						  <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-sm-4" style="padding-right: 6px;">
                        <div class="form-group">
                        <label for="price_range">Invest range<span style="color: #ec0102;">*</span></label>
                        <div class="input-group">
                          <div class="input-group-addon currency" style="border-top-right-radius: 6px;    border-bottom-right-radius: 6px;">
                          <select style="height: 38px; border-top-right-radius: 6px;    border-bottom-right-radius: 6px;" class="form-control" id="price_range_type" name="investment_range" data-error="Price Range required" required>
<?php
                            foreach( unserialize(PRICES) as $priceUnitValue=>$priceUnitName ){
?>
                            <option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellJvDetails[0]['invest_range']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
                            }
?>
                          </select>
						  
                          </div>
                          <input type="hidden" class="form-control" placeholder="" id="price_range" name="price_range">
                        </div>
						<div class="help-block with-errors"></div>
                        </div>
                      </div>
                                    
                  
                   </div>
					<div class="col-sm-12">	
					 <div class="col-sm-4">
                    <div class="form-group">
                    <label for="">Role of New Investor<span style="color: #ec0102;">*</span></label>
                    <select id="invester_role" name="role" class="form-control" data-error="Role required" required> 
					<option value="">Select</option>
                          <option <?php if('Active' == $sellJvDetails[0]['role_new_investo']){echo 'selected=selected';}?>>Active</option>
                          <option <?php if('Silent' == $sellJvDetails[0]['role_new_investo']){echo 'selected=selected';}?>>Silent</option>
                          <option <?php if('Debt' == $sellJvDetails[0]['role_new_investo']){echo 'selected=selected';}?>>Debt</option>
                          <option <?php if('Others' == $sellJvDetails[0]['role_new_investo']){echo 'selected=selected';}?>>Others</option>
                        </select>
						<div class="help-block with-errors"></div>
						
						<input type="text" id="invester_role_other" name="role_new_invest_other" class="form-control invester_role_other" placeholder="other role of investor" value="<?php echo $sellJvDetails[0]['role_new_invest_other'];?>" style="display:none;"/>
						<div class="bstatusmsg" style="display:none;color:#EC0102;">Other role of investor Required</div>
						
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                    <label for="">Proposed Deal Structure</label>
                    <input type="text" id="purpose_deal" name="purpose_deal" class="form-control" value="<?php echo $sellJvDetails[0]['proposed_deal'];?>" placeholder="Proposed Deal Structure">
					<div class="help-block with-errors"></div>
                    </div>
                  </div>
                   </div>                 
                                    
                                    
                  
                  
                  
                  <div class="col-sm-4" ></div>
                  <div class="col-sm-3"></div>
				  
				  
				  
				  
                  <div class="col-sm-5" style="padding-right:0">
					<input type="hidden" name="frm_submit" value="sb_jv" />
                    <button type="submit" class="savebtn cstatusRole">Save &amp; Continue</button>
                    <button type="submit" class="savebtn">Back</button>
                  </div>
                  
                </div>
              </div>
              
              
              
          </div>    
              
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!--end section-->
