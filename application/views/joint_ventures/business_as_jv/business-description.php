<?php
// var_dump($sellBusinessDescription);
//print_r($_SESSION['last_form_id']);

//echo $this->session->userdata('last_form_id');
?>
<div class="clearfix"></div>  
  <div id="gtco-features">
    <div class="container">
      <div class="row">
        <div class="col-md-12 gtco-heading ">
          <div class="p-15">
          <h2>List Your Business</h2>
          <div class="row">
              <div class="col-sm-3">
                <div class="feat-c-box">
                  <ul>
                    <!--<li><a href="list-your-business-user-profile">User Profile</a></li>-->
                     <li><a href="list-your-business-basic-information-jv" >Basic Information</a></li>
                    <li><a href="list-your-business-description-jv" class="active-page">Business Description</a></li>
                    <li><a href="list-your-business-additional-details-jv">Additional Details</a></li>
		    <li><a href="list-your-business-jv-details-jv">JV-details</a></li>
                    <li><a href="list-your-business-additional-details-uploads-jv">Uploads</a></li>
                    <li><a href="list-your-business-package-details-jv">Package Details</a></li>
                    <li><a href="list-your-business-additional-services-jv">Additional Services</a></li>
                     <!--<li><a href="list-your-business-payment-jv">Payment</a></li>-->
                    <li><a href="list-your-business-preview-jv">Preview</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-9 r-bgc">
                 <form name="lb_uprof" action="jv_userregister" method="post" data-toggle="validator" role="form" class="was-validated">
                <div class="form-c-box">
                  
                  <div class="areu">
					<div class="col-sm-12">
                    <p>No. of Employees</p>
                        <div class="col-sm-4">
                        <div class="form-group">
                        <label for="noemp_par">Permanent<span style="color: #ec0102;">*</span></label>
                        <input type="hidden" name="frm_id" id="frm_id" value="<?php echo $sellBusinessDescription[0]['form_id'];?>" />
			
			<input type="text"  placeholder="" id="noemp_par" name="noemp_par" value="<?php 
			if($sellBusinessDescription[0]['no_of_permanent_employee']>0){
				
			echo $sellBusinessDescription[0]['no_of_permanent_employee'];	
			}else{
			
			echo '';
			
			}?>" class="par_numbers form-control" onkeyup="sumEmployee();" data-error="Permanent required" required>
			<div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                        <label for="noemp_con">Contractual<span style="color: #ec0102;">*</span></label>
			<input type="text" class="con_numbers form-control" placeholder="" id="noemp_con" name="noemp_con" value="<?php 
			if($sellBusinessDescription[0]['no_of_contractual_emplyee']>0){
				
			echo $sellBusinessDescription[0]['no_of_contractual_emplyee'];	
			}else{
			
			echo '';
			
			}?>" onkeyup="sumEmployee();" data-error="Contractual required" required>
			<div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                        <label for="noemp_tot">Total<span style="color: #ec0102;">*</span></label>
			<input type="text" class="form-control" placeholder="" id="noemp_tot" name="noemp_tot" value="<?php 
			if($sellBusinessDescription[0]['total_employee']>0){
				
			echo $sellBusinessDescription[0]['total_employee'];	
			}else{
			
			echo '';
			
			}?>" data-error="Total required" required>
			<div class="help-block with-errors"></div>
                        </div>
                      </div>
					  </div>
					  
					  <div class="col-sm-12">
                      <div class="col-sm-4">
                      <div class="form-group">
                        <label for="bus_reloc">Business Re-locatable<span style="color: #ec0102;">*</span></label>
                        <Select class="form-control" id="bus_reloc" name="bus_reloc" data-error="Kindly Select" required>
                          <option value="">Select</option>
<?php
                          foreach( unserialize(BUSINESS_RE_LOCATABLE) as $reLocatableValue => $reLocatableName ){
?>
                          <option value="<?php echo $reLocatableValue;?>" <?php if($reLocatableValue == $sellBusinessDescription[0]['is_re_locatable']){echo 'selected=selected';}?>><?php echo $reLocatableName;?></option>
<?php
                          }
?>
                        </select>
						<div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                      <div class="form-group">
                        <label for="listed_by">Business Listed By<span style="color: #ec0102;">*</span></label>
                        <Select class="form-control" id="listed_by" name="listed_by" data-error="Kindly Select" required>
                          <option value="">Select</option>
<?php
			  foreach( unserialize(BUSINESS_LISTED_BY) as $listedByValue => $listedByName ){
?>
                          <option value="<?php echo $listedByValue;?>" <?php if($listedByValue == $sellBusinessDescription[0]['business_listed_by']){echo 'selected=selected';}?>><?php echo $listedByName;?></option>
<?php
			  }
?>
                        </select>
						<div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-sm-3"></div>
					  </div>
                  </div>
				  
                  <div class="areu">
				  
                    <p>Business Pricing</p>
                        <!--<div class="col-sm-4 padd0">
                        <div class="form-group">
                        <label for="ask_price">Asking Price<span style="color: #ec0102;">*</span></label>
								<div class="input-group">
									<div class="input-group-addon currency" style="width: 58px;">
										<select class="form-control" id="ask_price_currency" name="ask_price_currency" onChange="resetPriceUnit('#ask_price_unit',this.value)" > 
<?php
											foreach( unserialize(PRICE_UNITS) as $priceUnitValue=>$priceUnitName ){
?>
												<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessDescription[0]['ask_price_currency']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
											}
?>
										</select>
										
									</div>
										<input type="text" class="form-control" pattern="[1-9]{1}[0-9]*" id="ask_price" name="ask_price" placeholder="Amount" value="<?php 
										if($sellBusinessDescription[0]['ask_price']!='0'){
										echo $sellBusinessDescription[0]['ask_price'];
										}else{ echo '';}
										?>" onkeyup="resetPriceRange('#price_range_type',this.value)" style="width: 78px; height: 39px;" data-error="Asking Price required" required>
										<div class="input-group-addon currency" style="align: left; float: left; width: 115px; height: 39px; ">
											<select class="form-control" id="ask_price_unit" name="ask_price_unit" align="left" onchange="resetPriceRange('#price_range_type',this.value)"> 
<?php
													if($sellBusinessDescription[0]['ask_price_currency']=='INR'){
														foreach( unserialize(PRICE_UNITS_INR) as $priceUnitValue=>$priceUnitName ){			
														//echo $buyBusinessProfile[0]['investment_min'];
														
														//print_r($priceUnitName);
													?>
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessDescription[0]['ask_price_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
													}
												}
												else if($sellBusinessDescription[0]['ask_price_currency']==''){
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
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessDescription[0]['ask_price_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
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
                        <label for="price_range">Price Range<span style="color: #ec0102;">*</span></label>
                        <div class="input-group">
                          <div class="input-group-addon currency" style="    border-top-right-radius: 6px;    border-bottom-right-radius: 6px;">
                          <select style="height: 38px; border-top-right-radius: 6px;    border-bottom-right-radius: 6px;" class="form-control" id="price_range_type" name="price_range_type" data-error="Price Range required" required>
<?php
                            foreach( unserialize(PRICES) as $priceUnitValue=>$priceUnitName ){
?>
                            <option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessDescription[0]['price_range_type']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
                            }
?>
                          </select>
						  
                          </div>
                          <input type="hidden" class="form-control" placeholder="" id="price_range" name="price_range">
                        </div>
						<div class="help-block with-errors"></div>
                        </div>
                      </div>-->
                      <div class="col-sm-4" style="padding-right: 0px;">
                        <div class="form-group">
                        <label for="latest_revenu">Last Turnover/Revenue<span style="color: #ec0102;">*</span></label>
						<div class="input-group">
									<div class="input-group-addon currency" style="width: 58px;">
										<select  class="form-control" id="latest_revenu_currency" name="latest_revenu_currency" onChange="resetPriceUnit('#latest_revenu_unit',this.value)" > 
<?php
											foreach( unserialize(PRICE_UNITS) as $priceUnitValue=>$priceUnitName ){
?>
												<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessDescription[0]['latest_revenu_currency']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
											}
?>
										</select>
									</div>
										<input type="text" class="form-control" pattern="[0-9]{1}[0-9]*" id="latest_revenu" name="latest_revenu" placeholder="Amount" value="<?php echo $sellBusinessDescription[0]['latest_revenu'];?>"  style="width: 78px; height: 39px;" data-error="Turnover/Revenue required" required>
										<div class="input-group-addon currency" style="align: left; float: left; width: 120px; height: 39px; ">
											<select class="form-control" id="latest_revenu_unit" name="latest_revenu_unit" align="left"> 
<?php
													if($sellBusinessDescription[0]['latest_revenu_currency']=='INR'){
													foreach( unserialize(PRICE_UNITS_INR) as $priceUnitValue=>$priceUnitName ){
														//echo $buyBusinessProfile[0]['investment_min'];
													?>
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessDescription[0]['latest_revenu_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
													}
													}
													else if($sellBusinessDescription[0]['latest_revenu_currency']==''){
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
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessDescription[0]['latest_revenu_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
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
                  <div class="col-sm-12">
                    <div class="form-group">
                    <label for="ps_desc">Product &amp; Services<span style="color: #ec0102;">*</span></label>
		    <textarea class="form-control" rows="3" placeholder="Key Products Or Services of the Business" id="ps_desc" name="ps_desc" data-error="Product & Services required" required><?php echo $sellBusinessDescription[0]['product_service_desc'];?></textarea>
			<div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                    <label for="market">Competition / Market<span style="color: #ec0102;">*</span></label>
		    <textarea class="form-control" rows="3" placeholder="Current Market and Competition scenario" id="market" name="market" data-error="Competition/ Market required" required><?php echo $sellBusinessDescription[0]['competition_market_desc'];?></textarea>
			<div class="help-block with-errors"></div>
                    </div>
                  </div>
				  
				  </div>
				  <div class="col-sm-12">
                  <div class="col-sm-12">
                    <div class="form-group">
                    <label for="growth">Growth Potential<span style="color: #ec0102;">*</span></label>
		    <textarea class="form-control" rows="3" placeholder="What is the future growth potential of the Business" id="growth" name="growth" data-error="Growth Potential required" required><?php echo $sellBusinessDescription[0]['growth_potential'];?></textarea>
			<div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <!--<div class="col-sm-6">
                    <div class="form-group">
                    <label for="sale_reason">Reason for Sale<span style="color: #ec0102;">*</span></label>
		    <textarea class="form-control" rows="3" placeholder="Describe the reason of selling your Business" id="sale_reason" name="sale_reason" data-error="Reason for sale required" required><?php echo $sellBusinessDescription[0]['reason_for_sale'];?></textarea>
			<div class="help-block with-errors"></div>
                    </div>
                  </div>-->
				  
				  </div>
                  </div>
                  <div class="col-sm-4"></div>
                  <div class="col-sm-3"></div>
                  <div class="col-sm-5" style="padding-right:0">
                    <input type="hidden" name="frm_submit" value="sb_bd" />
                    <button type="submit" class="savebtn saleBD">Save &amp; Continue</button>
                    
					 <a href="<?php echo base_url();?>list-your-business-basic-information-jv" class="backbtn">Back</a>
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
