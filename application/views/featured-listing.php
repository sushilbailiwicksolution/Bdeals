<?php //var_dump($getFeaturedListing) ;?>

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
		 foreach($getFeaturedListing as $dataFet){
			$i++;
			// print_r($dataFet);
			 ?>  
			
          <div class="item">
		 
		
		  
            <div class="col-md-12 col-sm-6">
			<form name="lb_uprof<?php echo $i; ?>" method="post" action="<?php echo base_url();?>browse-sector-listing-details"  data-toggle="validator" role="form" class="was-validated">
			<input type="hidden" name="frm_id" id="frm_id" value="<?php echo $searchData['form_id'];?>" />
			<input type="hidden" name="business_type" id="business_type" value="<?php echo $searchData['business_type'];?>" />
              <div class="feature-box-66">
                <div class="image-holder">
					<div class="Add-to-favourite">
						<p><i class="fa fa-heart-o" aria-hidden="true"></i> Add to Favourite</p>
					</div>
					
				<a href="#"> <img src="<?php echo asset_url();?>images/488.jpg" alt="" class="img-responsive"/></a> </div>
                <div class="text-box-inner">
                  <h5 class="less-mar1"><a href="#"><?php echo $dataFet['key_headline'];?></a></h5>
                  <span><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $dataFet['description'];?></span>
                  <div class="clearfix"></div>
                  <div class="property-info">
                    <div class="pull-left"><span>Sector : <?php echo $dataFet['industry_preference'];?></span></div>
                  </div>
                  <div class="property-info ">
                    <div class="pull-left text-3"><span>Asking Price : <?php echo $dataFet['ask_price'];?></span></div>
					<div><button type="submit" class="savebtn">View More</button></div>
                    <!--<div class="pull-right "><span> <a class="view-text" href="<?php echo base_url().'featured-listing/'.$dataFet["form_id"];?>/Featured">View more</a></span> </div>-->
					
                  </div>
                </div>
              </div>
			  </form>
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