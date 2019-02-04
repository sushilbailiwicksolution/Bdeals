<?php
 //var_dump($sectorListid);
 //var_dump($userDetails);
?>
<div class="main-content">
<h1 class="page-title"><?php echo $heading;?></h1>
 <div class="row ">
  <div class="col-md-12">
   <div class="panel panel-default">
    <div class="panel-body">
    <form class="form-horizontal" method="POST" action="<?php echo base_url();?>admin/sub_sector_edit/<?php echo $sectorListid[0]['sub_id'];?>">

      <div class="form-group"> 
       <label class="col-sm-2 control-label" for="inputEmail3">Sub Sector Name</label> 
       <div class="col-sm-5"> 
        <input type="text" placeholder="Sector Name" class="form-control"  name="sub_sector_name" value="<?php echo $sectorListid[0]['sub_sector_name'];?>" />
       </div>
      </div>
      <div class="form-group"> 
       <label class="col-sm-2 control-label" for="inputEmail3">Sector Name</label> 
       <div class="col-sm-5"> 
       <select id="sector_id" name="sector_id" class="form-control"  data-error="sector required">
                          <option value="">Select</option>
<?php
                             foreach( $this->cachemethods->getSectorDetails() as $sector ){
?>
                          <option value="<?php echo $sector->id;?>" <?php if($sector->id == $sectorListid[0]['sector_id']){echo 'selected=selected';}?>><?php echo $sector->sector_name; ?></option>
<?php
                          }
?>
												</select>
       </div>
      </div>
	 
      <div class="form-group"> 
       <div class="col-sm-offset-2 col-sm-10"> 
        <button class="btn btn-primary" type="submit">Update Sub Sector</button> 
       </div>
      </div>
     </form>
    </div>
   </div>
  </div>
</div>
