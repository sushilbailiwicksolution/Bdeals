<?php
 //var_dump($stateListid);
 //var_dump($userDetails);
?>
<div class="main-content">
<h1 class="page-title"><?php echo $heading;?></h1>
 <div class="row ">
  <div class="col-md-12">
   <div class="panel panel-default">
    <div class="panel-body">
    <form class="form-horizontal" method="POST" action="<?php echo base_url();?>admin/state_edit/<?php echo $stateListid[0]['id'];?>">

      <div class="form-group"> 
       <label class="col-sm-2 control-label" for="inputEmail3">State Name</label> 
       <div class="col-sm-5"> 
        <input type="text" placeholder="State Name" class="form-control"  name="state_name" value="<?php echo $stateListid[0]['state_name'];?>" />
       </div>
      </div>
      <div class="form-group"> 
       <label class="col-sm-2 control-label" for="inputEmail3">Country Name</label> 
       <div class="col-sm-5"> 
       <select id="country" name="country" class="form-control" required data-error="Country required">
                          <option value="">Select</option>
<?php
                          foreach( $this->cachemethods->getCountryDetails() as $country ){
?>
                          <option value="<?php echo $country->id;?>" <?php if($country->id == $stateListid[0]['country_id']){echo 'selected=selected';}?>><?php echo $country->country_name; ?></option>
<?php
                          }
?>
												</select>
       </div>
      </div>
	 <div class="form-group"> 
       <label class="col-sm-2 control-label" for="inputEmail3">Region Name</label> 
       <div class="col-sm-5"> 
       <select id="regions_id" name="regions_id" class="form-control"  data-error="Region required">
                          <option value="">Select</option>
<?php
                           foreach($this->cachemethods->getRegionDetails() as $Region ){
?>
                          <option value="<?php echo $Region->region_id;?>" <?php if($Region->region_id == $stateListid[0]['regions_id']){echo 'selected=selected';}?>><?php echo $Region->region_name; ?></option>
<?php
                          }
?>
												</select>
       </div>
      </div>
      <div class="form-group"> 
       <div class="col-sm-offset-2 col-sm-10"> 
        <button class="btn btn-primary" type="submit">Update State</button> 
       </div>
      </div>
     </form>
    </div>
   </div>
  </div>
</div>
