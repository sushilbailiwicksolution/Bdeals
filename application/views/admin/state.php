<?php 
 $msgToDis = $this->session->flashdata('msg');
?>
<div class="main-content">
 <h1 class="page-title">State <?php if( $msgToDis != null ){echo '&nbsp;('.$msgToDis.')';}?></h1>
 <div class="row">
  <div class="col-md-12 add-country">
   <button class="btn btn-primary  btn-sm" data-toggle="modal" data-target="#myModal">Add State</button> 
   <!-- Modal -->
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
     <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title" id="myModalLabel">Add State</h4>
      </div>
      <div class="modal-body" style="overflow:hidden;">
      <form id="add_emp" name="add_emp" method="POST" action="<?php echo base_url();?>admin/state/add">
        <div class="col-sm-6 ">
         <div class="form-group">
          <label for="name"> State Name </label>
          <input type="text" class="form-control" placeholder="State Name" id="state_name" name="state_name" required>
         </div>
        </div>
		 <div class="col-sm-6 ">
         <div class="form-group">
          <label for="name"> Country Name </label>
          <select id="country" name="country"  class="form-control" required data-error="Country required" >
                          <option value="">Select</option>
<?php
                          foreach( $this->cachemethods->getCountryDetails() as $country ){
?>
                          <option value="<?php echo $country->id;?>"><?php echo $country->country_name; ?></option>
<?php
                          }
?>
												</select>
         </div>
        </div>
		
		 <div class="col-sm-6 ">
         <div class="form-group">
          <label for="name"> Region Name </label>
          <select id="regions_id" name="regions_id"  class="form-control"  data-error="Region required" >
                          <option value="">Select</option>
<?php
                          foreach($this->cachemethods->getRegionDetails() as $Region ){
?>
                          <option value="<?php echo $Region->region_id;?>"><?php echo $Region->region_name; ?></option>
<?php
                          }
?>
												</select>
         </div>
        </div>
       
        <div class="modal-footer">
         <button type="submit" class="btn btn-primary">Add State</button>
        </div>
       </form>
      </div>
     </div>
    </div>
   </div>
  </div>
 
  <div class="col-md-12">
   <table id="state-table" class="table table-striped table-bordered table-hover">
    <thead>
     <tr>
      <th class="center">Sr.No.</th>
      <th class="center" id="del">State Name</th>
      <th class="center" id="del">Country Name</th>
      <th class="center" id="del">Region Name</th>
   
     <th class="center">Action</th>
    
     </tr>
    </thead>
    <tbody>
    </tbody>
   </table>
  </div>
 </div>
</div>
