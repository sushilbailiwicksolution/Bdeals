<?php
$msgToDis = $this->session->flashdata('msg');
?> 


 <div id="gtco-features">
    <div class="container">
      <div class="row">
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
                    <!--<li><a href="list-your-business-user-profile">User Profile</a></li>-->
                    <li><a href="list-your-business-basic-information">Basic Information</a></li>
                    <li><a href="list-your-business-description">Business Description</a></li>
                    <li><a href="list-your-business-additional-details">Additional Details</a></li>
                    <li><a href="list-your-business-additional-details-uploads">Uploads</a></li>
                    <li><a href="list-your-business-package-details">Package Details</a></li>
                    <li><a  href="list-your-business-additional-services">Additional Services</a></li>
                    <!--<li><a href="list-your-business-payment">Payment</a></li>-->
                    <li><a class="active-page" href="sell-business-preview-form">Preview</a></li>

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
						<p> <span><b>Asking Price:</b> <?php echo $businessData[0]['ask_price_currency'].' ' . $businessData[0]['ask_price'].' '.$businessData[0]['ask_price_unit']; ?> </span> </p>
						
						<p><span><b>Sales Revenue:</b> <?php echo $businessData[0]['latest_revenu_currency'].' ' . $businessData[0]['latest_revenu'].' '.$businessData[0]['latest_revenu_unit']; ?>
						
						</span></p>
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
			<label>Legal Entity</label><?php if($businessData[0]['legal_entity']==''){
				
			echo 'NA';	
			}else{
				
			echo $businessData[0]['legal_entity'];
			} ?></p>
			<label>Establishment Year</label><?php if($businessData[0]['yoe']==''){
				
			echo 'NA';	
			}else{
				
			echo $businessData[0]['yoe'];
			} ?></p>
			</div>
			<div class="col-md-6 padd0 bmargin">
			<label>Current Status of Business</label><?php 
			if($businessData[0]['current_status_of_business']=='Other'){
				
			echo $businessData[0]['bstatus_other'];
				
			}else{
			
			echo $businessData[0]['current_status_of_business'];

			}
			?></p>
			</div>
			
			
			<div class="col-md-12 border-sec bmargin">
			<h5>No Of Employees</h5>
			<div class="col-md-4 padd0 ">
			<label>Parmanent Employees</label><?php if($businessData[0]['no_of_permanent_employee']==''){
				
			echo 'NA';	
			}else{
				
			echo $businessData[0]['no_of_permanent_employee'];
			} ?></p>
			</div>
			<div class="col-md-4 padd0 ">
			<label>Contractual Employees</label><?php if($businessData[0]['no_of_contractual_emplyee']==''){
				
			echo 'NA';	
			}else{
				
			echo $businessData[0]['no_of_contractual_emplyee'];
			} ?></p>
			</div>
			<div class="col-md-4 padd0 ">
			<label>Total Employees</label><?php echo $businessData[0]['total_employee']; ?></p>
			</div>
			</div>
			
			<div class="col-md-12 border-sec bmargin">
			<label>Business Re-locatable</label><?php 
			if($businessData[0]['is_re_locatable']=='Y'){
			echo 'Yes';			}else{
				
				echo 'No';
			}			?></p>
			<label>Business Listed By</label><?php echo $businessData[0]['business_listed_by']; ?></p>
			<!--<label>Asking Price</label><?php echo $businessData[0]['key_headline']; ?></p>
			<label>Price Range</label><?php echo $businessData[0]['key_headline']; ?></p>
			<label>Turnover/Revenue</label><?php echo $businessData[0]['key_headline']; ?></p>-->
			<label>Product & Services</label><?php echo $businessData[0]['product_service_desc']; ?></p>
			<label>Competition / Market</label><?php echo $businessData[0]['competition_market_desc']; ?></p>
			</div>
			
			
			<div class="col-md-12 border-sec  bmargin">
			<div class="col-md-12 padd0">
			<label>Growth Potential</label><?php echo $businessData[0]['growth_potential']; ?></p>
			</div>
			<div class="col-md-12 padd0">
			<label>Reason For Sale</label><?php echo $businessData[0]['reason_for_sale']; ?></p>
			</div>
			<div class="col-md-12 padd0">
			<label>Property Type</label><?php if($additionalDetails[0]['property_type']=='Owner'){
				echo 'Owned';
			}else{
				
				echo $additionalDetails[0]['property_type'];
			}				?></p>
			</div>
			<div class="col-md-12 padd0">
			<label>Real Estate Value</label><?php echo $additionalDetails[0]['ask_price_currency_real'].' '.$additionalDetails[0]['ask_price_real'].' '.$additionalDetails[0]['ask_price_unit_real']; ?></p>
			</div>
			</div>
			
			<div class="col-md-12  border-sec bmargin">
			<div class="col-md-12 padd0">
			<label>Facility Description</label><?php echo $additionalDetails[0]['facility_desc']; ?></p>
			</div>
			<?php foreach($additionalDetails as $additionalDetails){
				
				//print_r($additionalDetails);
				
				?>
			<div class="col-md-12 padd0">
			<label>Industrial/ Commercial</label><?php echo $additionalDetails['industrial_commercial']; ?></p>
			</div>
			<div class="col-md-3 padd0">
			<label>Total Area</label><?php echo $additionalDetails['total_land_area'].' '.$additionalDetails['total_land_area_type']; ?></p>
			</div>
			<?php if($additionalDetails['industrial_commercial']=='Industrial'){?>
			<div class="col-md-3 padd0">
			<label>Built-up Area</label><?php echo $additionalDetails['built_up_area'].' '.$additionalDetails['built_up_area_type']; ?></p>
			</div>
			<div class="col-md-3 padd0">
			<label>Open Area</label><?php echo $additionalDetails['open_area'].' '.$additionalDetails['open_area_type']; ?></p>
			</div>
			
			<?php
			}
			else{?>
			<div class="col-md-3 padd0">
			<label>Carpet Area</label><?php echo $additionalDetails['carpet_area'].' '.$additionalDetails['carpet_area_type']; ?></p>
			</div>
			<?php } }?>
			</div>
			
			<div class="col-md-12 border-sec bmargin">
			
			
			<label>Financial History</label>
			
			</div>
			<?php foreach($additionalFinancialDetails as $additionalFin){
				
				//print_r($additionalFin);
				
				?>
			<div class="col-md-12 border-sec bmargin">
			<div class="col-md-2 padd0">
			<label>Year</label><?php echo $additionalFin['fin_year']; ?></p>
			</div>
			<div class="col-md-2 padd0">
			<label>Revenue</label><?php echo $additionalFin['fin_revenue_turnover']; ?></p>
			</div>
			
			<div class="col-md-2 padd0">
			<label>EDITDA</label><?php echo $additionalFin['fin_EDITDA']; ?></p>
			</div>
			<div class="col-md-2 padd0">
			<label>PAT</label><?php echo $additionalFin['fin_PAT']; ?></p>
			</div>
			<div class="col-md-2 padd0">
			<label>Margin</label><?php echo $additionalFin['fin_margin']; ?></p>
			</div>
			</div>
			<?php }?>
			<?php if($businessData[0]['form_type']!='Mandate'){?>
			<div class="col-md-12 border-sec bmargin">
			
			
			<label>Documents</label>
			
			</div>
			<div class="col-md-12 border-sec bmargin">
			<?php
			
		
			foreach( $businessDocuments as $countrydet3 ){
			  
		//	print_r($countrydet3['document_type']);
			  
			 if($countrydet3['document_type']!='image' and $countrydet3['document_type']!='video'){
			  ?>
					
				 
					<div class="col-md-2 padd0">
				
			<label><?php echo $countrydet3['document_type'];?></label><a target="_blank" href="<?php echo base_url();?><?php echo $countrydet3['path'];?>">View</a>
				
			</div>
            
		<?php 
			 }
			 }
		  ?>
			
		
			
			</div>
				<?php }else{
		 
		  
		  ?>
		  <div class="col-md-12 border-sec bmargin">
		  <div class="btn btn-danger">Please pay to view documents of this form</div>
		  </div>
				<?php }?>
			
			<?php if($userid!=''){?>
			<div class="col-md-12 bmargin demo-table" style="margin-top:20px;">
			<div id="favourite-<?php echo $businessData[0]['form_id']; ?>">
			
			<?php
			//$str_like = "like";
			//$str_title = "Remove from favourite";
			if($businessData[0]['add_to_favorite']=='0') {
			$str_like = "like";
			
			$str_title = "Add to favourite";
			}else{
				
			$str_like = "unlike";
			
			$str_title = "Remove from favourite";	
				
			}
			?>
			<div class="btn-likes"><input type="button" title="<?php echo ucwords($str_title); ?>" class="<?php echo $str_like; ?>" onClick="Favourite(<?php echo $businessData[0]['form_id'];?>,'<?php echo $str_like; ?>')" /></div>
<div class="label-likes"><?php if($businessData[0]['add_to_favorite']=='1') { echo "Remove from favourite"; }else{echo "Add to favourite";} ?></div>
			
			</div>
			</div>
			<?php }?>
            <!--<br>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. Vestibulum Curabitur eget orci. </p>
            <br>-->

            
            <!--end item-->
            
            <!--<div class="col-md-6">
		  			<h3>Operation Details</h3>
            <ul class="iconlist dark">
              <li>Re-Locatable : <?php echo $businessData[0]['is_re_locatable']; ?></li>
              <li>Employees : <?php echo $businessData[0]['total_employee']; ?></li>
              <li>Real Estate/ Assets : <?php echo $businessData[0]['real_state_value']; ?></li>
              <li> </li>
            </ul>
			
			<br>
			
           
		  </div>
		  
		  <div class="col-md-6">
		  
		  <h3>Property Information</h3>
            <ul class="iconlist dark">
              <li>Comments : NA </li>
              <li>Competition : <?php echo $businessData[0]['competition_market_desc']; ?></li>
              <li>Growth Potential : <?php echo $businessData[0]['growth_potential']; ?></li>
              <li>Reason for Sale / : <?php echo isset($businessData[0]['reason_for_sale1']) ? $businessData[0]['reason_for_sale'] : 'NA'; ?>  </li>
			  <li>Joint Venture : NA  </li>
            </ul>
            
		  
		  </div>-->
            
       

            </div>
        </div>
    </section>

              </div>
            </div>
          </div>
       </div>
     </div>
   </div>
 </div>

  <!--end section-->
