<?php
//print_r($userQueryDetails);
?>
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
							<div class=" iconbox-medium round  overflow-hidden">
							<?php if(!empty($BasicProfile['user_image']) && $BasicProfile['user_image']!=''){?>
							<img src="<?php echo base_url().$BasicProfile['user_image'];?>" width="190">
							
							<?php } else { ?><img src="<?php echo asset_url();?>images/blank-user.png" alt="">
							
							<?php }?>
							</div> 
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
       <li><a href="<?php echo base_url();?>userprofile">My Account</a></li>
		
		<li><a  href="<?php echo base_url();?>my-listing">My Listing</a></li>
		<li><a   href="<?php echo base_url();?>user_query">Query / Enquiry</a></li>
		<li><a href="<?php echo base_url();?>user_contacts/basic/0">In Box</a></li>
		<!--<li><a href="<?php echo base_url();?>user-contact-us-details">Enquiry</a></li>-->
		<li><a href="<?php echo base_url();?>change-password">Change Password</a></li>
		<li><a class="active-page" href="<?php echo base_url();?>invoice-payment">Invoice / Payment</a></li>  
         </ul>
        </div>
		
      </div>
      <div class="col-sm-9 r-bgc">
	  <h2>Invoice / Payment Details</h2>
		<h4>No invoice exist as you have not opted for any paid services.
</h4>
      </div>  
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
