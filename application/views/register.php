<?php
  $msgToDis = $this->session->flashdata('msg');
?>
<div class="ragister_sec_before">
<div id="gtco-features" class="ragister_sec">
 <div class="container">
  <div class="row">
   <div class="col-md-12 gtco-heading">
    <div class="p-15">
     <h2>User Registration</h2>
     <div class="row">
      <div class="col-sm-12 ">
       <form name="frm_reg" action="userregister" method="post" >
	   
	   
        <div class="form-c-box">
         
		 
		 
		 <div class="areu reg_info">
		 <p>Confidential Registration <label style="color: #a94442;"><?php if( $msgToDis != null ){echo '&nbsp;('.$msgToDis.')';}?></label></p>
				 <div class="col-sm-12">
				 
                  <div class="col-sm-3">
                    <div class="reg-group">
                    <label for="lb_uname">Name<span>*</span></label>
                    <input type="hidden" name="frm_id" id="frm_id" value="<?php echo $sellBusinessUserProfile[0]['form_id'];?>" />
					<input type="hidden" name="business_type" id="business_type" value="buy_a_business" />
		    <input type="text"  name="lb_uname" class="form-control"  value="<?php echo $sellBusinessUserProfile[0]['name'];?>" placeholder="Name" data-error="Name required OR Invalid name" required>
					
                    <div class="help-block with-errors"></div>
					
					
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="reg-group">
                    <label for="lb_email">Email address<span>*</span></label>
                    <input type="email" id="lb_email" name="lb_email" pattern="([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})" class="form-control" value="<?php echo $sellBusinessUserProfile[0]['customer_id'];?>" placeholder="Email" data-error="Email required OR Invalid Email" required>
					
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="reg-group">
                    <label for="lb_mobile">Mobile Number<span>*</span></label>
                    <div class="input-group">
                      <!--<div class="input-group-addon">+91</div>-->
					  <div class="input-group-addon currency mcurr" >
                          <select class="form-control" id="country_code" name="country_code"> 
<?php
                            foreach( unserialize(COUNTRY_CODE) as $priceUnitValue=>$priceUnitName ){
?>
			    <option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $sellBusinessUserProfile[0]['country_code']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
                            }
?>
                          </select>
                          </div>
                      <input type="text" id="lb_mobile" name="lb_mobile" pattern="[1-9]{1}[0-9]{9}" class="form-control" value="<?php echo $sellBusinessUserProfile[0]['contact_number'];?>" placeholder="Mobile Number" data-error="Valid Mobile number required" required>
                    </div>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
				     <div class="col-sm-3">
                    <div class="reg-group">
                    <label for="lb_address">Address<span>*</span></label>
		    <textarea id="lb_address" name="lb_address" class="form-control" rows="2" data-error="Address required" required><?php echo $sellBusinessUserProfile[0]['address'];?></textarea>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
				  </div>
				  <div class="col-sm-12">
				
                  <div class="col-sm-3">
                    <div class="reg-group">
                    <label for="lb_location">City<span>*</span></label>
		    <input type="text" id="lb_location" name="lb_location" class="form-control" value="<?php echo $sellBusinessUserProfile[0]['location'];?>" placeholder="" data-error="Location required" required autocomplete="on"><br/><br/>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
				            <!--<div class="col-sm-3">
                    <div class="reg-group">
                    <label for="lb_company">Company Name<span>*</span></label>
                    <input type="text" id="lb_company" name="lb_company" class="form-control" value="<?php echo $sellBusinessUserProfile[0]['company_name'];?>" placeholder="" data-error="Company name required" required>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="reg-group">
                    <label for="lb_designation">Designation<span>*</span></label>
                    <input type="text" id="lb_designation" name="lb_designation" value="<?php echo $sellBusinessUserProfile[0]['designation'];?>" class="form-control" placeholder="" data-error="Designation required" required>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>-->
                  <div class="col-sm-3">
                    <div class="reg-group">
                    <label for="lb_web">Website</label>
                    <input type="text" id="lb_web" name="lb_web" class="form-control" pattern="www.*" value="<?php echo $sellBusinessUserProfile[0]['website'];?>" placeholder="e.g. www.businessdeals.in" data-error="Valid Website required">
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
				  
				
				 <div class="col-sm-3">
           <div class="reg-group">
            <label for="">Password<span>*</span> </label>
            <input type="password" class="form-control" placeholder="" id="passwd" name="passwd" data-error="Password required" required>
            <div class="help-block with-errors"></div>
           </div>
          </div>
          <div class="col-sm-3">
           <div class="reg-group">
            <label for="">Confirm Password<span>*</span></label>
            <input type="password" class="form-control" placeholder="" id="cpasswd" name="cpasswd" data-match="#passwd" data-match-error="Oops!, password don't match" data-error="Confirm password required" required>
            <div class="help-block with-errors"></div>
           </div>
          </div>
		  </div>
		  <div class="col-sm-12">
		   <div class="col-sm-2">
		   <div class="pass-group">
			 <label for="">Are You a<span>*</span></label>
                      <div class="checkbox">
		      <input type="checkbox" class="cus-t" id="checkbox1" name="lb_owner" value="owner"  <?php if(strcasecmp($sellBusinessUserProfile[0]['who'], 'owner')==0){ echo "checked";}?> >
                          <label for="checkbox1" class="cus-t">
                            Business Owner
                          </label>
                      </div>
                      </div>
					  
                    </div>
                    <div class="col-sm-2">
					 <div class="pass-group">
					 <label for=""></label>
                      <div class="checkbox">
                        <input type="checkbox" class="cus-t" id="checkbox2" name="lb_broker" value="broker"  <?php if(strcasecmp($sellBusinessUserProfile[0]['who'], 'broker')==0){ echo "checked";}?> >
                          <label for="checkbox2" class="cus-t">
                            Business Broker
                          </label>
                      </div>
                      </div>
					  
                    </div>
                    <div class="col-sm-2">
						 <div class="pass-group">
					 <label for=""></label>
                      <div class="checkbox">
                        <input type="checkbox" class="cus-t" id="checkbox3" name="lb_representative" value="representative" <?php if(strcasecmp($sellBusinessUserProfile[0]['who'], 'representative')==0){ echo "checked";}?> >
                          <label for="checkbox3" class="cus-t">
                            Representative
                          </label>
                      </div>
					  
                    </div>
                    </div>
				  </div>
				 
				  
				 
	 <div class="col-sm-12">
	             <div class="col-sm-4">
                      <div class="reg-group">
                       <label for="lb_aemail">Alternate Email</label>
                       <input type="email" id="lb_aemail" name="lb_aemail" pattern="([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})" class="form-control" placeholder="" data-error="Invalid Email address" value="<?php echo $sellBusinessUserProfile[0]['alternate_email'];?>">
					   <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="reg-group">
                      <label for="lb_aphone">Alternate Phone</label>
                      <input type="text" id="lb_aphone" name="lb_aphone" pattern="[1-9]{1}[0-9]{9}" class="form-control" placeholder="Mobile Number" data-error="Valid Mobile number required" value="<?php echo $sellBusinessUserProfile[0]['alternate_contact'];?>">
					  <div class="help-block with-errors"></div>
                      </div>
                    </div>
					  <div class="col-sm-4" style="margin-top:20px;">
					 <div class="reg-group">
					 
                   <input type="hidden" name="frm_submit" value="bb_up" />
                   <button type="submit" class="savebtn">Save &amp; Continue</button>
                  </div>
                  </div>
	 </div>
     
         
       </div>
				
				  <div class="col-sm-12">
					<p class="sm-p">We will be contacting you via Email or Telephone, please verify that the Email address and Phone no., you entered above is correct and make sure that your spam filter allows you to receive email from businessdeals.in</p>
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
</div>
  <!--end section-->
