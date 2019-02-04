<?php

?>
<div class="main-content">

 <div class="row">

                
  <div class="col-md-12">
   <table  class="table" border="1">
    <thead>
     <tr>
      <th class="center">Sr.No.</th>
       <th class="center">Date</th>
       <th class="center" id="del">Emp. Name</th>
       <th class="center">Follow up Date</th>
        <th class="center">Follow Up Details</th>
       <th class="center">For Customer Desc.</th>
       <th class="center">Status</th>
     </tr>
	 <?php 
	 $i=1;
	 foreach($usersList as $userdata){
		 
		// print_r($userdata);
		 
	/*if ( $userdata['query_status'] == 1 ){
				$status = 'Assigned To'.' '.$userdata['Empname'];
			}else if( $userdata['query_status'] == 0 ){
				$status = 'Pending for approval';
			}else if ( $userdata['query_status'] == 2 ){
				$status = 'Rejected';
			}*/
	 
	?>
	 <tr>
      <th class="center"><?php echo $i;?></th>
      <th class="center"><?php echo $userdata['date'];?></th>
      <th class="center"><?php echo $userdata['name'];?></th>
      <th class="center"><?php echo $userdata['followup_date'];?></th>
      <th class="center"><p><?php echo $userdata['comment'];?></th>
	   <th class="center"><p><?php echo $userdata['for_customer_comment'];?></th>
      <th class="center"><?php echo $userdata['status'];?></th>
     </tr>
	 <?php $i++; }?>
    </thead>
    <tbody>
     
    </tbody>
   </table>
  </div>
 </div>
</div>
