<?php
//print_r($_SESSION);
?>
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
                   <!-- <li><a href="list-your-business-user-profile-jv">User Profile</a></li>-->
                    <li><a href="list-your-business-basic-information-jv" class="active-page">Basic Information</a></li>
                    <li><a href="list-your-business-description-jv">Business Description</a></li>
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
                    <div class="form-group">
                    <label for="keyHeadline">Key Headline<span style="color: #ec0102;">*</span></label>
					<input type="hidden" name="frm_id" id="frm_id" value="<?php echo $sellBusinessBasicInformation[0]['form_id'];?>" />
		    <input type="text" id="keyHeadline" name="keyHeadline" class="form-control" placeholder="Business heading as it would be displayed in 10 words" value="<?php echo $sellBusinessBasicInformation[0]['key_headline'];?>" data-error="Key Headline required" required maxlength="100">
			<div class="help-block with-errors"></div>
                    </div>
                  </div>
                  
                  <div class="col-sm-12">
                    <div class="form-group">
                    <label for="bus_desc">Description of your business<span style="color: #ec0102;">*</span></label>
		    <textarea id="bus_desc" name="bus_desc" class="form-control word_count" rows="3" data-error="Description required" placeholder="Business overview, mention key highlights of the business, working, etc.(Max 200 words)" maxlength="1000" required><?php echo $sellBusinessBasicInformation[0]['description'];?></textarea>
			Total word count: <span id="display_count">0</span> words. Words left: <span id="word_left">200</span>
			<div class="help-block with-errors"></div>
                    </div>
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
						
					 <select class="form-control" id="city" name="city" >
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
                          <option value="<?php echo $Sector->id;?>" <?php if($Sector->id == $sellBusinessBasicInformation[0]['listing_category']){echo 'selected=selected';}?>><?php echo $Sector->sector_name; ?></option>
<?php
                          }
?>						<option value="Other" <?php if($sellBusinessBasicInformation[0]['listing_category']=='Other'){
							
							echo 'selected=selected';
							
						}?>>Other</option>
                        </select>
						<input type="text" name="listing_category_other" class="form-control listing_category_other" placeholder="Other Category" value="<?php echo $sellBusinessBasicInformation[0]['listing_category_other'];?>" style="display:none;"/>
						<div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-sm-3 subcatid">
                      <div class="form-group">
                        <label for="subcategory">Sub Category</label>
                        <Select class="form-control" id="subcategory" name="subcategory">
                          <option value="">Select</option>
<?php
			foreach( $this->cachemethods->getSubCatBycategory($sellBusinessBasicInformation[0]['listing_category']) as $subcat ){
				
				if($sellBusinessBasicInformation[0]['listing_sub_category']!="Other"){
?>
                          <option value="<?php echo $subcat->sub_id;?>" <?php if($subcat->sub_id == $sellBusinessBasicInformation[0]['listing_sub_category']){
							  
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
						<input type="text"  name="listing_sub_category_other" class="form-control sub_category_other" placeholder="Other Sub Category" value="<?php echo $sellBusinessBasicInformation[0]['listing_sub_category_other'];?>"  data-error="sub category required" style="display:none;"/>
						<div class="help-block with-errors"></div>
                        </div>
                      </div>
					   <div class="col-sm-3 othersubcatid" style="display:none;">
                       <div class="form-group">
                        <label for="city">Other Sub Category<span style="color: #ec0102;">*</span></label>
					 
                       <input type="text" id="listing_sub_category_other_2"  name="listing_sub_category_other_2" class="form-control" placeholder="Other Sub Category" value="<?php echo $sellBusinessBasicInformation[0]['listing_sub_category_other'];?>"  data-error="sub category required"/>
                        <div class="help-block with-errors"></div>
                       </div>
                      </div>
                      <div class="col-sm-3">
                      <div class="form-group">
                        <label for="legal">Legal Entity</label>
                        <Select class="form-control" id="legal" name="legal" >
                          <option value="">Select</option>
<?php
			 foreach( unserialize(LEGAL_ENTITIES_JV) as $legalValue => $legalName ){
?>
                          <option value="<?php echo $legalValue;?>" <?php if($legalValue == $sellBusinessBasicInformation[0]['legal_entity']){echo 'selected=selected';}?>><?php echo $legalName;?></option>
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
                        <Select class="form-control" id="eyear" name="eyear" >
                          <option value="">Select</option>
<?php
			  for( $i = (date('Y') - DIFF_FROM_CURRENT_YEAR); $i <= date('Y'); $i++ ){
?>
                          <option value="<?php echo $i;?>" <?php if($i == $sellBusinessBasicInformation[0]['yoe']){echo 'selected=selected';}?>><?php echo $i;?></option>
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
                          <option value="<?php echo $currentStatusValue;?>" <?php if($currentStatusValue == $sellBusinessBasicInformation[0]['current_status_of_business']){echo 'selected=selected';}?>><?php echo $currentStatusName;?></option>
<?php
			 }
?>
                        </select>
						<div class="help-block with-errors"></div>
						<input type="text" id="bstatus_other" name="bstatus_other" class="form-control bstatus_other" placeholder="other status" value="<?php echo $sellBusinessBasicInformation[0]['bstatus_other'];?>" style="display:none;"/>
						<div class="bstatusmsg" style="display:none;color:#EC0102;">Other Current Status of Business Required</div>
						
                        </div>
                      </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4"></div>
                  <div class="col-sm-3">
                    
                  </div>
                  <div class="col-sm-5" style="padding-right:0">
                    <input type="hidden" name="frm_submit" value="sb_bi" />
                    <button type="submit" class="savebtn cstatusbus btnsubmit">Save &amp; Continue</button>
                   
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
