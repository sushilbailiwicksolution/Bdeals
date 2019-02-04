<?php
//print_r($_SESSION);
//var_dump($sellBusinessBasicInformation);
?>
  <div id="gtco-features">
    <div class="container">
      <div class="row">
        <div class="col-md-12 gtco-heading">
          <div class="p-15">
          <h2>List Your Business</h2>
          <div class="row">
              <div class="col-sm-3">
                <div class="feat-c-box">
                  <ul>
                     <li><a href="real-estate-basic-information">Property Information</a></li>
										<li><a href="real-estate-tenancy-description" >Tenancy Description</a></li>
										<li><a href="real-estate-tenancy-details">Tenancy Details</a></li>
										<li><a href="re-business-preview" class="active-page">Preview</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-9 r-bgc">

    <section class="paddbott preview">
        <div class="container">
            <div class="row">

             
				
				<div class="col-md-12">
				
				 <div class="col-md-12 padd0 listing-title border-sec">							
							<br>
						
						<p><span><b>Country:</b> <?php echo $this->cachemethods->getCountryNameById($businessData[0]['location_country']); ?></span></p>
						<p><span><b>State:</b> <?php 
						if($businessData[0]['location_state']=='Other'){
						echo $businessData[0]['other_state'];
						}else{
						echo $this->cachemethods->getStateNameById($businessData[0]['location_state'],$businessData[0]['location_country']); 	
						
						}
						?></span></p>
						<p><span><b>City:</b> <?php if($businessData[0]['location_city']=='Other'){
						echo $businessData[0]['other_city'];
						}else{
						echo $this->cachemethods->getCityNameById($businessData[0]['location_city'],$businessData[0]['location_state']);	
						
						} ?>
						
						
						
						
						
						</span></p>
						
						
                               
                                
                  </div>
							<br>
			
				</div>
				</div>
				
			
		  
		  <div class="col-md-12 border-sec bmargin">
        	<h5>Property Information </h5>
			<p><span><label>Key Headline:</label><?php echo $businessData[0]['key_headline']; ?></p></span>
			<p><span><label>Description</label><?php echo $businessData[0]['description']; ?></p></span>
			<p><span><label>Property Type</label><?php echo $businessData[0]['property_type_old']; ?></p>
			<p><span><label>Saleable Area in SQF</label><?php echo $businessData[0]['saleable_area']; ?></p>
			<p><span><label>Age of Construction</label><?php echo $businessData[0]['age_construction']; ?></p>
			<p><span><label>Authority Approvals</label><?php echo $businessData[0]['authority_approval']; ?></p>
			</div>
		
			
			<div class="col-md-12 border-sec bmargin">
			<h5>Tenancy Description</h5>
			
			<p><span><label>Tenancy Details</label><?php echo $sellBusinessDescription[0]['tenancy_details']; ?></p>
			
			<div class="col-md-4 padd0 ">
			<p><span><label>Total Lease Period</label><?php echo $sellBusinessDescription[0]['lease_period']; ?></p>
			</div>
			<div class="col-md-4 padd0 ">
			<p><span><label>Lease Started</label><?php echo $sellBusinessDescription[0]['lease_start']; ?></p>
			</div>
			<div class="col-md-4 padd0 ">
			<p><span><label>Lease Ending</label><?php echo $sellBusinessDescription[0]['lease_end']; ?></p>
			
			</div>
			
			<div class="col-md-4 padd0 ">
			<p><span><label>Lock in Period</label><?php echo $sellBusinessDescription[0]['lock_period'];?></p>
			</div>
			<div class="col-md-4 padd0 ">
			<p><span><label>Security Received</label><?php echo $sellBusinessDescription[0]['security_received']; ?></p>
			</div>
			<div class="col-md-4 padd0 ">
			
			<p><span><label>Monthly Rental</label><?php echo $sellBusinessDescription[0]['monthly_rental']; ?></p>
			</div>
			<div class="col-md-4 padd0 ">
			<p><span><label>Annual Rent</label><?php echo $sellBusinessDescription[0]['annual_rental']; ?></p>
			</div>
			<div class="col-md-4 padd0 ">
			<p><span><label>Annual Maintenance</label><?php echo $sellBusinessDescription[0]['annual_maintenance']; ?></p>
			</div>
			<div class="col-md-4 padd0 ">
			<p><span><label>Escalation After</label><?php echo $sellBusinessDescription[0]['escalation_after']; ?></p>
			</div>
			<div class="col-md-4 padd0 ">
			<p><span><label>Escalation %</label><?php echo $sellBusinessDescription[0]['escalation_percent']; ?></p>
			</div>
			
			</div>
			
			
			<div class="col-md-12 border-sec  bmargin">
			<h5>Tenancy Details</h5>
			<div class="col-md-12 padd0">
			<p><span><label>Features/Facilities</label><?php echo $sellBusinessDescription[0]['features']; ?></p>
			</div>
			<div class="col-md-12 padd0">
			<p><span><label>Location Advantage</label><?php echo $sellBusinessDescription[0]['location_advantages']; ?></p>
			</div>
			<div class="col-md-12 padd0">
			<p><span><label>Reason for Sale</label><?php echo $sellBusinessDescription[0]['reason_sale']; ?></p>
			</div>
			<div class="col-md-12 padd0">
			<p><span><label>Expected ROI % at present</label><?php echo $sellBusinessDescription[0]['roi_present']; ?></p>
			</div>
			<div class="col-md-12 padd0">
			<p><span><label>Expected ROI % after escalation</label><?php echo $sellBusinessDescription[0]['roi_escalation']; ?></p>
			</div>
			<div class="col-md-12 padd0">
			<p><span><label>Other Income (If Any):</label><?php echo $sellBusinessDescription[0]['other_income']; ?></p>
			</div>
			<div class="col-md-12 padd0">
			<p><span><label>Asking Price:</label><?php echo $sellBusinessDescription[0]['price_currency'].' '.$sellBusinessDescription[0]['price_value'].' '.$sellBusinessDescription[0]['price_unit']; ?></p>
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
  <!--end section-->
