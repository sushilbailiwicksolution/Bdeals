<?php 
$url=$this->uri->segment(2);
$userid=$this->session->userdata('userid');
?>

 <section class=" sec-padding section-light1">
    <div class="container">
      <div class="row slide-nextprev-but-1">
        <div class="col-xs-12 text-center">
          <h3 class="uppercase font-weight-5">Buyer Listing <?php if($url!=''){?>(<?php  echo str_replace("%20"," ",$url);?>)<?php }?></h3>
          <div class="title-line-4 green align-center"></div>
        </div>
        <div class="clearfix"></div>
		 <div class="col-md-9">			
		<?php 
					$z=0;
					foreach($getBuyBusinessList as $list){
						
						//print_r($list);
						?>
						      <div class="item-listing  searchlist" style="box-shadow:none;">
										<table width="100%">
											<!-- <tr>
												<td colspan="2"><span>S No. <?php echo ++$z;?></span></td>
											</tr> -->
											<tr>
												<td><h6>Listing ID. # <?php echo $list['form_id']; ?></h6></td>
												<td><h6>Posted On Date: <?php echo date('dS F Y',strtotime($list['added_date']));?></h6></td>
												
											</tr>
											<tr>
												<td><h3><?php echo ucwords($list['key_requirement']);?></h3></td>
												<td style="float:right;">			
												<div class="col-md-12 bmargin liketbl list_enqlikebtn">
			<div id="favourite-<?php echo $list['form_id']; ?>" >
			
			<?php
			
			
			if($list['add_to_favorite']=='0') {
			$str_like = "like";
			
			$str_title = "Add to favourite";
			}else{
				
			$str_like = "unlike";
			
			$str_title = "Remove from favourite";	
				
			}
			?>
			<div class="btn-likes limg_btn">
				<input type="button" title="<?php echo ucwords($str_title); ?>" class="<?php echo $str_like; ?>" onClick="Favourite(<?php echo $list['form_id'];?>,'<?php echo $str_like; ?>')" />
			</div>
			<div class="label-likes limg_btn" style="color:#fff;"><?php if($list['add_to_favorite']=='1') { 
				echo "<p style='color: #fff;
			    margin-top: -33px;
			    margin-left: 25px;
			    font-size: 15px;'></p>"; }else{echo "";} ?>
    		</div>
			
			</div>
			</div>
			<td>
											</tr>
											<tr>
												<td><h6>Category : <?php echo $list['industry_preference']; ?></h6></td>
												<td class="text-right"><a style="background: #ff6b24;" data-toggle="modal" data-target="#contactseller" class="saveButton">Contact Buyer</a>
		 <h4><?php if( $msgToDis != null ){echo '<script>
		 swal("Success","Successfully Submitted", "success");	
		 </script>';}else if($contactFromResponse=='Kindly Click Above to Contact'){ //echo 'Kindly Click Above to Contact';
		 }
		 else if($contactFromResponse=='Already existing user, Kindly login first to fill the form'){echo 'Already existing user, Kindly login first to fill the form';}else{
					//echo 'There is some technical problem, Kindly try again.';
					} ?></h4></td>
											</tr>
											<tr>
												<td><h6>Profile:</b> 
												
												<?php 
												
												if($list['profile_business_buyer']=='Yes') { echo 'Business Buyer';}
												else if($list['profile_corporate_investor']=='Yes') { echo 'Corporate Investor';}
												else if($list['profile_pe_vc']=='Yes') { echo 'PE / VC';} 
												else if($list['profile_nri_foreign_investor']=='Yes') { echo 'NRI/Foreign Investor';}
												else if($list['profile_business_lender']=='Yes') { echo 'Business Lender';} 
												else{
												echo 'Business Broker';	 
												}			
												
												?>
												</h6>
												</td>
												
												<td class="text-right"><h3><a target="_blank" href="<?php echo base_url();?>browse-sector-listing-details/<?php echo $list['form_id']; ?>/buy_a_business"><button style="font-size: 13px; padding: 3px 10px;font-weight:bold;" class="saveButton bs_viewbtn">View More</button></a></h3></td>
											</tr>
											
											</table>
									</div>
										<!-- Modal -->
<div class="modal fade" id="contactseller" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Contact Buyer <?php if($userid==''){ echo "/ Registration Form";}?></h4>
      </div>
      <div class="modal-body">
		<?php //echo 'aaaaaaaaaaaaaaaaaaaaaaaaaa '.$businessData[0]['business_type']; ?>
       <form name="lb_uprof" action="<?php echo base_url().''.'customer-listing-contact-form';?>" method="post" data-toggle="validator" role="form" class="was-validated">
	   <input type="hidden" name="frm_id" id="frm_id" value="<?php echo $list['form_id'];?>" />
	   <input type="hidden" name="contact_to_customer_id" id="contact_to_customer_id" value="<?php echo $list['customer_id'];?>" />
	   <input type="hidden" name="contact_from_customer_id" id="contact_from_customer_id" value="<?php echo $list['customer_id'];?>" />
		<input type="hidden" name="business_type" id="business_type" value="<?php echo $list['business_type'];?>" />
		<input type="hidden" name="contact_type" id="contact_type" value="Buyer" />
		<input type="hidden" name="business_url" id="business_url" value="<?php echo $this->uri->segment(1);?>"/>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Name <span>*</span></label>
                                <input type="text" name="name" id="name" class="form-control form-radius"  placeholder="name" value="<?php echo $contactFromDetails[0]['name'] ?>" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Email <span>*</span></label>
                                <input type="email" name="email" id="email" class="form-control form-radius"  placeholder="email" value="<?php echo $contactFromDetails[0]['customer_id'] ?>" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Mobile No. <span>*</span></label>
                                <input type="text" name="mobile" id="mobile" class="form-control form-radius"  placeholder="mobile" value="<?php echo $contactFromDetails[0]['contact_number'] ?>" required>
                            </div>
                            <div class="form-group col-md-6">
							
                                <label for="Address">Country <span>*</span></label>
                                <select  name="country" id="country" class="form-control" >
									<option value="">Select Country</option>
									<?php	foreach( $this->cachemethods->getCountryDetails() as $countrydet ){
									?>
												<option value="<?php echo $countrydet->id;?>" <?php if($countrydet->id == $contactFromDetails[0]['country']){echo 'selected=selected';}?>><?php echo $countrydet->country_name; ?></option>
									<?php
											}
									?>
								</select>
    </select>
                            </div>
                        </div>
						<?php if($userid==''){?>
                          <div class="row">
                            <div class="form-group col-md-6">
                                <label for="Message">Address<span>*</span></label>
                                <textarea id="lb_address" name="lb_address" class="form-control" rows="3" data-error="Address required" required=""></textarea>
                            </div>
							<div class="form-group col-md-6">
                                <label for="Message">City<span>*</span></label>
                                <input type="text" id="lb_location" name="lb_location" class="form-control" value="" placeholder="" data-error="Location required" required="">
                            </div>
                        </div>
                      
						  <div class="row">
                            <div class="form-group col-md-6">
                                <label for="Message">Password<span>*</span></label>
                                <input type="password" class="form-control" placeholder="" id="passwd" name="passwd" data-error="Password required" required="">
                            </div>
							<div class="form-group col-md-6">
                                <label for="Message">Confirm Password<span>*</span></label>
                                <input type="password" class="form-control" placeholder="" id="cpasswd" name="cpasswd" data-match="#passwd" data-match-error="Oops!, password don't match" data-error="Confirm password required" required="">
                            </div>
                        </div>
						<?php }?>
						  <div class="row">
                            <div class="form-group col-md-12">
                                <label for="Message">Message<span>*</span></label>
                                <textarea type="text" name="message" id="message" placeholder="message" class="form-control form-radius" required></textarea>
                            </div>
                        </div>
						<button class="btn-ser sectorBtn" type="Submit"> Contact </button>
                        <!--<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal_2">Contact Seller</button>-->
						<div class="msgBtn" style="display:none;color:green;">Successfully Submitted</div>
                    </form>
      </div>
      
    </div>
  </div>
</div>
					<?php }?>
		</div>
		<div class="col-md-3">
			 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php
    $i=0;
    if(count($AdvtImage)){
        foreach ($AdvtImage as $adimg) {
            if($i==0){
                echo '<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>';
                $i++;
            }
            else
            {
                echo '<li data-target="#carousel-example-generic" data-slide-to="0"></li>';
                $i++;
            }
        }
    }
    ?>
  </ol>

		  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php
    $a=0;
    if(count($AdvtImage)){
        foreach ($AdvtImage as $adimg) {
            if($a==0){
                echo '<div class="item active">
      <img src="'.base_url().''.$adimg['adverti_image'].'" alt="...">
    
    </div>';
                $a++;
            }
            else
            {
                echo '<div class="item">
      <img src="'.base_url().''.$adimg['adverti_image'].'" alt="...">
      
    </div>';
                $a++;
            }
        }
    }
    ?>
  </div>
  </div>

		</div>
        <!--end carousel-->

      </div>
    </div>
  </section>