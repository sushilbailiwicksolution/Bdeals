<?php
 //include ('header.php');
 
 //var_dump($getContactCountByFormId);
 
  
//print_r($getContactCountByFormId);	 

 
 ?>
	
<div id="gtco-features">
  
  
			<div class="container">
		            <div class="row">
		            	<div class="book-app col-md-4">				
							<a href="<?php echo base_url();?>contact-us" target="_blank">
								<span>Book Appointment</span>
							</a>
						</div>	
						<div class="col-md-4 gtco-heading" style="margin-bottom: 0em;">
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
	
            <div id="seller_profile" class="tabs-panel1" >
            <div class="row p-15 padd0">
	
	<div class="col-md-12 padd0">
					
					<div class="col-md-3 ">
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
					
					<div class="col-sm-12 padd0">
								<div class="feat-c-box">
									 <ul>
			<li><a    href="<?php echo base_url();?>user_business_profile">My Dashboard</a></li>
          <li><a  href="<?php echo base_url();?>userprofile">My Account</a></li>
		
		<li><a   href="<?php echo base_url();?>my-listing">My Listing</a></li>
		<li><a href="<?php echo base_url();?>user_query">Query / Enquiry</a></li>
		<li><a  href="<?php echo base_url();?>user_contacts/basic/0">In Box</a></li>
		<!--<li><a href="<?php echo base_url();?>user-contact-us-details">Enquiry</a></li>-->
		<li><a  class="active-page" href="<?php echo base_url();?>change-password">Change Password</a></li>
		<li><a href="<?php echo base_url();?>invoice-payment">Invoice / Payment</a></li>  
         </ul>
								</div>
								 
							</div>
					
					</div>
					
					
					
	
					
					
					 <div class="col-sm-9 r-bgc list-box mt0">
							
						
					<div class="col-sm-12">
					<div class="col-md-12 padd0"> 				
										
											
											<div><h2>Change Password</h2></div>
											
										<div align="center">
										
										<div>
										<input type="password" id="pwd1" name="pwd1" placeholder="New Password" class="form-control passwidth" required>
										<div id="span-pwd1"><label id="pwd1-val"></label></div>
										</div>
										<div>&nbsp;</div>
										<div>
										<input type="password" id="pwd2" name="pwd2" placeholder="Confirm Password" class="form-control passwidth" required>
										<div id="span-pwd2"><label id="pwd2-val"></label></div>
										</div>
										<div>&nbsp;</div>
										<div>
										<button type="submit" name="submit"  class="btn btn-danger changepassword">Submit</button>
										</div>
										
											</div>
											
											
												
									</div>
	 					
										
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
            <!-- end tab 2 -->

        </div>
        <!-- end all tabs -->
    </div>
</div>
		
			
		</div>
  
  
  
  
  
	</div>

  <!--end section-->
 <?php
 include ('footer.php');
 ?>