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
      <th class="center">Listing Id</th>
      <th class="center">Category</th>
      <th class="center" id="del">Name</th>
	  <th class="center">Contact No</th>
      <th class="center" id="active">Email Id</th>
      <th class="center" id="active">City</th>
	  <th class="center">Date of Inactivation</th>
	  <th class="center">Total View Count</th>
	  <th class="center">Total Save(Favorite) Count</th>
	  <th class="center">Contact Seller Count</th>
     
      <th class="center">Assign to </th>
     
      <th class="center">Status</th>
      <th class="center"></th>
     </tr>
	 <?php 
	
	
		$i  = 1;
	 foreach($userBusinessData as $userdata){
		 
		
	//	print_r($userdata);
		 
		 //die;
	
	
	$SellerCount=$this->JV->ContactCountByFormIdUser($userdata['form_id']);
	
	$businessStatus  = $this->JV->getBusinessStatusByFormId($userdata['form_id']);
	
	//city
					if($userdata['location_city']=='Other'){
						$city=$userdata['other_city'];
					}else{
						$city=$this->cachemethods->getCityNameById($userdata['location_city'],$userdata['location_state']);	

					}


				
				if($userdata['business_add_date']==''){
					
					$dateval=$userdata['added_date'];
				}
				if($userdata['added_date']==''){
					
					$dateval=$userdata['business_add_date'];
				}
				if($userdata['added_date']!='' and $userdata['business_add_date']!=''){
					
					$dateval=$userdata['added_date'];
				}

				
	?>
	 <tr>
	
	 
      <th class="center"><?php echo $i;?></th>
      <th class="center"><?php echo $dateval;?></th>
      <th class="center"><?php echo $userdata['form_id'];?></th>
      <th class="center"><?php echo $this->cachemethods->getCatNameByCId($userdata['listing_category']);?></th>
      <th class="center"><?php echo $userdata['name'];?></th>
      <th class="center"><?php echo $userdata['contact'];?></th>
      <th class="center"><?php echo $userdata['email'];?></th>
      <th class="center"><?php echo $city;?></th>
      <th class="center"><?php echo $userdata['expiry_date'];?></th>
      <th class="center"><?php echo $userdata['num_business_viewed'];?></th>
      <th class="center"><?php echo $userdata['add_to_favorite'];?></th>
      <th class="center"><?php echo $SellerCount;?></th>
      <th class="center"><?php echo $userdata['Empname'];?></th>
      <th class="center"><?php echo $businessStatus;?></th>
     
     
     </tr>
	 <?php $i++; }?>
    </thead>
    <tbody>
     
    </tbody>
   </table>
  </div>
 </div>
</div>
