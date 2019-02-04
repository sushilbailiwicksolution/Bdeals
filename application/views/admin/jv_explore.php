<?php
 //var_dump($businessDetails);
 $user_id=$this->uri->segment('3');
 
// echo $this->session->userdata('admin_userid');
?>
<div class="main-content">
                <h1 class="page-title">Joint Venture </h1>
               
                <div class="row ">
                    <div class="col-md-12">
                        <div class="tabs-container">
                            <input type="hidden" id="base_url" name="base_url" value="<?php echo base_url();?>" />
                          
                            <ul class="nav nav-tabs">
                               <h4>User Profile</h4>

                            </ul>
							<form id="seller_up" name="seller_up" method="POST" action="<?php echo base_url();?>admin/seller/UpdateJVForm" enctype="multipart/form-data" >
                            <div class="tab-content">
                                <div class="tab-pane active" id="userprofile">
                                    <div class="panel-body">
                                        <div class="form-c-box">
										  <input type="hidden" id="user_id" name="user_id" value="<?php echo $user_id;?>" />
                                           <div class="col-sm-6">
                                                <div class="form-group">
  <label for="">Name: <?php echo $businessDetails[0]['name'];?></label>
						  
                                                </div>
                                            </div>
											 <div class="col-sm-6">
                                                <div class="form-group">
                                                  
							                                                    <label for="">Email address: <?php echo $businessDetails[0]['email'];?></label><br/>
					
                                                </div>
                                            </div>
											<div class="col-sm-6">
                                                <div class="form-group">
  <label for="">Contact: <?php echo $businessDetails[0]['contact'];?></label>
						  
                                                </div>
                                            </div>
											 <div class="col-sm-6">
                                                <div class="form-group">
  <label for="">Address: <?php echo $businessDetails[0]['address'];?></label>
						  
                                                </div>
                                            </div>
                                      
                                                <input type="hidden" id="formId" name="formId" value="<?php echo $formId;?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane1" id="basicinformation">
								
                                    <div class="panel-body">
									<h4>Basic Information</h4>
                                        <div class="col-sm-12 padd0">
                                            <div class="form-c-box">
					 
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Key Headline</label>
							<input type="text" name="keyHeadline" id="keyHeadline" class="form-control" placeholder="Business Heading" value="<?php echo $businessDetails[0]['key_headline'];?>"  >
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Description of your business</label>
							<textarea name="bus_desc" id="bus_desc" class="form-control" rows="3"  maxlength="200"><?php echo $businessDetails[0]['description'];?></textarea>
                                                    </div>
                                                </div>
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
						
<?php if($businessDetails[0]['location_city']!="Other"){
                         foreach( $this->cachemethods->getCityByStateId($businessDetails[0]['location_state']) as $citydet ){
							 
							 
?>
                         <option value="<?php echo $citydet->id;?>" <?php if($citydet->id == $businessDetails[0]['location_city']){echo 'selected=selected';}?>><?php echo $citydet->city_name; ?></option>
<?php
                         }
}	 
						 else{?>
							 
							<option value="Other" <?php echo 'selected=selected';?>>Other</option> 
<?php						 }
						 
?>						
                        </select>
					
                       <input type="text" id="other_city"  name="other_city" class="form-control" placeholder="Other City" value="<?php echo $businessDetails[0]['other_city'];?>"  data-error="City required" style="display:none;"/>
                        <div class="help-block with-errors"></div>
                       </div>
                      </div>
					   <div class="col-sm-3 statecityid" style="display:none;">
                       <div class="form-group">
                        <label for="city">Other City<span style="color: #ec0102;">*</span></label>
					 
                       <input type="text" id="other_city_2"  name="other_city_2" class="form-control" placeholder="Other City" value="<?php echo $businessDetails[0]['other_city'];?>"  data-error="City required"/>
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
						<input type="text" name="listing_category_other" class="form-control listing_category_other" placeholder="Other Category" value="<?php echo $businessDetails[0]['listing_category_other'];?>" style="display:none;"/>
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
                        <label for="legal">Legal Entity<span style="color: #ec0102;">*</span></label>
                        <Select class="form-control" id="legal" name="legal" required data-error="Legal Entity required">
                          <option value="">Select</option>
<?php
			 foreach( unserialize(LEGAL_ENTITIES_JV) as $legalValue => $legalName ){
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
                        <label for="eyear">Establishment Year</label>
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
                        <label for="bstatus">Current Status of Business<span style="color: #ec0102;">*</span></label>
                        <Select class="form-control" id="bstatus" name="bstatus" required data-error="Business Status required">
                          <option value="">Select</option>
<?php
			 foreach( unserialize(BUSINESS_CURRENT_STATUS_JV) as $currentStatusValue => $currentStatusName ){
?>
                          <option value="<?php echo $currentStatusValue;?>" <?php if($currentStatusValue == $businessDetails[0]['current_status_of_business']){echo 'selected=selected';}?>><?php echo $currentStatusName;?></option>
<?php
			 }
?>
                        </select>
						<input type="text" id="bstatus_other" name="bstatus_other" class="form-control bstatus_other" placeholder="other status" value="<?php echo $businessDetails[0]['bstatus_other'];?>" style="display:none;"/>
						<div class="help-block with-errors"></div>
                        </div>
                      </div>
                      </div>
                    </div>
                  </div>
                                              
                                             
                                                    <input type="hidden" id="formId" name="formId" value="<?php echo $formId;?>" />
                                                    <input type="hidden" id="next_tab" name="next_tab" value="businessdescription" />
                                                   
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane1" id="businessdescription">
                                    <div class="panel-body">
									<h4>Business Description</h4>
                                        <div class="col-sm-12 padd0">
                                            <div class="form-c-box">
					 <?php /* action="<?php echo base_url();?>admin/seller/businessDescription"> */ ?>
                                                <div class="areu">
                                                    <p>No. of Employees</p>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="">Permanent</label>
							    <input type="text" name="pemployee" id="pemployee" class="par_numbers form-control" placeholder="00" value="<?php echo $businessDetails[0]['no_of_permanent_employee'];?>" onkeyup="sumEmployeeProfile();"  >
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="">Contractual</label>
							    <input type="text" name="cemployee" id="cemployee" class="par_numbers form-control" placeholder="00" value="<?php echo $businessDetails[0]['no_of_contractual_emplyee'];?>" onkeyup="sumEmployeeProfile();"  >
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="">Total</label>
							    <input type="text" name="temployee" id="temployee" class="par_numbers form-control" placeholder="00" value="<?php echo $businessDetails[0]['total_employee'];?>" onkeyup="sumEmployeeProfile();"  >
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="">Business Re-locatable</label>
                                                            <select class="form-control" id="bus_reloc" name="bus_reloc"  >
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
                                                            <select class="form-control" id="listed_by" name="listed_by"  >
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
                                                    <!--<div class="col-sm-4">
                                                                       <div class="form-group">
                        <label for="ask_price">Asking Price<span style="color: #ec0102;">*</span></label>
								<div class="input-group">
									<div class="input-group-addon currency" style="width: 54px;">
										<select class="form-control" id="ask_price_currency" name="ask_price_currency" onChange="resetPriceUnit('#ask_price_unit',this.value)"  > 
<?php
											foreach( unserialize(PRICE_UNITS) as $priceUnitValue=>$priceUnitName ){
?>
												<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $businessDetails[0]['ask_price_currency']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
											}
?>
										</select>
										
									</div>
										<input type="text" class="form-control" pattern="[1-9]{1}[0-9]*" id="ask_price" name="ask_price" placeholder="Amount" value="<?php echo $businessDetails[0]['ask_price'];?>" onkeyup="resetPriceRange('#price_range_type',this.value)" style="width: 78px; height: 39px;" data-error="Asking Price required" required  >
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
                                                    <div class="col-sm-4">
                                                         <div class="form-group">
                        <label for="price_range">Price Range<span style="color: #ec0102;">*</span></label>
                        <div class="input-group">
                          <div class="input-group-addon currency" style="    border-top-right-radius: 6px;    border-bottom-right-radius: 6px;">
                          <select style="height: 38px; border-top-right-radius: 6px;    border-bottom-right-radius: 6px;" class="form-control" id="price_range_type" name="price_range_type" data-error="Price Range required" required  >
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
                                                    </div>-->
                                                    <div class="col-sm-4">
                                                             <div class="form-group">
                        <label for="latest_revenu">Latest Turnover/Revenue<span style="color: #ec0102;">*</span></label>
						<div class="input-group">
									<div class="input-group-addon currency" style="width: 54px;">
										<select  class="form-control" id="latest_revenu_currency" name="latest_revenu_currency" onChange="resetPriceUnit('#latest_revenu_unit',this.value)"  > 
<?php
											foreach( unserialize(PRICE_UNITS) as $priceUnitValue=>$priceUnitName ){
?>
												<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $businessDetails[0]['latest_revenu_currency']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
											}
?>
										</select>
									</div>
										<input type="text" class="form-control" pattern="[0-9]{1}[0-9]*" id="latest_revenu" name="latest_revenu" placeholder="Amount" value="<?php echo $businessDetails[0]['latest_revenu'];?>"  style="width: 78px; height: 39px;" data-error="Turnover/Revenue required" required  >
										<div class="input-group-addon currency" style="align: left; float: left; width: 116px; height: 39px; ">
											<select class="form-control" id="latest_revenu_unit" name="latest_revenu_unit" align="left"> 
<?php
													if($businessDetails[0]['latest_revenu_currency']=='INR'){
													foreach( unserialize(PRICE_UNITS_INR) as $priceUnitValue=>$priceUnitName ){
														//echo $buyBusinessProfile[0]['investment_min'];
													?>
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $businessDetails[0]['latest_revenu_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
													}}
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
							    <textarea class="form-control" name="product_service_desc" id="product_service_desc" rows="3" placeholder="Key Products Or Services of the Business"  ><?php echo $businessDetails[0]['product_service_desc'];?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Competition / Market</label>
							    <textarea class="form-control" name="competition_market_desc" id="competition_market_desc" rows="3" placeholder="Current Market and Competition scenario"  ><?php echo $businessDetails[0]['competition_market_desc'];?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Growth Potential</label>
							    <textarea class="form-control" name="growth_potential" id="growth_potential" rows="3" placeholder="What is the future growth potential"  ><?php echo $businessDetails[0]['growth_potential'];?></textarea>
                                                        </div>
                                                    </div>
                                                    <!--<div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Reason for Sale</label>
							    <textarea class="form-control" name="reason_for_sale" id="reason_for_sale" rows="3" placeholder="Describe the reason of selling your Business"  ><?php echo $businessDetails[0]['reason_for_sale'];?></textarea>
                                                        </div>
                                                    </div>-->
                                                </div>

                                             
                                                    <input type="hidden" id="next_tab" name="next_tab" value="additionaldetails" />
                                                    <input type="hidden" id="formId" name="formId" value="<?php echo $formId;?>" />
                                                   
                                             
                                            </div>
                                        </div>
                                    </div>
                                </div>
                <div class="tab-pane1" id="additionaldetails">
                 <div class="panel-body">
				 <h4>Additional Details</h4>
			
				<div class="form-c-box">
                 <?php  $count = count($sellBusinessAdditionalDetails);
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
				
				
						
				<div class="col-sm-12 padd0 add-property_<?php echo $i; ?>">
					<?php if($i==1){ ?>
                  <div class="areu" id="property_profile_<?php echo $i; ?>" name="property_profile_<?php echo $i; ?>">
						<div class="col-sm-12">
                        <div class="col-sm-6 padd0">
                      <div class="form-group">
                                <label for="property_type">Property Type<span style="color: #ec0102;">*</span></label>
					
                        <select class="form-control" id="property_type_<?php echo $i; ?>" name="property_type" onchange="getId(this.id, this)"  data-error="Property Type required" required>
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
					                          <div class="col-sm-6">
                        <div class="form-group">
                       <!-- <label for="ask_price" id="askdefault">Asking Price<span style="color: #ec0102;">*</span></label>-->
					    <label for="ask_price" id="owned">Real Estate Value<span style="color: #ec0102;">*</span></label>
                        <label for="ask_price" id="leased" style="display:none;">Rental<span style="color: #ec0102;">*</span></label>
                       
						<?php //echo $sellBusinessAdditionalDetails[0]['ask_price_currency_real'];?>
								<div class="input-group">
									<div class="input-group-addon currency" style="width: 58px;">
										<select class="form-control" id="ask_price_currency" name="ask_price_currency_real" onChange="resetPriceUnit('#ask_price_unit',this.value)" required> 
<?php
											foreach( unserialize(PRICE_UNITS) as $priceUnitValue=>$priceUnitName ){
?>
												<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessAdditionalDetails[0]['ask_price_currency_real']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
											}
?>
										</select>
										
									</div>
										<input type="text" class="form-control" pattern="[1-9]{0}[0-9]*" id="ask_price" name="ask_price_real" placeholder="Amount" value="<?php echo $sellBusinessAdditionalDetails[0]['ask_price_real'];?>" onkeyup="resetPriceRange('#price_range_type',this.value)" style="width: 78px; height: 33px;" data-error="Asking Price required" required>
										<div class="input-group-addon currency" style="align: left; float: left; width: 115px; height: 33px; ">
											<select class="form-control" id="ask_price_unit" name="ask_price_unit_real" align="left" onchange="resetPriceRange('#price_range_type',this.value)" required> 
<?php
													if($sellBusinessAdditionalDetails[0]['ask_price_currency_real']=='INR'){
														foreach( unserialize(PRICE_UNITS_INR) as $priceUnitValue=>$priceUnitName ){			
														//echo $buyBusinessProfile[0]['investment_min'];
													?>
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessAdditionalDetails[0]['ask_price_unit_real']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
													}}
													else if($sellBusinessAdditionalDetails[0]['ask_price_currency_real']==''){
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
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessAdditionalDetails[0]['ask_price_unit_real']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
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
                  
                  <div class="areu box " id="commercial_area_<?php echo $i; ?>">
				  
				  <input class="newid" type="hidden" id="property_id_<?php echo $i; ?>" name="property_id_<?php echo $i; ?>" value="<?php echo $sellBusinessAdditionalDetails[$i-1]['id']; ?>">
                    <div class="col-sm-12">
                     <div class="col-sm-4">
                      <div class="form-group">
                         <select onchange="getProperty(this.id, this)"  class="form-control" id="industrial_commercial_<?php echo $i; ?>" name="industrial_commercial_<?php echo $i; ?>"> 
<?php
                         foreach( unserialize(PROPERTY_AREA) as $propertyAreaValue => $propertyAreaName ){
?>
                         <option value="<?php echo $propertyAreaValue; ?>" <?php if($propertyAreaValue==$sellBusinessAdditionalDetails[$i-1]['industrial_commercial']){ ?> selected <?php } ?>><?php echo $propertyAreaName?></option>
<?php
                         }
?>                       </select>
                        </div>
                      </div>
                     </div> 
                    <div class="col-sm-12">
                    <div class="col-sm-3">
                        <div class="form-group">
                        <label for="total_land_area">Total land Area</label>
                        <div class="input-group">
                          <input type="text" data-error="Only numeric value allowed" pattern="[1-9]{1}[0-9]*" class="form-control" placeholder="" id="total_land_area_<?php echo $i; ?>" name="total_land_area_<?php echo $i; ?>" value="<?php echo $sellBusinessAdditionalDetails[$i-1]['total_land_area'];?>">
			 
			  <div class="input-group-addon currency">
                          <select class="form-control" id="total_land_area_type_<?php echo $i; ?>" name="total_land_area_type_<?php echo $i; ?>"> 
<?php
                           foreach( unserialize(AREA_UNITS_LAND) as $areaUnitValue => $areaUnitName ){
?>
                           <option value="<?php echo $areaUnitName;?>" <?php if( $areaUnitValue == $sellBusinessAdditionalDetails[$i-1]['total_land_area_type'] ){echo 'selected="selected"';}?>><?php echo $areaUnitName;?></option>
<?php
                           }
?>
                          </select>
						  </div>
						 
                        </div>
				<div class="help-block with-errors"></div>	
                        </div>
						 
                      </div>
                   <div class="col-sm-3" id="built_up_main_<?php echo $i; ?>">
                        <div class="form-group">
                        <label for="built_up_area">Built-up Area</label>
                        <div class="input-group">
                          
			  <input type="text" data-error="Only numeric value allowed" pattern="[1-9]{0}[0-9]*" class="form-control" placeholder="" id="built_up_area_<?php echo $i; ?>" name="built_up_area_<?php echo $i; ?>" value="<?php echo $sellBusinessAdditionalDetails[$i-1]['built_up_area'];?>">
			  <div class="input-group-addon currency">
                          <select class="form-control" id="built_up_area_type_<?php echo $i; ?>" name="built_up_area_type_<?php echo $i; ?>">
<?php
                           foreach( unserialize(AREA_UNITS) as $areaUnitValue => $areaUnitName ){
?>
                           <option value="<?php echo $areaUnitName;?>" <?php if( $areaUnitValue == $sellBusinessAdditionalDetails[$i-1]['built_up_area_type'] ){echo 'selected="selected"';}?>><?php echo $areaUnitName;?></option>
<?php
                           }
?>
                          </select>
						  
                          </div>
                        </div>
					<div class="help-block with-errors"></div>	
                        </div>
                      </div>
                      <div class="col-sm-3" id="open_area_main_<?php echo $i; ?>">
                        <div class="form-group">
                        <label for="open_area">Open Area</label>
                        <div class="input-group">
                         
			  <input type="text" data-error="Only numeric value allowed" pattern="[1-9]{0}[0-9]*" class="form-control" placeholder="" id="open_area_<?php echo $i; ?>" name="open_area_<?php echo $i; ?>" value="<?php echo $sellBusinessAdditionalDetails[$i-1]['open_area'];?>">
			   <div class="input-group-addon currency" >
                          <select class="form-control" id="open_area_type_<?php echo $i; ?>" name="open_area_type_<?php echo $i; ?>">
<?php
                           foreach( unserialize(AREA_UNITS) as $areaUnitValue => $areaUnitName ){
?>
                           <option value="<?php echo $areaUnitName;?>" <?php if( $areaUnitValue == $sellBusinessAdditionalDetails[$i-1]['open_area_type'] ){echo 'selected="selected"';}?>><?php echo $areaUnitName;?></option>
<?php
                           }
?>
                          </select>
                          </div>
                        </div>
						<div class="help-block with-errors"></div>	
                        </div>
                      </div>
					<?php //}?>
                       <div class="col-sm-3" id="carpet_area_main_<?php echo $i; ?>" style="display:none;">
                        <div class="form-group">
                        <label for="carpet_area">Carpet Area</label>
                        <div class="input-group">
                         <input data-error="Only numeric value allowed" pattern="[1-9]{0}[0-9]*" type="text" class="form-control" placeholder="" id="carpet_area_<?php echo $i; ?>" name="carpet_area_<?php echo $i; ?>" value="<?php echo $sellBusinessAdditionalDetails[$i-1]['carpet_area'];?>">
						  <div class="input-group-addon currency" >
                          <select class="form-control" id="carpet_area_type_<?php echo $i; ?>" name="carpet_area_type_<?php echo $i; ?>">
<?php
                           foreach( unserialize(AREA_UNITS) as $areaUnitValue => $areaUnitName ){
							   
							   //echo $areaUnitName;
?>
                           <option value="<?php echo $areaUnitName;?>" <?php if( $areaUnitValue == $sellBusinessAdditionalDetails[$i-1]['carpet_area_type'] ){echo 'selected="selected"';}?>><?php echo $areaUnitName;?></option>
						   
<?php
                           }
?>
                          </select>
                          </div>
                        </div>
						<div class="help-block with-errors"></div>
                        </div>
                      </div>
					 <input class="button-remove" id="button-remove_<?php echo $i; ?>" value="<?php echo $sellBusinessAdditionalDetails[$i-1]['id'];?>&<?php echo $i; ?>" onclick='f1(this)' type="image" src="<?php echo asset_url();?>images/delete.png" style="display:none;">
												
					 </div>
					</div>
				   </div>
				   		
					<?php } ?>
				   </div>		
                    
                    <div class="col-md-12 padd0 prohide">
                    <input class="button-add" type="button" value="+ Add Property">
					

					<!--
                   <button type="button"  class="btn btn-default button-remove"><span class="glyphicon glyphicon-minus"></span> Remove Property</button>-->

                  
                    </div>
					
                  
                  
                  
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
				<div class="add-finance_2" id="input1">
				<?php
					for($ii=1; $ii < $count_records_fin+1; $ii++){	
				?>
				
					
					
					<div id="financial_details_<?php echo $ii; ?>" class="col-sm-12 padd0 finbox add-finance_<?php echo $ii; ?>">
					
					<input class="newfinid" type="hidden" id="finance_id_<?php echo $ii; ?>" name="finance_id_<?php echo $ii; ?>" value="<?php echo $sellBusinessAdditionalFinancialDetails[$ii-1]['id']; ?>">
                     <div class="col-sm-2">
                        <div class="form-group">
                         <label for="fin_year">Year</label>
						 <Select class="form-control" id="fin_year_<?php echo $ii; ?>" name="fin_year_<?php echo $ii; ?>" data-error="Year required">
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
			 <!--<input type="text" class="form-control"  placeholder="" id="fin_year" name="fin_year" value="<?php //echo $sellBusinessAdditionalDetails[0]['fin_year'];?>">-->
						
                        </div>
                     </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                        <label for="fin_revenue_turnover">Turnover</label>
	
						
						<input type="text" class="form-control" placeholder="" id="fin_revenue_turnover_<?php echo $ii; ?>" name="fin_revenue_turnover_<?php echo $ii; ?>" value="<?php echo $sellBusinessAdditionalFinancialDetails[$ii-1]['fin_revenue_turnover'];?>" data-error="Turnover required in numeric value" pattern="[1-9]{1}[0-9]*">
						<div class="help-block with-errors"></div>
                        </div>
                     </div> 
                    <div class="col-sm-2">
                        <div class="form-group">
                        <label for="fin_EDITDA">EDITDA</label>
						<!--<select class="form-control" id="fin_EDITDA_<?php echo $ii; ?>" name="fin_EDITDA_<?php echo $ii; ?>"> 
<?php
                            foreach( unserialize(PRICES) as $priceUnitValue=>$priceUnitName ){
?>
			    <option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessAdditionalFinancialDetails[$ii-1]['fin_EDITDA']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
                            }
?>
                          </select>-->
						
                        <input type="text" class="form-control" placeholder="" id="fin_EDITDA_<?php echo $ii; ?>" name="fin_EDITDA_<?php echo $ii; ?>" value="<?php echo $sellBusinessAdditionalFinancialDetails[$ii-1]['fin_EDITDA'];?>" pattern="[0-9]+(\.[0-9]{0,2})?%?" data-error="EDITDA required in numeric value" >
						<div class="help-block with-errors"></div>
                        </div>
                     </div> 
                    <div class="col-sm-2">
                        <div class="form-group">
                        <label for="fin_PAT">PAT</label>
						<!--<select class="form-control" id="fin_PAT_<?php echo $ii; ?>" name="fin_PAT_<?php echo $ii; ?>"> 
<?php
                            foreach( unserialize(PRICES) as $priceUnitValue=>$priceUnitName ){
?>
			    <option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessAdditionalFinancialDetails[$ii-1]['fin_PAT']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
                            }
?>
                          </select>-->
                        <input type="text" class="form-control" placeholder="" id="fin_PAT_<?php echo $ii; ?>" name="fin_PAT_<?php echo $ii; ?>" pattern="[0-9]+(\.[0-9]{0,2})?%?" value="<?php echo $sellBusinessAdditionalFinancialDetails[$ii-1]['fin_PAT'];?>" data-error="PAT required in numeric value" >
						<div class="help-block with-errors"></div>
                        </div>
                     </div> 
                    <div class="col-sm-2">
                        <div class="form-group">
                        <label for="fin_margin">Margin</label>
						<!--<select class="form-control" id="fin_margin_<?php echo $ii; ?>" name="fin_margin_<?php echo $ii; ?>"> 
<?php
                            foreach( unserialize(PRICES) as $priceUnitValue=>$priceUnitName ){
?>
			    <option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessAdditionalFinancialDetails[$ii-1]['fin_margin']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
                            }
?>
                          </select>-->
                        <input type="text" class="form-control" placeholder="" id="fin_margin_<?php echo $ii; ?>" name="fin_margin_<?php echo $ii; ?>" pattern="[0-9]+(\.[0-9]{0,2})?%?" value="<?php echo $sellBusinessAdditionalFinancialDetails[$ii-1]['fin_margin'];?>" data-error="Margin required in numeric value" >
						<div class="help-block with-errors"></div>
                        </div>
                     </div>
					 
								   
				
	<input type="image" style="display:none;" name="button-remove_<?php echo $ii; ?>" id="finbutton-remove_<?php echo $ii; ?>" value="<?php echo $sellBusinessAdditionalFinancialDetails[$ii-1]['id'];?>&<?php echo $ii; ?>" class="button-remove_<?php echo $ii; ?> finbutton-remove" onclick='RemoveFin(this)' src="<?php echo asset_url();?>images/delete.png" />			
									
			
                    <!--<div class="col-sm-2">
                        <div class="form-group">
                        <label for="fin_yearly">Yearly</label>
                        <input type="text" class="form-control" placeholder="" id="fin_yearly_<?php echo $ii?>" name="fin_yearly_<?php echo $ii?>" value="<?php echo $sellBusinessAdditionalFinancialDetails[$ii-1]['fin_yearly'];?>">
                        </div>
                     </div>-->
                   </div>  
				   <?php } ?>
					</div>
				<div class="col-md-12 padd0">
                     <button type="button" class="btn btn-default finance-add-button">
                                <span class="glyphicon glyphicon-plus"></span> Add Financial Year
                                   </button>
							   
								  
                    </div>	  
					  
                  </div>
				  </div>
                  

                     <input type="hidden" id="next_tab" name="next_tab" value="Uploads" />
                     <input type="hidden" id="formId" name="formId" value="<?php echo $formId;?>" />
                    
                  </div>
                 <!--</div>-->
				
                </div>
               </div>
			   
			   <!--<style>
			   .drag-area {
    border: 1px dashed #273257;
    position: relative;
    margin: 10px 0;
    min-height: 209px;
}
			   </style>-->
				<div class="tab-pane1" id="jvdetails">
                 <div class="panel-body">
				  <h4>JV Details</h4>
                  <div class="col-sm-12 padd0">
				   <div class="form-c-box">
				
                  <div class="col-sm-4">
                    <div class="form-group">
                    <label for="">Purpose of JV<span style="color: #ec0102;">*</span></label>
					<input type="hidden" name="formId" id="frm_id" value="<?php echo $businessDetails[0]['form_id'];?>" />
                   				
			<select onchange="getPropId(this.id, this)" class="form-control" id="purposeJv" name="purposeJv" data-error="Purpose of JV required" required> 
			<option value="">Select</option>
			<option <?php if('Technical' == $businessDetails[0]['purpose_jv']){echo 'selected=selected';}?>>Technical</option>
			<option <?php if('Financial' == $businessDetails[0]['purpose_jv']){echo 'selected=selected';}?>>Financial</option>
			<option <?php if('Others' == $businessDetails[0]['purpose_jv']){echo 'selected=selected';}?>>Others</option>
			
			</select>
					
					<div class="help-block with-errors"></div>
                    </div>
                  </div>
					 <div class="col-sm-4 Pjvother" style="display:none;">
                    <div class="form-group">
                    <label for="">Others<span style="color: #ec0102;">*</span></label>
                    <input type="text" id="purpose_jv_other" name="purpose_jv_other" class="form-control" value="<?php echo $businessDetails[0]['purpose_jv_other'];?>" placeholder="Purpose JV Other"  >
					<div class="help-block with-errors"></div>
                    </div>
                  </div>
                                          <div class="col-sm-4 nature" style="display:none;">
                    <div class="form-group">
                    <label for="">Nature of Technical JV<span style="color: #ec0102;">*</span></label>
                    <input type="text" id="natureJv" name="natureJv" class="form-control" value="<?php echo $businessDetails[0]['nature_jv'];?>" placeholder="Nature of Technical JV"  >
					<div class="help-block with-errors"></div>
                    </div>
                  </div>
             		        <div class="col-sm-6">
                        <div class="form-group">
                        <label for="latest_revenu">Previous Investment<span style="color: #ec0102;">*</span></label>
						<div class="input-group">
									<div class="input-group-addon currency" style="width: 58px;">
										<select  class="form-control" id="previous_investment_currency" name="previous_investment_currency" onChange="resetPriceUnit('#latest_revenu_unit',this.value)" > 
<?php
											foreach( unserialize(PRICE_UNITS) as $priceUnitValue=>$priceUnitName ){
?>
												<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $businessDetails[0]['previous_investment_currency']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
											}
?>
										</select>
									</div>
										<input type="text" class="form-control" pattern="[0-9]{1}[0-9]*" id="previous_investment" name="previous_investment" placeholder="Amount" value="<?php echo $businessDetails[0]['prev_investment'];?>"  style="width: 78px; height: 39px;" data-error="Previous Investment required" required>
										<div class="input-group-addon currency" style="align: left; float: left; width: 120px; height: 39px; ">
											<select class="form-control" id="previous_investment_unit" name="previous_investment_unit" align="left"> 
<?php
													if($businessDetails[0]['previous_investment_unit']=='INR'){
													foreach( unserialize(PRICE_UNITS_INR) as $priceUnitValue=>$priceUnitName ){
														//echo $buyBusinessProfile[0]['investment_min'];
													?>
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $businessDetails[0]['previous_investment_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
													}
													}
													else if($businessDetails[0]['previous_investment_unit']==''){
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
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $businessDetails[0]['previous_investment_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
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
                       <div class="col-sm-12">
				<div class="row">					   
	     		                  <div class="col-sm-4 padd0">
                        <div class="form-group">
                        <label for="ask_price">Investment Required<span style="color: #ec0102;">*</span></label>
								<div class="input-group">
									<div class="input-group-addon currency" style="width: 58px;">
										<select class="form-control" id="ask_price_currency" name="investment_required_currency" onChange="resetPriceUnit('#ask_price_unit',this.value)" > 
<?php
											foreach( unserialize(PRICE_UNITS) as $priceUnitValue=>$priceUnitName ){
?>
												<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $businessDetails[0]['investment_required_currency']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
											}
?>
										</select>
										
									</div>
										<input type="text" class="form-control" pattern="[1-9]{1}[0-9]*" id="ask_price" name="investment_required" placeholder="Amount" value="<?php if($businessDetails[0]['reqd_investment']>0){echo $businessDetails[0]['reqd_investment'];};?>" onkeyup="resetPriceRange('#price_range_type',this.value)" style="width: 78px; height: 39px;" data-error="Asking Price required" required>
										<div class="input-group-addon currency" style="align: left; float: left; width: 115px; height: 39px; ">
											<select class="form-control" id="ask_price_unit" name="investment_required_unit" align="left" onchange="resetPriceRange('#price_range_type',this.value)"> 
<?php
													if($businessDetails[0]['investment_required_currency']=='INR'){
														foreach( unserialize(PRICE_UNITS_INR) as $priceUnitValue=>$priceUnitName ){			
														//echo $buyBusinessProfile[0]['investment_min'];
														
														//print_r($priceUnitName);
													?>
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $businessDetails[0]['investment_required_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
													}
												}
												else if($businessDetails[0]['investment_required_currency']==''){
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
                            <option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $businessDetails[0]['invest_range']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
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
                      </div>   
<div class="col-sm-12">	
<div class="row">					  
                   <div class="col-sm-4">
                    <div class="form-group">
                    <label for="">Role of New Investor</label>
                    <select id="invester_role" name="role" class="form-control"> 
                          <option <?php if('Active' == $businessDetails[0]['role_new_investo']){echo 'selected=selected';}?>>Active</option>
                          <option <?php if('Silent' == $businessDetails[0]['role_new_investo']){echo 'selected=selected';}?>>Silent</option>
                          <option <?php if('Debt' == $businessDetails[0]['role_new_investo']){echo 'selected=selected';}?>>Debt</option>
                          <option <?php if('Others' == $businessDetails[0]['role_new_investo']){echo 'selected=selected';}?>>Others</option>
                        </select>
						<input type="text" id="invester_role_other" name="role_new_invest_other" class="form-control invester_role_other" placeholder="other role of investor" value="<?php echo $businessDetails[0]['role_new_invest_other'];?>" style="display:none;"/>
						<div class="bstatusmsg" style="display:none;color:#EC0102;">Other role of investor Required</div>
                    </div>
                  </div>
                                    
                  <div class="col-sm-4">
                    <div class="form-group">
                    <label for="">Proposed Deal Structure</label>
                    <input type="text" id="purpose_deal" name="purpose_deal" class="form-control" value="<?php echo $businessDetails[0]['proposed_deal'];?>" placeholder="Proposed Deal Structure">
                    </div>
                  </div>
                  </div>
                  </div>
                
					<input type="hidden" name="frm_submit" value="sb_jv" />
					<input type="hidden" id="next_tab" name="next_tab" value="Uploads" />
                  
                
                </div>
			</div>
			</div>
			</div>
						
                                <div class="tab-pane1" id="Uploads">
                                    <div class="panel-body">
									 <h4>Uploads</h4>
                                        <div class="col-sm-12 padd0">
                                            <div class="form-c-box">
                                            
                                                <div class="areu">
                                                    <p>Upload Photos</p>
                                                    <div class="col-sm-12">
													<div class = "upload-image-messages"></div>
                                                        <div class="drag-area-photos" >
														 <!--<div class="col-sm-12">-->
                                                            <div class="add-btn-box1" >
															                                                                    <input type="hidden" id="frm_id" name="frm_id" value="<?php echo $formId;?>" />
																<input type="hidden" id="frm_submit" name="frm_submit" value="UA_FU" />
																<input type="file" class="add-btn" multiple = "multiple" accept = "image/*"  name="uploadfile[]" value="+ Photo" />Or Drop Image Here
                                                            <!--</div>-->
															</div>  
														
															<div class="col-md-12" style="top:50%;">
															
																		<?php
																foreach($medias as $media ){
																	
																if($media['document_type']=='image'){
																	?>
																	
																	<div class="col-md-2">
																		  <div class="image-outer-cover">
																			<div class="top-up" style="display:block;">
																				<div class="col-md-1">
																				<i class="fa fa-eye" data-toggle="modal" data-target="#myModal_<?php echo $media['id'];?>"></i>
																				</div>
																				<div class="col-md-2">
																				<div class="record" id="record-<?php echo $media['id'];?>">
				<a href="?delete=<?php echo $media['id'];?>" class="delete"><i class="fa fa-trash"></i></a>
				
			</div>
			</div>
																				
																				
																				
																				
																			</div>
																		  <img src="<?php echo base_url().$media['path'];?>" width="105" height="86">
																		  <div id="divid"></div>
																		  </div>
																		</div>
																			<!-- Modal -->
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
	<?php
																	}
																}
															?>
																
                                                       </div>
													   
														</div>
                                                    </div>
                                                </div>
												
                                                <div class="areu">
                                                    <p>Upload Videos</p>
                                                    <div class="col-sm-12">
                                                        <div class="drag-area">
                                                            <div class="add-btn-box">
                                                                <input type="file" class="add-btn" name="uploadvideo[]">Video(s)
                                                            </div>
																									<div class="col-md-12" style="top: 27%;">
															
																		<?php
																foreach($medias as $videomedia ){
																	
																if($videomedia['document_type']=='video'){
																	?>
																	
																	<div class="col-md-2">
																		  <div class="image-outer-cover">
																			<div class="top-up">
																			
																					<div class="record" id="record-<?php echo $media['id'];?>">
				<a href="?delete=<?php echo $videomedia['id'];?>" class="delete"><i class="fa fa-trash"></i></a>
				
			</div>
																				
																			</div>
																		 
																		
																	
 <video width="120" controls style="margin-top:-45px;">
  <source src="<?php echo base_url().$videomedia['path'];?>" type="video/mp4"></video>
  
																		  </div>
																		</div>
		
	
	<?php
																	}
																}
															?>
																
                                                       </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="areu">
                                                    <p>Upload the significant documents to give greater thrust to your business pitch.</p>
                                                    <div class="outer newbg-background">
                                                        <div class="col-sm-5">
                                                            1. Business Teaser/Executive summary
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <input type="file" class="upload-btn" name="uploadfinancialfile[]"  >
                                                        </div>
																								<div class="col-md-12" style="top:50%;">
															
																		<?php
																foreach($medias as $Teaser ){
																	
																if($Teaser['document_type']=='executive'){
																	?>
																	
																	 <div class="col-sm-2">
									     <div class=" mt-30">
										   <div class="selldoc doctype">
																				
																				<div class="record" id="record-<?php echo $Teaser['id'];?>">
				<a href="?delete=<?php echo $Teaser['id'];?>" class="delete" style="float: right;"><i class="fa fa-trash"></i></a>
				
			</div>
																				
																				
																				
																				
																			</div>
																		 
																		<a href="<?php echo base_url().$Teaser['path'];?>"><img src="<?php echo base_url()?>assets/images/download.png" style="width:32px;border:none;" target="_blank"></a> 
																		  </div>
																		</div>
																			
	<?php
																	}
																}
															?>
																
                                                       </div>
                                                    </div>
                                                    <div class="outer newbg-background">
                                                        <div class="col-sm-5">
                                                            2. Information Memorandum/Presentation
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <input type="file" class="upload-btn" name="uploadexesumfile[]"  >
                                                        </div>
																																	<div class="col-md-12" style="top:50%;">
															
																		<?php
																foreach($medias as $memorandum ){
																	
																if($memorandum['document_type']=='memorandum'){
																	?>
																	
																	 <div class="col-sm-2">
									     <div class=" mt-30">
										   <div class="selldoc doctype">
																				
																				<div class="record" id="record-<?php echo $memorandum['id'];?>">
				<a href="?delete=<?php echo $memorandum['id'];?>" class="delete" style="float: right;"><i class="fa fa-trash"></i></a>
				
			</div>
																				
																				
																				
																				
																			</div>
																		 <a href="<?php echo base_url().$memorandum['path'];?>"><img src="<?php echo base_url()?>assets/images/download.png" style="width:32px;border:none;" target="_blank"></a> 
																		
																		  </div>
																		</div>
																		
	<?php
																	}
																}
															?>
																
                                                       </div>
                                                    </div>
                                                    <div class="outer newbg-background">
                                                        <div class="col-sm-5">
                                                            3. Financials
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <input type="file" class="upload-btn" name="uploadmemofile[]"  >
                                                        </div>
																<div class="col-md-12" style="top:50%;">
															
																		<?php
																foreach($medias as $financials ){
																	
																if($financials['document_type']=='financials'){
																	?>
																	
																	 <div class="col-sm-2">
									     <div class=" mt-30">
										   <div class="selldoc doctype">
																				
																				<div class="record" id="record-<?php echo $financials['id'];?>">
				<a href="?delete=<?php echo $financials['id'];?>" class="delete" style="float: right;"><i class="fa fa-trash"></i></a>
				
			</div>
																				
																				
																				
																				
																			</div>
																		  <a href="<?php echo base_url().$financials['path'];?>"><img src="<?php echo base_url()?>assets/images/download.png" style="width:32px;border:none;" target="_blank"></a> 
																		
																		  </div>
																		</div>
																			

	<?php
																	}
																}
															?>
																
                                                       </div>
                                                    </div>
                                                    <div class="outer newbg-background">
                                                        <div class="col-sm-5">
                                                            4. Additional Documents
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <input type="file" class="upload-btn" name="uploadadditionfile[]"  >
                                                        </div>
																						<div class="col-md-12" style="top:50%;">
															
																		<?php
																foreach($medias as $additional ){
																	
																if($additional['document_type']=='additional'){
																	?>
																	
																	 <div class="col-sm-2">
									     <div class=" mt-30">
										   <div class="selldoc doctype">
																				
																				<div class="record" id="record-<?php echo $additional['id'];?>">
				<a href="?delete=<?php echo $additional['id'];?>" class="delete" style="float: right;"><i class="fa fa-trash"></i></a>
				
			</div>
																				
																				
																				
																				
																			</div>
																		 <a href="<?php echo base_url().$additional['path'];?>"><img src="<?php echo base_url()?>assets/images/download.png" style="width:32px;border:none;" target="_blank"></a>
																		 
																		  </div>
																		</div>
																		

	<?php
																	}
																}
															?>
																
                                                       </div>
                                                    </div>
                                                    <!--<div class="outer">
                                                        <button type="button" class="addmore">+ Add More</button>
                                                    </div>-->

                                                </div>

                                           
                                               
													<input type="hidden" id="assigned_to" name="assigned_to" value="<?php echo $assignedTo;?>" />
													<input type="hidden" id="customer_id" name="customer_id" value="<?php echo $customerId;?>" />

                                                    <input type="hidden" id="next_tab" name="next_tab" value="Packagedetails" />
                                                    <input type="hidden" class="formId" id="formId" name="formId" value="<?php echo $formId;?>" />
                                                  
                                             
                                            </div>
                                        </div>
                                    </div>
                                </div>


                               <div class="tab-pane1" id="Packagedetails">
               <div class="panel-body">
			   <h4>Package Details</h4>
                <div class="col-sm-12 padd0">
                 <div class="form-c-box areu">
                
                  <b>Package Name:</b> <?php foreach($user_package as  $package){
					  
					  if($package['package_id']==1){
						  echo 'Basic';
						  
					  }
					  if($package['package_id']==2){
						  echo 'Advance';
						  
					  }
					  if($package['package_id']==3){
						  echo 'Ultimate';
						  
					  }
					  
					  if($package['package_id']==4){
						  echo 'Elite';
						  
					  }
					  
				  }?>
                
                 </div>
                </div>
               </div>
              </div>


              <div class="tab-pane1" id="Additionalservices">
               <div class="panel-body">
			     <h4>Additional Services</h4>
                <div class="col-sm-12 padd0">
                 <div class="form-c-box">
                 
                   <div class="areu">
                    <p>Additional Services</p>
                    <div class="col-sm-4">
                     <div class="checkbox">
					 <input type="hidden" name="formId" id="formId" value="<?php echo $businessDetails[0]['form_id'];?>" />
                      <input type="checkbox" id="ads_featured_listing" name="ads_featured_listing" value="FL" <?php if(strcasecmp($additionalServices[0]['feature_listing'], 'YES')==0){ echo "checked";}?>   class="addiser">
                      <label for="ads_featured_listing" class="cus-t">
                       Featured listing
                      </label>
                     </div>
                    </div>
                    <div class="col-sm-4">
                     <div class="checkbox">
                      <input type="checkbox" id="ads_information_memorandum" name="ads_information_memorandum" value="IM" <?php if(strcasecmp($additionalServices[0]['memorandum'], 'YES')==0){ echo "checked";}?>   class="addiser">
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
                      <input type="checkbox" id="business_plan" name="business_plan" value="BP" <?php if(strcasecmp($additionalServices[0]['plan'], 'YES')==0){ echo "checked";}?>   class="addiser">
                      <label for="business_plan" class="cus-t">
                       Business Plan
                      </label>
                     </div>
                    </div>
                    <div class="col-sm-4">
                     <div class="checkbox">
                      <input type="checkbox" id="business_valuation" name="business_valuation" value="BV" <?php if(strcasecmp($additionalServices[0]['valuation'], 'YES')==0){ echo "checked";}?>   class="addiser">
                      <label for="business_valuation" class="cus-t">
                       Business Valuation
                      </label>
                     </div>
                    </div>
                    <div class="col-sm-4">
                     <div class="checkbox">
                      <input type="checkbox" id="business_mandate" name="business_mandate" value="BM" <?php if(strcasecmp($additionalServices[0]['mandate'], 'YES')==0){ echo "checked";}?>   class="addiser">
                      <label for="business_mandate" class="cus-t">
                       Business Mandate
                      </label>
                     </div>
                    </div>
                    <div class="col-sm-4">
                     <div class="checkbox">
                      <input type="checkbox" id="business_advisory" name="business_advisory" value="BA" <?php if(strcasecmp($additionalServices[0]['advisory'], 'YES')==0){ echo "checked";}?>   class="addiser">
                      <label for="business_advisory" class="cus-t">
                       Business Advisory
                      </label>
                     </div>
                    </div>
                    <div class="col-sm-4">
                     <div class="checkbox">
                      <input type="checkbox" id="per_sale_business_structuring" name="per_sale_business_structuring" value="PSBS" <?php if(strcasecmp($additionalServices[0]['pre_sales'], 'YES')==0){ echo "checked";}?>   class="addiser">
                      <label for="per_sale_business_structuring" class="cus-t">
                       Pre-Sale Business Structuring
                      </label>
                     </div>
                    </div>
                   </div>
                
				   <input type="hidden" name="frm_submit" value="sb_aservice" />
                    <!--<button type="submit" class="savebtn">Save</button>-->
					<input type="hidden" id="next_tab" name="next_tab" value="Payment" />
					<input type="hidden" id="customer_id" name="customer_id" value="<?php echo $customerId;?>" />
                    <input type="hidden" id="frm_id" name="frm_id" value="<?php echo $formId;?>" />
                   
                 </div>
                </div>
               </div>
              </div>


						                  <div class="tab-pane1" id="Payment">
                                    <div class="panel-body">
									<h4>Form Type </h4>
                                        <div class="col-sm-12 padd0">
                                            <div class="form-c-box">
                                              
                                                <div class="col-md-12 padd0">

                                                    <div class="areu">
                                                      
                                                        <div class="col-sm-3">
                                                            <div class="radio3">
                                                                <input type="radio" value="Featured" name="form_type"    class="radio1" <?php 
																if($businessDetails[0]['form_type']=='Featured'){
																
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
                                                                <input type="radio" value="Mandate" name="form_type"    class="radio1" <?php 
																if($businessDetails[0]['form_type']=='Mandate'){
																
																	echo "checked='checked'";
																}
																	?>>
                                                                
                                                                <label for="radio" class="cus-t">
                                                                    Mandate
                                                                </label>
                                                            </div>
                                                        </div>
                                                       
                                                    </div>

                                                </div>

                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
										                  <div class="tab-pane1" id="Payment">
                                    <div class="panel-body">
									<h4>Business Tags</h4>
                                        <div class="col-sm-12 padd0">
                                            <div class="form-c-box">
                                              
                                                <div class="col-md-12 padd0">

                                                    <div class="areu">
                                                      
                                                        <div class="col-sm-3">
                                               <select class="form-control"  name="property_tag"  > 
											   <option value="<?php echo $businessDetails[0]['property_tag_id'];?>"><?php echo $businessDetails[0]['tag_name'];?></option>
											   <?php 
											   
											   $x .= $businessDetails[0]['property_tag_id'];
											   
											   foreach($getPropertyTagList as $PropertyTagList){
												   
												//   print_r($PropertyTagList['tag_name']);
												   
												?>

												<?php	
												if(!preg_match("/".$PropertyTagList['tag_id']."/i" ,$x)) {  ?>   
												<option value="<?php echo $PropertyTagList['tag_id'];?>"><?php echo $PropertyTagList['tag_name'];?></option>
												<?php }  }?>
												</select>
												<p>&nbsp;</p>
                                              </div>
                                                       
                                                       
                                                    </div>

                                                </div>

                                               <input type="hidden" name="frm_submit" value="seller_admindetails" />
                                               
                                                    <button type="submit" class="savebtn updateshow" style="display:none;">Save</button>
                                               </form>
                                            </div>
                                        </div>
										 <div class="col-sm-12 padd0">
                                                
	<h4>Form Status: 		<?php 
  
			if($businessDetails[0]['status'] == 1 ){
				echo 'Approved';
			}
			if( $businessDetails[0]['status'] == 2 ){
				echo 'Rejected';
			}
			if( $businessDetails[0]['status'] == 3 ){
				echo 'Inactive';
			}
			if( $businessDetails[0]['status'] == 4 ){
				echo 'Closed';
			}
			if( $businessDetails[0]['status'] == 0 ){
				echo 'Pending';
			}
			
  ?></h4>										
                                                       
                                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
											 <div class="col-md-12" style="padding-bottom: 50px;">
						                 <div class="col-md-2">
                  <a href="<?php echo base_url();?>admin/expl_jv_case/jointventure/<?php echo $assignedTo;?>/<?php echo $formId;?>"><button type="button" class="savebtn">Case</button></a>&nbsp;&nbsp;
                 </div>
<?php
                 if( strcasecmp( $this->session->userdata('admin_type'), 'admin') == 0 ){
?>
		 <div class="col-md-2 ">
                
		
		<div class="dropdown" style="margin-top: 5px;">
  <button style="width:120px; padding:4px 10px;" class="btn btn-secondary dropdown-toggle acceptForm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span style="color:#fff;">Status</span>
	<span style="color:#fff;" class="caret"></span>
  </button>
  
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">  
  <li><a class="dropdown-item" href="#">Select</a></li>
  
  
   <li> <a  class="dropdown-item" href="<?php echo base_url();?>admin/expl_accept/jv/accept/<?php echo $formId;?>">Approve</a></li>
   <li><li> <a class="dropdown-item" href="<?php echo base_url();?>admin/expl_accept/jv/reject/<?php echo $formId;?>">Reject</a></li>
    <li><a class="dropdown-item" href="<?php echo base_url();?>admin/expl_accept/jv/inactive/<?php echo $formId;?>">Inactive</a></li>
	<li><a class="dropdown-item" href="<?php echo base_url();?>admin/expl_accept/jv/closed/<?php echo $formId;?>">Closed</a></li>
	</ul>
  
</div>
                 
                 </div>
<?php
                 }
?>
		<div class="col-md-2">
                 <button type="button" class="savebtn editSeller" >Edit</button>
		</div>
                    </div>
                    </div>
                </div>
				