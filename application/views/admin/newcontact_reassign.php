<?php
 //var_dump($employees);
 //var_dump($userDetails);
?>
<div class="main-content">
<h1 class="page-title"><?php echo $heading;?> (<?php echo $queryDetails[0]['name']?>)</h1>
 <div class="row ">
  <div class="col-md-12">
   <div class="panel panel-default">
    <div class="panel-body">
    <form class="form-horizontal" method="POST" action="<?php echo base_url();?>admin/contact/reassign">
      <div class="form-group"> 
       <label class="col-sm-2 control-label" for="assigned_to">Assign To</label> 
       <div class="col-sm-5"> 
        <input type="hidden" id="status" name="status" value="Assigned" />
	<input type="hidden" id="to" name="to" value="<?php echo $to;?>" />
	<input type="hidden" id="responsibility_type" name="responsibility_type" value="New" />
        <select class="form-control" id="assigned_to" name="assigned_to">
         <option value="">Select</option>
<?php
foreach( $employees as $employee ){
?>	
	 <option value="<?php echo $employee['id'];?>"><?php echo $employee['name'];?></option>
<?php
}
?>
        </select>
       </div>
      </div>
<?php /*
      <div class="form-group"> 
       <label class="col-sm-2 control-label" for="status">Status</label> 
       <div class="col-sm-5"> 
        <select class="form-control" id="status" name="status">
         <option value="">Select Status</option>
<?php
foreach( unserialize(ASSIGN_STATUS) as $assignedStatusValue => $assignedStatusName ){
?>
	<option value="<?php echo $assignedStatusValue;?>"><?php echo $assignedStatusName;?></option>
<?php
}
?>
	</select>
       </div> 
      </div>
 */ ?>
      <div class="form-group"> 
       <label class="col-sm-2 control-label" for="inputEmail3">Message</label> 
       <div class="col-sm-5"> 
        <textarea placeholder="Message" rows="3" class="form-control" id="comment" name="comment"></textarea>
        <input type="hidden" id="query_id" name="query_id" value="<?php echo $query_id;?>" />
       </div>
      </div>
      <div class="form-group"> 
       <div class="col-sm-offset-2 col-sm-10"> 
        <button class="btn btn-primary" type="submit">Reassign</button> 
       </div>
      </div>
     </form>
    </div>
   </div>
  </div>

     <div class="col-md-12">
    <table id="simple-table" class="table table-striped table-bordered table-hover text-center">
     <thead>
	 <tr>
	
	  <th class="center" colspan="5" style="background-color:#fff;color:#000;">Current Assigned</th>
	 </tr>
      <tr>
       <th class="center">Sr.No.</th>
       <th class="center">Assigned To</th>
       <th class="center">Date</th>
       <th class="center">Status</th>
        <th class="center">Comment</th>
      </tr>
     </thead>
    <tbody>
<?php
  $i = 0;
  foreach( $empAssigned as $Assigned ){
?>
     <tr>
      <td class="center"><?php echo ++$i.'.';?></td>
      <td class="center"><?php echo $Assigned['name'];?></td>
      <td class="center"><?php echo $Assigned['date'];?></td>
      <td class="center"><?php echo $Assigned['status'];?></td>
      <td class="center"><p><?php echo $Assigned['comment'];?></td>
	 
     </tr>
<?php
  }
?>
    </tbody>
   </table>
  </div>
       <div class="col-md-12">
    <table id="simple-table" class="table table-striped table-bordered table-hover text-center">
     <thead>
	 <tr>
	 <th class="center" colspan="5" style="background-color:#fff;color:#000;">Previous Assigned</th>
	 </tr>
      <tr>
       <th class="center">Sr.No.</th>
       <th class="center">Assigned To</th>
       <th class="center">Date</th>
       <th class="center">Status</th>
        <th class="center">Comment</th>
      </tr>
     </thead>
    <tbody>
<?php
  $i = 0;
  foreach( $empCurrAssigned as $CurrAssigned ){
?>
     <tr>
      <td class="center"><?php echo ++$i.'.';?></td>
      <td class="center"><?php echo $CurrAssigned['name'];?></td>
      <td class="center"><?php echo $CurrAssigned['date'];?></td>
      <td class="center"><?php echo $CurrAssigned['status'];?></td>
      <td class="center"><p><?php echo $CurrAssigned['comment'];?></td>
	 
     </tr>
<?php
  }
?>
    </tbody>
   </table>
  </div>
</div>
