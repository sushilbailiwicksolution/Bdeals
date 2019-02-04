<?php
$msgToDis = $this->session->flashdata('msg');

 ?> 

 <!-- masterslider -->
   <div class="master-slider ms-skin-default" id="masterslider">

    <!-- slide 1 -->
    <div class="ms-slide slide-1" data-delay="6">
      <div class="overlay-box"></div>
      <img src="<?php echo asset_url();?>img/banner_1.jpg" >
			</div>
    <!-- end slide 1 -->

    <!-- slide 2 -->
    <div class="ms-slide slide-4" data-delay="6">
      <div class="overlay-box"></div>
      <img src="<?php echo asset_url();?>img/banner_2.jpg" >
      </div>
			
			<div class="ms-slide slide-4" data-delay="6">
			  <div class="overlay-box"></div>
			  <img src="<?php echo asset_url();?>img/banner_3.jpg" >
			</div>
			<div class="ms-slide slide-4" data-delay="6">
			  <div class="overlay-box"></div>
			  <img src="<?php echo asset_url();?>img/banner_4.jpg" >
			</div>
    <!-- end slide 2 -->
    <section class="property-search search-home">

    </section>
  </div>





  <section class="parallax-section62  back-ads ">
  <div class="section-overlay orange-4 ">
  <div class="container sec-tpadding-2 sec-bpadding-2 ">
    <div class="row">
      <div class="col-md-12 back-sf ">
        <ul class="tabs1">
		
          <li class="active"><a href="#Search-tab-1" target="_self">Advance Search </a></li>
		  <li class=""><a href="#Search-tab-2" target="_self">Normal Search</a></li>
        </ul>
        <div class="tabs-content1">
          <div id="Search-tab-1" class="tabs-panel1" style="display: block;">
		<form method="POST" action="advance-search">
		  <div class="col-md-11 padd0">
			<div class="col-sm-12 padd0">
			<label for="Advanced">Advanced Search for Business</label>
			</div>
              <div class="adv-s" style="display:block;">
			  <select class="popselect custom-s" id="type" name="type">
                  <option value="">Select</option>
                  <option value="sell_a_business">Sell a Business</option>
                  <option value="buy_a_business">Buy a Business</option>
				  <option value="joint_venture">Joint Venture</option>
				  <option value="start_up">Start-Up</option>
				  <option value="real_estate">Real Estate</option>

                </select>
  <select id="country_" name="country" onChange="getChangeStates('<?php echo base_url();?>', this.value)" class="custom-s"  data-error="Country" >
                          <option value="">Select</option>
<?php
                          foreach( $this->cachemethods->getCountryDetails() as $country ){
?>
                          <option value="<?php echo $country->id;?>" <?php if($country->id == $this->input->post('country')){echo 'selected=selected';}?>><?php echo $country->country_name; ?></option>
<?php
                          }
?>
                         </select>
               			<select class="custom-s" id="state" name="state" onChange="getChangeCities('<?php echo base_url();?>', this.value)"  data-error="State required">
                         <option value="">Select</option>
<?php

                          foreach( $this->cachemethods->getStateByCountry($businessDetails[0]['location_country']) as $statedet ){
?>
          <option value="<?php echo $statedet->id;?>" <?php if($statedet->id == $this->input->post('state')){
							  
							  echo 'selected=selected';} ?>><?php echo $statedet->state_name; ?></option>
<?php
                         }

?>							
			</select>
                <select class="custom-s" id="city" name="city"  data-error="City required">
                         <option value="">Select</option>
						
<?php
                         foreach( $this->cachemethods->getCityByStateId($businessDetails[0]['location_state']) as $citydet ){
							 ?>
                         <option value="<?php echo $citydet->id;?>" <?php if($citydet->id == $this->input->post('city')){echo 'selected=selected';}?>><?php echo $citydet->city_name; ?></option>
					
				<?php		 }
?>						
                        </select>
                <Select class="custom-s popselect" id="category"  name="sector"  data-error="Listing Type required">
                          <option value="">Select</option>
<?php
                          foreach( $this->cachemethods->getSectorDetails() as $Sector ){
?>
                          <option value="<?php echo $Sector->id;?>" <?php if($Sector->id == $this->input->post('sector')){echo 'selected=selected';}?>><?php echo $Sector->sector_name; ?></option>
<?php
                          }
?>						
                        </select>
                 <select class="custom-s popselect" id="price_range_type" name="price" data-error="Price Range required" >
<?php
                            foreach( unserialize(PRICES) as $priceUnitValue=>$priceUnitName ){
?>
                            <option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $this->input->post('price')){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
                            }
?>
                          </select>
						  
                <button class="btn-ser"> Search </button>
              </div>
            </div>
		</form>


          </div>
          <!-- end tab 1 -->

          <div id="Search-tab-2" class="tabs-panel1" style="display: none;">
		  <form method="POST" action="normal-search">
             <div class="col-md-12 padd0">			
			<div class="col-sm-12 padd0">
			<label for="Advanced">Normal Search</label>
			</div>
			<div class="form-group col-md-7 padd0">
			
			<div class="col-sm-12 padd0">
			  <input type="text" class="form-control" name="search_key"  placeholder="Normal Search">
			</div>
		  </div>
		  <div class="form-group col-md-5 ">
		  <button class="btn-ser"> Search </button>
			</div>
			
			
			</div>
</form>
          </div>
          <!-- end tab 2 -->


        </div>
        <!-- end all tabs -->
      </div>
    </div>
  </div>
  </div>
</section>








  <!-- end of masterslider -->
 
  <!--end section-->
  <div class="clearfix"></div>
 
 <!--<?php //$this->load->view('featured-listing');?>-->
 
 <section class=" sec-padding section-light">
    <div class="container">
      <div class="row slide-nextprev-but-1">
        <div class="col-xs-12 text-center">
          <h3 class="uppercase font-weight-5">Featured Listing </h3>
          <div class="title-line-4 green align-center"></div>
        </div>
        <div class="clearfix"></div>
					
        <div id="owl-demo4" class="owl-carousel">
		
		 
 <?php  
		 
		 $i=0;
		 foreach($getFeaturedListing as $dataFet){ //home controller index function($this->LDM->getFeaturedListing();)
			$i++;
			// print_r($dataFet);
			 ?>  
			
          <div class="item">
		 
		
		  
            <div class="col-md-12 col-sm-6">
			
			<input type="hidden" name="frm_id" id="frm_id<?php echo $i; ?>" value="<?php echo $dataFet['form_id'];?>" />
			<input type="hidden" name="business_type" id="business_type<?php echo $i; ?>" value="<?php echo $dataFet['business_type'];?>" />
              <div class="feature-box-66">
                <div class="image-holder side-corner-tag ">
						
				<a href="<?php echo base_url();?>browse-sector-listing-details/<?php echo $dataFet['form_id'];?>/<?php echo $dataFet['business_type'];?>"> <img src="<?php echo base_url();?><?php echo $dataFet['path'];?>" alt="" class="img-responsive" style="height:175px;width:263px;"/></a>
			
						
						<p><span style="background-color:<?php echo $dataFet['tag_background_color'];?>;color:<?php echo $dataFet['tag_color'];?>"><?php echo $dataFet['tag_name'];?></span></p>
						
				</div>
                <div class="text-box-inner">
                  <h5 class="less-mar1"><a href="<?php echo base_url();?>browse-sector-listing-details/<?php echo $dataFet['form_id'];?>/<?php echo $dataFet['business_type'];?>"><?php echo $dataFet['key_headline'];?></a></h5>
                  <span><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $this->cachemethods->getCityNameById($dataFet['location_city'], $dataFet['location_state']);?>, <?php echo $this->cachemethods->getStateNameById( $dataFet['location_state'], $dataFet['location_country'] );?>, <?php echo $this->cachemethods->getCountryNameById($dataFet['location_country']);?></span>
                  <div class="clearfix"></div>
                  <div class="property-info">
                    <div class="pull-left"><span>Sector : <?php echo $dataFet['listing_category'];?></span></div>
                  </div>
                  <div class="property-info ">
                    <div class="pull-left text-3"><span>Asking Price : <?php 
					
					if($dataFet['business_type']=='sell_a_business'){
					
					echo $dataFet['ask_price_currency'];?> <?php echo $dataFet['ask_price'];
					
					}else{
					
					echo $dataFet['askCurrency'];?> <?php echo $dataFet['askPrice'];
					
					}?>
						</span></div>
					<!--<div><button type="submit" class="savebtn">View More</button></div>-->
                    <div><a href="<?php echo base_url();?>browse-sector-listing-details/<?php echo $dataFet['form_id'];?>/<?php echo $dataFet['business_type'];?>" class="saveButton">View More</a></div>
					
                  </div>
                </div>
              </div>
			 
            </div>
		
            <!--end column-->
          </div>

<?php }
		
?>
        </div>
		
        <!--end carousel-->

      </div>
    </div>
  </section>
 
 
 
 
 
 
 
  <!-- end section -->
  <div class="clearfix"></div>
 
 
  <section class="parallax-section61">
    <div class="section-overlay orange-4">
      <div class="container sec-tpadding-2 sec-bpadding-2">
        <div class="row">
		<div class="col-xs-12 text-center">
          <h3 class="uppercase font-weight-5" style="color:#fff;">BROWSE BY SECTOR </h3>
          <div class="title-line-4 green align-center"></div>
        </div>
		
		 <div class="col-md-12">
		   <div class="carousel_holder">
             <div id="owl-demo8" class="owl-carousel owl-theme">
			 <?php  
			 
			 $z=0;
		 foreach($getBrowseBySector as $dataSector){ //home controller index function($this->LDM->getFeaturedListing();)
			$z++;
			// print_r($dataFet);
			 ?>  
				<div class="item">
				<div class="col-md-12 text-center bmargin">				
				 <a href="browse-sector-list/<?php echo $dataSector['listing_category'];?>/Desc/5"><h5 class="text-white"><strong><?php echo $this->cachemethods->getCatNameByCId($dataSector['listing_category']);?></strong></h5>
					<div class="divider-line solid light less-width-8 align-center opacity-5"></div>
					<br>
					<h3 class="uppercase text-white "><?php echo $dataSector['industryCount'];?> </h3>
					</a>
				  </div>
				  </div>
			 <?php }?>
				
				
			  </div>
			  <div class="col-md-12">
			  <a href="Browse-sector"><button class="btn btn-primary btn-sm mt-40 pull-right">View more</button></a>
			  </div>
			
			
			</div>
		
		  </div>

        </div>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  <section class="sec-padding">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-center">
          <h3 class="uppercase font-weight-5">Buy Invest Zone</h3>
          <div class="title-line-4 green align-center"></div>
        </div>
		<div class="col-md-8 padd0">
        <div class="col-md-4">
          <div class="feature-box-65 bmargin">
		  
            <div class="iconbox-xtiny left round box-center-th"><i class="fa fa-pencil-square-o fa-2x" ></i></div>
			
            <div class="col-md-12 padd0 text-box-right text-center">
              <h5 class="uppercase font-weight-4"><a href="buy-a-business-profile/no/no">Post your requirement </a></h5>
              <p> Consectetuer adipiscing elit sit amet Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
        <!--end item-->

        <div class="col-md-4">
          <div class="feature-box-65 bmargin">
            <div class="iconbox-xtiny left round box-center-th"><i class="fa fa-briefcase fa-2x"></i></div>
            <div class="col-md-12 padd0 text-box-right text-center">
              <h5 class="uppercase font-weight-4"><a href="<?php echo base_url().'index.php/home/Business'?>?id=<?php echo $dataFet["form_id"];?>&list=Featured">Trusted businesses</a> </h5>
              <p> Consectetuer adipiscing elit sit amet Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
        <!--end item-->

        <div class="col-md-4">
          <div class="feature-box-65 bmargin">   
		  
            <div class="iconbox-xtiny left round box-center-th"><i class="fa fa-calculator fa-2x"></i></div>
            <div class="col-md-12 padd0 text-box-right text-center">
              <h5 class="uppercase font-weight-4"><a href="contact-us">Investors pool<a> </h5>
              <p> Consectetuer adipiscing elit sit amet Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
        <!--end item-->
		</div>
    

        <div class="col-md-4" style="border:1px solid #ccc;">
          <div class="feature-box-65 bmargin">
            <div class="iconbox-xtiny left round"><i class="fa fa-home fa-2x"></i></div>
            <div class="text-box-right">
              <h5 class="uppercase font-weight-4">Buyer Requirement</h5>
                <marquee style="height: 160px;" direction = "up" scrollamount="2"><i class="fa fa-caret-right"></i>
Register as a Buyer<br><i class="fa fa-caret-right"></i>
List your business for sdale<br><i class="fa fa-caret-right"></i>
List your business as JV</marquee>
            </div>
          </div>
        </div>
        <!--end item-->

      </div>
    </div>
  </section>
  <div class="clearfix"></div>
    <section class="sec-padding section-light">
    <div class="container">
      <div class="row slide-nextprev-but-1">
        <div class="col-xs-12 text-center">
          <h3 class="uppercase font-weight-5">New Listing </h3>
          <div class="title-line-4 green align-center"></div>
        </div>
        <div class="clearfix"></div>
		
        <div id="owl-demo20" class="owl-carousel">
	<?php 	 
		 
		
		 foreach($getNewListing as $NewListing){
		 
			 ?>
          <div class="item">
		  
                  <div class="col-md-12 col-sm-6">
              <div class="feature-box-66">
                <div class="image-holder side-corner-tag ">
						
				<a href="<?php echo base_url();?>browse-sector-listing-details/<?php echo $NewListing['form_id'];?>/<?php echo $NewListing['business_type'];?>"> <img src="<?php echo base_url();?><?php echo $NewListing['path'];?>" alt="" class="img-responsive" style="height:175px;width:263px;"/></a>
			
						
						<p><span style="background-color:<?php echo $NewListing['tag_background_color'];?>;color:<?php echo $NewListing['tag_color'];?>"><?php echo $NewListing['tag_name'];?></span></p>
						
				</div>
                <div class="text-box-inner">
                  <h5 class="less-mar1"><a href="#"><?php echo $NewListing['key_headline'];?></a></h5>
                  <span><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $this->cachemethods->getCityNameById($NewListing['location_city'], $NewListing['location_state']);?>, <?php echo $this->cachemethods->getStateNameById( $NewListing['location_state'], $NewListing['location_country'] );?>, <?php echo $this->cachemethods->getCountryNameById($NewListing['location_country']);?></span>
                  <div class="clearfix"></div>
                  <div class="property-info">
                    <div class="pull-left"><span>Sector : <?php echo $NewListing['listing_category'];?></span></div>
                  </div>
                  <div class="property-info ">
                    <div class="pull-left text-3"><span>Asking Price : <?php 
					
					if($NewListing['business_type']=='sell_a_business'){
					
					echo $NewListing['ask_price_currency'];?> <?php echo $NewListing['ask_price'];
					
					}else{
					
					echo $NewListing['askCurrency'];?> <?php echo $NewListing['askPrice'];
					
					}?></span></div>
                    <div><a href="<?php echo base_url();?>browse-sector-listing-details/<?php echo $NewListing['form_id'];?>/<?php echo $NewListing['business_type'];?>" class="saveButton">View More</a></div>
                  </div>
                </div>
              </div>
            </div>
		
            </div>
	 	<?php }?>
            <!--end column-->
         
          </div>
		 
          <!--end item-->

          
        </div>
        <!--end carousel--> 
        
      </div>
    </div>
  </section>
  
  

  <div class="clearfix"></div>
   <section class="sec-padding">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-center">
          <h3 class="uppercase font-weight-5">Our Services </h3>
          <div class="title-line-4 green align-center"></div>
        </div>
        <div class="col-md-4">
          <div class="feature-box-65 bmargin">
            <div class="iconbox-xtiny left round"><i class="fa fa-users fa-2x"></i></div>
            <div class="text-box-right">
              <h5 class="uppercase font-weight-4">Value Your Business</h5>
              <p> Consectetuer adipiscing elit sit amet Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
        <!--end item-->

        <div class="col-md-4">
          <div class="feature-box-65 bmargin">
            <div class="iconbox-xtiny left round"><i class="fa fa-briefcase fa-2x"></i></div>
            <div class="text-box-right">
              <h5 class="uppercase font-weight-4">Business Consulting </h5>
              <p> Consectetuer adipiscing elit sit amet Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
        <!--end item-->

        <div class="col-md-4">
          <div class="feature-box-65 bmargin">
            <div class="iconbox-xtiny left round"><i class="fa fa-car fa-2x"></i></div>
            <div class="text-box-right">
              <h5 class="uppercase font-weight-4">Business Plan </h5>
              <p> Consectetuer adipiscing elit sit amet Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
        <!--end item-->

        <div class="clearfix"></div>
        <div class="col-divider-margin-4"></div>
        <div class="col-md-4">
          <div class="feature-box-65 bmargin">
            <div class="iconbox-xtiny left round"><i class="fa fa-book fa-2x"></i></div>
            <div class="text-box-right">
              <h5 class="uppercase font-weight-4">Bank Sattelment </h5>
              <p> Consectetuer adipiscing elit sit amet Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
        <!--end item-->

        <div class="col-md-4">
          <div class="feature-box-65 bmargin">
            <div class="iconbox-xtiny left round"><i class="fa fa-gift fa-2x"></i></div>
            <div class="text-box-right">
              <h5 class="uppercase font-weight-4">Transaction Advisory </h5>
              <p> Consectetuer adipiscing elit sit amet Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
        <!--end item-->

        <div class="col-md-4">
          <div class="feature-box-65 bmargin">
            <div class="iconbox-xtiny left round"><i class="fa fa-home fa-2x"></i></div>
            <div class="text-box-right">
              <h5 class="uppercase font-weight-4">Maecenas sed nisl</h5>
              <p> Consectetuer adipiscing elit sit amet Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
        <!--end item-->

      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  <section class="parallax-section47">
    <div class="section-overlay bg-opacity-7">
      <div class="container sec-tpadding-2 sec-bpadding-2">
        <div class="row">
          <div class="col-md-8 col-centered text-center">
            <h4 class="text-white uppercase font-weight-4 less-mar1">Get in touch for a confidential discussion about your exit or acquisition strategy</h4>
            <h6 class="text-green-3 uppercase"><br/>
              <button type="submit" class="btn btn-default">Book Your Appointment</button>
            </h6>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--end section-->

  <!-- end section -->
  <div class="clearfix"></div>
  <section class="sec-padding">
    <div class="container">
      <div class="row">
	  <div class="col-md-1"></div>
        <div class="col-md-10 slide-controls-color-4">
        
		  <div class="col-xs-12 text-center">
          <h3 class="uppercase font-weight-5">TESTIMONIALS </h3>
          <div class="title-line-4 green align-center"></div>
        </div>
         
          <div class="clearfix"></div>
          <div id="owl-demo3" class="owl-carousel">
		  <?php foreach($getTestimonials as $dataTest){
			  
			  //print_r($dataTest);
			  
			  ?>
            <div class="item">
              <div class="feature-box52 two text-left">
                <p><?php echo $dataTest['content'];?></p>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12 text-left nopadding">
                <div class="iconbox-medium round left overflow-hidden"><img src="<?php echo base_url();?><?php echo $dataTest['image'];?>" alt=""/></div>
                <h5 class="less-mar1"><?php echo $dataTest['name'];?></h5>
                <span><?php echo $dataTest['company_name'];?> - <?php echo $dataTest['position'];?></span> </div>

              <!--end item-->

            </div>
           <?php }?>
          </div>
        </div>
		  <div class="col-md-3"></div>
               <!--end item-->
      </div>
    </div>
  </section>
  <!--end section-->
<?php if( $msgToDis == 'Dear User! You have been successfully registered.' ){
	echo "ssssssssssssssssssssssssssssssssssssssssssssssss dddddddddddddddddddddddddddddd ddddddddd";
?>
 <!-- Modal -->
        <div class="modal fade" id="myModal_3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content ">
                    <div class="modal-header back-blue border-none">
                        <h4 class="close-btn ">
        <img class="pull-right" data-dismiss="modal"  aria-label="Close" src="<?php echo asset_url();?>/img/close.png">
        </h4>
                    </div>
                    <div class="modal-body back-blue" style="padding-bottom: 10px;">
                        <div class="back-blue">
                            <div class="form-group col-md-12 wish-yes">	
							<div class="col-md-12 col-md-offset-1">
											<h4 class="white">Dear User! You have been successfully registered. </h4></div>
							 </div>
				</div>

                    </div>
                </div>
            </div>
        </div>
<?php
//$this->session->set_flashdata('msg', 'message showed'); 
}
?>		