<?php
 //include ('header.php');
 
 //var_dump($getContactCountByFormId);
 
  
//print_r($getContactCountByFormId);	 

 
 ?>

<div id="gtco-features">
  
  
			<div class="container">
		            <div class="row">
					<div class="col-md-12 gtco-heading" style="margin-bottom: 0em;">
					<h2>My Account</h2>
					</div>
					</div>
		
		<div class="row">
    <div class="col-md-12 padd0 buyer-account-wel">
									
		
      
        <div class="tabs-content1">
	
            <div id="seller_profile" class="tabs-panel1" >
            <div class="row p-15 padd0">
	
	<div class="col-md-12 padd0">
					
					<div class="col-md-3 ">
					<div class="wel-user text-center">
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
          <li><a  href="<?php echo base_url();?>userprofile">My Account</a></li>
		<li><a    href="<?php echo base_url();?>user_business_profile">My Dashboard</a></li>
		<!--<li><a class="active-page"  href="<?php echo base_url();?>my-listing">My Listing</a></li>-->
		<li><a href="<?php echo base_url();?>user_query">Query / Enquiry</a></li>
		<li><a  href="<?php echo base_url();?>user_contacts/basic/0">In Box</a></li>
		 <!--<li><a  href="<?php echo base_url();?>user-contact-us-details">Enquiry</a></li>-->
		<li><a href="<?php echo base_url();?>change-password">Change Password</a></li>
		<li><a href="<?php echo base_url();?>invoice-payment">Invoice / Payment</a></li>  
         </ul>
								</div>
								 <div class="col-md-12 wel-user ">
       <h5><?php echo $assignedEmpDetails[0]->name;?></h5>
       <p><?php echo $assignedEmpDetails[0]->email;?>, <?php echo $assignedEmpDetails[0]->contact_no;?></p>
      </div>
							</div>
					
					</div>
					
					
					
	
					
					
					<div class="col-md-9">
							
						
					<div class="col-sm-12 r-bgc without-bg">
					<div class="col-md-12 padd0"> 				
										
											 <?php
       if( isset($business_list) ){
	$i = 0;
        foreach( $business_list as $business ){
if($business->business_type!='buy_a_business'){
	
	
	

	
		?><div class="list-box">
										<table width="100%">
											
											<tr>
												<td><p>Listing ID. #<?php echo $business->form_id;?></p></td>
												<td class="text-right"><p><?php echo date('dS F Y',strtotime($business->business_add_date));?></p></td>
											</tr>
											<tr>
												<td colspan="2"><h2><?php echo $business->key_headline; ?></h2></td>
											</tr>
											<!--<tr>
												<td colspan="2" class="text-right"><h5>Business Posted By: <label><?php echo ucwords(strtolower($business->name)); ?></label></h5></td>
											</tr>-->
											</table>
												<div class="sep-box">
											<div class="col-sm-3 pull-right" style="margin:11px -113px 0px 0px;"><a target="_blank" href="<?php echo base_url();?>login-business-profile-form<?php 
			if ($business->business_type=='jv_business')
						{echo '-jv';}
			else if($business->business_type=='buy_a_business')
						{ echo '-buy';}
			else if($business->business_type=='startup_business')
						{echo '-startup';}
			else if($business->business_type=='re_business')
						{echo '-re';}?>/<?php echo $assignedEmpDetails[0]->name.'/'.$business->form_id ?>/1234/abc#Packagedetails"><button style="font-size: 10px; padding: 3px 10px;" class="btn btn-danger btn-sm">Explore</button></a></div>
									</div>
									</div>
	   <?php }
	   }
	   }?>
						

									
									
						
										
										
					</div>
					
					
					
							
							
							
					</div>	
					</div>	
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