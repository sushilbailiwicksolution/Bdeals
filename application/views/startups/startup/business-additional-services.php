  <div id="gtco-features">
    <div class="container">
      <div class="row">
        <div class="col-md-12 gtco-heading">
          <div class="p-15">
            <h2>Register as a Start-Up</h2>
            <div class="row">
             <div class="col-sm-3">
                <div class="feat-c-box">
                  <ul>
                    <li><a  href="start-up-basic-information">Basic Information</a></li>
                    <li><a  href="start-up-business-pitch" >Business Pitch</a></li>
                    <li><a href="start-up-deal-details">Deal Details</a></li>
                    <li><a href="start-up-additional-details-uploads" >Uploads</a></li>
                    <li><a href="start-up-package-details">Package Details</a></li>
                    <li><a href="start-up-additional-services" class="active-page">Additional Services</a></li>
                      <!--<li><a href="start-up-payment">Payment</a></li>-->
                    <li><a href="start-up-preview">Preview</a></li>
                  </ul>
                </div>
              </div>

              <div class="col-sm-9 r-bgc">
               <form name="lb_uprof" action="startup_userregister" method="post" data-toggle="validator" role="form" class="was-validated">
                <div class="form-c-box">
                  <div class="areu">
                    <p>Additional Services</p>
                    <div class="col-sm-4">
                      <div class="checkbox">
					  <input type="hidden" name="frm_id" id="frm_id" value="<?php echo $sell_business_details[0]['form_id'];?>" />
                        <input type="checkbox" id="ads_featured_listing" name="ads_featured_listing" value="FL" <?php if(strcasecmp($additionalServices[0]['feature_listing'], 'YES')==0){ echo "checked";}?>>
                          <label for="ads_featured_listing" class="cus-t">
                            Featured listing
                          </label>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="checkbox">
                        <input type="checkbox" id="ads_information_memorandum" name="ads_information_memorandum" value="IM" <?php if(strcasecmp($additionalServices[0]['memorandum'], 'YES')==0){ echo "checked";}?>>
                          <label for="ads_information_memorandum" class="cus-t">
                            Information Memorandum
                          </label>
                      </div>
                    </div>
                  </div>
                  <div class="areu">
                    <p>Send us your request for below support, to fulfil your business requisites</p>
                    <div class="col-sm-4">
                      <div class="checkbox">
                        <input type="checkbox" id="business_plan" name="business_plan" value="BP" <?php if(strcasecmp($additionalServices[0]['plan'], 'YES')==0){ echo "checked";}?>>
                        <label for="business_plan" class="cus-t">
                          Business Plan
                        </label>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="checkbox">
                        <input type="checkbox" id="incubation" name="incubation" value="BV" <?php if(strcasecmp($additionalServices[0]['incubation'], 'YES')==0){ echo "checked";}?>>
                          <label for="incubation" class="cus-t">
                            Business Incubation
                          </label>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="checkbox">
                        <input type="checkbox" id="startup-mentoring" name="startup-mentoring" value="BM" <?php if(strcasecmp($additionalServices[0]['startup-mentoring'], 'YES')==0){ echo "checked";}?>>
                          <label for="startup-mentoring" class="cus-t">
                            Start-up Mentoring
                          </label>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="checkbox">
                        <input type="checkbox" id="fund_raising_advisory" name="fund_raising_advisory" value="BA" <?php if(strcasecmp($additionalServices[0]['fund_raising_advisory'], 'YES')==0){ echo "checked";}?>>
                          <label for="fund_raising_advisory" class="cus-t">
                            Fund Raising Advisory
                          </label>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="checkbox">
                        <input type="checkbox" id="account_manager" name="account_manager" value="PSBS" <?php if(strcasecmp($additionalServices[0]['account_manager'], 'YES')==0){ echo "checked";}?>>
                          <label for="account_manager" class="cus-t">
                            Dedicated Account Manager
                          </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4"></div>
                  <div class="col-sm-3"></div>
                  <div class="col-sm-5" style="padding-right:0">
                    <input type="hidden" name="frm_submit" value="sb_as" />
                    <!--<button type="submit" class="savebtn">Skip</button>-->
                    <button type="submit" class="savebtn">Submit</button>
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
