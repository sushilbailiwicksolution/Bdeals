<?php
//print_r($_SESSION);
//var_dump($assignedEmpDetails);
?>
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
     <div class="row mt-30">
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
         
            <li data-id="PropertyInformation" class="active"><a class="gap-list" aria-expanded="false" href="#PropertyInformation" data-toggle="tab">Property Information</a></li>
            <li data-id="TenancyDescription"><a class="gap-list" aria-expanded="false" href="#TenancyDescription" data-toggle="tab">Tenancy Description</a></li>
            <li data-id="TenancyDetails"><a class="gap-list" aria-expanded="false" href="#TenancyDetails" data-toggle="tab">Tenancy Details</a></li>
			
           </ul>
           <div class="tab-content">
            <!--<div class="tab-pane" id="userprofile">
             <div class="panel-body">
              <div class="form-c-box">
               <form id="seller_up" name="seller_up" method="POST"><?php /* action="<?php echo base_url();?>admin/seller/userProfile"> */ ?>
                <div class="col-sm-4">
                 <div class="form-group">
                  <label for="">Name</label>
					<input type="text" name="name" id="name" class="form-control" placeholder="Name" value="<?php echo $businessDetails[0]['name'];?>">
                 </div>
                </div>
                <div class="col-sm-4">
                 <div class="form-group">
                  <label for="">Email address</label>
	          <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="<?php echo $businessDetails[0]['email'];?>">
                 </div>
                </div>
                <div class="col-sm-4">
                 <div class="form-group">
                  <label for="">Mobile Number</label>
                  <div class="input-group">
                   <div class="input-group-addon">+91</div>
		   <input type="text" name="contact" id="contact" class="form-control" placeholder="Mobile Number" value="<?php echo $businessDetails[0]['contact'];?>">
                  </div>
                 </div>
                </div>
                <div class="col-sm-8">
                 <div class="form-group">
                  <label for="">Address</label>
		  <textarea name="address" id="address" class="form-control" rows="3"><?php echo $businessDetails[0]['address'];?></textarea>
                 </div>
                </div>
                <div class="col-sm-4">
                 <div class="form-group">
                  <label for="">Location</label>
		  <input type="text" name="location" id="location" class="form-control" placeholder="" value="<?php echo $businessDetails[0]['location'];?>">
                  <br>
                  <br>
                 </div>
                </div>
                <div class="col-sm-4">
                 <div class="form-group">
                  <label for="">Company Name</label>
		  <input type="text" name="cname" id="cname" class="form-control" placeholder="" value="<?php echo $businessDetails[0]['company_name'];?>">
                 </div>
                </div>
                <div class="col-sm-4">
                 <div class="form-group">
                  <label for="">Designation</label>
		  <input type="text" name="designation" id="designation" class="form-control" placeholder="Designation" value="<?php echo $businessDetails[0]['designation'];?>">
                 </div>
                </div>
                <div class="col-sm-4">
                 <div class="form-group">
                  <label for="">Website</label>
		  <input type="text" name="website" id="website" class="form-control" placeholder="Website" value="<?php echo $businessDetails[0]['website'];?>">
                 </div>
                </div>
                <div class="areu">
                 <p>Are You a</p>
                 <div class="col-sm-3">
                  <div class="checkbox">
		   <input type="checkbox" class="cus-t" id="checkbox1" name="owner" <?php echo $businessDetails[0]['who'] == 'owner' ? 'checked="checked"' : '';?>>
                   <label for="checkbox1" class="cus-t">
                    Business Owner
                   </label>
                  </div>
                 </div>
                 <div class="col-sm-3">
                  <div class="checkbox">
                   <input type="checkbox" class="cus-t" id="checkbox2" name="broker" <?php echo $businessDetails[0]['who'] == 'broker' ? 'checked="checked"' : '';?>>
                   <label for="checkbox2" class="cus-t">
                    Business Broker
                   </label>
                  </div>
                 </div>
                 <div class="col-sm-3">
                  <div class="checkbox">
                   <input type="checkbox" class="cus-t" id="checkbox3" name="representative" <?php echo $businessDetails[0]['who'] == 'representative' ? 'checked="checked"' : '';?>>
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
		    <input type="email" name="aemail" id="aemail" class="form-control" placeholder="Email" value="<?php echo $businessDetails[0]['alternative_email'];?>">
                   </div>
                  </div>
                  <div class="col-sm-4">
                   <div class="form-group">
                    <input type="text" name="acontact" id="acontact" class="form-control" placeholder="Phone" value="<?php echo $businessDetails[0]['alternative_contact'];?>">
                   </div>
                  </div>
                 </div>
                 <div class="col-sm-4"></div>
                  <div class="col-sm-4"></div>
                   <div class="col-sm-4" style="padding-right:0">
                    <input type="hidden" id="next_tab" name="next_tab" value="basicinformation" />
                    <input type="hidden" id="formId" name="formId" value="<?php echo $formId;?>" />
                    <button type="button" class="savebtn" id="btn_up">Save &amp; Continue</button>
                   </div>
                  </form>
                 </div>
                </div>
               </div>-->
               <div class="tab-pane active" id="PropertyInformation">
                <div class="panel-body">
                 <div class="col-sm-12 padd0">
				  <form id="su_binfo" name="su_binfo" method="POST">
        				<div class="form-c-box">
									<div class="areu">	
									 
										<div class="col-sm-12">
											<div class="form-group">
												<label for="keyHeadline">Key Headline<span style="color: #ec0102;">*</span></label>
												<input type="hidden" name="frm_id" id="frm_id" value="<?php echo $sellBusinessBasicInformation[0]['form_id'];?>" />
												<input type="text" id="keyHeadline" name="keyHeadline" class="form-control" placeholder="Business Heading" value="<?php echo $sellBusinessBasicInformation[0]['key_headline'];?>" data-error="Key Headline required" required>
												<div class="help-block with-errors"></div>
											</div>
										</div>
                  
										<div class="col-sm-12">
											<div class="form-group">
												<label for="bus_desc">Description of your property<span style="color: #ec0102;">*</span></label>
												<textarea id="bus_desc" name="bus_desc" class="form-control" rows="3" data-error="Description required" required maxlength="1000"><?php echo $sellBusinessBasicInformation[0]['description'];?></textarea>
												<div class="help-block with-errors"></div>
											</div>
										</div>
									</div>
             <div class="areu">
                    <p>Asset location</p>
                      <div class="col-sm-3">
                      <div class="form-group">
                        <label for="country">Country<span style="color: #ec0102;">*</span></label>
			<select id="country" name="country" onChange="getChangeStates('<?php echo base_url();?>', this.value)" class="form-control" required data-error="Country required" >
                          <option value="">Select</option>
<?php
                          foreach( $this->cachemethods->getCountryDetails() as $country ){
?>
                          <option value="<?php echo $country->id;?>" <?php if($country->id == $sellBusinessBasicInformation[0]['location_country']){echo 'selected=selected';}?>><?php echo $country->country_name; ?></option>
<?php
                          }
?>
                         </select>
                         <div class="help-block with-errors"></div>
                        </div>
                      </div>
                     <div class="col-sm-3 regionid">
                      <div class="form-group">
                        <label for="region">Region</label>
					
                                        <Select class="form-control" id="region" name="region" onChange="getChangeRStates('<?php echo base_url();?>', this.value)"> 
										<option value="">Select</option>
<?php
                          foreach( $this->cachemethods->getRegionDetails() as $Region ){
?>
                          <option value="<?php echo $Region->region_id;?>" <?php if($Region->region_id == $sellBusinessBasicInformation[0]['location_region']){echo 'selected=selected';}?>><?php echo $Region->region_name; ?></option>
<?php
                          }
?>
                        </select>
                        </div>
                      </div>
                      <div class="col-sm-3">
                       <div class="form-group">
                        <label for="state">State<span style="color: #ec0102;">*</span></label>
			<select class="form-control" id="state" name="state" onChange="getChangeCities('<?php echo base_url();?>', this.value)" required data-error="State required">
                         <option value="">Select</option>
<?php
if($businessDetails[0]['location_region']==''){
                          foreach( $this->cachemethods->getStateByCountry($sellBusinessBasicInformation[0]['location_country']) as $statedet ){
?>
                          <option value="<?php echo $statedet->id;?>" <?php if($statedet->id == $businessDetails[0]['location_state']){
							  
							  echo 'selected=selected';
							  
						} ?>><?php 
						
						echo $statedet->state_name;	
						 ?></option>
<?php
                         }
}

                          foreach( $this->cachemethods->getStateByRegion($sellBusinessBasicInformation[0]['location_region']) as $statedet ){
							  
							  //print_r($statedet );
?>
                          <option value="<?php echo $statedet->id;?>" <?php 
						  if($statedet->id == $sellBusinessBasicInformation[0]['location_state']){
							  
							  echo 'selected=selected';
							  
						}?>><?php 
						
						echo $statedet->state_name;	
						
						?></option>
<?php
                         }

?>							<option value="Other" <?php if($sellBusinessBasicInformation[0]['location_state']=='Other'){
							
							echo 'selected=selected';
							
						}?>>Other</option>
			</select>
			<input type="text" name="other_state" class="form-control other_state" placeholder="Other State" value="<?php echo $businessDetails[0]['other_state'];?>" style="display:none;"/>
                        <div class="help-block with-errors"></div>
                       </div>
                      </div>
                      <div class="col-sm-3 citystateid">
                       <div class="form-group">
                        <label for="city">City<span style="color: #ec0102;">*</span></label>
						
					 <select class="form-control" id="city" name="city"  data-error="City required">
                         <option value="">Select</option>
						
<?php
                         foreach( $this->cachemethods->getCityByStateId($sellBusinessBasicInformation[0]['location_state']) as $citydet ){
							 if($sellBusinessBasicInformation[0]['location_city']!="Other"){
							 
?>
                         <option value="<?php echo $citydet->id;?>" <?php if($citydet->id == $sellBusinessBasicInformation[0]['location_city']){echo 'selected=selected';}?>><?php echo $citydet->city_name; ?></option>
<?php
                         }
						 else{?>
							 
							<option value="Other" <?php echo 'selected=selected';?>>Other</option> 
<?php						 }
						 }
?>						
                        </select>
					
                       <input type="text" id="other_city"  name="other_city" class="form-control" placeholder="Other City" value="<?php echo $sellBusinessBasicInformation[0]['other_city'];?>"  data-error="City required" style="display:none;"/>
					   <div id="other_citymsg" style="display:none;color:#A94469;">Other city required</div>	
                        <div class="help-block with-errors"></div>
                       </div>
                      </div>
					   <div class="col-sm-3 statecityid" style="display:none;">
                       <div class="form-group">
                        <label for="city">Other City<span style="color: #ec0102;">*</span></label>
					 
                       <input type="text" id="other_city_2"  name="other_city_2" class="form-control" placeholder="Other City" value="<?php echo $sellBusinessBasicInformation[0]['other_city'];?>"  data-error="City required" />
                        <div class="help-block with-errors"></div>
                       </div>
                      </div>
                    
                  </div>
								
					<div class="areu">
										 
										 
						<div class="col-sm-12">				 
                      <div class="col-sm-3">
                      <div class="form-group">
                        <label for="property_type">Property Type<span style="color: #ec0102;">*</span></label>
                        <Select class="form-control" id="property_type" name="property_type" required data-error="Property Type required">
                          <option value="">Select</option>
<?php
			  $selectedCategory = null;
                          foreach( unserialize(PROPERTY_TYPE) as $catValue => $catName ){
                           if( isset( $sellBusinessBasicInformation[0]['property_type_old'] ) && $sellBusinessBasicInformation[0]['property_type_old'] != null ){
                            $selectedCategory = $sellBusinessBasicInformation[0]['property_type_old'];
			   }else if( $i == 0 ){
                            $selectedCategory = $catValue;
                           }
?>
			   <option value="<?php echo $catValue;?>" <?php if($catValue == $sellBusinessBasicInformation[0]['property_type_old']){echo 'selected=selected';}?>><?php echo $catName;?></option>
<?php
                           $i++;
			 }
?>
                        </select>
						<div class="help-block with-errors"></div>
                        </div>
                      </div>
					</div>
										
										 
											
				<div class="col-sm-12">
					<div class="col-sm-4">
						<div class="form-group">
							<label for="saleable_area">Saleable Area in sqft</label>
							<input type="text" id="saleable_area" name="saleable_area" class="form-control" placeholder="500 sqft" value="<?php echo $sellBusinessBasicInformation[0]['saleable_area'];?>" data-error="Saleable Area required" required>
							<div class="help-block with-errors"></div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="age_construction">Age of Construction</label>
							<input type="text" id="age_construction" name="age_construction" class="form-control" placeholder="20 years" value="<?php echo $sellBusinessBasicInformation[0]['age_construction'];?>" data-error="Age Construction required" required>
							<div class="help-block with-errors"></div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
						<label for="authority_approval">Authority Approvals</label>
						<!--<input type="text" id="authority_approval" name="authority_approval" class="form-control" placeholder="Yes-No" value="<?php echo $sellBusinessBasicInformation[0]['authority_approval'];?>" data-error="Authority Approvals required" required>-->
						<select class="form-control" id="authority_approval" name="authority_approval" data-error="Authority Approvals required" required>
							<option value="">Select</option>
							<option value="Yes" <?php if($sellBusinessBasicInformation[0]['authority_approval'] == "Yes"){echo 'selected=selected';}?>>YES</option>
							<option value="No" <?php if($sellBusinessBasicInformation[0]['authority_approval'] == "No"){echo 'selected=selected';}?>>NO</option>		
						
						</select>
						<div class="help-block with-errors"></div>
						</div>
					</div>
				</div>
										
				</div>
									<div class="col-sm-4"></div>
									<div class="col-sm-3">
										
									</div>
									<div class="col-sm-5" style="padding-right:0">
									  <input type="hidden" id="next_tab" name="next_tab" value="TenancyDescription" />
									<input type="hidden" name="frm_submit" value="su_binfo" />
									
										  <button type="button" class="savebtn" id="btn_pro">Save &amp; Continue</button>
									</div>
									
								</div>
								</form>
                </div>
               </div>
              </div>
              <div class="tab-pane" id="TenancyDescription">
               <div class="panel-body">
                <div class="col-sm-12 padd0">
				  <form id="su_ten" name="su_ten" method="POST">
					<div class="form-c-box">
								<div class="areu">
									<div class="col-sm-12">
									<div class="col-sm-8">
										<div class="form-group">
										<label for="">Tenancy Details</label>
										<input type="hidden" name="frm_id" id="frm_id" value="<?php echo $sellBusinessDescription[0]['form_id'];?>" />
										<textarea id="tenancy_details" name="tenancy_details" class="form-control" rows="3"  data-error="Tenancy Details required" required><?php echo $sellBusinessDescription[0]['tenancy_details'];?></textarea>
										<div class="help-block with-errors"></div>
									    </div>
									</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
										<label for="">Total Lease Period<span style="color: #ec0102;"> (If More than 1 Tenant, Please average the data)</span> </label>
										</div>
										</div>
										<div class="col-sm-12">
										<div class="col-sm-4">
										<div class="form-group">
										<input type="text" id="lease_period" name="lease_period" class="form-control" placeholder="" value="<?php echo $sellBusinessDescription[0]['lease_period'];?>"  data-error="Lease Period required" required>
										<div class="help-block with-errors"></div>
										</div>
										</div>
										<!--<span>If More than 1 Tenant, Please average the data</span>-->
									    </div>
									<!--</div>-->
									
									<div class="col-sm-12">
									<div class="col-sm-4">
										<div class="form-group">
										<label for="">Lease Started</label>
										<input type="date" id="lease_start" name="lease_start" class="form-control" placeholder="" value="<?php echo $sellBusinessDescription[0]['lease_start'];?>"  data-error="Lease Started required" required>
										<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
										<label for="">Lease Ending</label>
										<input type="date" id="lease_end" name="lease_end" class="form-control" placeholder="" value="<?php echo $sellBusinessDescription[0]['lease_end'];?>"  data-error="Lease End required" required>
										<div class="help-block with-errors"></div>
										</div>
									</div>
									</div>
									</div>
									<div class="areu">
										<div class="col-sm-12">
										  <div class="col-sm-3">
												<div class="form-group">
													<label for="">Lock in Period</label>
													<input type="text" id="lock_period" name="lock_period" class="form-control" placeholder="Years" value="<?php echo $sellBusinessDescription[0]['lock_period'];?>"  data-error="Lock in Period required" required>
													<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="form-group">
												<div class="form-group">
													<label for="">Security Received</label>
													<input type="text" id="security_received" name="security_received" class="form-control" placeholder="Rs." value="<?php echo $sellBusinessDescription[0]['security_received'];?>"  data-error="Security Received required" required>
													<div class="help-block with-errors"></div>
												</div>
												</div>
											</div>
											
											
											<div class="col-sm-3">
												<div class="form-group">
												<div class="form-group">
													<label for="">Monthly Rental </label>
													<input type="text" id="monthly_rental" name="monthly_rental" class="form-control" placeholder="Rs." value="<?php echo $sellBusinessDescription[0]['monthly_rental'];?>"  data-error="Monthly Rental required" required>
													<div class="help-block with-errors"></div>
												</div>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="form-group">
												<div class="form-group">
													<label for="">Annual Rent</label>
													<input type="text" id="annual_rental" name="annual_rental" class="form-control" placeholder="Rs." value="<?php echo $sellBusinessDescription[0]['monthly_rental'];?>"  data-error="Annual Rental required" required>
													<div class="help-block with-errors"></div>
												</div>
												</div>
											</div>
											</div>
											<div class="col-sm-12">
											<div class="col-sm-3">
												<div class="form-group">
												<div class="form-group">
													<label for="">Annual Maintenance</label>
													<input type="text" id="annual_maintenance" name="annual_maintenance" class="form-control" placeholder="Rs." value="<?php echo $sellBusinessDescription[0]['annual_maintenance'];?>"  data-error="Annual Maintenance required" required>
													<div class="help-block with-errors"></div>
												</div>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="form-group">
												<div class="form-group">
													<label for="">Escalation After</label>
													<input type="date" id="escalation_after" name="escalation_after" class="form-control" placeholder="" value="<?php echo $sellBusinessDescription[0]['escalation_after'];?>"  data-error="Escalation After required" required>
													<div class="help-block with-errors"></div>
												</div>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="form-group">
												<div class="form-group">
													<label for="">Escalation %</label>
													<input type="text" id="escalation_percent" name="escalation_percent" class="form-control" placeholder="0%" value="<?php echo $sellBusinessDescription[0]['escalation_percent'];?>"  data-error="Escalation % required" required>
													
													<div class="help-block with-errors"></div>
												</div>
												</div>
											</div>
											</div>
										
									</div>
									<div class="col-sm-4"></div>
									<div class="col-sm-3">
										
									</div>
									<div class="col-sm-5" style="padding-right:0">
										
										  <input type="hidden" id="next_tab" name="next_tab" value="TenancyDetails" />
									<input type="hidden" name="frm_submit" value="su_ten" />
									
										  <button type="button" class="savebtn" id="tendesc">Save &amp; Continue</button>
									</div>
									
								</div>
								</form>
                 </div>
                </div>
				</div>
				
               <div class="tab-pane" id="TenancyDetails">
                 <div class="panel-body">
				 <form name="su_det" id="su_det"  method="post" data-toggle="validator" role="form" class="was-validated">
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
													<label for="">Expected ROI % at present</label>
													<input type="text" id="roi_present" name="roi_present" class="form-control" placeholder="%" value="<?php echo $sellBusinessDescription[0]['roi_present'];?>"  data-error="ROI Present required" required>
													<div class="help-block with-errors"></div>
												</div>
											</div>
									</div>		
									
									
									<div class="col-sm-12">
										  <div class="col-sm-3">
												<div class="form-group">
													<label for="">Expected ROI % after escalation</label>
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
						<div class="col-sm-6" style="padding-right: 0px;">
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
										
										<input type="hidden" name="frm_submit" value="su_det" />
									
										  <button type="button" class="savebtn" id="tende">Save &amp; Continue</button>
									</div>
									
								</div>
				</form>
              </div>
				 
				 
               </div>


              <!--<div class="tab-pane" id="Payment">
               <div class="panel-body">
                <div class="col-sm-12 padd0">
                 <div class="form-c-box">
                  <form id="seller_payment" name="seller_payment" method="POST" action="">
                   <div class="col-md-12 padd0">
                    <table class="table table-bordered">
                     <thead>
                      <tr>
                       <th>Package / Services </th>
                       <th>Price</th>
                      </tr>
                     </thead>
                     <tbody>
                      <tr>
                       <td class="col-md-9">Classic Package</td>
                       <td class="col-md-3"><i class="fa fa-inr"></i> 4,999/-</td>
                      </tr>
                      <tr>
                       <td class="col-md-9">Investor Memorandum</td>
                       <td class="col-md-3"><i class="fa fa-inr"></i> 15,000/-</td>
                      </tr>
                      <tr>
                       <td class="text-right">
                        <p>
                         <strong>Total Amount: </strong>
                        </p>
                        <p>
                         <strong>Vat ( 14% ): </strong>
                        </p>
                       </td>
                       <td>
                        <p>
                         <strong><i class="fa fa-inr"></i> 19,999.00/-</strong>
                        </p>
                        <p>
                         <strong><i class="fa fa-inr"></i> 2,799.86/-</strong>
                        </p>
                       </td>
                      </tr>
                      <tr>
                       <td class="text-right"><h5><strong>Total: </strong></h5></td>
                       <td class="text-left text-danger"><h5><strong><i class="fa fa-inr"></i> 22,799.00/-</strong></h5></td>
                      </tr>
                     </tbody>
                    </table>
                    <div class="areu">
                     <p>Pay By :</p>
                     <div class="col-sm-3">
                      <div class="radio">
                       <input type="radio" id="radio">
                       <label for="radio" class="cus-t">
                        PayU
                       </label>
                      </div>
                     </div>
                     <div class="col-sm-3">
                      <div class="radio">
                       <input type="radio" id="radio">
                       <label for="radio" class="cus-t">
                        Net banking
                       </label>
                      </div>
                     </div>
                     <div class="col-sm-3">
                      <div class="radio">
                       <input type="radio" id="radio">
                       <label for="radio" class="cus-t">
                        Card- Credit &amp; Debit
                       </label>
                      </div>
                     </div>
                     <div class="col-sm-3">
                      <div class="radio">
                       <input type="radio" id="radio">
                       <label for="radio" class="cus-t">
                        Bank Transfer
                       </label>
                      </div>
                     </div>
                    </div>
                   </div>
                   <div class="col-sm-4"></div>
                   <div class="col-sm-3"></div>
                   <div class="col-sm-5" style="padding-right:0">
                    <button type="submit" class="savebtn">Save</button>
                   </div>
                  </form>
                 </div>
                </div>
               </div>
              </div>-->
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

