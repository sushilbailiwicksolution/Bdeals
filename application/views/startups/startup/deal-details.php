<?php

//echo '<pre>'; print_r($sellBusinessAdditionalFinancialDetails);
?>

<div id="gtco-features">
    <div class="container">
      <div class="row">
        <div class="col-md-12 gtco-heading">
          <div class="p-15">
          <h2>Register as a Start-Up</h2>
          <div class="row">
              <div class="col-sm-3">
                <div class="feat-c-box">
                  <ul>
                    <!--<li><a href="start-up-user-profile" >User Profile</a></li>-->
                    <li><a  href="start-up-basic-information">Basic Information</a></li>
                    <li><a  href="start-up-business-pitch" >Business Pitch</a></li>
                    <li><a href="start-up-deal-details" class="active-page">Deal Details</a></li>
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
                   <!--<div class="row">-->
				   <p>Deal Information</p>
                  <!--<div class="col-sm-4">
                    <div class="form-group">
                    <label for="">Deal Infomation</label>
                    <input type="text" class="form-control" placeholder="Deal Infomation">
                    </div>
                  </div>-->
				  <div class="col-sm-12">
				  <div class="col-sm-4">
                    <div class="form-group">
                    <label for="">Purpose of Investment<span style="color: #ec0102;">*</span></label>
					<input type="hidden" name="frm_id" id="frm_id" value="<?php echo $sellBusinessBasicInformation[0]['form_id'];?>" />
                    <Select class="form-control" id="purpose_investment" name="purpose_investment"  data-error="Purpose required" required>
					<option value="">Select</option>
                          
<?php
			 foreach( unserialize(PURPOSE_INVESTMENT) as $legalValue => $legalName ){
?>
                          <option value="<?php echo $legalValue;?>" <?php if($legalValue == $sellBusinessBasicInformation[0]['purpose_investment']){echo 'selected=selected';}?>><?php echo $legalName;?></option>
<?php
			 }
?>
                        </select>
						<div class="help-block with-errors"></div>
                    </div>
                  </div>
				  
				  
                  <div class="col-sm-4">
                    <div class="form-group">
                    <label for="">Investment Required as<span style="color: #ec0102;">*</span></label>
                    <Select class="form-control" id="investment_required_as" name="investment_required_as"  data-error="Investment required" required> 
					<option value="">Select</option>
                          
<?php
			 foreach( unserialize(INVESTMENT_REQUIRED_AS) as $legalValue => $legalName ){
?>
                          <option value="<?php echo $legalValue;?>" <?php if($legalValue == $sellBusinessBasicInformation[0]['investment_required_as']){echo 'selected=selected';}?>><?php echo $legalName;?></option>
<?php
			 }
?>
                        </select>
						<input type="text" id="investment_other"  name="investment_other" class="form-control" placeholder="Other" value="<?php echo $sellBusinessBasicInformation[0]['investment_other'];?>"  data-error="Other Investment required" style="display:none;"/>
						<div class="help-block with-errors"></div>
						<div class="invStstatusmsg" style="display:none;color:#EC0102;">Other Investment Required</div>
                    </div>
                  </div>
                                    
                                    <div class="col-sm-4">
                    <div class="form-group">
                    <label for="">Investor Role<span style="color: #ec0102;">*</span></label>
                    <select id="invester_role" name="invester_role" class="form-control"  data-error="Investor role required" required> 
					<option value="">Select</option>
                          <option <?php if('Active' == $sellBusinessBasicInformation[0]['invester_role']){echo 'selected=selected';}?>>Active</option>
                          <option <?php if('Silent' == $sellBusinessBasicInformation[0]['invester_role']){echo 'selected=selected';}?>>Silent</option>
                          <option <?php if('Debt' == $sellBusinessBasicInformation[0]['invester_role']){echo 'selected=selected';}?>>Debt</option>
						  <option <?php if('Management' == $sellBusinessBasicInformation[0]['invester_role']){echo 'selected=selected';}?>>Management</option>
                          <option <?php if('Others' == $sellBusinessBasicInformation[0]['invester_role']){echo 'selected=selected';}?>>Others</option>
                        </select>
						 <input type="text" id="invester_role_other"  name="investor_role_other" class="form-control" placeholder="Other" value="<?php echo $sellBusinessBasicInformation[0]['investor_role_other'];?>"  data-error="Other required" style="display:none;"/>
						<div class="help-block with-errors"></div>
						<div class="Ststatusmsg" style="display:none;color:#EC0102;">Other Investor Role Required</div>
                    </div>
                  </div>
                   </div>
                   <!--</div> -->                
                  <!--<div class="row">-->
                  <div class="col-sm-12">
                    <div class="form-group">
                    <label for="">Proposed Deal Structure</label>
                    <textarea id="propose_deal_structure" name="propose_deal_structure" class="form-control" placeholder="Proposed Deal Structure" rows="3"  maxlength="1000"><?php echo $sellBusinessBasicInformation[0]['propose_deal_structure'];?></textarea>
                    <div class="help-block with-errors"></div>
					</div>
                  </div>
                  <!--</div>-->
                  </div>
                  <div class="areu">
                    <p><b>Financial Snapshot</b> (Previous & Projected) </p>
					<?php  $countFin = count($sellBusinessAdditionalFinancialDetails);
				 if($countFin==0){
					 $count_records_fin = 1;
				 }else{
					 $count_records_fin = $countFin;
				 }		
				 //echo $count_records. ' sssssssssssssssssss';
				 ?> 
				 <input type="hidden" id="count-fin" name="count-fin" value="<?php echo $count_records_fin; ?>">
				<div class="add-finance_2">
				<?php
					for($ii=1; $ii < $count_records_fin+1; $ii++){	
				?>
				<input type="hidden" id="finance_id_<?php echo $ii; ?>" name="finance_id_<?php echo $ii; ?>" value="<?php echo $sellBusinessAdditionalFinancialDetails[$ii-1]['id']; ?>">
					
					
					<div id="financial_details_<?php echo $ii; ?>" class="col-sm-12 finbox padd0 add-finance_<?php echo $ii; ?>">
						
					<div class="col-sm-12">	
                     <div class="col-sm-2">
                        <div class="form-group">
                         <label for="fin_year">Year</label>
							 <Select class="form-control" id="fin_year_<?php echo $ii; ?>" name="fin_year_<?php echo $ii; ?>"  data-error="Please select year" >
                          <option value="">Select</option>
<?php
// Start Year
$start_year = 2014;

//End Year
$end_year = date('Y') + 1;

$all_years = range($start_year, $end_year);


array_walk($all_years, function(&$year){
    $year = $year .'-'. str_pad((substr($year, -2) + 1),2,"0",STR_PAD_LEFT);
});

//print_r($all_years);

foreach($all_years as $yeardata){		

//print_r($yeardata);	
?>
                          <option value="<?php echo $yeardata;?>" <?php if($yeardata == $sellBusinessAdditionalFinancialDetails[$ii-1]['fin_year']){echo 'selected=selected';}?>><?php echo $yeardata;?></option>
<?php
	}	  
?>
                        </select>
						<div class="help-block with-errors"></div>
			 <!--<input type="text" class="form-control"  placeholder="" id="fin_year" name="fin_year" value="<?php echo $sellBusinessAdditionalDetails[0]['fin_year'];?>">-->
                        </div>
                     </div>
                    <!--<div class="col-sm-4">
                        <div class="form-group">
                        <label for="fin_revenue_turnover">Turnover</label>
							<select class="form-control" id="fin_revenue_turnover_<?php echo $ii; ?>" name="fin_revenue_turnover_<?php echo $ii; ?>"  data-error="Turnover required" > 
<?php
                            foreach( unserialize(PRICES) as $priceUnitValue=>$priceUnitName ){
?>
			    <option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessAdditionalFinancialDetails[$ii-1]['fin_revenue_turnover']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
                            }
?>
                          </select>	
						<div class="help-block with-errors"></div>
			
                        </div>
                     </div> -->
                            <div class="col-sm-5" style="padding-right: 0px;">
                        <div class="form-group">
                        <label for="latest_revenu">Turnover<span style="color: #ec0102;">*</span></label>
						<div class="input-group">
									<div class="input-group-addon currency" style="width: 58px;">
										<select  class="form-control" id="fin_turnover_currency_<?php echo $ii; ?>" name="fin_turnover_currency_<?php echo $ii; ?>" onChange="resetPriceUnit('#fin_turnover_unit_<?php echo $ii; ?>',this.value)" > 
<?php
											foreach( unserialize(PRICE_UNITS) as $priceUnitValue=>$priceUnitName ){
?>
												<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessAdditionalFinancialDetails[$ii-1]['fin_turnover_currency']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
											}
?>
										</select>
									</div>
									
									
								
										<input type="text" class="form-control" pattern="[0-9]{1}[0-9]*" id="fin_revenue_turnover_<?php echo $ii; ?>" name="fin_revenue_turnover_<?php echo $ii; ?>" placeholder="Amount" value="<?php echo $sellBusinessAdditionalFinancialDetails[$ii-1]['fin_revenue_turnover'];?>"  style="width: 78px; height: 39px;" data-error="Turnover/Revenue required" required>
										
										
										
										
										
										<div class="input-group-addon currency" style="align: left; float: left; width: 120px; height: 39px; ">
											<select class="form-control" id="fin_turnover_unit_<?php echo $ii; ?>" name="fin_turnover_unit_<?php echo $ii; ?>" align="left"> 
<?php
													if($sellBusinessAdditionalFinancialDetails[$ii-1]['fin_turnover_currency']=='INR'){
													foreach( unserialize(PRICE_UNITS_INR) as $priceUnitValue=>$priceUnitName ){
														//echo $buyBusinessProfile[0]['investment_min'];
													?>
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessAdditionalFinancialDetails[$ii-1]['fin_turnover_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
													}
													}
													else if($sellBusinessAdditionalFinancialDetails[$ii-1]['fin_turnover_currency']==''){
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
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessAdditionalFinancialDetails[$ii-1]['fin_turnover_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
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
                    <div class="col-sm-5" style="padding-right: 0px;">
                        <div class="form-group">
                        <label for="latest_revenu">Profit<span style="color: #ec0102;">*</span></label>
						<div class="input-group">
									<div class="input-group-addon currency" style="width: 58px;">
										<select  class="form-control" id="fin_margin_currency_<?php echo $ii; ?>" name="fin_margin_currency_<?php echo $ii; ?>" onChange="resetPriceUnit('#fin_margin_unit_<?php echo $ii; ?>',this.value)" > 
<?php
											foreach( unserialize(PRICE_UNITS) as $priceUnitValue=>$priceUnitName ){
?>
												<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessAdditionalFinancialDetails[$ii-1]['fin_margin_currency']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
											}
?>
										</select>
									</div>
									
									
								
										<input type="text" class="form-control" pattern="[0-9]{1}[0-9]*" id="fin_margin_<?php echo $ii; ?>" name="fin_margin_<?php echo $ii; ?>" placeholder="Amount" value="<?php echo $sellBusinessAdditionalFinancialDetails[$ii-1]['fin_margin'];?>"  style="width: 78px; height: 39px;" data-error="Profit amount required" required>
										
										
										
										
										
										<div class="input-group-addon currency" style="align: left; float: left; width: 120px; height: 39px; ">
											<select class="form-control" id="fin_margin_unit_<?php echo $ii; ?>" name="fin_margin_unit_<?php echo $ii; ?>" align="left"> 
<?php
													if($sellBusinessAdditionalFinancialDetails[$ii-1]['fin_margin_currency']=='INR'){
													foreach( unserialize(PRICE_UNITS_INR) as $priceUnitValue=>$priceUnitName ){
														//echo $buyBusinessProfile[0]['investment_min'];
													?>
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessAdditionalFinancialDetails[$ii-1]['fin_margin_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
													}
													}
													else if($sellBusinessAdditionalFinancialDetails[$ii-1]['fin_margin_currency']==''){
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
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessAdditionalFinancialDetails[$ii-1]['fin_margin_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
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
				    			
			
	<input type="image" style="display:none;" name="button-remove_<?php echo $ii; ?>" id="finbutton-remove_<?php echo $ii; ?>" value="<?php echo $sellBusinessAdditionalFinancialDetails[$ii-1]['id'];?>&<?php echo $ii; ?>" class="button-remove_<?php echo $ii; ?> finbutton-remove" onclick='RemoveFin(this)' src="<?php echo asset_url();?>images/delete.png" />					
                   </div>  
				   <?php } ?>
					</div>
				<div class="col-md-12 padd0">
                     <button type="button" class="btn btn-default finance-add-button">
                                <span class="glyphicon glyphicon-plus"></span> Add Financial Year
                                   </button>
                    </div>
					</div>	
                  
				  
				  
				  
				  
				  
                  <div class="col-sm-4"></div>
                  <div class="col-sm-4"></div>
                  <div class="col-sm-4" style="padding-right:0">
				  <input type="hidden" name="frm_submit" value="sb_dd" />
				  <button type="submit" class="savebtn dealbtn">Submit &amp; Continue</button>
                   
				   </form>
                   <a href="start-up-business-pitch" class="backsave">Back</a>  
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

  
  
  
  
			