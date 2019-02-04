<?php
 //var_dump($tagListid);
 //var_dump($userDetails);
?>
<div class="main-content">
<h1 class="page-title"><?php echo $heading;?></h1>
 <div class="row ">
  <div class="col-md-12">
   <div class="panel panel-default">
    <div class="panel-body">
    <form class="form-horizontal" method="POST" action="<?php echo base_url();?>admin/tag_edit/<?php echo $tagListid[0]['tag_id'];?>">

      <div class="form-group"> 
       <label class="col-sm-2 control-label" for="inputEmail3">Tag Name</label> 
       <div class="col-sm-5"> 
        <input type="text" placeholder="Tag Name" class="form-control"  name="tag_name" value="<?php echo $tagListid[0]['tag_name'];?>" />
       </div>
      </div>
	  <div class="form-group"> 
       <label class="col-sm-2 control-label" for="inputEmail3">Tag Background Color</label> 
       <div class="col-sm-5"> 
        <input type="text" placeholder="Tag Background Color" class="form-control"  name="tag_background_color" value="<?php echo $tagListid[0]['tag_background_color'];?>" />
       </div>
      </div>
	   <div class="form-group"> 
       <label class="col-sm-2 control-label" for="inputEmail3">Tag Color</label> 
       <div class="col-sm-5"> 
        <input type="text" placeholder="Tag Color" class="form-control"  name="tag_color" value="<?php echo $tagListid[0]['tag_color'];?>" />
       </div>
      </div>
      <div class="form-group"> 
       <div class="col-sm-offset-2 col-sm-10"> 
        <button class="btn btn-primary" type="submit">Update Tag</button> 
       </div>
      </div>
     </form>
    </div>
   </div>
  </div>
</div>
