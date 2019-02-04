<?php
  $msgToDis = $this->session->flashdata('msg');
  
  //print_r($_SESSION['registeruserid']);
?>
<div id="gtco-features">
<div class="container">
    <div class="row">
	 <div class="col-md-2"></div>
     <div class="col-md-8 login-sf" style="margin-top:20px;">
		<h3>Thank you for signing up with Business Deals!.</h3>
		<p>Please enter otp sent on your email and mobile to activate your account.</p>
		<input type="hidden" name="registeruserid" value="<?php echo $_SESSION['registeruserid'];?>" id="registeruserid">
       <div class="col-sm-12 ">
        <div class="form-group">
         <label for="">OTP NUMBER</label>
         <input type="text" class="form-control" placeholder="Enter OTP Number" id="otpnumber" name="otpnumber" required>
        </div>
       </div>
      
       <div class="col-sm-5 mt5">
       
        <input type="submit" id="registerotp" class="btn-ser verifyotp" value="Submit">
		 <div class="otpresult2" style="display:none;color:#f00;">Invalid Otp!<div>
       </div>
	 
    
     </div>
	  <div class="col-md-2"></div>
    </div>
    </div>
    </div>
    </div>
    </div>
  