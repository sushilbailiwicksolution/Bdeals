<?php
 //var_dump($user_contacts);
?>
<div class="clearfix"></div>  
<div id="gtco-features">
 <div class="container">
  <div class="row">
   <div class="col-md-12 gtco-heading ">
    <div class="p-15">
     <div class="row">
      <div class="col-md-9">
       <h2>My Account</h2>
      </div>
     
     </div>
     <div class="row">
      <div class="col-sm-3">
	   <div class="col-md-12 padd0">

							<div class="wel-user text-center">

							<div class="col-md-12">

							<div class=" iconbox-medium round  overflow-hidden"><img src="<?php echo asset_url();?>images/blank-user.png" alt=""></div> 

							</div>

							<h5><?php echo ucwords(strtolower($BasicProfile['name']));?></h5>

							<p>Email Id : <?php echo $BasicProfile['customer_id'];?></p>

							<p>Contact No : <?php echo $BasicProfile['contact_number'];?></p>

							<p>Location : <?php echo $BasicProfile['location'];?></p>

							</div>

							</div>
       <div class="feat-c-box">
        <ul>
        <li><a  href="<?php echo base_url();?>userprofile">My Account</a></li>
		<li><a  href="<?php echo base_url();?>user_business_profile">My Dashboard</a></li>
		<li><a  href="<?php echo base_url();?>my-listing">My Listing</a></li>
		<li><a href="<?php echo base_url();?>user_query">Query</a></li>
		<li><a  class="active-page"  href="<?php echo base_url();?>user_contacts/basic/0">In Box ( Seller Contacted )</a></li>
		<li><a target="_blank" href="<?php echo base_url();?>contact-us">Book Appointment</a></li>
		<li><a href="<?php echo base_url();?>change-password">Change Password</a></li>
		<li><a href="javascript:void(0);">Invoice / Payment</a></li>  
        </ul>
       </div>
	    <div class="col-md-12 wel-user">
       <h5><?php echo $assignedEmpDetails[0]->name;?></h5>
       <p><?php echo $assignedEmpDetails[0]->email;?>, <?php echo $assignedEmpDetails[0]->contact_no;?></p>
      </div>
      </div>
      <div class="col-sm-9 r-bgc">
       <div class="col-md-12 padd0">
        <div class="col-sm-4 profile-text">
         <p><b>Name</b></p>
	 <span><?php echo $user_contacts[0]->name;?></span>
        </div>
        <div class="col-sm-4 profile-text">
         <p><b>Tittle</b></p>
	 <span><?php echo $user_contacts[0]->key_headline;?></span>
        </div>
        <div class="col-sm-4 profile-text">
         <p><b>Phone No.</b></p>
	 <span><?php echo $user_contacts[0]->mobile;?></span>
        </div>

        <div class="col-sm-4 profile-text">
         <p><b>City</b></p>
	 <span><?php echo $this->cachemethods->getCityNameById( $user_contacts[0]->city, $user_contacts[0]->state );?></span>
        </div>

        <div class="col-sm-4 profile-text">
        <p><b> Message</b></p>
	<span><?php echo $user_contacts[0]->message;?></span>
        </div>

        <div class="col-sm-4 profile-text">
        <p><b> Message</b></p>
	<span><?php echo $user_contacts[0]->date;?></span>
        </div>
<?php /*        <div class="col-sm-4 profile-text">
         <p><b>Business Location</b></p>
	 <span><?php echo $this->cachemethods->getStateNameById($user_contacts[0]->state, $user_contacts[0]->country).", ".$this->cachemethods->getCountryNameById($user_contacts[0]->country);?></span>
        </div>

        <div class="col-sm-4 profile-text">
        <p><b> Current Status of Business</b></p>
	<span><?php echo $user_contacts[0]->current_status_of_business;?></span>
        </div>

        <div class="col-sm-4 profile-text">
         <p><b> Product &amp; Services</b></p>
	 <span><?php echo $user_contacts[0]->listing_sub_category;?></span>
        </div>
        <div class="col-sm-4 profile-text">
         <p><b> Establishment Year</b></p>
	 <span><?php echo $user_contacts[0]->yoe;?></span>
        </div>

        <div class="col-sm-4 profile-text">
         <p><b> No. Of Employees</b></p>
	 <span><?php echo $user_contacts[0]->total_employee;?></span>
        </div>

        <div class="col-sm-4 profile-text">
         <p><b> Latest Turnover/Revenue</b></p>
	 <span><?php echo $user_contacts[0]->total_revenue;?></span>
        </div>
        <div class="col-sm-4 profile-text">
         <p><b> Property Type</b></p><p>
	 <span><?php echo $user_contacts[0]->property_type;?></span>
         </p></div>
	 </div>
 */?>
      </div>   
     </div>		
    </div>
   </div>
  </div>
 </div>
</div>
