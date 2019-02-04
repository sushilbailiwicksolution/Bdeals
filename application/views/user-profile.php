<?php /*<div id="gtco-features">
 <div class="container">
  <div class="row">
   <div class="col-md-12 gtco-heading ">
    <div class="p-15">
     <h2>My Account</h2>
     <div class="row">
      <div class="col-sm-3">
       <div class="feat-c-box">
        <ul>
         <li><a class="active-page" href="<?php echo base_url();?>userprofile" >My Account</a></li>
         <!--<li><a href="#">Package</a></li>-->
         <li><a href="<?php echo base_url();?>user_business_profile">Business Profile</a></li>
	 <li><a href="<?php echo base_url();?>user_query">Query</a></li>
	 <li><a href="<?php echo base_url();?>user_contacts">Contact</a></li>
         <li><a href="<?php echo base_url();?>user-favourite">Favourite</a></li>
        </ul>
       </div>
       </div>
*/
//print_r($_SESSION);

//var_dump($userProfileData);
?>
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
       <li><a class="active-page" href="<?php echo base_url();?>userprofile">My Account</a></li>
		
		<li><a  href="<?php echo base_url();?>my-listing">My Listing</a></li>
		<li><a href="<?php echo base_url();?>user_query">Query / Enquiry</a></li>
		<li><a href="<?php echo base_url();?>user_contacts/basic/0">In Box</a></li>
		<!--<li><a href="<?php echo base_url();?>user-contact-us-details">Enquiry</a></li>-->
		<li><a href="<?php echo base_url();?>change-password">Change Password</a></li>
		<li><a href="<?php echo base_url();?>invoice-payment">Invoice / Payment</a></li>  
         </ul>
        </div>
		
       </div>
	   
	   <div class="col-sm-9 r-bgc user_pfright">
        <div class="form-c-box">
         <div class="col-sm-12" style="padding-right:0; padding-bottom:10px;">
          <button type="button" class="savebtn usersavebtn" onClick="enableAll('frm_reg')">Edit</button>
         </div>

         <form name="frm_reg" id="frm_reg" action="edit-user-profile" method="post" data-toggle="validator" role="form" class="was-validated" enctype="multipart/form-data">
       
          <p>Confidential Registration</p>
		<input type="hidden" name="imagedata" value="<?php echo $userProfileData['user_image'];?>">

         <div class="areu userpfright_sec">
          <p>Section 1 <span>Information in particulars is confidential and will not be released without your permission.</span></p>
		 
		   <div class="col-sm-12">
           <div class="form-group">
            <label for="name">User Image</label>
			<?php if(!empty($userProfileData['user_image']) && $userProfileData['user_image']!=''){?>
			<img src="<?php echo base_url().$userProfileData['user_image'];?>" class="img-responsive" width="100">
			
            <?php } else { ?><img src="<?php echo asset_url();?>images/blank-user.png" alt="">
			
			<?php }?>
			
			<input type="file" placeholder="Testimonials Name" class="form-control"  name="uploadfile[]"  value="+ Photo"  />
            <div class="help-block with-errors"></div>
           </div>
          </div>
		  
          <div class="col-sm-4">
           <div class="form-group">
            <label for="name">Name *</label>
            <input type="text" class="form-control" placeholder="" id="name" name="name" value="<?php echo $userProfileData['name'];?>" >
            <div class="help-block with-errors"></div>
           </div>
          </div>
		            <div class="col-sm-4">
           <div class="form-group">
            <label for="email">Email ID *</label>
           <div><?php echo $userProfileData['customer_id'];?></div>
           </div>
          </div>
		   <div class="col-sm-4">
           <div class="form-group">
            <label for="">Mobile No. *</label>
            <input type="text" class="form-control" placeholder="" id="contact" name="contact" data-error="Contact required" value="<?php echo $userProfileData['contact_number'];?>" required >
            <div class="help-block with-errors"></div>
           </div>
          </div>
		   <div class="col-sm-4">
           <div class="form-group">
            <label for="address">Address *</label>
            <input type="text" class="form-control" placeholder="" data-error="address required" id="address" name="address" value="<?php echo $userProfileData['address'];?>"  required>
            <div class="help-block with-errors"></div>
           </div>
          </div>
		   <div class="col-sm-4">
           <div class="form-group">
            <label for="">City *</label>
          
             <input type="text" class="form-control" placeholder="" id="city" name="city" value="<?php echo $userProfileData['city'];?>"  required>
            <div class="help-block with-errors"></div>
           </div>
          </div>
         <!-- <div class="col-sm-4">
           <div class="form-group">
            <label for="compname">Company Name *</label>
            <input type="text" class="form-control" placeholder="" id="compname" name="compname" value="<?php echo $userProfileData['company_name'];?>" >
            <div class="help-block with-errors"></div>
           </div>
          </div>
         <div class="col-sm-4">
           <div class="form-group">
            <label for="">Designation </label>
            <input type="text" class="form-control" placeholder="" id="designation" name="designation" data-error="Designation required" value="<?php echo $userProfileData['designation'];?>" >
            <div class="help-block with-errors"></div>
           </div>
          </div>-->
          <div class="col-sm-4">
           <div class="form-group">
            <label for="">Website</label>
            <input type="text" class="form-control" placeholder="e.g. https://businessdeals.in" id="web" name="web" value="<?php echo $userProfileData['website'];?>" >
            <div class="help-block with-errors"></div>
           </div>
          </div>
		   <div class="col-sm-4">
           <div class="form-group">
            <label for="passwd">Password </label>
            <input type="password" class="form-control" placeholder="" id="passwd" name="passwd" value="<?php echo $userProfileData['password'];?>" data-error="Password required" required >
            <div class="help-block with-errors"></div>
           </div>
          </div>
          <div class="col-sm-4">
           <div class="form-group">
            <label for="cpasswd">Confirm Password</label>
            <input type="password" class="form-control" placeholder="" id="cpasswd" name="cpasswd" data-match="#passwd" data-match-error="Oops!, password don't match" data-error="Confirm password required" value="<?php echo $userProfileData['password'];?>" >
            <div class="help-block with-errors"></div>
           </div>
          </div>
		  <div class="col-sm-12">
		   <div class="col-sm-3">  <label for="">Are You a<span>*</span></label></div>
		  	   <div class="col-sm-3">
		   <div class="pass-group">
			 <label for=""></label>
                      <div class="checkbox">
		      <input type="checkbox" class="cus-t" id="checkbox1" name="lb_owner" value="owner"  <?php if(strcasecmp($userProfileData['who'], 'owner')==0){ echo "checked";}?> >
                          <label for="checkbox1" class="cus-t">
                            Business Owner
                          </label>
                      </div>
                      </div>
					  
                    </div>
                    <div class="col-sm-3">
					 <div class="pass-group">
					 <label for=""></label>
                      <div class="checkbox">
                        <input type="checkbox" class="cus-t" id="checkbox2" name="lb_broker" value="broker"  <?php if(strcasecmp($userProfileData['who'], 'broker')==0){ echo "checked";}?> >
                          <label for="checkbox2" class="cus-t">
                            Business Broker
                          </label>
                      </div>
                      </div>
					  
                    </div>
                    <div class="col-sm-3">
						 <div class="pass-group">
					 <label for=""></label>
                      <div class="checkbox">
                        <input type="checkbox" class="cus-t" id="checkbox3" name="lb_representative" value="representative" <?php if(strcasecmp($userProfileData['who'], 'representative')==0){ echo "checked";}?> >
                          <label for="checkbox3" class="cus-t">
                            Representative
                          </label>
                      </div>
					  
                    </div>
                    </div>
                    </div>
          <div class="col-sm-4">
           <div class="form-group">
            <label for="">Alternative Email ID </label>
            <input type="text" class="form-control" placeholder="" id="aemail" name="aemail" data-error="Alternative email address required" value="<?php echo $userProfileData['alternate_email'];?>" >
            <div class="help-block with-errors"></div>
           </div>
          </div>
		   <div class="col-sm-4">
           <div class="form-group">
            <label for="">Alternative Phone </label>
            <input type="text" class="form-control" placeholder="" id="alternate_contact" name="alternate_contact" data-error="Alternative phone  required" value="<?php echo $userProfileData['alternate_contact'];?>" >
            <div class="help-block with-errors"></div>
           </div>
          </div>
         
          <div class="col-sm-12">
           <p class="sm-p">We will be contacting you via Email or Telephone, please verify that the Email address and Phone no., you entered above is correct and make sure that your spam filter allows you to receive email from businessdeals.in</p>
          </div>
         </div>
         <div class="col-sm-4"></div>
         <div class="col-sm-4"></div>
         <div class="col-sm-4" style="padding-right:0">
          <button type="submit" class="savebtn userprofileBtn" style="display:none;">Save &amp; Continue</button>
         </div>
       </form>
        </div>
      </div>
		 
		 
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
