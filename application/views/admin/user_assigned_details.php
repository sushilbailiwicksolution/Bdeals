<?php
//var_dump($userDetails);
 
 ?>
<div class="main-content">
<h1 class="page-title"><?php echo $heading;?> </h1>

 <div class="panel panel-default">
  <div class="panel-body">
   <div class="form-c-box">

     <div class="areu">
    <div class="col-md-12">
       <div class="form-group">
        <label for="">Customer Id</label> :-
        <?php echo $queryDetails[0]['customer_id'];?>
      </div>
     </div>
	  <div class="col-md-12">
       <div class="form-group">
        <label for="">Assigned To</label> :-
        <?php echo $queryDetails[0]['name'];?>
      </div>
     </div>
	   <div class="col-md-12">
       <div class="form-group">
        <label for="">Assigned Comments/ Remarks</label> :-
        <?php echo $queryDetails[0]['comment'];?>
      </div>
     </div>
	 <div class="col-md-12">
       <div class="form-group">
        <label for="">Date Time</label> :-
        <?php echo $queryDetails[0]['date'];?>
      </div>
     </div>
    </div>
    
   <div class="col-md-12">
   <table class="table table-striped table-bordered table-hover">
    <thead>
     <tr>
      <th class="center">Sr.No.</th>
      <th class="center" id="del">Form ID</th>
      <th class="center" id="active">Name</th>
      <th class="center">Email ID</th>
      <th class="center">Business Type</th>
      <th class="center">User Case Details</th>
     </tr>
    </thead>
    <tbody>
	<?php 
	$i=1;
	foreach($userList as $list){?>
      <tr>
      <th class="center"><?php echo $i++;?></th>
      <th class="center" id="del"><?php echo $list['form_id'];?></th>
      <th class="center" id="active"><?php echo $list['name'];?></th>
      <th class="center"><?php echo $list['email'];?></th>
      <th class="center"><?php 
					
					if($list['business_type']=='sell_a_business'){
					
					echo 'Business For Sell';
					}
					else if($list['business_type']=='jv_business'){
					
					echo 'Joint Venture';
					
					}else if($list['business_type']=='startup_business'){
					
					echo 'Start Up Business';
					
					}else{
					
					echo 'Real Estate';
					
					}?></th>
	  <th class="center"><a href="<?php echo base_url();?>admin/user-form-case-details/<?php echo $list['form_id'];?>">View</a></th>
     </tr>
	<?php }?>
    </tbody>
   </table>
  </div>
  </div>
 </div>
</div>
