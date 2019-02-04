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
      <div class="col-md-3 wel-user">
       <h5><?php echo $assignedEmpDetails[0]->name;?></h5>
       <p><?php echo $assignedEmpDetails[0]->email;?>, <?php echo $assignedEmpDetails[0]->contact_no;?></p>
      </div>
     </div>
     <div class="row">
      <div class="col-sm-3">
       <div class="feat-c-box">
        <ul>
         <li><a href="list-your-business-basic-information">Basic Information</a></li>
                    <li><a href="list-your-business-description">Business Description</a></li>
                    <li><a href="list-your-business-additional-details">Additional Details</a></li>
                    <li><a href="list-your-business-additional-details-uploads">Uploads</a></li>
                    <li><a href="list-your-business-package-details">Package Details</a></li>
                    <li><a href="list-your-business-additional-services">Additional Services</a></li>
                    <!--<li><a href="list-your-business-payment">Payment</a></li>-->
                    <li><a class="active-page" href="sell-business-preview-form">Preview</a></li>
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
            <li data-id="businessdescription"><a class="gap-list" aria-expanded="false" href="#businessdescription" data-toggle="tab">Business Description</a></li>
            <li data-id="additionaldetails"><a class="gap-list" aria-expanded="false" href="#additionaldetails" data-toggle="tab">Additional Details</a></li>
            <li data-id="Uploads"><a class="gap-list" aria-expanded="false" href="#Uploads" data-toggle="tab">Uploads</a></li>
            <li data-id="Packagedetails"><a class="gap-list" aria-expanded="false" href="#Packagedetails" data-toggle="tab">Package Details</a></li>
            <li data-id="Additionalservices"><a class="gap-list" aria-expanded="false" href="#Additionalservices" data-toggle="tab">Additional Services</a></li>
            <li data-id="Payment"><a class="gap-list" aria-expanded="false" href="#Payment" data-toggle="tab">Payment</a></li>
           </ul>
           <div class="tab-content">
            <div class="tab-pane" id="userprofile">
             <div class="panel-body">
              <div class="form-c-box">
               <form id="seller_up" name="seller_up" method="POST"  action="<?php echo base_url();?>admin/seller/userProfile">
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
                   <input type="checkbox"  class="cus-t" id="checkbox2" name="broker" <?php echo $businessDetails[0]['who'] == 'broker' ? 'checked="checked"' : '';?>>
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
                   <!-- <button type="button" class="savebtn" id="btn_up">Save &amp; Continue</button>-->
                   </div>
                  </form>
                 </div>
                </div>
               </div>
               <div class="tab-pane active" id="basicinformation">
                <div class="panel-body">
                 <div class="col-sm-12 padd0">
                  <div class="form-c-box">
		   <form id="seller_binfo" name="seller_binfo" method="POST">
                   <div class="col-sm-12">
                    <div class="form-group">
                     <label for="">Key Headline<span style="color: #ec0102;">*</span></label>
		     <input type="text" name="keyHeadline" id="keyHeadline" class="form-control" placeholder="Business Heading" value="<?php echo $businessDetails[0]['key_headline'];?>" data-error="Key Headline required" required>
			 <div class="help-block with-errors"></div>
                    </div>
                   </div>
                   <div class="col-sm-12">
                    <div class="form-group">
                     <label for="">Description of your business<span style="color: #ec0102;">*</span></label>
		     <textarea name="bus_desc" id="bus_desc" class="form-control" rows="3" data-error="Description required" required><?php echo $businessDetails[0]['description'];?></textarea>
			 <div class="help-block with-errors"></div>
                    </div>
                   </div>
                   <div class="areu">
                    <p>Business location</p>
                    <div class="col-sm-3">
                     <div class="form-group">
                      <label for="">Country<span style="color: #ec0102;">*</span></label>
                      <select class="form-control" id="country" name="country" onChange="getChangeStates('<?php echo base_url();?>', this.value)" class="form-control" required data-error="Country required">
                       <option value="">Select</option>
<?php
foreach( $this->cachemethods->getCountryDetails() as $countrydet ){
?>
                       <option value="<?php echo $countrydet->id;?>" <?php if($countrydet->id == $businessDetails[0]['location_country']){echo 'selected=selected';}?>><?php echo $countrydet->country_name; ?></option>
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
                        <Select class="form-control" id="region" name="region">
                          <option value="<?php echo $businessDetails[0]['location_region'];?>"><?php echo $businessDetails[0]['location_region'];?></option>
                          <option value="North">North</option>
                          <option value="East">East</option>
                          <option value="West">West</option>
                          <option value="South">South</option>
                        </select>
                        </div>
                      </div>
                    <div class="col-sm-3">
                     <div class="form-group">
                      <label for="">State<span style="color: #ec0102;">*</span></label>
                      <select class="form-control" id="state" name="state" onChange="getChangeCities('<?php echo base_url();?>', this.value)" required data-error="State required">
                       <option value="">Select</option>
<?php
foreach( $this->cachemethods->getStateByCountry($businessDetails[0]['location_country']) as $statedet ){
?>
                       <option value="<?php echo $statedet->id;?>" <?php if($statedet->id == $businessDetails[0]['location_state']){echo 'selected=selected';}?>><?php echo $statedet->state_name; ?></option>
<?php
}
?>
                      </select>
					  <input type="text" name="other_state" class="form-control other_state" placeholder="Other State" value="<?php echo $businessDetails[0]['other_state'];?>" 
					  
					  <?php if($businessDetails[0]['other_state']==''){?>
					  style="display:none;"
					  <?php }?>/>
                     </div>
                    </div>
                    <div class="col-sm-3">
                     <div class="form-group">
                      <label for="">City<span style="color: #ec0102;">*</span></label>
                      <select class="form-control" id="city" name="city" required data-error="City required">
                       <option value="">Select</option>
<?php
foreach( $this->cachemethods->getCityByStateId($businessDetails[0]['location_state']) as $citydet ){
?>
                       <option value="<?php echo $citydet->id;?>" <?php if($citydet->id == $businessDetails[0]['location_city']){echo 'selected=selected';}?>><?php echo $citydet->city_name; ?></option>
<?php
}
?>
                      </select>
					   <input type="text" name="other_city" class="form-control other_city" placeholder="Other City" value="<?php echo $businessDetails[0]['other_city'];?>" 
					    <?php if($businessDetails[0]['other_city']==''){?>
					   style="display:none;"
						<?php }?>
					   />
					  <div class="help-block with-errors"></div>
                     </div>
                    </div>

                   </div>
                   <div class="areu">
				   <div class="col-sm-12">
                    <p>Listing Type</p>
                    <div class="col-sm-3">
                     <div class="form-group">
                      <label for="">Category<span style="color: #ec0102;">*</span></label>
                      <select class="form-control" id="category" name="category" required data-error="Listing Type required">
                       <option value="">Select</option>
<?php
                          $selectedCategory = null;
                          foreach( unserialize(CATEGORIES) as $catValue => $catName ){
                           if( isset( $businessDetails[0]['listing_category'] ) && $businessDetails[0]['listing_category'] != null ){
                            $selectedCategory = $businessDetails[0]['listing_category'];
                           }else if( $i == 0 ){
                            $selectedCategory = $catValue;
                           }
?>
                       <option value="<?php echo $catValue;?>" <?php if($catValue == $businessDetails[0]['listing_category']){echo 'selected=selected';}?>><?php echo $catName;?></option>
<?php
                           $i++;
                         }
?>
                      </select>
					  <div class="help-block with-errors"></div>
                     </div>
                    </div>
                    <div class="col-sm-3">
                     <div class="form-group">
                      <label for="">Sub-Category</label>
                      <select class="form-control" id="subcategory" name="subcategory">
                       <option value="">Select</option>
<?php
                         foreach( unserialize(SUB_CATEGORIES) as $subCatValue => $subCatName ){
?>
                                                             <option value="<?php echo $subCatValue;?>" <?php if($subCatValue == $businessDetails[0]['listing_sub_category']){echo 'selected=selected';}?>><?php echo $subCatName;?></option>
<?php
                         }
?>
                      </select>
                     </div>
                    </div>
                    <div class="col-sm-3">
                     <div class="form-group">
                      <label for="">Legal Entity<span style="color: #ec0102;">*</span></label>
                      <select class="form-control" id="legal" name="legal" required data-error="Legal Entity required">
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
                      <label for="">Establishment Year<span style="color: #ec0102;">*</span></label>
                      <select class="form-control" id="eyear" name="eyear" required data-error="Establish Year required">
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
                       <label for="">Current Status of Business<span style="color: #ec0102;">*</span></label>
                       <select class="form-control" id="bstatus" name="bstatus" required data-error="Business Status required">
                        <option value="">Select</option>
<?php
                         foreach( unserialize(BUSINESS_CURRENT_STATUS) as $currentStatusValue => $currentStatusName ){
?>
                        <option value="<?php echo $currentStatusValue;?>" <?php if($currentStatusValue == $businessDetails[0]['current_status_of_business']){echo 'selected=selected';}?>><?php echo $currentStatusName;?></option>
<?php
                         }
?>
                       </select>
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
                    <input type="hidden" id="next_tab" name="next_tab" value="businessdescription" />
                    <!--<button type="button" class="savebtn" id="btn_bi">Save &amp; Continue</button>-->
                   </div>
                  </form>
                 </div>
                </div>
               </div>
              </div>
              <div class="tab-pane" id="businessdescription">
               <div class="panel-body">
                <div class="col-sm-12 padd0">
                 <div class="form-c-box">
		  <form id="seller_bdescription" name="seller_bdescription" method="POST"><?php /* action="<?php echo base_url();?>admin/seller/businessDescription"> */ ?>
                   <div class="areu">
                    <p>No. of Employees</p>
                    <div class="col-sm-4">
                     <div class="form-group">
                      <label for="">Permanent</label>
		      <input type="text" name="pemployee" id="pemployee" class="par_numbers form-control" placeholder="00" value="<?php echo $businessDetails[0]['no_of_permanent_employee'];?>" onkeyup="sumEmployeeProfile();">
                     </div>
                    </div>
                    <div class="col-sm-4">
                     <div class="form-group">
                      <label for="">Contractual</label>
		      <input type="text" name="cemployee" id="cemployee" class="par_numbers form-control" placeholder="00" value="<?php echo $businessDetails[0]['no_of_contractual_emplyee'];?>" onkeyup="sumEmployeeProfile();">
                     </div>
                    </div>
                    <div class="col-sm-4">
                     <div class="form-group">
                      <label for="">Total</label>
		      <input type="text" name="temployee" id="temployee" class="par_numbers form-control" placeholder="00" value="<?php echo $businessDetails[0]['total_employee'];?>" onkeyup="sumEmployeeProfile();">
                     </div>
                    </div>
                    <div class="col-sm-4">
                     <div class="form-group">
                      <label for="">Business Re-locatable</label>
                      <select class="form-control" id="bus_reloc" name="bus_reloc">
                       <option value="">Select</option>
<?php
                          foreach( unserialize(BUSINESS_RE_LOCATABLE) as $reLocatableValue => $reLocatableName ){
?>
                       <option value="<?php echo $reLocatableValue;?>" <?php if($reLocatableValue == $businessDetails[0]['is_re_locatable']){echo 'selected=selected';}?>><?php echo $reLocatableName;?></option>
<?php
                          }
?>
                      </select>
                     </div>
                    </div>
                    <div class="col-sm-4">
                     <div class="form-group">
                      <label for="">Business Listed By</label>
                      <select class="form-control" id="listed_by" name="listed_by">
                       <option value="">Select</option>
<?php
                          foreach( unserialize(BUSINESS_LISTED_BY) as $listedByValue => $listedByName ){
?>
                       <option value="<?php echo $listedByValue;?>" <?php if($listedByValue == $businessDetails[0]['business_listed_by']){echo 'selected=selected';}?>><?php echo $listedByName;?></option>
<?php
                          }
?>
                      </select>
                     </div>
                    </div>
                    <div class="col-sm-3"></div>
                   </div>
				   
				    <div class="areu">
				  
                    <p>Business Pricing</p>
                        <div class="col-sm-4 padd0">
                        <div class="form-group">
                        <label for="ask_price">Asking Price<span style="color: #ec0102;">*</span></label>
								<div class="input-group">
									<div class="input-group-addon currency" style="width: 54px;">
										<select class="form-control" id="ask_price_currency" name="ask_price_currency" onChange="resetPriceUnit('#ask_price_unit',this.value)" > 
<?php
											foreach( unserialize(PRICE_UNITS) as $priceUnitValue=>$priceUnitName ){
?>
												<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $businessDetails[0]['ask_price_currency']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
											}
?>
										</select>
										
									</div>
										<input type="text" class="form-control" pattern="[1-9]{1}[0-9]*" id="ask_price" name="ask_price" placeholder="Amount" value="<?php echo $businessDetails[0]['ask_price'];?>" onkeyup="resetPriceRange('#price_range_type',this.value)" style="width: 78px; height: 39px;" data-error="Asking Price required" required>
										<div class="input-group-addon currency" style="align: left; float: left; width: 115px; height: 39px; ">
											<select class="form-control" id="ask_price_unit" name="ask_price_unit" align="left" onchange="resetPriceRange('#price_range_type',this.value)"> 
<?php
													if($businessDetails[0]['ask_price_currency']=='INR'){
														foreach( unserialize(PRICE_UNITS_INR) as $priceUnitValue=>$priceUnitName ){			
														//echo $buyBusinessProfile[0]['investment_min'];
													?>
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $businessDetails[0]['ask_price_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
													}
													
													
												}
												else if($businessDetails[0]['ask_price_currency']==''){
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
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $businessDetails[0]['ask_price_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
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
                            <option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $businessDetails[0]['price_range_type']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
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
                      <div class="col-sm-4" style="padding-right: 0px;">
                        <div class="form-group">
                        <label for="latest_revenu">Latest Turnover/Revenue<span style="color: #ec0102;">*</span></label>
						<div class="input-group">
									<div class="input-group-addon currency" style="width: 54px;">
										<select  class="form-control" id="latest_revenu_currency" name="latest_revenu_currency" onChange="resetPriceUnit('#latest_revenu_unit',this.value)" > 
<?php
											foreach( unserialize(PRICE_UNITS) as $priceUnitValue=>$priceUnitName ){
?>
												<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $businessDetails[0]['latest_revenu_currency']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
											}
?>
										</select>
									</div>
										<input type="text" class="form-control" pattern="[1-9]{1}[0-9]*" id="latest_revenu" name="latest_revenu" placeholder="Amount" value="<?php echo $businessDetails[0]['latest_revenu'];?>"  style="width: 78px; height: 39px;" data-error="Turnover/Revenue required" required>
										<div class="input-group-addon currency" style="align: left; float: left; width: 116px; height: 39px; ">
											<select class="form-control" id="latest_revenu_unit" name="latest_revenu_unit" align="left"> 
<?php
													if($businessDetails[0]['latest_revenu_currency']=='INR'){
													foreach( unserialize(PRICE_UNITS_INR) as $priceUnitValue=>$priceUnitName ){
														//echo $buyBusinessProfile[0]['investment_min'];
													?>
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $businessDetails[0]['latest_revenu_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
													}
													
													}
													else if($businessDetails[0]['latest_revenu_currency']==''){
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
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $businessDetails[0]['latest_revenu_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
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
                    <div class="col-sm-6">
                     <div class="form-group">
                      <label for="">Product &amp; Services</label>
	              <textarea class="form-control" name="product_service_desc" id="product_service_desc" rows="3" placeholder="Key Products Or Services of the Business"><?php echo $businessDetails[0]['product_service_desc'];?></textarea>
                     </div>
                    </div>
                    <div class="col-sm-6">
                     <div class="form-group">
                      <label for="">Competition / Market</label>
	              <textarea class="form-control" name="competition_market_desc" id="competition_market_desc" rows="3" placeholder="Current Market and Competition scenario"><?php echo $businessDetails[0]['competition_market_desc'];?></textarea>
                     </div>
                    </div>
                    <div class="col-sm-6">
                     <div class="form-group">
                      <label for="">Growth Potential</label>
	              <textarea class="form-control" name="growth_potential" id="growth_potential" rows="3" placeholder="What is the future growth potential"><?php echo $businessDetails[0]['growth_potential'];?></textarea>
                     </div>
                    </div>
                    <div class="col-sm-6">
                     <div class="form-group">
                      <label for="">Reason for Sale</label>
		      <textarea class="form-control" name="reason_for_sale" id="reason_for_sale" rows="3" placeholder="Describe the reason of selling your Business"><?php echo $businessDetails[0]['reason_for_sale'];?></textarea>
                     </div>
                    </div>
                   </div>

                   <div class="col-sm-4"></div>
                    <div class="col-sm-3"></div>
                     <div class="col-sm-5" style="padding-right:0">
                      <input type="hidden" id="next_tab" name="next_tab" value="additionaldetails" />
                      <input type="hidden" id="formId" name="formId" value="<?php echo $formId;?>" />
                      <!--<button type="button" class="savebtn" id="btn_bd">Save &amp; Continue</button>-->
                     </div>
                    </form>
                   </div>
                  </div>
                 </div>
                </div>

                <div class="tab-pane" id="additionaldetails">
                 <div class="panel-body">
				 <form id="seller_adetails" name="seller_adetails" method="POST">
					<div class="form-c-box">
                 <?php $count = count($sellBusinessAdditionalDetails);
				 if($count==0){
					 $count_records = 1;
				 }else{
					 $count_records = $count;
				 }		
				 //echo $count_records. ' sssssssssssssssssss';
				 ?> 
				 <input type="hidden" id="count" name="count" value="<?php echo $count_records; ?>">
				<div class="add-property_2">
				<?php
					for($i=1; $i < $count_records+1; $i++){	
				?>
				<input type="hidden" id="property_id_<?php echo $i; ?>" name="property_id_<?php echo $i; ?>" value="<?php echo $sellBusinessAdditionalDetails[$i-1]['id']; ?>">
				
				<div class="col-sm-12 padd0 add-property_<?php echo $i; ?>">
					<?php if($i==1){ ?>
                  <div class="areu" id="property_profile_<?php echo $i; ?>" name="property_profile_<?php echo $i; ?>">
						<div class="col-sm-12">
                        <div class="col-sm-4">
                      <div class="form-group">
                        <label for="property_type">Property Type<span style="color: #ec0102;">*</span></label>
                        <select class="form-control" id="property_type_<?php echo $i; ?>" name="property_type_<?php echo $i; ?>" onchange="getId(this.id, this)" data-error="Property Type required" required>
                          <option value="">Select</option>
<?php
                          foreach( unserialize(PROPERTY_TYPE_SELL) as $propertyTypeValue => $propertyTypeName ){
?>
			  <option value="<?php echo $propertyTypeValue;?>" <?php if($propertyTypeValue==$sellBusinessAdditionalDetails[$i-1]['property_type']){ ?>  selected <?php } ?>><?php echo $propertyTypeName;?></option>
<?php
                          }
?>
                        </select>
						<div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                        <label for="real_state_value">Real Estate Value<span style="color: #ec0102;">*</span></label>
						<div class="input-group">		
						<div class="input-group-addon currency">
                          <select class="form-control" id="real_state_value_unit_<?php echo $i; ?>" name="real_state_value_unit_<?php echo $i; ?>" data-error="Real Estate required" required> 
<?php
                            foreach( unserialize(PRICES) as $priceUnitValue=>$priceUnitName ){
?>
			    <option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessAdditionalDetails[$i-1]['real_state_value_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
                            }
?>
                          </select>
						  
                          </div>
						
			<input type="hidden" class="form-control" placeholder="" id="real_state_value_<?php echo $i; ?>" name="real_state_value_<?php echo $i; ?>" value="<?php echo $sellBusinessAdditionalDetails[$i-1]['real_state_value'];?>">
						
						
			
						</div>
						<div class="help-block with-errors"></div>
                        </div>
                      </div>
					  </div>
					  <!--</div>-->
                      <div class="col-sm-12 p-0">
                        <div class="form-group">
                        <label for="facility_desc">Describe Your Facility<span style="color: #ec0102;">*</span></label>
			<textarea class="form-control" rows="3" placeholder="About Infrastructure and premises details" id="facility_desc_<?php echo $i; ?>" name="facility_desc_<?php echo $i; ?>" data-error="Description required" required><?php echo $sellBusinessAdditionalDetails[$i-1]['facility_desc'];?></textarea>
			<div class="help-block with-errors"></div>
                        </div>
                          </div>
                  </div>
                  <?php }else{ ?>
						<input type="hidden" id="property_type_<?php echo $i; ?>" name="property_type_<?php echo $i; ?>" value="">
						<input type="hidden" id="real_state_value_unit_<?php echo $i; ?>" name="real_state_value_unit_<?php echo $i; ?>" value="">
						<input type="hidden" id="real_state_value_<?php echo $i; ?>" name="real_state_value_<?php echo $i; ?>" value="">
						<input type="hidden" id="facility_desc_<?php echo $i; ?>" name="facility_desc_<?php echo $i; ?>" value="">
					<?php }  ?>		
                  
                  <div class="areu" id="commercial_area_<?php echo $i; ?>">
                    <div class="col-sm-12">
                     <div class="col-sm-4">
                      <div class="form-group">
                        
                        <select class="form-control" id="industrial_commercial_<?php echo $i; ?>" name="industrial_commercial_<?php echo $i; ?>"> 
<?php
                         foreach( unserialize(PROPERTY_AREA) as $propertyAreaValue => $propertyAreaName ){
?>
                         <option value="<?php echo $propertyAreaValue; ?>" <?php if($propertyAreaValue==$sellBusinessAdditionalDetails[$i-1]['industrial_commercial']){ ?> selected <?php } ?>><?php echo $propertyAreaName?></option>
<?php
                         }
?>
                        </select>
                        </div>
                      </div>
                     </div> 
                    <div class="col-sm-12">
                    <div class="col-sm-3">
                        <div class="form-group">
                        <label for="total_land_area">Total land Area</label>
                        <div class="input-group">
                          
			  <input type="text" class="form-control" placeholder="" id="total_land_area_<?php echo $i; ?>" name="total_land_area_<?php echo $i; ?>" value="<?php echo $sellBusinessAdditionalDetails[$i-1]['total_land_area'];?>">
			  <div class="input-group-addon currency">
                          <select class="form-control" id="total_land_area_type_<?php echo $i; ?>" name="total_land_area_type_<?php echo $i; ?>"> 
<?php
                           foreach( unserialize(AREA_UNITS) as $areaUnitValue => $areaUnitName ){
?>
                           <option value="sqft" <?php if( $areaUnitValue == $sellBusinessAdditionalDetails[$i-1]['total_land_area_type'] ){echo 'selected="selected"';}?>><?php echo $areaUnitName;?></option>
<?php
                           }
?>
                          </select>
						  
                          </div>
                        </div>

                        </div>
                      </div>
                      
                      <div class="col-sm-3">
                        <div class="form-group">
                        <label for="built_up_area">Built-up</label>
                        <div class="input-group">
                          
			  <input type="text" class="form-control" placeholder="" id="built_up_area_<?php echo $i; ?>" name="built_up_area_<?php echo $i; ?>" value="<?php echo $sellBusinessAdditionalDetails[$i-1]['built_up_area'];?>">
			  <div class="input-group-addon currency">
                          <select class="form-control" id="built_up_area_type_<?php echo $i; ?>" name="built_up_area_type_<?php echo $i; ?>">
<?php
                           foreach( unserialize(AREA_UNITS) as $areaUnitValue => $areaUnitName ){
?>
                           <option value="sqft" <?php if( $areaUnitValue == $sellBusinessAdditionalDetails[$i-1]['built_up_area_type'] ){echo 'selected="selected"';}?>><?php echo $areaUnitName;?></option>
<?php
                           }
?>
                          </select>
						  
                          </div>
                        </div>
					
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                        <label for="open_area">Open</label>
                        <div class="input-group">
                         
			  <input type="text" class="form-control" placeholder="" id="open_area_<?php echo $i; ?>" name="open_area_<?php echo $i; ?>" value="<?php echo $sellBusinessAdditionalDetails[$i-1]['open_area'];?>">
			   <div class="input-group-addon currency" >
                          <select class="form-control" id="open_area_type_<?php echo $i; ?>" name="open_area_type_<?php echo $i; ?>">
<?php
                           foreach( unserialize(AREA_UNITS) as $areaUnitValue => $areaUnitName ){
?>
                           <option value="sqft" <?php if( $areaUnitValue == $sellBusinessAdditionalDetails[$i-1]['open_area_type'] ){echo 'selected="selected"';}?>><?php echo $areaUnitName;?></option>
<?php
                           }
?>
                          </select>
                          </div>
                        </div>
						
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                        <label for="other_area">Other</label>
                        <div class="input-group">
                         <input type="text" class="form-control" placeholder="" id="other_area_<?php echo $i; ?>" name="other_area_<?php echo $i; ?>" value="<?php echo $sellBusinessAdditionalDetails[$i-1]['other_area'];?>">
                        </div>
						<div class="help-block with-errors"></div>
                        </div>
                      </div>
					 </div>
					</div>
				   </div>
					<?php } ?>
				   </div>	
                    
                    <!--<div class="col-md-12 padd0">
                     <button type="button" class="btn btn-default preview-add-button">
                                <span class="glyphicon glyphicon-plus"></span> Add Property
                                   </button>
                    </div>-->
                   
                  
                  
                  
                  
                  <div class="areu" style="margin-top:40px;">
                    <p>Financial Details <span>- Last 3 Year Data</span></p>
					<?php $countFin = count($sellBusinessAdditionalFinancialDetails);
				 if($countFin==0){
					 $count_records_fin = 1;
				 }else{
					 $count_records_fin = $countFin;
				 }		
				 //echo $count_records. ' sssssssssssssssssss';
				 ?> 
				 <div class="col-md-12">
				 <input type="hidden" id="count-fin" name="count-fin" value="<?php echo $count_records_fin; ?>">
				<div class="add-finance_2">
				<?php
					for($ii=1; $ii < $count_records_fin+1; $ii++){	
				?>
				<input type="hidden" id="finance_id_<?php echo $ii; ?>" name="finance_id_<?php echo $ii; ?>" value="<?php echo $sellBusinessAdditionalFinancialDetails[$ii-1]['id']; ?>">
					
					
					<div id="financial_details_<?php echo $ii; ?>" class="col-sm-12 padd0 add-finance_<?php echo $ii; ?>">
                     <div class="col-sm-2">
                        <div class="form-group">
                         <label for="fin_year">Year<span style="color: #ec0102;">*</span></label>
						 <Select class="form-control" id="fin_year_<?php echo $ii; ?>" name="fin_year_<?php echo $ii; ?>" data-error="Year required" required>
                          <option value="">Select</option>
<?php
			  for( $iy = (date('Y') - 4); $iy <= date('Y'); $iy++ ){
?>
                          <option value="<?php echo $iy;?>" <?php if($iy == $sellBusinessAdditionalFinancialDetails[$ii-1]['fin_year']){echo 'selected=selected';}?>><?php echo $iy;?></option>
<?php
			  }
?>
                        </select>
						<div class="help-block with-errors"></div>
			 <!--<input type="text" class="form-control"  placeholder="" id="fin_year" name="fin_year" value="<?php //echo $sellBusinessAdditionalDetails[0]['fin_year'];?>">-->
						
                        </div>
                     </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                        <label for="fin_revenue_turnover">Turnover<span style="color: #ec0102;">*</span></label>
	
						
						<input type="text" class="form-control" placeholder="" id="fin_revenue_turnover_<?php echo $ii; ?>" name="fin_revenue_turnover_<?php echo $ii; ?>" value="<?php echo $sellBusinessAdditionalFinancialDetails[$ii-1]['fin_revenue_turnover'];?>" data-error="Turnover required" required>
						<div class="help-block with-errors"></div>
                        </div>
                     </div> 
                    <div class="col-sm-2">
                        <div class="form-group">
                        <label for="fin_EDITDA">EDITDA<span style="color: #ec0102;">*</span></label>
						<!--<select class="form-control" id="fin_EDITDA_<?php echo $ii; ?>" name="fin_EDITDA_<?php echo $ii; ?>"> 
<?php
                            foreach( unserialize(PRICES) as $priceUnitValue=>$priceUnitName ){
?>
			    <option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessAdditionalFinancialDetails[$ii-1]['fin_EDITDA']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
                            }
?>
                          </select>-->
						
                        <input type="text" class="form-control" placeholder="" id="fin_EDITDA_<?php echo $ii; ?>" name="fin_EDITDA_<?php echo $ii; ?>" value="<?php echo $sellBusinessAdditionalFinancialDetails[$ii-1]['fin_EDITDA'];?>" data-error="EDITDA required" required>
						<div class="help-block with-errors"></div>
                        </div>
                     </div> 
                    <div class="col-sm-2">
                        <div class="form-group">
                        <label for="fin_PAT">PAT<span style="color: #ec0102;">*</span></label>
						<!--<select class="form-control" id="fin_PAT_<?php echo $ii; ?>" name="fin_PAT_<?php echo $ii; ?>"> 
<?php
                            foreach( unserialize(PRICES) as $priceUnitValue=>$priceUnitName ){
?>
			    <option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessAdditionalFinancialDetails[$ii-1]['fin_PAT']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
                            }
?>
                          </select>-->
                        <input type="text" class="form-control" placeholder="" id="fin_PAT_<?php echo $ii; ?>" name="fin_PAT_<?php echo $ii; ?>" value="<?php echo $sellBusinessAdditionalFinancialDetails[$ii-1]['fin_PAT'];?>" data-error="PAT required" required>
						<div class="help-block with-errors"></div>
                        </div>
                     </div> 
                    <div class="col-sm-2">
                        <div class="form-group">
                        <label for="fin_margin">Margin<span style="color: #ec0102;">*</span></label>
						<!--<select class="form-control" id="fin_margin_<?php echo $ii; ?>" name="fin_margin_<?php echo $ii; ?>"> 
<?php
                            foreach( unserialize(PRICES) as $priceUnitValue=>$priceUnitName ){
?>
			    <option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessAdditionalFinancialDetails[$ii-1]['fin_margin']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
                            }
?>
                          </select>-->
                        <input type="text" class="form-control" placeholder="" id="fin_margin_<?php echo $ii; ?>" name="fin_margin_<?php echo $ii; ?>" value="<?php echo $sellBusinessAdditionalFinancialDetails[$ii-1]['fin_margin'];?>" data-error="Margin required" required>
						<div class="help-block with-errors"></div>
                        </div>
                     </div>
                    <!--<div class="col-sm-2">
                        <div class="form-group">
                        <label for="fin_yearly">Yearly</label>
                        <input type="text" class="form-control" placeholder="" id="fin_yearly_<?php echo $ii?>" name="fin_yearly_<?php echo $ii?>" value="<?php echo $sellBusinessAdditionalFinancialDetails[$ii-1]['fin_yearly'];?>">
                        </div>
                     </div>-->
                   </div>  
				   <?php } ?>
					</div>
				<!--<div class="col-md-12 padd0">
                     <button type="button" class="btn btn-default finance-add-button">
                                <span class="glyphicon glyphicon-plus"></span> Add Financial Year
                                   </button>
                    </div>-->	  
					  
                  </div>
				  </div>
                  <div class="col-sm-4"></div>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-5" style="padding-right:0">
                     <input type="hidden" id="next_tab" name="next_tab" value="Uploads" />
                     <input type="hidden" id="formId" name="formId" value="<?php echo $formId;?>" />
                     <!--<button type="button" class="savebtn" id="btn_ad">Save &amp; Continue</button>-->
                  </div>
                </div>
				 
				 
				 
				 </form>
                </div>
               </div>

               <div class="tab-pane" id="Uploads">
                <div class="panel-body">
                 <div class="col-sm-12 padd0">
                  <div class="form-c-box">
                   <form action="<?php echo base_url(); ?>lb_userregister" id="seller_upload" name="seller_upload" class="upload-image-form" enctype="multipart/form-data" method="post" accept-charset="iso-8859-1" >
                    <div class="areu">
                     <p>Photos</p>
                     <div class="col-sm-12">
					 <div class = "upload-image-messages"></div>
                      <div class="drag-area">
                       <div class="add-btn-box">
					   <input type="hidden" id="frm_id" name="frm_id" value="<?php echo $formId;?>" />
					   <input type="hidden" id="formId" name="formId" value="<?php echo $formId;?>" />
						<input type="hidden" id="frm_submit" name="frm_submit" value="UA_FU" />
                       <!-- <input type="file" class="add-btn" multiple = "multiple" accept = "image/*" class="add-btn" name="uploadfile[]" value="+ Photo" />Or Drop Image Here-->
							</div>
							<?php
							   foreach( $medias as $media ){
								   if( strcasecmp( $media['document_type'], 'image' ) == 0 ){
							?>
									   <div class="col-sm-2">
									     <div class="image-outer-cover">
										   <div class="top-up">
										     <i class="fa fa-eye" data-toggle="modal" data-target="#myModal"></i>
											 <i class="fa fa-trash"></i>
										   </div>
										   <img src="<?php echo base_url().$media['path'];?>" width="105" height="86">
										 </div>
									   </div>
							<?php
								   }
							   }
							?>
                       </div>
                      </div>
                     </div>
                    
                    <div class="areu">
                     <p>Videos</p>
                     <div class="col-sm-12">
                                        <div class="drag-area">
                          <div class="add-btn-box">
                            <input type="hidden" name="frm_id" id="frm_id" value="<?php echo $this->session->userdata('last_form_id');?>" />
                           <!-- <input type="file" multiple="multiple" accept="video/*,video/mp4" class="add-btn" name="uploadfile[]" value="+ Video"/>
                            Or drop video here-->
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
         <video width="120" controls>
  <source src="<?php echo base_url().$media['path'];?>" type="video/mp4"></video>
      </div>
     
    </div>
  </div>
</div>
										   <video width="120" controls>
  <source src="<?php echo base_url().$media['path'];?>" type="video/mp4"></video>
										 </div>
									   </div>
							<?php
								   }
							   }
							?>
						  
						  
                        </div>
                     </div>
                    </div>
             <div class="areu">
				   <input type="hidden" name="frm_id" id="frm_id" value="<?php echo $this->session->userdata('last_form_id');?>" />
                  <p>Upload the significant documents to give greater thrust to your business pitch.</p>
                     <div class="outer">
                      <div class="col-sm-5">
                        1. Business Teaser/Executive summary
                      </div>
                     <!-- <div class="col-sm-7">
                        <input type="file" multiple="multiple" class="add-btn" name="uploadexesumfile[]" size="1">
                      </div>-->
							<?php
							   foreach( $medias as $media ){
								   if( strcasecmp( $media['document_type'], 'executive' ) == 0 ){
							?>
									   <div class="col-sm-2">
									     <div class="image-outer-cover">
										   <div class="top-up">
										   
											 <div class="record" id="record-<?php echo $Teaser['id'];?>">
				<a href="?delete=<?php echo $media['id'];?>" class="delete" style="float: right;"><i class="fa fa-trash"></i></a>
				
			</div>
										   </div>
										   <a href="<?php echo base_url().$media['path'];?>">View</a>
										 </div>
									   </div>
							<?php
								   }
							   }
							?>
					  
                     </div>
                     <div class="outer">
                      <div class="col-sm-5">
                        2. Information Memorandum/Presentation
                      </div>
                     <!-- <div class="col-sm-7">
                        <input type="file" multiple="multiple" class="add-btn" name="uploadmemofile[]" size="1">
                      </div>-->
					  <?php
							   foreach( $medias as $media ){
								   if( strcasecmp( $media['document_type'], 'memorandum' ) == 0 ){
							?>
									   <div class="col-sm-2">
									     <div class="image-outer-cover">
										   <div class="top-up">
										    
											 <div class="record" id="record-<?php echo $Teaser['id'];?>">
				<a href="?delete=<?php echo $media['id'];?>" class="delete" style="float: right;"><i class="fa fa-trash"></i></a>
				
			</div>
										   </div>
										   <a href="<?php echo base_url().$media['path'];?>">View</a>
										 </div>
									   </div>
							<?php
								   }
							   }
							?>
					  
                     </div>
                     <div class="outer">
                      <div class="col-sm-5">
                        3. Financials
                      </div>
                     <!-- <div class="col-sm-7">
                        <input type="file" multiple="multiple" class="add-btn" name="uploadfinancialfile[]" size="1">
                      </div>-->
					  <?php
							   foreach( $medias as $media ){
								   if( strcasecmp( $media['document_type'], 'financials' ) == 0 ){
							?>
									   <div class="col-sm-2">
									     <div class="image-outer-cover">
										   <div class="top-up">
										    
											 <div class="record" id="record-<?php echo $Teaser['id'];?>">
				<a href="?delete=<?php echo $media['id'];?>" class="delete" style="float: right;"><i class="fa fa-trash"></i></a>
				
			</div>
										   </div>
										  <a href="<?php echo base_url().$media['path'];?>">View</a>
										 </div>
									   </div>
							<?php
								   }
							   }
							?>
					  
                     </div>
                     <div class="outer">
                      <div class="col-sm-5">
                        4. Additional Documents
                      </div>
                      <!--<div class="col-sm-7">
                        <input type="file" multiple="multiple" class="add-btn" name="uploadadditionfile[]" size="1">
                      </div>-->
					  <?php
							   foreach( $medias as $media ){
								   if( strcasecmp( $media['document_type'], 'additional' ) == 0 ){
							?>
									   <div class="col-sm-2">
									     <div class="image-outer-cover">
										   <div class="top-up">
										    
											 <div class="record" id="record-<?php echo $Teaser['id'];?>">
				<a href="?delete=<?php echo $media['id'];?>" class="delete" style="float: right;"><i class="fa fa-trash"></i></a>
				
			</div>
										   </div>
										   <a href="<?php echo base_url().$media['path'];?>">View</a>
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
                    <input type="hidden" name="frm_submit" value="sb_au" />
                   <!-- <button type="submit" class="savebtn" style="float:right;">Submit</button>-->
                  </div>
				    </form>
                  </div>

                   <div class="col-sm-4"></div>
                   <div class="col-sm-3"></div>
                   <div class="col-sm-5" style="padding-right:0">
                    <input type="hidden" id="next_tab" name="next_tab" value="Packagedetails" />
                    <input type="hidden" id="formId" name="formId" value="<?php echo $formId;?>" />
                   <!-- <button type="submit" class="savebtn" >Submit</button>-->
                   </div>
                  </form>
                 </div>
                </div>
               </div>
              </div>
              <div class="tab-pane" id="Packagedetails">
               <div class="panel-body">
                <div class="col-sm-12 padd0">
                 <div class="form-c-box">
                  <form id="seller_pdetails" name="seller_pdetails" method="POST" action="">
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
							<img style="left:20px;" class="img-tick-2" src="<?php echo asset_url();?>images/r-tick.png" width="80">
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
                        <!-- <button class="active-pack" onClick="setUserAccountSellBusinessPackage('<?php echo $businessDetails[0]['form_id'];?>', '<?php echo $package['id'];?>')">Active Package</button>-->
						
						<div class="activebtn">Active Package</div>
<?php
                        }else{
?>
							
                        <!-- <button onClick="setUserAccountSellBusinessPackage('<?php echo $businessDetails[0]['form_id'];?>', '<?php echo $package['id'];?>')">Upgrade</button>-->
						 
						
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
                   <!-- <button type="button" class="savebtn">Continue</button>-->
                   </div>
                  </form>
                 </div>
                </div>
               </div>
              </div>
	

              <div class="tab-pane" id="Additionalservices">
               <div class="panel-body">
                <div class="col-sm-12 padd0">
                 <div class="form-c-box">
                  <form id="seller_aservice" name="seller_aservice" method="POST" method="post" data-toggle="validator" role="form" class="was-validated" action="">
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
                   <!-- <button type="button" class="savebtn" id="btn_as">Submit</button>-->
                   </div>
                  </form>
                 </div>
                </div>
               </div>
              </div>
              <div class="tab-pane" id="Payment">
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
                   <!-- <button type="submit" class="savebtn">Save</button>-->
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


