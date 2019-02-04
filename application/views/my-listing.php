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
            <div  class="tabs-panel1" style="display: block;">
            	<div class="four-b listing-right">											
            		<a target="_blank" href="<?php echo base_url();?>recent-listing">
            			<span class="rlist">Recent Listings (10)</span></a>				
            	</div>
				<div class="row p-15 padd0">
	
				<div class="col-md-12 padd0">
					<div class="col-md-12 padd0">
						<div class="col-sm-3">
							<div class="col-md-12 padd0">
								<div class="wel-user text-center top_user">
									<div class="col-md-12">
										<div class=" iconbox-medium round  overflow-hidden"><?php if(!empty($BasicProfile['user_image']) && $BasicProfile['user_image']!=''){?>
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
									 <li><a  href="<?php echo base_url();?>userprofile">My Account</a></li>
									 <li><a  href="<?php echo base_url();?>user_business_profile">My Dashboard</a></li>	
									 <li><a class="active-page" href="<?php echo base_url();?>my-listing">My Listing</a></li>
									 <li><a href="<?php echo base_url();?>user_query">Query / Enquiry</a></li>
									 <li><a href="<?php echo base_url();?>user_contacts/basic/0">In Box</a></li>
									 <!--<li><a  href="<?php echo base_url();?>user-contact-us-details">Enquiry</a></li>-->
									 <li><a href="<?php echo base_url();?>change-password">Change Password</a></li>
									 <li><a href="<?php echo base_url();?>invoice-payment">Invoice / Payment</a></li>  
							    </ul>
							</div>
						</div>
						<div class="col-md-9 padd0">
							<div class="col-sm-12">
								<?php
							       if( isset($businessbuYList) ){
								$i = 0;
							        foreach( $businessbuYList as $Buybusiness ){
							if($Buybusiness->business_type=='buy_a_business'){
									?>
								<div class="list-box">
									<table width="100%">
										
										<tr>
											<td colspan="2"><p>Listing ID. #<?php echo $Buybusiness->form_id;?></p></td>
											<td class="text-right"><p><?php echo date('dS F Y',strtotime($Buybusiness->added_date));?></p></td>
										</tr>
										<tr>
											<td colspan="2"><h2><?php echo $Buybusiness->buy_invest_in; ?></h2></td>
										</tr>
										<tr><td colspan="2"><h6>Category : <?php echo $this->cachemethods->getCatNameByCId($Buybusiness->industry_preference);?></h6></td></tr>
												<tr>
												<td colspan="2"><b>Profile:</b> 
												
												<?php 
												
												if($businessData[0]['profile_business_buyer']=='Yes') { echo 'Business Buyer';}
												else if($businessData[0]['profile_corporate_investor']=='Yes') { echo 'Corporate Investor';}
												else if($businessData[0]['profile_pe_vc']=='Yes') { echo 'PE / VC';} 
												else if($businessData[0]['profile_nri_foreign_investor']=='Yes') { echo 'NRI/Foreign Investor';}
												else if($businessData[0]['profile_business_lender']=='Yes') { echo 'Business Lender';} 
												else{
												echo 'Business Broker';	 
												}			
												
												?>
												
												</td>
												<td colspan="2" class="text-right"><h5><a target="_blank" href="<?php echo base_url();?>login-business-profile-form<?php if ($Buybusiness->business_type=='jv_business'){echo '-jv';}else if($Buybusiness->business_type=='buy_a_business'){echo '-buy';}else if($Buybusiness->business_type=='startup_business'){echo '-startup';}  ?>/<?php echo $assignedEmpDetails[0]->name.'/'.$Buybusiness->form_id ?>/1234/abc"><button style="font-size: 13px; padding: 3px 10px;font-weight:bold;" class="saveButton bs_viewbtn">View More</button></a></h5></td>
											</tr>
											
										</table>
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
        </div>
	        <!-- end all tabs -->
	       
	    </div>
	    <div class="clearfix"></div>
	     <div class="col-md-12 wel-user footer_weluser" style="margin: 30px 0px;">
		    <div class="col-md-4"><h5>Customer Representative Name : <?php echo $assignedEmpDetails[0]->name;?></h5></div>
		    <div class="col-md-4"><h5> Email : <?php echo $assignedEmpDetails[0]->email;?></h5></div>
		    <div class="col-md-4"><h5> Phone : <?php echo $assignedEmpDetails[0]->contact_no;?></h5></div>
		</div>

		</div>
		</div>
	</div>

  <!--end section-->
 <?php
 include ('footer.php');
 ?>