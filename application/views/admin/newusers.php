<?php
//var_dump($dataval);
$msgToDis = $this->session->flashdata('msg');

$GetUserType=$this->session->userdata('admin_type');	


?>
<div class="main-content">
<span><a href="newuser_add" class="btn btn-sm btn-danger">Add New User<a/><br/><br/></span>
 <h1 class="page-title">User / Customers <?php if( $msgToDis != null ){echo '&nbsp;('.$msgToDis.')';}?>
 <?php if($GetUserType=='admin'){?>
 
 <span style="margin-left:200px;font-size:16px;">Assigned(<b id="assigned_Cust" class="assigned_Cust"></b>) | Pending for approval(<b id="new_Cust2" class="new_Cust2"></b>) | Rejected(<b id="rejected_Cust" class="rejected_Cust"></b>) | Activity User(<b id="activity_Cust" class="activity_Cust"></b>) | Non Activity User(<b id="nonactivity_Cust" class="nonactivity_Cust"></b>)</span>
 <?php }?>
 </h1>
 <div class="row">
 
  <div class="col-md-2 pull-left mb15"><input type="date" name="fromDate" class="form-control" id="UserfromDate" placeholder="From date">
  </div>
  
  <div class="col-md-2 pull-left mb15">
 <input type="date" name="toDate" class="form-control" id="UsertoDate" placeholder="To date">
  </div>
 <div class="col-md-2 pull-left mb15">
   <select name="UserType" class="form-control" id="UserType">
    <option value="" selected="">User Type</option>
    <option value="owner">Business Owner</option>
    <option value="broker">Business Broker</option>
    <option value="representative">Representative</option>
  
   </select>
  </div>
  <div class="col-md-2 pull-left mb15">
   <select name="sort_status" class="form-control" id="Usersort_status">
    <option value="" selected="">Status</option>
    <option value="0">Pending</option>
    <option value="1" id="assignedTeam">Assigned</option>
    <option value="2">Rejected</option>
  
   </select>
  </div>
  <div class="col-md-2 pull-left mb15 Userteamshow">
   <select name="sort_country" class="form-control" id="Usersort_team">
   
         
   </select>
  </div>
   <div class="col-md-2 pull-left mb15">
   <select name="UserAct_status" class="form-control" id="UserAct_status">
    <option value="" selected="">User Status</option>
    <option value="Active">Active</option>
    <option value="Inactive">Inactive</option>
   </select>
  </div>
  <div class="col-md-2 pull-left mb15"><a href="<?php echo base_url();?>admin/UserReport" class="btn btn-sm btn-danger">Export User Data</a></div>
                
  <div class="col-md-12">
   <table id="newusers-table" class="table table-striped table-bordered table-hover">
    <thead>
     <tr>
      <th class="center">S.No.</th>
      <th class="center" id="del">UID No.</th>
	   <th class="center">Date & Time</th>
      <th class="center" id="active">Name</th>
      <th class="center">Email ID</th>
      <th class="center">Mobile</th>
      <th class="center">City</th>
     
      <th class="center">Created By</th>
     <th class="center">Assignment</th>
	  <th class="center">Status</th>
      <th class="center">Activity</th>
    
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
*/
?>
