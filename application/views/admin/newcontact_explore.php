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
<h1 class="page-title"><?php echo $heading;?> </h1>


 <div class="panel panel-default">
  <div class="panel-body">
   <div class="form-c-box">
   <form id="frm_queryinfo" name="frm_queryinfo" method="POST" action="<?php echo base_url();?>admin/editcontact">
    
     <div class="areu">
     
	  <div class="col-sm-6">
       <div class="form-group">
        <label for="">Contact Id : </label>
        <?php echo $queryDetails[0]['id'];?>
		<input type="hidden" id="query_id" name="query_id" value="<?php echo $queryDetails[0]['id'];?>" />
		<input type="hidden" id="url" name="url" value="newcontact_explore" />
      </div>
     </div>
	  
      <div class="col-sm-6">
       <div class="form-group">
        <label for="">Name : </label>
        <?php echo $queryDetails[0]['name'];?>
      </div>
     </div>
     <div class="col-sm-6">
      <div class="form-group">
       <label for="">Email : </label>
      <?php echo $queryDetails[0]['email'];?>
      </div>
	   </div>
	   <div class="col-sm-6">
      <div class="form-group">
       <label for="">Query Time : </label>
       <?php echo $queryDetails[0]['query_datetime'];?>
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
	 
	
	 
	 <div class="col-md-12">
      <div class="form-group">
       <label for="">Query Message *</label>
       <input type="text" class="form-control" id="message" name="message" placeholder="00" value="<?php echo $queryDetails[0]['message'];?>" disabled>
      </div>
     </div>
	  <div class="col-md-12">
      <div class="form-group">
       <label for="">Query Purpose *</label>
       <input type="text" class="form-control" id="query_purpose" name="query_purpose" placeholder="00" value="<?php echo $queryDetails[0]['query_purpose'];?>" disabled>
      </div>
     </div>
	  <div class="col-sm-6">
      <div class="form-group">
       <label for="">Meeting Type *</label>
       <input type="text" class="form-control" id="mtype" name="mtype" placeholder="00" value="<?php echo $queryDetails[0]['mtype'];?>" disabled>
      </div>
     </div>
	  <div class="col-sm-6">
      <div class="form-group">
       <label for="">Meeting Time *</label>
       <input type="time" class="form-control" id="mtime" name="mtime" value="<?php echo $queryDetails[0]['mtime'];?>" disabled>
      </div>
     </div>
	   <div class="col-sm-6">
      <div class="form-group">
       <label for="">Meeting Date *</label>
       <input type="date" class="form-control" id="mdate" name="mdate"  value="<?php echo $queryDetails[0]['mdate'];?>" disabled>
      </div>
     </div>
	   <div class="col-sm-6">
      <div class="form-group">
       <label for="">Meeting Place *</label>
       <input type="text" class="form-control" id="mplace" name="mplace"  value="<?php echo $queryDetails[0]['mplace'];?>" disabled>
      </div>
     </div>
	   <div class="col-sm-6">
      <div class="form-group">
       <label for="">Meeting Invoice Type *</label>
       <input type="text" class="form-control" id="mtax_type" name="mtax_type"  value="<?php echo $queryDetails[0]['mtax_type'];?>" disabled>
      </div>
     </div>
 <div class="col-sm-6">
      <div class="form-group">
       <label for="">Meeting Agenda *</label>
       <input type="text" class="form-control" id="meeting_agenda" name="meeting_agenda"  value="<?php echo $queryDetails[0]['meeting_agenda'];?>" disabled>
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
    <button type="button" class="savebtn editContactdetails" >Edit</button>
	<?php if($GetUserType=='admin'){?>
   <?php if ( $queryDetails[0]['query_status'] ==0 ){   ?>
   <a href="<?php echo base_url();?>admin/newcontact_assign/<?php echo $queryDetails[0]['id'];?>"><button type="button" class="savebtn">Assign</button></a>
   <?php }if ( $queryDetails[0]['query_status'] ==1 ){   ?>
	<a href="<?php echo base_url();?>admin/newcontact_reassign/<?php echo $queryDetails[0]['id'];?>"><button type="button" class="savebtn">Re Assign</button></a>
	<?php }?>
   <a href="<?php echo base_url();?>admin/newcontact_reject/<?php echo $queryDetails[0]['id'];?>"><button type="button" class="savebtn" <?php echo $disabledRejected;?> title="<?php echo $titleRejected;?>"><?php if ( $queryDetails[0]['query_status'] == 2 ){ echo "Rejected User";}else{?>
   Reject<?php }?></button></a>
	<?php }?>
    <?php if ( $queryDetails[0]['query_status'] ==1){   ?>
    <a href="<?php echo base_url();?>admin/newquery_case/query/<?php echo $queryDetails[0]['assigned_to'];?>/<?php echo $queryDetails[0]['id'];?>"><button type="button" class="savebtn">Case</button></a>
	<?php } if ( $queryDetails[0]['query_status'] ==1){   ?>
    <a href="<?php echo base_url();?>admin/contact_assigned_details/<?php echo $queryDetails[0]['id'];?>" target="_blank"><button type="button" class="savebtn" >View Details</button></a>
	<?php }if ( $queryDetails[0]['query_status'] ==2){   ?>
    <a href="<?php echo base_url();?>admin/contact_rejected_reason/<?php echo $queryDetails[0]['id'];?>" target="_blank"><button type="button" class="savebtn" >View Details</button></a>
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
