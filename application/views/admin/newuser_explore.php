<?php
// var_dump($userDetails);
 $disabledRejected = '';
 $titleRejected = '';

 if ( $userDetails[0]['status'] == 2 ){
	 $disabledRejected = 'disabled';
	 $titleRejected    = 'User already rejected';
 }else if ( $userDetails[0]['status'] == 1 ){
	 $disabledRejected = 'disabled';
	 $titleRejected    = 'User already approved you can not Reject';
 }
 
 //get user type
 		
$GetUserType=$this->session->userdata('admin_type');


//var_dump($userActivity);
?>
<div class="main-content">
<h1 class="page-title"><?php echo $heading;?><a href="<?php echo base_url();?>admin/newuser" style="float:right;color:#fff;">Back To Home</a> 
<?php if($GetUserType=='admin'){?>
<span style="margin-left:300px;font-size:16px;">Query(<a href="<?php if($userDetails2!=''){ echo base_url();?>admin/singleuserquery/<?php echo $userDetails[0]['customer_id'];}?>" target="_blank"><b class="singleuser"><?php   if($userDetails2==''){ echo '0';}else{ echo $userDetails2;}?></b></a>) | Business Sell(<a href="<?php if($userDetails3!=''){ echo base_url();?>admin/BusinessSellUser/<?php echo $userDetails[0]['customer_id'];}?>" target="_blank"><b id="business_sell" class="singleuser"><?php   if($userDetails3==''){ echo '0';}else{ echo $userDetails3;}?></b></a>)<!-- | Start Up(<b id="rejected_Cust" class="rejected_Cust"></b>) | Real Estate(<b id="rejected_Cust" class="rejected_Cust"></b>)--></span>
<?php }?>
</h1>


 <div class="panel panel-default">
  <div class="panel-body">
   <div class="form-c-box">
   <form id="frm_userinfo" name="frm_userinfo" method="POST" action="<?php echo base_url();?>admin/edituser">

        <div class="form-c-box">
         
		 
		 
		 <div class="areu">
		 <p>Confidential Registration <label style="color: #a94442;"><?php if( $msgToDis != null ){echo '&nbsp;('.$msgToDis.')';}?></label></p>
				 <div class="col-sm-12">
				  <div class="col-sm-3">
                    <div class="form-group">
                    <label for="lb_email">Email address </label><br>
					<input type="hidden" id="user_id" name="user_id" value="<?php echo $user_id;?>" />
					<input type="hidden" id="to" name="to" value="<?php echo $to;?>" />
                   <?php echo $userDetails[0]['customer_id'];?>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                    <label for="lb_uname">Name<span>*</span></label>
                    <input type="hidden" name="frm_id" id="frm_id" value="<?php echo $userDetails[0]['form_id'];?>" />
					<input type="hidden" name="business_type" id="business_type" value="buy_a_business" />
					
		    <input type="text" id="lb_uname" name="name" value="<?php echo $userDetails[0]['name'];?>" class="form-control" pattern="[a-zA-Z][a-zA-Z\s]*"
			
			placeholder="Name" data-error="Name required OR Invalid name" required disabled>
                    <div class="help-block with-errors"></div>
					
                    </div>
                  </div>
                 
                  <div class="col-sm-3">
                    <div class="form-group">
                    <label for="lb_mobile">Mobile Number<span>*</span></label>
                    <div class="input-group">
                      <!--<div class="input-group-addon">+91</div>-->
					  <div class="input-group-addon currency">
                          <select class="form-control" id="country_code" name="country_code" disabled> 
<?php
                            foreach( unserialize(COUNTRY_CODE) as $priceUnitValue=>$priceUnitName ){
?>
			    <option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $userDetails[0]['country_code']){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
                            }
?>
                          </select>
                          </div>
                      <input type="text" id="lb_mobile" name="contact_number" pattern="[1-9]{1}[0-9]{9}" class="form-control" value="<?php echo $userDetails[0]['contact_number'];?>" placeholder="Mobile Number" data-error="Valid Mobile number required" required disabled>
                    </div>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
				   <div class="col-sm-3">
                    <div class="form-group">
                    <label for="lb_address">Address<span>*</span></label>
		    <input type="text" id="lb_address" name="address" class="form-control" value="<?php echo $userDetails[0]['address'];?>" rows="3" data-error="Address required" required disabled>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
				   <div class="col-sm-3">
                    <div class="form-group">
                    <label for="lb_location">Location<span>*</span></label>
		    <input type="text" id="lb_location" name="location" class="form-control" value="<?php echo $userDetails[0]['location'];?>" placeholder="" data-error="Location required" required disabled><br/><br/>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
				   <!--<div class="col-sm-3">
                    <div class="form-group">
                    <label for="lb_company">Company Name<span>*</span></label>
                    <input type="text" id="lb_company" name="company_name" class="form-control" value="<?php echo $userDetails[0]['company_name'];?>" placeholder="" data-error="Company name required" required disabled>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
				  <div class="col-sm-3">
                    <div class="form-group">
                    <label for="lb_designation">Designation<span>*</span></label>
                    <input type="text" id="lb_designation" name="designation" value="<?php echo $userDetails[0]['designation'];?>" class="form-control" placeholder="" data-error="Designation required" required disabled>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>-->
				    <div class="col-sm-3">
                    <div class="form-group">
                    <label for="lb_web">Website</label>
                    <input type="text" id="lb_web" name="website" class="form-control" pattern="https?://.+" value="<?php echo $userDetails[0]['website'];?>" placeholder="" data-error="Valid Website required" disabled>
                    <div class="help-block with-errors"></div>
                    </div>
                  </div>
		
					  <div class="help-block with-errors chk_err col-sm-12" style="color: #a94442;"></div>
					 
				  </div>
				   <div class="col-sm-12" style="margin-top: -42px;">
				   <div class="col-sm-2">
				   <label for="">Are You a*		</label>	 
                  </div>
                    <div class="col-sm-3">
                      <div class="checkbox">
		      <input type="checkbox" class="cus-t" id="checkbox1" name="who" value="owner"  <?php if($userDetails[0]['who']=='owner'){ echo "checked";}?> disabled>
                          <label for="checkbox1" class="cus-t">
                            <b>Business Owner</b>
                          </label>
                      </div>
					  
                    </div>
                    <div class="col-sm-3">
                      <div class="checkbox">
                        <input type="checkbox" class="cus-t" id="checkbox2" name="who" value="broker"  <?php if($userDetails[0]['who']=='broker'){ echo "checked";}?> disabled>
                          <label for="checkbox2" class="cus-t">
                            <b>Business Broker</b>
                          </label>
                      </div>
					  
                    </div>
                    <div class="col-sm-3">
                      <div class="checkbox">
                        <input type="checkbox" class="cus-t" id="checkbox3" name="who" value="representative" <?php if($userDetails[0]['who']=='representative'){ echo "checked";}?> disabled>
                          <label for="checkbox3" class="cus-t">
                            <b>Representative</b>
                          </label>
                      </div>
					  
                    </div>
                    </div>
									
					<div class="col-sm-12">
                                      
                    <div class="col-sm-4">
                      <div class="form-group">
                       <label for="lb_aemail">Alternate Email</label>
                       <input type="email" id="lb_aemail" name="alternate_email" pattern="([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})" class="form-control" placeholder="" data-error="Invalid Email address" value="<?php echo $userDetails[0]['alternate_email'];?>" disabled>
					   <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                      <label for="lb_aphone">Alternate Phone</label>
                      <input type="text" id="lb_aphone" name="alternate_contact" pattern="[1-9]{1}[0-9]{9}" class="form-control" placeholder="Mobile Number" data-error="Valid Mobile number required" value="<?php echo $userDetails[0]['alternate_contact'];?>" disabled>
					  <div class="help-block with-errors"></div>
                      </div>
                    </div>
                  </div>
								<div class="col-sm-12" style="margin-top: -31px;">
                    <div class="col-sm-3">&nbsp;</div>
                    <div class="alter">
                    <p>User Status</p>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                       <label for="lb_aemail">Active </label>
                       <input type="radio" name="user_status" value="Active" <?php if($userDetails[0]['user_status']=='Active'){ echo "checked='checked'"; }?> disabled class="cus-radio">
					   <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                      <label for="lb_aphone">Inactive </label>
                     <input type="radio" name="user_status" value="Inactive" <?php if($userDetails[0]['user_status']=='Inactive'){ echo "checked='checked'"; }?> disabled class="cus-radio">
					  <div class="help-block with-errors"></div>
                      </div>
                    </div>
					 <div class="col-sm-4">
                      <div class="form-group">
                      <label for="lb_aphone">User (Activity/Non Activity) :- </label>
                     <?php if($userActivity>0){ echo "Activity User"; }else{ echo "Non Activity User";}?>
                      </div>
                    </div>
					 <div class="col-sm-3">
                      <div class="form-group">
                      <label for="lb_aphone">Registration Type :- </label>
                     <?php echo $userDetails[0]['registration_type'];?>
                      </div>
                    </div>
                  </div>
				  </div>
				
				 
				</div>
                  <div class="col-sm-4"></div>
                  <div class="col-sm-4"></div>
				   <div class="row">
  <div class="col-md-12" style="padding-bottom:10px;">
   <button type="button" class="savebtn editbutton editdetails">Edit</button>
   <?php if($GetUserType=='admin'){
	if ( $userDetails[0]['status'] ==0 ){   
   ?>
   <a href="<?php echo base_url();?>admin/<?php echo $to;?>_assign/<?php echo $userDetails[0]['id'];?>"><button type="button" class="savebtn">Assign</button></a>
	<?php }if ( $userDetails[0]['status'] ==1 ){   ?>
	<a href="<?php echo base_url();?>admin/user_reassign/<?php echo $userDetails[0]['id'];?>"><button type="button" class="savebtn">Re Assign</button></a>
	<?php }?>
   <a href="<?php echo base_url();?>admin/<?php echo $to;?>_reject/<?php echo $userDetails[0]['id'];?>"><button type="button" class="savebtn" <?php echo $disabledRejected;?> title="<?php echo $titleRejected;?>">
   <?php if ( $userDetails[0]['status'] == 2 ){ echo "Rejected User";}else{?>
   Reject<?php }?></button></a>
   <?php } if ( $userDetails[0]['status'] ==1){   ?>
    <a href="<?php echo base_url();?>admin/user_assigned_details/<?php echo $userDetails[0]['id'];?>" target="_blank"><button type="button" class="savebtn" >View Details</button></a>
	<?php }if ( $userDetails[0]['status'] ==2){   ?>
    <a href="<?php echo base_url();?>admin/user_rejected_reason/<?php echo $userDetails[0]['id'];?>" target="_blank"><button type="button" class="savebtn" >View Details</button></a>
	<?php }?>
	 <div class="col-sm-4 updateshow" style="padding-right:0;display:none;">
					 <button type="submit" class="savebtn">Update</button>
					</div>
  </div>
 </div>
                  
         
          
          
         
        
       </form>      
	    <div class="col-sm-2" style="margin-top:-55px;">
					<form method="POST" action="<?php echo base_url();?>loginAsUser">
					  <input type="hidden" id="user_id" name="userid" value="<?php echo $userDetails[0]['customer_id'];?>" />
					  <input type="hidden" id="user_id" name="password" value="<?php echo $userDetails[0]['password'];?>" />
					  <input type="hidden" id="adminsession" name="adminsession" value="adminsession" />
					  <input type="submit" name="submit" value="Login As User" class="btn btn-danger"/> </label>
					  </form>	
  </div>
  </div>
 </div>
</div>
