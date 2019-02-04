<?php
 //var_dump($employees);
?>
<div class="main-content">
 <h1 class="page-title">Seller </h1>
 <div class="row ">
  <div class="col-md-12">
   <div class="panel panel-default">
    <div class="panel-body">
    <form class="form-horizontal" method="POST" action="<?php echo base_url();?>admin/assign">
      <div class="form-group"> 
       <label class="col-sm-2 control-label" for="assigned_to">Assign To</label> 
       <div class="col-sm-5"> 
        <select class="form-control" id="assigned_to" name="assigned_to">
         <option value="">Select</option>
<?php
foreach( $employees as $employee ){
?>	
	 <option value="<?php echo $employee->id;?>" <?php if($employee->id == $assignedTo){echo 'selected="Selected"';}?>><?php echo $employee->name;?></option>
<?php
}
?>
        </select>
       </div>
      </div>
      <div class="form-group"> 
       <label class="col-sm-2 control-label" for="status">Status</label> 
       <div class="col-sm-5"> 
        <select class="form-control" id="status" name="status">
         <option value="">Select Status</option>
<?php
foreach( unserialize(ASSIGN_STATUS) as $assignedStatusValue => $assignedStatusName ){
?>
	<option value="<?php echo $assignedStatusValue;?>" <?php if(strcasecmp($assignedTo, 'NA') != 0 && strcasecmp($assignedStatusValue, 'assigned') == 0){echo 'selected="selected"';} ?>><?php echo $assignedStatusName;?></option>
<?php
}
?>
        </select>
       </div> 
      </div>
      <div class="form-group"> 
       <label class="col-sm-2 control-label" for="inputEmail3">Message</label> 
       <div class="col-sm-5"> 
        <textarea placeholder="Message" rows="3" class="form-control" id="comment" name="comment"></textarea>
        <input type="hidden" id="case_type" name="case_type" value="sell" />
	<input type="hidden" id="case_id" name="case_id" value="<?php echo $formId;?>" />
       </div>
      </div>
      <div class="form-group"> 
       <div class="col-sm-offset-2 col-sm-10"> 
        <button class="btn btn-primary" type="submit">Assign</button> 
       </div>
      </div>
     </form>
    </div>
   </div>
  </div>   
</div>
