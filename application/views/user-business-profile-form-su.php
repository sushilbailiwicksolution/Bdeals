<?php
 $packageArray     = array();
 $selectedPackName = null;
 $selectedPackId   = null;
 if( isset($packages) ){
  foreach( $packages as $package ){
   if( $user_package[0]['package_id'] == $package['id'] && $sell_business_details[0]['form_id'] == $user_package[0]['form_id'] ){
    $selectedPackName = $package['name'];
    $selectedPackId   = $package['id'];
   }
  }

  foreach( $packages as $package ){
   $packageArray[$package['name']] = $package['id'];
  }
 }
 
 //print_r($businessDetails);

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
            <!--<li data-id="userprofile" class="active"><a class="gap-list" aria-expanded="true" href="#userprofile" data-toggle="tab">User Profile</a></li>-->
            <li data-id="basicinformation" class="active"><a class="gap-list" aria-expanded="false" href="#basicinformation" data-toggle="tab">Basic Information</a></li>
            <li data-id="businesspitch"><a class="gap-list" aria-expanded="false" href="#businesspitch" data-toggle="tab">Business Pitch</a></li>
            <li data-id="dealdetails"><a class="gap-list" aria-expanded="false" href="#dealdetails" data-toggle="tab">Deal Details</a></li>
			<!--<li data-id="jvdetails"><a class="gap-list" aria-expanded="false" href="#jvdetails" data-toggle="tab">JV Details</a></li>-->
            <li data-id="Uploads"><a class="gap-list" aria-expanded="false" href="#Uploads" data-toggle="tab">Uploads</a></li>
            <li data-id="Packagedetails"><a class="gap-list" aria-expanded="false" href="#Packagedetails" data-toggle="tab">Package Details</a></li>
            <li data-id="Additionalservices"><a class="gap-list" aria-expanded="false" href="#Additionalservices" data-toggle="tab">Additional Services</a></li>
            <!--<li data-id="Payment"><a class="gap-list" aria-expanded="false" href="#Payment" data-toggle="tab">Payment</a></li>-->
           </ul>
           <div class="tab-content">

               <div class="tab-pane active" id="basicinformation">
                <div class="panel-body">
                 <div class="col-sm-12 padd0">
                  <div class="form-c-box">
		   <form id="su_binfo" name="su_binfo" method="POST">
                   <div class="col-sm-12">
                    <div class="form-group">
                     <label for="">Key Headline</label>
		     <input type="text" name="keyHeadline" id="keyHeadline" class="form-control" placeholder="Business Heading" value="<?php echo $businessDetails[0]['key_headline'];?>" maxlength="100">
                    </div>
                   </div>
                  <!-- <div class="col-sm-12">
                    <div class="form-group">
                     <label for="">Description of your business</label>
		     <textarea name="bus_desc" id="bus_desc" class="form-control" rows="3" maxlength="200"><?php echo $businessDetails[0]['description'];?></textarea>
                    </div>
                   </div>-->
             <div class="areu">
                    <p>Business location</p>
                      <div class="col-sm-3">
                      <div class="form-group">
                        <label for="country">Country<span style="color: #ec0102;">*</span></label>
			<select id="country" name="country" onChange="getChangeStates('<?php echo base_url();?>', this.value)" class="form-control" required data-error="Country required" >
                          <option value="">Select</option>
<?php
                          foreach( $this->cachemethods->getCountryDetails() as $country ){
?>
                          <option value="<?php echo $country->id;?>" <?php if($country->id == $businessDetails[0]['location_country']){echo 'selected=selected';}?>><?php echo $country->country_name; ?></option>
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
                          <option value="<?php echo $Region->region_id;?>" <?php if($Region->region_id == $businessDetails[0]['location_region']){echo 'selected=selected';}?>><?php echo $Region->region_name; ?></option>
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
                          foreach( $this->cachemethods->getStateByCountry($businessDetails[0]['location_country']) as $statedet ){
?>
                          <option value="<?php echo $statedet->id;?>" <?php if($statedet->id == $businessDetails[0]['location_state']){
							  
							  echo 'selected=selected';
							  
						} ?>><?php 
						
						echo $statedet->state_name;	
						 ?></option>
<?php
                         }
}

                          foreach( $this->cachemethods->getStateByRegion($businessDetails[0]['location_region']) as $statedet ){
							  
							  //print_r($statedet );
?>
                          <option value="<?php echo $statedet->id;?>" <?php 
						  if($statedet->id == $businessDetails[0]['location_state']){
							  
							  echo 'selected=selected';
							  
						}?>><?php 
						
						echo $statedet->state_name;	
						
						?></option>
<?php
                         }

?>							<option value="Other" <?php if($businessDetails[0]['location_state']=='Other'){
							
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
                         foreach( $this->cachemethods->getCityByStateId($businessDetails[0]['location_state']) as $citydet ){
							 if($businessDetails[0]['location_city']!="Other"){
							 
?>
                         <option value="<?php echo $citydet->id;?>" <?php if($citydet->id == $businessDetails[0]['location_city']){echo 'selected=selected';}?>><?php echo $citydet->city_name; ?></option>
<?php
                         }
						 else{?>
							 
							<option value="Other" <?php echo 'selected=selected';?>>Other</option> 
<?php						 }
						 }
?>						
                        </select>
					
                       <input type="text" id="other_city"  name="other_city" class="form-control" placeholder="Other City" value="<?php echo $businessDetails[0]['other_city'];?>"  data-error="City required" style="display:none;"/>
					   <div id="other_citymsg" style="display:none;color:#A94469;">Other city required</div>	
                        <div class="help-block with-errors"></div>
                       </div>
                      </div>
					   <div class="col-sm-3 statecityid" style="display:none;">
                       <div class="form-group">
                        <label for="city">Other City<span style="color: #ec0102;">*</span></label>
					 
                       <input type="text" id="other_city_2"  name="other_city_2" class="form-control" placeholder="Other City" value="<?php echo $businessDetails[0]['other_city'];?>"  data-error="City required" />
                        <div class="help-block with-errors"></div>
                       </div>
                      </div>
                    
                  </div>
                             <div class="areu">
				  
                    <p>Listing Type</p>
					<div class="col-sm-12">
                      <div class="col-sm-3">
                      <div class="form-group">
                        <label for="category">Category<span style="color: #ec0102;">*</span></label>
                        <Select class="form-control" id="category" onChange="getChangeCat('<?php echo base_url();?>', this.value)" name="category" required data-error="Listing Type required">
                          <option value="">Select</option>
<?php
                          foreach( $this->cachemethods->getSectorDetails() as $Sector ){
?>
                          <option value="<?php echo $Sector->id;?>" <?php if($Sector->id == $businessDetails[0]['listing_category']){echo 'selected=selected';}?>><?php echo $Sector->sector_name; ?></option>
<?php
                          }
?>						<option value="Other" <?php if($businessDetails[0]['listing_category']=='Other'){
							
							echo 'selected=selected';
							
						}?>>Other</option>
                        </select>
						<input type="text" name="listing_category_other" class="form-control listing_category_other" placeholder="Other Category" value="<?php echo $businessDetails[0]['listing_category_other'];?>" style="display:none;" />
						<div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-sm-3 subcatid">
                      <div class="form-group">
                        <label for="subcategory">Sub Category</label>
                        <Select class="form-control" id="subcategory" name="subcategory">
                          <option value="">Select</option>
<?php
			foreach( $this->cachemethods->getSubCatBycategory($businessDetails[0]['listing_category']) as $subcat ){
				
				if($businessDetails[0]['listing_sub_category']!="Other"){
?>
                          <option value="<?php echo $subcat->sub_id;?>" <?php if($subcat->sub_id == $businessDetails[0]['listing_sub_category']){
							  
							  echo 'selected=selected';
							  
						} ?>><?php 
						
						echo $subcat->sub_sector_name;	
						 ?></option>
<?php
                         }else{
						 ?>
						 <option value="Other" <?php echo 'selected=selected';?>>Other</option> 
						 <?php
						 }
						 }?>	
                        </select>
						<input type="text"  name="listing_sub_category_other" class="form-control sub_category_other" placeholder="Other Sub Category" value="<?php echo $businessDetails[0]['listing_sub_category_other'];?>"  data-error="sub category required" style="display:none;"/>
						<div class="help-block with-errors"></div>
                        </div>
                      </div>
					   <div class="col-sm-3 othersubcatid" style="display:none;">
                       <div class="form-group">
                        <label for="city">Other Sub Category<span style="color: #ec0102;">*</span></label>
					 
                       <input type="text" id="listing_sub_category_other_2"  name="listing_sub_category_other_2" class="form-control" placeholder="Other Sub Category" value="<?php echo $businessDetails[0]['listing_sub_category_other'];?>"  data-error="sub category required"/>
                        <div class="help-block with-errors"></div>
                       </div>
                      </div>
                      <div class="col-sm-3">
                      <div class="form-group">
                        <label for="legal">Legal Entity</label>
                        <Select class="form-control" id="legal" name="legal" >
                          <option value="">Select</option>
<?php
			 foreach( unserialize(LEGAL_ENTITIES) as $legalValue => $legalName ){
?>
                          <option value="<?php echo $legalValue;?>" <?php if($legalValue == $businessDetails[0]['legal_entity']){echo 'selected=selected';}?>><?php echo $legalName;?></option>
<?php
			 }
?>
                        </select>
						<div class="help-block with-errors"></div>
                        </div>
                      </div>
					  
					  
                      <div class="col-sm-3">
                        <div class="form-group">
                        <label for="eyear">Year of Commencement</label>
                        <Select class="form-control" id="eyear" name="eyear">
                          <option value="">Select</option>
<?php
			  for( $i = (date('Y') - DIFF_FROM_CURRENT_YEAR); $i <= date('Y'); $i++ ){
?>
                          <option value="<?php echo $i;?>" <?php if($i == $businessDetails[0]['yoe']){echo 'selected=selected';}?>><?php echo $i;?></option>
<?php
			  }
?>
                        </select>
						<div class="help-block with-errors"></div>
                        </div>
                      </div>
					  </div>
					  <div class="col-sm-12">
                      <div class="alter">
                      <div class="col-sm-4">
                        <div class="form-group">
                        <label for="bstatus">Current Stage of Business<span style="color: #ec0102;">*</span></label>
                        <Select class="form-control" id="bstatus" name="bstatus" required data-error="Business Status required">
                          <option value="">Select</option>
<?php
			 foreach( unserialize(BUSINESS_CURRENT_STATUS) as $currentStatusValue => $currentStatusName ){
?>
                          <option value="<?php echo $currentStatusValue;?>" <?php if($currentStatusValue == $businessDetails[0]['current_status_of_business']){echo 'selected=selected';}?>><?php echo $currentStatusName;?></option>
<?php
			 }
?>
                        </select>
						 <input type="text" id="bstatus_other"  name="bstatus_other" class="form-control" placeholder="Other" value="<?php echo $businessDetails[0]['bstatus_other'];?>"  data-error="Other Status required" style="display:none;"/>
						<div class="help-block with-errors"></div>
                        </div>
                      </div>
                      </div>
                    </div>
                  </div>
                   <div class="col-sm-4"></div>
                   <div class="col-sm-3"></div>
                   <div class="col-sm-5" style="padding-right:0">
                    <input type="hidden" id="formId" name="formId" value="<?php echo $formId;?>" />
                    <input type="hidden" id="next_tab" name="next_tab" value="businesspitch" />
                    <button type="button" class="savebtn" id="btn_bi">Save &amp; Continue</button>
                   </div>
                  </form>
                 </div>
                </div>
               </div>
              </div>
              <div class="tab-pane" id="businesspitch">
               <div class="panel-body">
                <div class="col-sm-12 padd0">
				<div class="form-c-box">
                 <form name="su_bp" id="su_bp" method="post" data-toggle="validator" role="form" class="was-validated">
                
                  
                  <div class="areu">
                    <p>No. of Employees</p>
						<div class="col-sm-12">
                        <!--<div class="col-sm-4">
                        <div class="form-group">
                        <label for="noemp_par">Permanent<span style="color: #ec0102;">*</span></label>
						
                        <input type="hidden" name="frm_id" id="frm_id" value="<?php echo $businessDetails[0]['form_id'];?>" />
			<input type="text"  placeholder="" id="noemp_par" name="noemp_par" value="<?php echo $businessDetails[0]['permanent_employee'];?>" class="par_numbers form-control" onkeyup="sumEmployee();" data-error="Permanent required" required>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                        <label for="noemp_con">Contractual<span style="color: #ec0102;">*</span></label>
			<input type="text" class="con_numbers form-control" placeholder="" id="noemp_con" name="noemp_con" value="<?php echo $businessDetails[0]['contractual_employee'];?>" onkeyup="sumEmployee();" data-error="Contractual required" required>
                        </div>
                      </div>-->
                      <div class="col-sm-4">
                        <div class="form-group">
                        <label for="noemp_tot">Total No. Of Team Members<span style="color: #ec0102;">*</span></label>
			<input type="text" class="form-control" placeholder="" id="noemp_tot" name="noemp_tot" value="<?php echo $businessDetails[0]['total_employee'];?>" data-error="Total required" required>
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
                          <option value="<?php echo $reLocatableValue;?>" <?php if($reLocatableValue == $businessDetails[0]['business_re_locatable']){echo 'selected=selected';}?>><?php echo $reLocatableName;?></option>
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
                          <option value="<?php echo $listedByValue;?>" <?php if($listedByValue == $businessDetails[0]['listed_by']){echo 'selected=selected';}?>><?php echo $listedByName;?></option>
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
                        <div class="col-sm-5 padd0">
                        <div class="form-group">
                        <label for="ask_price">Previous Investment Infused<span style="color: #ec0102;">*</span></label>
								<div class="input-group">
									<div class="input-group-addon currency" style="width: 58px;">
										<select class="form-control" id="pinv_Infused_currency" name="pinv_Infused_currency" onChange="resetPriceUnit('#ask_price_unit',this.value)" > 
<?php
											foreach( unserialize(PRICE_UNITS) as $priceUnitValue=>$priceUnitName ){
?>
												<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $businessDetails[0]['pinv_Infused_currency']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
											}
?>
										</select>
										
									</div>
										<input type="text" class="form-control" pattern="[1-9]{1}[0-9]*" id="pinv_Infused_price" name="pinv_Infused_price" placeholder="Amount" value="<?php 
										if($businessDetails[0]['pinv_Infused_price']!='0'){
										echo $businessDetails[0]['pinv_Infused_price'];
										}else{ echo '';}
										?>" onkeyup="resetPriceRange('#price_range_type',this.value)" style="width: 78px; height: 39px;" data-error="Previous Investment Infused required" required>
										<div class="input-group-addon currency" style="align: left; float: left; width: 115px; height: 39px; ">
											<select class="form-control" id="pinv_Infused_unit" name="pinv_Infused_unit" align="left" onchange="resetPriceRange('#price_range_type',this.value)"> 
<?php
													if($businessDetails[0]['pinv_Infused_unit']=='INR'){
														foreach( unserialize(PRICE_UNITS_INR) as $priceUnitValue=>$priceUnitName ){			
														//echo $buyBusinessProfile[0]['investment_min'];
														
														//print_r($priceUnitName);
													?>
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $businessDetails[0]['pinv_Infused_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
													}
												}
												else if($businessDetails[0]['pinv_Infused_unit']==''){
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
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $businessDetails[0]['pinv_Infused_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
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
         
                      <div class="col-sm-5" style="padding-right: 0px;">
                        <div class="form-group">
                        <label for="latest_revenu">Investment Required<span style="color: #ec0102;">*</span></label>
						<div class="input-group">
									<div class="input-group-addon currency" style="width: 58px;">
										<select  class="form-control" id="investment_required_currency" name="investment_required_currency" onChange="resetPriceUnit('#latest_revenu_unit',this.value)" > 
<?php
											foreach( unserialize(PRICE_UNITS) as $priceUnitValue=>$priceUnitName ){
?>
												<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $businessDetails[0]['investment_required_currency']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
											}
?>
										</select>
									</div>
										<input type="text" class="form-control" pattern="[0-9]{1}[0-9]*" id="investment_required_price" name="investment_required_price" placeholder="Amount" value="<?php echo $businessDetails[0]['investment_required_price'];?>"  style="width: 78px; height: 39px;" data-error="Investment Required Price required" required>
										<div class="input-group-addon currency" style="align: left; float: left; width: 120px; height: 39px; ">
											<select class="form-control" id="investment_required_unit" name="investment_required_unit" align="left"> 
<?php
													if($businessDetails[0]['investment_required_unit']=='INR'){
													foreach( unserialize(PRICE_UNITS_INR) as $priceUnitValue=>$priceUnitName ){
														//echo $buyBusinessProfile[0]['investment_min'];
													?>
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $businessDetails[0]['investment_required_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
													}
													}
													else if($businessDetails[0]['investment_required_unit']==''){
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
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $businessDetails[0]['investment_required_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
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
			
			<textarea id="assets_if_any" name="assets_if_any" class="form-control" placeholder="Assets if any" rows="2" ><?php echo $businessDetails[0]['assets_if_any'];?></textarea>
			
                        </div>
                      </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                    <label for="">Summarize your Idea / Business<span style="color: #ec0102;">*</span></label>
                    <textarea id="summarize_idea" name="summarize_idea" class="form-control" placeholder="Business overview, working, etc in maximum of 30 Words" rows="2" data-error="Please fill above option" required><?php echo $businessDetails[0]['summarize_idea'];?></textarea>
					<div class="help-block with-errors"></div>
                    </div>
                  </div>
				  </div>
				  <div class="areu">
                  <div class="col-sm-12">
                    <div class="form-group">
                    <label for="">Key Highlights<span style="color: #ec0102;">*</span></label>
                    <textarea id="key_highlights"  name="key_highlights" class="form-control" placeholder="Key highlights of your business, idea" rows="2" data-error="Please fill above option" required><?php echo $businessDetails[0]['key_highlights'];?></textarea>
                    <div class="help-block with-errors"></div>
					</div>
                  </div>
                  </div>
				<div class="areu">		
                  <div class="col-sm-12">
                    <div class="form-group">
                    <label for="">Competition / Market<span style="color: #ec0102;">*</span></label>
                    <textarea id="competition" name="competition" class="form-control" placeholder="Give a brief on the Current Market scenario and active Competition" data-error="Please fill above option" required><?php echo $businessDetails[0]['competition'];?></textarea>
                    <div class="help-block with-errors"></div>
					</div>
                  </div>
                   </div>                 
                  <div class="areu">
                  <div class="col-sm-12">
                    <div class="form-group">
                    <label for="">Detailed Pitch<span style="color: #ec0102;">*</span></label>
                    <textarea id="future_potential" name="future_potential" class="form-control" placeholder="Propose your pitch to the investors in Maximum 500 words" rows="4" data-error="Please fill above option" required><?php echo $businessDetails[0]['future_potential'];?></textarea>
                    <div class="help-block with-errors"></div>
					</div>
                  </div>
				  </div>
				  <div class="areu">
                  <div class="col-sm-12">
                    <div class="form-group">
                    <label for="">Future Potential<span style="color: #ec0102;">*</span></label>
                    <textarea id="detailed_pitch" name="detailed_pitch" class="form-control" placeholder="Give a brief growth vision of the business?" rows="2" data-error="Please fill above option" required><?php echo $businessDetails[0]['detailed_pitch'];?></textarea>
                    <div class="help-block with-errors"></div>
					</div>
                  </div>
				  </div>
				  <div class="areu">
                  <div class="col-sm-12">
                    <div class="form-group">
                    <label for="">Team Overview<span style="color: #ec0102;">*</span></label>
                    <textarea id="team_overview" name="team_overview" class="form-control" placeholder="Details about the Team Members, their strengths etc" rows="3" data-error="Please fill above option" required><?php echo $businessDetails[0]['team_overview'];?></textarea>
                    <div class="help-block with-errors"></div>
					</div>
                  </div>
				  </div>
				  
				  
				  
                  <div class="col-sm-4"></div>
                  <div class="col-sm-3"></div>
                  <div class="col-sm-5" style="padding-right:0">
                    <input type="hidden" name="frm_submit" value="sb_bp" />
					<input type="hidden" id="formId" name="formId" value="<?php echo $formId;?>" />
                    <input type="hidden" id="next_tab" name="next_tab" value="dealdetails" />
                    <button type="button" class="savebtn" id="btn_bp">Save &amp; Continue</button>
                    <button type="submit" class="savebtn">Back</button>
                  </div>
                
               </form>
				 
				 
                  </div>
                 </div>
                </div>
				</div>
				
                 <div class="tab-pane" id="dealdetails">
                 <div class="panel-body">
				 <form name="su_dd" id="su_dd"  method="post" data-toggle="validator" role="form" class="was-validated">
                <div class="form-c-box">
				  <div class="areu">
                   
				   <p>Deal Information</p>
                
				  <div class="col-sm-12">
				  <div class="col-sm-4">
                    <div class="form-group">
                    <label for="">Purpose of Investment<span style="color: #ec0102;">*</span></label>
					<input type="hidden" name="frm_id" id="frm_id" value="<?php echo $businessDetails[0]['form_id'];?>" />
                    <Select class="form-control" id="purpose_investment" name="purpose_investment"  data-error="Purpose required" required>
					<option value="">Select</option>
                          
<?php
			 foreach( unserialize(PURPOSE_INVESTMENT) as $legalValue => $legalName ){
?>
                          <option value="<?php echo $legalValue;?>" <?php if($legalValue == $businessDetails[0]['purpose_investment']){echo 'selected=selected';}?>><?php echo $legalName;?></option>
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
                          <option value="<?php echo $legalValue;?>" <?php if($legalValue == $businessDetails[0]['investment_required_as']){echo 'selected=selected';}?>><?php echo $legalName;?></option>
<?php
			 }
?>
                        </select>
						<input type="text" id="investment_other"  name="investment_other" class="form-control" placeholder="Other" value="<?php echo $businessDetails[0]['investment_other'];?>"  data-error="Other Investment required" style="display:none;"/>
						<div class="help-block with-errors"></div>
						<div class="invStstatusmsg" style="display:none;color:#EC0102;">Other Investment Required</div>
                    </div>
                  </div>
                                    
                  <div class="col-sm-4">
                    <div class="form-group">
                    <label for="">Investor Role<span style="color: #ec0102;">*</span></label>
                    <select id="invester_role" name="invester_role" class="form-control"  data-error="Investor role required" required> 
					<option value="">Select</option>
                          <option <?php if('Active' == $businessDetails[0]['invester_role']){echo 'selected=selected';}?>>Active</option>
                          <option <?php if('Silent' == $businessDetails[0]['invester_role']){echo 'selected=selected';}?>>Silent</option>
                          <option <?php if('Debt' == $businessDetails[0]['invester_role']){echo 'selected=selected';}?>>Debt</option>
						   <option <?php if('Management' == $businessDetails[0]['invester_role']){echo 'selected=selected';}?>>Management</option>
                          <option <?php if('Others' == $businessDetails[0]['invester_role']){echo 'selected=selected';}?>>Others</option>
                        </select>
						 <input type="text" id="invester_role_other"  name="investor_role_other" class="form-control" placeholder="Other" value="<?php echo $businessDetails[0]['investor_role_other'];?>"  data-error="Other required" style="display:none;"/>
						<div class="help-block with-errors"></div>
						<div class="Ststatusmsg" style="display:none;color:#EC0102;">Other Investor Role Required</div>
                    </div>
                  </div>
                   </div>
                   
                  <div class="col-sm-12">
                    <div class="form-group">
                    <label for="">Proposed Deal Structure<span style="color: #ec0102;">*</span></label>
                    <textarea id="propose_deal_structure" name="propose_deal_structure" class="form-control" placeholder="Proposed Deal Structure" rows="3"  data-error="Deal Structure required" required><?php echo $businessDetails[0]['propose_deal_structure'];?></textarea>
                    <div class="help-block with-errors"></div>
					</div>
                  </div>
                 
                  </div>
                  <div class="areu">
                    <p><b>Financial Snapshot</b> (Previous & Projected) </p>
					<?php $countFin = count($sellBusinessAdditionalFinancialDetails);
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
					
					
					<div id="financial_details_<?php echo $ii; ?>" class="col-sm-12 padd0 finbox add-finance_<?php echo $ii; ?>">
						
					<div class="col-sm-12">	
                     <div class="col-sm-2">
                        <div class="form-group">
                         <label for="fin_year">Year<span style="color: #ec0102;">*</span></label>
							 <Select class="form-control" id="fin_year_<?php echo $ii; ?>" name="fin_year_<?php echo $ii; ?>"  data-error="Please select year" required>
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
					
				<div class="col-md-12 padd0">
                     <button type="button" class="btn btn-default finance-add-button">
                                <span class="glyphicon glyphicon-plus"></span> Add Financial Year
                                   </button>
                    </div>
					</div>	
                  
				  
				  
				  
				  
				  
                  <div class="col-sm-4"></div>
                  <div class="col-sm-4"></div>
                  <div class="col-sm-4" style="padding-right:0;">
				  <input type="hidden" name="frm_submit" value="sb_dd" />
				  <input type="hidden" id="formId" name="formId" value="<?php echo $formId;?>" />
                    <input type="hidden" id="next_tab" name="next_tab" value="Uploads" />
                   <button type="submit" class="savebtn">Back</button>
                    <button type="button" class="savebtn dealbtn" id="btn_dd">Submit &amp; Continue</button>
                  </div>
                  
                </div>
				
              </div>
				 </form>
				 
               </div>
               </div>
			   
               <div class="tab-pane" id="Uploads">
                <div class="panel-body">
                 <div class="col-sm-12 padd0">
                    <div class="form-c-box">
					<form  action="<?php echo base_url(); ?>startup_userregister" id="seller_upload" name="seller_upload" class="upload-image-form" enctype="multipart/form-data" method="post" accept-charset="iso-8859-1" >
                  <div class="areu">
                  <p>Upload Photos</p>
                        <div class="col-sm-12">
                         <div class="drag-area drag-area-2">
                          <div class="add-btn-box add-btn-box-2">
						  <div class="col-md-4">
						   Or drop image here
						  </div>
						  <div class="col-md-4">
                            <input type="hidden" name="frm_id" id="frm_id" value="<?php echo $this->session->userdata('last_form_id');?>" />
                            <input type="file" multiple = "multiple" accept = "image/*" class="add-btn" name="uploadfile[]" value="+ Photo"/>
							</div>
							 <div class="col-sm-4">
                    <input type="hidden" name="frm_submit" value="UA_FU" />
                    <input type="hidden" name="doc_name" value="image" />
                    <button type="submit" class="savebtn" style="float:right;">Submit</button>
                  </div>
                  </div>
							<?php
							   foreach( $medias as $media ){
								   if( strcasecmp( $media['document_type'], 'image' ) == 0 ){
							?>
									   <div class="col-sm-2">
									     <div class="image-outer-cover">
										   <div class="top-up">
										     <i class="fa fa-eye" data-toggle="modal" data-target="#myModal_<?php echo $media['id'];?>"></i>
											<div class="record" id="record-<?php echo $media['id'];?>">
				<a href="?delete=<?php echo $media['id'];?>" class="delete"><i class="fa fa-trash"></i></a>
				
			</div>
										   </div>
										   <div class="modal fade" id="myModal_<?php echo $media['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
										   <img style="height: 50px;" src="<?php echo base_url().$media['path'];?>">
										 </div>
									   </div>
							<?php
								   }
							   }
							?>
                           
                          
                        </div>
						
                      </div>
					  
					  
				  </form>
                  </div>
				 <form  action="<?php echo base_url(); ?>startup_userregister" id="seller_upload" name="seller_upload" class="upload-image-form" enctype="multipart/form-data" method="post" accept-charset="iso-8859-1" >
                  <div class="areu">
                  <p>Upload Videos</p>
                        <div class="col-sm-12">
                         <div class="drag-area drag-area-2">
                          <div class="add-btn-box add-btn-box-2">
						  <div class="col-md-4">
						 Or drop video here
						</div>
						  <div class="col-md-4">
                            <input type="hidden" name="frm_id" id="frm_id" value="<?php echo $this->session->userdata('last_form_id');?>" />
                            <input type="file" multiple="multiple" accept="video/*,video/mp4" class="add-btn" name="uploadfile[]" value="+ Video"/>
                           
						   
                          </div>
						    <div class="col-sm-4">
                    <input type="hidden" name="frm_submit" value="UA_FU" />
					 <input type="hidden" name="doc_name" value="video" />
                    <button type="submit" class="savebtn" style="float:right;">Submit</button>
                  </div>
                  </div>
						  <?php
							   foreach( $medias as $media ){
								   if( strcasecmp( $media['document_type'], 'video' ) == 0 ){
							?>
									   <div class="col-sm-2">
									     <div class="image-outer-cover">
										   <div class="top-up">
										     <i class="fa fa-eye" data-toggle="modal" data-target="#myModal_<?php echo $media['id'];?>"></i>
											
											 
											 <div class="record" id="record-<?php echo $media['id'];?>">
				<a href="?delete=<?php echo $media['id'];?>" class="delete"><i class="fa fa-trash"></i></a>
				
			</div>
										   </div>
										   <div class="modal fade" id="myModal_<?php echo $media['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
         <video width="100%"    class="videoc" controls>
  <source src="<?php echo base_url().$media['path'];?>" type="video/mp4"></video>
      </div>
     
    </div>
  </div>
</div>
										   <video style="width: 73%;" class="videoc"  controls>
  <source src="<?php echo base_url().$media['path'];?>" type="video/mp4"></video>
										 </div>
									   </div>
							<?php
								   }
							   }
							?>
						  
						  
                        </div>
                      </div>
					 
				    </form>
                  </div>
 <form  action="<?php echo base_url(); ?>startup_userregister" id="seller_upload" name="seller_upload" class="upload-image-form" enctype="multipart/form-data" method="post" accept-charset="iso-8859-1" >
                  <div class="areu">
				   <input type="hidden" name="frm_id" id="frm_id" value="<?php echo $this->session->userdata('last_form_id');?>" />
                  <p>Upload the significant documents to give greater thrust to your business pitch.</p>
                     <div class="outer newbg-background">
                      <div class="col-sm-5">
                        1. Business Teaser/Executive summary
                      </div>
                      <div class="col-sm-7">
                        <input type="file" multiple="multiple" class="add-btn" name="uploadexesumfile[]" size="1">
                      </div>
							<?php
							   foreach( $medias as $media ){
								   if( strcasecmp( $media['document_type'], 'executive' ) == 0 ){
							?>
									   <div class="col-sm-2">
									     <div class="mt-30">
										   <div class="selldoc doctype">
										   
											 <div class="record" id="record-<?php echo $media['id'];?>">
				<a href="?delete=<?php echo $media['id'];?>" class="delete" style="float: right;"><i class="fa fa-trash"></i></a>
				
			</div>
										   </div>
										   <a href="<?php echo base_url().$media['path'];?>" target="_blank"><img src="<?php echo asset_url();?>images/download.png" class="img-responsive"></a>
										 </div>
									   </div>
							<?php
								   }
							   }
							?>
					  
                     </div>
                     <div class="outer newbg-background">
                      <div class="col-sm-5">
                        2. Information Memorandum/Presentation
                      </div>
                      <div class="col-sm-7">
                        <input type="file" multiple="multiple" class="add-btn" name="uploadmemofile[]" size="1">
                      </div>
					  <?php
							   foreach( $medias as $media ){
								   if( strcasecmp( $media['document_type'], 'memorandum' ) == 0 ){
							?>
									   <div class="col-sm-2">
									    									     <div class="mt-30">
										   <div class="selldoc doctype">
										   
											 <div class="record" id="record-<?php echo $media['id'];?>">
				<a href="?delete=<?php echo $media['id'];?>" class="delete" style="float: right;"><i class="fa fa-trash"></i></a>
				
			</div>
										   </div>
										   <a href="<?php echo base_url().$media['path'];?>" target="_blank"><img src="<?php echo asset_url();?>images/download.png" class="img-responsive"></a>
										 </div>
									   </div>
							<?php
								   }
							   }
							?>
					  
                     </div>
                     <div class="outer newbg-background">
                      <div class="col-sm-5">
                        3. Financials
                      </div>
                      <div class="col-sm-7">
                        <input type="file" multiple="multiple" class="add-btn" name="uploadfinancialfile[]" size="1">
                      </div>
					  <?php
							   foreach( $medias as $media ){
								   if( strcasecmp( $media['document_type'], 'financials' ) == 0 ){
							?>
									   <div class="col-sm-2">
									    									     <div class="mt-30">
										   <div class="selldoc doctype">
										   
											 <div class="record" id="record-<?php echo $media['id'];?>">
				<a href="?delete=<?php echo $media['id'];?>" class="delete" style="float: right;"><i class="fa fa-trash"></i></a>
				
			</div>
										   </div>
										   <a href="<?php echo base_url().$media['path'];?>" target="_blank"><img src="<?php echo asset_url();?>images/download.png" class="img-responsive"></a>
										 </div>
									   </div>
							<?php
								   }
							   }
							?>
					  
                     </div>
                     <div class="outer newbg-background">
                      <div class="col-sm-5">
                        4. Additional Documents
                      </div>
                      <div class="col-sm-7">
                        <input type="file" multiple="multiple" class="add-btn" name="uploadadditionfile[]" size="1">
                      </div>
					  <?php
							   foreach( $medias as $media ){
								   if( strcasecmp( $media['document_type'], 'additional' ) == 0 ){
							?>
									   <div class="col-sm-2">
									    									     <div class="mt-30">
										   <div class="selldoc doctype">
										   
											 <div class="record" id="record-<?php echo $media['id'];?>">
				<a href="?delete=<?php echo $media['id'];?>" class="delete" style="float: right;"><i class="fa fa-trash"></i></a>
				
			</div>
										   </div>
										   <a href="<?php echo base_url().$media['path'];?>" target="_blank"><img src="<?php echo asset_url();?>images/download.png" class="img-responsive"></a>
										 </div>
									   </div>
							<?php
								   }
							   }
							?>
					  
                     </div>
                     <?php /*<div class="outer">
                      <button type="submit" class="addmore">+ Add More</button>
		     </div> */ ?>
						 <div class="col-sm-12">
                    <input type="hidden" name="frm_submit" value="UA_FU" />
                    <button type="submit" class="savebtn" style="float:right;">Submit</button>
                  </div>
				    </form>
                  </div>


                  <div class="col-sm-4"></div>
                  <div class="col-sm-3"></div>
                  <div class="col-sm-12" style="padding-right:0">
                   
                 
					<button type="submit" class="savebtn" id="packde">Continue</button>
					
                  </div>
                </div>
                </div>
               </div>
              </div>
			  
			  
              <div class="tab-pane" id="Packagedetails">
               <div class="panel-body">
                <div class="col-sm-12 padd0">
                 <div class="form-c-box">
                 
         <div class="col-md-12 m-t70 padd0">
				   <div class="col-sm-4 padd0">
						<div class="pack-box-2">
							<h3>Features </h3>
					        <p>Business Listing Activation</p>
				            <p>Dedicated listing page</p>
			                <p>Upload Business Documents  </p>
                            <p>Photo / Video Showcase </p>
				            <p>View Buyer / Investor Listing </p>
				            <p>Dedicated Accounts Manger </p>
                            <p>Deal Matchmaking </p>
				            <p>Social Media Promotion / SEO Google, Yahoo </p>
				            <p>View Buyer Response - Unlimited </p>
                            <p>Promotional Mailer </p>
				            <p>View Buyer Requirement </p>
				            <p> Featured Listing  </p>
				            <p>Listing classification </p>

							<p><b>Price</b> <span style="color: #e22c2c;" class="pull-right">* GST applicable</span></p>

						</div>
					</div>
<?php
        if( isset($packages) ){
                foreach( $packages as $package ){
?>
                    <div class="col-sm-2 padd0">
                      <div class="pack-box <?php if($package['id']=='3'){ ?>back-plan <?php }?>">
					  <?php if($user_package[0]['package_id']==$package['id']){?>
							<img class="img-tick-2 packimg" src="<?php echo asset_url();?>images/you-2.png" width="30">
						<?php }else if($user_package[0]['package_id']!='4' && $user_package[0]['package_id']!='3' && $package['id']=='3'){ ?>
							<img style="left:20px;" class="img-tick-2 packimg2" src="<?php echo asset_url();?>images/r-tick.png" width="80">
						<?php } ?>
                        <h3><?php echo $package['name'];?></h3>
						<?php if($package['name']=='Basic'){?>
							<p><i class="fa fa-check " aria-hidden="true"></i></p>
							<p><i class="fa fa-check " aria-hidden="true"></i></p>
							<p><i class="fa fa-check " aria-hidden="true"></i></p>
							<p><i class="fa fa-check " aria-hidden="true"></i></p>
							<p><i class="fa fa-check " aria-hidden="true"></i></p>
							<p><i class="fa fa-times" aria-hidden="true"></i></p>
							<p><i class="fa fa-times" aria-hidden="true"></i></p>
							<p><i class="fa fa-times" aria-hidden="true"></i></p>
							<p><i class="fa fa-times " aria-hidden="true"></i></p>
							<p><i class="fa fa-times" aria-hidden="true"></i></p>
							<p><i class="fa fa-times" aria-hidden="true"></i></p>
							<p><i class="fa fa-times" aria-hidden="true"></i></p>
							<p><i class="fa fa-times" aria-hidden="true"></i></p>
							<p><b>free</b></p>
						<?php }else if($package['name']=='Advance'){?>
								<p><i class="fa fa-check " aria-hidden="true"></i></p>
								<p><i class="fa fa-check " aria-hidden="true"></i></p>
								<p><i class="fa fa-check " aria-hidden="true"></i></p>
								<p><i class="fa fa-check " aria-hidden="true"></i></p>
								<p><i class="fa fa-check " aria-hidden="true"></i></p>
								<p><i class="fa fa-check" aria-hidden="true"></i></p>
								<p><i class="fa fa-check" aria-hidden="true"></i></p>
								<p><i class="fa fa-times" aria-hidden="true"></i></p>
								<p>30 days</p>
								<p>1</p>
								<p>1</p>
								<p>5 days</p>
								<p>Premium</p>
								<p><b> 3,999/-</b></p>
						<?php }else if($package['name']=='Ultimate'){?>
								<p><i class="fa fa-check " aria-hidden="true"></i></p>
								<p><i class="fa fa-check " aria-hidden="true"></i></p>
								<p><i class="fa fa-check " aria-hidden="true"></i></p>
								<p><i class="fa fa-check " aria-hidden="true"></i></p>
								<p><i class="fa fa-check " aria-hidden="true"></i></p>
								<p><i class="fa fa-check" aria-hidden="true"></i></p>
								<p><i class="fa fa-check" aria-hidden="true"></i></p>
								<p><i class="fa fa-check" aria-hidden="true"></i></p>
								<p>60 days</p>
								<p>2</p>
								<p>2</p>
								<p>14 days</p>
								<p>Gold</p>
								<p><b>  6,999/-</b></p>
						<?php }else if($package['name']=='Elite'){?>
								<p><i class="fa fa-check " aria-hidden="true"></i></p>
								 <p><i class="fa fa-check " aria-hidden="true"></i></p>
								 <p><i class="fa fa-check " aria-hidden="true"></i></p>
								 <p><i class="fa fa-check " aria-hidden="true"></i></p>
								 <p><i class="fa fa-check " aria-hidden="true"></i></p>
								 <p><i class="fa fa-check" aria-hidden="true"></i></p>
								 <p><i class="fa fa-check" aria-hidden="true"></i></p>
								 <p><i class="fa fa-check" aria-hidden="true"></i></p>
								 <p>90 days</p>
								 <p>3</p>
								 <p>3</p>
								 <p>30 days</p>
								 <p>Platinum</p>
								 <p><b>  9,999/-</b></p>
						<?php }?>
                        <!--<p><?php if( $user_package[0]['package_id'] == $package['id'] && $businessDetails[0]['form_id'] == $user_package[0]['form_id'] ){ ?>Current <?php } ?></p>-->
                        <p><?php //echo $package['description'];?></p>
<?php
                        if( $user_package[0]['package_id'] == $package['id'] && $businessDetails[0]['form_id'] == $user_package[0]['form_id'] ){
?>
                         <button class="active-pack" onClick="setUserAccountSellBusinessPackage('<?php echo $businessDetails[0]['form_id'];?>', '<?php echo $package['id'];?>')">Active Package</button>
<?php
                        }else{
?>
							
                         <button onClick="setUserAccountSellBusinessPackage('<?php echo $businessDetails[0]['form_id'];?>', '<?php echo $package['id'];?>')">Select</button>
<?php
                        }
?>
                      </div>
                    </div>
<?php
                }
        }
?>
                   </div>
                   <div class="col-sm-4"></div>
                   <div class="col-sm-3"></div>
                   <div class="col-sm-5" style="padding-right:0">
                    <button type="button" class="savebtn" id="addser">Continue</button>
                   </div>
                 
                 </div>
                </div>
               </div>
              </div>

              <div class="tab-pane" id="Additionalservices">
               <div class="panel-body">
                <div class="col-sm-12 padd0">
                 <div class="form-c-box">
                  <form id="su_aservice" name="su_aservice" method="POST" method="post" data-toggle="validator" role="form" class="was-validated" action="">
                   <div class="areu">
                    <p>Additional Services</p>
                    <div class="col-sm-4">
                     <div class="checkbox">
					 <input type="hidden" name="formId" id="formId" value="<?php echo $businessDetails[0]['form_id'];?>" />
                      <input type="checkbox" id="ads_featured_listing" name="ads_featured_listing" value="FL" <?php if(strcasecmp($additionalServices[0]['feature_listing'], 'YES')==0){ echo "checked";}?> >
                      <label for="ads_featured_listing" class="cus-t">
                       Featured listing
                      </label>
                     </div>
                    </div>
                    <div class="col-sm-4">
                     <div class="checkbox">
                      <input type="checkbox" id="ads_information_memorandum" name="ads_information_memorandum" value="IM" <?php if(strcasecmp($additionalServices[0]['memorandum'], 'YES')==0){ echo "checked";}?>>
                      <label for="ads_information_memorandum" class="cus-t">
                       Information Memorandum
                      </label>
                     </div>
                    </div>
                   </div>
                   <div class="areu">
                    <p>Send us your request for below support, to fulfil your business requisites</p>
                    <div class="col-sm-4">
                     <div class="checkbox">
                      <input type="checkbox" id="business_plan" name="business_plan" value="BP" <?php if(strcasecmp($additionalServices[0]['plan'], 'YES')==0){ echo "checked";}?>>
                      <label for="business_plan" class="cus-t">
                       Business Plan
                      </label>
                     </div>
                    </div>
                    <div class="col-sm-4">
                     <div class="checkbox">
                      <input type="checkbox" id="business_valuation" name="business_valuation" value="BV" <?php if(strcasecmp($additionalServices[0]['valuation'], 'YES')==0){ echo "checked";}?>>
                      <label for="business_valuation" class="cus-t">
                       Business Valuation
                      </label>
                     </div>
                    </div>
                    <div class="col-sm-4">
                     <div class="checkbox">
                      <input type="checkbox" id="business_mandate" name="business_mandate" value="BM" <?php if(strcasecmp($additionalServices[0]['mandate'], 'YES')==0){ echo "checked";}?>>
                      <label for="business_mandate" class="cus-t">
                       Business Mandate
                      </label>
                     </div>
                    </div>
                    <div class="col-sm-4">
                     <div class="checkbox">
                      <input type="checkbox" id="business_advisory" name="business_advisory" value="BA" <?php if(strcasecmp($additionalServices[0]['advisory'], 'YES')==0){ echo "checked";}?>>
                      <label for="business_advisory" class="cus-t">
                       Business Advisory
                      </label>
                     </div>
                    </div>
                    <div class="col-sm-4">
                     <div class="checkbox">
                      <input type="checkbox" id="per_sale_business_structuring" name="per_sale_business_structuring" value="PSBS" <?php if(strcasecmp($additionalServices[0]['pre_sales'], 'YES')==0){ echo "checked";}?>>
                      <label for="per_sale_business_structuring" class="cus-t">
                       Pre-Sale Business Structuring
                      </label>
                     </div>
                    </div>
                   </div>
                   <div class="col-sm-4"></div>
                   <div class="col-sm-3"></div>
                   <div class="col-sm-5" style="padding-right:0">
				   <input type="hidden" name="frm_submit" value="sb_aservice" />
                    <!--<button type="submit" class="savebtn">Save</button>-->
					<input type="hidden" id="next_tab" name="next_tab" value="Payment" />
                    <input type="hidden" id="frm_id" name="frm_id" value="<?php echo $formId;?>" />
                    <button type="button" class="savebtn" id="btn_as">Submit</button>
                   </div>
                  </form>
                 </div>
                </div>
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

