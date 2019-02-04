<?php
 //var_dump($countryListid);
 //var_dump($userDetails);
?>
<div class="main-content">
<h1 class="page-title"><?php echo $heading;?></h1>
 <div class="row ">
  <div class="col-md-12">
   <div class="panel panel-default">
    <div class="panel-body">
    <form class="form-horizontal" method="POST" action="<?php echo base_url();?>admin/region_edit/<?php echo $countryListid[0]['region_id'];?>">

      <div class="form-group"> 
       <label class="col-sm-2 control-label" for="inputEmail3">Region Name</label> 
       <div class="col-sm-5"> 
        <input type="text" placeholder="Region Name" class="form-control"  name="region_name" value="<?php echo $countryListid[0]['region_name'];?>" />
       </div>
      </div>
     
	 
      <div class="form-group"> 
       <div class="col-sm-offset-2 col-sm-10"> 
        <button class="btn btn-primary" type="submit">Update Region</button> 
       </div>
      </div>
     </form>
    </div>
   </div>
  </div>
</div>
