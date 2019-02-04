<?php
$msgToDis = $this->session->flashdata('msg');

 ?> 

 <!-- masterslider -->
   <div class="master-slider ms-skin-default main_slider" id="masterslider">

    <!-- slide 1 -->
    <!--<div class="ms-slide slide-1" data-delay="6">
		<div class="overlay-box"></div>
	      <img src="<?php echo asset_url();?>img/banner_1.jpg" >
	</div>-->
    <!-- end slide 1 -->

    <!-- slide 2 -->
    	<!--<div class="ms-slide slide-4" data-delay="6">  
			<div class="overlay-box"></div>
	      	<a href="<?php echo base_url();?>services"><img src="<?php echo asset_url();?>img/banner_2.jpg" ></a>
      </div>
			
		<div class="ms-slide slide-4" data-delay="6">
		  <div class="overlay-box"></div>
		  	<a href="<?php echo base_url();?>contact-us"><img src="<?php echo asset_url();?>img/banner_3.jpg" ></a>
		</div>
		<div class="ms-slide slide-4" data-delay="6">
		<div class="overlay-box"></div>
		 	<a href="<?php echo base_url();?>services"><img src="<?php echo asset_url();?>img/banner_4.jpg" ></a>
		</div>-->
		<div class="ms-slide slide-4" data-delay="6">  
			<div class="overlay-box"></div>
	      	<a href="<?php echo base_url();?>services" style="background:url(<?php echo asset_url();?>img/banner_2.jpg); background-size:cover; background-repeat:no-repeat; background-position:center;height:400px;"></a>
      </div>
			
		<div class="ms-slide slide-4" data-delay="6">
		  <div class="overlay-box"></div>
		  	<a href="<?php echo base_url();?>contact-us" style="background:url(<?php echo asset_url();?>img/banner_3.jpg); background-size:cover; background-repeat:no-repeat; background-position:center;height:400px;"></a>
		</div>
		<div class="ms-slide slide-4" data-delay="6">
		<div class="overlay-box"></div>
		<a href="<?php echo base_url();?>services" style="background:url(<?php echo asset_url();?>img/banner_4.jpg);  background-size:cover; background-repeat:no-repeat; background-position:center;height:400px;"></a>
		 	
		</div>
    <!-- end slide 2 -->
    <section class="property-search search-home">

    </section>
  </div>
 <section class="parallax-section62 login_indsec">
  <div class="section-overlay ">
  <div class="container">
    <div class="row">
      <div class="col-md-12 back-sf search_bgindex" style="background-color: inherit;">
        <ul class="tabs1">
		
          <li class="active"><a href="#Search-tab-1" target="_self" id="advanceid">Advance Search</a></li>
		  <li class=""><a href="#Search-tab-2" target="_self" id="normalid" style="display:none;">Search </a></li>
        </ul>
        <div class="tabs-content1 custom_tabc">
          <div id="Search-tab-1" class="tabs-panel2" style="display:none;">
		<form method="POST" action="advance-search" class="m-0">
		  <div class="col-md-12 padd0">
			<div class="col-sm-12 padd0">
			<!-- <label for="Advanced">Advanced Search for Business</label> -->
			</div>
              <div class="adv-s" style="display:block;">
			  <select class="popselect custom-s" id="type" name="type">
                  <option value="">Business Type</option>
                  <option value="All">All</option>
                  <option value="sell_a_business">Sell a Business</option>
				  <option value="joint_venture">Joint Venture</option>
				  <option value="start_up">Start-Up</option>
				  <option value="real_estate">Real Estate</option>

                </select>
  <select id="country_" name="country" onChange="getChangeStates('<?php echo base_url();?>', this.value)" class="custom-s"  data-error="Country" >
                          <option value="">Country</option>
<?php
                          foreach( $this->cachemethods->getCountryDetails() as $country ){
?>
                          <option value="<?php echo $country->id;?>" <?php if($country->id == $this->input->post('country')){echo 'selected=selected';}?>><?php echo $country->country_name; ?></option>
<?php
                          }
?>
                         </select>
               			<select class="custom-s" id="state" name="state" onChange="getChangeCities('<?php echo base_url();?>', this.value)"  data-error="State required">
                         <option value="">State</option>
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
                         <option value="">City</option>
						
<?php
                         foreach( $this->cachemethods->getCityByStateId($businessDetails[0]['location_state']) as $citydet ){
							 ?>
                         <option value="<?php echo $citydet->id;?>" <?php if($citydet->id == $this->input->post('city')){echo 'selected=selected';}?>><?php echo $citydet->city_name; ?></option>
					
				<?php		 }
?>						
                        </select>
                <Select class="custom-s popselect" id="category"  name="sector"  data-error="Listing Type required">
                          <option value="">Sector</option>
						                    <option value="All">All</option>

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
						  
                <button class="btn-ser">  <i class="fa fa-search"></i> </button>
              </div>
            </div>
		</form>


          </div>
         

          	<div id="Search-tab-2" class="tabs-panel1"  style="display: block;">
			  	<form method="POST" action="normal-search" class="m-0">
		            <div class="normal_searhinfo">			
						<!-- <div class="col-sm-12 padd0">
						<label for="Advanced">Normal Search</label>
						</div> -->
						<div class="form-group">
							<input type="text" class="form-control" name="search_key"  placeholder=" Search">
							<div class="search_btnsericon">
						  		<button class="btn-ser"> <i class="fa fa-search"></i> </button>
						    </div>
					  	</div> 
					</div>
				</form>
          	</div>
        


        </div>
        
      </div>
    </div>
  </div>
  </div>
</section>








  <!-- end of masterslider -->
 
  <!--end section-->
  <div class="clearfix"></div>
 
 <!--<?php //$this->load->view('featured-listing');?>-->
 
 <section class="feature_sec sec-padding section-light_">
    <div class="container">
      <div class="row slide-nextprev-but-1">
        <div class="col-xs-12 text-center">
          <h3 class="uppercase font-weight-5">Featured Listings </h3>
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
              <div class="feature-box-66 featuring_box">
                <div class="image-holder side-corner-tag c-list">
				<div class="feature_imgtag" style="">		
				<a href="<?php echo base_url();?>browse-sector-listing-details/<?php echo $dataFet['form_id'];?>/<?php echo $dataFet['business_type'];?>"> 
				
				<?php if($dataFet['path']==''){?>
				
				
				
				<img style="" class="img-responsive default_img" src="<?php echo base_url();?><?php echo $dataFet['sector_image'];?>">
				
				<?php }else{?>
				<img src="<?php echo base_url();?><?php echo $dataFet['path'];?>" alt="" class="img-responsive default_elseimg" style=""/>
				
				<?php }?>
				</a>
			
					
						
						
				</div>
				</div>
                <div class="text-box-inner box-text">
				<p class="ribbon_tag" style="">
						
						
						<span style="background-color:<?php echo $dataFet['tag_background_color'];?>;color:<?php echo $dataFet['tag_color'];?>"><?php echo $dataFet['tag_name'];?></span></p>
                  <h5 class="less-mar1 two-line"><a href="<?php echo base_url();?>browse-sector-listing-details/<?php echo $dataFet['form_id'];?>/<?php echo $dataFet['business_type'];?>"><?php echo $dataFet['key_headline'];?></a></h5>
                  <span><i class="fa fa-map-marker red-map" aria-hidden="true"></i><b> <?php echo $this->cachemethods->getCityNameById($dataFet['location_city'], $dataFet['location_state']);?></b>, <?php echo $this->cachemethods->getStateNameById( $dataFet['location_state'], $dataFet['location_country'] );?>, <?php echo $this->cachemethods->getCountryNameById($dataFet['location_country']);?></span>
                  <div class="clearfix"></div> 
                  <div class="property-info">
                    <div class="pull-left"><span>Sector : <?php echo $this->cachemethods->getCatNameByCId($dataFet['listing_category']);?></span></div>
                  </div>
                  <div class="property-info ">
                    <div class=" pull-left text-3 "><span><?php 
					
					if($dataFet['business_type']=='sell_a_business'){
					
					echo 'Asking Price : '.$dataFet['ask_price_currency'].' '.$dataFet['ask_price'].' '.$dataFet['ask_price_unit'];
					
					}
					else if($dataFet['business_type']=='jv_business'){
					
					echo 'Investment : '.$dataFet['investment_required_currency'].' '.$dataFet['reqd_investment'].' '.$dataFet['investment_required_unit'];
					
					}else if($dataFet['business_type']=='startup_business'){
					
					echo 'Investment : '.$dataFet['investmentRequiredCurr'].' '.dataFet['investment_required_price'].' '.dataFet['stunit'];
					
					}else{
					
					echo 'Asking Price : '.$dataFet['askCurrency'];?> <?php echo $dataFet['askPrice']; 
					
					}?>
						</span></div>
					<div class="property-info business_typetext m-b-10">
                    <div class="pull-left"><span>
					<?php 
					
					if($dataFet['business_type']=='sell_a_business'){
					
					echo 'Business For Sale';
					}
					else if($dataFet['business_type']=='jv_business'){
					
					echo 'Joint Venture';
					
					}else if($dataFet['business_type']=='startup_business'){
					
					echo 'Start Up';
					
					}else{
					
					echo 'Real Estate';
					
					}?>

                    	</span></div>
                  </div>
					<!--<div><button type="submit" class="savebtn">View More</button></div>-->
                    <div class="col-md-12 padd0 .mandate_textcbox">
					<?php if($dataFet['form_type']=='Mandate'){?>
					<div class="col-md-5 mandate-text padd0 mandate_textc">
					<h5><!--<img src="<?php echo base_url();?>/assets/images/mandate.png"/>-->
					<i class="fa fa-star"></i> Mandated
					</h5>
					</div>
					<?php }?>
					<div class="col-md-7 padd0 dataright" style="margin-top:4px">
					<a href="<?php echo base_url();?>browse-sector-listing-details/<?php echo $dataFet['form_id'];?>/<?php echo $dataFet['business_type'];?>" class="saveButton">View More</a>
					</div>
					</div>
					
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
      <div class="container sec-tpadding-2  brose-home">
        <div class="row">
		<div class="col-xs-12 text-center">
          <h3 class="uppercase font-weight-5" style="color:#fff;">BROWSE BY SECTOR </h3>
          <div class="title-line-4 green align-center brose-gape"></div>
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
				<div class="col-md-12 brose-icone ">
				<p><img class="img-responsive" src="<?php echo base_url();?><?php echo $dataSector['sector_image'];?>"></p>
				</div>
				<div class="col-md-12 text-center bmargin">				
				 <a href="browse-sector-list/<?php echo $dataSector['listing_category'];?>/Desc/5"><h5 class="text-white s-count"><strong><?php echo $this->cachemethods->getCatNameByCId($dataSector['listing_category']);?></strong></h5>
					<!--div class="divider-line solid light less-width-8 align-center opacity-5"></div-->
					
					<h3 class="uppercase text-white brose-cont">( <?php echo $dataSector['industryCount'];?> )</h3>
					</a>
				  </div>
				  </div>
			 <?php }?>
				
				
			  </div>
			  <div class="col-md-12">
			  <a href="Browse-sector" class="browse_btn"><button class="btn btn-sm mt-40 pull-right">View more</button></a>
			  </div>
			
			
			</div>
		
		  </div>

        </div>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
 <section class="parallax-section-48">
    <div class="section-overlay bg-opacity-7" style="background-color: rgba(0, 0, 0, 0.38); padding: 30px 0px;">
    <div class="container">
      <div class="row">
        
		<div class="col-md-8 padd0">
		<div class="col-xs-12 text-center">
          <h3 class="uppercase font-weight-5" style="color: #fff;">Buy Invest Zone</h3>
          <div style="background-color: #fff;" class="title-line-4 green align-center"></div>
        </div>
		
		
		
        <div class="col-md-4 text-center">
          <div class="feature-box-65 bmargin">
		  
            <div class="iconbox-xtiny  round box-center-th investzone_fontc"><i class="fa fa-pencil-square-o fa-2x" ></i></div>
			
            <div class="col-md-12 padd0  text-center" style="color: #fff;">
              <h5 class="uppercase font-weight-4"><a style="color: #fff;" href="buy-a-business-profile/no/no">Post your requirement </a></h5>
             <p> Consectetuer adipiscing elit sit amet Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
        <!--end item-->

        <div class="col-md-4 text-center">
          <div class="feature-box-65 bmargin">
            <div class="iconbox-xtiny  round box-center-th investzone_fontc"><i class="fa fa-briefcase fa-2x"></i></div>
            <div class="col-md-12 padd0  text-center" style="color: #fff;">
              <h5 class="uppercase font-weight-4"><a style="color: #fff;" href="<?php echo base_url().'index.php/home/Business'?>?id=<?php echo $dataFet["form_id"];?>&list=Featured">Trusted businesses</a> </h5>
              <p> Consectetuer adipiscing elit sit amet Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
        <!--end item-->

        <div class="col-md-4 text-center">
          <div class="feature-box-65 bmargin">   
		  
            <div class="iconbox-xtiny  round box-center-th investzone_fontc"><i class="fa fa-calculator fa-2x"></i></div>
            <div class="col-md-12 padd0  text-center" style="color: #fff;">
              <h5 class="uppercase font-weight-4"><a style="color: #fff;" href="contact-us">Investors pool<a> </h5>
              <p style="color: #fff;"> Consectetuer adipiscing elit sit amet Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
        <!--end item-->
		</div>
    

        <div class="col-md-4  frame" style=" ">
          <div class="feature-box-65 bmargin">
           
            <div class="text-box-right">
              <h5 class="buyer_title" style="" class="uppercase font-weight-4"> Buyer-Investor Spotlight </h5>
				
               
  <div class="marquee_box">
   <div class="marquee_scroll marc-home" >
     	<ul>
			<?php foreach($getBuyBusiness as $listdata){ ?>
			
			<li><i style="color:#02008c;" class="fa fa-caret-right"></i> <a style="color:#02008c;" target="_blank" href="<?php echo base_url();?>browse-buyer-listing/<?php echo $listdata['buy_invest_in']; ?>">
			<b style="font-weight: bold; text-transform: uppercase; font-size: 14px;"><?php echo $listdata['key_requirement']; ?></b>
			<p style="margin:0px;"><span style="color: #02008c; font-weight: bold;">Location</span> :- <?php 	echo $this->cachemethods->getCountryNameById($listdata['country']);?></br></p>
			<p style="margin:0px;"><span style="color: #02008c; font-weight: bold;">Investment Range</span> :- <?php echo $listdata['investment_min_price_currency'].' '.$listdata['investment_min'].' '.$listdata['investment_min_price_unit'].'-'.$listdata['investment_max_price_currency'].' '.$listdata['investment_max'].' '.$listdata['investment_max_price_unit']; ?></p>
			<p style="margin:0px;"><span style="color: #02008c; font-weight: bold;">Sector</span> :- <?php echo $this->cachemethods->getCatNameByCId($listdata['listing_category']);?></br></p> </a>  
			<!--<p style="margin:0px;"><span style="color: #fff; font-weight: bold;">Contact Buyer</span></p>-->
			</li>
			<?php }?>				
		</ul>
   	</div>
  </div> 

            </div>
			 </div>
			  <p style="color: #fff;
    background: #ff6b24;
    padding: 4px;
    width: 93px;
    margin: auto;
    margin-top: 30px;position: relative; z-index: 9;"> 
	<a style="color:#fff;" target="_blank"  href="<?php echo base_url();?>browse-buyer-listing">View All</a></p>	
          </div>
		 
        </div>
        <!--end item-->

      </div>
    </div>
	</div>
  </section>
  <div class="clearfix"></div>
  <!--  <section class="sec-padding section-light">
    <div class="container">
      <div class="row slide-nextprev-but-1">
        <div class="col-xs-12 text-center">
          <h3 class="uppercase font-weight-5">Recent Listing </h3>
          <div class="title-line-4 green align-center"></div>
        </div>
        <div class="clearfix"></div>
		
        <div>
		
		 
 <?php  
		 
		
			
		foreach($getNewListing as $NewListing){
			
			
			
?>  
			
		  
            <div class="col-md-3">
			
			<input type="hidden" name="frm_id" id="frm_id<?php echo $i; ?>" value="<?php echo $NewListing['form_id'];?>" />
			<input type="hidden" name="business_type" id="business_type<?php echo $i; ?>" value="<?php echo $NewListing['business_type'];?>" />
              <div class="feature-box-66 box-text">
			  <div class="col-md-3 padd0">
                <div class="image-holder image-bord-2 side-corner-tag  new-list-product">
						
				<a href="<?php echo base_url();?>browse-sector-listing-details/<?php echo $NewListing['form_id'];?>/<?php echo $NewListing['business_type'];?>"> 
				
				<?php if($NewListing['path']==''){?>
				
				
				
				<img  class="img-responsive" src="<?php echo base_url();?><?php echo $NewListing['sector_image'];?>">
				
				<?php }else{?>
				<img src="<?php echo base_url();?><?php echo $NewListing['path'];?>" alt="" class="img-responsive" />
				
				<?php }?>
				
				</a>
			
						
						<p style="font-size: 10px; font-weight: 600;"><span style="background-color:<?php echo $NewListing['tag_background_color'];?>;color:<?php echo $NewListing['tag_color'];?>"><?php echo $NewListing['tag_name'];?></span></p>
						
				</div>
				</div>
				
				<div class="col-md-9">
				<div class="property-info"> 
                    <div class="pull-left"><span class="col-md-12 padd0">Sector : <?php echo $this->cachemethods->getCatNameByCId($NewListing['listing_category']);?></span></div>
                  </div>
				<div class="col-md-12  pull-left text-3 m-b-10"><span><?php 
					
					if($NewListing['business_type']=='sell_a_business'){
					
					echo 'Asking Price : '.$NewListing['ask_price_currency'];?> <?php echo $NewListing['ask_price'];
					
					}
					else if($NewListing['business_type']=='jv_business'){
					
					echo 'Investment : '.$NewListing['investment_required_currency'];?> <?php echo $NewListing['reqd_investment'];
					
					}else if($NewListing['business_type']=='startup_business'){
					
					echo 'Investment : '.$NewListing['investment_required_currency'];?> <?php echo $NewListing['investment_required_price'];
					
					}else{
					
					echo 'Asking Price : '.$NewListing['askCurrency'];?> <?php echo $NewListing['askPrice'];
					
					}?>
						</span></div>  
				  
				</div>
				
				
				
                <div class="text-box-inner "> 
                  <h5 class="less-mar1 "><a href="<?php echo base_url();?>browse-sector-listing-details/<?php echo $NewListing['form_id'];?>/<?php echo $NewListing['business_type'];?>"><?php echo $NewListing['key_headline'];?></a></h5>
                 <h3 style="font-size: 13px;
    margin: 0px;
    line-height: 20px;
    overflow: hidden;
    height: 40px; margin-bottom: 15px;"> <span><i class="fa fa-map-marker red-map" aria-hidden="true"></i><b> <?php echo $this->cachemethods->getCityNameById($NewListing['location_city'], $NewListing['location_state']);?></b>, <?php echo $this->cachemethods->getStateNameById( $NewListing['location_state'], $NewListing['location_country'] );?>, <?php echo $this->cachemethods->getCountryNameById($NewListing['location_country']);?></span></h3>
                  <div class="clearfix"></div> 
                  
                  <div class="property-info ">
                    
					
                      <div class="col-md-12 padd0">
					<?php if($NewListing['form_type']=='Mandate'){?>
					<div class="col-md-5 mandate-text padd0">
				<h5><img src="<?php echo base_url();?>/assets/images/mandate.png"/></h5>
					</div>
					<?php }?>
					<div class="col-md-7 padd0 dataright">
					<a href="<?php echo base_url();?>browse-sector-listing-details/<?php echo $NewListing['form_id'];?>/<?php echo $NewListing['business_type'];?>" class="saveButton">View More</a>
					</div>
					</div>
					
                  </div> 
                </div>
              </div>
			 
            </div>
		
           
        

<?php }
		
	
		
?>
        </div>
		 
         

          
        </div>
       
        
      </div>
    </div>
  </section>-->
  <style>
  .ven-main{
	  padding-right:0%;
    margin-bottom: 15px;
  }
  .text-box-right.more-padding-4 {
    padding: 0px 0px 0px 155px;
}
.venture-text h4 {
    margin-bottom: 5px !important;
    font-size: 16px;
    color: #000;
    line-height: 18px;
    height: 34px;
    /* background-color: #ddd; */
    overflow: hidden;
}
  </style>
  
  <section class="sec-padding">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-center">
          <h3 class="uppercase font-weight-5">Recent Listings </h3>
          <div class="title-line-4 green align-center"></div>
        </div>
        <div class="clearfix"></div>
		
		<?php foreach($getNewListing as $NewListing){?>
        <div class="col-md-6 col-sm-6 ven-main">
          <div class="feature-box22 bmargin  list_box">
            <div class="iconbox-xlarge">
              <!--div class="inner-box"><span class="icon-screen-desktop"></span></div-->
               <a href="<?php echo base_url();?>browse-sector-listing-details/<?php echo $NewListing['form_id'];?>/<?php echo $NewListing['business_type'];?>"> 
				
				<?php if($NewListing['path']==''){?>
				
				
				
				<img style="    background-color: #ddd; padding:16px; border-radius: 0%;  height: 80%; width: 100%; "  class="img-responsive" src="<?php echo base_url();?><?php echo $NewListing['sector_image'];?>">
				
				<?php }else{?>
				<img style="    height: 80%; width: 100%; "  src="<?php echo base_url();?><?php echo $NewListing['path'];?>" alt="" class="img-responsive" />
				
				<?php }?>
				
				</a>
				
				 <div class="col-md-12 padd0">
					<?php if($NewListing['form_type']=='Mandate'){?>
					<div class="col-md-5 mandate-text padd0 mandate_textc">
				<h5><!-- <img src="<?php echo base_url();?>/assets/images/mandate.png" class="manclass"/> --><i class="fa fa-star"></i> Mandated</h5>
					</div>
					<?php }?>
                </div>
				
			</div>
            <div class="text-box-right more-padding-4 venture-text">
              <h4> <a href="<?php echo base_url();?>browse-sector-listing-details/<?php echo $NewListing['form_id'];?>/<?php echo $NewListing['business_type'];?>"> <?php echo $NewListing['key_headline'];?></a></h4>
              <!--<p><?php echo $NewListing['description'];?></p>-->
               <span class="loc_map"><i class="fa fa-map-marker red-map" aria-hidden="true"></i><b> </b><?php echo $this->cachemethods->getCityNameById($NewListing['location_city'], $NewListing['location_state']);?></b>, <?php echo $this->cachemethods->getStateNameById( $NewListing['location_state'], $NewListing['location_country'] );?>, <?php echo $this->cachemethods->getCountryNameById($NewListing['location_country']);?></span>
			  <div class="property-info">
                    <div class="pull-left"><span>Sector : <?php echo $this->cachemethods->getCatNameByCId($NewListing['listing_category']);?></span></div>
                  </div>
              <div class="divider-line2"></div>
              			<div class="property-info business_typetext ">
                    <div class="pull-left"><span>
					<?php 
					
					if($dataFet['business_type']=='sell_a_business'){
					
					echo 'Business For Sale';
					}
					else if($dataFet['business_type']=='jv_business'){
					
					echo 'Joint Venture';
					
					}else if($dataFet['business_type']=='startup_business'){
					
					echo 'Start Up Business';
					
					}else{
					
					echo 'Real Estate';
					
					}?>

                    	</span></div>
						<div class="pull-right"><h6 style="    margin: 0px; font-weight:400;font-size:13px;" class="text-green-3"><?php 
					
					if($NewListing['business_type']=='sell_a_business'){
					
					echo 'Asking Price : '.$NewListing['ask_price_currency'].' '.$NewListing['ask_price'].' '.$NewListing['ask_price_unit'];
					
					}
					else if($NewListing['business_type']=='jv_business'){
					
					echo 'Investment : '.$NewListing['investment_required_currency'].' '.$NewListing['reqd_investment'].' '.$NewListing['investment_required_unit'];
					
					}else if($NewListing['business_type']=='startup_business'){
					
					echo 'Investment : '.$NewListing['investment_required_currency'];?> <?php echo $NewListing['investment_required_price'];
					
					}else{
					
					echo 'Asking Price : '.$NewListing['askCurrency'];?> <?php echo $NewListing['askPrice'];
					
					}?></h6></div>
                  </div>
             </div>
				<p class="ribbon_tag2" style="">	
					<span style="background-color:#f00;color:#fff">New</span>
				</p>
          </div>
        </div>
		<?php }?>
        <!--end item -->
       
        <!--end item -->
        
       
        <!--end item -->
        <div class="col-md-12" align="right"> 
			 
			  <a class="browse_btn"  href="<?php echo base_url();?>browse-buyer-listing"><button class="btn btn-sm mt-40 pull-right" style="cursor:pointer;box-shadow:none;">View more</button></a>
			  </div>
      </div>
    </div>
  </section>
  

  <div class="clearfix"></div>
   <section class="sec-padding ourser_sec">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-center">
          <h3 class="uppercase font-weight-5">Our Services </h3>
          <div class="title-line-4 green align-center"></div>
        </div>
		
		<div class="col-md-4 text-center">
          <div class="feature-box-65 bmargin">   
		  
            <div class="iconbox-xtiny  round box-center-th our_simg"><img src="<?php echo base_url();?>assets/images/s1.png"></div>
            <div class="col-md-12 padd0  text-center">
              <h5 class="uppercase font-weight-4">Business Valuation</h5>
             
            </div>
          </div>
        </div>
		
		<div class="col-md-4 text-center">
          <div class="feature-box-65 bmargin">   
		  
            <div class="iconbox-xtiny  round box-center-th our_simg"><img src="<?php echo base_url();?>assets/images/s2.png"></div>
            <div class="col-md-12 padd0  text-center">
              <h5 class="uppercase font-weight-4">Business Consulting</h5>
             
            </div>
          </div>
        </div>
		
		
        
        <!--end item-->
		<div class="col-md-4 text-center">
          <div class="feature-box-65 bmargin">   
		  
            <div class="iconbox-xtiny  round box-center-th our_simg"><img src="<?php echo base_url();?>assets/images/s3.png"></div>
            <div class="col-md-12 padd0  text-center">
              <h5 class="uppercase font-weight-4">Business Plan</h5>
             
            </div>
          </div>
        </div>
       
        <!--end item-->
			<div class="col-md-4 text-center">
          <div class="feature-box-65 bmargin">   
		  
            <div class="iconbox-xtiny  round box-center-th our_simg"><img src="<?php echo base_url();?>assets/images/s4.png"></div>
            <div class="col-md-12 padd0  text-center">
              <h5 class="uppercase font-weight-4">Bank Settlement</h5>
             
            </div>
          </div>
        </div>
       
        <!--end item-->
		
		<div class="col-md-4 text-center">
          <div class="feature-box-65 bmargin">   
		  
            <div class="iconbox-xtiny  round box-center-th our_simg"><img src="<?php echo base_url();?>assets/images/s5.png"></div>
            <div class="col-md-12 padd0  text-center">
              <h5 class="uppercase font-weight-4">Transaction Advisory</h5>
             
            </div>
          </div>
        </div>

       
        <!--end item-->
			<div class="col-md-4 text-center">
          <div class="feature-box-65 bmargin">   
		  
            <div class="iconbox-xtiny  round box-center-th our_simg"><img src="<?php echo base_url();?>assets/images/s6.png"></div>
            <div class="col-md-12 padd0  text-center">
              <h5 class="uppercase font-weight-4">Due Diligence</h5>
             
            </div>
          </div>
        </div>
       
        <!--end item-->

        
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
            <h4 class="text-white uppercase font-weight-4 less-mar1">Get in touch for a confidential discussion about your business acquisition, exit or fundraising strategy.</h4>
            <h6 class="text-green-3 uppercase"><br/>
              <a href="#"><button type="submit" class="btn btn-default"><a href="<?php echo base_url();?>/contact-us" target="_blank">Book Your Appointment</a></button></a>
            </h6>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--end section-->

  <!-- end section -->
  <div class="clearfix"></div>
  
  

  
  <section class="sec-padding" style="background-color: #f1f1f1;">
    <div class="container">
      <div class="row">
	  <div class="col-md-1"></div>
        <div class="col-md-10 slide-controls-color-4">
        
		  <div class="col-xs-12 text-center">
          <h3 class="uppercase font-weight-5">TESTIMONIALS </h3>
          <div class="title-line-4 green align-center"></div>
        </div>
         
          <div class="clearfix"></div>
          <div id="owl-demo3" class="owl-demo7 owl-carousel">
		  <?php foreach($getTestimonials as $dataTest){
			  
			  //print_r($dataTest);
			  
			  ?>
            <div class="item">
			<div class=' row'>
                                    <div class=' col-md-6'>
              <div class="feature-box5 two text-left "> 
			  <div style="    top: 119px;" class="arrow-down"></div>
                <p><?php echo $dataTest['content'];?></p>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12 text-left nopadding">
                <div class="iconbox-medium round left overflow-hidden"><img src="<?php echo base_url();?><?php echo $dataTest['image'];?>" alt=""/></div>
                <h5 class="less-mar1 "><?php echo $dataTest['name'];?></h5>
                <span><?php echo $dataTest['company_name'];?> - <?php echo $dataTest['position'];?></span> </div>

              <!--end item-->  

            </div>
           <?php }?>
          </div>
		  </div>
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