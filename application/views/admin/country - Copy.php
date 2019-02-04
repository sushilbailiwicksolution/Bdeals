<?php 
$msgToDis = $this->session->flashdata('msg');
?>
<div class="main-content">
 <h1 class="page-title">Country <?php if( $msgToDis != null ){echo '&nbsp;('.$msgToDis.')';}?></h1>
 <div class="row">
  <div class="col-md-12 add-country">
   <button class="btn btn-primary  btn-sm" data-toggle="modal" data-target="#myModal">Add Country</button> 
   <!-- Modal -->
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
     <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title" id="myModalLabel">Add Country</h4>
      </div>
      <div class="modal-body" style="overflow:hidden;">
      <form id="add_emp" name="add_emp" method="POST" action="<?php echo base_url();?>admin/country/add">
        <div class="col-sm-6 ">
         <div class="form-group">
          <label for="name"> Country Name </label>
          <input type="text" class="form-control" placeholder="Country Name" id="country_name" name="country_name" required>
         </div>
        </div>
       
        <div class="modal-footer">
         <button type="submit" class="btn btn-primary">Add Country</button>
        </div>
       </form>
      </div>
     </div>
    </div>
   </div>
  </div>
 
  <div class="col-md-12">
   <table id="country-table" class="table table-striped table-bordered table-hover">
    <thead>
     <tr>
      <th class="center">Sr.No.</th>
      <th class="center" id="del">Country Name</th>
   
     <th class="center">Action</th>
    
     </tr>
    </thead>
    <tbody>
    </tbody>
   </table>
  </div>
 </div>
</div>
