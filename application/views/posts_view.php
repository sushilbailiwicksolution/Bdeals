 <section class=" sec-padding section-light">
    <div class="container">
      <div class="row slide-nextprev-but-1">
        <div class="col-xs-12 text-center">
          <h3 class="uppercase font-weight-5">Featured Listing </h3>
          <div class="title-line-4 green align-center"></div>
        </div>
        <div class="clearfix"></div>
        <div id="owl-demo4" class="owl-carousel">
          <div class="item">
		   <?php  
        foreach ($posts as $row)  
         {  
		 
		 //print_r($row);
            ?>
            <div class="col-md-3 col-sm-6">
              <div class="feature-box-66">
                <div class="image-holder">
					<div class="Add-to-favourite">
						<p><i class="fa fa-heart-o" aria-hidden="true"></i> Add to Favourite</p>
					</div>
				<a href="#"> <img src="<?php echo asset_url();?>images/488.jpg" alt="" class="img-responsive"/></a> </div>
                <div class="text-box-inner">
                  <h5 class="less-mar1"><a href="#"><?php echo $row->key_headline;?></a></h5>
                  <span><i class="fa fa-map-marker" aria-hidden="true"></i> <?php //echo $row->description;?></span>
                  <div class="clearfix"></div>
                  <div class="property-info">
                    <div class="pull-left"><span>Sector : Education</span></div>
                  </div>
                  <div class="property-info ">
                    <div class="pull-left text-3"><span>Asking Price : $29.00</span></div>
                    <div class="pull-right "><span> <a class="view-text" href="<?php echo base_url();?>">View more</a></span> </div>
                  </div>
                </div>
              </div>
            </div>
			 <?php }  
         ?>  
           
            <!--end column-->
          </div>


        </div>
        <!--end carousel-->

      </div>
    </div>
  </section>