<?php
 $packageArray     = array();
 $selectedPackName = null;
 $selectedPackId   = null;
 if( isset($packages) ){
  foreach( $packages as $package ){
   if( $user_package[0]['package_id'] == $package['id'] && $sell_business_details[0]['form_id'] == $user_package[0]['form_id'] ){
    $selectedPackName = $package['name'];
    $selectedPackId   = $package['id'];
   }
  }

  foreach( $packages as $package ){
   $packageArray[$package['name']] = $package['id'];
  }
 }
?>
<input type="hidden" id="base_url" name="base_url" value="<?php echo base_url();?>" />
<div id="gtco-features">
 <div class="container">
  <div class="row">
   <div class="col-md-12 gtco-heading">
    <div class="p-15">
     <h2>List Your Business</h2>
     <div class="row">
      <div class="col-sm-3">
       <div class="feat-c-box">
        <ul>
         <!--<li><a href="list-your-business-user-profile-jv">User Profile</a></li>-->
         <li><a href="list-your-business-basic-information-jv">Basic Information</a></li>
         <li><a href="list-your-business-description-jv">Business Description</a></li>
         <li><a href="list-your-business-additional-details-jv">Additional Details</a></li>
         <li><a href="list-your-business-jv-details-jv">JV-details</a></li>
         <li><a href="list-your-business-additional-details-uploads-jv">Uploads</a></li>
         <li><a class="active-page" href="list-your-business-package-details-jv">Package Details</a></li>
         <li><a href="list-your-business-additional-services-jv">Additional Services</a></li>
          <!--<li><a href="list-your-business-payment-jv">Payment</a></li>-->
         <li><a href="list-your-business-preview-jv">Preview</a></li>
        </ul>
       </div>
      </div>
 <div class="col-sm-9 r-bgc">
	  
       <div class="form-c-box"> 

        <div class="col-md-12 m-t70 padd0">
         <div class="col-sm-4 padd0">
          <div class="pack-box-2">
           <h3>Features </h3>
           <p>Business Listing Activation</p>
           <p>Dedicated listing page</p>
           <p>Upload Business Documents  </p>
           <p>Photo / Video Showcase </p>
           <p>View Buyer / Investor Listing </p>
           <p>Dedicated Accounts Manger </p>
           <p>Deal Matchmaking </p>
           <p>Social Media Promotion / SEO Google, Yahoo </p>
           <p>View Buyer Response - Unlimited </p>
           <p>Promotional Mailer </p>
           <p>View Buyer Requirement </p>
           <p> Featured Listing  </p>
           <p>Listing classification </p>

           <p><b>Price</b> <span style="color: #e22c2c;" class="pull-right">* GST applicable</span></p>

          </div>
         </div>

         <div class="col-sm-2 padd0">
          <div class="pack-box">
<?php
          if( strcasecmp( $selectedPackName, "Basic" ) == 0 ){
?>
	   <img class="img-tick-2 packimg" src="<?php echo asset_url();?>images/you-2.png" width="30">
<?php
          }
?>
            <h3>Basic</h3>
            <p><i class="fa fa-check " aria-hidden="true"></i></p>
            <p><i class="fa fa-check " aria-hidden="true"></i></p>
            <p><i class="fa fa-check " aria-hidden="true"></i></p>
            <p><i class="fa fa-check " aria-hidden="true"></i></p>
            <p><i class="fa fa-check " aria-hidden="true"></i></p>
            <p><i class="fa fa-times" aria-hidden="true"></i></p>
            <p><i class="fa fa-times" aria-hidden="true"></i></p>
            <p><i class="fa fa-times" aria-hidden="true"></i></p>
            <p><i class="fa fa-times " aria-hidden="true"></i></p>
            <p><i class="fa fa-times" aria-hidden="true"></i></p>
            <p><i class="fa fa-times" aria-hidden="true"></i></p>
            <p><i class="fa fa-times" aria-hidden="true"></i></p>
            <p><i class="fa fa-times" aria-hidden="true"></i></p>
            <p><b>free</b></p>
<?php
            if( strcasecmp( $selectedPackName, "Basic" ) == 0 ){
?>
             <button class="active-pack">Active Package</button>
<?php
            }else{
?>
             <button onClick="setUserSellBusinessPackage('<?php echo $sell_business_details[0]['form_id'];?>', '<?php echo $packageArray['Basic'];?>')">Select</button>
<?php
            }
?>
           </div>
          </div>

          <div class="col-sm-2 padd0">
           <div class="pack-box">
<?php
          if( strcasecmp( $selectedPackName, "Advance" ) == 0 ){
?>
           <img class="img-tick-2 packimg" src="<?php echo asset_url();?>images/you-2.png" width="30">
<?php
          }
?>
            <h3>Advance</h3>
            <p><i class="fa fa-check " aria-hidden="true"></i></p>
            <p><i class="fa fa-check " aria-hidden="true"></i></p>
            <p><i class="fa fa-check " aria-hidden="true"></i></p>
            <p><i class="fa fa-check " aria-hidden="true"></i></p>
            <p><i class="fa fa-check " aria-hidden="true"></i></p>
            <p><i class="fa fa-check" aria-hidden="true"></i></p>
            <p><i class="fa fa-check" aria-hidden="true"></i></p>
            <p><i class="fa fa-times" aria-hidden="true"></i></p>
            <p>30 days</p>
            <p>1</p>
            <p>1</p>
            <p>5 days</p>
            <p>Premium</p>
            <p><b> 3,999/-</b></p>
<?php
            if( strcasecmp( $selectedPackName, "Advance" ) == 0 ){
?>
             <button class="active-pack">Active Package</button>
<?php
            }else{
?>
             <button onClick="setUserSellBusinessPackage('<?php echo $sell_business_details[0]['form_id'];?>', '<?php echo $packageArray['Advance'];?>')">
			 <?php if($selectedPackName=='Ultimate' || $selectedPackName=='Elite'){ echo 'Select';}else{
			 echo 'Upgrade';}?></button>
<?php
            }
?>
           </div>
          </div>
          <div class="col-sm-2 padd0">
           <div class="pack-box back-plan">
<?php
          if( strcasecmp( $selectedPackName, "Ultimate" ) == 0 ){
?>
           <img class="img-tick-2 packimg" src="<?php echo asset_url();?>images/you-2.png" width="30">
<?php
          }else if( strcasecmp( $selectedPackName, "Elite") != 0 ){
?>
            <img style="left:20px;" class="img-tick" src="<?php echo asset_url();?>images/r-tick.png" width="80">
<?php
          }
?>
            <h3>Ultimate <!--span style="font-size: 10px;display: block;line-height: 0px; ">Recommended</span--></h3>
            <p><i class="fa fa-check " aria-hidden="true"></i></p>
            <p><i class="fa fa-check " aria-hidden="true"></i></p>
            <p><i class="fa fa-check " aria-hidden="true"></i></p>
            <p><i class="fa fa-check " aria-hidden="true"></i></p>
            <p><i class="fa fa-check " aria-hidden="true"></i></p>
            <p><i class="fa fa-check" aria-hidden="true"></i></p>
            <p><i class="fa fa-check" aria-hidden="true"></i></p>
            <p><i class="fa fa-check" aria-hidden="true"></i></p>
            <p>60 days</p>
            <p>2</p>
            <p>2</p>
            <p>14 days</p>
            <p>Gold</p>
            <p><b>  6,999/-</b></p>
<?php
            if( strcasecmp( $selectedPackName, "Ultimate" ) == 0 ){
?>
             <button class="active-pack">Active Package</button>
<?php
            }else{
?>
             <button onClick="setUserSellBusinessPackage('<?php echo $sell_business_details[0]['form_id'];?>', '<?php echo $packageArray['Ultimate'];?>')"> <?php if($selectedPackName=='Elite'){ echo 'Select';}else{
			 echo 'Upgrade';}?></button>
<?php
            }
?>
           </div>
          </div>

          <div class="col-sm-2 padd0">
           <div class="pack-box">
<?php
          if( strcasecmp( $selectedPackName, "Elite" ) == 0 ){
?>
           <img class="img-tick-2 packimg" src="<?php echo asset_url();?>images/you-2.png" width="30">
<?php
          }
?>
            <h3>Elite</h3>
             <p><i class="fa fa-check " aria-hidden="true"></i></p>
             <p><i class="fa fa-check " aria-hidden="true"></i></p>
             <p><i class="fa fa-check " aria-hidden="true"></i></p>
             <p><i class="fa fa-check " aria-hidden="true"></i></p>
             <p><i class="fa fa-check " aria-hidden="true"></i></p>
             <p><i class="fa fa-check" aria-hidden="true"></i></p>
             <p><i class="fa fa-check" aria-hidden="true"></i></p>
             <p><i class="fa fa-check" aria-hidden="true"></i></p>
             <p>90 days</p>
             <p>3</p>
             <p>3</p>
             <p>30 days</p>
             <p>Platinum</p>
             <p><b>  9,999/-</b></p>
<?php
            if( strcasecmp( $selectedPackName, "Elite" ) == 0 ){
?>
             <button class="active-pack">Active Package</button>
<?php
            }else{
?>
             <button onClick="setUserSellBusinessPackage('<?php echo $sell_business_details[0]['form_id'];?>', '<?php echo $packageArray['Elite'];?>')">Upgrade</button>
<?php
            }
?>
            </div>
           </div>
          </div>
          <div class="col-sm-4"></div>
          <div class="col-sm-3"></div>
		   <form name="lb_uprof" action="list-your-business-additional-services-jv" >
          <div class="col-sm-5" style="padding-right:0">
          
           <button type="submit" class="savebtn">Continue</button>
          </div>
		  </form>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
