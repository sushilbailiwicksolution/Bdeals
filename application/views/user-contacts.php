<div class="clearfix"></div>  
<div id="gtco-features">
 <div class="container">
  <div class="row">
   <div class="col-md-12 gtco-heading ">
    <div class="p-15">
     <div class="row">
     	<div class="book-app col-md-4">					
			<a href="<?php echo base_url();?>contact-us" target="_blank">
				<span>Book Appointment</span>
			</a>
		</div>		
	     <div class="col-md-4">
	       <h2>My Account</h2>
	    </div>
     
     </div>
     <div class="row">
     	 <div class="col-md-12 padd0 buyer-account-wel">
	  				
		 <ul class="tabs1">

            <li class="active"><a class="text-center" href="<?php echo base_url();?>user_business_profile#buyer_profile" target="_self">BUYER  </a></li>
            <li class=""><a class="text-center" href="<?php echo base_url();?>user_business_profile#seller_profile" target="_self">SELLER </a></li>
        </ul>
			 <div class="tabs-content12">
      <div class="col-sm-3" style="padding-left: 0px;">
	   <div class="col-md-12 padd0">

							<div class="wel-user text-center top_user">

							<div class="col-md-12">

							<div class=" iconbox-medium round  overflow-hidden"><?php if(!empty($BasicProfile['user_image']) && $BasicProfile['user_image']!=''){?>
							<img src="<?php echo base_url().$BasicProfile['user_image'];?>" width="190">
							
							<?php } else { ?><img src="<?php echo asset_url();?>images/blank-user.png" alt="">
							
							<?php }?></div> 

							</div>

							<h5><?php echo ucwords(strtolower($BasicProfile['name']));?></h5>

							<p>Email Id : <?php echo $BasicProfile['customer_id'];?></p>

							<p>Contact No : <?php echo $BasicProfile['contact_number'];?></p>

							<p>Location : <?php echo $BasicProfile['location'];?></p>

							</div>

							</div>
       <div class="feat-c-box">
        <ul>
		<li><a  href="<?php echo base_url();?>user_business_profile">My Dashboard</a></li>
        <li><a  href="<?php echo base_url();?>userprofile">My Account</a></li>
		<li><a  href="<?php echo base_url();?>my-listing">My Listing</a></li>
		<li><a href="<?php echo base_url();?>user_query">Query / Enquiry</a></li>
		<li><a  class="active-page"  href="<?php echo base_url();?>user_contacts/basic/0">In Box</a></li>
		<!--<li><a href="<?php echo base_url();?>user-contact-us-details">Enquiry</a></li>-->
		<li><a href="<?php echo base_url();?>change-password">Change Password</a></li>
		<li><a href="<?php echo base_url();?>invoice-payment">Invoice / Payment</a></li>  
        </ul>
       </div>
	  
      </div>
      <div class="col-sm-9 r-bgc list-box mt0">
		<table width="100%" style="margin-top: 20px;" border="1" class="pd-box" >
											<tr>
												<td style="width:120px"><h5>Name </h5></td>
												<td style="width:120px"><h5>Email </h5></td>
												<td style="width:120px"><h5>Contact to </h5></td>
												<td style="width:120px"><h5>Phone No. </h5></td>
												<td><h5>Message </h5></td>
												<td><h5>Key Headline </h5></td>
												<td><h5>Request to view * values</h5></td>
											</tr>
											<?php 												
												
													
											
												foreach( $user_contacts as $Conlist ){
													
												
												?>
											<tr>
												<td><span><?php echo $Conlist->name;?></span></td>
												<td><span><?php if($Conlist->view_request=='1'){
												
													echo $Conlist->email;
												
												}else{
													echo '****';
													
												}?></span></td>
												<td><span><?php if($Conlist->view_request=='1'){
												
													echo $Conlist->contact_to;
												
												}else{
													echo '****';
													
												}?></span></td>
												<td><span><?php if($Conlist->view_request=='1'){
												
													echo $Conlist->mobile;
												
												}else{
													echo '****';
													
												}?></span></td>
												<td><span><?php if($Conlist->view_request=='1'){
												
													echo $Conlist->message;
												
												}else{
													echo '****';
													
												}?></span></td>
												<td><span><a target="_blank" href="<?php echo base_url();?>browse-sector-listing-details/<?php echo $Conlist->form_id; ?>/<?php echo $Conlist->business_type; ?>"><?php echo $Conlist->key_headline;?></a></span></td>
												<td><button type="submit" name="request" class="label label-danger">Request</button></td>
											</tr>
										<?php }?>
											
											
									</table>
      </div> 
 		<div class="col-md-12 wel-user footer_weluser " style="">
	         <div class="col-md-4"><h5>Customer Representative Name : <?php echo $assignedEmpDetails[0]->name;?></h5></div>
	         <div class="col-md-4"><h5> Email : <?php echo $assignedEmpDetails[0]->email;?></h5></div>
	        <div class="col-md-4"><h5> Phone : <?php echo $assignedEmpDetails[0]->contact_no;?></h5></div>
       </div>

      </div>	  
     </div>		
    </div>
   </div>
  </div>
 </div>
</div>
