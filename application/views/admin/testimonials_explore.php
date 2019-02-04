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
    <form class="form-horizontal" method="POST" action="<?php echo base_url();?>admin/testimonials_edit/<?php echo $testimonialsListid[0]['id'];?>" enctype="multipart/form-data">
	
	<input type="hidden" name="imagedata" value="<?php echo $testimonialsListid[0]['image'];?>">
 
      <div class="form-group"> 
       <label class="col-sm-2 control-label" for="inputEmail3">Testimonials Content</label> 
       <div class="col-sm-5"> 
        <input type="text"  class="form-control"  name="content" value="<?php echo $testimonialsListid[0]['content'];?>" />
       </div>
      </div>
	  <div class="form-group"> 
       <label class="col-sm-2 control-label" for="inputEmail3">Name</label> 
       <div class="col-sm-5"> 
        <input type="text"  class="form-control"  name="name" value="<?php echo $testimonialsListid[0]['name'];?>" />
       </div>
      </div>
     <div class="form-group"> 
       <label class="col-sm-2 control-label" for="inputEmail3">Company Name</label> 
       <div class="col-sm-5"> 
        <input type="text" class="form-control"  name="company_name" value="<?php echo $testimonialsListid[0]['company_name'];?>" />
       </div>
      </div>
	   <div class="form-group"> 
       <label class="col-sm-2 control-label" for="inputEmail3">Position</label> 
       <div class="col-sm-5"> 
        <input type="text"  class="form-control"  name="position" value="<?php echo $testimonialsListid[0]['position'];?>" />
       </div>
      </div>
	  <div class="form-group"> 
       <label class="col-sm-2 control-label" for="inputEmail3">Image</label> 
       <div class="col-sm-5"> 
        <input type="file" placeholder="Testimonials Name" class="form-control"  name="uploadfile[]"  value="+ Photo"/>
		<img src="<?php echo base_url().$testimonialsListid[0]['image'];?>" class="img-responsive">
       </div>
      </div>
	 
      <div class="form-group"> 
       <div class="col-sm-offset-2 col-sm-10"> 
        <button class="btn btn-primary" type="submit">Update Testimonials</button> 
       </div>
      </div>
     </form>
    </div>
   </div>
  </div>
</div>
