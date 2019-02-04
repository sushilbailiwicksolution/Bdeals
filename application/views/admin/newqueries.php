<?php
//var_dump($queryDetails);
$msgToDis = $this->session->flashdata('msg');

$GetUserType=$this->session->userdata('admin_type');		
?>
<div class="main-content">
 <h1 class="page-title">New Queries <?php if( $msgToDis != null ){echo '&nbsp;('.$msgToDis.')';}?>
 <?php if($GetUserType=='admin'){?>
 
 <span style="margin-left:300px;font-size:16px;">Total(<b id="Qtotal" class=""></b>) | New(<b id="Qnew_Cust2" class=""></b>) | Assigned(<b id="Qassigned_Cust" class=""></b>) | Rejected(<b id="Qrejected_Cust" class="rejected_CustQ"></b>)</span>
 <?php }?>
 </h1>
 <div class="row">
 
  <div class="col-md-2 pull-left mb15"><input type="date" name="fromDate" class="form-control" id="fromDate" placeholder="From date">
  </div>
  
  <div class="col-md-2 pull-left mb15">
 <input type="date" name="toDate" class="form-control" id="toDate" placeholder="To date">
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
   <select name="query_status_new" class="form-control" id="query_status_new">
    <option value="" selected="">Query Status</option>
    <option value="Follow up">Follow up</option>
    <option value="Canceled" id="assignedTeam">Cancelled</option>
    <option value="Done">Done</option>
  
   </select>
  </div>
  <div class="col-md-2 pull-left mb15 teamshow">
   <select name="sort_country" class="form-control" id="sort_team">
   
         
   </select>
  </div>
   <div class="col-md-2 pull-right mb15">
   <select name="sort_country" class="form-control" id="sort_city">
   
         
   </select>
  
  </div>
     <div class="col-md-2 pull-left mb15"><a href="<?php echo base_url();?>admin/QueryReport" class="btn btn-sm btn-danger">Export Query Data</a></div>            
  <div class="col-md-12">
   <table id="newqueries-table" class="table table-striped table-bordered table-hover">
    <thead>
     <tr>
      <th class="center">S.No.</th>
      <th class="center" id="del">UID No.</th>
	   <th class="center">Date & Time</th>
      <th class="center Newwidth" id="active">Name</th>
      <th class="center">Email ID</th>
      <th class="center">Mobile No.</th>
      <th class="center widthclass">City</th>
      <th class="center">Assignment</th>
      <th class="center">Query Status</th>
      <th class="center">Action</th>
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
