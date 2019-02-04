<?php
 //var_dump($cases);
$user_id=$this->uri->segment('6');
?>
<div class="main-content">
 <h1 class="page-title">Query - case</h1>
 <div class="row">
  <div class="col-md-12">
   <div class="panel panel-default">
    <div class="panel-body">
    <form class="form-horizontal" id="frm_create_case" method="POST" action="<?php echo base_url();?>admin/createQueryUserCase/<?php echo $user_id;?>">
      <div class="form-group">
       <label class="col-sm-3 control-label" for="inputEmail3">For Internal Description</label>
       <div class="col-sm-5">
        <textarea placeholder="Message" rows="3" class="form-control" id="comment" name="comment"></textarea>
        <input type="hidden" id="assigned_to" name="assigned_to" value="<?php echo $assignedTo;?>" />
        <input type="hidden" id="case_id" name="case_id" value="<?php echo $formId;?>" />
        <input type="hidden" id="case_type" name="case_type" value="<?php echo $caseType;?>" />
       </div>
      </div>
	  <div class="form-group">
       <label class="col-sm-3 control-label" for="inputEmail3">For Customer Description</label>
       <div class="col-sm-5">
        <textarea placeholder="Message" rows="3" class="form-control" id="cus_comment" name="for_customer_comment"></textarea>
      
	  
       </div>
      </div>
      <div class="form-group">
       <label class="col-sm-3 control-label" for="inputEmail3">Status</label>
       <div class="col-sm-5">
        <select name="status" id="status" class="form-control">
         <option value="" selected="">Select Status</option>
         <option value="Follow up">Follow up</option>
         <option value="Canceled">Canceled</option>
         <option value="Done">Done</option>
        </select>
       </div>
      </div>
      <div class="form-group">
       <label class="col-sm-3 control-label" for="inputPassword3">Select Date</label>
        <div class="col-sm-5">
         <input type="date" class="form-control" id="followup_date" name="followup_date">
        </div>
       </div>
       <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
         <button class="btn btn-primary" type="submit">Submit</button>
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
       <th class="center">Sr.No.</th>
       <th class="center">Date</th>
       <th class="center" id="del">Emp. Name</th>
       <th class="center">Follow up Date</th>
        <th class="center">Follow Up Details</th>
       <th class="center">For Customer Desc.</th>
       <th class="center">Status</th>
      </tr>
     </thead>
    <tbody>
<?php
  $i = 0;
  foreach( $cases as $case ){
?>
     <tr>
      <td class="center"><?php echo ++$i.'.';?></td>
      <td class="center"><?php echo $case->date;?></td>
      <td class="center"><?php echo $case->name;?></td>
      <td class="center"><?php echo $case->followup_date;?></td>
      <td class="center"><p><?php echo $case->comment;?></td>
	   <td class="center"><p><?php echo $case->for_customer_comment;?></td>
      <td class="center"><?php echo $case->status;?></td>
     </tr>
<?php
  }
?>
    </tbody>
   </table>
  </div>
</div>
