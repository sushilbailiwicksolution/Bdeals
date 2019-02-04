<?php
  $msgToDis = $this->session->flashdata('msg');
  
  //print_r($_SESSION['registeruserid']);
?>
<div id="gtco-features">
<div class="container">
    <div class="row">
	 <div class="col-md-2"></div>
     <div class="col-md-8 login-sf" style="margin-top:20px;">
		<h3>Forget Password</h3>
		<p>Please enter your user id.</p>
		
       <div class="col-sm-12 ">
        <div class="form-group">
         <label for="">USER ID</label>
         <input type="text" class="form-control" placeholder="Enter User Id" id="userid" name="userid" required>
        </div>
       </div>
      
       <div class="col-sm-5 mt5">
       
        <input type="submit" id="registerotp_1" class="btn-ser verifyUserid" value="Submit">
		 <div class="useridResult" style="display:none;color:#f00;">Invalid Userid!<div>
       </div>
	 
    
     </div>
	  <div class="col-md-2"></div>
    </div>
    </div>
    </div>
    </div>
    </div>
  