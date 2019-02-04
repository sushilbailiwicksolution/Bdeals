<?php
//var_dump($userList);
$msgToDis = $this->session->flashdata('msg');

$GetUserType=$this->session->userdata('admin_type');
?>
<div class="main-content">
 <h1 class="page-title">Business for Sale <?php if( $msgToDis != null ){echo '&nbsp;('.$msgToDis.')';}?>
 
 <?php if($GetUserType=='admin'){?>
 
 <span style="margin-left:200px;font-size:16px;">All(<b id="sall_count" class="sall_count"></b>) | Approved(<b id="sapproved_count" class="sapproved_count"></b>) | Pending for approval(<b id="spending_count" class="spending_count"></b>) | Rejected(<b id="srejected_count" class="srejected_count"></b>) | Inactive (<b id="sinactive_count" class="sinactive_count"></b>) | Closed (<b id="sclosed_count" class="sclosed_count"></b>)</span>
 <?php }?>
 </h1>
  <div class="col-md-12">
  <div class="col-md-2 mb15"><input type="date" name="fromDate" class="form-control" id="SellfromDate" placeholder="From date" style="width: 153px;">
  </div>
  
  <div class="col-md-2 mb15">
 <input type="date" name="toDate" class="form-control" id="SelltoDate" placeholder="To date" style="width: 153px;">
  </div>
 
  <div class="col-md-2 mb15">
   <select name="sort_status" class="form-control" id="Sellsort_status">
    <option value="" selected="">Status</option>
    <option value="0">Pending</option>
    <option value="1" id="assignedTeam">Assigned</option>
    <option value="2">Rejected</option>
  
   </select>
  </div>
   <div class="col-md-2 mb15 teamshow">
   <select name="query_status_new" class="form-control" id="query_status_new">
    <option value="" selected="">Query Status</option>
    <option value="Follow up">Follow up</option>
    <option value="Canceled" id="assignedTeam">Cancelled</option>
    <option value="Done">Done</option>
  
   </select>
  </div>
  <!--<div class="col-md-2 pull-left mb15 Sellteamshow">
   <select name="sort_country" class="form-control Sellsort_team" id="sort_team">
   
         
   </select>
  </div>-->
   <div class="col-md-2 mb15">

    <select class="custom-s sortbycity form-control" id="AllSellsort_city" name="city"  data-error="City required">
                         <option value="">City</option>
						
<?php
                         foreach( $this->cachemethods->getAllCities() as $citydet ){
							 ?>
                         <option value="<?php echo $citydet->id;?>" <?php if($citydet->id == $this->input->post('city')){echo 'selected=selected';}?>><?php echo $citydet->city_name; ?></option>
					
				<?php		 }
?>						
                        </select>
  
  </div>

 <div class="col-md-2">
               <Select class="form-control" id="categorysell"  name="sector" >
                          <option value="">Category</option>
<?php
                          foreach( $this->cachemethods->getSectorDetails() as $Sector ){
?>
                          <option value="<?php echo $Sector->id;?>" <?php if($Sector->id == $this->input->post('sector')){echo 'selected=selected';}?>><?php echo $Sector->sector_name; ?></option>
<?php
                          }
?>						
                        </select>
</div>
<div class="col-md-2">
                 <select class="custom-s form-control" id="pricetype" name="price" data-error="Price Range required" >
				
<?php
                            foreach( unserialize(PRICES) as $priceUnitValue=>$priceUnitName ){
?>
                            <option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $this->input->post('price')){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
                            }
?>
                          </select>
						  </div>
						  </div>
 <div class="col-md-12">
 <div class="col-md-2 mb15"><a href="<?php echo base_url();?>admin/SellReport" class="btn btn-sm btn-danger">Export Business Sell data</a></div>
 </div>
 <div class="row">

                
  <div class="col-md-12 table-responsive">
   <table id="seller-table" class="table table-striped table-bordered table-hover">
    <thead>
     <tr>
      <th class="center">Sr.No.</th>
      <th class="center">Date</th>
      <th class="center">Listing Id</th>
      <th class="center">Category</th>
      <th class="center" id="del">Name</th>
	  <th class="center">Contact No</th>
      <th class="center" id="active">Email Id</th>
      <th class="center" id="active">City</th>
	  <th class="center">Date of Inactivation</th>
	  <th class="center">Total View Count</th>
	  <th class="center">Total Save(Favourite) Count</th>
	  <th class="center">Contact Seller Count</th>
     
      <th class="center">Assign to </th>
     
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

  <!-- Modal 1-->
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
     <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title" id="myModalLabel">Favourite / Save Count Listing</h4>
      </div>
      <div class="modal-body" style="overflow:hidden;">
	  <div class="favdata"></div>

      </div>
     </div>
    </div>
   </div>
   
    <!-- Modal 2-->
   <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
     <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title" id="myModalLabel">View Count Listing</h4>
      </div>
      <div class="modal-body" style="overflow:hidden;">
	  <div class="Contactdata"></div>

      </div>
     </div>
    </div>
   </div>
   
   <!-- Modal 3-->
   <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
     <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title" id="myModalLabel">Contact Seller Count Listing</h4>
      </div>
      <div class="modal-body" style="overflow:hidden;">
	  <div class="Sellerdata"></div>

      </div>
     </div>
    </div>
   </div>
