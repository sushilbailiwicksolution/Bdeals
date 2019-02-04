<section>
        <div class="header-inner two">
            <div class="inner text-center">
                <h4 class="title text-white uppercase">BROWSE BY SECTOR</h4>

            </div>
            <div class="overlay bg-opacity-5"></div>
            <!--<img src="images/header-img.jpg" alt="" class="img-responsive" /> </div>-->
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
		  /*foreach( $businessDocuments as $countrydet ){*/?>
		  <?php //echo $businessDocuments[0]['path'];?>
				 
				 <!--<div class="item"><img src="<?php //echo $countrydet->customer_id;?>" alt=""></div>-->
            
		<?php	//}
		  ?>
			<!--<div class="item"><img src="http://localhost:8999/bdeals/uploads/gauravgmail.com/2018-02-26/1-Add-Ons_Required_1.png" alt=""></div>-->
			<div class="item"><img src="<?php echo asset_url();?>images/505.jpg" alt=""></div>
            <div class="item"><img src="<?php echo asset_url();?>images/506.jpg" alt=""></div>
            <div class="item"><img src="<?php echo asset_url();?>images/507.jpg" alt=""></div>
            <div class="item"><img src="<?php echo asset_url();?>images/508.jpg" alt=""></div>
            <div class="item"><img src="<?php echo asset_url();?>images/509.jpg" alt=""></div>
            <div class="item"><img src="<?php echo asset_url();?>images/505.jpg" alt=""></div>
          </div>
          <div id="sync2" class="owl-carousel new">
            <div class="item "><img src="<?php echo asset_url();?>images/510.jpg" alt=""/></div>
            <div class="item"><img src="<?php echo asset_url();?>images/511.jpg" alt=""/></div>
            <div class="item"><img src="<?php echo asset_url();?>images/512.jpg" alt=""/></div>
            <div class="item"><img src="<?php echo asset_url();?>images/513.jpg" alt=""/></div>
            <div class="item"><img src="<?php echo asset_url();?>images/514.jpg" alt=""/></div>
            <div class="item"><img src="<?php echo asset_url();?>images/510.jpg" alt=""/></div>
            
          </div>
        </div>
				
				</div>
				
				<div class="col-md-6">
				<a href="#">
            <h4 class="less-mar1"> <?php echo $businessData[0]['key_handling']; ?></h4>
            </a>
			
				
				
				 <div class="col-md-12 padd0 listing-title">							
							<br>
						<p> <span><b>Asking Price:</b> Rs. <?php echo $businessData[0]['asking_price']; ?> </span> </p>
						
						


						<p><span><b>Sales Revenue:</b> Rs. <?php echo $businessData[0]['total_revenue']; ?></span></p>
						<p><span><b>Country:</b> <?php echo $this->cachemethods->getCountryNameById($businessData[0]['location_country']); ?></span></p>
						<p><span><b>State:</b> <?php echo $this->cachemethods->getStateNameById($businessData[0]['location_state'],$businessData[0]['location_country']); ?></span></p>
						<p><span><b>City:</b> <?php echo $this->cachemethods->getCityNameById($businessData[0]['location_city'],$businessData[0]['location_state']); ?></span></p>
						
						
                               
                                
                            </div>
							<br>
				<button type="submit" class="savebtn" data-toggle="modal" data-target="#contactseller">Contact Seller</button>
				
				<b><Font color='red' size='4'><p style="margin-top:20px;"><?php if($contactFromResponse=='Successfully Submitted'){echo 'Successfully Submitted';}else if($contactFromResponse=='Kindly Click Above to Contact'){echo 'Kindly Click Above to Contact';}else{echo 'There is some technnical problem, Kindly try again.';} ?></p></font></b>
				
				</div>
				</div>
				
				
				
				
				<div class="col-md-12 padd0 bmargin">
        
			
		
           
            <br>
            <p><?php echo $businessData[0]['description']; ?></p>
            <!--<br>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. Vestibulum Curabitur eget orci. </p>
            <br>-->

            
            <!--end item-->
            
            
            
            
            
          </div>
		  
		  
		  <div class="col-md-4">
		  			<h3>Operation Details</h3>
            <ul class="iconlist dark">
              <li>Re-Locatable : <?php echo $businessData[0]['is_re_locatable']; ?></li>
              <li>Employees : <?php echo $businessData[0]['total_employee']; ?></li>
              <li>Real Estate/ Assets : <?php echo $businessData[0]['real_state_value']; ?></li>
              <li> </li>
            </ul>
			
			<br>
			
           
		  </div>
		  
		  <div class="col-md-4">
		  
		  <h3>Property Information</h3>
            <ul class="iconlist dark">
              <li>Comments : NA </li>
              <li>Competition : <?php echo $businessData[0]['competition_market_desc']; ?></li>
              <li>Growth Potential : <?php echo $businessData[0]['growth_potential']; ?></li>
              <li>Reason for Sale / : <?php echo isset($businessData[0]['reason_for_sale1']) ? $businessData[0]['reason_for_sale'] : 'NA'; ?>  </li>
			  <li>Joint Venture : NA  </li>
            </ul>
            
		  
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
		  
		  
					

                </div>

                <div class="col-sm-3">

                    <div class="feat-c-box red-ad">
                        <img src="<?php echo asset_url();?>img/add2.jpg" class="img-responsive">

                    </div>
                </div>

            </div>
        </div>
    </section>


	<!-- Modal -->
<div class="modal fade" id="contactseller" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Contact Seller</h4>
      </div>
      <div class="modal-body">
       <form name="lb_uprof" action="customer-listing-contact-form" method="post" data-toggle="validator" role="form" class="was-validated">
	   <input type="hidden" name="frm_id" id="frm_id" value="<?php echo $businessData[0]['form_id'];?>" />
	   <input type="hidden" name="contact_to_customer_id" id="contact_to_customer_id" value="<?php echo $businessData[0]['customer_id'];?>" />
	   <input type="hidden" name="contact_from_customer_id" id="contact_from_customer_id" value="<?php echo $contactFromDetails[0]['customer_id'];?>" />

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
