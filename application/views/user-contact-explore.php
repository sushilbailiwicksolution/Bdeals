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
      <div class="col-md-9">
       <h2>My Account</h2>
      </div>
    
     </div>
     <div class="row">
      <div class="col-sm-3">
	   <div class="col-md-12 padd0">
							<div class="wel-user text-center">
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
		<li><a class="active-page"  href="<?php echo base_url();?>user_query">Query / Enquiry</a></li>
		<li><a href="<?php echo base_url();?>user_contacts/basic/0">In Box</a></li>
		<!--<li><a href="<?php echo base_url();?>user-contact-us-details">Enquiry</a></li>-->
		<li><a href="<?php echo base_url();?>change-password">Change Password</a></li>
		<li><a href="<?php echo base_url();?>invoice-payment">Invoice / Payment</a></li>  
         </ul>
        </div>
		
      </div>
      <div class="col-sm-9 r-bgc">
	  <h2>Query Details</h2>
       <table class="table">
        <thead>
         <tr>
          <td><b>Query Id :</b> <?php echo $userQueryDetails[0]['id'];?> </td>
         </tr>
          <tr>
          <td><b>Name :</b> <?php echo $userQueryDetails[0]['name'];?> </td>
         </tr>
          <tr>
          <td><b>Email :</b> <?php echo $userQueryDetails[0]['email'];?> </td>
         </tr>
		  <tr>
          <td><b>City :</b> <?php echo $userQueryDetails[0]['city'];?> </td>
         </tr>
		  
		 <tr>
          <td><b>Contact Number :</b> <?php echo $userQueryDetails[0]['contact_number'];?> </td>
         </tr>
		
		 <tr>
          <td><b>Message :</b> <?php echo $userQueryDetails[0]['message'];?> </td>
         </tr>
		 <tr>
          <td><b>Query Datetime :</b> <?php echo $userQueryDetails[0]['query_datetime'];?> </td>
         </tr>
		 <tr>
          <td><b>Comment :</b> <?php echo $userQueryDetails[0]['comment'];?> </td>
         </tr>
		 <tr>
          <td><b>Query Purpose :</b> <?php echo $userQueryDetails[0]['query_purpose'];?> </td>
         </tr>
		  <tr>
          <td><b>Query Meeting Date & Time :</b> <?php echo $userQueryDetails[0]['mdate'].' '.$userQueryDetails[0]['mtime'];?> </td>
         </tr>
		  <tr>
          <td><b>Meeting Place :</b> <?php echo $userQueryDetails[0]['mplace'];?> </td>
         </tr>
		 <tr>
          <td><b>Query Status :</b> <?php if($userQueryDetails[0]['query_status']=='0'){
		  
	  echo 'Pending';
	  }else if($userQueryDetails[0]['query_status']=='1'){
		  
		echo 'Follow up';  
	  }else{
		  
		 echo 'Done';   
	  }
	  
	  ?></td>
         </tr>
		
          
         </tr>
        </thead>

       </table>
      </div>  
	   </div>		
 <div class="col-md-12 wel-user ">
  
 <div class="col-md-4"><h5>Executive Name : <?php echo $assignedEmpDetails[0]->name;?></h5></div>
 <div class="col-md-4"><h5>Executive Email : <?php echo $assignedEmpDetails[0]->email;?></h5></div>
<div class="col-md-4"><h5>Executive Phone : <?php echo $assignedEmpDetails[0]->contact_no;?></h5></div>
      </div>	 
    
    </div>
   </div>
  </div>
 </div>
</div>
