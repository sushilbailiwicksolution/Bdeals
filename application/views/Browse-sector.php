<?php
 include ('header.php');
 ?>
  <!--end menu-->
  <div class="clearfix"></div>
  
  <section>
    <div class="header-inner two">
      <div class="inner text-center">
        <h4 class="title text-white uppercase">Browse By Sector</h4>
        
      </div>
      <div class="overlay bg-opacity-5"></div>
      <img src="<?php echo asset_url();?>images/header-img.jpg" alt="" class="img-responsive"/> </div>
  </section>
  <!-- end header inner -->
  <div class="clearfix"></div>
  
  <section class="sec-padding paddbott">
  <div class="container">
  <div class="row">
  
 
  
  <div class="col-sm-12">
  <div class="col-md-12 bmargin">
  <?php foreach($getBrowseSectorList as $sector){?>
  <div class="col-md-3 ">
		<div class="col-md-12 agri-brose-list">
		
		<a href="browse-sector-list/<?php echo $sector['listing_category'];?>/Desc/10"><h4><img src="<?php echo $sector['sector_image'];?>"> <?php echo $this->cachemethods->getCatNameByCId($sector['listing_category']);?> <span>(<?php echo $sector['industryCount'];?>) </span></h4></a>
		
		</div>
		</div>
   <?php }?>
  
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
  <!--end section-->
  <div class="clearfix"></div>
  
   <?php
 include ('footer.php');
 ?>