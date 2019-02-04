<?php

?>
<div class="main-content">

 <div class="row">

                
  <div class="col-md-12">
   <table  class="table" border="1">
    <thead>
     <tr>
      <th style="background-color:#EC0001;color:#fff;">Sr.No.</th>
      <th style="background-color:#EC0001;color:#fff;">Form ID</th>
      <th style="background-color:#EC0001;color:#fff;">Name</th>
      <th style="background-color:#EC0001;color:#fff;">Email ID</th>
      <th style="background-color:#EC0001;color:#fff;">Date of Query</th>
      <th style="background-color:#EC0001;color:#fff;">City</th>
      <th style="background-color:#EC0001;color:#fff;">Message From Customer</th>
      <th style="background-color:#EC0001;color:#fff;">Status</th>
     
     </tr>
	 <?php 
	 $i=1;
	 foreach($usersList as $userdata){
		 
	if ( $userdata['query_status'] == 1 ){
				$status = 'Assigned To'.' '.$userdata['Empname'];
			}else if( $userdata['query_status'] == 0 ){
				$status = 'Pending for approval';
			}else if ( $userdata['query_status'] == 2 ){
				$status = 'Rejected';
			}
	 
	?>
	 <tr>
      <th class="center"><?php echo $i;?></th>
      <th class="center"><?php echo $userdata['id'];?></th>
      <th class="center"><?php echo $userdata['name'];?></th>
      <th class="center"><?php echo $userdata['email'];?></th>
      <th class="center"><?php echo $userdata['query_datetime'];?></th>
      <th class="center"><?php echo $userdata['city'];?></th>
      <th class="center"><?php echo $userdata['message'];?></th>
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
