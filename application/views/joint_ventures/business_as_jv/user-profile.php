<?php
 //var_dump($sellBusinessUserProfile);
?>
<div id="gtco-features">
    <div class="container">
      <div class="row">
        <div class="col-md-12 gtco-heading">
          <div class="p-15">
          <h2>List Your Business</h2>
          <div class="row">
              <div class="col-sm-3">
                <div class="feat-c-box">
                  <ul>
                    <li><a href="list-your-business-user-profile-jv" class="active-page">User Profile</a></li>
                    <li><a href="list-your-business-basic-information-jv">Basic Information</a></li>
                    <li><a href="list-your-business-description-jv">Business Description</a></li>
                    <li><a href="list-your-business-additional-details-jv">Additional Details</a></li>
		    <li><a href="list-your-business-jv-details-jv">JV-details</a></li>
                    <li><a href="list-your-business-additional-details-uploads-jv">Uploads</a></li>
                    <li><a href="list-your-business-package-details-jv">Package Details</a></li>
                    <li><a href="list-your-business-additional-services-jv">Additional Services</a></li>
                    <li><a href="list-your-business-payment-jv">Payment</a></li>
                    <li><a href="list-your-business-preview-jv">Preview</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-9 r-bgc">
                <form name="lb_uprof" action="jv_userregister" method="post" data-toggle="validator" role="form" class="was-validated">
                <div class="form-c-box">
                  <div class="col-sm-4">
                    <div class="form-group">
                    <label for="lb_uname">Name</label>
                    <input type="hidden" name="frm_id" id="frm_id" value="<?php echo $sellBusinessUserProfile[0]['form_id'];?>" />
					<input type="hidden" name="business_type" id="business_type" value="jv_business" />
		    <input type="text" id="lb_uname" name="lb_uname" class="form-control" value="<?php echo $sellBusinessUserProfile[0]['name'];?>" placeholder="Name" data-error="Name required" required>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                    <label for="lb_email">Email address</label>
                    <input type="email" id="lb_email" name="lb_email" class="form-control" value="<?php echo $sellBusinessUserProfile[0]['email'];?>" placeholder="Email" data-error="Email required" required>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                    <label for="lb_mobile">Mobile Number</label>
                    <div class="input-group">
                      <div class="input-group-addon">+91</div>
                      <input type="number" id="lb_mobile" name="lb_mobile" class="form-control" value="<?php echo $sellBusinessUserProfile[0]['contact'];?>" placeholder="Mobile Number" data-error="Mobile number required" required>
                    </div>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-sm-8">
                    <div class="form-group">
                    <label for="lb_address">Address</label>
		    <textarea id="lb_address" name="lb_address" class="form-control" rows="3" data-error="Address required" required><?php echo $sellBusinessUserProfile[0]['address'];?></textarea>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                    <label for="lb_location">Location</label>
		    <input type="text" id="lb_location" name="lb_location" class="form-control" value="<?php echo $sellBusinessUserProfile[0]['location'];?>" placeholder="" data-error="Location required" required><br/><br/>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                    <label for="lb_company">Company Name</label>
                    <input type="text" id="lb_company" name="lb_company" class="form-control" value="<?php echo $sellBusinessUserProfile[0]['company_name'];?>" placeholder="" data-error="Company name required" required>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                    <label for="lb_designation">Designation</label>
                    <input type="text" id="lb_designation" name="lb_designation" value="<?php echo $sellBusinessUserProfile[0]['designation'];?>" class="form-control" placeholder="" data-error="Designation required" required>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                    <label for="lb_web">Website</label>
                    <input type="text" id="lb_web" name="lb_web" class="form-control" value="<?php echo $sellBusinessUserProfile[0]['website'];?>" placeholder="" data-error="Website required">
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="areu">
                    <p>Are You a</p>
                    <div class="col-sm-3">
                      <div class="checkbox">
		      <input type="checkbox" class="cus-t" id="checkbox1" name="lb_owner" value="owner" <?php if(strcasecmp($sellBusinessUserProfile[0]['who'], 'owner')==0){ echo "checked";}?>>
                          <label for="checkbox1" class="cus-t">
                            Business Owner
                          </label>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="checkbox">
                        <input type="checkbox" class="cus-t" id="checkbox2" name="lb_broker" value="broker" <?php if(strcasecmp($sellBusinessUserProfile[0]['who'], 'broker')==0){ echo "checked";}?>>
                          <label for="checkbox2" class="cus-t">
                            Business Broker
                          </label>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="checkbox">
                        <input type="checkbox" class="cus-t" id="checkbox3" name="lb_representative" value="representative" <?php if(strcasecmp($sellBusinessUserProfile[0]['who'], 'representative')==0){ echo "checked";}?>>
                          <label for="checkbox3" class="cus-t">
                            Representative
                          </label>
                      </div>
                    </div>
                    <div class="col-sm-3">&nbsp;</div>
                    <div class="alter">
                    <p>Alternate Contact Details</p>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                       <label for="lb_aemail">Email</label>
                       <input type="email" id="lb_aemail" name="lb_aemail" class="form-control" placeholder="" value="<?php echo $sellBusinessUserProfile[0]['alternative_email'];?>">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                      <label for="lb_aphone">Phone</label>
                      <input type="text" id="lb_aphone" name="lb_aphone" class="form-control" placeholder="Phone" value="<?php echo $sellBusinessUserProfile[0]['alternative_contact'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4"></div>
                  <div class="col-sm-4"></div>
                  <div class="col-sm-4" style="padding-right:0">
                   <input type="hidden" name="frm_submit" value="sb_up" />
                   <button type="submit" class="savebtn">Save &amp; Continue</button>
                  </div>
                </div>
               </form>
              </div>
          </div>    
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!--end section-->


