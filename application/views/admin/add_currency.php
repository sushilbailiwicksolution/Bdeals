<?php
//var_dump($userList);
$msgToDis = $this->session->flashdata('msg');
?>
  <div class="main-content">
   <h1 class="page-title">Add Currency <?php if( $msgToDis != null ){echo '&nbsp;('.$msgToDis.')';}?></h1>
   <div class="row">
    <div class="col-md-12">
     <div class="panel panel-default">
      <div class="panel-body">
      <form class="form-horizontal" id="frm_addcurrency" name="frm_addcurrency" method="post" action="<?php echo base_url();?>admin/currency/add">

        <div class="col-md-3">
         <div class="form-group col-md-12 padd0">
          <label for="country_id">Country Name </label>
          <select id="country_id" name="country_id" class="form-control">
<?php
          foreach($this->cachemethods->getCountryDetails() as $country){
?>
           <option value="<?php echo $country->id?>"><?php echo $country->country_name;?></option>
<?php
          }
?>
          </select>
         </div>
        </div>

        <div class="col-md-3">
         <div class="form-group col-md-12 padd0">
          <label for="">Currency </label>
          <input type="text" class="form-control" placeholder="Currency" id="currency_name" name="currency_name">
         </div>
        </div>

        <div class="col-md-3">
         <div class="form-group col-md-12 padd0">
          <label for="">Symbol </label>
          <input type="text" class="form-control" placeholder="Currency Symbol" id="currency_symbol" name="currency_symbol">
         </div>
        </div>

        <div class="col-md-2">
         <div class="form-group col-md-12 padd0">
          <label for="">&nbsp; </label>
          <button class="btn btn-primary form-control" type="submit">Submit</button>
         </div>
        </div>

       </form>
      </div>
     </div>
    </div>

    <div class="col-md-2 pull-right mb15">
     <select name="sort_price" class="form-control">
      <option value="" selected="">Sort by Country</option>
<?php
     foreach($this->cachemethods->getCountryDetails() as $country){
?>
	<option value="<?php echo $country->id?>"><?php echo $country->country_name;?></option>
<?php
     }
?>
     </select>
    </div>

    <div class="col-md-2 pull-right mb15">
     <select name="sort_price" class="form-control">
      <option value="" selected="">Sort by Date</option>
      <option value="lower">1-3 months</option>
      <option value="higher">3-6 months</option>
      <option value="higher">6-12 months</option>
     </select>
    </div>

    <div class="col-md-12">
     <table id="currency-table" class="table table-striped table-bordered table-hover">
      <thead>
       <tr>
        <th class="center">Sr.No.</th>
        <th class="center">Currency</th>
        <th class="center">Symbol</th>
        <th class="center">Country</th>
        <th class="center">Status</th>
        <th class="center">Date</th>
        <th class="center"></th>
       </tr>
      </thead>
     <tbody>
     </tbody>
    </table>
   </div>
  </div>
