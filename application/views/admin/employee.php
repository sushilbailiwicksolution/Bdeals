<div class="main-content">
 <h1 class="page-title">Add employee</h1>
 <div class="row">
  <div class="col-md-12 add-country">
   <button class="btn btn-primary  btn-sm" data-toggle="modal" data-target="#myModal">Add employee</button> 
   <!-- Modal -->
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
     <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title" id="myModalLabel">Add employee</h4>
      </div>
      <div class="modal-body" style="overflow:hidden;">
      <form id="add_emp" name="add_emp" method="POST" action="<?php echo base_url();?>admin/employee/add">
        <div class="col-sm-6 ">
         <div class="form-group">
          <label for="name"> Name </label>
          <input type="text" class="form-control" placeholder="Name" id="name" name="name">
         </div>
        </div>
        <div class="col-sm-6 ">
         <div class="form-group">
          <label for="email">Email Id </label>
          <input type="text" class="form-control" placeholder="Email" id="email" name="email">
         </div>
        </div>
        <div class="col-sm-6 ">
         <div class="form-group">
          <label for="password">Password </label>
          <input type="text" class="form-control" placeholder="Password" id="password" name="password">
         </div>
	</div>
        <div class="col-sm-6 ">
         <div class="form-group">
          <label for="country">Country </label>
          <select class="form-control" id="country" name="country" class="form-control" required data-error="Country required">
            <option value="">Select</option>
<?php
            foreach( $this->cachemethods->getCountryDetails() as $countrydet ){
?>
            <option value="<?php echo $countrydet->id;?>"><?php echo $countrydet->country_name; ?></option>
<?php
}
?>
          </select>
	 </div>
	</div>
        <div class="col-sm-6 ">
         <div class="form-group">
          <label for="">Contact  </label>
          <input type="text" class="form-control" placeholder="Contact" id="contact" name="contact">
         </div>
        </div>
        <div class="col-sm-6 ">
         <div class="form-group">
          <label for="">Date </label>
          <input type="date" class="form-control" id="add_date" name="add_date">
         </div>
        </div>
        <div class="modal-footer">
         <button type="submit" class="btn btn-primary">Add employee</button>
        </div>
       </form>
      </div>
     </div>
    </div>
   </div>
  </div>
  <div class="col-md-2 pull-right mb15">
   <select name="sort_price" class="form-control">
    <option value="" selected="">Sort by Date</option>
    <option value="lower">1-3 months</option>
    <option value="higher">3-6 months</option>
    <option value="higher">6-12 months</option>
   </select>
  </div>
  <div class="col-md-12">
   <table id="employee-table" class="table table-striped table-bordered table-hover">
    <thead>
     <tr>
      <th class="center">Sr.No.</th>
      <th class="center" id="del">Name</th>
      <th class="center" id="active">Email Id</th>
      <th class="center">Country</th>
      <th class="center">Contact No</th>                                    
      <th class="center">Date</th>
      <th class="center">Status</th>
      <th class="center">Action</th>
      <th class="center">Work Report</th>
     </tr>
    </thead>
    <tbody>
    </tbody>
   </table>
  </div>
 </div>
</div>
