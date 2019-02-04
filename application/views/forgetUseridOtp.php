<?php
  $msgToDis = $this->session->flashdata('msg');
  
  //print_r($_SESSION['registeruserid']);
?>
<div id="gtco-features">
<div class="container">
    <div class="row">
	 <div class="col-md-2"></div>
     <div class="col-md-8 login-sf" style="margin-top:20px;">
		<h3>OTP for forget password</h3>
		<p>Please enter otp sent on your email and mobile to change password.</p>
		<input type="hidden" name="registeruserid" value="<?php echo $_SESSION['registeruserid'];?>" id="registeruserid">
        <div class="col-sm-12 ">
        <div class="form-group">
         <label for="">Password</label>
        <input type="password" id="pwd1" name="pwd1" placeholder="New Password" class="form-control passwidth" required>
		<div id="span-pwd1"><label id="pwd1-val"></label></div>
        </div>
       </div>
	    <div class="col-sm-12 ">
        <div class="form-group">
         <label for="">Confirm Password</label>
         <input type="password" id="pwd2" name="pwd2" placeholder="Confirm Password" class="form-control passwidth" required>
		<div id="span-pwd2"><label id="pwd2-val"></label></div>
        </div>
       </div>
	   <div class="col-sm-12 ">
        <div class="form-group">
         <label for="">OTP Number</label>
         <input type="text" class="form-control" placeholder="Enter OTP Number" id="Forgotpnumber" name="otpnumber" required>
        </div>
       </div>
      
       <div class="col-sm-5 mt5">
       
        <input type="submit" id="registerotp" class="btn-ser Forgetpassword" value="Submit">
		 <div class="otpresult2" style="display:none;color:#f00;">Invalid Otp!<div>
       </div>
	 
    
     </div>
	  <div class="col-md-2"></div>
    </div>
    </div>
    </div>
    </div>
    </div>
  