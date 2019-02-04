<?php 
/* 
$success ='yes'; 
$popup='success';
$popup='no';
*/
?>	
<script>
$(window).load(function(){
	
	var base_url = $('#baseurl').val();
	var country = $('#country').val();
	
	
	//var base_url='http://localhost/bdeals/';
	 
	callAjax( base_url+"/ajxsfc", {'contid':country}, "JSON", resetStates5, noActionWithErrorState );
	 
	function resetStates5( statesDetail ){
//alert('hii');
	//$('#state11').empty();
	
	//$('#state11').append('<option value="">Select</option>');
	
	$.each( statesDetail, function(i, data){
		$('#state11').append("<option value="+data.id+">"+data.state_name+"</option>");
		//$('#state').append('<li class="selected" style="false"><label class=""><input type="checkbox" data-name="selectItemstate"value='+data.id+'><span>'+data.state_name+'</span></label></li>');
	}); 
 $('#state11').multipleSelect();
// alert('hii');
	//$('#city').empty();
	//$('#city').append("<option value=''>Select</option>");
}
 });
</script>
  <div id="gtco-features">
		<div class="container">
			<div class="row">
			 <div class="col-md-12 gtco-heading buynoform" style="margin-bottom: 0px;display:none;">
          <div class="p-15">
	  <div class="col-md-3 padd0">
			</div>
			<div class="col-md-9 padd0">
			<h1 class="page-title popup-style" style="color:#fff;background:#32567C;">Your Requirement Is Submitted Successfully.</h1>
			</div>
			</div>
			</div>
				<div class="col-md-12 gtco-heading">
					<div class="p-15">
					<h2>Buyer</h2>
					<div class="row">
							<div class="col-sm-3">
								<div class="feat-c-box">
									<ul>
										<!--<li><a href="buy-a-business" >Personal Detail</a></li>-->
										<li><a href="<?php echo base_url();?>buy-a-business-profile/no/no" class="active-page">Business Profile</a></li>
										<!--<li><a href="<?php echo base_url();?>buy-a-business-post-requirement">Post your Requirement</a></li> -->
									</ul>
								</div>
							</div>
							<div class="col-sm-9 r-bgc">
							<form  name="lb_uprof" action="<?php echo base_url();?>buy-userregister" method="post" data-toggle="validator" role="form" class="was-validated">
								<div class="form-c-box">
								<div class="areu">
								<div class="col-sm-12">
									<div class="col-sm-4">
										<div class="form-group">
										<label for="">I want to Buy/Invest in<span style="color: #ec0102;">*</span></label>
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
									
										<label><p>Location<span style="color: #ec0102;">*</span></p></label>
										<div class="col-sm-12">
										  <div class="col-sm-3">
											<div class="form-group">
												<label for="">Country<span style="color: #ec0102;">*</span></label>
												<input type="hidden" id="baseurl" value="<?php echo base_url();?>">
												<select id="country" name="country" onChange="getChangeStates11('<?php echo base_url();?>', this.value)" class="form-control" required data-error="Country required">
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
											
											<!--<div class="col-sm-3">
											<div class="form-group">
												<label for="">Region</label>
												 <Select class="form-control" id="region" name="region">
													<option value="">Select</option>
													<option>Region</option>
													<option>Region</option>
													<option>Region</option>
												</select>
												<div class="help-block with-errors"></div>
												</div>
											</div>-->
											<div class="col-sm-3">
											<div class="form-group">
												<label for="">State<span style="color: #ec0102;">*</span></label>
												<?php 
		//$abc=$buyBusinessProfile[0]['buy_listing_category'];
		//$bc = "Agriculture,Software";
		$pieces = explode(",", $buyBusinessProfile[0]['state']);
	?>
						<select  id="state11" name="state1[]" onChange="getChangeCities('<?php echo base_url();?>', this.value)"  multiple="multiple">
                                                
<?php

                          foreach( $this->cachemethods->getStateByCountry($businessDetails[0]['location_country']) as $statedet ){
?>
          <option value="<?php echo $statedet->id;?>" <?php
						  for($i=0; $i < count($pieces); $i++){
						  if($statedet->id == $pieces[$i]){echo 'selected=selected'; break;}} ?>><?php echo $statedet->state_name; ?></option>
<?php
                         }

?>							

												</select>
								<div class="help-block with-errors"></div>
								<div class="buyStatemsg" style="display:none;color:#A94469;">State required</div>	
												</div>
											</div>
											<div class="col-sm-3 ">
											<div class="form-group">
												<label for="">City</label>
												<input type="text" id="city" name="city" class="form-control" value="<?php echo $buyBusinessProfile[0]['city'];?>" placeholder="City">
												
												</div>
											</div>
										</div>
									</div>
						
						
						<div class="areu custom-arnu-2">
								
									<div class="col-sm-6 padd0">
										<div class="form-group">
										<label for="">Industry Preference<span style="color: #ec0102;">*</span></label>
										
										<?php 
		
		$pieces = explode(",", $buyBusinessProfile[0]['industry_preference']);
	?>
	<select  id="industry_preference" name="industry_preference[]" multiple="multiple" required  data-error="Industry required"  > 
	
	
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
				<div class="buystatusmsg" style="display:none;color:#A94469;">Industry required</div>						
									  </div>
									  </div>
									  <div class="col-sm-6"></div>
									
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
												<input type="text" pattern="[1-9]{1}[0-9]*"  placeholder="" id="funding_own" name="funding_own" value="<?php echo $buyBusinessProfile[0]['funding_own'];?>" class="par_numbers form-control" onkeyup="sumFund();" data-error="own value required" required>
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
												<label for="">Debt<span style="color: #ec0102;">*</span></label>
												<input type="text" pattern="[1-9]{1}[0-9]*" class="con_numbers form-control" placeholder="" id="funding_debt" name="funding_debt" value="<?php echo $buyBusinessProfile[0]['funding_debt'];?>" onkeyup="sumFund();" data-error="debt value required" required>
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
										<input type="hidden" name="frm_submit" value="bb_bp" />
										<button type="submit" class="savebtn buyerBP indsubmit">Save &amp; Continue</button>
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
  
  <!--end section-->

<?php if($success =='yes' && $popup=='success'){
?>	
	<div class="modal fade" id="myModal_22" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content ">
                    <div class="modal-header back-blue border-none">
                        <h4 class="close-btn ">
        <img class="pull-right buyclose" data-dismiss="modal"  aria-label="Close" src="<?php echo asset_url();?>/img/close.png">
        </h4>
                    </div>
					<div class="modal-body back-blue" style="padding-bottom: 10px;">
                        <div class="back-blue">
                            <div class="form-group col-md-12 wish-yes">

							<div class="col-md-12 col-md-offset-1">
											<h4 class="white">Your Requirement Is Submitted Successfully. </h4></div>
							
							
							
							</div>
						</div>
					</div>	
					
				</div>
			</div>
	</div>		
<?php 
//echo"<meta http-equiv='refresh' content='5; url=".base_url().'user_business_profile'."' />";
	
}else if($success =='yes' && $popup=='no'){
?>	
  <!-- Modal -->
        <div class="modal fade" id="myModal_2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content popup-look">
                    
                        
					
                    <div class="modal-body back-blue" style="padding-bottom: 10px;">
                        <div class="back-blue">
                            <div class=" col-md-12 wish-yes  " style="padding-bottom: 10px;">
                                
								<?php if($popup=='no'){ ?>
								<div class="col-md-8 col-xs-8 wish-leftbox">
                                    <h4 class="white">Do you wish to make your Investor Requirement Live on our website? </h4></div>
                                <div class="col-md-4 wish-yes-right" >
								<h4 class="close-btn ">
        <img class="pull-right nobuy" data-dismiss="modal"  aria-label="Close" src="<?php echo asset_url();?>/img/close.png">
        </h4>
                    
                                    <input type="button" id="wish" class="btn bus-yes" value="Yes">
                                    <input type="button" id="wishno" class="btn bus-no nobuy" data-dismiss="modal" value="No">
                                </div>
								</div>
								<?php }else{
									
									if($popup == 'success'){
										  ?>
											<div class="modal-body back-blue" style="padding-bottom: 10px;">
                        <div class="back-blue">
                            <div class="form-group col-md-12 wish-yes">

							<div class="col-md-12 col-md-offset-1">
											<h4 class="white">Your Requirement Is Submitted Successfully2. </h4></div>
							
							
							
							</div>
						</div>
					</div>	
								<?php 
								
							//	echo"<meta http-equiv='refresh' content='5; url=".base_url().'user_business_profile'."' />";
		
								
								}else{ ?>	
											<div class="col-md-12 col-md-offset-1">
											<h4 class="white">There is some error please try again. </h4></div>
								<?php }} ?>			
                            </div>

							<div class="next-box-2 " id="make-appointment" style="display:none;     margin-bottom: 20px;     padding: 0px 0px; ">
                                <div class="col-md-12  wish-yes mb0" style="padding:0px;">
								
								
							<div class="col-sm-12 ">
								<form name="lb_uprof" action="<?php echo base_url();?>buy-userregister" method="post" data-toggle="validator" role="form" class="was-validated">
								<div class="form-c-box">
								<div class="areu">
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
									
									<div class="col-sm-6 p-le0">
										<div class="form-group">
										<label for="">Listing Category (Multiple Select) <span style="color: #ec0102;">*</span></label>
										<?php 
										//$abc=$buyBusinessProfile[0]['buy_listing_category'];
										//$bc = "Agriculture,Software";
										$pieces = explode(",", $buyBusinessProfile[0]['buy_listing_category']);
										?>
										
<select   id="listing_category" name="listing_category[]" multiple="multiple" required data-error="Listing Category required"> 
<?php
	foreach( $this->cachemethods->getSectorDetails() as $Sector ){
								
?>								
		    <option value="<?php echo $Sector->id;?>" <?php
			
				if($Sector->id == $this->input->post('listing_category')){echo 'selected=selected';
				}?>><?php echo $Sector->sector_name;?></option>
<?php
                            
			}
?>									</select>												
												
										<div class="help-block with-errors"></div>	
<div class="buystatusmsg2" style="display:none;color:#A94469;">Industry required</div>													
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
          <option value="<?php echo $statedet->id;?>" <?php if($statedet->id == $this->input->post('state2')){
							  
							  echo 'selected=selected';} ?>><?php echo $statedet->state_name; ?></option>
<?php
                         }

?>							

												</select>
										
										<div class="help-block with-errors"></div>	
<div class="buystatusmsg3" style="display:none;color:#A94469;">Location required</div>													
										</div>
									</div>
									</div>
									</div>
									<div class="areu">
										<div class="col-sm-12">
										<p>Investment range<span style="color: #ec0102;">*</span> </p>
										    <div class="col-sm-6 p-le0">
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
									<input type="hidden" name="frm_submit" value="bb_pr" />
										<button type="submit" class="savebtn buyerPP locBuy">Save</button>
										<!--<button type="submit" class="savebtn">Back</button>-->
									</div>
									
								</div>
								</form>
							</div>
							
							
							</div>
							<div class="col-md-12 white-bgft"></div>
							
							</div>
							
							
							
							
							
							
                           <!--<div class="next-box-2 " id="make-appointment" style="display:none;">
                                <div class="col-md-12  wish-yes mb0">
                                    <div class="col-md-6 padd0">
                                        <h5 class="white">Where would you want to seek an appointment?</h5></div>
                                    <div class="col-md-6 padd0">
                                        <input type="button" id="Business_deals" class="btn btn-default" value="Business Deals office">
                                        <input type="button" id="Outside_Office" class="btn btn-primary" value="Outside Office">
                                    </div>
                                </div>
                            </div>

                            <div class="next-box-3 " id="make-appointment-3" style="display:none;">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Time</label>
                                        <input type="time" class="form-control">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Date</label>
                                        <input type="date" class="form-control">
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-default" onclick="setContactDetails('Business Deals office')">Submit</button>
                                    </div>
                                </div>

                            </div>

                            <div class="next-box-3 " id="make-appointment-2" style="display:none;">
                                <div class="col-md-12  wish-yes mb0">
                                    <div class="col-md-8">
                                        <h5><i class="fa fa-location-arrow" aria-hidden="true"></i> Proposed Meeting Location </h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 style=" color: #02008c;">
				<i class="fa fa-link" aria-hidden="true"></i> <a data-toggle="modal" data-target="#Schedule-of-charges" href="#">Schedule of charges</a>
				</h5>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="Delhi NCR" id="p1" name="place" onclick="uncheckOther( 'place', 1, 1, 4 )"> Delhi NCR
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="300Kms from Delhi" id="p2" name="place" onclick="uncheckOther( 'place', 2, 1, 4 )"> 300Kms from Delhi
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="Other Parts of India" id="p3" name="place" onclick="uncheckOther( 'place', 3, 1, 4 )"> Other Parts of India
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="Outside India" id="p4" name="place" onclick="uncheckOther( 'place', 4, 1, 4 )"> Outside India
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Time</label>
                                            <input type="time" class="form-control" id="time">
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Date</label>
                                            <input type="date" class="form-control" id="date">
                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        <h5> Would you want To</h5>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" value="Tax invoice" id="t1" name="tax" onclick="uncheckOther( 'time', 1, 1, 2 )"> Tax invoice
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" value="Regular invoice" id="t2" name="tax" onclick="uncheckOther( 'time', 2, 1, 2 )"> Regular invoice
                                            </label>
                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="button" class="btn btn-default" onclick="setContactDetails('Outside Office')">Submit</button>
                                        </div>
                                    </div>

                                </div>
                            </div>-->

                        

                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
       <!-- <div style="z-index:10000" class="modal fade" id="Schedule-of-charges" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header back-blue border-none">
                        <h4 class="close-btn ">
        <img class="pull-right" data-dismiss="modal"  aria-label="Close" src="<?php echo asset_url();?>/img/close.png">
        </h4>
                    </div>
                    <div class="modal-body mt-10">
                        <table class="table table-bordered ">

                            <tbody>
                                <tr>
                                    <td>BusinessDeals Office</td>
                                    <td>Free Of Charge</td>

                                </tr>
                                <tr>
                                    <td>Delhi NCR </td>
                                    <td>Rs5500/- + GST</td>

                                </tr>
                                <tr>
                                    <td>300Kms from Delhi</td>
                                    <td>Rs35000/- + cost of travel @ Rs20/Km + GST</td>
                                </tr>
                                <tr>
                                    <td>Other parts of India </td>
                                    <td>Rs35000/- per day + GST + cost of travel (boarding and lodging if required)</td>
                                </tr>
                                <tr>
                                    <td>Outside India</td>
                                    <td>$1500/- per day + GST + cost of travel (Visa, Airfare, boarding, Lodging & conveyance)</td>
                                </tr>

                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>-->
	
		
<?php } ?>

