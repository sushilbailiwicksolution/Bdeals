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
       <div class="col-md-3 wel-user">
        <h5><?php echo $assignedEmpDetails[0]->name;?></h5>
	<p><?php echo $assignedEmpDetails[0]->email;?>, <?php echo $assignedEmpDetails[0]->contact_no;?></p>
       </div>
      </div>
      <div class="row">
       <div class="col-sm-3">
        <div class="feat-c-box">
         <ul>
          <li><a href="<?php echo base_url();?>userprofile">My Account</a></li>
<?php /*<li><a href="package.php">Package</a></li> */ ?>
          <li><a class="active-page" href="<?php echo base_url();?>user_business_profile">Business Profile</a></li>
	  <li><a href="<?php echo base_url();?>user_query">Query</a></li>
	  <li><a href="<?php echo base_url();?>user_contacts/basic/0">Contact</a></li>
          <li><a href="<?php echo base_url();?>user-favourite">Favourite</a></li>  
         </ul>
        </div>
       </div>
       <div class="col-sm-9 r-bgc">
        <table class="table">
         <thead>
          <tr>
           <th class="text-left">S. No.</th>
           <th >Tittle</th>
           <th >View</th>
           <th >Save</th>
           <th >Contact</th>
           <th >Business Type</th>
           <th >Package</th>
           <th>Status</th>
           <th></th>
          </tr>
         </thead>
	 <tbody>
<?php
       if( isset($business_list) ){
	$i = 0;
        foreach( $business_list as $business ){
?>
          <tr>
	  <td><?php echo ++$i;?></td>
	  <td class="text-center"><?php echo $business->key_headline; ?></td>
          <td class="text-center">--</td>
          <td class="text-center">--</td>
	  <td class="text-center"><?php echo $business->contact;?></td>
          <td class="text-center"><?php echo $business->business_type; ?></td>
          <td class="text-center"><p style="margin: 0px;">Basic</p> <a href="list-your-business-package-details.php" class="label label-danger">Upgrade</a></td>
          <td class="text-center">Approved</td>
	  <td class="text-center"><a href="<?php echo base_url();?>login-business-profile-form<?php if ($business->business_type=='jv_business'){echo '-jv';}else if($business->business_type=='buy_a_business'){echo '-buy';}else if($business->business_type=='startup_business'){echo '-startup';}  ?>/<?php echo $assignedEmpDetails[0]->name.'/'.$business->form_id ?>/1234/abc"><button class="btn btn-danger btn-sm">Explore</button></a></td>
	 </tr>
<?php
        }
       }
?>
        </tbody>
       </table>
      </div>
     </div>		
    </div>
   </div>
  </div>
 </div>
</div>
