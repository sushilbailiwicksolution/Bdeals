<?php
 //var_dump($queryDetails);
 $disabledRejected = '';
 $titleRejected = '';

 if ( $queryDetails[0]['query_status'] == 2 ){
	 $disabledRejected = 'disabled';
	 $titleRejected    = 'User already rejected';
 }else if ( $queryDetails[0]['query_status'] == 1 ){
	 $disabledRejected = 'disabled';
	 $titleRejected    = 'User already approved you can not Reject';
 }
$GetUserType=$this->session->userdata('admin_type');
?>
<div class="main-content">
<h1 class="page-title"><?php echo $heading;?> <a href="<?php echo base_url();?>admin/newquery" style="float:right;color:#fff;">Back To Home</a></h1>


 <div class="panel panel-default">
  <div class="panel-body">
   <div class="form-c-box">
   <form id="frm_queryinfo" name="frm_queryinfo" method="POST" action="<?php echo base_url();?>admin/editquery">

     <div class="areu">
     
	  <div class="col-sm-6">
       <div class="form-group">
        <label for="">Query Id: </label>
        <?php echo $queryDetails[0]['id'];?>
		<input type="hidden" id="query_id" name="query_id" value="<?php echo $queryDetails[0]['id'];?>" />
		<input type="hidden" id="url" name="url" value="newquery_explore" />
      </div>
     </div>
	   <div class="col-sm-6">
      <div class="form-group">
       <label for="">Email: </label>
       <?php echo $queryDetails[0]['email'];?>
      </div>
     </div>
      <div class="col-sm-6">
       <div class="form-group">
        <label for="">Name *</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="00" value="<?php echo $queryDetails[0]['name'];?>" disabled>
      </div>
     </div>
    
     <div class="col-sm-6">
      <div class="form-group">
       <label for="">City *</label>
       <input type="text" class="form-control" id="city" name="city" placeholder="00" value="<?php echo $queryDetails[0]['city'];?>" disabled>
      </div>
     </div>
	 
	 <div class="col-sm-6">
      <div class="form-group">
       <label for="">Contact Number *</label>
       <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="00" value="<?php echo $queryDetails[0]['contact_number'];?>" disabled>
      </div>
     </div>
	 
	 <div class="col-sm-6">
      <div class="form-group">
       <label for="">Query Time *</label>
       <input type="text" class="form-control" id="time" name="time" placeholder="00" value="<?php echo $queryDetails[0]['query_datetime'];?>" disabled>
      </div>
     </div>
	 
	 <div class="col-md-12">
      <div class="form-group">
       <label for="">Message *</label>
       <input type="text" class="form-control" id="message" name="message" placeholder="00" value="<?php echo $queryDetails[0]['message'];?>" disabled>
      </div>
     </div>
	 
	 
	 
     <div class="col-md-12">
      <p class="sm-p">We will be contacting you via Email or Telephone, please verify that the Email address and Phone no., you entered above is correct and make sure that your spam filter allows you to receive email from businessdeals.in</p>
     </div>
    </div>
    <div class="col-sm-4"></div>
    <div class="col-sm-4"></div>
	 <div class="row">
  <div class="col-md-12" style="padding-bottom:10px;">
    <button type="button" class="savebtn editdetails" >Edit</button>
	<?php if($GetUserType=='admin'){?>
   <?php if ( $queryDetails[0]['query_status'] ==0 ){   ?>
   <a href="<?php echo base_url();?>admin/<?php echo $to;?>_assign/<?php echo $queryDetails[0]['id'];?>"><button type="button" class="savebtn">Assign</button></a>
   <?php }if ( $queryDetails[0]['query_status'] ==1 ){   ?>
	<a href="<?php echo base_url();?>admin/newquery_reassign/<?php echo $queryDetails[0]['id'];?>"><button type="button" class="savebtn">Re Assign</button></a>
	<?php }?>
   <a href="<?php echo base_url();?>admin/<?php echo $to;?>_reject/<?php echo $queryDetails[0]['id'];?>"><button type="button" class="savebtn" <?php echo $disabledRejected;?> title="<?php echo $titleRejected;?>"><?php if ( $queryDetails[0]['query_status'] == 2 ){ echo "Rejected User";}else{?>
   Reject<?php }?></button></a>
	<?php }?>
    <?php if ( $queryDetails[0]['query_status'] ==1){   ?>
    <a href="<?php echo base_url();?>admin/newquery_case/query/<?php echo $queryDetails[0]['assigned_to'];?>/<?php echo $queryDetails[0]['id'];?>"><button type="button" class="savebtn">Case</button></a>
	<?php } if ( $queryDetails[0]['query_status'] ==1){   ?>
    <a href="<?php echo base_url();?>admin/queries_assigned_details/<?php echo $queryDetails[0]['id'];?>" target="_blank"><button type="button" class="savebtn" >View Details</button></a>
	<?php }if ( $queryDetails[0]['query_status'] ==2){   ?>
    <a href="<?php echo base_url();?>admin/queries_rejected_reason/<?php echo $queryDetails[0]['id'];?>" target="_blank"><button type="button" class="savebtn" >View Details</button></a>
	<?php }?>
  </div>
 </div>
    <div class="col-sm-4 updateshow" style="padding-right:0;display:none;">
     <button type="submit" class="savebtn">Update</button>
    </div>
   </form>
  </div>
 </div>
</div>
