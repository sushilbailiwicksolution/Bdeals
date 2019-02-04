<?php 
$msgToDis = $this->session->flashdata('msg');
?>
<div class="main-content">
 <h1 class="page-title">Testimonials <?php if( $msgToDis != null ){echo '&nbsp;('.$msgToDis.')';}?></h1>
 <div class="row">
  <div class="col-md-12 add-country">
   <button class="btn btn-primary  btn-sm" data-toggle="modal" data-target="#myModal">Add Testimonials</button> 
   <!-- Modal -->
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
     <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title" id="myModalLabel">Add Testimonials</h4>
      </div>
      <div class="modal-body" style="overflow:hidden;">
      <form id="add_emp" name="add_emp" method="POST" en action="<?php echo base_url();?>admin/testimonials/add" enctype="multipart/form-data">
        <div class="col-sm-6 ">
         <div class="form-group">
          <label for="name"> Testimonials Content </label>
          <textarea class="form-control" placeholder="Testimonials Content" id="content" name="content" required></textarea>
         </div>
        </div>
		<div class="col-sm-6 ">
         <div class="form-group">
          <label for="name"> Testimonials Person Name </label>
          <input type="text" class="form-control" placeholder="Testimonials Person Name" id="name" name="name" required>
         </div>
        </div>
		<div class="col-sm-6 ">
         <div class="form-group">
          <label for="name"> Testimonials Company Name </label>
          <input type="text" class="form-control" placeholder="Testimonials Company Name" id="company_name" name="company_name" required>
         </div>
        </div>
		<div class="col-sm-6 ">
         <div class="form-group">
          <label for="name"> Testimonials Position Name </label>
          <input type="text" class="form-control" placeholder="Testimonials Position Name" id="position" name="position" required>
         </div>
        </div>
		<div class="col-sm-6 ">
         <div class="form-group">
          <label for="name"> Testimonials Image</label>
          <input type="file" class="form-control" id="image" name="uploadfile[]" value="+ Photo">
         </div>
        </div>
       
        <div class="modal-footer">
         <button type="submit" class="btn btn-primary">Add Testimonials</button>
        </div>
       </form>
      </div>
     </div>
    </div>
   </div>
  </div>
 
  <div class="col-md-12">
   <table id="testimonials-table" class="table table-striped table-bordered table-hover">
    <thead>
     <tr>
      <th class="center">Sr.No.</th>
      <th class="center" id="del">Testimonials Content</th>
      <th class="center" id="del">Name</th>
      <th class="center" id="del">Company</th>
      <th class="center" id="del">Position</th>
      <th class="center" id="del">Image</th>
   
     <th class="center">Action</th>
    
     </tr>
    </thead>
    <tbody>
    </tbody>
   </table>
  </div>
 </div>
</div>
