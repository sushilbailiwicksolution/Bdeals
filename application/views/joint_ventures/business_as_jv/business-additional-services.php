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
                    <!--<li><a href="list-your-business-user-profile-jv">User Profile</a></li>-->
                    <li><a href="list-your-business-basic-information-jv">Basic Information</a></li>
                    <li><a href="list-your-business-description-jv">Business Description</a></li>
                    <li><a href="list-your-business-additional-details-jv">Additional Details</a></li>
	            <li><a href="list-your-business-jv-details-jv">JV-details</a></li>
                    <li><a href="list-your-business-additional-details-uploads-jv">Uploads</a></li>
                    <li><a href="list-your-business-package-details-jv">Package Details</a></li>
                    <li><a class="active-page" href="list-your-business-additional-services-jv" class="active-page">Additional Services</a></li>
                    <!--<li><a href="list-your-business-payment-jv">Payment</a></li>-->
                    <li><a href="list-your-business-preview-jv">Preview</a></li>

                  </ul>
                </div>
              </div>

              <div class="col-sm-9 r-bgc">
               <form name="lb_uprof" action="jv_userregister" method="post" data-toggle="validator" role="form" class="was-validated">
                <div class="form-c-box">
                  <div class="areu">
                    <p>Additional Services</p>
                    <div class="col-sm-4">
                      <div class="checkbox">
					  <input type="hidden" name="frm_id" id="frm_id" value="<?php echo $jv_business_details[0]['form_id'];?>" />
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
                        <input type="checkbox" id="business_valuation" name="business_valuation" value="BV" <?php if(strcasecmp($additionalServices[0]['valuation'], 'YES')==0){ echo "checked";}?>>
                          <label for="business_valuation" class="cus-t">
                            Business Valuation
                          </label>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="checkbox">
                        <input type="checkbox" id="business_mandate" name="business_mandate" value="BM" <?php if(strcasecmp($additionalServices[0]['mandate'], 'YES')==0){ echo "checked";}?>>
                          <label for="business_mandate" class="cus-t">
                            Business Mandate
                          </label>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="checkbox">
                        <input type="checkbox" id="business_advisory" name="business_advisory" value="BA" <?php if(strcasecmp($additionalServices[0]['advisory'], 'YES')==0){ echo "checked";}?>>
                          <label for="business_advisory" class="cus-t">
                            Business Advisory
                          </label>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="checkbox">
                        <input type="checkbox" id="per_sale_business_structuring" name="per_sale_business_structuring" value="PSBS" <?php if(strcasecmp($additionalServices[0]['pre_sales'], 'YES')==0){ echo "checked";}?>>
                          <label for="per_sale_business_structuring" class="cus-t">
                            Pre-Sale Business Structuring
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

  
  
  
  
  
  
  
  
  
  
  
  