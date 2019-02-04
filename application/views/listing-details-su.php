<?php 
$userid=$this->session->userdata('userid');
$msgToDis = $this->session->flashdata('msg');

//print_r($businessData);
?>
<!--<section>
        <div class="header-inner two">
            <div class="inner text-center">
                <h4 class="title text-white uppercase">BROWSE BY SECTOR</h4>

            </div>
            <div class="overlay bg-opacity-5"></div>
             <img src="<?php echo asset_url();?>images/header-img.jpg" alt="" class="img-responsive" />
    </section>-->
    <!-- end header inner -->
    <div class="clearfix"></div>
    <section class="sec-padding paddbott">
        <div class="container">
            <div class="row">
			<div class="col-md-12">
			
			<div class="col-md-12 brose-heading-2">
				<a href="#"><h4><?php echo ucwords($businessData[0]['key_headline']); ?></h4> </a>
			<span><i class="fa fa-map-marker red-map" aria-hidden="true"></i><b> <?php echo $this->cachemethods->getCityNameById($businessData[0]['location_city'],$businessData[0]['location_state']); ?></b>, <?php echo $this->cachemethods->getStateNameById($businessData[0]['location_state'],$businessData[0]['location_country']); ?>, <?php echo $this->cachemethods->getCountryNameById($businessData[0]['location_country']); ?></span>
           
		   <span style="float: right; color: #000; font-size: 14px; font-weight: bold;">listing ID #<?php echo $businessData[0]['id']; ?></span>
		   
				</div>

                <div class="col-sm-12 padd0">
				

				
				<div class="col-md-12 col-sm-12 col-xs-12  bmargin asking-top-area">
       				<div class="col-md-4 padd0"> 
				  <div class="carousel_holder">

			
          <div id="sync1" class="owl-carousel slide-brose">
		  <?php	
		//echo "<pre>";	
		  //print_r($businessDocuments);
		  foreach( $businessDocuments as $countrydet ){
			  
			 // print_r($countrydet['path']);
			 
			
			  
			  if($countrydet['document_type']=='image'){
			  ?>
					
				 
				<div class="item rb_imgbox"><img src="<?php echo base_url();?><?php echo $countrydet['path'];?>" alt="1"></div>
            
		<?php }if($countrydet['document_type']=='video'){?>
			
			 <div class="item"><video style="width: 100%;"  controls>
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
					
				 
				<div class="item rb_smallimg"><img src="<?php echo base_url();?><?php echo $countrydet2['path'];?>" alt="2"  class="img-responsive"></div>
            
		<?php }if($countrydet2['document_type']=='video'){?>
			
			 <div class="item"><video width="74">
  <source src="<?php echo base_url().$countrydet2['path'];?>" type="video/mp4" ></video></div>
		<?php }
		  }
		  ?>
            
          </div>
        </div>
		</div>
		<div class="col-md-8">
		<div class="col-md-12 padd0">
			<div class="col-md-4 ">
				<div class="asking-part">
					<h4>Investment Required</h4>
					<h3><span><?php echo $businessData[0]['investment_required_currency'].' '.$businessData[0]['investment_required_price'].' '.$businessData[0]['investment_required_unit']; ?></span></h3>
				</div>
			</div>
			<div class="col-md-4 ">
				<div class="asking-part">
					<h4>Previous Investment Infused</h4>
					<h3><?php echo $businessData[0]['pinv_Infused_currency'].' '.$businessData[0]['pinv_Infused_price'].' '.$businessData[0]['pinv_Infused_unit']; ?></h3>
				</div>
			</div>
			<div class="col-md-4 ">
				<div class="asking-part">
					<h4>Current Status of Business</h4>
					<h3><?php echo $businessData[0]['current_status_of_business']; ?></h3>
				</div>
			</div>

			<div class="col-md-4 ">
				<div class="asking-part">
					<h4>Category</h4>
					<h3><?php
					if($businessData[0]['listing_category']=='' || $businessData[0]['listing_category']=='Other'){
						
						echo $businessData[0]['listing_category_other'];
					
					}else{
					echo $this->cachemethods->getCatNameByCId($businessData[0]['listing_category']);
					}
					?></h3>
				</div>
			</div>

			<div class="col-md-4 ">
				<div class="asking-part">
					<h4>Sub-Category</h4>
					<h3><?php
					if($businessData[0]['listing_sub_category']=='' || $businessData[0]['listing_sub_category']=='Other'){
						
						echo $businessData[0]['listing_sub_category_other'];
						
					}else{
					
					echo $this->cachemethods->getSubCatNameByCId($businessData[0]['listing_category'],$businessData[0]['listing_sub_category']);
					}
					?></h3>
				</div>
			</div>
			<div class="col-md-4 ">
				<div class="asking-part">
					<h4>Establishment Year</h4>
					<h3><?php echo $businessData[0]['yoe']; ?></h3>
				</div>
			</div>
				
			
		
		</div>
		<div class="col-md-8 padd0 mt_35"></div>
		<div class="col-md-4 padd0 mt_35">
			<div class="padd0 contact-seller-a">
				
				
				<button type="submit" class="savebtn" data-toggle="modal" data-target="#contactseller">Contact Seller</button>
					<h4><?php if( $msgToDis != null ){echo '&nbsp;('.$msgToDis.')';}else if($contactFromResponse=='Kindly Click Above to Contact'){
						//echo 'Kindly Click Above to Contact';
					}else if($contactFromResponse=='Already existing user, Kindly login first to fill the form'){echo 'Already existing user, Kindly login first to fill the form';}else{
					//echo 'There is some technical problem, Kindly try again.';
					} ?></h4>
					
				</div>
				
					<div class="share_box">
				<div class="share_icon">
					<a href="javascript:void(0);" class="fa_share">
						<i class="fa fa-share-alt"></i>
					</a>
				</div>
				<ul class="share_info">
					<li><a class="w-inline-block social-share-btn fb" href="https://www.facebook.com/sharer/sharer.php?u=&t=" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;"><img src="<?php echo base_url();?>assets/images/facebook.png">
					</a></li>
					<li><a class="w-inline-block social-share-btn tw" href="https://twitter.com/intent/tweet?" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=%20Check%20up%20this%20awesome%20content' + encodeURIComponent(document.title) + ':%20 ' + encodeURIComponent(document.URL)); return false;"><img src="<?php echo base_url();?>assets/images/twitter.png"></a></li>

					<li><a class="w-inline-block social-share-btn gplus" href="https://plus.google.com/share?url=" target="_blank" title="Share on Google+" onclick="window.open('https://plus.google.com/share?url=' + encodeURIComponent(document.URL)); return false;"><img src="<?php echo base_url();?>assets/images/google.png"></a></li>

					<li><a class="w-inline-block social-share-btn lnk" href="http://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source=" target="_blank" title="Share on LinkedIn" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url=' + encodeURIComponent(document.URL) + '&title=' + encodeURIComponent(document.title)); return false;"><img src="<?php echo base_url();?>assets/images/linkedin.png"></a></li>
				</ul>
		
</div>	
		<div class=" contact-seller-a seller_favinfo">
		
			<div class="col-md-12 bmargin demo-table favourite_info">
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
			
		</div> 
		
		</div>
		
		
		</div>
		
		
		</div>
		
				
				
				
					<div class="col-md-12 border-sec bmargin brose-details-leftbb">
					<h4>Basic Information</h4>
				
		  
			<div class="col-md-12 padd0 bmargin">
			<label>Description</label><br/><?php echo $businessData[0]['description']; ?></p>
			</div>
			<div class="col-md-6 padd0 bmargin" style="display:none;">
			<label>Listing Category</label><?php
			if($businessData[0]['listing_category']=='' || $businessData[0]['listing_category']=='Other'){
				
				echo $businessData[0]['listing_category_other'];
			
			}else{
			echo $this->cachemethods->getCatNameByCId($businessData[0]['listing_category']);
			}
			?></p>
			</div>
			<div class="col-md-6 padd0 bmargin" style="display:none;">
			<label>Sub-Category</label><?php
			if($businessData[0]['listing_sub_category']=='' || $businessData[0]['listing_sub_category']=='Other'){
				
				echo $businessData[0]['listing_sub_category_other'];
				
			}else{
			
			echo $this->cachemethods->getSubCatNameByCId($businessData[0]['listing_category'],$businessData[0]['listing_sub_category']);
			}
			?></p>
			</div>
			<div class="col-md-6 padd0 bmargin" style="display:none;">
			<label>Legal Entity</label><?php echo $businessData[0]['legal_entity']; ?></p>
			</div>
			<div class="col-md-6 padd0 bmargin" style="display:none;">
			<label>Establishment Year</label><?php echo $businessData[0]['yoe']; ?></p>
			</div>
			<div class="col-md-6 padd0 bmargin" style="display:none;">
			<label>Current Status of Business</label><?php echo $businessData[0]['current_status_of_business']; ?></p>
			</div>
			</div>
			
			
			<div class="col-md-12 border-sec bmargin brose-details-leftbb">
			<h4>Business Pitch</h4>
			
			<div class="col-md-4 padd0 ">
			<label>Total Employees</label><?php echo $businessData[0]['total_employee']; ?></p>
			</div>
			<div class="col-md-6 padd0 bmargin">
			<label>Business Re-locatable</label><?php if($businessData[0]['is_re_locatable']=='Y'){
				echo "Yes";
				
			}else{
				
				echo "No";
				
			} ?></p>
			</div>
			
			<div class="col-md-12 padd0 bmargin"> 
			<label>Summarize your Idea / Business</label><?php echo $businessData[0]['summarize_idea']; ?></p>
			</div>
			<div class="col-md-12 padd0 bmargin">
			<label>Key Highlights</label><?php echo $businessData[0]['key_highlights']; ?></p>
			</div>
			
			<div class="col-md-12 padd0">
			<label>Competition / Market</label><?php echo $businessData[0]['competition']; ?></p>
			</div>
			<div class="col-md-12 padd0">
			<label>Detailed Pitch</label><?php echo $businessData[0]['detailed_pitch']; ?></p>
			</div>
			<div class="col-md-12 padd0">
			<label>Future Potential</label><?php echo $businessData[0]['future_potential']; ?></p>
			</div>
			<div class="col-md-12 padd0">
			<label>Team Overview</label><?php echo $businessData[0]['team_overview']; ?></p>
			</div>
			</div>
			
			<div class="col-md-12 border-sec bmargin brose-details-leftbb">
			<h4>Deal Details</h4>
			
			<div class="col-md-12 padd0">
			<label>Purpose of Investment</label><?php echo $businessData[0]['purpose_investment']; ?></p>
			</div>
			<div class="col-md-12 padd0">
			<label>Investment Required as</label><?php 
			if($businessData[0]['investment_required_as']=='Others'){
				
			echo $businessData[0]['investment_other'];
}else{
	
	echo $businessData[0]['investment_required_as'];
}
		?></p>
			</div>
			<div class="col-md-12 padd0">
			<label>Investor Role</label>
			<?php 
			if($businessData[0]['invester_role']=='Others'){
				
			echo $businessData[0]['investor_role_other'];
}else{
	
	echo $businessData[0]['invester_role'];
}
		?>
			</p>
			</div>
			<div class="col-md-12 padd0">
			<label>Proposed Deal Structure</label><?php echo $sellBusinessBasicInformation[0]['propose_deal_structure']; ?></p>
			</div>
	
			</div>
			
			
			<?php foreach($additionalFinancialDetails as $additionalFin){
				
				//print_r($additionalFin);
				
				?>
			<div class="col-md-12 border-sec bmargin brose-details-leftbb">
			<h4>Financial History</h4>
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
			
			<?php //if($businessData[0]['form_type']!='Mandate'){?>
			<div class="col-md-12 border-sec bmargin brose-details-leftbb">
			
			
			
			<label><h4>Documents</h4></label>
			<div class="clearfix"></div>
			<div class="documents_box">
				<div class="col-md-12 col-sm-12">
					<div class="document_info">
						<table width="500">
						<tr>
						<td><b>Documents Name</b></td>
						<td><b>Availability</b></td>
						<td><b>Action</b></td>
						</tr>
						<?php   
					
					foreach( $businessDocuments as $countrydet3 ){ 
					 if($countrydet3['document_type']!='image' and $countrydet3['document_type']!='video'){	
					 
					 ?>
						<tr>
						<td><?php echo $countrydet3['document_type'];?></td>
						<td>
						<h6><?php if($countrydet3['document_type']=='memorandum' || $countrydet3['document_type']=='additional' || $countrydet3['document_type']=='executive' || $countrydet3['document_type']=='financials'){ echo 'Yes';} else{ echo 'No'; } 
						?></h6>
						 </td>
						<td>View</td>
						</tr>
					<?php 
					 }
					 }?>	
						</table>
						
					</div>
				</div>
		
			</div>
			
			</div>
			
				<?php //} ?>
					
					

                </div>

               			 <div class="col-sm-3" style="display:none;">
	 
	 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php
    $i=0;
    if(count($AdvtImage)){
        foreach ($AdvtImage as $adimg) {
            if($i==0){
                echo '<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>';
                $i++;
            }
            else
            {
                echo '<li data-target="#carousel-example-generic" data-slide-to="0"></li>';
                $i++;
            }
        }
    }
    ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php
    $a=0;
    if(count($AdvtImage)){
        foreach ($AdvtImage as $adimg) {
            if($a==0){
                echo '<div class="item active">
      <img src="'.base_url().''.$adimg['adverti_image'].'" alt="...">
    
    </div>';
                $a++;
            }
            else
            {
                echo '<div class="item">
      <img src="'.base_url().''.$adimg['adverti_image'].'" alt="...">
      
    </div>';
                $a++;
            }
        }
    }
    ?>
  </div>

 
</div>
	
	</div>

            </div>
			</div>
        </div>
    </section>


	<!-- Modal -->
<div class="modal fade" id="contactseller" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background: #f2f2f2;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Contact Seller <?php if($userid==''){ echo "/ Registration Form";}?></h4>
      </div>
      <div class="modal-body">
		<?php //echo 'aaaaaaaaaaaaaaaaaaaaaaaaaa '.$businessData[0]['business_type']; ?>
       <form name="lb_uprof" action="<?php echo base_url().''.'customer-listing-contact-form';?>" method="post" data-toggle="validator" role="form" class="was-validated">
	   <input type="hidden" name="frm_id" id="frm_id" value="<?php echo $businessData[0]['form_id'];?>" />
	   <input type="hidden" name="contact_to_customer_id" id="contact_to_customer_id" value="<?php echo $businessData[0]['customer_id'];?>" />
	   <input type="hidden" name="contact_from_customer_id" id="contact_from_customer_id" value="<?php echo $contactFromDetails[0]['customer_id'];?>" />
		<input type="hidden" name="business_type" id="business_type" value="<?php echo $businessData[0]['business_type'];?>" />
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Name <span>*</span></label>
                                <input type="text" name="name" id="name" class="form-control form-radius"  placeholder="name" value="<?php echo $contactFromDetails[0]['name'] ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Email <span>*</span></label>
                                <input type="email" name="email" id="email" class="form-control form-radius"  placeholder="email" value="<?php echo $contactFromDetails[0]['customer_id'] ?>" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Mobile No. <span>*</span></label>
                                <input type="text" name="mobile" id="mobile" class="form-control form-radius"  placeholder="mobile" value="<?php echo $contactFromDetails[0]['contact_number'] ?>">
                            </div>
                            <div class="form-group col-md-6">
							
                                <label for="Address">Country <span>*</span></label>
                                <select  name="country" id="country" class="form-control" >
									<option value="">Select Country</option>
									<?php	foreach( $this->cachemethods->getCountryDetails() as $countrydet ){
									?>
												<option value="<?php echo $countrydet->id;?>" <?php if($countrydet->id == $contactFromDetails[0]['country']){echo 'selected=selected';}?>><?php echo $countrydet->country_name; ?></option>
									<?php
											}
									?>
								</select>
    </select>
                            </div>
                        </div>
						<?php if($userid==''){?>
                          <div class="row">
                            <div class="form-group col-md-6">
                                <label for="Message">Address<span>*</span></label>
                                <textarea id="lb_address" name="lb_address" class="form-control" rows="3" data-error="Address required" required=""></textarea>
                            </div>
							<div class="form-group col-md-6">
                                <label for="Message">City<span>*</span></label>
                                <input type="text" id="lb_location" name="lb_location" class="form-control" value="" placeholder="" data-error="Location required" required="">
                            </div>
							<div class="form-group col-md-6">
                                <label for="lb_web">Website</label>
                    <input type="text" id="lb_web" name="lb_web" class="form-control" pattern="www.*" value="<?php echo $sellBusinessUserProfile[0]['website'];?>" placeholder="e.g. www.businessdeals.in" data-error="Valid Website required">
                            </div>
                        </div>
                      
						  <div class="row">
                            <div class="form-group col-md-6">
                                <label for="Message">Password<span>*</span></label>
                                <input type="password" class="form-control" placeholder="" id="passwd" name="passwd" data-error="Password required" required="">
                            </div>
							<div class="form-group col-md-6">
                                <label for="Message">Confirm Password<span>*</span></label>
                                <input type="password" class="form-control" placeholder="" id="cpasswd" name="cpasswd" data-match="#passwd" data-match-error="Oops!, password don't match" data-error="Confirm password required" required="">
                            </div>
                        </div>
												  <div class="row">
				  <div class="col-sm-12">
		   <div class="col-sm-4">
		   
			 <label for="">Are You a<span>*</span></label>
                      <div class="checkbox" >
		      <input  type="checkbox" class="cus-t" id="checkbox1" name="lb_owner" value="owner"  <?php if(strcasecmp($sellBusinessUserProfile[0]['who'], 'owner')==0){ echo "checked";}?> >
                          <label for="checkbox1" class="cus-t">
                            Business Owner
                          </label>
                      </div>
                     
					  
                    </div>
                    <div class="col-sm-4">
				
					 <label for=""></label>
                      <div class="checkbox">
                        <input type="checkbox" class="cus-t" id="checkbox2" name="lb_broker" value="broker"  <?php if(strcasecmp($sellBusinessUserProfile[0]['who'], 'broker')==0){ echo "checked";}?> >
                          <label for="checkbox2" class="cus-t">
                            Business Broker
                          </label>
                      </div>
                   
					  
                    </div>
                    <div class="col-sm-4">
						
					 <label for=""></label>
                      <div class="checkbox">
                        <input type="checkbox" class="cus-t" id="checkbox3" name="lb_representative" value="representative" <?php if(strcasecmp($sellBusinessUserProfile[0]['who'], 'representative')==0){ echo "checked";}?> >
                          <label for="checkbox3" class="cus-t">
                            Representative
                          </label>
                      </div>
					  
                  
                    </div>
					 </div>
				  </div>
						<?php }?>
						  <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Message">Message<span>*</span></label>
                                <textarea  name="message" id="message" placeholder="message" class="form-control form-radius" required></textarea>
                            </div>
                        </div>
						<button class="btn-ser" type="Submit"> Contact </button>
                        <!--<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal_2">Contact Seller</button>-->
                    </form>
      </div>
      
    </div>
  </div>
</div>
