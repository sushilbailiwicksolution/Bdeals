<?php
 $msgToDis=$this->session->flashdata('msg');
?>
<div class="main-content">
 <h1 class="page-title">All Queries <?php if( $msgToDis != null ){echo '&nbsp;('.$msgToDis.')';}?></h1>
  <div class="row">
   <div class="col-md-12 ">
    <div class="panel panel-default">
     <div class="panel-body">
      <form class="form-horizontal"> 
       <div class="col-md-3">				 	
        <div class="form-group col-md-12 padd0">
         <label for="">Starting Date </label>
         <input type="date" class="form-control" placeholder="UserID">
        </div>
       </div>
       <div class="col-md-3">	
        <div class="form-group col-md-12 padd0">
         <label for="">Ending Date </label>
         <input type="date" class="form-control" placeholder="User Name">
        </div>
       </div>
       <div class="col-md-2">	
        <div class="form-group col-md-12 padd0">
         <label for="">&nbsp; </label>
         <button class="btn btn-primary form-control" type="submit">Export Data</button> 
        </div>
       </div>
      </form>
     </div>
    </div>
   </div>
                
<div class="col-md-12">
 <table id="allqueries-table" class="table table-striped table-bordered table-hover">
  <thead>
   <tr>
    <th class="center">Sr.No.</th>
<?php /*    <th class="center" id="del">Customer No</th> */ ?>
	<th class="center" id="active">Query ID</th>
    <th class="center">User Name</th>
	<th class="center">Email</th>
    <th class="center">Date Of Query</th>
    <th class="center">City</th>
    <th class="center">Contact</th>
    <th class="center">Status</th>
    <!--<th class="center">Assigned To</th>-->
    <th class="center">Action</th>
   </tr>
  </thead>
  <tbody>
  </tbody>
 </table>
</div>
