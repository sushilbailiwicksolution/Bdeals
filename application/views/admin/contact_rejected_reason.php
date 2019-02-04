<div class="main-content">
<h1 class="page-title"><?php echo $heading;?> </h1>

 <div class="panel panel-default">
  <div class="panel-body">
   <div class="form-c-box">


     <div class="areu">
    <div class="col-md-12">
       <div class="form-group">
        <label for="">Contact Id</label> :-
        <?php echo $queryDetails[0]['id'];?>
      </div>
     </div>
	  <div class="col-md-12">
       <div class="form-group">
        <label for="">Rejected Reason / Comment</label> :-
        <?php echo $queryDetails[0]['comment'];?>
      </div>
     </div>
	 <div class="col-md-12">
       <div class="form-group">
        <label for="">Query Update Time</label> :-
        <?php echo $queryDetails[0]['query_update_time'];?>
      </div>
     </div>
    </div>
    
 
  </div>
 </div>
</div>
