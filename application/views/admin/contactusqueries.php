<?php
//var_dump($queryDetails);
$msgToDis = $this->session->flashdata('msg');

$GetUserType=$this->session->userdata('admin_type');		
?>
<div class="main-content">
 <h1 class="page-title">Contact Us Queries <?php if( $msgToDis != null ){echo '&nbsp;('.$msgToDis.')';}?>
 <?php if($GetUserType=='admin'){?>
 
<span style="margin-left:300px;font-size:16px;">Total(<b id="Ctotal" class=""></b>) | New(<b id="Cnew_Cust2" class=""></b>) | Assigned(<b id="Cassigned_Cust" class=""></b>) | Rejected(<b id="Crejected_Cust" class=""></b>)</span>
 <?php }?>
 </h1>
 <div class="row">
  <div class="col-md-1 pull-left mb15">
  From:</div>
  <div class="col-md-2 pull-left mb15"><input type="date" name="fromDate" class="form-control" id="ContactfromDate" placeholder="From date">
  </div>
   <div class="col-md-1 pull-left mb15">
 To:</div>
  <div class="col-md-2 pull-left mb15">
 <input type="date" name="toDate" class="form-control" id="ContacttoDate" placeholder="To date">
  </div>
  <div class="col-md-2 pull-right mb15">
   <select name="sort_country" class="form-control" id="Contactsort_city">
   
         
   </select>
  
  </div>
  <div class="col-md-2 pull-left mb15">
   <select name="sort_status" class="form-control" id="Contactsort_status">
    <option value="" selected="">Status</option>
    <option value="0">Pending</option>
    <option value="1" id="assignedTeam">Assigned</option>
    <option value="2">Rejected</option>
  
   </select>
  </div>
  <div class="col-md-2 pull-left mb15 teamshow">
   <select name="sort_country" class="form-control" id="contactsort_team">
   
         
   </select>
  </div>
     <div class="col-md-2 pull-left mb15"><a href="<?php echo base_url();?>admin/ContactReport" class="btn btn-sm btn-danger">Export Query Data</a></div>            
  <div class="col-md-12">
   <table id="contactqueries-table" class="table table-striped table-bordered table-hover">
    <thead>
     <tr>
      <th class="center">Sr.No.</th>
        <th class="center" id="del">UID No.</th>
	   <th class="center">Date & Time</th>
      <th class="center" id="active">Name</th>
      <th class="center">Email ID</th>
      <th class="center">Mobile No.</th>
     
      <th class="center">City</th>
      <th class="center">Status</th>
      
      
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
