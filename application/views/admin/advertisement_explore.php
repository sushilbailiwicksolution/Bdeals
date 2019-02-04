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
    <form class="form-horizontal" method="POST" action="<?php echo base_url();?>admin/advertisement_edit/<?php echo $testimonialsListid[0]['adverti_id'];?>" enctype="multipart/form-data">
	
	<input type="hidden" name="imagedata" value="<?php echo $testimonialsListid[0]['adverti_image'];?>">
 
      <div class="form-group"> 
       <label class="col-sm-2 control-label" for="inputEmail3">Advertisement Name</label> 
       <div class="col-sm-5"> 
        <input type="text"  class="form-control"  name="adverti_name" value="<?php echo $testimonialsListid[0]['adverti_name'];?>" />
       </div>
      </div>
	 <div class="form-group"> 
       <label class="col-sm-2 control-label" for="inputEmail3">Advertisement Url</label> 
       <div class="col-sm-5"> 
        <input type="text"  class="form-control"  name="adverti_url" value="<?php echo $testimonialsListid[0]['adverti_url'];?>" />
       </div>
      </div>
	  <div class="form-group"> 
       <label class="col-sm-2 control-label" for="inputEmail3">Image</label> 
       <div class="col-sm-5"> 
        <input type="file" placeholder="Testimonials Name" class="form-control"  name="uploadfile[]"  value="+ Photo"/>
		<img src="<?php echo base_url().$testimonialsListid[0]['adverti_image'];?>" class="img-responsive" width="200">
       </div>
      </div>
	 
      <div class="form-group"> 
       <div class="col-sm-offset-2 col-sm-10"> 
        <button class="btn btn-primary" type="submit">Update Advertisement</button> 
       </div>
      </div>
     </form>
    </div>
   </div>
  </div>
</div>
