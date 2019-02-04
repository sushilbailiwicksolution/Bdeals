<?php

 ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
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

            <li class="active"><a class="text-center buyerhide" href="#buyer_profile" target="_self">BUYER  </a></li>
            <li class=""><a class="text-center sellerhide" href="#seller_profile" target="_self">SELLER </a></li>
        </ul>
        <div class="tabs-content2">
	
            <div id="buyer_profile" class="tabs-panel1" style="display: block;">
			<div class="four-b top-right-box postreq_box">						
				<a href="<?php echo base_url();?>buy-a-business-profile/no/no">
					<span><b>Post Requirement</b></span>
				</a> | <a href="<?php echo base_url();?>recent-listing">
					<span><b>Recent Listing</b></span>
				</a>
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
		<li><a class="active-page" href="<?php echo base_url();?>user_business_profile">My Dashboard</a></li>
		<li><a href="<?php echo base_url();?>userprofile">My Account</a></li>
		
		<li><a  href="<?php echo base_url();?>my-listing">My Listing</a></li>
		<li><a href="<?php echo base_url();?>user_query">Query / Enquiry</a></li>
		<li><a href="<?php echo base_url();?>user_contacts/basic/0">In Box</a></li>
		<!--<li><a href="<?php echo base_url();?>user-contact-us-details">Enquiry</a></li>-->
		<li><a   href="<?php echo base_url();?>change-password">Change Password</a></li>
		<li><a href="<?php echo base_url();?>invoice-payment">Invoice / Payment</a></li>  
         </ul>
								</div>
			
							</div>
							
						
					<div class="col-md-9 padd0">
					<div class="col-md-12 padd0 box"> 
					
								<div class="col-sm-3">
									<div class="four-b box1css">
										<a href="javascript:void(0);" class="bviewed">
											<label class="boxcount"><?php if($ViewedProListCount!=''){

						   echo $ViewedProListCount;
						   
					   }else{
						   
						   echo 0;
						   
					   }?></label>
											<span class="boxcount">Business Viewed</span>
										</a>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="four-b box2css">
										<a href="javascript:void(0);" class="savelist">
											<label class="boxcount"><?php if($getSaveListUserCount!=''){

						   echo $getSaveListUserCount;
						   
					   }else{
						   
						   echo 0;
						   
					   }?></label>
											<span class="boxcount">Saved Business</span>
										</a>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="four-b box3css">
										<a href="javascript:void(0);" class="contactsell">
											<label class="boxcount"><?php if($getContactCountByFormIdUser!=''){

						   echo $getContactCountByFormIdUser;
						   
					   }else{
						   
						   echo 0;
						   
					   }?></label>
											<span class="boxcount">Contact Seller</span>
										</a>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="four-b box4css">
										<a href="javascript:void(0);" class="rbusiness">
											<label class="boxcount"><?php if($recommendedCount!=''){

						   echo $recommendedCount;
						   
					   }else{
						   
						   echo 0;
						   
					   }?></label>
											<span class="boxcount">Recommended Business</span>
										</a>
									</div>
								</div>
					</div>
								
					<div class="col-sm-12">
						     
										
											   <?php
       if( isset($businessbuYList) ){
	$p = 0;
        foreach( $businessbuYList as $Buybusiness ){
if($Buybusiness->business_type=='buy_a_business'){
		?><div class="list-box mylistdata">
										<table width="100%">
											
											<tr>
												<td colspan="2"><p>Listing ID: #<?php echo $Buybusiness->form_id;?></p></td>
												<td class="text-right"><p><b>Posted On Date:</b> <?php echo date('dS F Y',strtotime($Buybusiness->added_date));?></p></td>
											</tr>
											<?php if($Buybusiness->key_requirement==''){?>
											<tr>
												<td colspan="2"><h2><?php echo $Buybusiness->buy_invest_in; ?></h2></td>
											</tr>
											<?php }else{?>
											<tr>
												<td colspan="2"><h2><?php echo $Buybusiness->key_requirement; ?></h2></td>
											</tr>
											<?php }?>
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
					<div class="col-sm-12">
					
					<?php 
					$z=0;
					foreach($ViewedProList as $list){?>
						      <div class="list-box bviewedlist" style="display:none;">
										<table width="100%">
											
											<tr>
												<td><p>Listing ID. #<?php echo $list['form_id'];?></p></td>
												<td class="text-right"><p><?php echo date('dS F Y',strtotime($list['business_add_date']));?></p></td>
											</tr>
											<tr>
												<td colspan="2"><h2><?php echo $list['key_headline']; ?></h2></td>
											</tr>
											<tr>
												<td colspan="2" class="text-right"><h5>Business Posted By: <label><?php echo ucwords(strtolower($list['name'])); ?></label></h5></td>
											</tr>
											<tr>
												<td colspan="2" class="text-right"><h5><a target="_blank" href="<?php echo base_url();?>browse-sector-listing-details/<?php echo $list['form_id']; ?>/<?php echo $list['business_type']; ?>"><button style="font-size: 10px; padding: 3px 10px;" class="btn btn-danger btn-sm">Explore</button></a></h5></td>
											</tr>
											</table>
									</div>
					<?php }?>

				<?php 
					$s=0;
					foreach($getSaveListUser as $listSave){?>
						      <div class="list-box savelistdata" style="display:none;">
										<table width="100%">
											
											<tr>
												<td><p>Listing ID. #<?php echo $listSave['form_id'];?></p></td>
												<td class="text-right"><p><?php echo date('dS F Y',strtotime($listSave['business_add_date']));?></p></td>
											</tr>
											<tr>
												<td colspan="2"><h2><?php echo $listSave['key_headline']; ?></h2></td>
											</tr>
											<tr>
												<td colspan="2" class="text-right"><h5>Business Posted By: <label><?php echo ucwords(strtolower($listSave['name'])); ?></label></h5></td>
											</tr>
											<tr>
												<td colspan="2" class="text-right"><h5><a target="_blank" href="<?php echo base_url();?>browse-sector-listing-details/<?php echo $listSave['form_id']; ?>/<?php echo $listSave['business_type']; ?>"><button style="font-size: 10px; padding: 3px 10px;" class="btn btn-danger btn-sm">Explore</button></a></h5></td>
											</tr>
											</table>
									</div>
					<?php }?>

							<?php 
					$t=0;
					foreach($RecommendedBusiness as $Rbusiness){?>
						      <div class="list-box recbusiness" style="display:none;">
										<table width="100%">
											
											<tr>
												<td><p>Listing ID. #<?php echo $Rbusiness['form_id'];?></p></td>
												<td class="text-right"><p><?php echo date('dS F Y',strtotime($Rbusiness['business_add_date']));?></p></td>
											</tr>
											<tr>
												<td colspan="2"><h2><?php echo $Rbusiness['key_headline']; ?></h2></td>
											</tr>
											<tr>
												<td colspan="2" class="text-right"><h5>Business Posted By: <label><?php echo ucwords(strtolower($Rbusiness['name'])); ?></label></h5></td>
											</tr>
											<tr>
												<td colspan="2" class="text-right"><h5><a target="_blank" href="<?php echo base_url();?>browse-sector-listing-details/<?php echo $Rbusiness['form_id']; ?>/<?php echo $Rbusiness['business_type']; ?>"><button style="font-size: 10px; padding: 3px 10px;" class="btn btn-danger btn-sm">Explore</button></a></h5></td>
											</tr>
											</table>
									</div>
					<?php }?>
					
					
						      <div class="list-box contactselldata" style="display:none;">
											
										<table width="100%" style="margin-top: 20px;" border="1" class="pd-box" >
											<tr>
												<td style="width:120px"><h5>Name </h5></td>
												<td style="width:120px"><h5>Email </h5></td>
												<td style="width:120px"><h5>Contact to </h5></td>
												<td style="width:120px"><h5>Phone No. </h5></td>
												<td><h5>Message </h5></td>
												<td><h5>Property Name </h5></td>
												<td><h5>Request to view * values</h5></td>
											</tr>
											<?php 												
												
													
											
												foreach ($getContactListUser as $Conlist)	{
													
												
												?>
											<tr>
												<td><span><?php echo $Conlist['name'];?></span></td>
												<td><span><?php if($Conlist['view_request']=='1'){
												
													echo $Conlist['email'];
												
												}else{
													echo '****';
													
												}?></span></td>
												<td><span><?php if($Conlist['view_request']=='1'){
												
													echo $Conlist['contact_to'];
												
												}else{
													echo '****';
													
												}?></span></td>
												<td><span><?php if($Conlist['view_request']=='1'){
												
													echo $Conlist['mobile'];
												
												}else{
													echo '****';
													
												}?></span></td>
												<td><span><?php if($Conlist['view_request']=='1'){
												
													echo $Conlist['message'];
												
												}else{
													echo '****';
													
												}?></span></td>
												<td><span><a target="_blank" href="<?php echo base_url();?>browse-sector-listing-details/<?php echo $Conlist['form_id']; ?>/<?php echo $Conlist['business_type']; ?>"><?php echo $Conlist['key_headline'];?></a></span></td>
												<td><button type="submit" name="request" class="label label-danger">Request</button></td>
											</tr>
										<?php }?>
											
											
									</table>
									
									</div>
						
															
										
					</div>
					
					
					
					
					
					
					</div>
					</div>
					</div>
					
					
	
	

    

</div>
                

            </div>
			  	<div class="col-md-12 wel-user footer_weluser" style="margin-top:20px;">
		           <div class="col-md-4"><h5>Customer Representative Name : <?php echo $assignedEmpDetails[0]->name;?></h5></div>
		          <div class="col-md-4"><h5> Email : <?php echo $assignedEmpDetails[0]->email;?></h5></div>
		          <div class="col-md-4"><h5> Phone : <?php echo $assignedEmpDetails[0]->contact_no;?></h5></div>
		       </div>
            <!-- end tab 1 -->

            <div id="seller_profile" class="tabs-panel1" style="display: none;">
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
		<li><a class="active-page"   href="<?php echo base_url();?>user_business_profile">My Dashboard</a></li>							 
          <li><a  href="<?php echo base_url();?>userprofile">My Account</a></li>
		
		<!--<li><a  href="<?php echo base_url();?>my-listing">My Listing</a></li>-->
		<li><a href="<?php echo base_url();?>user_query">Query / Enquiry</a></li>
		<li><a  href="<?php echo base_url();?>user_contacts/basic/0">In Box</a></li>
		<!--<li><a  href="<?php echo base_url();?>user-contact-us-details">Enquiry</a></li>-->
		<li><a   href="<?php echo base_url();?>change-password">Change Password</a></li>
		<li><a href="<?php echo base_url();?>invoice-payment">Invoice / Payment</a></li>  
         </ul>
								</div>
							
							</div>
					
					</div>
					
					
					
	
					
					
					<div class="col-md-9">
							
						
					<div class="col-sm-12 r-bgc without-bg">
						<div class="list-box"><h4>List Your Business</h4> 
						<select class="form-control passwidth" style="float:right;margin-top:-45px;" id="dynamic_select">
						<option value="">Select</option>
						<option value="<?php echo base_url();?>list-your-business-new-form">Sell Business</option>
						<option value="<?php echo base_url();?>list-your-business-new-form-jv">Joint Ventures</option>
						<option value="<?php echo base_url();?>start-up-basic-information">Start Up</option>
						<option value="<?php echo base_url();?>real-estate-user-profile-new">Real Estate</option>
						</select>
						</div>
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
											<tr>
											<td>&nbsp;</td>
											</tr>
											<tr>
												<td><b>Sector: <?php echo $this->cachemethods->getCatNameByCId($business->listing_category);?></b></td>
											
												<td><b>Package: <?php echo $business->packagename;?> <a target="_blank" href="login-business-profile-form/<?php echo $assignedEmpDetails[0]->name.'/'.$business->form_id ?>/1234/abc#Packagedetails" class="label label-danger">Upgrade</a></b></td>
											
												<td><b>Status: <?php if($business->status=='0'){echo "Pending";}else{echo "Approved";} ?></b>
			<a style="margin-bottom:4px;     display: -webkit-inline-box;" href="#" class="label label-success">Active</a>
			
			</td>
			<td><b>Form Type: <?php 
			
			
			if($business->business_type=='jv_business')
						{echo 'Joint Ventures';}
			
		    if($business->business_type=='startup_business')
						{echo 'startup Business';}
			if($business->business_type=='sell_a_business')
						{echo 'Sell A Business';}
			if($business->business_type=='re_business')
						{echo 'Real Estate';}?>
					</b></td>
											</tr>
											<!--<tr>
												<td colspan="2" class="text-right"><h5>Business Posted By: <label><?php echo ucwords(strtolower($business->name)); ?></label></h5></td>
											</tr>-->
											</table>
											<div class="sep-box">
												<div class="col-sm-3">
													<div class="four-b">
														<a href="#">
															<label><?php echo $business->num_business_viewed;?></label>
															<span>Views On Business</span>
														</a>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="four-b">
														<a href="javascript:void(0);" class="aclick2_<?php echo $business->form_id;?>" style="cursor:pointer;">
															<label><?php 
															if($getSaveCountByFormId[$business->form_id]!=''){
															echo $getSaveCountByFormId[$business->form_id];
															}else{
															echo '0';	
																
															}
															?></label>
															<span>Saves</span>
														</a>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="four-b">
													
														<a href="javascript:void(0);" class="aclick_<?php echo $business->form_id;?>" style="cursor:pointer;">
															<label>
															<?php 
															if($getContactCountByFormId[$business->form_id]!=''){
															echo $getContactCountByFormId[$business->form_id];
															}else{
															echo '0';	
																
															}
															?>
															</label>
															<span>Contact Buyer</span>
														</a>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="four-b">
														<a href="#" >
															<label>271</label>
															<span>Recomended Investor</span>
														</a>
													</div>
												</div>
												<div class="col-sm-3 pull-right" style="margin:11px -113px 0px 0px;"><a target="_blank" href="<?php echo base_url();?>login-business-profile-form<?php 
			if ($business->business_type=='jv_business')
						{echo '-jv';}
			else if($business->business_type=='buy_a_business')
						{ echo '-buy';}
			else if($business->business_type=='startup_business')
						{echo '-startup';}
			else if($business->business_type=='re_business')
						{echo '-re';}?>/<?php echo $assignedEmpDetails[0]->name.'/'.$business->form_id ?>/1234/abc#basicinformation"><button style="font-size: 10px; padding: 3px 10px;" class="btn btn-danger btn-sm">Explore</button></a></div>
										</div>
										
										<script>
											$(".aclick_<?php echo $business->form_id;?>").click(function(){
												
											$(".m-max2_<?php echo $business->form_id;?>").hide();
											
											$(".m-max_<?php echo $business->form_id;?>").toggle();
										});
										</script>
										
										
										<table width="100%" style="margin-top: 20px; display:none;" border="1" class="pd-box m-max_<?php echo $business->form_id;?>" >
											<tr>
												<td style="width:120px"><h5>Name </h5></td>
												<td style="width:120px"><h5>Email </h5></td>
												<td style="width:120px"><h5>Contact To </h5></td>
												<td style="width:120px"><h5>Phone No. </h5></td>
												<td><h5>Message </h5></td>
												<td><h5>Property Name </h5></td>
												<td><h5>Request to view * values</h5></td>
											</tr>
											<?php 												
												
													
											
												foreach ($getContactList[$business->form_id] as $value)	{
													
												
												?>
											<tr>
												<td><span><?php echo $value['name'];?></span></td>
												<td><span><?php if($value['view_request']=='1'){
												
													echo $value['email'];
												
												}else{
													echo '****';
													
												}?></span></td>
												<td><span><?php if($value['view_request']=='1'){
												
													echo $value['contact_to'];
												
												}else{
													echo '****';
													
												}?></span></td>
												<td><span><?php if($value['view_request']=='1'){
												
													echo $value['mobile'];
												
												}else{
													echo '****';
													
												}?></span></td>
												<td><span><?php if($value['view_request']=='1'){
												
													echo $value['message'];
												
												}else{
													echo '****';
													
												}?></span></td>
												<td><span><a target="_blank" href="<?php echo base_url();?>browse-sector-listing-details/<?php echo $value['form_id']; ?>/<?php echo $value['business_type']; ?>"><?php echo $value['key_headline'];?></a></span></td>
												<td><button type="submit" name="request" class="label label-danger">Request</button></td>
											</tr>
										<?php }?>
											
											
									</table>
									
									<script>
											$(".aclick2_<?php echo $business->form_id;?>").click(function(){
												
											$(".m-max_<?php echo $business->form_id;?>").hide();
											
											$(".m-max2_<?php echo $business->form_id;?>").toggle();
										});
										</script>
										
										
										<table width="100%" style="margin-top: 20px; display:none;" border="1" class="pd-box m-max2_<?php echo $business->form_id;?>" >
											<tr>
												
												<td><h5>Name </h5></td>
												<td><h5>Email </h5></td>
												<td><h5>Phone No. </h5></td>
												<td><h5>Datetime </h5></td>
												<td><h5>Request to view * values</h5></td>
											</tr>
											<?php 												
												
													
											
												foreach ($getSaveList[$business->form_id] as $val)	{
													
												
												?>
											<tr>
											
												<td><span><?php echo $val['name'];?></span></td>
												<td><span><?php if($val['request_view']=='1'){
												
													echo $val['email'];
												
												}else{
													echo '****';
													
												}?></span></td>
												<td><span><?php if($val['request_view']=='1'){
												
													echo $val['contact'];
												
												}else{
													echo '****';
													
												}?></span></td>
												<td><span><?php echo $val['like_datetime'];?></span></td>
												<td><button type="submit" name="request" class="label label-danger">Request</button></td>
												
											</tr>
										<?php }?>
											
											
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