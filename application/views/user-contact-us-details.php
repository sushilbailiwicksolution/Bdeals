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
		<li><a    href="<?php echo base_url();?>user_contacts/basic/0">In Box</a></li>
		<!--<li><a class="active-page"  href="<?php echo base_url();?>user-contact-us-details">Enquiry</a></li>-->
		<li><a href="<?php echo base_url();?>change-password">Change Password</a></li>
		<li><a href="<?php echo base_url();?>invoice-payment">Invoice / Payment</a></li>  
        </ul>
       </div>
	   <div class="col-md-12 wel-user ">
       <h5>Executive Name : <?php echo $assignedEmpDetails[0]->name;?></h5>
        <p>Executive Email : <?php echo $assignedEmpDetails[0]->email;?></p>
		<p>Executive Phone : <?php echo $assignedEmpDetails[0]->contact_no;?></p>
      </div>
      </div>
      <div class="col-sm-9 r-bgc list-box mt0">
		<table width="100%" style="margin-top: 20px;" border="1" class="pd-box" >
											<tr>
												<td style="width:120px"><h5>Name </h5></td>
												<td style="width:120px"><h5>Email </h5></td>
												<td style="width:120px"><h5>Contact to </h5></td>
												
												<td><h5>Query Purpose </h5></td>
												<td><h5>Message </h5></td>
												<td><h5>Meeting Date & time </h5></td>
												<td><h5>Meeting Place </h5></td>
												<td><h5>Status</h5></td>
												
											</tr>
											<?php 												
												
													
											
												foreach( $userEnquiry as $Conlist ){
													
													//print_r($userEnquiry);
												
												?>
											<tr>
												<td><span><?php echo $Conlist['name'];?></span></td>
												<td><span><?php echo $Conlist['email'];?></span></td>
												<td><span><?php echo $Conlist['contact_number'];?></span></td>
												<td><span><?php echo $Conlist['query_purpose'];?></span></td>
												<td><span><?php echo $Conlist['message'];?></span></td>
												<td><span><?php echo $Conlist['mdate'].' '.$Conlist['mtime'];?></span></td>
												<td><span><?php echo $Conlist['mplace'];?></span></td>
												<td><span><?php if($Conlist['query_status']=='0'){
		  
	  echo 'Pending';
	  }else if($Conlist['query_status']=='0'){
		  
		echo 'Follow up';  
	  }else{
		  
		 echo 'Done';   
	  }
	  
	  ?></span></td>
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
