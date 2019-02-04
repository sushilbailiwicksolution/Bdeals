<div class="clearfix"></div>
<div id="gtco-features">
 <div class="container">
  <div class="row">
   <div class="col-md-12 gtco-heading ">
    <div class="p-15">
     <div class="row">
      <div class="col-md-9">
       <h2>My Account</h2>
      </div>
       <div class="col-md-12">
	    <div class="col-md-12 padd0 buyer-account-wel">
	  <div class="book-app col-md-2">
										
				<a href="<?php echo base_url();?>contact-us" target="_blank">
					
					<span>Book Appointment</span>
				</a>
				
		</div>						
		 <ul class="tabsHead">

            <li class="active"><a class="text-center" href="<?php echo base_url();?>user_business_profile#buyer_profile" target="_self">BUYER  </a></li>
            <li class=""><a class="text-center" href="<?php echo base_url();?>user_business_profile#seller_profile" target="_self">SELLER </a></li>
        </ul>
		</div>
		</div> 
     </div>
     <div class="row">
      <div class="col-sm-3">
	   <div class="col-md-12 padd0">

							<div class="wel-user text-center">

							<div class="col-md-12">

							<div class=" iconbox-medium round  overflow-hidden"><?php if(!empty($BasicProfile['user_image']) && $BasicProfile['user_image']!=''){?>
							<img src="<?php echo base_url().$BasicProfile['user_image'];?>" width="190">
							
							<?php } else { ?><img src="<?php echo asset_url();?>images/blank-user.png" alt="">
							
							<?php }?></div> 

							</div>

							<h5><?php echo ucwords(strtolower($BasicProfile['name']));?></h5>

							<p>Email Id : <?php echo $BasicProfile['customer_id'];?></p>

							<p>Contact No : <?php echo $BasicProfile['contact_number'];?></p>

							<p>Location : <?php echo $BasicProfile['location'];?></p>

							</div>

							</div>
       <div class="feat-c-box">
        <ul>
		 <li><a  href="<?php echo base_url();?>userprofile">My Account</a></li>
		 <li><a class="active-page" href="<?php echo base_url();?>user_business_profile">My Dashboard</a></li>	
		 <li><a  href="<?php echo base_url();?>my-listing">My Listing</a></li>
		 <li><a href="<?php echo base_url();?>user_query">Query / Enquiry</a></li>
		 <li><a href="<?php echo base_url();?>user_contacts/basic/0">In Box</a></li>
		 <!--<li><a  href="<?php echo base_url();?>user-contact-us-details">Enquiry</a></li>-->
		 <li><a href="<?php echo base_url();?>change-password">Change Password</a></li>
		 <li><a href="<?php echo base_url();?>invoice-payment">Invoice / Payment</a></li>  
        </ul>
       </div>
	  
	   
      </div>
      <div class="col-sm-9 r-bgc">
       <div class="areu">
        <div class="col-sm-12" >
         <div class="col-sm-6" >
          <h5>Invoice</h5>
         </div>
         <div class="col-sm-6" >
          <input type="hidden" id="base_url" name="base_url" value="<?php echo base_url();?>" />
          <button type="submit" class="savebtn">View invoice</button>
         </div>
        </div>
       </div>
       <div class="tab-pane" id="Sell-Business">
        <div class="panel-body padd0" style="margin-top:20px;">
         <div class="col-md-12 padd0">
          <div class="tabs-container">
           <ul class="nav nav-tabs list-bg">
            <!--<li data-id="personaldetail" class="active"><a class="gap-list" aria-expanded="true" href="#personaldetail" data-toggle="tab">Personal Detail</a></li>-->
            <li data-id="businessprofile" class="active"><a class="gap-list" aria-expanded="false" href="#businessprofile" data-toggle="tab">Business Profile</a></li>
            <li data-id="postrequirement"><a class="gap-list" aria-expanded="false" href="#postrequirement" data-toggle="tab">Post Your Requirement</a></li>
            
           </ul>
           <div class="tab-content">
            <div class="tab-pane" id="personaldetail">
             <div class="panel-body">
              <form name="lb_uprof" action="<?php echo base_url();?>buy-userregister-profile" method="post" data-toggle="validator" role="form" class="was-validated">
                <div class="form-c-box">
                  <div class="col-sm-4">
                    <div class="form-group">
                    <label for="lb_uname">Name</label>
                    <input type="hidden" name="frm_id" id="frm_id" value="<?php echo $sellBusinessUserProfile[0]['form_id'];?>" />
					<input type="hidden" name="business_type" id="business_type" value="buy_a_business" />
		    <input type="text" id="lb_uname" name="lb_uname" class="form-control" value="<?php echo $sellBusinessUserProfile[0]['name'];?>" placeholder="Name" data-error="Name required" required>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                    <label for="lb_email">Email address</label>
                    <input type="email" id="lb_email" name="lb_email" class="form-control" value="<?php echo $sellBusinessUserProfile[0]['email'];?>" placeholder="Email" data-error="Email required" required>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                    <label for="lb_mobile">Mobile Number</label>
                    <div class="input-group">
                      <div class="input-group-addon">+91</div>
                      <input type="number" id="lb_mobile" name="lb_mobile" class="form-control" value="<?php echo $sellBusinessUserProfile[0]['contact'];?>" placeholder="Mobile Number" data-error="Mobile number required" required>
                    </div>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-sm-8">
                    <div class="form-group">
                    <label for="lb_address">Address</label>
		    <textarea id="lb_address" name="lb_address" class="form-control" rows="3" data-error="Address required" required><?php echo $sellBusinessUserProfile[0]['address'];?></textarea>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                    <label for="lb_location">Location</label>
		    <input type="text" id="lb_location" name="lb_location" class="form-control" value="<?php echo $sellBusinessUserProfile[0]['location'];?>" placeholder="" data-error="Location required" required><br/><br/>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                    <label for="lb_company">Company Name</label>
                    <input type="text" id="lb_company" name="lb_company" class="form-control" value="<?php echo $sellBusinessUserProfile[0]['company_name'];?>" placeholder="" data-error="Company name required" required>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                    <label for="lb_designation">Designation</label>
                    <input type="text" id="lb_designation" name="lb_designation" value="<?php echo $sellBusinessUserProfile[0]['designation'];?>" class="form-control" placeholder="" data-error="Designation required" required>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                    <label for="lb_web">Website</label>
                    <input type="text" id="lb_web" name="lb_web" class="form-control" value="<?php echo $sellBusinessUserProfile[0]['website'];?>" placeholder="" data-error="Website required">
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="areu">
                    <p>Are You a</p>
                    <div class="col-sm-3">
                      <div class="checkbox">
		      <input type="checkbox" class="cus-t" id="checkbox1" name="lb_owner" value="owner" <?php if(strcasecmp($sellBusinessUserProfile[0]['who'], 'owner')==0){ echo "checked";}?>>
                          <label for="checkbox1" class="cus-t">
                            Business Owner
                          </label>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="checkbox">
                        <input type="checkbox" class="cus-t" id="checkbox2" name="lb_broker" value="broker" <?php if(strcasecmp($sellBusinessUserProfile[0]['who'], 'broker')==0){ echo "checked";}?>>
                          <label for="checkbox2" class="cus-t">
                            Business Broker
                          </label>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="checkbox">
                        <input type="checkbox" class="cus-t" id="checkbox3" name="lb_representative" value="representative" <?php if(strcasecmp($sellBusinessUserProfile[0]['who'], 'representative')==0){ echo "checked";}?>>
                          <label for="checkbox3" class="cus-t">
                            Representative
                          </label>
                      </div>
                    </div>
                    <div class="col-sm-3">&nbsp;</div>
                    <div class="alter">
                    <p>Alternate Contact Details</p>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                       <label for="lb_aemail">Email</label>
                       <input type="email" id="lb_aemail" name="lb_aemail" class="form-control" placeholder="" value="<?php echo $sellBusinessUserProfile[0]['alternative_email'];?>">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                      <label for="lb_aphone">Phone</label>
                      <input type="text" id="lb_aphone" name="lb_aphone" class="form-control" placeholder="Phone" value="<?php echo $sellBusinessUserProfile[0]['alternative_contact'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4"></div>
                  <div class="col-sm-4"></div>
                  <div class="col-sm-4" style="padding-right:0">
                   <input type="hidden" name="frm_submit" value="bb_up" />
				   <button type="submit" class="savebtn">Save &amp; Continue</button>
                  </div>
                </div>
               </form>
			  
			  
                </div>
               </div>
			   
			   
               <div class="tab-pane active" id="businessprofile">
                <div class="panel-body">
					<div class="form-c-box">
                 <!--<div class="col-sm-12 padd0">-->
                  <form name="bb_bprofile" id="bb_bprofile" method="POST" data-toggle="validator" role="form" class="was-validated">
								
								<div class="areu">
								<div class="col-sm-12">
									<div class="col-sm-4">
										<div class="form-group">
										<label for="">I want to buy/Invest in<span style="color: #ec0102;">*</span></label>
										<input type="hidden" name="frm_id" id="frm_id" value="<?php echo $buyBusinessProfile[0]['form_id'];?>" />
										<select class="form-control" id="buy_invest_in" name="buy_invest_in" data-error="Kindly select the option" required> 
												<?php
			 foreach( unserialize(BUY_INVEST_IN) as $investInValue => $investInName ){
?>
                          <option value="<?php echo $investInValue;?>" <?php if($investInValue == $buyBusinessProfile[0]['buy_invest_in']){echo 'selected=selected';}?>><?php echo $investInName;?></option>
<?php
			 }
?>												
												</select>
												<input type="text" name="other_buy_invest" class="form-control other_buy_invest" placeholder="Other buy/invest" value="<?php echo $businessDetails[0]['other_buy_invest'];?>" style="display:none;"/>
												<div class="buy_invest_inmsg" style="display:none;color:#A94469;">Other Buy/ Invest required</div>	
												<div class="help-block with-errors"></div>
										</div>
									</div>
									
									</div>
									</div>
									
									<div class="areu">
									<div class="col-sm-12">
										<p>Profile<span style="color: #ec0102;">*</span></p>
										<div class="col-sm-3">
											<div class="checkbox">
												<input type="checkbox" class="cus-t" id="profile_business_buyer" name="profile_business_buyer" value="BB" <?php if(strcasecmp($buyBusinessProfile[0]['profile_business_buyer'], 'BB')==0){ echo "checked";}?>>
												<label for="profile_business_buyer" class="cus-t">
													  Business Buyer                   
												  </label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="checkbox">
												<input type="checkbox" class="cus-t" id="profile_corporate_investor" name="profile_corporate_investor" value="CI" <?php if(strcasecmp($buyBusinessProfile[0]['profile_corporate_investor'], 'CI')==0){ echo "checked";}?>>
												<label for="profile_corporate_investor" class="cus-t">
													  Corporate Investor            
												  </label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="checkbox">
												<input type="checkbox" class="cus-t" id="profile_pe_vc" name="profile_pe_vc" value="PV" <?php if(strcasecmp($buyBusinessProfile[0]['profile_pe_vc'], 'PV')==0){ echo "checked";}?>>
												<label for="profile_pe_vc" class="cus-t">
													  PE / VC 
												  </label>
											</div>
										</div>
										
										<div class="col-sm-3">
											<div class="checkbox">
												<input type="checkbox" class="cus-t" id="profile_nri_foreign_investor" name="profile_nri_foreign_investor" value="NFI" <?php if(strcasecmp($buyBusinessProfile[0]['profile_nri_foreign_investor'], 'NFI')==0){ echo "checked";}?>>
												<label for="profile_nri_foreign_investor" class="cus-t">
													  NRI/Foreign Investor
												  </label>
											</div>
										</div>
										</div>
										<div class="col-sm-12">
										<div class="col-sm-3">
											<div class="checkbox">
												<input type="checkbox" class="cus-t" id="profile_business_lender" name="profile_business_lender" value="BL" <?php if(strcasecmp($buyBusinessProfile[0]['profile_business_lender'], 'BL')==0){ echo "checked";}?>>
												<label for="profile_business_lender" class="cus-t">
													  Business Lender     
												  </label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="checkbox">
												<input type="checkbox" class="cus-t" id="profile_business_broker" name="profile_business_broker" value="BBR" <?php if(strcasecmp($buyBusinessProfile[0]['profile_business_broker'], 'BBR')==0){ echo "checked";}?>>
												<label for="profile_business_broker" class="cus-t">
													  Business Broker
												  </label>
											</div>
										</div>
										<div class="help-block with-errors chk_err col-sm-12" style="color: #a94442;"></div>
										
										</div>
									</div>
									
									
									<div class="areu">
									<div class="col-sm-12">
										<p>Business interest<span style="color: #ec0102;">*</span></p>
										<div class="col-sm-3">
											<div class="checkbox">
												<input type="checkbox" class="cus-bi" id="bi_acquisition_buyout" name="bi_acquisition_buyout" value="AB" <?php if(strcasecmp($buyBusinessProfile[0]['bi_acquisition_buyout'], 'AB')==0){ echo "checked";}?>>
												<label for="bi_acquisition_buyout" class="cus-bi">
													  Acquisition / Buyout                                 
												  </label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="checkbox">
												<input type="checkbox" class="cus-bi" id="bi_distributor_cf" name="bi_distributor_cf" value="DC" <?php if(strcasecmp($buyBusinessProfile[0]['bi_distributor_cf'], 'DC')==0){ echo "checked";}?>>
												<label for="bi_distributor_cf" class="cus-bi">
													  Distributorship / C&F           
												  </label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="checkbox">
												<input type="checkbox" class="cus-bi" id="bi_invest_business" name="bi_invest_business" value="IB" <?php if(strcasecmp($buyBusinessProfile[0]['bi_invest_business'], 'IB')==0){ echo "checked";}?>>
												<label for="bi_invest_business" class="cus-bi">
													  Investment in Business   
												  </label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="checkbox">
												<input type="checkbox" class="cus-bi" id="bi_debt_financing" name="bi_debt_financing" value="DF" <?php if(strcasecmp($buyBusinessProfile[0]['bi_debt_financing'], 'DF')==0){ echo "checked";}?>>
												<label for="bi_debt_financing" class="cus-bi">
													  Debt financing
												  </label>
											</div>
										</div>
										</div>
										<div class="col-sm-12">
										<div class="col-sm-3">
											<div class="checkbox">
												<input type="checkbox" class="cus-bi" id="bi_jv_partnership" name="bi_jv_partnership" value="JP" <?php if(strcasecmp($buyBusinessProfile[0]['bi_jv_partnership'], 'JP')==0){ echo "checked";}?>>
												<label for="bi_jv_partnership" class="cus-bi">
													  JV / Partnership                          
												  </label>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="checkbox">
												<input type="checkbox" class="cus-bi" id="bi_startup_angel" name="bi_startup_angel" value="SA" <?php if(strcasecmp($buyBusinessProfile[0]['bi_startup_angel'], 'SA')==0){ echo "checked";}?>>
												<label for="bi_startup_angel" class="cus-bi">
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
										<div class="help-block with-errors chk_err_bi col-sm-12" style="color: #a94442;"></div>
										</div>
									</div>
									
									
									
									<div class="areu custom-arnu-2">
									
										<label><p>Business location<span style="color: #ec0102;">*</span></p></label>
										<div class="col-sm-12">
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
												<label for="">State<span style="color: #ec0102;">*</span></label>
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
									</div>
						
						
						<div class="areu custom-arnu-2">
									<div class="col-sm-12">
									<div class="col-sm-4">
										<div class="form-group">
										<label for="">Industry Preference<span style="color: #ec0102;">*</span></label>
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
				if($Sector->id== $pieces[$i]){echo 'selected=selected'; break;}}?>><?php echo $Sector->sector_name;?></option>
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
										    <div class="col-sm-6 padd0">
												
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
												<input type="text" pattern="[1-9]{1}[0-9]*"  placeholder="" id="funding_own" name="funding_own" value="<?php echo $buyBusinessProfile[0]['funding_own'];?>" class="par_numbers form-control" onkeyup="sumFund();">
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
												<input type="text" pattern="[1-9]{1}[0-9]*" class="con_numbers form-control" placeholder="" id="funding_debt" name="funding_debt" value="<?php echo $buyBusinessProfile[0]['funding_debt'];?>" onkeyup="sumFund();">
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
									<div class="areu">
									<div class="col-md-12 padd0">
									<div class="col-sm-4">
										<div class="form-group">
										<label for="">Investment Timeline<span style="color: #ec0102;">*</span></label>
										<select class="form-control" id="investment_timeline" name="investment_timeline" required> 
<?php
                            foreach( unserialize(INVESTMENT_TIMELINE) as $priceUnitValue=>$priceUnitName ){
?>
			    <option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $buyBusinessProfile[0]['investment_timeline']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
                            }
?>
																								
												</select>
												<div class="help-block with-errors"></div>
										</div>
									</div>
									
									<div class="col-sm-4">
										<div class="form-group">
										<label for="">Business Preference<span style="color: #ec0102;">*</span></label>
										<select class="form-control" id="business_preferences" name="business_preferences" required> 
<?php
                            foreach( unserialize(BUSINESS_PREFERENCE) as $priceUnitValue=>$priceUnitName ){
?>
			    <option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $buyBusinessProfile[0]['business_preferences']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
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
										<div class="form-group">
										<label for="">Purpose of Investment<span style="color: #ec0102;">*</span></label>
										<textarea id="purpose" name="purpose" class="form-control" rows="3" data-error="Purpose required" required><?php echo $buyBusinessProfile[0]['purpose'];?></textarea>
                    <div class="help-block with-errors"></div>
									  </div>
									</div>
									</div>
									  
									
									
									
									
									<div class="col-sm-4"></div>
									<div class="col-sm-4"></div>
									<div class="col-sm-4" style="padding-right:10px;">
										<input type="hidden" id="formId" name="formId" value="<?php echo $formId;?>" />
										 <input type="hidden" id="next_tab" name="next_tab" value="postrequirement" />
										<!--<input type="hidden" name="frm_submit" value="bb_bp" />-->
										<button type="button" class="savebtn buyerBP indsubmitProfile" id="btn_bbp">Save &amp; Continue</button>
									</div>
								 </form>					  
				  
                </div>
               </div>
              </div>
			  
			  
              <div class="tab-pane" id="postrequirement">
               <div class="panel-body">
                <div class="col-sm-12 padd0">
				<div class="form-c-box">
						<form name="bb_prequirement" id="bb_prequirement"  method="post" data-toggle="validator" role="form" class="was-validated">
								
								<div class="areu ">
									<div class="col-sm-12">
										<div class="form-group">
										<label for="">Key Requirement<span style="color: #ec0102;">*</span></label>
										<input type="hidden" name="frm_id" id="frm_id" value="<?php echo $buyBusinessProfile[0]['form_id'];?>" />
										<input type="text" id="key_requirement" name="key_requirement" class="form-control" value="<?php echo $buyBusinessProfile[0]['key_requirement'];?>" placeholder="Business Heading" data-error="Key Requirement Required" required>
										<div class="help-block with-errors"></div>
										</div>
									</div>
									</div>
									
									<div class="areu custom-arnu-2">
									<div class="col-sm-12">
									<div class="col-sm-6 padd0">
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
									<div class="areu ">
										<div class="col-sm-12">
										<p>Investment range <span style="color: #ec0102;">*</span></p>
											    <div class="col-sm-6 padd0">
											  <div class="form-group">  
												<label for="">Min<span style="color: #ec0102;">*</span></label>
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
												<label for="">Max<span style="color: #ec0102;">*</span></label>
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
											<div class="col-md-12 text-center"><span id="errorMsgREQ" style="color: #ec0102;display:none;">Max value must be equal or greater than min value</span></div>
									</div>
									
									<div class="col-sm-4"></div>
									<div class="col-sm-3">
										
									</div>
									<div class="col-sm-5" style="padding-right:0">
									<input type="hidden" id="next_tab" name="next_tab" value="postrequirement" />
                    <input type="hidden" id="formId" name="formId" value="<?php echo $formId;?>" />
									<!--<input type="hidden" name="frm_submit" value="bb_pr" />-->
										<button type="button" class="savebtn buyerPP" id="btn_bpr">Save</button>
										<!--<button type="submit" class="savebtn">Back</button>-->
									</div>
									
								
								</form>
			  
					</div>
                  </div>
                 </div>
                </div>

              

			  

			  
			  

             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
		 <div class="col-md-12 wel-user mt-30">
  
 <div class="col-md-4"><h5>Executive Name : <?php echo $assignedEmpDetails[0]->name;?></h5></div>
 <div class="col-md-4"><h5>Executive Email : <?php echo $assignedEmpDetails[0]->email;?></h5></div>
<div class="col-md-4"><h5>Executive Phone : <?php echo $assignedEmpDetails[0]->contact_no;?></h5></div>
      </div>	
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
        <img style="width:100%;" src="<?php echo base_url().$media['path'];?>" >
      </div>
     
    </div>
  </div>
</div>

