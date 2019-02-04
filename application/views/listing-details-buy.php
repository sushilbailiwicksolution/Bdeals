<?php 
$userid=$this->session->userdata('userid');
$msgToDis = $this->session->flashdata('msg');
?>
<!--<section>
        <div class="header-inner two">
            <div class="inner text-center">
                <h4 class="title text-white uppercase">Buy a business Details</h4>

            </div>
            <div class="overlay bg-opacity-5"></div>
             <img src="<?php echo asset_url();?>images/header-img.jpg" alt="" class="img-responsive" />
    </section>-->
    <!-- end header inner -->
    <div class="clearfix"></div>

    <section class="sec-padding paddbott ldb_list_sec">
        <div class="container">
            <div class="row">

                <div class="col-sm-9">
				
				
				<div class="row">
				
			
				
				<div class="col-md-6">
				<a href="#">
            <h4 class="less-mar1"> <?php echo ucwords($businessData[0]['key_handling']); ?></h4>
            </a>
			
	
				
				</div>
				</div>
			
		  
		  <div class="col-md-12 border-sec">
				<div class="row">

        	<div class="col-md-6 listing-title">
        	
				<p><span><b>Buy Invest In:</b> <?php echo $businessData[0]['buy_invest_in']; ?></p></span>
				
				<?php if($businessData[0]['key_requirement']!=''){?>
				<p><span><b>key Requirement:</b> <?php echo $businessData[0]['key_requirement']; ?></p></span>
				<?php }?>
</div>

<div class="col-md-6"><button type="submit" class="savebtn" data-toggle="modal" data-target="#contactseller">Contact Buyer</button>
				

				<!--</div>
				
				</div>-->
				
				<b><Font color='red' size='4'><p style="margin-top:20px;"><?php if( $msgToDis != null ){echo '&nbsp;('.$msgToDis.')';}else if($contactFromResponse=='Kindly Click Above to Contact'){echo 'Kindly Click Above to Contact';}else if($contactFromResponse=='Already existing user, Kindly login first to fill the form'){echo 'Already existing user, Kindly login first to fill the form';}else{
					//echo 'There is some technical problem, Kindly try again.';
					} ?></p></font></b>
</div>
			</div>
			</div>
			<br>
			<div class="col-md-12 border-sec bmargin ">
            <p><span><h4>Profile</h4></p></span>
			
			<div class="col-md-6 padd0 bmargin">
			<?php 
												
												if($businessData[0]['profile_business_buyer']=='Yes') { echo 'Business Buyer';}
												else if($businessData[0]['profile_corporate_investor']=='Yes') { echo 'Corporate Investor';}
												else if($businessData[0]['profile_pe_vc']=='Yes') { echo 'PE / VC';} 
												else if($businessData[0]['profile_nri_foreign_investor']=='Yes') { echo 'NRI/Foreign Investor';}
												else if($businessData[0]['profile_business_lender']=='Yes') { echo 'Business Lender';} 
												else{
												echo 'Business Broker';	 
												}			
												
												?>
			
			</div>
			
			</div>
			
			<div class="col-md-12 border-sec bmargin">
			<h4>Business Interest</h4>
			<div class="col-md-4 padd0 ">
			
			<?php
												if($businessData[0]['bi_acquisition_buyout']=='Yes') { echo 'Acquisition / Buyout';}
												else if($businessData[0]['bi_distributor_cf']=='Yes') { echo 'Distributorship / C&F';}
												else if($businessData[0]['bi_invest_business']=='Yes') { echo 'Investment in Business';} 
												else if($businessData[0]['bi_debt_financing']=='Yes') { echo 'Debt financing';}
												else if($businessData[0]['bi_jv_partnership']=='Yes') { echo 'JV / Partnership';} 
												else if($businessData[0]['bi_startup_angel']=='Yes') { echo 'Start Up / Angel funding';} 
												else{
												echo 'Preleased Property';	 
												}	
?>												
			
			
			</div>
		
			</div>
			
					<div class="col-md-12 border-sec bmargin">
			<h4>Location</h4>
			<div class="col-md-4 padd0 ">
			<label>Country</label><?php echo $this->cachemethods->getCountryNameById($businessData[0]['country']); ?></p>
			</div>
			<div class="col-md-4 padd0 ">
			<label>State </label>
			<?php
			$pid=explode(',',$businessData[0]['state']);
		foreach($pid as $pd){
			
			//echo $pd;
	
	
		 
		 print_r($this->cachemethods->getStateNameById($pd,$businessData[0]['country']).", ");
		
		
		}?>
			</p>
			</div>
			<div class="col-md-4 padd0 ">
			<label>City</label><?php echo $businessData[0]['city'];?></p>
			</div>
			
			</div>
			<div class="col-md-12 border-sec bmargin">
			<h4>Industry Preference</h4>
			<div class="col-md-4 padd0 ">
			<label>Industry</label><?php 
			
			/*$pieces = explode(",", $businessData[0]['industry_preference']);
			
			for($i=0; $i < count($pieces); $i++){
				
			echo $this->cachemethods->getCatNameByCId($pieces);
           
			}*/
			$pid=explode(',',$businessData[0]['industry_preference']);
		foreach($pid as $pd){
			
			//echo $pd;
	
	
		 
		 print_r($this->cachemethods->getCatNameByCId($pd).", ");
		
		
		}
			
			?></p>
			</div>
			
			</div>
			<div class="col-md-12 border-sec bmargin">
			<h4>Investment Range</h4>
			<div class="col-md-4 padd0 ">
			<label>Min</label><?php echo $businessData[0]['investment_min_price_currency'].' '.$businessData[0]['investment_min'].' '.$businessData[0]['investment_min_price_unit'];?></p>
			<label>Max</label><?php echo $businessData[0]['investment_max_price_currency'].' '.$businessData[0]['investment_max'].' '.$businessData[0]['investment_max_price_unit'];?></p>
			</div>
			
			</div>
			<div class="col-md-12 border-sec bmargin">
			<h4>Funding Options</h4>
			<div class="col-md-4 padd0 ">
			<label>Own</label><?php echo $businessData[0]['funding_own'];?></p>
			<label>Debt</label><?php echo $businessData[0]['funding_debt'];?></p>
			<label>Total</label><?php echo $businessData[0]['total_fund'];?></p>
			<label>Investment Timeline</label><?php echo $businessData[0]['investment_timeline'];?></p>
			<label>Business Preference</label><?php echo $businessData[0]['business_preferences'];?></p>
			<label>Purpose of Investment</label><?php echo $businessData[0]['purpose'];?></p>
			
			</div>
			
			</div>
			
			<div class="col-md-4">
			 <br>
		  
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
        <h4 class="modal-title" id="myModalLabel">Contact Buyer <?php if($userid==''){ echo "/ Registration Form";}?></h4>
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
