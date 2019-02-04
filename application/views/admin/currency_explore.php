<?php
//var_dump($currencyDetails);
$msgToDis = $this->session->flashdata('msg');

?>
  <div class="main-content">
   <h1 class="page-title">Update Currency <?php if( $msgToDis != null ){echo '&nbsp;('.$msgToDis.')';}?></h1>
   <div class="row">
    <div class="col-md-12">
     <div class="panel panel-default">
      <div class="panel-body">
      <form class="form-horizontal" id="frm_addcurrency" name="frm_addcurrency" method="post" action="<?php echo base_url();?>admin/currency_edit/<?php echo $currencyDetails[0]['id'];?>">
        <div class="col-md-12">
         <div class="form-group col-md-12 padd0">
          <label for="country_id">Country Name </label>
       
		  <select class="form-control" id="country_id" name="country_id">
                                                             <option value="">Select</option>
<?php
foreach( $this->cachemethods->getCountryDetails() as $countrydet ){
?>
                                                             <option value="<?php echo $countrydet->id;?>" <?php if($countrydet->id == $currencyDetails[0]['country_id']){echo 'selected=selected';}?>><?php echo $countrydet->country_name; ?></option>
<?php
}
?>
                                                            </select>
         </div>
        </div>

        <div class="col-md-12">
         <div class="form-group col-md-12 padd0">
          <label for="">Currency </label>
          <input type="text" class="form-control" placeholder="Currency" id="currency_name" name="currency_name" value="<?php echo $currencyDetails[0]['currency_name'];?>">
         </div>
        </div>

        <div class="col-md-12">
         <div class="form-group col-md-12 padd0">
          <label for="">Symbol </label>
          <input type="text" class="form-control" placeholder="Currency Symbol" id="currency_symbol" name="currency_symbol" value="<?php echo $currencyDetails[0]['currency_symbol'];?>">
         </div>
        </div>
		 <div class="col-md-12">
         <div class="form-group col-md-12 padd0">
          <label for="">Status </label>
          <select name="status" class="form-control" id="status">
		  <option value="<?php echo $currencyDetails[0]['status'];?>"><?php if($currencyDetails[0]['status']=='0'){
		  echo 'Active';}else{ echo 'Inactive';}?></option>
		  <option value="0">Active</option>
		  <option value="1">Inactive</option>
          </select>
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

  </div>
