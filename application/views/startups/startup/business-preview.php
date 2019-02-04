<?php
$msgToDis = $this->session->flashdata('msg');
?>
<div id="gtco-features">
    <div class="container">
       <div class="col-md-12 gtco-heading" style="margin-bottom: 0px;">
          <div class="p-15">
	  <div class="col-md-3 padd0">
            <h2 style="margin-bottom: 15px;">List Your Business</h2>
			</div>
			<div class="col-md-9 padd0 submit-msg">
			<?php if( $msgToDis != null ){echo '<h1 class="page-title popup-style">&nbsp;('.$msgToDis.')</h1>';}?>
			</div>
			</div>
			</div>
	  
        <div class="col-md-12 gtco-heading">
          <div class="p-15">
            <div class="row">
             <div class="col-sm-3">
                <div class="feat-c-box">
                  <ul>
                    <li><a  href="start-up-basic-information">Basic Information</a></li>
                    <li><a  href="start-up-business-pitch" >Business Pitch</a></li>
                    <li><a href="start-up-deal-details">Deal Details</a></li>
                    <li><a href="start-up-additional-details-uploads" >Uploads</a></li>
                    <li><a href="start-up-package-details">Package Details</a></li>
                    <li><a href="start-up-additional-services" >Additional Services</a></li>
                      <!--<li><a href="start-up-payment">Payment</a></li>-->
                    <li><a class="active-page" href="start-up-preview">Preview</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-9 r-bgc">

    <section class="paddbott preview">
        <div class="container">
            <div class="row">

              
				
				
				
				
				<div class="col-md-6 bmargin" >
				
				  <div class="carousel_holder">

			
          <div id="sync1" class="owl-carousel">
		  <?php	
		//echo "<pre>";	
		  //print_r($businessDocuments);
		  foreach( $businessDocuments as $countrydet ){
			  
			 // print_r($countrydet['path']);
			 
			
			  
			  if($countrydet['document_type']=='image'){
			  ?>
					
				 
				<div class="item"><img src="<?php echo base_url();?><?php echo $countrydet['path'];?>" alt="1"></div>
            
		<?php }if($countrydet['document_type']=='video'){?>
			
			 <div class="item"><video  controls>
  <source src="<?php echo base_url().$countrydet['path'];?>" type="video/mp4"></video></div>
		<?php }
		  }
		  ?>
			
          </div>
          <div id="sync2" class="owl-carousel new">
		  
		  <?php 
            foreach( $businessDocuments as $countrydet2 ){
			  
			 // print_r($countrydet['path']);
			  
			  if($countrydet2['document_type']=='image'){
			  ?>
					
				 
				<div class="item"><img src="<?php echo base_url();?><?php echo $countrydet2['path'];?>" alt="2"  class="img-responsive"></div>
            
		<?php }if($countrydet2['document_type']=='video'){?>
			
			 <div class="item"><video width="74">
  <source src="<?php echo base_url().$countrydet2['path'];?>" type="video/mp4" ></video></div>
		<?php }
		  }
		  ?>
            
          </div>
        </div>
				
				</div>
				
				<div class="col-md-6">
				<a href="#">
            <h4 class="less-mar1"> <?php echo $businessData[0]['key_handling']; ?></h4>
            </a>
			
				
				
				 <div class="col-md-12 padd0 listing-title">							
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
				
			
		  
		  <div class="col-md-12 border-sec">
        	
				<p><span><h5>Key Headline:</h5><?php echo $businessData[0]['key_headline']; ?></p></span>
			</div>
			<br>
			<div class="col-md-12 border-sec bmargin">
            <p><span><h5>Description</h5><?php echo $businessData[0]['description']; ?></p></span>
			</div>
			<div class="col-md-6 padd0 bmargin">
			<label>Listing Category</label><?php
			if($businessData[0]['listing_category']=='' || $businessData[0]['listing_category']=='Other'){
				
				echo $businessData[0]['listing_category_other'];
			
			}else{
			echo $this->cachemethods->getCatNameByCId($businessData[0]['listing_category']);
			}
			?></p>
			<label>Sub-Category</label><?php
			if($businessData[0]['listing_sub_category']=='' || $businessData[0]['listing_sub_category']=='Other'){
				
				echo $businessData[0]['listing_sub_category_other'];
				
			}else{
			
			echo $this->cachemethods->getSubCatNameByCId($businessData[0]['listing_category'],$businessData[0]['listing_sub_category']);
			}
			?></p>
			<label>Legal Entity</label><?php echo $businessData[0]['legal_entity']; ?></p>
			<label>Establishment Year</label><?php echo $businessData[0]['yoe']; ?></p>
			</div>
			<div class="col-md-6 padd0 bmargin">
			<label>Business Current Status</label><?php echo $businessData[0]['current_status_of_business']; ?></p>
			</div>
			
			
			<div class="col-md-12 border-sec bmargin">
			<h5>No Of Employees</h5>
			<div class="col-md-4 padd0 ">
			<label>Parmanent Employees</label><?php echo $sellBusinessBasicInformation[0]['permanent_employee']; ?></p>
			</div>
			<div class="col-md-4 padd0 ">
			<label>Contractual Employees</label><?php echo $sellBusinessBasicInformation[0]['contractual_employee']; ?></p>
			</div>
			<div class="col-md-4 padd0 ">
			<label>Total Employees</label><?php echo $sellBusinessBasicInformation[0]['total_employee']; ?></p>
			</div>
			<div class="col-md-4 padd0 ">
			<label>Previous Investment Infused</label><?php echo $sellBusinessBasicInformation[0]['pinv_Infused_currency'].' '.$sellBusinessBasicInformation[0]['pinv_Infused_price'].' '.$sellBusinessBasicInformation[0]['pinv_Infused_unit']; ?></p>
			</div>
			<div class="col-md-4 padd0 ">
			<label>Investment Required</label><?php echo $sellBusinessBasicInformation[0]['investment_required_currency'].' '.$sellBusinessBasicInformation[0]['investment_required_price'].' '.$sellBusinessBasicInformation[0]['investment_required_unit']; ?></p>
			</div>
			</div>
			
			<div class="col-md-12 border-sec bmargin">
			<label>Business Re-locatable</label><?php if($sellBusinessBasicInformation[0]['business_re_locatable']=='Y'){ echo 'Yes'; }else{ echo 'No';}?></p>
			<label>Summarize your Idea / Business</label><?php echo $sellBusinessBasicInformation[0]['summarize_idea']; ?></p>
			
			<label>Key Highlights</label><?php echo $sellBusinessBasicInformation[0]['key_highlights']; ?></p>
			<label>Competition / Market</label><?php echo $sellBusinessBasicInformation[0]['competition']; ?></p>
			<label>Detailed Pitch</label><?php echo $sellBusinessBasicInformation[0]['detailed_pitch']; ?></p>
			<label>Future Potential</label><?php echo $sellBusinessBasicInformation[0]['future_potential']; ?></p>
			<label>Team Overview</label><?php echo $sellBusinessBasicInformation[0]['team_overview']; ?></p>
			</div>
			
			
			<div class="col-md-12 border-sec  bmargin">
			<h5>Deal Information</h5>
			<div class="col-md-12 padd0">
			<label>Purpose of Investment</label><?php echo $sellBusinessBasicInformation[0]['purpose_investment']; ?></p>
			</div>
			<div class="col-md-12 padd0">
			<label>Investment Required as</label><?php 
			if($sellBusinessBasicInformation[0]['investment_required_as']=='Others'){
				
			echo $sellBusinessBasicInformation[0]['investment_other'];
}else{
	
	echo $sellBusinessBasicInformation[0]['investment_required_as'];
}
		?></p>
			</div>
			<div class="col-md-12 padd0">
			<label>Investor Role</label>
			<?php 
			if($sellBusinessBasicInformation[0]['invester_role']=='Others'){
				
			echo $sellBusinessBasicInformation[0]['investor_role_other'];
}else{
	
	echo $sellBusinessBasicInformation[0]['invester_role'];
}
		?>
			</p>
			</div>
			<div class="col-md-12 padd0">
			<label>Proposed Deal Structure</label><?php echo $sellBusinessBasicInformation[0]['propose_deal_structure']; ?></p>
			</div>
			</div>
	
			
			<div class="col-md-12 border-sec bmargin">
			
			
			<label>Financial Snapshot (Previous & Projected)</label>
			
			</div>
			<?php foreach($additionalFinancialDetails as $additionalFin){
				
				//print_r($additionalFin);
				
				?>
			<div class="col-md-12 border-sec bmargin">
			<div class="col-md-4 padd0">
			<label>Year</label><?php echo $additionalFin['fin_year']; ?></p>
			</div>
			<div class="col-md-4 padd0">
			<label>Turnover</label><?php echo $additionalFin['fin_turnover_currency'].' '.$additionalFin['fin_revenue_turnover'].' '.$additionalFin['fin_turnover_unit']; ?></p>
			</div>
			
			<div class="col-md-4 padd0">
			<label>Margin</label><?php echo $additionalFin['fin_margin_currency'].' '.$additionalFin['fin_margin'].' '.$additionalFin['fin_margin_unit']; ?></p>
			</div>
			
			</div>
			<?php }?>
			
			<div class="col-md-12 border-sec bmargin">
			
			
			<label>Documents</label>
			
			</div>
			<div class="col-md-12 border-sec bmargin">
			<?php
			 foreach( $businessDocuments as $countrydet3 ){
			  
			 // print_r($countrydet['path']);
			  
			  if($countrydet3['document_type']!='image' and $countrydet3['document_type']!='video'){
			  ?>
					
				 
				<div class="col-md-2 padd0">
				<?php if($countrydet3['document_type']!=''){?>
			<label><?php echo $countrydet3['document_type'];?></label><a target="_blank" href="<?php echo base_url();?><?php echo $countrydet3['path'];?>">View</a>
				<?php }else{ echo 'Document not submitted yet';}?>
			</div>
            
		<?php }
		 
			 }
		  ?>
			
		
			
			</div>

       
			<div class="col-md-12 border-sec bmargin">
			<h5>Package Details</h5>
			<div class="col-md-4 padd0 ">
			<label>Package Name</label><?php  if($user_package[0]['package_id']=='1'){echo 'Basic';}
if($user_package[0]['package_id']=='2'){echo 'Advance';}
if($user_package[0]['package_id']=='3'){echo 'Ultimate';}
if($user_package[0]['package_id']=='4'){echo 'Elite';}			?></p>
			</div>
			
			
			</div>
				<div class="col-md-12 border-sec bmargin">
			<h5>Additional Services</h5>
			<div class="col-md-4 padd0 ">
			<label>Featured listing</label><?php if(strcasecmp($additionalServices[0]['feature_listing'], 'YES')==0){ echo "Yes";}else{echo "No";}?></p>
			</div>
			<div class="col-md-4 padd0 ">
			<label>Information Memorandum</label><?php if(strcasecmp($additionalServices[0]['memorandum'], 'YES')==0){ echo "Yes";}else{echo "No";}?></p>
			</div>
		
			</div>
			<div class="col-md-12 border-sec bmargin">
			
			
			<label>Send Us Your Request For Below Support, To Fulfil Your Business Requisites</label>
			
			</div>
			<div class="col-md-12 border-sec bmargin">
			
			<div class="col-md-4 padd0 ">
			<label>Business Plan</label><?php if(strcasecmp($additionalServices[0]['plan'], 'YES')==0){ echo "Yes";}else{echo "No";}?></p>
			</div>
			<div class="col-md-4 padd0 ">
			<label>Business Incubation</label><?php if(strcasecmp($additionalServices[0]['incubation'], 'YES')==0){ echo "Yes";}else{echo "No";}?></p>
			</div>
		<div class="col-md-4 padd0 ">
			<label>Start-up Mentoring</label><?php if(strcasecmp($additionalServices[0]['startup-mentoring'], 'YES')==0){ echo "Yes";}else{echo "No";}?></p>
			</div>
			<div class="col-md-4 padd0 ">
			<label>Fund Raising Advisory</label><?php if(strcasecmp($additionalServices[0]['fund_raising_advisory'], 'YES')==0){ echo "Yes";}else{echo "No";}?></p>
			</div>
			<div class="col-md-4 padd0 ">
			<label>Dedicated Account Manager</label><?php if(strcasecmp($additionalServices[0]['account_manager'], 'YES')==0){ echo "Yes";}else{echo "No";}?></p>
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
