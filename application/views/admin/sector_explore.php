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
    <form class="form-horizontal" method="POST" action="<?php echo base_url();?>admin/sector_edit/<?php echo $sectorListid[0]['id'];?>">

      <div class="form-group"> 
       <label class="col-sm-2 control-label" for="inputEmail3">Sector Name</label> 
       <div class="col-sm-5"> 
        <input type="text" placeholder="Sector Name" class="form-control"  name="sector_name" value="<?php echo $sectorListid[0]['sector_name'];?>" />
       </div>
      </div>
     
	 
      <div class="form-group"> 
       <div class="col-sm-offset-2 col-sm-10"> 
        <button class="btn btn-primary" type="submit">Update Sector</button> 
       </div>
      </div>
     </form>
    </div>
   </div>
  </div>
</div>
