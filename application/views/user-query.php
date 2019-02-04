<?php
//print_r($userQuery);
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
		<li><a  class="active-page" href="<?php echo base_url();?>user_query">Query / Enquiry</a></li>
		<li><a href="<?php echo base_url();?>user_contacts/basic/0">In Box</a></li>
		<!--<li><a  href="<?php echo base_url();?>user-contact-us-details">Enquiry</a></li>-->
		<li><a href="<?php echo base_url();?>change-password">Change Password</a></li>
		<li><a href="<?php echo base_url();?>invoice-payment">Invoice / Payment</a></li>  
        </ul>
       </div>
	  
      </div>
       <div class="col-sm-9 r-bgc list-box mt0">
		
	  <h3>Query</h3>
      <table width="100%" style="margin-top: 20px;" border="1" class="pd-box" >
        <thead>
         <tr>
          <td><h5>S. No.</h5></td>
		  <td><h5>Id</h5></td>
          <td><h5>Name</h5></td>
          <td><h5>Email</h5></td>
          <td><h5>Contact</h5></td>
          <td><h5>Status</h5></td>
          <td><h5>Explore</h5></td>
         </tr>
        </thead>
        <tbody>
<?php



        if( isset($userQuery) && count($userQuery) > 0 ){
         $i = 0;
		 
		 //print_r($userQuery);
         foreach( $userQuery as $queries ){
			 
			 
			// echo count($userQuery);
?>

         <tr>
	  <td><?php echo ++$i;?></td>
	  <td class="text-center"><?php echo $queries['id'];?></td>
	  <td class="text-center"><?php echo $queries['name'];?></td>
	  <td class="text-center"><?php echo $queries['email'];?></td>
	  <td class="text-center"><?php echo $queries['contact_number'];?></td>
	  <td class="text-center"><?php if($queries['query_status']=='0'){
		  
	  echo 'Pending';
	  }else if($queries['query_status']=='0'){
		  
		echo 'Follow up';  
	  }else{
		  
		 echo 'Done';   
	  }
	  
	  ?></td>
		 <td class="text-center"><a href="user-query-explore/<?php echo $queries['id'];?>" class="label label-danger">Explore</a></td>
         </tr>
		 <?php if(count($userQuery)==0){?>
		 <tr>
		 <td colspan="6" align="center">No Query Found </td>
		 </tr>
		 
<?php
         }
		 }
        }
?>
        </tbody>
       </table>
      </div>  
	  <div class="col-sm-3"></div>
      <div class="col-sm-9 r-bgc list-box mt0">
	    <h3>Enquiry</h3>
		<table width="100%" style="margin-top: 20px;" border="1" class="pd-box" >
											<tr>
												  
												  <td><h5>S. No.</h5></td>
												  <td><h5>Id</h5></td>
												  <td><h5>Name</h5></td>
												  <td><h5>Email</h5></td>
												  <td><h5>Contact</h5></td>
												  <td><h5>Status</h5></td>
												  <td><h5>Action</h5></td>
												
											</tr>
											<?php 												
												
													
											 $z = 0;
												foreach( $userEnquiry as $Conlist ){
													
													//echo count($userEnquiry)."dfgdfgdggfdgdg";
												
												?>
											<tr>
												<td><?php echo ++$z;?></td>
												<td><span><?php echo $Conlist['id'];?></span></td>
												<td><span><?php echo $Conlist['name'];?></span></td>
												<td><span><?php echo $Conlist['email'];?></span></td>
												<td><span><?php echo $Conlist['contact_number'];?></span></td>
												
												<td><span><?php if($Conlist['query_status']=='0'){
		  
	  echo 'Pending';
	  }else if($Conlist['query_status']=='0'){
		  
		echo 'Follow up';  
	  }else{
		  
		 echo 'Done';   
	  }
	  
	  ?></span></td>
	  <td><span><a href="user-contact-explore/<?php echo $Conlist['id'];?>" class="label label-danger">Explore</a></span></td>
											</tr>
											<?php if(count($userEnquiry)==0 || count($userEnquiry)==''){?>
		 <tr>
		 <td colspan="6" align="center">No Enquiry Found <a href="<?php echo base_url()?>contact-us">Make Enquiry</a></td>
		 </tr>
											<?php } 
											}?>
											
											
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
