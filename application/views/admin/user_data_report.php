<?php

?>
<div class="main-content">

 <div class="row">

                
  <div class="col-md-12">
   <table  class="table" border="1">
    <thead>
     <tr>
      <th style="background-color:#EC0001;color:#fff;">Sr.No.</th>
      <th style="background-color:#EC0001;color:#fff;">Customer ID</th>
      <th style="background-color:#EC0001;color:#fff;">Name</th>
      <th style="background-color:#EC0001;color:#fff;">Email ID</th>
      <th style="background-color:#EC0001;color:#fff;">User Created Date</th>
      <th style="background-color:#EC0001;color:#fff;">Company Name</th>
      <th style="background-color:#EC0001;color:#fff;">Address</th>
      <th style="background-color:#EC0001;color:#fff;">Location</th>
     
      <th style="background-color:#EC0001;color:#fff;">Status</th>
     
     </tr>
	 <?php 
	 $i=1;
	 foreach($usersList as $userdata){
		 
	if ( $userdata['status'] == 1 ){
				$status = 'Assigned To'.' '.$userdata['Empname'];
			}else if( $userdata['status'] == 0 ){
				$status = 'Pending for approval';
			}else if ( $userdata['status'] == 2 ){
				$status = 'Rejected';
			}
	 
	?>
	 <tr>
      <th class="center"><?php echo $i;?></th>
      <th class="center"><?php echo $userdata['customer_id'];?></th>
      <th class="center"><?php echo $userdata['name'];?></th>
      <th class="center"><?php echo $userdata['customer_id'];?></th>
      <th class="center"><?php echo $userdata['register_date'];?></th>
      <th class="center"><?php echo $userdata['company_name'];?></th>
      <th class="center"><?php echo $userdata['address'];?></th>
      <th class="center"><?php echo $userdata['location'];?></th>
     
      <th class="center"><?php echo $status;?></th>
     
     </tr>
	 <?php $i++; }?>
    </thead>
    <tbody>
     
    </tbody>
   </table>
  </div>
 </div>
</div>
