<?php
 //var_dump($cases);
?>
<div class="main-content">
 <h1 class="page-title">Admin Comment On Case</h1>
 <div class="row">
    <div class="col-md-12">
    <table id="simple-table" class="table table-striped table-bordered table-hover text-center">
     <thead>
      <tr>
       <th class="center">Sr.No.</th>
       <th class="center">Date</th>
       <th class="center" id="del">Emp. Name</th>
       <th class="center">Follow up Date</th>
       <th class="center" style="width: 270px;">Follow Up Details</th>
       <th class="center">Status</th>
       <th class="center">Comment From Admin</th>
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
      <td class="center"><?php echo $case->status;?></td>
      <td class="center"><?php echo $case->admin_comment;?></td>
     </tr>
<?php
  }
?>
    </tbody>
   </table>
  </div>
  <div class="col-md-12">
   <div class="panel panel-default">
    <div class="panel-body">
    <form class="form-horizontal" id="frm_create_case" method="POST" action="<?php echo base_url();?>admin/adminCaseComment/<?php echo $this->uri->segment(3);?>">
      <div class="form-group">
       <label class="col-sm-2 control-label" for="inputEmail3">Comment From Admin</label>
       <div class="col-sm-5">
        <textarea placeholder="Message" rows="3" class="form-control" id="admin_comment" name="admin_comment"></textarea>
       
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

</div>
