<?php
//var_dump($businessDetails);
 
 $user_id=$this->uri->segment('3');
?>
<div class="main-content">
                <h1 class="page-title">Realestate</h1>
                 <div class="col-md-8"></div>
        
                <div class="row ">
                    <div class="col-md-12">
                        <div class="tabs-container">
						<form id="" name="realestate" method="POST" action="<?php echo base_url();?>admin/realestate/UpdateRealestate" >
                            <input type="hidden" id="base_url" name="base_url" value="<?php echo base_url();?>" />
                          <input type="hidden" name="frm_id" id="frm_id" value="<?php echo $businessDetails[0]['form_id'];?>" />
                            <ul class="nav nav-tabs">
                               <h4>User Profile</h4>

                            </ul>
                            <div class="tab-content">
      
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
                                                        <label for="">Description of your property</label>
							<textarea name="bus_desc" id="bus_desc" class="form-control" rows="3" maxlength="200" ><?php echo $businessDetails[0]['description'];?></textarea>
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
										 
										 
						<div class="col-sm-12">				 
                      <div class="col-sm-3">
                      <div class="form-group">
                        <label for="property_type">Property Type<span style="color: #ec0102;">*</span></label>
                        <Select class="form-control" id="property_type" name="property_type" required data-error="Property Type required">
                          <option value="">Select</option>
<?php
			  $selectedCategory = null;
                          foreach( unserialize(PROPERTY_TYPE) as $catValue => $catName ){
                           if( isset( $businessDetails[0]['property_type_old'] ) && $businessDetails[0]['property_type_old'] != null ){
                            $selectedCategory = $businessDetails[0]['property_type_old'];
			   }else if( $i == 0 ){
                            $selectedCategory = $catValue;
                           }
?>
			   <option value="<?php echo $catValue;?>" <?php if($catValue == $businessDetails[0]['property_type_old']){echo 'selected=selected';}?>><?php echo $catName;?></option>
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
							<input type="text" id="saleable_area" name="saleable_area" class="form-control" placeholder="500 sqft" value="<?php echo $businessDetails[0]['saleable_area'];?>" data-error="Saleable Area required" required>
							<div class="help-block with-errors"></div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="age_construction">Age of Construction</label>
							<input type="text" id="age_construction" name="age_construction" class="form-control" placeholder="20 years" value="<?php echo $businessDetails[0]['age_construction'];?>" data-error="Age Construction required" required>
							<div class="help-block with-errors"></div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
						<label for="authority_approval">Authority Approvals</label>
						<!--<input type="text" id="authority_approval" name="authority_approval" class="form-control" placeholder="Yes-No" value="<?php echo $businessDetails[0]['authority_approval'];?>" data-error="Authority Approvals required" required>-->
						<select class="form-control" id="authority_approval" name="authority_approval" data-error="Authority Approvals required" required>
							<option value="">Select</option>
							<option value="Yes" <?php if($businessDetails[0]['authority_approval'] == "Yes"){echo 'selected=selected';}?>>YES</option>
							<option value="No" <?php if($businessDetails[0]['authority_approval'] == "No"){echo 'selected=selected';}?>>NO</option>		
						
						</select>
						<div class="help-block with-errors"></div>
						</div>
					</div>
				</div>
										
				</div>
				
										<div class="areu">
									<div class="col-sm-12">
									<div class="col-sm-8">
										<div class="form-group">
										<label for="">Tenancy Details</label>
										
										<textarea id="tenancy_details" name="tenancy_details" class="form-control" rows="3"  data-error="Tenancy Details required" required><?php echo $businessDetails[0]['tenancy_details'];?></textarea>
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
										<input type="text" id="lease_period" name="lease_period" class="form-control" placeholder="" value="<?php echo $businessDetails[0]['lease_period'];?>"  data-error="Lease Period required" required>
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
										<input type="date" id="lease_start" name="lease_start" class="form-control" placeholder="" value="<?php echo $businessDetails[0]['lease_start'];?>"  data-error="Lease Started required" required>
										<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
										<label for="">Lease Ending</label>
										<input type="date" id="lease_end" name="lease_end" class="form-control" placeholder="" value="<?php echo $businessDetails[0]['lease_end'];?>"  data-error="Lease End required" required>
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
													<input type="text" id="lock_period" name="lock_period" class="form-control" placeholder="Years" value="<?php echo $businessDetails[0]['lock_period'];?>"  data-error="Lock in Period required" required>
													<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="form-group">
												<div class="form-group">
													<label for="">Security Received</label>
													<input type="text" id="security_received" name="security_received" class="form-control" placeholder="Rs." value="<?php echo $businessDetails[0]['security_received'];?>"  data-error="Security Received required" required>
													<div class="help-block with-errors"></div>
												</div>
												</div>
											</div>
											
											
											<div class="col-sm-3">
												<div class="form-group">
												<div class="form-group">
													<label for="">Monthly Rental </label>
													<input type="text" id="monthly_rental" name="monthly_rental" class="form-control" placeholder="Rs." value="<?php echo $businessDetails[0]['monthly_rental'];?>"  data-error="Monthly Rental required" required>
													<div class="help-block with-errors"></div>
												</div>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="form-group">
												<div class="form-group">
													<label for="">Annual Rent</label>
													<input type="text" id="annual_rental" name="annual_rental" class="form-control" placeholder="Rs." value="<?php echo $businessDetails[0]['monthly_rental'];?>"  data-error="Annual Rental required" required>
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
													<input type="text" id="annual_maintenance" name="annual_maintenance" class="form-control" placeholder="Rs." value="<?php echo $businessDetails[0]['annual_maintenance'];?>"  data-error="Annual Maintenance required" required>
													<div class="help-block with-errors"></div>
												</div>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="form-group">
												<div class="form-group">
													<label for="">Escalation After</label>
													<input type="date" id="escalation_after" name="escalation_after" class="form-control" placeholder="" value="<?php echo $businessDetails[0]['escalation_after'];?>"  data-error="Escalation After required" required>
													<div class="help-block with-errors"></div>
												</div>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="form-group">
												<div class="form-group">
													<label for="">Escalation %</label>
													<input type="text" id="escalation_percent" name="escalation_percent" class="form-control" placeholder="0%" value="<?php echo $businessDetails[0]['escalation_percent'];?>"  data-error="Escalation % required" required>
													
													<div class="help-block with-errors"></div>
												</div>
												</div>
											</div>
											</div>
										
									</div>
									
													<div class="areu">
									<div class="col-sm-12">
									<div class="col-sm-8">
										<div class="form-group">
										<label for="">Features/Facilities</label>
										
										<textarea id="features" name="features" class="form-control" placeholder="Security, Vallet Parking etc" rows="3"  data-error="Features required" required><?php echo $businessDetails[0]['features'];?></textarea>
										<div class="help-block with-errors"></div>
									    </div>
									</div>
									</div>
									
									<div class="col-sm-12">
									<div class="col-sm-8">
										<div class="form-group">
										<label for="">Location Advantage</label>
										
										<textarea id="location_advantages" name="location_advantages" class="form-control" placeholder="Near Metro, Airport etc" rows="3"  data-error="Location Advantages required" required><?php echo $businessDetails[0]['location_advantages'];?></textarea>
										<div class="help-block with-errors"></div>
									    </div>
									</div>
									</div>
									
									<div class="col-sm-12">
									<div class="col-sm-8">
										<div class="form-group">
										<label for="">Reason for Sale</label>
										
										<textarea id="reason_sale" name="reason_sale" class="form-control" placeholder="" rows="3"  data-error="Reason for Sale required" required><?php echo $businessDetails[0]['reason_sale'];?></textarea>
										<div class="help-block with-errors"></div>
									    </div>
									</div>
									</div>
									
									<div class="col-sm-12">
										  <div class="col-sm-3">
												<div class="form-group">
													<label for="">Expected ROI % at present</label>
													<input type="text" id="roi_present" name="roi_present" class="form-control" placeholder="%" value="<?php echo $businessDetails[0]['roi_present'];?>"  data-error="ROI Present required" required>
													<div class="help-block with-errors"></div>
												</div>
											</div>
									</div>		
									
									
									<div class="col-sm-12">
										  <div class="col-sm-3">
												<div class="form-group">
													<label for="">Expected ROI % after escalation</label>
													<input type="text" id="roi_escalation" name="roi_escalation" class="form-control" placeholder="%" value="<?php echo $businessDetails[0]['roi_escalation'];?>"  data-error="ROI Escalation required" required>
													<div class="help-block with-errors"></div>
												</div>
											</div>
									</div>
									
									
									<div class="col-sm-12">
										  <div class="col-sm-3">
												<div class="form-group">
													<label for="">Other Income (If Any):</label>
													<input type="text" id="other_income" name="other_income" class="form-control" placeholder="" value="<?php echo $businessDetails[0]['other_income'];?>"  data-error="Other Income required" required>
													<div class="help-block with-errors"></div>
												</div>
											</div>
									</div>
									
						<div class="col-sm-12">			
						<div class="col-sm-4" style="padding-right: 0px;">
                        <div class="form-group">
                        <label for="latest_revenu">Asking Price<span style="color: #ec0102;">*</span></label>
						<div class="input-group">
									<div class="input-group-addon currency" style="width: 58px;">
										<select  class="form-control" id="price_currency" name="price_currency" onChange="resetPriceUnit('#price_unit',this.value)" > 
<?php
											foreach( unserialize(PRICE_UNITS) as $priceUnitValue=>$priceUnitName ){
?>
												<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $businessDetails[0]['price_currency']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
											}
?>
										</select>
									</div>
										<input type="text" class="form-control" pattern="[1-9]{1}[0-9]*" id="price_value" name="price_value" placeholder="Amount" value="<?php echo $businessDetails[0]['price_value'];?>"  style="width: 78px; height: 39px;" data-error="Asking Price required" required>
										<div class="input-group-addon currency" style="align: left; float: left; width: 120px; height: 39px; ">
											<select class="form-control" id="price_unit" name="price_unit" align="left"> 
<?php
													if($businessDetails[0]['price_unit']=='INR'){
													foreach( unserialize(PRICE_UNITS_INR) as $priceUnitValue=>$priceUnitName ){
														//echo $buyBusinessProfile[0]['investment_min'];
													?>
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $businessDetails[0]['price_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
													}}else{
														foreach( unserialize(PRICE_UNITS_USD) as $priceUnitValue=>$priceUnitName ){
														//echo $buyBusinessProfile[0]['investment_min'];
													?>
														<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $businessDetails[0]['price_unit']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
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
                                               
                                                    <button type="submit" class="savebtn updateshow" style="display:none;">Save</button>
                                               </form>
                                    </div>
									
                                </div>

		 
                            </div>
                        </div>
						                    </div>
						 <div class="col-md-12" style="padding-bottom: 50px;">
						                 <div class="col-md-2">
                  <a href="<?php echo base_url();?>admin/expl_realestate_case/realestate/<?php echo $assignedTo;?>/<?php echo $formId;?>"><button type="button" class="savebtn">Case</button></a>&nbsp;&nbsp;
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
  
  
   <li> <a  class="dropdown-item" href="<?php echo base_url();?>admin/expl_accept/realestate/accept/<?php echo $formId;?>">Approve</a></li>
   <li><li> <a class="dropdown-item" href="<?php echo base_url();?>admin/expl_accept/realestate/reject/<?php echo $formId;?>">Reject</a></li>
    <li><a class="dropdown-item" href="<?php echo base_url();?>admin/expl_accept/realestate/inactive/<?php echo $formId;?>">Inactive</a></li>
	<li><a class="dropdown-item" href="<?php echo base_url();?>admin/expl_accept/realestate/closed/<?php echo $formId;?>">Closed</a></li>
	</ul>
  
</div>
                 
                 </div>
<?php
                 }
?>
		<div class="col-md-2">
                   <button type="button" class="savebtn editSeller">Edit</button>
		</div>
                    </div>
                    </div>
                </div>
				
				
		
