<?php
//var_dump($user_id2);
$msgToDis = $this->session->flashdata('msg');

//print_r($_REQUEST['user']);

$usersid=$this->uri->segment('3');

//print_r($userList3);
	
?>
<input type="hidden" name="userid" id="userid" value="<?php echo $usersid;?>">
<div class="main-content">
 <h1 class="page-title">Queries List <?php if( $msgToDis != null ){echo '&nbsp;('.$msgToDis.')';}?></h1>
 <div class="row">
  <div class="col-md-1 pull-left mb15">
  From:</div>
  <div class="col-md-2 pull-left mb15"><input type="date" name="fromDate" class="form-control fromDate" id="fromDate" placeholder="From date">
  </div>
   <div class="col-md-1 pull-left mb15">
 To:</div>
  <div class="col-md-2 pull-left mb15">
 <input type="date" name="toDate" class="form-control toDate" id="toDate" placeholder="To date">
  </div>
  <div class="col-md-2 pull-right mb15">
   <select name="sort_country" class="form-control sort_city" id="sort_city">
   
         
   </select>
  
  </div>
  <div class="col-md-2 pull-left mb15">
   <select name="sort_status" class="form-control" id="sort_status">
    <option value="" selected="">Status</option>
    <option value="0">Pending</option>
    <option value="1" id="assignedTeam">Assigned</option>
    <option value="2">Rejected</option>
  
   </select>
  </div>
  <div class="col-md-2 pull-left mb15 teamshow">
   <select name="sort_country" class="form-control sort_team" id="sort_team">
   
         
   </select>
  </div>
                
  <div class="col-md-12">
   <table id="singlequeries-table" class="table table-striped table-bordered table-hover">
    <thead>
     <tr>
      <th class="center">Sr.No.</th>
      <th class="center" id="del">Form ID</th>
      <th class="center" id="active">Name</th>
      <th class="center">Email ID</th>
      <th class="center">Date Of Query</th>
      <th class="center">City</th>
      <th class="center">Status</th>
      <th class="center">Query Details</th>
     </tr>
    </thead>
    <tbody>
      <!--<td class="center"><a href="seller_explor.html"><button class="btn btn-danger btn-sm">Explore</button></a> </td>-->
    </tbody>
   </table>
  </div>
 </div>
</div>

<?php
/*
<script>
 $(document).ready(function(){
   $('#').DataTable({
     "ajax":{
       url: "<?php echo site_url("admin/seller/seller_page")?>",
       type: 'GET'
     },
   });
 });
</script>
*/?>
