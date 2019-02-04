<?php
//var_dump($userList);
$msgToDis = $this->session->flashdata('msg');
?>
<div class="main-content">
 <h1 class="page-title">Buy <?php if( $msgToDis != null ){echo '&nbsp;('.$msgToDis.')';}?></h1>
 <div class="row">
 <!-- <div class="col-md-2 pull-right mb15">
   <select name="sort_price" class="form-control">
    <option value="" selected="">Sort by Date</option>
    <option value="lower">1-3 months</option>
    <option value="higher">3-6 months</option>
    <option value="higher">6-12 months</option>
   </select>
  </div>
  <div class="col-md-2 pull-right mb15">
   <select name="sort_price" class="form-control">
    <option value="" selected="">Country</option>
    <option >Austria</option>
    <option >India</option>
    <option >Bhutan</option>
   </select>
  </div>
  <div class="col-md-2 pull-right mb15">
   <select name="sort_price" class="form-control">
    <option value="" selected="">Status</option>
    <option value="lower">Pending</option>
    <option value="higher">Assigned</option>
    <option value="higher">Cancelled</option>
    <option value="higher">Done</option>
   </select>
  </div>-->
                
  <div class="col-md-12">
   <table id="buy-table" class="table table-striped table-bordered table-hover">
    <thead>
     <tr>
      <th class="center">Sr.No.</th>
      <th class="center" id="del">Name</th>
      <th class="center" id="active">Email Id</th>
      <th class="center">Company Name</th>
      <th class="center">Country</th>
      <th class="center">Contact No</th>
      <th class="center">Assign to </th>
      <th class="center">Add Date</th>
      <th class="center">Expiry Date</th>
      <th class="center">Status</th>
      <th class="center"></th>
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
