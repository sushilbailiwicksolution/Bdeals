<?php
//var_dump($sellBusinessBasicInformation);
//print_r($_SESSION);
?>
  <div id="gtco-features">
		<div class="container">
			<div class="row">
				<div class="col-md-12 gtco-heading ">
					<div class="p-15">
					<h2>Real Estate - PROPERTY INFORMATION</h2>
					<div class="row">
							<div class="col-sm-3">
								<div class="feat-c-box">
									<ul>
										<li><a href="real-estate-basic-information" class="active-page">Property Information</a></li>
										<li><a href="real-estate-tenancy-description" >Tenancy Description</a></li>
										<li><a href="real-estate-tenancy-details">Tenancy Details</a></li>
										<li><a href="re-business-preview">Preview</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-9 r-bgc">
							<form name="lb_uprof" action="realestate_userregister" method="post" data-toggle="validator" role="form" class="was-validated">
								<div class="form-c-box">
									<div class="areu">	
										<div class="col-sm-12">
											<div class="form-group">
												<label for="keyHeadline">Key Headline<span style="color: #ec0102;">*</span></label>
												<input type="hidden" name="frm_id" id="frm_id" value="<?php echo $sellBusinessBasicInformation[0]['form_id'];?>" />
												<input type="text" id="keyHeadline" name="keyHeadline" class="form-control" placeholder="Business heading as it would be displayed in 10 words" value="<?php echo $sellBusinessBasicInformation[0]['key_headline'];?>" data-error="Key Headline required" required>
												<div class="help-block with-errors"></div>
											</div>
										</div>
                  
										<div class="col-sm-12">
											<div class="form-group">
												<label for="bus_desc">Description of your business<span style="color: #ec0102;">*</span></label>
												<textarea id="bus_desc" name="bus_desc" class="form-control word_count" rows="3" data-error="Description required" required maxlength="1000" placeholder="Business overview, mention key highlights of the business, working, etc.(Max 200 words)"><?php echo $sellBusinessBasicInformation[0]['description'];?></textarea>
												Total word count: <span id="display_count">0</span> words. Words left: <span id="word_left">200</span>
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
if($sellBusinessBasicInformation[0]['location_region']==''){
                          foreach( $this->cachemethods->getStateByCountry($sellBusinessBasicInformation[0]['location_country']) as $statedet ){
?>
                          <option value="<?php echo $statedet->id;?>" <?php if($statedet->id == $sellBusinessBasicInformation[0]['location_state']){
							  
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
			<input type="text" name="other_state" class="form-control other_state" placeholder="Other State" value="<?php echo $sellBusinessBasicInformation[0]['other_state'];?>" style="display:none;"/>
                        <div class="help-block with-errors"></div>
                       </div>
                      </div>
                      <div class="col-sm-3 citystateid">
                       <div class="form-group">
                        <label for="city">City<span style="color: #ec0102;">*</span></label>
						
					 <select class="form-control" id="city" name="city">
                         <option value="">Select</option>
						
<?php if($sellBusinessBasicInformation[0]['location_city']!="Other"){
                         foreach( $this->cachemethods->getCityByStateId($sellBusinessBasicInformation[0]['location_state']) as $citydet ){
							
							 
?>
                         <option value="<?php echo $citydet->id;?>" <?php if($citydet->id == $sellBusinessBasicInformation[0]['location_city']){echo 'selected=selected';}?>><?php echo $citydet->city_name; ?></option>
<?php
                         }
}
						 else{?>
							 
							<option value="Other" <?php echo 'selected=selected';?>>Other</option> 
<?php						 }
						
?>						
                        </select>
					<div class="citymsg" style="display:none;color:#A94469;">City required</div>	
                       <input type="text" id="other_city"  name="other_city" class="form-control" placeholder="Other City" value="<?php echo $sellBusinessBasicInformation[0]['other_city'];?>"  data-error="City required" style="display:none;"/>
					   <div id="other_citymsg" style="display:none;color:#A94469;">Other city required</div>	
                        <div class="help-block with-errors"></div>
                       </div>
                      </div>
					   <div class="col-sm-3 statecityid" style="display:none;">
                       <div class="form-group">
                        <label for="city">Other City<span style="color: #ec0102;">*</span></label>
					 
                       <input type="text" id="other_city_2"  name="other_city_2" class="form-control" placeholder="Other City" value="<?php echo $sellBusinessBasicInformation[0]['other_city'];?>"  data-error="City required"/>
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
									<input type="hidden" name="frm_submit" value="sb_bi" />
										<button type="submit" class="savebtn btnsubmit">Save &amp; Continue</button>
										<button type="submit" class="savebtn">Back</button>
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
 
 