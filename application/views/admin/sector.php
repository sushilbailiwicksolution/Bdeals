<?php 
$msgToDis = $this->session->flashdata('msg');
?>
<div class="main-content">
 <h1 class="page-title">Sector <?php if( $msgToDis != null ){echo '&nbsp;('.$msgToDis.')';}?></h1>
 <div class="row">
  <div class="col-md-12 add-country">
   <button class="btn btn-primary  btn-sm" data-toggle="modal" data-target="#myModal">Add Sector</button> 
   <!-- Modal -->
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
     <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title" id="myModalLabel">Add Sector</h4>
      </div>
      <div class="modal-body" style="overflow:hidden;">
      <form id="add_emp" name="add_emp" method="POST" action="<?php echo base_url();?>admin/sector/add">
        <div class="col-sm-6 ">
         <div class="form-group">
          <label for="name"> Sector Name </label>
          <input type="text" class="form-control" placeholder="Sector Name" id="sector_name" name="sector_name" required>
         </div>
        </div>
       
        <div class="modal-footer">
         <button type="submit" class="btn btn-primary">Add Sector</button>
        </div>
       </form>
      </div>
     </div>
    </div>
   </div>
  </div>
 
  <div class="col-md-12">
   <table id="sector-table" class="table table-striped table-bordered table-hover">
    <thead>
     <tr>
      <th class="center">Sr.No.</th>
      <th class="center" id="del">Sector Name</th>
   
     <th class="center">Action</th>
    
     </tr>
    </thead>
    <tbody>
    </tbody>
   </table>
  </div>
 </div>
</div>
