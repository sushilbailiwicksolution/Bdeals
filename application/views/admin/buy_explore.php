<?php
 //var_dump($businessDetails);
?>
<div class="main-content">
                <h1 class="page-title">Buyer</h1>
                 <div class="col-md-8"></div>
                 <div class="col-md-1">
                  <a href="<?php echo base_url();?>admin/buyer_case/buy/<?php echo $assignedTo;?>/<?php echo $formId;?>"><button type="button" class="savebtn">Case</button></a>&nbsp;&nbsp;
                 </div>
<?php
                 if( strcasecmp( $this->session->userdata('admin_type'), 'admin') == 0 ){
?>
		 <div class="col-md-1 acc_css">
                  <div class="pull-right mb1">
		   <a href="<?php echo base_url();?>admin/buyer_accept/buy/accept/<?php echo $formId;?>" class="dropdown-toggle savebtn">Accept</a>
<?php /*		   <select name="action_dropdown" class="form_control">
		    <a href="<?php echo base_url();?>admin/expl_accept/sell/accept/<?php echo $formId;?>" class="dropdown-toggle">Action-Accept</a>
                    <option value="<?php echo $optValue?>"><a href="<?php echo base_url();?>admin/expl_accept/sell/accept/<?php echo $formId;?>" class="dropdown-toggle">Accept</a></option>
                    <option value="<?php echo $optValue?>"><a href="<?php echo base_url();?>admin/expl_accept/sell/reject/<?php echo $formId;?>" class="dropdown-toggle">Reject</a></option>
                    <option value="<?php echo $optValue?>"><a href="<?php echo base_url();?>admin/expl_accept/sell/cancel/<?php echo $formId;?>" class="dropdown-toggle">Cancel</a></option>
		    </select> */ ?>
                  </div>
                 </div>
<?php
                 }
?>
		<div class="col-md-1">
                 <button type="button" class="savebtn editSeller" >Edit</button>
		</div>

                <div class="row ">
                    <div class="col-md-12">
                        <div class="tabs-container">
                            <input type="hidden" id="base_url" name="base_url" value="<?php echo base_url();?>" />
                            <ul class="nav nav-tabs">
                               <h4>Personal Detail</h4>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane1 active" id="personaldetail1">
                                    <div class="panel-body">
             <form name="lb_uprof" action="<?php echo base_url();?>admin-buy-userregister-profile-update" method="post" data-toggle="validator" role="form" class="was-validated">
                <div class="form-c-box">
                  <div class="col-sm-4">
                    <div class="form-group">
<input type="hidden" name="frm_id" id="frm_id" value="<?php echo $sellBusinessUserProfile[0]['form_id'];?>" />
					 <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id=$this->uri->segment('3');?>" />
					 <input type="hidden" name="customer_id" id="customer_id" value="<?php echo $user_id=$this->uri->segment('5');?>" />
                    <label for="lb_uname"> Name :</label>
              
			 <input type="hidden" name="business_type" id="business_type" value="buy_a_business" />
		    <?php echo $sellBusinessUserProfile[0]['name'];?>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                    <label for="lb_email">Email address :</label>
                   
			 <?php echo $sellBusinessUserProfile[0]['email'];?>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  </div>


                                    </div>
                                </div>
                                <div class="tab-pane1" id="businessprofile1">
								<br>
								<ul class="nav nav-tabs">
								<h4>Business Profile</h4>
								</ul>
                                    <div class="panel-body">
                                        <div class="col-sm-12 padd0">
                                        
								<div class="form-c-box">
									<div class="col-sm-4">
										<div class="form-group">
										<label for="">I want to buy/Invest in</label>
										<input type="hidden" name="frm_id" id="frm_id" value="<?php echo $buyBusinessProfile[0]['form_id'];?>" />
										<select class="form-control" id="buy_invest_in" name="buy_invest_in" > 
												<?php
			 foreach( unserialize(BUY_INVEST_IN) as $investInValue => $investInName ){
?>
                          <option value="<?php echo $investInValue;?>" <?php if($investInValue == $buyBusinessProfile[0]['buy_invest_in']){echo 'selected=selected';}?>><?php echo $investInName;?></option>
<?php
			 }
?>												
												</select>
										</div>
									</div>
									
									<div class="areu">
										<p>Profile</p>
										<div class="col-sm-3">
											<div class="checkbox">
												<input type="checkbox" id="profile_business_buyer" name="profile_business_buyer" value="BB" <?php if(strcasecmp($buyBusinessProfile[0]['profile_business_buyer'], 'BB')==0){ echo "checked";}?>  class="Profile">
												<label for="profile_business_buyer" class="cus-t">
													  Business Buyer                   
												  </label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="checkbox">
												<input type="checkbox" id="profile_corporate_investor" name="profile_corporate_investor" value="CI" <?php if(strcasecmp($buyBusinessProfile[0]['profile_corporate_investor'], 'CI')==0){ echo "checked";}?>  class="Profile">
												<label for="profile_corporate_investor" class="cus-t">
													  Corporate Investor            
												  </label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="checkbox">
												<input type="checkbox" id="profile_pe_vc" name="profile_pe_vc" value="PV" <?php if(strcasecmp($buyBusinessProfile[0]['profile_pe_vc'], 'PV')==0){ echo "checked";}?>  class="Profile">
												<label for="profile_pe_vc" class="cus-t">
													  PE / VC 
												  </label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="checkbox">
												<input type="checkbox" id="profile_nri_foreign_investor" name="profile_nri_foreign_investor" value="NFI" <?php if(strcasecmp($buyBusinessProfile[0]['profile_nri_foreign_investor'], 'NFI')==0){ echo "checked";}?>  class="Profile">
												<label for="profile_nri_foreign_investor" class="cus-t">
													  NRI/Foreign Investor
												  </label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="checkbox">
												<input type="checkbox" id="profile_business_lender" name="profile_business_lender" value="BL" <?php if(strcasecmp($buyBusinessProfile[0]['profile_business_lender'], 'BL')==0){ echo "checked";}?>  class="Profile">
												<label for="profile_business_lender" class="cus-t">
													  Business Lender     
												  </label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="checkbox">
												<input type="checkbox" id="profile_business_broker" name="profile_business_broker" value="BBR" <?php if(strcasecmp($buyBusinessProfile[0]['profile_business_broker'], 'BBR')==0){ echo "checked";}?>  class="Profile">
												<label for="profile_business_broker" class="cus-t">
													  Business Broker
												  </label>
											</div>
										</div>
									</div>
									
									
									<div class="areu">
										<p>Business interest</p>
										<div class="col-sm-3">
											<div class="checkbox">
												<input type="checkbox" id="bi_acquisition_buyout" name="bi_acquisition_buyout" value="AB" <?php if(strcasecmp($buyBusinessProfile[0]['bi_acquisition_buyout'], 'AB')==0){ echo "checked";}?>  class="Profile">
												<label for="bi_acquisition_buyout" class="cus-t">
													  Acquisition / Buyout                                 
												  </label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="checkbox">
												<input type="checkbox" id="bi_distributor_cf" name="bi_distributor_cf" value="DC" <?php if(strcasecmp($buyBusinessProfile[0]['bi_distributor_cf'], 'DC')==0){ echo "checked";}?>  class="Profile">
												<label for="bi_distributor_cf" class="cus-t">
													  Distributorship / C&F           
												  </label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="checkbox">
												<input type="checkbox" id="bi_invest_business" name="bi_invest_business" value="IB" <?php if(strcasecmp($buyBusinessProfile[0]['bi_invest_business'], 'IB')==0){ echo "checked";}?>  class="Profile">
												<label for="bi_invest_business" class="cus-t">
													  Investment in Business   
												  </label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="checkbox">
												<input type="checkbox" id="bi_debt_financing" name="bi_debt_financing" value="DF" <?php if(strcasecmp($buyBusinessProfile[0]['bi_debt_financing'], 'DF')==0){ echo "checked";}?>  class="Profile">
												<label for="bi_debt_financing" class="cus-t">
													  Debt financing
												  </label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="checkbox">
												<input type="checkbox" id="bi_jv_partnership" name="bi_jv_partnership" value="JP" <?php if(strcasecmp($buyBusinessProfile[0]['bi_jv_partnership'], 'JP')==0){ echo "checked";}?>  class="Profile">
												<label for="bi_jv_partnership" class="cus-t">
													  JV / Partnership                          
												  </label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="checkbox">
												<input type="checkbox" id="bi_startup_angel" name="bi_startup_angel" value="SA" <?php if(strcasecmp($buyBusinessProfile[0]['bi_startup_angel'], 'SA')==0){ echo "checked";}?>  class="Profile">
												<label for="bi_startup_angel" class="cus-t">
													  Start Up / Angel funding
												  </label>
											</div>
										</div>
										<div class="col-sm-3">
										<div class="checkbox">
												<input type="checkbox" class="cus-bi" id="bi_preleased_property" name="bi_preleased_property" value="PP" <?php if(strcasecmp($buyBusinessProfile[0]['bi_preleased_property'], 'PP')==0){ echo "checked";}?>>
												<label for="bi_preleased_property" class="cus-bi">
													  Preleased Property
												  </label>
											</div>
											</div>
									</div>
									
									
									
									<div class="areu custom-arnu-2">
										<p>Business location</p> 
										 
														  <div class="col-sm-3">
											<div class="form-group">
												<label for="">Country<span style="color: #ec0102;">*</span></label>
												<select id="country" name="country" onChange="getChangeStates('<?php echo base_url();?>', this.value)" class="form-control" required data-error="Country required">
                          <option value="">Select</option>
<?php
                          foreach( $this->cachemethods->getCountryDetails() as $country ){
?>
                          <option value="<?php echo $country->id;?>" <?php if($country->id == $buyBusinessProfile[0]['country']){echo 'selected=selected';}?>><?php echo $country->country_name; ?></option>
<?php
                          }
?>
												</select>
												<div class="help-block with-errors"></div>
												</div>
											</div>
											
											<div class="col-sm-3">
											<div class="form-group">
												<label for="">Location<span style="color: #ec0102;">*</span></label>
												<?php 
		//$abc=$buyBusinessProfile[0]['buy_listing_category'];
		//$bc = "Agriculture,Software";
		$pieces = explode(",", $buyBusinessProfile[0]['state']);
	?>
						<select  id="state1" name="state1[]" onChange="getChangeCities('<?php echo base_url();?>', this.value)" required data-error="State required" multiple="multiple">
                                                
<?php

                          foreach( $this->cachemethods->getStateByCountry($buyBusinessProfile[0]['country']) as $statedet ){
?>
           <option value="<?php echo $statedet->id;?>" <?php
						  for($i=0; $i < count($pieces); $i++){
						  if($statedet->id == $pieces[$i]){echo 'selected=selected'; break;}} ?>><?php echo $statedet->state_name; ?></option>
<?php
                         }

?>							

												</select>
												<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="col-sm-3">
											<div class="form-group">
												<label for="">City</label>
												<input type="text" id="city" name="city" class="form-control" value="<?php echo $buyBusinessProfile[0]['city'];?>" placeholder="City">
												<div class="help-block with-errors"></div>
												</div>
											</div>
										
									</div>
									
												<div class="areu custom-arnu-2">
									<div class="col-sm-12">
										<div class="col-sm-6">
										<div class="form-group">
										<label for="">Industry Preference<span>*</span></label>
										<!--<input type="text" id="industry_preferece" name="industry_preferece" pattern="[a-zA-Z][a-zA-Z\s]*" class="form-control" rows="3" value="<?php echo $buyBusinessProfile[0]['industry_preference'];?>" data-error="Industry preference required" required>-->
										<?php 
		//$abc=$buyBusinessProfile[0]['buy_listing_category'];
		//$bc = "Agriculture,Software";
		$pieces = explode(",", $buyBusinessProfile[0]['industry_preference']);
	?>
	<select   id="industry_preference" name="industry_preference[]" multiple="multiple" > 
<?php
	foreach( $this->cachemethods->getSectorDetails() as $Sector ){
								
?>								
		   <option value="<?php echo $Sector->id;?>" <?php
			for($i=0; $i < count($pieces); $i++){
				if($Sector->id == $pieces[$i]){echo 'selected=selected'; break;}}?>><?php echo $Sector->sector_name;?></option>
<?php
                            
			}
?>									</select>


										<div class="help-block with-errors"></div>
									  </div>
									  </div>
									  <div class="col-sm-6"></div>
									</div>
									</div>
						
									<div class="areu">
									
										   
													<div class="col-sm-12">
										<p>Investment range</p>
										    <div class="col-sm-6">
												
											  <div class="form-group">
											  
											 
												<label for="">Min<span style="color: #ec0102;">*</span></label>
												<div class="input-group">
												 <div class="input-group-addon currency" style="width: 58px;">
													<select class="form-control" id="investment_min_price_currency" name="investment_min_price_currency" onChange="resetPriceUnit('#investment_min_price_unit',this.value)" > 
<?php
													foreach( unserialize(PRICE_UNITS) as $priceUnitValue=>$priceUnitName ){
?>
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $buyBusinessProfile[0]['investment_min_price_currency']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
													}
?>
													</select>
												</div>
												<input type="text" class="form-control" pattern="[1-9]{1}[0-9]*" id="investment_min" name="investment_min" placeholder="Amount" value="<?php echo $buyBusinessProfile[0]['investment_min'];?>" style="width: 120px;" data-error="Valid min investment value required" required>
												<div class="input-group-addon currency" style="align: left; float: left; width: 120px; height: 32px; ">
												<select class="form-control" id="investment_min_price_unit" name="investment_min_price_unit" align="left"> 
<?php
													foreach( unserialize(PRICE_UNITS_INR) as $priceUnitValue=>$priceUnitName ){
														//echo $buyBusinessProfile[0]['investment_min'];
													?>
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $buyBusinessProfile[0]['investment_min_price_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
													}
?>
												</select>
												</div>
												</div>
												<div class="chk_err_min" style="color: #a94442;"></div>
												<div class="help-block with-errors"></div>
												  <!--</div>
												 <input type="text" class="form-control" placeholder="0000000000">
												</div>-->
											  </div>
											</div>
											<div class="col-sm-6">
											  <div class="form-group">
												<label for="">Max<span style="color: #ec0102;">*</span></label>
												<div class="input-group">
												 <div class="input-group-addon currency" style="width: 58px;">
													<select class="form-control" id="investment_max_price_currency" name="investment_max_price_currency" onChange="resetPriceUnit('#investment_max_price_unit',this.value)" > 
<?php
													foreach( unserialize(PRICE_UNITS) as $priceUnitValue=>$priceUnitName ){
?>
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $buyBusinessProfile[0]['investment_max_price_currency']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
													}
?>
													</select>
												</div>
												<input type="text" class="form-control" pattern="[1-9]{1}[0-9]*" id="investment_max" name="investment_max" placeholder="Amount" value="<?php echo $buyBusinessProfile[0]['investment_max'];?>" style="width: 120px;" data-error="Valid max investment value required" required>
												<div class="input-group-addon currency" style="align: left; float: left; width: 120px; height: 32px; ">
												<select class="form-control" id="investment_max_price_unit" name="investment_max_price_unit" align="left"> 
<?php
													foreach( unserialize(PRICE_UNITS_INR) as $priceUnitValue=>$priceUnitName ){
														//echo $buyBusinessProfile[0]['investment_min'];
													?>
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $buyBusinessProfile[0]['investment_max_price_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
													}
?>
												</select>
												</div>
												</div>
												<div class="chk_err_max" style="color: #a94442;"></div>
												<div class="help-block with-errors" ></div>
												  <!--</div>
												  <input type="text" class="form-control" placeholder="0000000000">
												</div>-->
											  </div>
											</div>
										</div>
										<div class="col-md-12 text-center"><span id="errorMsg" style="color: #ec0102;display:none;">Max value must be equal or greater than min value</span></div>
									</div>
									
									
									<div class="areu">
													<div class="col-sm-12">
										<p>Funding options</p>
										    <div class="col-sm-4">
											  <div class="form-group">
												<label for="">Own<span style="color: #ec0102;">*</span></label>
												<input type="text"  placeholder="" id="funding_own" name="funding_own" value="<?php echo $buyBusinessProfile[0]['funding_own'];?>" class="par_numbers form-control" onkeyup="sumFund();">
												<!--<select class="form-control" id="funding_own" name="funding_own" required> 
<?php
												//foreach( unserialize(PRICES) as $priceUnitValue=>$priceUnitName ){
?>
												<option value="<?php //echo $priceUnitValue;?>" <?php //if($priceUnitValue == $buyBusinessProfile[0]['funding_own']){echo 'selected=selected';}?>><?php //echo $priceUnitName;?></option>
<?php
												//}
?>
												</select>-->
												  <!--</div>
												 <input type="text" class="form-control" placeholder="0000000000">
												</div>-->
												<div class="help-block with-errors"></div>
											  </div>
											</div>
											<div class="col-sm-4">
											  <div class="form-group">
												<label for="">Debt<span>*</span></label>
												<input type="text" class="con_numbers form-control" placeholder="" id="funding_debt" name="funding_debt" value="<?php echo $buyBusinessProfile[0]['funding_debt'];?>" onkeyup="sumFund();">
												<!--<select class="form-control" id="funding_debt" name="funding_debt" required> 
<?php
												//foreach( unserialize(PRICES) as $priceUnitValue=>$priceUnitName ){
?>
												<option value="<?php //echo $priceUnitValue;?>" <?php //if($priceUnitValue == $buyBusinessProfile[0]['funding_debt']){echo 'selected=selected';}?>><?php //echo $priceUnitName;?></option>
<?php
												//}
?>
												</select>-->
												  <!--</div>
												  <input type="text" class="form-control" placeholder="0000000000">
												</div>-->
												<div class="help-block with-errors"></div>
											  </div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label for="fund_tot">Total</label>
													<input type="text" readonly class="form-control" placeholder="" id="fund_tot" name="fund_tot" value="<?php echo $buyBusinessProfile[0]['total_fund'];?>">
												</div>
											</div>
											
									</div>
										   
									</div>
									
									<div class="col-md-12 padd0">
									<div class="col-sm-4">
										<div class="form-group">
										<label for="">Investment Timeline</label>
										<select class="form-control" id="investment_timeline" name="investment_timeline" > 
<?php
                            foreach( unserialize(INVESTMENT_TIMELINE) as $priceUnitValue=>$priceUnitName ){
?>
			    <option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $buyBusinessProfile[0]['investment_timeline']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
                            }
?>
																								
												</select>
										</div>
									</div>
									
									<div class="col-sm-4">
										<div class="form-group">
										<label for="">Business Preference</label>
										<select class="form-control" id="business_preferences" name="business_preferences" > 
<?php
                            foreach( unserialize(BUSINESS_PREFERENCE) as $priceUnitValue=>$priceUnitName ){
?>
			    <option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $buyBusinessProfile[0]['business_preferences']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
                            }
?>
																								
												</select>
										</div>
									</div>
									</div>
									
									<div class="col-sm-12">
										<div class="form-group">
										<label for="">Purpose of Investment</label>
										<textarea id="purpose" name="purpose" class="form-control" rows="3" data-error="Address required" required ><?php echo $buyBusinessProfile[0]['purpose'];?></textarea>
                    <div class="help-block with-errors"></div>
									  </div>
									</div>
									  
									
									
									
									
								
									</div>
							

                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane1" id="postrequirement1">
								<br>
								<ul class="nav nav-tabs">
								<h4>Post Your Requirement</h4>
								</ul>
                                    <div class="panel-body">
                                        <div class="col-sm-12 padd0">
									
								<div class="form-c-box">
									<div class="col-sm-12">
										<div class="form-group">
										<label for="">Key Requirement</label>
										<input type="hidden" name="frm_id" id="frm_id" value="<?php echo $buyBusinessProfile[0]['form_id'];?>" />
										<input type="text" id="key_requirement" name="key_requirement" class="form-control" value="<?php echo $buyBusinessProfile[0]['key_requirement'];?>" placeholder="Business Heading" data-error="Key Requirement Required" required >
										</div>
									</div>
									
								<div class="areu custom-arnu-2">
									<div class="col-sm-12">
									
									<div class="col-sm-6 p-le0">
									
										<div class="form-group">
										<label for="">Listing Category (Multiple Select) <span style="color: #ec0102;">*</span></label>
										<?php 
		//$abc=$buyBusinessProfile[0]['buy_listing_category'];
		//$bc = "Agriculture,Software";
		$pieces = explode(",", $buyBusinessProfile[0]['buy_listing_category']);
	?>
	<select   id="industry_preference2" name="industry_preference[]" multiple="multiple" > 
<?php
	foreach( $this->cachemethods->getSectorDetails() as $Sector ){
								
?>								
		   <option value="<?php echo $Sector->id;?>" <?php
			for($i=0; $i < count($pieces); $i++){
				if($Sector->id== $pieces[$i]){echo 'selected=selected'; break;}}?>><?php echo $Sector->sector_name;?></option>
<?php
                            
			}
?>									</select>										
												
										<div class="help-block with-errors"></div>			
										</div>
									</div>
								
								
									
										<div class="col-sm-6">
													<div class="form-group">
										<label for="">Location<span style="color: #ec0102;">*</span></label>
												<?php 
		//$abc=$buyBusinessProfile[0]['buy_listing_category'];
		//$bc = "Agriculture,Software";
		$pieces = explode(",", $buyBusinessProfile[0]['buy_location']);
	?>
						<select  id="state2" name="state2[]" onChange="getChangeCities('<?php echo base_url();?>', this.value)" required data-error="State required" multiple="multiple">
                                                
<?php

                          foreach( $this->cachemethods->getStateByCountry($buyBusinessProfile[0]['country']) as $statedet ){
?>
           <option value="<?php echo $statedet->id;?>" <?php
						  for($i=0; $i < count($pieces); $i++){
						  if($statedet->id == $pieces[$i]){echo 'selected=selected'; break;}} ?>><?php echo $statedet->state_name; ?></option>
<?php
                         }

?>							

												</select>
										
										<div class="help-block with-errors"></div>			
										</div>
									</div>
									</div>
									</div>
								
								
									<div class="areu">
										
											<div class="col-sm-12">
										<p>Investment range </p>
										    <div class="col-sm-6 p-le0">
											  <div class="form-group">
												<label for="">Min</label>
												<div class="input-group">
												 <div class="input-group-addon currency" style="width: 58px;">
													<select class="form-control" id="req_investment_min_price_currency" name="req_investment_min_price_currency" onChange="resetPriceUnit('#req_investment_min_price_unit',this.value)" > 
<?php
													foreach( unserialize(PRICE_UNITS) as $priceUnitValue=>$priceUnitName ){
?>
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $buyBusinessProfile[0]['req_investment_min_price_currency']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
													}
?>
													</select>
												</div>
												<input type="text" class="form-control" pattern="[1-9]{1}[0-9]*" id="req_investment_min" name="req_investment_min" placeholder="Amount" value="<?php echo $buyBusinessProfile[0]['req_investment_min'];?>" style="width: 120px;" data-error="Valid min investment value required" required>
												<div class="input-group-addon currency" style="align: left; float: left; width: 120px; height: 32px; ">
												<select class="form-control" id="req_investment_min_price_unit" name="req_investment_min_price_unit" align="left"> 
<?php                                                
													/*if($buyBusinessProfile[0]['req_investment_min_price_currency']==' ' || $buyBusinessProfile[0]['req_investment_min_price_currency']=='null' || $buyBusinessProfile[0]['req_investment_min_price_currency']==''){
														$currency = 'PRICE_UNITS_INR';
													 }else{
														 $currency = 'PRICE_UNITS_USD';
													 }	 */
													foreach( unserialize(PRICE_UNITS_INR) as $priceUnitValue=>$priceUnitName ){
														//echo $buyBusinessProfile[0]['investment_min'];
													?>
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $buyBusinessProfile[0]['req_investment_min_price_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
													}
?>
												</select>
												</div>
												</div>
												<div class="chk_err_min_req" style="color: #a94442;"></div>
												<div class="help-block with-errors"></div>
											  </div>
											</div>
											<div class="col-sm-6">
											  <div class="form-group">
												<label for="">Max</label>
												<div class="input-group">
												 <div class="input-group-addon currency" style="width: 58px;">
													<select class="form-control" id="req_investment_max_price_currency" name="req_investment_max_price_currency" onChange="resetPriceUnit('#req_investment_max_price_unit',this.value)" > 
<?php
														
													foreach( unserialize(PRICE_UNITS) as $priceUnitValue=>$priceUnitName ){
?>
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $buyBusinessProfile[0]['req_investment_max_price_currency']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
													}
													
?>
													</select>
												</div>
												<input type="text" class="form-control" pattern="[1-9]{1}[0-9]*" id="req_investment_max" name="req_investment_max" placeholder="Amount" value="<?php echo $buyBusinessProfile[0]['req_investment_max'];?>" style="width: 120px;" data-error="Valid max investment value required" required>
												<div class="input-group-addon currency" style="align: left; float: left; width: 120px; height: 32px; ">
												<select class="form-control" id="req_investment_max_price_unit" name="req_investment_max_price_unit" align="left"> 
<?php												
													/*if($buyBusinessProfile[0]['req_investment_max_price_currency']==' ' OR $buyBusinessProfile[0]['req_investment_max_price_currency']==NULL OR $buyBusinessProfile[0]['req_investment_max_price_currency']==''){
														$currency = 'PRICE_UNITS_INR';
													 }else{
															//$currency = 'PRICE_UNITS_'.$buyBusinessProfile[0]['req_investment_max_price_currency'];
															$currency = 'PRICE_UNITS_USD';
													 }*/	
													 
													foreach( unserialize(PRICE_UNITS_INR) as $priceUnitValue=>$priceUnitName ){
														//echo $buyBusinessProfile[0]['investment_min'];
													?>
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $buyBusinessProfile[0]['req_investment_max_price_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
													}
?>
												</select>
												</div>
												</div>
												<div class="chk_err_max_req" style="color: #a94442;"></div>
												<div class="help-block with-errors" ></div>
													
											  </div>
											</div>
											</div>
											<div class="col-md-12 text-center"><span id="errorMsg2" style="color: #ec0102;display:none;">Max value must be equal or greater than min value</span></div>
									</div>
									
									<div class="col-sm-4"></div>
									<div class="col-sm-3">
										
									</div>
									
									
								</div>
							

										
                                        </div>
                                    </div>
                                </div>

                           <div class="tab-pane1" id="postrequirement1">
								<br>
								<ul class="nav nav-tabs">
								<h4>Form Type</h4>
								</ul>
                                    <div class="panel-body">
                                        <div class="col-sm-12 padd0">
									
								<div class="form-c-box">
									                     <div class="areu">
                                                      
                                                        <div class="col-sm-3">
                                                            <div class="radio3">
                                                                <input type="radio" value="Featured" name="form_type"   class="radio1" <?php 
																if($buyBusinessProfile[0]['form_type']=='Featured'){
																
																	echo "checked='checked'";
																}
																	?>>
                                                                <label for="radio" class="cus-t">
                                                                    Featured
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="radio3">
                                                                <input type="radio" value="Mandate" name="form_type"   class="radio1" <?php 
																if($buyBusinessProfile[0]['form_type']=='Mandate'){
																
																	echo "checked='checked'";
																}
																	?>>
                                                                
                                                                <label for="radio" class="cus-t">
                                                                    Mandate
                                                                </label>
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
									<div class="col-sm-4"></div>
									<div class="col-sm-3">
										
									</div>
									<div class="col-sm-5" style="padding-right:0">
									<input type="hidden" name="frm_submit" value="bb_pr" />
										<button type="submit" class="savebtn updateshow" style="display:none;">Save</button>
									
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
