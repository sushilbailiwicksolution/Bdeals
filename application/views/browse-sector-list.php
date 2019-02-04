<?php 
//echo $this->uri->segment(3);

$userid=$this->session->userdata('userid');

$msgToDis = $this->session->flashdata('msg');

//print_r($businessDetails);

//print_r($_REQUEST);


?>
<section>
 <div class="header-inner two inner_pagebanner">
   <div class="inner ">
   <div class="container">
    <div class="row" style="margin-top: 10px;">
	<?php foreach($headerSectorList as $list){?>
   <div class="col-sm-3">
   <div class="col-sm-12 b-sectore-4">
   <h3><a href="#"><?php echo ucwords($list['key_headline']);?></a></h3>
    <span><i class="fa fa-map-marker red-map" aria-hidden="true"></i><b> <?php echo $this->cachemethods->getCityNameById($list['location_city'], $list['location_state']);?></b>, <?php echo $this->cachemethods->getStateNameById( $list['location_state'], $list['location_country'] );?>, <?php echo $this->cachemethods->getCountryNameById($list['location_country']);?></span>
                  <div class="clearfix"></div> 
                  <div class="property-info">
                    <div class="pull-left"><span>Sector : <?php echo $this->cachemethods->getCatNameByCId($list['listing_category']);?></span></div>
                  </div>
                  <div class="property-info ">
                    <div class=" pull-left text-3 "><span><?php 
					
					if($list['business_type']=='sell_a_business'){
					
					echo 'Asking Price : '.$list['ask_price_currency'].' '.$list['ask_price'].' '.$list['ask_price_unit'];
					
					}
					else if($list['business_type']=='jv_business'){
					
					echo 'Investment : '.$list['investment_required_currency'].' '.$list['reqd_investment'].' '.$list['investment_required_unit'];
					
					}else if($list['business_type']=='startup_business'){
					
					echo 'Investment : '.$list['investmentRequiredCurr'].' '.$list['investment_required_price'].' '.$list['stunit'];
					
					}else{
					
					echo 'Asking Price : '.$list['askCurrency'];?> <?php echo $list['askPrice']; 
					
					}?>
						</span></div>
					<div class="property-info business_typetext m-b-10">
                    <div class="pull-left"><span>
					<?php 
					
					if($list['business_type']=='sell_a_business'){
					
					echo 'Business For Sale';
					}
					else if($list['business_type']=='jv_business'){
					
					echo 'Joint Venture';
					
					}else if($list['business_type']=='startup_business'){
					
					echo 'Start Up';
					
					}else{
					
					echo 'Real Estate';
					
					}?>

                    	</span>
						</div>
						</div>
						</div>
   </div>
   </div>
	<?php }?>
   
   </div>
   </div>
   </div>
   <!-- <div class="overlay bg-opacity-5"></div>
   <img src="<?php echo asset_url();?>images/header-img.jpg" alt="" class="img-responsive" /> -->
 </div>
</section>

<section>
<div class="container" style="">
  <div class="row">
  <div class="col-md-12">
 <form method="POST" action="<?php echo base_url();?>advance-search" class="m-0">
   <div class="col-sm-12 filter-area-n">
   <div class="col-sm-12">
   <!-- <h4>Sort By</h4> -->
   </div>
  <!-- <div class="col-sm-3">
   <select class="form-control catfilter" name="catfilter"> 
		<option value="1">All</option>
        <option value="2">Category</option>
        <option value="3">Price/ investment</option>
        <option value="4">Location</option>
        <option value="5">Flag options</option>
        <option value="6">Age of listing</option>
    </select>
   </div>-->
   
   <div class="col-md-2">
		<select id="country4" name="country" onChange="getChangeStates('<?php echo base_url();?>', this.value)" class="custom-s form-control"  data-error="Country" >
                          <option value="">Country</option>
<?php
                          foreach( $this->cachemethods->getCountryDetails() as $country ){
?>
                          <option value="<?php echo $country->id;?>" <?php if($country->id == $this->input->post('country')){echo 'selected=selected';}?>><?php echo $country->country_name; ?></option>
<?php
                          }
?>
                         </select>
</div>
<div class="col-md-2">	 
		<select class="custom-s form-control" id="state" name="State" onChange="getChangeCities('<?php echo base_url();?>', this.value)"  data-error="State required">
                         <option value="">State</option>
<?php

                          foreach( $this->cachemethods->getStateByCountry($businessDetails[0]['location_country']) as $statedet ){
?>
          <option value="<?php echo $statedet->id;?>" <?php if($statedet->id == $this->input->post('State')){
							  
							  echo 'selected=selected';} ?>><?php echo $statedet->state_name; ?></option>
<?php
                         }

?>							
			</select>
			</div>
	<div class="col-md-2">
                <select class="custom-s form-control search_city" id="city" name="city"  data-error="City required">
                         <option value="">City</option>
						
<?php
                         foreach( $this->cachemethods->getCityByStateId($businessDetails[0]['location_state']) as $citydet ){
							 ?>
                         <option value="<?php echo $citydet->id;?>" <?php if($citydet->id == $this->input->post('city')){echo 'selected=selected';}?>><?php echo $citydet->city_name; ?></option>
					
				<?php		 }
?>						
                        </select>
						</div>		
   <div class="col-md-2 CategoryidSort">
   <select class="form-control" name="Categoryid"> 
		 <option value="">Category</option>
		  <option value="All">All</option>
<?php
                          foreach( $this->cachemethods->getSectorDetails() as $Sector ){
?>
                          <option value="<?php echo $Sector->id;?>" <?php if($Sector->id == $this->input->post('sector')){echo 'selected=selected';}?>><?php echo $Sector->sector_name; ?></option>
<?php
                          }
?>						
    </select>
   </div>
    <div class="col-md-2 PriceRange">
   <select class="form-control" name="Price_Range"> 
		 <option value="">Price / Investment </option>
 
<?php
                            foreach( unserialize(PRICESFILTER) as $priceUnitValue=>$priceUnitName ){
?>
                            <option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $this->input->post('Price_Range')){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
                            }
?>			
    </select>
   </div>
   <!-- <div class="col-md-2">
   <select class="form-control" name="AgeFilter"> 
		 <option value="">Age Filter</option>
		 <option value="7">Last 7 Days</option>
		 <option value="15">Last 15 Days</option>
		 <option value="30">Last 30 Days</option>
		 <option value="90">Last 90 Days</option>
		
 
    </select>
   </div> -->
   <div class="col-md-1">
		<button class="savebtn search_btn">Search</button>
   </div>
   </div>
	   
  </form> 
  
   </div>
   </div>
   </div>

</section>


<!-- end header inner -->
<div class="clearfix"></div>

<section class="sec-padding paddbott">
 <div class="container">
  <div class="row">
   <div class="col-sm-12"><div align="center"><h4><?php echo $this->cachemethods->getCatNameByCId($getSectorName[0]['listing_category']);?></h4></div></div>
   <div class="col-sm-12">
    <div class="col-md-12  padd0">
     <!--<div class="col-md-5">
      <div class="form-group">
       <label for="inputEmail3" class="col-sm-3 control-label">Sort by:</label>
       <div class="col-sm-9">
	<select class="form-control" id="sortby" name="sortby" onChange="changeSorting(this.value)">
<?php
         foreach( unserialize(ITEM_SORT_BY_OPTIONS) as $sortValue => $sortName ){
?>
	<option value="<?php echo $sortValue;?>" <?php if($this->uri->segment(3)== $sortValue ){echo 'selected="selected"';}?>><?php echo $sortName;?></option>
<?php
	 }
?>
        </select>
       </div>
      </div>
     </div>-->
				
     
    </div>

<?php
$num = 0;
  
	  foreach($getSectorList as $searchData){
		  
		
		  
		$file = base_url().$searchData['path'];
	
?>
<div class="col-md-12 padd0">  
<form name="lb_uprof<?php echo $i; ?>" method="post" action="../browse-sector-listing-details" method="post" data-toggle="validator" role="form" class="was-validated">
<input type="hidden" name="frm_id" id="frm_id" value="<?php echo $searchData['form_id'];?>" />
<input type="hidden" name="business_type" id="business_type" value="<?php echo $searchData['business_type'];?>" />

    <div class="item-listing bg-grey searchlist searchlist_box" style="margin-top:0px;">
	<!-- <p style="font-size: 10px; font-weight: 600;     font-size: 10px; font-weight: 600; position: absolute;
      top: 8px; left: 9px; z-index: 10;">
						<img src="<?php echo base_url();?>assets/img/new-ribb.png"></p> -->
						<p class="ribbon_tag" style="">
						<span style="background-color:#f00;color:#fff">New</span></p>
						
						
						
						
     <div class="col-md-3 padd0">
 <?php if($searchData['path']==''){?>
				
				
				
				<img style="height:175px;width:263px;     height: 125px;
    width: 125px; background-color: #ddd; padding: 20px; border: solid 2px #ddd; border-radius: 50%;
    margin: auto; margin: 24px auto;" class="img-responsive" src="<?php echo base_url();?><?php echo $searchData['sector_image'];?>">
				
				<?php }else{?>
				<img src="<?php echo base_url();?><?php echo $searchData['path'];?>" alt="" class="img-responsive" style="height:160px;width:260px;"/>
				
				<?php }?>
				<div class="col-md-12 padd0"">
				<?php //if($searchData['form_type']=='Mandate'){?>
					<div class="col-md-5 mandate-text padd0 mandate_textc">
					<h5><!--<img src="<?php echo base_url();?>/assets/images/mandate.png"/>-->
					<i class="fa fa-star"></i> Mandated
					</h5>
					</div>
					<?php //}?>
				</div>
     </div>
    <div class="col-md-9">
     <div class="col-md-12 listing-title bsectore_listt padd0">							
      <h3><a target="_blank" href="<?php echo base_url();?>browse-sector-listing-details/<?php echo $searchData['form_id'];?>/<?php echo $searchData['business_type'];?>"><?php echo ucwords($searchData['key_headline']);?></a></h3> 
    <!--  <p> <span><b>Asking Price:</b> <?php if($searchData['business_type']=='sell_a_business'){
		  
				echo $searchData['ask_price'];
		  
		  }if($searchData['business_type']=='jv_business'){
			  
			  echo $searchData['askPrice'];
			  
		}if($searchData['business_type']=='jv_business'){
			  
			  echo $searchData['askPrice'];
			  
		}?> Crs</span> <span><b>Sales Revenue: </b><?php if($searchData['business_type']=='sell_a_business'){
		  
				echo $searchData['latest_revenu_currency'] .' '.$searchData['latest_revenu'];
		  
		  }if($searchData['business_type']=='jv_business'){
			  
			  echo $searchData['latestRevenu_currency'] .' '.$searchData['latestRrevenu'];
			  
		}?></span></p>-->
	</div>
	<div class="col-md-4 padd0">		
      <p class="loc_map"> <span style="margin-right: 8px;"><i class="fa fa-map-marker red-map" aria-hidden="true"></i></span><?php echo $this->cachemethods->getCountryNameById($searchData['location_country']);?>, <?php echo $this->cachemethods->getStateNameById( $searchData['location_state'], $searchData['location_country'] );?>, <?php echo $this->cachemethods->getCityNameById($searchData['location_city'], $searchData['location_state']);?></p>
     <div class="col-md-12 padd0">
					<div class="pull-left list-askprice">
					<h6 style="margin: 0px;"><span>Category : </span> <?php
			if($searchData['listing_category']=='' || $searchData['listing_category']=='Other'){
				
				echo $searchData['listing_category_other'];
			
			}else{
			echo $this->cachemethods->getCatNameByCId($searchData['listing_category']);
			}
			?></h6>
					</div>
					</div>
					
	  <div class="col-md-12 padd0">
	   <div class="col-md-12 padd0">
	  		<div class="pull-left list-askprice"><h6 style="margin: 0px;" class="text-green-3"><?php 
					
					if($searchData['business_type']=='sell_a_business'){
					
					echo '<span>Asking Price :</span> '.$searchData['ask_price_currency'].' '.$searchData['ask_price'].' '.$searchData['ask_price_unit'];
					
					}
					else if($searchData['business_type']=='jv_business'){
					
					echo '<span>Investment :</span> '.$searchData['investment_required_currency'].' '.$searchData['reqd_investment'].' '.$searchData['investment_required_unit'];
					
					}else if($searchData['business_type']=='startup_business'){
					
					echo '<span>Investment :</span> '.$searchData['investment_required_currency'];?> <?php echo $searchData['investment_required_price'];
					
					}else{
					
					echo '<span>Asking Price :</span> '.$searchData['askCurrency'];?> <?php echo $searchData['askPrice'];
					
					}?></h6></div>
					</div>
					

					<div class="col-md-12 padd0">
					<div class="pull-left list-askprice">
					<h6 style="margin: 0px;"><span>Business Type : </span> <?php 
					
					if($searchData['business_type']=='sell_a_business'){
					
					echo 'Business For Sale';
					}
					else if($searchData['business_type']=='jv_business'){
					
					echo 'Joint Venture';
					
					}else if($searchData['business_type']=='startup_business'){
					
					echo 'Start Up';
					
					}else{
					
					echo 'Real Estate';
					
					}?></h6>
					</div>
					</div>
	  </div>
     </div>


     <div class="col-md-6 padd0">
     	<p class="listing_enq_disc"><?php if( strlen( $searchData['description'] ) > 195 ){echo substr($searchData['description'], 0, 195).' ....';}else{echo $searchData['description'];} ?></p>
		<a target="_blank" href="<?php echo base_url();?>browse-sector-listing-details/<?php echo $searchData['form_id'];?>/<?php echo $searchData['business_type'];?>" class="saveButton bs_viewbtn"><b>View More</b></a>
     </div>

     <div class="col-md-2 padd0">
      <div class="listing-enquiry-sec padd0 pull-right listing_enq_discbtn">
       <ul>
	   
      <!--  <li style="width:135px;"><a style="background: #00aced;" target="_blank" href="<?php echo base_url();?>browse-sector-listing-details/<?php echo $searchData['form_id'];?>/<?php echo $searchData['business_type'];?>" class="saveButton">
		<i style="color:#fff;" class="fa fa-heart" aria-hidden="true"></i> Add to favourite</a></li>-->
		
		
			<div class="col-md-12 bmargin liketbl list_enqlikebtn">
			<div id="favourite-<?php echo $searchData['form_id']; ?>" >
			
			<?php
			
			
			if($searchData['add_to_favorite']=='0') {
			$str_like = "like";
			
			$str_title = "Add to favourite";
			}else{
				
			$str_like = "unlike";
			
			$str_title = "Remove from favourite";	
				
			}
			?>
			<div class="btn-likes limg_btn">
				<input type="button" title="<?php echo ucwords($str_title); ?>" class="<?php echo $str_like; ?>" onClick="Favourite(<?php echo $searchData['form_id'];?>,'<?php echo $str_like; ?>')" />
			</div>
			<div class="label-likes limg_btn" style="color:#fff;"><?php if($searchData['add_to_favorite']=='1') { 
				echo "<p style='color: #fff;
			    margin-top: -33px;
			    margin-left: 25px;
			    font-size: 15px;'></p>"; }else{echo "";} ?>
    		</div>
			
			</div>
			</div>
			
		
		
		 <li style="width:100%; "><a style="background: #ff6b24;" data-toggle="modal" data-target="#contactseller" class="saveButton">Contact Seller</a>
		 <h4><?php if( $msgToDis != null ){echo '<script>
		 swal("Success","Successfully Submitted", "success");	
		 </script>';}else if($contactFromResponse=='Kindly Click Above to Contact'){ //echo 'Kindly Click Above to Contact';
		 }
		 else if($contactFromResponse=='Already existing user, Kindly login first to fill the form'){echo 'Already existing user, Kindly login first to fill the form';}else{
					//echo 'There is some technical problem, Kindly try again.';
					} ?></h4>
		 </li>
		 
       </ul>
      </div>
      </div>
	</div>
    </div>
</form>
</div>
	<!-- Modal -->
<div class="modal fade" id="contactseller" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Contact Seller <?php if($userid==''){ echo "/ Registration Form";}?></h4>
      </div>
      <div class="modal-body">
		<?php //echo 'aaaaaaaaaaaaaaaaaaaaaaaaaa '.$businessData[0]['business_type']; ?>
       <form name="lb_uprof" action="<?php echo base_url().''.'customer-listing-contact-form';?>" method="post" data-toggle="validator" role="form" class="was-validated">
	   <input type="hidden" name="frm_id" id="frm_id" value="<?php echo $searchData['form_id'];?>" />
	   <input type="hidden" name="contact_to_customer_id" id="contact_to_customer_id" value="<?php echo $searchData['customer_id'];?>" />
	   <input type="hidden" name="contact_from_customer_id" id="contact_from_customer_id" value="<?php echo $searchData['customer_id'];?>" />
		<input type="hidden" name="business_type" id="business_type" value="<?php echo $searchData['business_type'];?>" />
		<input type="hidden" name="business_url" id="business_url" value="<?php echo $this->uri->segment(2);?>/<?php echo $this->uri->segment(3);?>/<?php echo $this->uri->segment(4);?>"/>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Name <span>*</span></label>
                                <input type="text" name="name" id="name" class="form-control form-radius"  placeholder="name" value="<?php echo $contactFromDetails[0]['name'] ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Email <span>*</span></label>
                                <input type="email" name="email" id="email" class="form-control form-radius"  placeholder="email" value="<?php echo $contactFromDetails[0]['customer_id'] ?>" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Mobile No. <span>*</span></label>
                                <input type="text" name="mobile" id="mobile" class="form-control form-radius"  placeholder="mobile" value="<?php echo $contactFromDetails[0]['contact_number'] ?>" required>
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
						<?php }?>
						  <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Message">Message<span>*</span></label>
                                <textarea type="text" name="message" id="message" placeholder="message" class="form-control form-radius" required></textarea>
                            </div>
                        </div>
						<button class="btn-ser sectorBtn" type="Submit"> Contact </button>
                        <!--<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal_2">Contact Seller</button>-->
						<div class="msgBtn" style="display:none;color:green;">Successfully Submitted</div>
                    </form>
      </div>
      
    </div>
  </div>
</div>
<?php

$cval=count($searchData['form_id']);
if($cval!='1'){
	
	

   
 if (($num%5)==0) {  
					  echo '<div class="col-md-12 list-banners-75 ">'?>
					 
					  		
			<!-- <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  
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
  </div>-->

		
					  
					<?php echo '</div>';
					}
}
					$num++;
					
					}
?>

    <div class="col-md-12 ">        
     <?php echo $links;?>

    </div>	
	
	
	
	
	
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
</section>
<div class="container">
	<div class="page_filterbox">
		<div class="col-sm-12 filter_box">
			<div class="col-md-8"></div>
			<div class="col-md-2">
	   			<h4>Result Per Page:</h4>
	   		</div>
   		<div class="col-md-2">
		    <div class="filter_boxinfo">
		      <div class="form-group">
		       <!--label for="inputEmail3" class="col-sm-6 control-label">Results per page:</label-->
		        <select class="form-control" id="ipp" name="ipp" onChange="changePageSize(this.value)">
		<?php
		         foreach( unserialize(ITEM_PER_PAGE_COUNT) as $itemCountValue => $itemCountDisplay ){
		?>
			<option value="<?php echo $itemCountValue?>" <?php if($this->uri->segment(4)== $itemCountValue ){echo 'selected="selected"';} ?>><?php echo $itemCountDisplay?></option>
		<?php
			 }
		?>
		        </select>
		      </div>
		     </div>
		</div>
   
   		</div>
	</div>
</div>
<div class="clearfix"></div>
  <!--end section-->
<script>
	function changePageSize( itemPerPage ){
		var oldUrl = window.location.href;
		var newUrl = '';
		if( oldUrl.indexOf( 'ipp' ) != -1 ){
			oldUrl = oldUrl.substring( 0, oldUrl.indexOf('')+10);
			//oldUrl = oldUrl.substring( 0, oldUrl.lastIndexOf("/") ) +'/?'+ oldUrl.substring( oldUrl.indexOf("?")+1, oldUrl.length );
			newUrl = oldUrl+itemPerPage;
		}else{
			oldUrl = oldUrl.substring( 0, oldUrl.lastIndexOf("/") ) +'/?'+ oldUrl.substring( oldUrl.indexOf("?")+1, oldUrl.length );
			newUrl = '<?php echo base_url();?><?php echo $this->uri->segment(1);?>/<?php echo $this->uri->segment(2);?>/<?php echo $this->uri->segment(3);?>/'+itemPerPage;
		}
		window.location.href = newUrl;
	}

	function changeSorting( sortingOption ){
		var oldUrl = window.location.href;
		var newUrl = '';
		if( oldUrl.indexOf( 'sortby' ) != -1 ){
			oldUrl = oldUrl.substring( 0, oldUrl.indexOf('&sortby=')+8);
			//oldUrl = oldUrl.substring( 0, oldUrl.lastIndexOf("/") ) +'/?'+ oldUrl.substring( oldUrl.indexOf("?")+1, oldUrl.length );
			newUrl = oldUrl+sortingOption;
		}else{
			oldUrl = oldUrl.substring( 0, oldUrl.lastIndexOf("/") ) +'/?'+ oldUrl.substring( oldUrl.indexOf("?")+1, oldUrl.length );
			newUrl = '<?php echo base_url();?><?php echo $this->uri->segment(1);?>/<?php echo $this->uri->segment(2);?>/'+sortingOption+'/<?php echo $this->uri->segment(4);?>';
		}
		window.location.href = newUrl;
	}


</script>
