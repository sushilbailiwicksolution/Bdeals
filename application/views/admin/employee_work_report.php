<div class="main-content">
 <h1 class="page-title">Employee Work Report</h1>
 <div class="row">
  <div class="col-md-12 table-responsive">
   <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
       <th class="center">Sr.No.</th>
       <th class="center">Form Id</th>
       <th class="center">Date</th>
       <th class="center" id="del">Emp. Name</th>
       <th class="center">Follow up Date</th>
       <th class="center">Comments</th>
       <th class="center">Status</th>
      </tr>
    </thead>
    <tbody>
	<?php 
	$i=1;
	foreach($userList as $ulist){?>
       <tr>
       <th class="center"><?php echo $i++;?></th>
       <th class="center"><?php echo $ulist['case_id'];?></th>
       <th class="center"><?php echo $ulist['date'];?></th>
       <th class="center" id="del"><?php echo $ulist['name'];?></th>
       <th class="center"><?php echo $ulist['followup_date'];?></th>
       <th class="center"><?php echo $ulist['comment'];?></th>
       <th class="center"><?php echo $ulist['status'];?></th>
      </tr>
	<?php }?>
    </tbody>
   </table>
  </div>
 
 </div>
</div>
