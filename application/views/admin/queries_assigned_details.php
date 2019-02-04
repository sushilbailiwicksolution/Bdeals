<?php
//var_dump($userDetails);
 
 ?>
<div class="main-content">
<h1 class="page-title"><?php echo $heading;?> </h1>

 <div class="panel panel-default">
  <div class="panel-body">
   <div class="form-c-box">

     <div class="areu">
    <div class="col-md-12">
       <div class="form-group">
        <label for="">Query Id</label> :-
        <?php echo $queryDetails[0]['query_id'];?>
      </div>
     </div>
	  <div class="col-md-12">
       <div class="form-group">
        <label for="">Assigned To</label> :-
        <?php echo $queryDetails[0]['name'];?>
      </div>
     </div>
	   <div class="col-md-12">
       <div class="form-group">
        <label for="">Assigned Comments/ Remarks</label> :-
        <?php echo $queryDetails[0]['comment'];?>
      </div>
     </div>
	 <div class="col-md-12">
       <div class="form-group">
        <label for="">Date Time</label> :-
        <?php echo $queryDetails[0]['date'];?>
      </div>
     </div>
    </div>
    
  
  </div>
 </div>
</div>
