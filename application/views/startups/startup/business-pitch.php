<?php
// var_dump($sellBusinessDescription);
?>
<div class="clearfix"></div>  
  <div id="gtco-features">
    <div class="container">
      <div class="row">
        <div class="col-md-12 gtco-heading ">
          <div class="p-15">
          <h2>Register as a Start-Up</h2>
          <div class="row">
              <div class="col-sm-3">
                <div class="feat-c-box">
                  <ul>
                   <!-- <li><a href="start-up-user-profile" >User Profile</a></li>-->
                    <li><a  href="start-up-basic-information">Basic Information</a></li>
                    <li><a  href="start-up-business-pitch" class="active-page">Business Pitch</a></li>
                    <li><a href="start-up-deal-details">Deal Details</a></li>
                    <li><a href="start-up-additional-details-uploads" >Uploads</a></li>
                    <li><a href="start-up-package-details">Package Details</a></li>
                    <li><a href="start-up-additional-services">Additional Services</a></li>
                    <!--<li><a href="start-up-payment">Payment</a></li>-->
                    <li><a href="start-up-preview">Preview</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-9 r-bgc">
                <form name="lb_uprof" action="startup_userregister" method="post" data-toggle="validator" role="form" class="was-validated">
                <div class="form-c-box">
                  
                  <div class="areu">
                    <p>No. of Employees</p>
						<div class="col-sm-12">
						<input type="hidden" name="frm_id" id="frm_id" value="<?php echo $sellBusinessDescription[0]['form_id'];?>" />
                        <!--<div class="col-sm-4">
                        <div class="form-group">
                        <label for="noemp_par">Permanent<span style="color: #ec0102;">*</span></label>
						
                        
			<input type="text"  placeholder="" id="noemp_par" name="noemp_par" value="<?php 
			if($sellBusinessDescription[0]['permanent_employee']>0){
				
			echo $sellBusinessDescription[0]['permanent_employee'];	
			}else{
			
			echo '';
			
			}?>" class="par_numbers form-control" onkeyup="sumEmployee();" data-error="Permanent required" required>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                        <label for="noemp_con">Contractual<span style="color: #ec0102;">*</span></label>
			<input type="text" class="con_numbers form-control" placeholder="" id="noemp_con" name="noemp_con" value="<?php 
			if($sellBusinessDescription[0]['contractual_employee']>0){
				
			echo $sellBusinessDescription[0]['contractual_employee'];	
			}else{
			
			echo '';
			
			}?>" onkeyup="sumEmployee();" data-error="Contractual required" required>
                        </div>
                      </div>-->
                      <div class="col-sm-4">
                        <div class="form-group">
                        <label for="noemp_tot">Total No. Of Team Members<span style="color: #ec0102;">*</span></label>
			<input type="text" class="form-control" placeholder="" id="noemp_tot" name="noemp_tot" value="<?php 
			if($sellBusinessDescription[0]['total_employee']>0){
				
			echo $sellBusinessDescription[0]['total_employee'];	
			}else{
			
			echo '';
			
			}?>" data-error="Total required" required>
                        </div>
                      </div>
					  </div>
					  <div class="col-sm-12">
                      <div class="col-sm-4">
                      <div class="form-group">
                        <label for="bus_reloc">Business Re-locatable<span style="color: #ec0102;">*</span></label>
                        <Select class="form-control" id="bus_reloc" name="bus_reloc" data-error="Business Re-locatable required" required>
                          <option value="">Select</option>
<?php
                          foreach( unserialize(BUSINESS_RE_LOCATABLE) as $reLocatableValue => $reLocatableName ){
?>
                          <option value="<?php echo $reLocatableValue;?>" <?php if($reLocatableValue == $sellBusinessDescription[0]['business_re_locatable']){echo 'selected=selected';}?>><?php echo $reLocatableName;?></option>
<?php
                          }
?>
                        </select>
                        </div>
                      </div>
                      <div class="col-sm-4">
                      <div class="form-group">
                        <label for="listed_by">Business Listed By<span style="color: #ec0102;">*</span></label>
                        <Select class="form-control" id="listed_by" name="listed_by" data-error="Business Listed by required" required>
                          <option value="">Select</option>
<?php
			  foreach( unserialize(BUSINESS_LISTED_BY) as $listedByValue => $listedByName ){
?>
                          <option value="<?php echo $listedByValue;?>" <?php if($listedByValue == $sellBusinessDescription[0]['listed_by']){echo 'selected=selected';}?>><?php echo $listedByName;?></option>
<?php
			  }
?>
                        </select>
                        </div>
                      </div>
                      <div class="col-sm-3"></div>
					  </div>
                  </div>
				  
				                    <div class="areu">
				  
                    <p>Business Pricing</p>
                        <div class="col-sm-4 padd0">
                        <div class="form-group">
                        <label for="ask_price">Previous Investment Infused<span style="color: #ec0102;">*</span></label>
								<div class="input-group">
									<div class="input-group-addon currency" style="width: 58px;">
										<select class="form-control" id="pinv_Infused_currency" name="pinv_Infused_currency" onChange="resetPriceUnit('#ask_price_unit',this.value)" > 
<?php
											foreach( unserialize(PRICE_UNITS) as $priceUnitValue=>$priceUnitName ){
?>
												<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessDescription[0]['pinv_Infused_currency']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
											}
?>
										</select>
										
									</div>
										<input type="text" class="form-control" pattern="[1-9]{1}[0-9]*" id="pinv_Infused_price" name="pinv_Infused_price" placeholder="Amount" value="<?php 
										if($sellBusinessDescription[0]['pinv_Infused_price']!='0'){
										echo $sellBusinessDescription[0]['pinv_Infused_price'];
										}else{ echo '';}
										?>" onkeyup="resetPriceRange('#price_range_type',this.value)" style="width: 78px; height: 39px;" data-error="Previous Investment Infused required" required>
										<div class="input-group-addon currency" style="align: left; float: left; width: 115px; height: 39px; ">
											<select class="form-control" id="pinv_Infused_unit" name="pinv_Infused_unit" align="left" onchange="resetPriceRange('#price_range_type',this.value)"> 
<?php
													if($sellBusinessDescription[0]['pinv_Infused_unit']=='INR'){
														foreach( unserialize(PRICE_UNITS_INR) as $priceUnitValue=>$priceUnitName ){			
														//echo $buyBusinessProfile[0]['investment_min'];
														
														//print_r($priceUnitName);
													?>
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessDescription[0]['pinv_Infused_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
													}
												}
												else if($sellBusinessDescription[0]['pinv_Infused_unit']==''){
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
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessDescription[0]['pinv_Infused_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
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
         
                      <div class="col-sm-4" style="padding-right: 0px;">
                        <div class="form-group">
                        <label for="latest_revenu">Investment Required<span style="color: #ec0102;">*</span></label>
						<div class="input-group">
									<div class="input-group-addon currency" style="width: 58px;">
										<select  class="form-control" id="investment_required_currency" name="investment_required_currency" onChange="resetPriceUnit('#latest_revenu_unit',this.value)" > 
<?php
											foreach( unserialize(PRICE_UNITS) as $priceUnitValue=>$priceUnitName ){
?>
												<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessDescription[0]['investment_required_currency']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
											}
?>
										</select>
									</div>
										<input type="text" class="form-control" pattern="[0-9]{1}[0-9]*" id="investment_required_price" name="investment_required_price" placeholder="Amount" value="<?php echo $sellBusinessDescription[0]['investment_required_price'];?>"  style="width: 78px; height: 39px;" data-error="Investment Required Price required" required>
										<div class="input-group-addon currency" style="align: left; float: left; width: 120px; height: 39px; ">
											<select class="form-control" id="investment_required_unit" name="investment_required_unit" align="left"> 
<?php
													if($sellBusinessDescription[0]['investment_required_unit']=='INR'){
													foreach( unserialize(PRICE_UNITS_INR) as $priceUnitValue=>$priceUnitName ){
														//echo $buyBusinessProfile[0]['investment_min'];
													?>
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessDescription[0]['investment_required_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
													}
													}
													else if($sellBusinessDescription[0]['investment_required_unit']==''){
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
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessDescription[0]['investment_required_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
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
				 
					<div class="areu">
					 <div class="col-sm-12">
                        <div class="form-group">
                        <label for="noemp_tot">Assets(If any)</label>
						
			<textarea id="assets_if_any" name="assets_if_any" class="form-control" placeholder="name of all the assets" rows="2"><?php echo $sellBusinessDescription[0]['assets_if_any'];?></textarea>
			
                        </div>
                      </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                    <label for="">Summarize your Idea / Business<span style="color: #ec0102;">*</span></label>
                    <textarea id="summarize_idea" name="summarize_idea" class="form-control" placeholder="Business overview, working, etc in maximum of 30 Words" rows="2" data-error="Please fill above option" required><?php echo $sellBusinessDescription[0]['summarize_idea'];?></textarea>
					<div class="help-block with-errors"></div>
                    </div>
                  </div>
				  </div>
				  <div class="areu">
                  <div class="col-sm-12">
                    <div class="form-group">
                    <label for="">Key Highlights<span style="color: #ec0102;">*</span></label>
                    <textarea id="key_highlights"  name="key_highlights" class="form-control" placeholder="Key highlights of your business, idea" rows="2" data-error="Please fill above option" required><?php echo $sellBusinessDescription[0]['key_highlights'];?></textarea>
                    <div class="help-block with-errors"></div>
					</div>
                  </div>
                  </div>
				<div class="areu">		
                  <div class="col-sm-12">
                    <div class="form-group">
                    <label for="">Competition / Market<span style="color: #ec0102;">*</span></label>
                    <textarea id="competition" name="competition" class="form-control" placeholder="Give a brief on the Current Market scenario and active Competition" data-error="Please fill above option" required><?php echo $sellBusinessDescription[0]['competition'];?></textarea>
                    <div class="help-block with-errors"></div>
					</div>
                  </div>
                   </div>                 
                  <div class="areu">
                  <div class="col-sm-12">
                    <div class="form-group">
                    <label for="">Detailed Pitch<span style="color: #ec0102;">*</span></label>
                    <textarea id="future_potential" name="future_potential" class="form-control" placeholder="Propose your pitch to the investors in Maximum 500 words" rows="4" data-error="Please fill above option" required><?php echo $sellBusinessDescription[0]['future_potential'];?></textarea>
                    <div class="help-block with-errors"></div>
					</div>
                  </div>
				  </div>
				  <div class="areu">
                  <div class="col-sm-12">
                    <div class="form-group">
                    <label for="">Future Potential<span style="color: #ec0102;">*</span></label>
                    <textarea id="detailed_pitch" name="detailed_pitch" class="form-control" placeholder="Give a brief growth vision of the business?" rows="2" data-error="Please fill above option" required><?php echo $sellBusinessDescription[0]['detailed_pitch'];?></textarea>
                    <div class="help-block with-errors"></div>
					</div>
                  </div>
				  </div>
				  <div class="areu">
                  <div class="col-sm-12">
                    <div class="form-group">
                    <label for="">Team Overview<span style="color: #ec0102;">*</span></label>
                    <textarea id="team_overview" name="team_overview" class="form-control" placeholder="Details about the Team Members, their strengths etc" rows="3" data-error="Please fill above option" required><?php echo $sellBusinessDescription[0]['team_overview'];?></textarea>
                    <div class="help-block with-errors"></div>
					</div>
                  </div>
				  </div>
				  
				  
				  
                  <div class="col-sm-4"></div>
                  <div class="col-sm-2"></div>
                  <div class="col-sm-6" style="padding-right:0">
                    <input type="hidden" name="frm_submit" value="sb_bp" />
                    <button type="submit" class="savebtn">Save &amp; Continue</button>
					 </form>
					 <a href="start-up-basic-information" class="backsave">Back</a>
					</a>
                  </div>
                
              
             </div>
          </div>
              
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!--end section-->



















