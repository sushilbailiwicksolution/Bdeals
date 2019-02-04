<?php
//var_dump($user_id2);
$msgToDis = $this->session->flashdata('msg');

//print_r($_REQUEST['user']);

$usersid=$this->uri->segment('3');

//print_r($userList3);
	
?>
<input type="hidden" name="Businessid" id="Businessid" value="<?php echo $usersid;?>">
<div class="main-content">
 <h1 class="page-title">Business List (Sell)<?php if( $msgToDis != null ){echo '&nbsp;('.$msgToDis.')';}?></h1>
 <div class="row">
 
                
  <div class="col-md-12">
   <table id="BusinessSellUser-table" class="table table-striped table-bordered table-hover">
    <thead>
     <tr>
      <th class="center">Sr.No.</th>
      <th class="center" id="del">Form ID</th>
      <th class="center" id="active">Name</th>
      <th class="center">Email ID</th>
      <th class="center">Contact</th>
	   <th class="center">Address</th>
      <th class="center">Location	</th>
     
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
