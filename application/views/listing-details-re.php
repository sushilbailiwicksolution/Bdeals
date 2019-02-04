<?php 
$userid=$this->session->userdata('userid');
$msgToDis = $this->session->flashdata('msg');
?>
<section>
        <div class="header-inner two">
            <div class="inner text-center">
                <h4 class="title text-white uppercase">BROWSE BY SECTOR</h4>

            </div>
            <div class="overlay bg-opacity-5"></div>
            <img src="<?php echo asset_url();?>images/header-img.jpg" alt="" class="img-responsive" />
    </section>
    <!-- end header inner -->
    <div class="clearfix"></div>

    <section class="sec-padding paddbott">
        <div class="container">
            <div class="row">

                <div class="col-sm-9">
				
				
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
					
				 
				<div class="item"><img src="<?php echo base_url();?><?php echo $countrydet['path'];?>" alt=""></div>
            
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
					
				 
				<div class="item"><img src="<?php echo base_url();?><?php echo $countrydet2['path'];?>" alt=""></div>
            
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
						<p> <span><b>Asking Price:</b> <?php echo $businessData[0]['latest_revenu_currency'].' ' . $businessData[0]['latest_revenu'].' '.$businessData[0]['latest_revenu_unit']; ?> </span> </p>
						
						


						<p><span><b>Sales Revenue:</b> <?php echo $businessData[0]['ask_price_currency'].' ' . $businessData[0]['ask_price'].' '.$businessData[0]['ask_price_unit']; ?></span></p>
						<p><span><b>Country:</b> <?php echo $this->cachemethods->getCountryNameById($businessData[0]['location_country']); ?></span></p>
						<p><span><b>State:</b> <?php echo $this->cachemethods->getStateNameById($businessData[0]['location_state'],$businessData[0]['location_country']); ?></span></p>
						<p><span><b>City:</b> <?php echo $this->cachemethods->getCityNameById($businessData[0]['location_city'],$businessData[0]['location_state']); ?></span></p>
						
						
                               
                                
                  </div>
							<br>
							
				<!--<div class="col-md-12 padd0">
					
				<div class="col-md-8 padd0">
				<b><Font color='red' size='4'><p style="margin-top:20px;"><?php if($contactFromResponse=='Successfully Submitted'){echo 'Successfully Submitted';}else if($contactFromResponse=='Kindly Click Above to Contact'){echo 'Kindly Click Above to Contact';}else{echo 'There is some technnical problem, Kindly try again.';} ?></p></font></b>
				</div>
				<div class="col-md-4 padd0">-->
				<button type="submit" class="savebtn" data-toggle="modal" data-target="#contactseller">Contact Seller</button>
				<!--</div>
				
				</div>-->
				
					<b><Font color='red' size='4'><p style="margin-top:20px;"><?php if( $msgToDis != null ){echo '&nbsp;('.$msgToDis.')';}else if($contactFromResponse=='Kindly Click Above to Contact'){echo 'Kindly Click Above to Contact';}else if($contactFromResponse=='Already existing user, Kindly login first to fill the form'){echo 'Already existing user, Kindly login first to fill the form';}else{
					//echo 'There is some technnical problem, Kindly try again.';
					} ?></p></font></b>
				
				
				</div>
				</div>
				
				
				
				
			
		  
		  <div class="col-md-4">
		   <h4 class="less-mar3"><a href="#">Share this Article</a></h4>
            <br>
            <ul class="social-icons-2">
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              
            </ul>
            <br>
		  
		  
		  </div>
		  <br><br><br><br><br>
		  
		  <div class="col-md-12 border-sec">
        	
				<p><span><h5>Key Headline:</h5><?php echo $businessData[0]['key_headline']; ?></p></span>
			</div>
			<br>
			<div class="col-md-12 border-sec bmargin">
            <p><span><h5>Description</h5><?php echo $businessData[0]['description']; ?></p></span>
			</div>
			<div class="col-md-6 padd0 bmargin">
			<label>Listing Category</label><?php
			echo $this->cachemethods->getCatNameByCId($businessData[0]['listing_category']);?></p>
			<label>Sub-Category</label><?php
			echo $this->cachemethods->getSubCatNameByCId($businessData[0]['listing_category'],$businessData[0]['listing_sub_category']);?></p>
			<label>Legal Entity</label><?php echo $businessData[0]['legal_entity']; ?></p>
			<label>Establishment Year</label><?php echo $businessData[0]['yoe']; ?></p>
			</div>
			<div class="col-md-6 padd0 bmargin">
			<label>Business Current Status</label><?php echo $businessData[0]['current_status_of_business']; ?></p>
			</div>
			
			
			<div class="col-md-12 border-sec bmargin">
			<h4>No Of Employees</h4>
			<div class="col-md-4 padd0 ">
			<label>Parmanent Employees</label><?php echo $businessData[0]['no_of_permanent_employee']; ?></p>
			</div>
			<div class="col-md-4 padd0 ">
			<label>Contractual Employees</label><?php echo $businessData[0]['no_of_contractual_emplyee']; ?></p>
			</div>
			<div class="col-md-4 padd0 ">
			<label>Total Employees</label><?php echo $businessData[0]['total_employee']; ?></p>
			</div>
			</div>
			
			<div class="col-md-12 border-sec bmargin">
			<label>Business Re-locatable</label><?php echo $businessData[0]['is_re_locatable']; ?></p>
			<label>Business Listed By</label><?php echo $businessData[0]['business_listed_by']; ?></p>
			<!--<label>Asking Price</label><?php echo $businessData[0]['key_headline']; ?></p>
			<label>Price Range</label><?php echo $businessData[0]['key_headline']; ?></p>
			<label>Turnover/Revenue</label><?php echo $businessData[0]['key_headline']; ?></p>-->
			<label>Product & Services</label><?php echo $businessData[0]['product_service_desc']; ?></p>
			<label>Competition / Market</label><?php echo $businessData[0]['competition_market_desc']; ?></p>
			</div>
			
			
			<div class="col-md-12 border-sec  bmargin">
			<div class="col-md-6 padd0">
			<label>Growth Potential</label><?php echo $businessData[0]['growth_potential']; ?></p>
			</div>
			<div class="col-md-6 padd0">
			<label>Reason For Sale</label><?php echo $businessData[0]['reason_for_sale']; ?></p>
			</div>
			<div class="col-md-6 padd0">
			<label>Property Type</label><?php echo $businessData[0]['property_type']; ?></p>
			</div>
			<div class="col-md-6 padd0">
			<label>Real Estate Value</label><?php echo $businessData[0]['real_state_value']; ?></p>
			</div>
			</div>
			
			<div class="col-md-12  border-sec bmargin">
			<div class="col-md-12 padd0">
			<label>Facility Description</label><?php echo $businessData[0]['facility_desc']; ?></p>
			</div>
			<div class="col-md-12 padd0">
			<label>Industrial/ Commercial</label><?php echo $businessData[0]['industrial_commercial']; ?></p>
			</div>
			<div class="col-md-3 padd0">
			<label>Total Area</label><?php echo $businessData[0]['total_land_area'].' '.$businessData[0]['total_land_area_type']; ?></p>
			</div>
			<div class="col-md-3 padd0">
			<label>Built-up Area</label><?php echo $businessData[0]['built_up_area'].' '.$businessData[0]['built_up_area_type']; ?></p>
			</div>
			<div class="col-md-3 padd0">
			<label>Open Area</label><?php echo $businessData[0]['open_area'].' '.$businessData[0]['open_area_type']; ?></p>
			</div>
			<div class="col-md-3 padd0">
			<label>Other Area</label><?php echo $businessData[0]['other_area']; ?></p>
			</div>
			
			</div>
			
			<div class="col-md-12 border-sec bmargin">
			
			
			<label>Financial History</label>
			
			</div>
			<div class="col-md-12 border-sec bmargin">
			<div class="col-md-2 padd0">
			<label>Year</label><?php echo $businessData[0]['fin_year']; ?></p>
			</div>
			<div class="col-md-2 padd0">
			<label>Revenue</label><?php echo $businessData[0]['fin_revenue_turnover']; ?></p>
			</div>
			
			<div class="col-md-2 padd0">
			<label>EDITDA</label><?php echo $businessData[0]['fin_EDITDA']; ?></p>
			</div>
			<div class="col-md-2 padd0">
			<label>PAT</label><?php echo $businessData[0]['fin_PAT']; ?></p>
			</div>
			<div class="col-md-2 padd0">
			<label>Margin</label><?php echo $businessData[0]['fin_margin']; ?></p>
			</div>
			</div>
			<?php //if($businessData[0]['form_type']!='Mandate'){?>
			<div class="col-md-12 border-sec bmargin brose-details-leftbb">
			
			
			
			<label><h4>Documents</h4></label>
			<div class="clearfix"></div>
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
			
				<?php //} ?>
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
		  
		 <div class="col-sm-3">
	 
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
       <form name="lb_uprof" action="<?php echo base_url();?>customer-listing-contact-form" method="post" data-toggle="validator" role="form" class="was-validated">
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
                                <input type="text" name="email" id="email" class="form-control form-radius"  placeholder="email" value="<?php echo $contactFromDetails[0]['customer_id'] ?>">
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
                                <textarea type="text" name="message" id="message" placeholder="message" class="form-control form-radius"></textarea>
                            </div>
                        </div>
						<button class="btn-ser" type="Submit"> Contact </button>
                        <!--<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal_2">Contact Seller</button>-->
                    </form>
      </div>
      
    </div>
  </div>
</div>
