<?php
 //var_dump($sellBusinessAdditionalDetails);
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
                    <!--<li><a href="list-your-business-user-profile">User Profile</a></li>-->
                    <li><a href="list-your-business-basic-information">Basic Information</a></li>
                    <li><a href="list-your-business-description">Business Description</a></li>
                    <li><a href="list-your-business-additional-details" class="active-page">Additional Details</a></li>
                    <li><a href="list-your-business-additional-details-uploads">Uploads</a></li>
                    <li><a href="list-your-business-package-details">Package Details</a></li>
                    <li><a href="list-your-business-additional-services">Additional Services</a></li>
                     <!--<li><a href="list-your-business-payment">Payment</a></li>-->
                   <li><a href="sell-business-preview-form">Preview</a></li>

                  </ul>
                </div>
              </div>
			  
              <div class="col-sm-9 r-bgc">
                <form name="lb_uprof" action="lb_userregister" method="post" data-toggle="validator" role="form" class="was-validated">
				
                <div class="form-c-box">
                 <?php $count = count($sellBusinessAdditionalDetails);
				 if($count==0){
					 $count_records = 1;
				 }else{
					 $count_records = $count;
				 }		
				 //echo $count_records. ' sssssssssssssssssss';
				 ?> 
				 <input type="hidden" class="count" id="count" name="count" value="<?php echo $count_records; ?>">
					
				<div class="add-property_2">
				<?php
					for($i=1; $i < $count_records+1; $i++){	
				?>
				<div><input type="hidden" id="property_id_<?php echo $i; ?>" name="property_id_<?php echo $i; ?>" value="<?php echo $sellBusinessAdditionalDetails[$i-1]['id']; ?>"></div>
				<div class="col-sm-12 padd0 add-property_<?php echo $i; ?>">
					<?php if($i==1){ ?>
                  <div class="areu" id="property_profile_<?php echo $i; ?>" name="property_profile_<?php echo $i; ?>">
						<div class="col-sm-12">
                        <div class="col-sm-4">
                      <div class="form-group">
                        <label for="property_type">Property Type<span style="color: #ec0102;">*</span></label>
					
                        <select class="form-control proTypeSelect" id="property_type_<?php echo $i; ?>" name="property_type" onchange="getId(this.id, this)"  data-error="Property Type required" required>
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
					                          <div class="col-sm-4 padd0 revaltype" style="display:none;">
                        <div class="form-group">
                       <!-- <label for="ask_price" id="askdefault">Asking Price<span style="color: #ec0102;">*</span></label>-->
					    <label for="ask_price" id="owned">Real Estate Value<span style="color: #ec0102;">*</span></label>
                        <label for="ask_price" id="leased" style="display:none;">Rental<span style="color: #ec0102;">*</span></label>
                       
						<?php //echo $sellBusinessAdditionalDetails[0]['ask_price_currency_real'];?>
								<div class="input-group">
									<div class="input-group-addon currency" style="width: 58px;">
										<select class="form-control" id="ask_price_currency" name="ask_price_currency_real_<?php echo $i; ?>" onChange="resetPriceUnit('#ask_price_unit',this.value)" required > 
<?php
											foreach( unserialize(PRICE_UNITS) as $priceUnitValue=>$priceUnitName ){
?>
												<option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessAdditionalDetails[0]['ask_price_currency_real']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
											}
?>
										</select>
										
									</div>
										<input type="text" class="form-control" pattern="[1-9]{0}[0-9]*" id="ask_price" name="ask_price_real_<?php echo $i; ?>" placeholder="Amount" value="<?php echo $sellBusinessAdditionalDetails[0]['ask_price_real'];?>" onkeyup="resetPriceRange('#price_range_type',this.value)" style="width: 78px; height: 33px;" data-error="Asking Price required" required>
										<div class="input-group-addon currency" style="align: left; float: left; width: 115px; height: 33px; ">
											<select class="form-control" id="ask_price_unit" name="ask_price_unit_real_<?php echo $i; ?>" align="left" onchange="resetPriceRange('#price_range_type',this.value)" required> 
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
                  
                  <div class="areu box" id="commercial_area_<?php echo $i; ?>">
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
                    <?php 
					//echo $i;
					//echo $sellBusinessAdditionalDetails[$i-1]['built_up_area'];
					//if($sellBusinessAdditionalDetails[$i-1]['built_up_area']!='0' and $sellBusinessAdditionalDetails[$i-1]['open_area']!='0'){?>  
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
                          
			  <input type="text" data-error="Only numeric value allowed" pattern="[1-9]{1}[0-9]*" class="form-control" placeholder="" id="carpet_area_<?php echo $i; ?>" name="carpet_area_<?php echo $i; ?>" value="<?php echo $sellBusinessAdditionalDetails[$i-1]['carpet_area'];?>">
			 
			  <div class="input-group-addon currency">
                          <select class="form-control" id="carpet_area_type_<?php echo $i; ?>" name="carpet_area_type_<?php echo $i; ?>"> 
<?php
                           foreach( unserialize(AREA_UNITS_LAND) as $areaUnitValue => $areaUnitName ){
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
						<input class="" type="hidden" id="finance_id_<?php echo $ii; ?>" name="finance_id_<?php echo $ii; ?>" value="<?php echo $sellBusinessAdditionalFinancialDetails[$ii-1]['id']; ?>">
					
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
                  <div class="col-sm-4"></div>
                  <div class="col-sm-3"></div>
                  <div class="col-sm-5" style="padding-right:0">
                    <input type="hidden" name="frm_submit" value="sb_ad" />
                    <button type="submit" class="savebtn">Save &amp; Continue</button>
					  </form>
                  <a href="<?php echo base_url();?>list-your-business-description" class="backbtn">Back</a>
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
