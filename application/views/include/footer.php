<!-- forget password modal start -->
  
<div class="container">
  <!-- Modal -->
  <div class="modal fade forget_pwdbox" id="forget_pwd" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Forget Password</h4>
        </div>
        <div class="modal-body">
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
</div>
<!-- forget password modal end -->

<!-- otp after forget password start -->
  
<div class="container">
  <!-- Modal -->
  <div class="modal fade forget_pwdbox forget_pwdotp" id="forget_pwd_otp" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">OTP for forget password</h4>
        </div>
        <div class="modal-body">
          <p>Please enter otp sent on your email and mobile to change password.</p>

             <div class="row">
      	 <!-- <div class="col-md-2"></div> -->
           <div class="col-md-12 login-sf" style="">
      		<!-- <h3>OTP for forget password</h3>
      		<p>Please enter otp sent on your email and mobile to change password.</p> -->
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
    </div>
  </div>
</div>
<!-- otp after forget password modal end -->

 <!--end section -->
  <div class="clearfix"></div>
<section class="section-fulldark sec-padding footer_sec ">
    <div class="container">
      <div class="row">
        <div class="col-md-3 clearfix">
	 <p><img src="<?php echo asset_url();?>images/logo.png" alt=""></p>
          <p class="color-ft"><br/>
            BusinessDeals is a team of Business Professionals engaged in providing consultancy in various facets of Services for small and medium businesses, businessmen, investors, Professionals, Venture Capital, Private Equity funds etc.</p>
        </div>
        <!--end item-->
        
        <div class="col-md-3 clearfix">
          <h4 class="uppercase footer-title less-mar3">quick links</h4>
          <div class="clearfix"></div>
          <div class="footer-title-bottomstrip"></div>
          <ul class="usefull-links">
            <li><a href="<?php echo base_url();?>"><i class="fa fa-angle-right"></i> Home</a></li>
            <li><a href="<?php echo base_url();?>about"><i class="fa fa-angle-right"></i> About us </a></li>
            <li><a href="<?php echo base_url();?>services"><i class="fa fa-angle-right"></i> Services </a></li>
            <!--<li><a href="<?php echo base_url();?>blog"><i class="fa fa-angle-right"></i> Blog</a></li>-->
			<li><a href="<?php echo base_url();?>contact-us"><i class="fa fa-angle-right"></i> Contact us </a></li>
            <!--<li><a href="contact.php"><i class="fa fa-angle-right"></i> Contact us </a></li>-->
          </ul>
        </div>
        <!--end item-->
        
        <div class="col-md-3 clearfix">
          <div class="item-holder">
            <h4 class="uppercase footer-title less-mar3">Newsletter</h4>
            <div class="clearfix"></div>
            <div class="footer-title-bottomstrip"></div>
            <div class="newsletter">
              <p></p>
              <br />
              <form method="get" action="#">
                <input class="email_input dark" name="samplees"  type="text">
                <input name="submit" value="Go" class="input_submit dark" type="submit"/>
              </form>
            </div>
            <div class="margin-top3"></div>
            <ul class="social-icons-3 dark-2">
              <li><a class="twitter" href="#"><i class="fa fa-twitter iconcol"></i></a></li>
              <li><a href="#"><i class="fa fa-facebook iconcol"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus iconcol"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin iconcol"></i></a></li>
             
            </ul>
            <div class="clearfix"></div>
          </div>
        </div>
        <!--end item-->
        
        <div class="col-md-3 clearfix">
          <div class="item-holder">
            <h4 class="uppercase footer-title less-mar3">Contact us</h4>
            <div class="clearfix"></div>
            <div class="footer-title-bottomstrip"></div>
            <ul class="address-info no-border">
              <li class="color-ft"> 505 Manisha Building, Nehru Place, New Delhi, India</li>
              <li class="color-ft"><i class="fa fa-phone"></i> +91-11-41064800</li>
              <li class="color-ft"><i class="fa fa-mobile-phone"></i> +91-9811568568</li>
             
              <li class="color-ft last"><i class="fa fa-envelope"></i> enquiry@businessdeals.in </li>
            </ul>
          </div>
        </div>
        
        <!--end item--> 
        
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  <section class="section-copyrights sec-moreless-padding ptb15 ">
    <div class="container">
      <div class="row">
        <div class="col-md-12 color-ft"> <span>Copyright © 2019 Business Deals. All rights reserved.</span></div>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  <a href="#" class="scrollup green-3"></a><!-- end scroll to top of the page--> 
</div>
<!-- end site wraper --> 


<?php /*

<!-- ========== demo panel ========== -->

<div id="demo-selector" class="text-center popup-1"> <a href="javascript:void(0);" class="demo-close"><span></span> 
  Contact</a>
  <div class="demo-selector-wrapper back-sf">
    <div id="demo" class="text-left">
      <section id="examples">
        <form>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Name <span>*</span></label>
              <input type="text" class="form-control form-radius" id="exampleInputEmail1" placeholder="Name">
            </div>
            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Email <span>*</span></label>
              <input type="text" class="form-control form-radius" id="exampleInputEmail1" placeholder="Email">
            </div>
          </div>
          
          <div class="row">
            <div class="form-group col-md-6">
              <label for="exampleInputPassword1">Mobile No. <span>*</span></label>
              <input type="password" class="form-control form-radius" id="exampleInputPassword1" placeholder="Mobile No">
            </div>
            <div class="form-group col-md-6">
              <label for="Address">Address <span>*</span></label>
              <textarea placeholder="Address"  rows="1" placeholder="Address" class="form-control form-radius"  >
            </textarea>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="exampleInputPassword1">City <span>*</span></label>
              <input type="password" class="form-control form-radius" id="City" placeholder="City">
            </div>
            <div class="form-group col-md-6">
              <label for="exampleInputPassword1">Purpose of Enquiry <span>*</span></label>
              <select type="text" class="form-control form-radius" >
                <option>-----Select--------</option>
                <option>Sell a business</option>
                <option>Buy a business</option>
                <option>JV</option>
                <option>Incubate a business</option>
                <option>Real estate</option>
                <option>invest in a business</option>
                <option>PE/VC</option>
                <option>Business Plan</option>
                <option>Business Valution</option>
                <option>Ask a question</option>
              </select>
             
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="exampleInputPassword1">Message<span>*</span></label>
              <textarea type="text" placeholder="Message" class="form-control form-radius"  ></textarea>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-8 padd0">
              <label for="exampleInputPassword1" class="col-md-8">Do you wish to seek an advice ?</label>
              <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" >
                Yes </label>
              <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                No </label>
            </div>
            <div class="form-group col-md-4 padd0">
            <label for="exampleInputPassword1" class="col-md-4">6 + 8</label>
             <div class="col-md-8">
             <input type="text" class="form-control  form-radius" id="Captcha" placeholder="Captcha">
             </div>
            </div>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </section>
    </div>
  </div>
</div>
<!-- ========== end demo panel ========== --> 
 */
 
 
 
 
 
?>


<style>
 
 .out-label {
	 height:40px;
 }
 .out-label label{
	 position: absolute;
    width: 100%;
    bottom: -33px;
    height: 30px;
    left: 0px;
 }
 
 </style>
 
 
<div id="style-selector" class="popup-1" > <a href="javascript:void(0);" class="btn-close"><span></span><p> Quick Contact</p></a>
  
  <div class="style-selector-wrapper back-sf" id="query-form">
   <h3>Query <span style="color: #000;">Drop us a query and we'll get back to you.</span></h3>
   <form action="ajxuiq" id="ajxuiq" method="POST" data-toggle="validator" role="form" class="was-validated ajxuiq">
   <div id="uqRes" style="font-size: 15px; color: #eb0000; padding-bottom:10px;"></div>
   <div class="form-group">
    <!--<label for="uq_name">Name <span>*</span></label>-->
    <input type="text" class="form-control" name="name" placeholder="Name" pattern="[a-zA-Z][a-zA-Z\s]*" id="uq_name" data-error="Name required OR Invalid name" required>
    <div id="error1" class="help-block with-errors"></div>
  </div>
  <div class="form-group">
    <!--<label for="uq_email">Email Id <span>*</span></label>-->
    <input type="email" class="form-control" name="email" placeholder="Email Id" id="uq_email" data-error="Email address required" required value="<?php echo $this->session->userdata('userid');?>" <?php if($this->session->userdata('userid')!=''){ ?>readonly <?php } ?>>
    <div id="error2"  class="help-block with-errors"></div>
  </div>
  <div class="form-group">
   <div class="input-group ">
   <div class="input-group-addon currency " style="width:40px;">
                          <select class="form-control country_code" id="country_code" name="country_code" style="height: 28px; width:40px; 
    font-size: 11px; padding:3px 0px;"> 

	
<?php 
                            foreach( unserialize(COUNTRY_CODE) as $priceUnitValue=>$priceUnitName ){
?>
			    <option value="<?php echo $priceUnitValue;?>"><?php echo $priceUnitName;?></option>
<?php
                          
							
					}
?>
                          </select>
                          </div>
    <!--<label for="uq_contact">Contact No. <span>*</span></label>-->
    <!--<input type="number" class="form-control" name="contact" placeholder="Contact No." id="uq_contact" data-error="Contact number required" required>-->
	<input type="text" class="form-control" name="contact" style="width: 255px;" placeholder="Contact No." id="uq_contact">
	
	</div>
    <div id="error_mob" class="help-block with-errors" style="display:none;">Please enter Valid Mobile No</div>
  </div>
  <div class="form-group">
    <!--<label for="uq_city">City <span>*</span></label>-->
    <!--<input type="text" class="form-control" name="city"  pattern="[a-zA-Z][a-zA-Z\s]*" placeholder="City" id="uq_city" data-error="City required" autocomplete="on" required>-->
	
	<input type="text" class="form-control" name="city"  placeholder="City" id="uq_city" data-error="City required" autocomplete="on" >
	
    <div id="error4" class="help-block with-errors"></div>
  </div>
  
  <div class="form-group">
    <!--<label for="uq_message">Message <span>*</span></label>-->
    <textarea style="height:42px;"  class="form-control" name="msg" placeholder="Message" id="uq_message" data-error="Message required" required></textarea>
    <div id="error5" class="help-block with-errors"></div>
  </div>
  <div  class="form-group" style="height: 40px;">
						
						<div id="imgdiv" style="">
							<img id="img" src="<?php echo base_url(); ?>call-captcha">
							
						
						</div>	
						<img id="reload" src="<?php echo base_url();?>assets/img/Reload-icon.png">
						
                        <div class="custom-boxx">
							
							<input type="text"  class="e-input" name="captcha" id="captcha1" placeholder=" Captcha" id="uq_message" style="font-size: 13px;" data-error="Captcha Value required" required>	
							
                            <input type="hidden"  name="captcha2" id="captcha2" value="<?php echo $_SESSION['code']; ?>">
							
							
						</div>
                       <div  class="col-md-12 padd0">     	
                     <div style="    font-size: 13px; color: #a94442; float: left; padding: 0px 0px;" id="error6" class="help-block with-errors"></div>
						</div>
						
						  
						
						
						
						
						
                    </div>
					
<div style="    margin-top: -4px; margin-bottom: 9px; float: left; display: block; width: 100%;" class="form-group">
  <button type="button" id="vrfy_btm"  class="btn btn-default btn-ser quickbtn">Submit</button>
  </div>
 
</form>
   <style>
   #imgdiv {
	   width: 27%;
		float: left;
   }
   #imgdiv img {
	   height:34px;
		float: left;
   }
   .custom-boxx {
	   width:54%;
	   float:right;
	   height: 34px;
   }
   input.e-input {
	   width: 100%;
    height: 34px;
    float: right;
   }
   </style>
   
   
  </div>

</div>
<!-- ========== end demo panel ========== -->

<!-- ============ JS FILES ============ --> 

<?php
  if( isset( $fjs_name) && !is_null( $fjs_name ) ):
   foreach( $fjs_name as $fjs ):
    echo script_tag( asset_url().$fjs.'.js' );
    if ( strcasecmp( $fjs, 'js/masterslider/masterslider.min' ) == 0 ){
?>

<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDqld41CE4TjcM4bC2MXegnrL3aItT4uwo&amp;libraries=places" type="text/javascript"></script>
       <script type="text/javascript">
	   $('.postbusiness').hover(function(){ 
		$('.post_dropbox').show(); 
});

$('.postbusiness').mouseleave(function(){ 
		$('.post_dropbox').hide(); 
});

	   
               function initialize() {
						//alert('hellooooo');
                       var input = document.getElementById('uq_city');
                       var autocomplete = new google.maps.places.Autocomplete(input);
               }
               google.maps.event.addDomListener(window, 'load', initialize);
       </script>
 <script type="text/javascript">
               function initialize() {
						//alert('hellooooo');
                       var input = document.getElementById('City');
                       var autocomplete = new google.maps.places.Autocomplete(input);
               }
               google.maps.event.addDomListener(window, 'load', initialize);
			   
			   function initialize() {
						//alert('hellooooo');
                       var input = document.getElementById('lb_location');
                       var autocomplete = new google.maps.places.Autocomplete(input);
               }
               google.maps.event.addDomListener(window, 'load', initialize);
</script>

<script type="text/javascript">
 $(function(){
      // bind change event to select
      $('#dynamic_select').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
          return false;
      });
    });

(function($) {
 "use strict";
	var slider = new MasterSlider();
	// adds Arrows navigation control to the slider.
	slider.control('arrows');
	slider.control('bullets');
	
	slider.setup('masterslider' , {
		 width:1600,    // slider standard width
		 height:600,   // slider standard height
		 space:0,
		 speed:45,
		 layout:'fullwidth',
		 loop:true,
		 preload:0,
		 autoplay:true,
		 view:"parallaxMask"
	});

})(jQuery);


$(document).ready(function(event){

	var URL = window.location.href;
	//alert(URL);
	var str = URL.split("/");
	if (str.indexOf("personaldetail")!=-1){
		navigateToTab('personaldetail');
	}else if(str.indexOf("businessprofile")!=-1){
		navigateToTab('businessprofile');
	}else if(str.indexOf("postrequirement")!=-1){
		navigateToTab('postrequirement');
	}else if(str.indexOf("Packagedetails")!=-1){
		navigateToTab('Packagedetails');
	}else if(str.indexOf("yes")!=-1){
		//alert('in yes');
		if(str.indexOf("success")!=-1){
			$('#myModal_22').modal({
            backdrop: 'static',
            keyboard: false
        });
		}else{	
		$('#myModal_2').modal({
            backdrop: 'static',
            keyboard: false
        });
		if(str.indexOf("success")!=-1){
			$('#make-appointment').modal('show');
		}else if(str.indexOf("fail")!=-1){
			$('#make-appointment').modal('show');
		}	
		}	
	}	

	 <?php $mesg = $this->session->flashdata('msg');
		
	 ?>
	 
		var mesg = '<?php echo $mesg; ?>';
		//alert(mesg);
		if(mesg=='Dear User! You have been successfully registered.'){
			//alert('matched');
			$('#myModal_3').modal('show');
	    }
	
	//alert(str[8]);
	//if(str[8]=='businessprofile'){
	//	navigateToTab('businessprofile')
	//}
});
/*
$('.catfilter').on("change",function(){
	
var catfilter = $('.catfilter').val();	

//alert(catfilter);

if(catfilter=='1' ){
	
$(".CategoryidSort").hide();	
$(".PriceRange").hide();		

}

if(catfilter=='2' ){
	
	//alert("hello");
	
$(".CategoryidSort").show();
$(".PriceRange").hide();	

}
if(catfilter=='3'){
	
$(".PriceRange").show();
$(".CategoryidSort").hide();	

}

});	
*/

$(".usersavebtn").on("click",function(e){
	
	
	 $('.userprofileBtn').css('display','block');
	
});

$(".sectorBtn").on("click",function(e){
	
	var message=$("#message").val();
	
	if(message!=''){
	
	 $('.msgBtn').css('display','block');
	 
	}
	
});

$('body').on("click",function(e){
		
	if($('.btn-close').hasClass("show")){
		$('#style-selector').animate({right: "-=320"},function(){
			$('.btn-close').toggleClass("show");
			$('#feedback').css('z-index','1000');
		});						
	}else{
		$('#feedback').css('z-index','99');
	}		
});
 $(".nobuy").click(function( event ) {
	 
	 //alert("hello");
	 
	 $('.buynoform').show();
	 
		setTimeout(function () {
		   //Redirect with JavaScript
		   window.location.href= '<?php echo base_url();?>user_business_profile';
		}, 5000);
	
	 
 });	 
	 
 $("#query-form").click(function( event ) {
	 event.stopImmediatePropagation();
  }); 
$(".btn-close").click(function( event ) { 
	if($('.btn-close').hasClass("show")){ 
		event.stopImmediatePropagation();
		$('#feedback').css('z-index','1000');
		$('#style-selector').animate({right: "-=320"},function(){
			$('.btn-close').toggleClass("show");
		});						
	}else{
		$('#feedback').css('z-index','99');
	}		
});
 
 $("#myModal_2").on('hide.bs.modal', function () {
            //alert('The modal is about to be hidden.');
			//$('#myModal_2').modal('toggle');
    });
 
/*    $('body').click(function() {
   //$('#query-form').close();
   //jQuery('#query-form').style-selector-wrapper('close');
   

});

$('#query-form').click(function(event){
   event.stopPropagation();
});*/

$('#country').on("change",function(){
	 
	 var country=$("#country").val();
	 
	
	 if(country=="71"){
		
		 
		 $('.regionid').show();
		 
	 }else{
		 
		 $('.regionid').hide();
		 $('.regionid').val('');
		 
	 }
	 
  }); 
  
  
  
$(window).load(function(){
	 
var url=window.location.href;
var arr=url.split('#')[1]; 

if(arr=='buyer_profile'){
	
	$('#buyer_profile').show();
	$('#seller_profile').hide();
	$('.wel-user').hide();
	$('.buyerhide').css('background','#eb0000'); 
	$('.buyerhide').css('color','#fff');
	$('.sellerhide').css('background','#fff'); 
	$('.sellerhide').css('color','#000');
   
}
if(arr=='seller_profile'){
	
	$('#buyer_profile').hide();
	$('#seller_profile').show();
	$('.wel-user').hide();
	$('.buyerhide').css('background','#fff'); 
	$('.buyerhide').css('color','#000');
	$('.sellerhide').css('background','#eb0000'); 
	$('.sellerhide').css('color','#fff');
	
}
	 
});	

 $('.buyerhide').on("click",function(){
	 
	$('.buyerhide').css('background','#eb0000'); 
	$('.buyerhide').css('color','#fff');
	$('.sellerhide').css('background','#fff'); 
	$('.sellerhide').css('color','#000'); 
 });

 $('.sellerhide').on("click",function(){
	 
	$('.buyerhide').css('background','#fff'); 
	$('.buyerhide').css('color','#000');
	$('.sellerhide').css('background','#eb0000'); 
	$('.sellerhide').css('color','#fff');
 });
 
 $(window).load(function(){
	 var coun='<?php echo $sellBusinessBasicInformation[0]['location_country'];?>';
	if(coun==''){
		 $('.regionid').show();
 }	
 else if(coun=="71"){
		
		 
		 $('.regionid').show();
		 
	 }else{
		 
		 $('.regionid').hide();
		 $('.regionid').val('');
		 
	 }
  });  
    
  
  $('#state').on("change",function(){
	 
	 var state=$("#state").val();
	 
	
	 if(state=="Other"){
		
		 
		 $('.other_state').show();
		
	 }
	 
	 else{
		 
		 $('.other_state').hide();
		 
	 }
	 
  }); 
    $(window).load(function(){
	 
	var state='<?php echo $sellBusinessBasicInformation[0]['location_state'];?>';
	
	
	 
	 if(state=='Other'){
		 
		 $('.other_state').show(); 
	 }
	 else{
		 
		 $('.other_state').hide();
		 
	 }
	 
  }); 
  
  $('#buy_invest_in').on("change",function(){
	 
	 var buy_invest_in=$("#buy_invest_in").val();
	 
	
	 if(buy_invest_in=="Others"){
		
		 
		 $('.other_buy_invest').show();
		
	 }
	 
	 else{
		 
		 $('.other_buy_invest').hide();
		 
	 }
	 
  }); 
    $(window).load(function(){
	 
	var buy_invest_in='<?php echo $businessDetails[0]['other_buy_invest'];?>';
	
	
	 
	 if(buy_invest_in=='Others'){
		 
		 $('.other_buy_invest').show(); 
	 }
	 else{
		 
		 $('.other_buy_invest').hide();
		 
	 }
	 
  }); 
  
  
  $(window).load(function(){
	 
	var state='<?php echo $businessDetails[0]['location_state'];?>';
	
	
	 
	 if(state=='Other'){
		 
		 $('.other_state').show(); 
	 }
	 else{
		 
		// $('.other_state').hide();
		 
	 }
	 
  }); 
    $('#city').on("change",function(){
	 
	 var city=$("#city").val();
	 
	
	 if(city=="Other"){
		
		 
		 $('.other_city').show();
		 
	 }else{
		 
		 $('.other_city').hide();
		 
	 }
	 
  });
 $(window).load(function(){
	 
	var city='<?php echo $businessDetails[0]['location_city'];?>';
	
	
	 
	 if(city=='Other'){
		 
		 
		 //alert("hello");
		 
		 $('.other_city').show(); 
	 }
	 else{
		
		 $('.other_city').hide();
		 
	 }
	 
  });  
  $(window).load(function(){
	 
	var city='<?php echo $sellBusinessBasicInformation[0]['location_city'];?>';
	var city2='<?php echo $businessDetails[0]['location_city'];?>';
	
	
	 
	 if(city=='Other' || city2=='Other'){
		 
		 $('.other_city').show(); 
	 }
	 else{
		 
		// $('.other_city').hide();
		 
	 }
	 
  });  
  
 $('#state').on("change",function(){
	 
	 var state=$("#state").val();
	 
	//alert(state);
	 if(state == 'Other' ){
		
		 
		 $('.statecityid').show();
		 $('.citystateid').hide();
		 $('#other_city').hide();
		 $('#city').val('');
		 $('#other_city_2').val('');
		 
	 }else if(state != 'Other' ){
		
		 
		 $('.statecityid').hide();
		 $('.citystateid').show();
		 $('.other_state').val('');
		 
		 $('#other_city').hide();
	 }
	 else{
		 
		 $('.statecityid').hide();
		 $('#other_city').hide();
	 }
	 
  }); 
   $(window).load(function(){
	 
	var state='<?php echo $sellBusinessBasicInformation[0]['location_state'];?>';
	
	var state2='<?php echo $businessDetails[0]['location_state'];?>';
	//alert(state);
	 if(state == 'Other' || state2 == 'Other'){
		
		 
		 $('.statecityid').show();
		 $('.citystateid').hide();
		 
	 }else if(state != 'Other' || state2 != 'Other'){
		
		 
		 $('.statecityid').hide();
		 $('.citystateid').show();
		 
	 }
	 else{
		 
		 $('.statecityid').hide();
		 
	 }
	 
	 
  });
  $('#city').on("change",function(){
	 
	 var city=$("#city").val();
	 
	//alert(state);
	 if(city == 'Other' ){
		
		 
		 $('#other_city').show();
		 $('#other_city_2').val('');
		$('#other_city').val('');
		 
		 
	 }else if(city != 'Other' ){
		
		 
		$('#other_city').hide();
		$('#other_city').val('');
		 
	 }
	 else{
		 
		$('#other_city').hide();
		 
	 }
	 
  }); 
  
  $(window).load(function(){
	 
	var city='<?php echo $sellBusinessBasicInformation[0]['location_city'];?>';
	var city2='<?php echo $businessDetails[0]['location_city'];?>';
	
	//alert(state);
	 if(city == 'Other' || city2 == 'Other'){
		
		 
		 $('#other_city').show();
		 
		 
	 }else if(city != 'Other' || city2 != 'Other'){
		
		 
		$('#other_city').hide();
		 
	 }
	 else{
		 
		$('#other_city').hide();
		 
	 }
	 
  });
  
     
	   
   $('#category').on("change",function(){
	 
	 var category=$("#category").val();
	 
	//alert(state);
	 if(category == 'Other' ){
		
		 
		 $('.othersubcatid').show();
		 $('.subcatid').hide();
		  $('.listing_category_other').show();
		  
		  $('#listing_sub_category_other_2').val('');
		 
	 }else if(category != 'Other' ){
		
		 
		 $('.subcatid').show();
		 $('.othersubcatid').hide();
		  $('.listing_category_other').hide();
		  //$('.listing_category_other').val('');
		  $('.listing_sub_category_other_2').val('');
		  //$('.sub_category_other').val('');
		  $('.sub_category_other').hide();
		 
	 }
	 else{
		 
		$('.othersubcatid').hide();
		$('.sub_category_other').hide();
		 
	 }
	 
  }); 
 
    $(window).load(function(){
	 
	 var category='<?php echo $sellBusinessBasicInformation[0]['listing_category'];?>';
	 var category2='<?php echo $businessDetails[0]['listing_category'];?>';
	 
	 //var category=$("#category").val();
	 
	//alert(state);
	 if(category == 'Other' || category2 == 'Other'){
		//sub_category_other
		 
		 $('.othersubcatid').show();
		 $('.listing_category_other').show();
		 //$('.sub_category_other').show();
		
		 $('.subcatid').hide();
		 
		 
	 }else if(category != 'Other' || category2 != 'Other'){
		
		 
		 $('.subcatid').show();
		 $('.othersubcatid').hide();
		
		  $('.listing_category_other').hide();
		  $('.sub_category_other').hide();
		
		 
	 }
	 else{
		 
		$('.othersubcatid').hide();
		//$('.sub_category_other').hide();
		
		 
	 }
	 
  }); 
     $(window).load(function(){
	 
	 var subcategory='<?php echo $sellBusinessBasicInformation[0]['listing_sub_category'];?>';
	 var subcategory2='<?php echo $businessDetails[0]['listing_sub_category'];?>';
	 
	 //var category=$("#category").val();
	 
	//alert(state);
	 if(subcategory == 'Other' || subcategory2 == 'Other'){
		
		
		$('#listing_sub_category_other_2').val('');
		
		$('.sub_category_other').show();
		
	 }else if(subcategory != 'Other'  || subcategory2 != 'Other'){
		
		 
		  $('.sub_category_other').hide();
		// $('.sub_category_other').val('');
		 //$('.sub_category_other').hide();
		
	 }
	 else{
		
		$('.sub_category_other').hide();
		 
	 }
	 
  }); 
 $('#subcategory').on("change",function(){
	 
	 var subcategory=$("#subcategory").val();
	 
	 if(subcategory == 'Other' ){
		 
		 
		 $('.sub_category_other').show();
		 
	 }else if(subcategory != 'Other' ){
		 
		  $('.sub_category_other').hide();
		 
	 }else{
		 
		  $('.sub_category_other').hide(); 
		 
	 }
 });


</script> 
<script>
$('#basicuse').jflickrfeed({
limit: 6,
qstrings: {
id: '133294431@N08'
},
itemTemplate: 
'<li>' +
'<a href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a>' +
'</li>'
});
</script> 
<script type="text/javascript">
$(document).ready(function() {
	
	//alert("hello");
	
	$('a.delete').click(function(e) {
		e.preventDefault();
		var parent = $(this).parent();
		
		
		
		$.ajax({
			type: 'get',
			url: '<?php echo site_url("user/deleteImgid")?>',
			data: 'ajax=1&delete=' + parent.attr('id').replace('record-',''),
			beforeSend: function() {
				//parent.animate({'backgroundColor':'#fb6c6c'},300);
				
			},
			success: function() {
				
				window.location.reload(true);
			}
		});
	});
});


</script> 
<script type="text/javascript">




$(document).ready(function () {
//alert("no");
	$("#wish").click(function () {
		var flag_value=$(this).val();		
		if(flag_value=='Yes'){
			$('#make-appointment').show();
		}else{
			$('#make-appointment').hide();
		}
	});
$("#wishno").click(function () {
		var flag_value=$(this).val();		
		if(flag_value=='No'){
			$('#make-appointment').hide();
		}else{
			$('#make-appointment').show();
		}
	});	

	
	$("#Business_deals").click(function () {
		var flag_value=$(this).val();
		
		if(flag_value=='Business Deals office'){
			$('#make-appointment-3').show();
			$('#make-appointment-2').hide();
		}
	});
$("#Outside_Office").click(function () {
		var flag_value=$(this).val();		
		if(flag_value=='Outside Office'){
			$('#make-appointment-2').show();
				$('#make-appointment-3').hide();
		
		}
	});		


$("#advanceid").click(function () {
		
		$('#normalid').show();
		$('#advanceid').hide();
		$('.tabs-panel1').show();
		$('.tabs-panel2').hide();
	});
$("#normalid").click(function () {
		
		$('#advanceid').show();
		$('#normalid').hide();
		$('.tabs-panel2').show();
		$('.tabs-panel1').hide();
	});	
});	
</script>

<script>
 /*$('body').on('click', '.preview-add-button', function() {
//alert('ssssss');
jQuery('.add-property').clone().appendTo('.add-property-2');
});*/





function sumEmployee(){
	//alert('aaaaa');
	var par = $("#noemp_par").val();
	var con = $("#noemp_con").val();
	var sum = Number(par) + Number(con);
	$("#noemp_tot").val(sum);
	//alert(par);
}

function sumFund(){
	//alert('aaaaa');
	var par = $("#funding_own").val();
	var con = $("#funding_debt").val();
	var sum = Number(par) + Number(con);
	$("#fund_tot").val(sum);
	//alert(par);
}


function sumEmployeeProfile(){
	//alert('aaaaa');
	var par = $("#pemployee").val();
	var con = $("#cemployee").val();
	var sum = Number(par) + Number(con);
	$("#temployee").val(sum);
	//alert(par);
}





function getId(id,selectObject){
	var id = id;
	//alert(id);
	var split_id = id.split('_');

    // New index
	var index = Number(split_id[2]);
	//alert(index);
	var value = selectObject.value;
	//alert(value);
	if (value == 'Leased')
	{
		$("#commercial_area_"+index).show();
		$(".prohide").show();
		
		
		$("#askdefault").hide();
		$("#leased").show();
		$("#owned").hide();
		$(".revaltype").show();
		
		
		
	}
	else if (value == 'Owner')
	{
		$("#commercial_area_"+index).show();
		$(".prohide").show();
		$("#askdefault").hide();
		$("#leased").hide();
		$("#owned").show();
		$(".revaltype").show();
		
		
	}
	else
	{
		$("#commercial_area_"+index).show();
		
		$("#askdefault").show();
		$("#leased").hide();
		$("#owned").show();
		$(".revaltype").hide();
	}

}

function getPropId(id,selectObject){
	
	var value = selectObject.value;
	//alert(value);
	
	if (value == 'Technical')
	{
		$(".nature").show();
		$(".Pjvother").hide();
		
		document.querySelector('#purpose_jv_other').required = false;
	}
	else if (value == 'Others')
	{
		$(".Pjvother").show();
		$(".nature").hide();
		document.querySelector('#natureJv').required = false;
	}
	
	else
	{
	
		$(".nature").hide();
		$(".Pjvother").hide();
		
	}

}



$(window).load(function(){
	
	//alert('Hello');
	
	
	 <?php if($businessDetails[0]['purpose_jv']!=''){?>
	 
	var value='<?php echo $businessDetails[0]['purpose_jv'];?>';
	
	 <?php }else{?>
	var value='<?php echo $sellJvDetails[0]['purpose_jv'];?>';
	
	
	 <?php }?>
	
	//alert(value);
	
	
	if (value == 'Technical')
	{
		$(".nature").show();
		
		$(".Pjvother").hide();
	
	document.querySelector('#purpose_jv_other').required = false;	
		
	}
	else if (value == 'Others')
	{
		$(".Pjvother").show();
		
		$(".nature").hide();
	document.querySelector('#purpose_jv_other').required = true;		
		
	}
	else
	{
	
		$(".nature").hide();
		$(".Pjvother").hide();
		
	}

});

$(window).load(function(){

var proTypeSelect = $('.proTypeSelect').val(); 

if(proTypeSelect!=''){

  $(".revaltype").show();	
} 

});


/*$('#property_type').on('change', function() {
	//alert('aaaaaaaaa');
  if ( this.value == 'Leased')
  {
    $("#commercial_area").hide();
  }
  else
  {
    $("#commercial_area").show();
  }
});*/

$(".cus-t").change(function() {
	var checked = $(this).is(':checked');
    $(".cus-t").prop('checked',false);
    if(checked) {
        $(this).prop('checked',true);
    }
});

$(".cus-p").change(function() {
	var checked = $(this).is(':checked');
    $(".cus-p").prop('checked',false);
    if(checked) {
        $(this).prop('checked',true);
    }
});

/*$(".cus-bi").change(function() {
	var checked = $(this).is(':checked');
    $(".cus-bi").prop('checked',false);
    if(checked) {
        $(this).prop('checked',true);
    }
});*/

/*
//$('#preview-add-button').click(function(){
$('body').on('click', '.button-add', function() {

	var count = $('#count').val();
	
	//alert(count);
	//var count = 1;
	var countP = Number(count) + 1;
 // alert(countP);
 

  // Create clone
  //we select the box clone it and insert it after the box
    var newel =     $('.box:first').clone().insertAfter(".box:last");
 
 // var newel = $("div[id^='commercial_area']:last").after($('#commercial_area_'+count).clone());
  
  //alert(newel);	
// commercial_area_1

  $(newel).find('#property_id_'+count).attr("id","property_id_"+countP);
  $(newel).find('#property_id_'+countP).attr("name","property_id_"+countP);
  $(newel).find('#property_id_'+countP).val("");

  $(newel).find('#property_profile_'+count).attr("id","property_profile_"+countP);
  $(newel).find('#property_profile_'+countP).attr("name","property_profile_"+countP);
  //$(newel).find('#input[type=text]:nth-child(2)').attr("id","real_state_value_"+index);
  $(newel).find('#property_profile_'+countP).hide();
  
  $(newel).find('#property_type_'+count).attr("id","property_type_"+countP);
  $(newel).find('#property_type_'+countP).attr("name","property_type_"+countP);
  //$(newel).find('#input[type=text]:nth-child(2)').attr("id","real_state_value_"+index);
  $(newel).find('#property_type_'+countP).val("");		
   
  	
  $(newel).find('#real_state_value_unit_'+count).attr("id","real_state_value_unit_"+countP);
  $(newel).find('#real_state_value_unit_'+countP).attr("name","real_state_value_unit_"+countP);
  $(newel).find('#real_state_value_unit_'+countP).val("Upto 50 Lac");	

  $(newel).find('#real_state_value_'+count).attr("id","real_state_value_"+countP);
  $(newel).find('#real_state_value_'+countP).attr("name","real_state_value_"+countP);
  $(newel).find('#real_state_value_'+countP).val("");

  $(newel).find('#real_state_value_type_'+count).attr("id","real_state_value_type_"+countP);
  $(newel).find('#real_state_value_type_'+countP).attr("name","real_state_value_type_"+countP);

  $(newel).find('#facility_desc_'+count).attr("id","facility_desc_"+countP);
  $(newel).find('#facility_desc_'+countP).attr("name","facility_desc_"+countP);
  $(newel).find('#facility_desc_'+countP).val("");	

 
  

  $(newel).find('#total_land_area_type_'+count).attr("id","total_land_area_type_"+countP);
  $(newel).find('#total_land_area_type_'+countP).attr("name","total_land_area_type_"+countP);

  $(newel).find('#total_land_area_'+count).attr("id","total_land_area_"+countP);
  $(newel).find('#total_land_area_'+countP).attr("name","total_land_area_"+countP);
  $(newel).find('#total_land_area_'+countP).val("");

  $(newel).find('#built_up_area_type_'+count).attr("id","built_up_area_type_"+countP);
  $(newel).find('#built_up_area_type_'+countP).attr("name","built_up_area_type_"+countP);

  $(newel).find('#built_up_area_'+count).attr("id","built_up_area_"+countP);
  $(newel).find('#built_up_area_'+countP).attr("name","built_up_area_"+countP);
  $(newel).find('#built_up_area_'+countP).val("");  	

  $(newel).find('#open_area_type_'+count).attr("id","open_area_type_"+countP);
  $(newel).find('#open_area_type_'+countP).attr("name","open_area_type_"+countP);

  $(newel).find('#open_area_'+count).attr("id","open_area_"+countP);
  $(newel).find('#open_area_'+countP).attr("name","open_area_"+countP);
  $(newel).find('#open_area_'+countP).val("");

  $(newel).find('#other_area_'+count).attr("id","other_area_"+countP);	
  $(newel).find('#other_area_'+countP).attr("name","other_area_"+countP);	
  $(newel).find('#other_area_'+countP).val("");	
  
  $(newel).find('#button-remove_'+count).attr("id","button-remove_"+countP);	
  $(newel).find('#button-remove_'+countP).attr("name","button-remove_"+countP);	
  $(newel).find('#button-remove_'+countP).val(countP);	
  
  $(newel).find('.button-remove_'+count).attr("class","button-remove_"+countP);	
  $(newel).find('.button-remove_'+countP).attr("name","button-remove_"+countP);	
  $(newel).find('.button-remove_'+countP).show();	
  
  $(newel).find('#built_up_main_'+count).attr("id","built_up_main_"+countP);
  $(newel).find('#open_area_main_'+count).attr("id","open_area_main_"+countP);
  
	

  $(newel).find('#industrial_commercial_'+count).attr("id","industrial_commercial_"+countP);
  $(newel).find('#industrial_commercial_'+countP).attr("name","industrial_commercial_"+countP);
   $(newel).find('#industrial_commercial_'+countP).show("");	
   
 
 
  
  $('#property_profile_'+countP).hide();


  $('#count').val(countP);
  $('#count2').val(countP);

 });
 */



$('body').on('click', '.button-add', function() {
	
	var count = $('#count').val();
	
	//alert(count);
	//var count = 1;
	var countP = Number(count) + 1;
 

        //we select the box clone it and insert it after the box
  var newel=   $('.box:last').clone().insertAfter(".box:last");
  
  //var newel = $('.add-property_2:last').clone(true);
		
  $(newel).find('#property_id_'+count).attr("id","property_id_"+countP);
  $(newel).find('#property_id_'+countP).attr("name","property_id_"+countP);
  $(newel).find('#property_id_'+countP).val("");

  $(newel).find('#property_profile_'+count).attr("id","property_profile_"+countP);
  $(newel).find('#property_profile_'+countP).attr("name","property_profile_"+countP);
  //$(newel).find('#input[type=text]:nth-child(2)').attr("id","real_state_value_"+index);
  $(newel).find('#property_profile_'+countP).hide();
  
  $(newel).find('#property_type_'+count).attr("id","property_type_"+countP);
  $(newel).find('#property_type_'+countP).attr("name","property_type_"+countP);
  //$(newel).find('#input[type=text]:nth-child(2)').attr("id","real_state_value_"+index);
 // $(newel).find('#property_type_'+countP).val("");		
   
  	
  $(newel).find('#real_state_value_unit_'+count).attr("id","real_state_value_unit_"+countP);
  $(newel).find('#real_state_value_unit_'+countP).attr("name","real_state_value_unit_"+countP);
  $(newel).find('#real_state_value_unit_'+countP).val("Upto 50 Lac");	

  $(newel).find('#real_state_value_'+count).attr("id","real_state_value_"+countP);
  $(newel).find('#real_state_value_'+countP).attr("name","real_state_value_"+countP);
  $(newel).find('#real_state_value_'+countP).val("");

  $(newel).find('#real_state_value_type_'+count).attr("id","real_state_value_type_"+countP);
  $(newel).find('#real_state_value_type_'+countP).attr("name","real_state_value_type_"+countP);

 // $(newel).find('#facility_desc_'+count).attr("id","facility_desc_"+countP);
  //$(newel).find('#facility_desc_'+countP).attr("name","facility_desc_"+countP);
  //$(newel).find('#facility_desc_'+countP).val("");	

  $(newel).find('#commercial_area_'+count).attr("id","commercial_area_"+countP);
  $(newel).find('#commercial_area_'+countP).attr("name","commercial_area_"+countP);	
  

  $(newel).find('#total_land_area_type_'+count).attr("id","total_land_area_type_"+countP);
  $(newel).find('#total_land_area_type_'+countP).attr("name","total_land_area_type_"+countP);
  //$(newel).find('#total_land_area_type_'+countP).val("");	

  $(newel).find('#total_land_area_'+count).attr("id","total_land_area_"+countP);
  $(newel).find('#total_land_area_'+countP).attr("name","total_land_area_"+countP);
  $(newel).find('#total_land_area_'+countP).val("");

  $(newel).find('#built_up_area_type_'+count).attr("id","built_up_area_type_"+countP);
  $(newel).find('#built_up_area_type_'+countP).attr("name","built_up_area_type_"+countP);

  $(newel).find('#built_up_area_'+count).attr("id","built_up_area_"+countP);
  $(newel).find('#built_up_area_'+countP).attr("name","built_up_area_"+countP);
  $(newel).find('#built_up_area_'+countP).val("");  	

  $(newel).find('#open_area_type_'+count).attr("id","open_area_type_"+countP);
  $(newel).find('#open_area_type_'+countP).attr("name","open_area_type_"+countP);

  $(newel).find('#open_area_'+count).attr("id","open_area_"+countP);
  $(newel).find('#open_area_'+countP).attr("name","open_area_"+countP);
  $(newel).find('#open_area_'+countP).val("");

  $(newel).find('#other_area_'+count).attr("id","other_area_"+countP);	
  $(newel).find('#other_area_'+countP).attr("name","other_area_"+countP);	
  $(newel).find('#other_area_'+countP).val("");	
  
  $(newel).find('#button-remove_'+count).attr("id","button-remove_"+countP);	
  $(newel).find('#button-remove_'+countP).attr("name","button-remove_"+countP);	
  $(newel).find('#button-remove_'+countP).val("");	
  
  $(newel).find('.button-remove_'+count).attr("class","button-remove_"+countP);	
  $(newel).find('.button-remove_'+countP).attr("name","button-remove_"+countP);	
  $(newel).find('.button-remove_'+countP).show();	
  
  $(newel).find('#built_up_main_'+count).attr("id","built_up_main_"+countP);
  $(newel).find('#open_area_main_'+count).attr("id","open_area_main_"+countP);
  $(newel).find('#carpet_area_main_'+count).attr("id","carpet_area_main_"+countP);
  

 $(newel).find('#carpet_area_'+count).attr("id","carpet_area_"+countP);
  $(newel).find('#carpet_area_'+countP).attr("name","carpet_area_"+countP);
  $(newel).find('#carpet_area_'+countP).val("");
  
  
 
   $(newel).find('#carpet_area_type_'+count).attr("id","carpet_area_type_"+countP);
  $(newel).find('#carpet_area_type_'+countP).attr("name","carpet_area_type_"+countP);
  
  $(newel).find('#industrial_commercial_'+count).attr("id","industrial_commercial_"+countP);
  $(newel).find('#industrial_commercial_'+countP).attr("name","industrial_commercial_"+countP);
   $(newel).find('#industrial_commercial_'+countP).show("");
   
    //$(newel).insertAfter(".add-property_2:last");
   
  $(newel).find('#button-remove_'+countP).show();	
  $(newel).find('#button-remove_1').show();	
   
$('#property_profile_'+countP).hide();
  $("#commercial_area_"+countP).show();
  //$(".carpet_area_"+countP).show();
  $('#count').val(countP);
  $('#count2').val(countP); 




});



$(window).load(function(){

var count = $('#count').val(); 

for(z=2;z <count+1;z++){	

  $("#button-remove_"+z).show();	
} 

});


    
    $(document).on("click", ".button-remove", function() {
        $(this).closest(".box").remove();
		
		
    });

 
 function Remove(objButton){ 
 
  $(this).closest(".box").remove();
}
function f1(objButton){  


	 var str =objButton.value;
	
	 var idval = str.split("&")[0];
	 
	 //alert(idval);
	 
	 $(this).closest(".box").remove();

	
	
$.ajax({
type: "GET",
url: "<?php echo site_url("Sellabusiness/DeleteProperty")?>",
data: { idval: '' + idval + '' },
success: function(data) {
						 //location.reload();

					}
});

}

function getProperty(id,selectObject){
	
	var id = id;
	//alert(id);
	var split_id = id.split('_');

    // New index
	var index = Number(split_id[2]);
	//alert(index);
	var value = selectObject.value;
	//alert(value);
	if (value == 'Industrial')
	{
		
	$("#built_up_main_"+index).show();
    $("#open_area_main_"+index).show();  
    $("#carpet_area_main_"+index).hide();  
    $("#carpet_area_main_"+index).val("");  
	
		
		
	}
	else if (value == 'Commercial')
	{
		
		//alert(value);
	$("#built_up_main_"+index).hide();
    $("#open_area_main_"+index).hide();  
	$("#carpet_area_main_"+index).show();  	
	$("#total_land_area_"+index).val(""); 
	$("#carpet_area_"+index).val(""); 
	$("#built_up_area_"+index).val(""); 
	$("#open_area_"+index).val(""); 
	
	}
	else
	{
		
	$("#built_up_main_"+index).show();
    $("#open_area_main_"+index).show();
    $("#carpet_area_main_"+index).hide();  	  
	}

}

$(window).load(function(){

var count = $('#count').val(); 


				 if(count==0){
					var count_records = 1;
				 }else{
					 var count_records = count;
				 }		
for(z=1;z <count_records+1;z++){	

var value=$("#industrial_commercial_"+z).val();

if (value == 'Industrial')
	{
		
	$("#built_up_main_"+z).show();
  $("#open_area_main_"+z).show();
   $("#carpet_area_main_"+z).hide();  	
   $("#carpet_area_"+z).val("");  	
   //$("#total_land_area_"+z).val("");  	
  	
		
		
	}
	else if (value == 'Commercial')
	{
		
	$("#built_up_main_"+z).hide();
  $("#open_area_main_"+z).hide();
   $("#carpet_area_main_"+z).show();  	
	// $("#total_land_area_"+z).val("");  	
		
	}
	else
	{
		
	$("#built_up_main_"+z).show();
  $("#open_area_main_"+z).show();
   $("#carpet_area_main_"+z).hide();  	
	}

}  
});  
		
			
$('body').on('click', '.finance-add-button', function() {

	var count = $('#count-fin').val();
	//var count = 1;
	var countP = Number(count) + 1;
	//alert(count);
  
  // Create clone
 // var newel = $('.add-finance_2:last').clone(true);
  
    var newel=   $('.finbox:last').clone(true).insertAfter(".finbox:last");
  //alert(newel);	
  // Set id of new element
  //$(newel).find('select[id=text]:nth-child(1)').attr("id","add-property_"+index);
  $(newel).find('#finance_id_'+count).attr("id","finance_id_"+countP);
  $(newel).find('#finance_id_'+countP).attr("name","finance_id_"+countP);
  $(newel).find('#finance_id_'+countP).val("");


  	
  $(newel).find('#fin_year_'+count).attr("id","fin_year_"+countP);
  $(newel).find('#fin_year_'+countP).attr("name","fin_year_"+countP);
  $(newel).find('#fin_year_'+countP).val("");

  $(newel).find('#fin_revenue_turnover_'+count).attr("id","fin_revenue_turnover_"+countP);
  $(newel).find('#fin_revenue_turnover_'+countP).attr("name","fin_revenue_turnover_"+countP);
  $(newel).find('#fin_revenue_turnover_'+countP).val("");
  
  $(newel).find('#fin_turnover_currency_'+count).attr("id","fin_turnover_currency_"+countP);
  $(newel).find('#fin_turnover_currency_'+countP).attr("name","fin_turnover_currency_"+countP);
  $(newel).find('#fin_turnover_currency_'+countP).val("");  
  
  
  $(newel).find('#fin_turnover_unit_'+count).attr("id","fin_turnover_unit_"+countP);
  $(newel).find('#fin_turnover_unit_'+countP).attr("name","fin_turnover_unit_"+countP);
  $(newel).find('#fin_turnover_unit_'+countP).val("");

  $(newel).find('#fin_EDITDA_'+count).attr("id","fin_EDITDA_"+countP);
  $(newel).find('#fin_EDITDA_'+countP).attr("name","fin_EDITDA_"+countP);
  $(newel).find('#fin_EDITDA_'+countP).val("");	

  $(newel).find('#fin_PAT_'+count).attr("id","fin_PAT_"+countP);
  $(newel).find('#fin_PAT_'+countP).attr("name","fin_PAT_"+countP);
  $(newel).find('#fin_PAT_'+countP).val("");

  $(newel).find('#fin_margin_'+count).attr("id","fin_margin_"+countP);
  $(newel).find('#fin_margin_'+countP).attr("name","fin_margin_"+countP);	
  $(newel).find('#fin_margin_'+countP).val("");	
  
  $(newel).find('#fin_margin_currency_'+count).attr("id","fin_margin_currency_"+countP);
  $(newel).find('#fin_margin_currency_'+countP).attr("name","fin_margin_currency_"+countP);	
  $(newel).find('#fin_margin_currency_'+countP).val("");	
  
  
  $(newel).find('#fin_margin_unit_'+count).attr("id","fin_margin_unit_"+countP);
  $(newel).find('#fin_margin_unit_'+countP).attr("name","fin_margin_unit_"+countP);	
  $(newel).find('#fin_margin_unit_'+countP).val("");	
  
  
  
   $(newel).find('#financial_details_'+count).attr("id","financial_details_"+countP);
  $(newel).find('#financial_details_'+countP).attr("name","financial_details_"+countP);	

  $(newel).find('#fin_yearly_'+count).attr("id","fin_yearly_"+countP);
  $(newel).find('#fin_yearly_'+countP).attr("name","fin_yearly_"+countP);
  $(newel).find('#fin_yearly_'+countP).val("");	
  
 $(newel).find('#button-remove_'+count).attr("id","button-remove_"+countP);	
  $(newel).find('#button-remove_'+countP).attr("name","button-remove_"+countP);	
  $(newel).find('#button-remove_'+countP).hide();	
  $(newel).find('.button-remove').show();	
  
	 $(newel).find('#finbutton-remove_'+countP).show();	
  $(newel).find('#finbutton-remove_1').show();	

  //$("#commercial_area_"+countP).show();
  $('#count-fin').val(countP);
  $('#count-fin2').val(countP);

  
 });
$(document).on("click", ".finbutton-remove", function() {
	
	var count = $('#count-fin').val();
	
	$(this).closest(".finbox").remove();
	
	
	var countP = count-1;
	
	$('#count-fin').val(countP);
  $('#count-fin2').val(countP);
	
	

});
 
$(window).load(function(){

var countfin = $('#count-fin').val(); 

//alert(countfin);

for(a=2;a <countfin+1;a++){	

  $("#finbutton-remove_"+a).show();	
}  
}); 
function RemoveFin(objButton){  
	//alert(objButton.value);
	
	var str =objButton.value;
	
	 var idval = str.split("&")[0];
	 var countval = str.split("&")[1];
				
     $(this).closest(".finbox").remove();   // remove the last element
	
	var countupdate=countval+1;
				
$.ajax({
type: "GET",
url: "<?php echo site_url("Sellabusiness/DeleteFinProperty")?>",
data: { idval: '' + idval + '' },
success: function(data) {
	

						//location.reload(true);
						
						//window.top.location.reload(false)
						
					}
});				
				
}




 </script>
<script>
$(document).ready(function() {
    $(".buyclose").click(function() {
		
			$url="<?php echo base_url();?>user_business_profile";
			
			window.location.href = $url;
	});

    $(".btnsubmit").click(function() {
		
		var city=$('#city').val();
		
		//alert(city);
		
		if(city==''){
			
			$(".citymsg").show();
		
			return false;
			
		}else{
			
			$(".citymsg").hide();
			
			return true;
		}
		
	});	
	$(".btnsubmit").click(function() {
		
		var city=$('#city').val();
		var other_city=$('#other_city').val();
		
		//alert(city);
		
		if(city==''){
			
			$(".citymsg").show();
		
			return false;
			
		}
		if(city=='Other'){
			
			$("#other_citymsg").show();
		
			if(other_city==''){
			
			return false;
			}else{
			$("#other_citymsg").hide();	
			return true;	
			}
			
		}
		else{
			
			$(".citymsg").hide();
			$("#other_citymsg").hide();
			return true;
		}
		
	});	
		
    $(".cstatusbus").click(function() {
		
		var bstatus=$('#bstatus').val();
		var bstatus_other=$('#bstatus_other').val();
		
		//alert(bstatus);
		
		if(bstatus=='Other'){
			
			$(".bstatusmsg").show();
			
			if(bstatus_other==''){
			
			return false;
			}else{
			$(".bstatusmsg").hide();	
			return true;	
			}
			
		}else{
			
			$(".bstatusmsg").hide();
			$('#bstatus_other').val("")
			
			return true;
		}
		
	});	

    $(".cstatusRole").click(function() {
		
		var bstatus=$('#invester_role').val();
		var bstatus_other=$('#invester_role_other').val();
		var purposeJv=$('#purposeJv').val();
		
		//alert(bstatus);
		
		if(bstatus=='Others'){
			
			$(".bstatusmsg").show();
			
			if(bstatus_other==''){
			
			return false;
			}else{
			$(".bstatusmsg").hide();	
			return true;	
			}
			
		}
		if(purposeJv=='Others'){
			
			$(".purposeJVother").show();
			
			if(purpose_jv_other==''){
			
			return false;
			}else{
			$(".purposeJVother").hide();	
			return true;	
			}
			
		}
		else{
			
			$(".bstatusmsg").hide();
			$('#bstatus_other').val("");
			$('#purpose_jv_other').val("");
			
			return true;
		}
		
	});	
	
	  $("#investment_required_as").change(function() {
		  
		  var investment_required_as=$('#investment_required_as').val();
		 
		if(investment_required_as=='Others'){
			
		
			$("#investment_other").show();

		}else{
			
				$("#investment_other").hide();
		}	
		  
	  });
	  
	  $(window).load(function(){
		  
		  var investment_required_as='<?php echo $sellBusinessBasicInformation[0]['investment_required_as'];?>'
		  var investment_required_as='<?php echo $businessDetails[0]['investment_required_as'];?>'
		  var invester_role='<?php echo $businessDetails[0]['invester_role'];?>'
		 
		if(investment_required_as=='Others'){
			
		
			$("#investment_other").show();

		}
		if(invester_role=='Others'){
			
		
			$("#invester_role_other").show();

		}
		else{
			
				$("#investment_other").hide();
				$("#invester_role_other").hide();
		}	
		  
	  });
		
		var bstatus=$('#invester_role').val();
	
	    $(".dealbtn").click(function() {
		
		var bstatus=$('#invester_role').val();
		var bstatus_other=$('#invester_role_other').val();
		var investment_required_as=$('#investment_required_as').val();
		var investment_other=$('#investment_other').val();
		
		//alert(bstatus);
		
		if(bstatus=='Others'){
			
			$(".Ststatusmsg").show();
			
			if(bstatus_other==''){
			
			return false;
			}else{
			$(".Ststatusmsg").hide();	
			return true;	
			}
			
		}
		if(investment_required_as=='Others'){
			
			$(".invStstatusmsg").show();
			$("#investment_other").show();
			
			if(investment_other==''){
			
			return false;
			}else{
			$(".invStstatusmsg").hide();	
			return true;	
			}
			
		}
		else{
			
			$(".Ststatusmsg").hide();
			$('#investment_other').val("");
			$('#invester_role_other').val("");
			
			return true;
		}
		
	});	
	
	
	    $(".indsubmit").click(function() {
		
		var bstatus=$('#industry_preference').val();
		
		
		if(bstatus==null){
			
			//alert(bstatus);
			
			$(".buystatusmsg").show();
			
			if(bstatus==null){
			
			return false;
			}else{
			$(".buystatusmsg").hide();	
			return true;	
			}
			
		}
		
		else{
			
			$(".buystatusmsg").hide();
			
			
		
			
			return true;
		}
		
	});	
		    $(".indsubmit").click(function() {
		
	
		var state11=$('#state11').val();
		
	//alert(state11);
		
		 if(state11==null || state11==''){
			
			//alert(bstatus);
			
			$(".buyStatemsg").show();
			
			if(state11==null){
			
			return false;
			}else{
			$(".buyStatemsg").hide();	
			return true;	
			}
			
		}
		else{
			
			
			$(".buyStatemsg").hide();	
			
		
			
			return true;
		}
		
	});	
		
	    $(".indsubmit").click(function() {
		
		
		var buy_invest_in=$('#buy_invest_in').val();
		var other_buy_invest=$('.other_buy_invest').val();
		
		
	//	alert(bstatus);
		if(buy_invest_in=='Others'){
			
			//alert(bstatus);
			
			$(".buy_invest_inmsg").show();
			
			if(other_buy_invest==''){
			
			return false;
			}else{
			$(".buy_invest_inmsg").hide();	
			return true;	
			}
			
		}
		
		else{
			
		
			$(".buy_invest_inmsg").hide();
		
			
			return true;
		}
		
	});
	
		    $(".indsubmitProfile").click(function() {
		
		
		var buy_invest_in=$('#buy_invest_in').val();
		var other_buy_invest=$('.other_buy_invest').val();
		
	

		if(buy_invest_in=='Others'){
			
			//alert(bstatus);
			
			$(".buy_invest_inmsg").show();
			
			if(other_buy_invest==''){
			$('.indsubmitProfile').attr("disabled", 'disabled');
			
			}else{
			$(".buy_invest_inmsg").hide();	
			$('.indsubmitProfile').attr('disabled', false);
			}
			
		}
		
		else{
			
		
			$(".buy_invest_inmsg").hide();
		
			
			$('.indsubmitProfile').prop('disabled', true);
		}
		
	});
	
	$(window).load(function(){
		  
		  var other_buy_invest='<?php echo $businessDetails[0]['other_buy_invest'];?>'
		 
		 
		if(other_buy_invest!=''){
			
		
			$(".other_buy_invest").show();

		}else{
			
			$(".other_buy_invest").hide();
		}
	});
		    $(".locBuy").click(function() {
		
		var bstatus=$('#listing_category').val();
		var state2=$('#state2').val();
		
		
		//alert(bstatus);
		
		
		if(bstatus==null){
			
			//alert(bstatus);
			
			$(".buystatusmsg2").show();
			
			if(bstatus==null){
			
			return false;
			}else{
			$(".buystatusmsg2").hide();	
			return true;	
			}
			
		}
			if(state2==null){
			
			//alert(bstatus);
			
			$(".buystatusmsg3").show();
			
			if(state2==null){
			
			return false;
			}else{
			$(".buystatusmsg3").hide();	
			return true;	
			}
			
		}
		else{
			
			$(".buystatusmsg2").hide();
			$(".buystatusmsg3").hide();
		
			
			return true;
		}
		
	});	
	
    $("#Message").click(function() {
        $(".contactForm2").show();
        $(".contactForm1").hide();
    });
	$(".bus-no").click(function() {
        
		//url='<?php echo base_url();?>user_business_profile';
       // window.location = url; // redirect
    });
	
	$("#investment_min" ).keyup(function() {
		
		var MinVal=$('#investment_min').val();
		var unit=$('#investment_min_price_unit').val();
		
		if(unit=='THOUSANDS')
		final_val='000';
	if(unit=='LACS')
		final_val='00000';
	if(unit=='CRORES')
		final_val='0000000';
	if(unit=='MILLIONS')
		final_val='000000';
	if(unit=='BILLIONS')
		final_val='000000000';
	
	var minfinalval=MinVal+final_val;
		
		
		var MaxVal=$('#investment_max').val();
		
		var unit2=$('#investment_max_price_unit').val();
		
		if(unit2=='THOUSANDS')
		final_val2='000';
	if(unit2=='LACS')
		final_val2='00000';
	if(unit2=='CRORES')
		final_val2='0000000';
	if(unit2=='MILLIONS')
		final_val2='000000';
	if(unit2=='BILLIONS')
		final_val2='000000000';
	
	var maxfinalval=MaxVal+final_val2;
		
		
  if(parseInt(minfinalval)>parseInt(maxfinalval)){
      $('#errorMsg').show();
	  $('.buyerBP').attr("disabled", 'disabled');

  }
 
  else{
    $('#errorMsg').hide();
	$('.buyerBP').attr("disabled", false);

	
  }
});

	$("#investment_min_price_unit" ).change(function() {
		
		var MinVal=$('#investment_min').val();
		var unit=$('#investment_min_price_unit').val();
		
		if(unit=='THOUSANDS')
		final_val='000';
	if(unit=='LACS')
		final_val='00000';
	if(unit=='CRORES')
		final_val='0000000';
	if(unit=='MILLIONS')
		final_val='000000';
	if(unit=='BILLIONS')
		final_val='000000000';
	
	var minfinalval=MinVal+final_val;
		
		
		var MaxVal=$('#investment_max').val();
		
		var unit2=$('#investment_max_price_unit').val();
		
		if(unit2=='THOUSANDS')
		final_val2='000';
	if(unit2=='LACS')
		final_val2='00000';
	if(unit2=='CRORES')
		final_val2='0000000';
	if(unit2=='MILLIONS')
		final_val2='000000';
	if(unit2=='BILLIONS')
		final_val2='000000000';
	
	var maxfinalval=MaxVal+final_val2;
		
		
  if(parseInt(minfinalval)>parseInt(maxfinalval)){
      $('#errorMsg').show();
	  $('.buyerBP').attr("disabled", 'disabled');
  }
 
  else{
    $('#errorMsg').hide();
	$('.buyerBP').attr("disabled", false);
	
  }
});

$("#investment_max" ).keyup(function() {
	
			var MinVal=$('#investment_min').val();
		var unit=$('#investment_min_price_unit').val();
		
		if(unit=='THOUSANDS')
		final_val='000';
	if(unit=='LACS')
		final_val='00000';
	if(unit=='CRORES')
		final_val='0000000';
	if(unit=='MILLIONS')
		final_val='000000';
	if(unit=='BILLIONS')
		final_val='000000000';
	
	var minfinalval=MinVal+final_val;
		
		
		var MaxVal=$('#investment_max').val();
		
		var unit2=$('#investment_max_price_unit').val();
		
	if(unit2=='THOUSANDS')
		final_val2='000';
	if(unit2=='LACS')
		final_val2='00000';
	if(unit2=='CRORES')
		final_val2='0000000';
	if(unit2=='MILLIONS')
		final_val2='000000';
	if(unit2=='BILLIONS')
		final_val2='000000000';
	
	var maxfinalval=MaxVal+final_val2;
		
		
  if(parseInt(minfinalval)>parseInt(maxfinalval)){
      $('#errorMsg').show();
	  $('.buyerBP').attr("disabled", 'disabled');
  }
 
  else{
    $('#errorMsg').hide();
	$('.buyerBP').attr("disabled", false);
	
  }
});
$("#investment_max_price_unit" ).change(function() {
	
			var MinVal=$('#investment_min').val();
		var unit=$('#investment_min_price_unit').val();
		
		if(unit=='THOUSANDS')
		final_val='000';
	if(unit=='LACS')
		final_val='00000';
	if(unit=='CRORES')
		final_val='0000000';
	if(unit=='MILLIONS')
		final_val='000000';
	if(unit=='BILLIONS')
		final_val='000000000';
	
	var minfinalval=MinVal+final_val;
		
		
		var MaxVal=$('#investment_max').val();
		
		var unit2=$('#investment_max_price_unit').val();
		
	if(unit2=='THOUSANDS')
		final_val2='000';
	if(unit2=='LACS')
		final_val2='00000';
	if(unit2=='CRORES')
		final_val2='0000000';
	if(unit2=='MILLIONS')
		final_val2='000000';
	if(unit2=='BILLIONS')
		final_val2='000000000';
	
	var maxfinalval=MaxVal+final_val2;
		
		
  if(parseInt(minfinalval)>parseInt(maxfinalval)){
      $('#errorMsg').show();
	  $('.buyerBP').attr("disabled", 'disabled');
  }
 
  else{
    $('#errorMsg').hide();
	$('.buyerBP').attr("disabled", false);
	
  }
});



	$("#req_investment_min" ).keyup(function() {
		
		var MinVal=$('#req_investment_min').val();
		
		var unit=$('#req_investment_min_price_unit').val();
		
		if(unit=='THOUSANDS')
		final_val='000';
	if(unit=='LACS')
		final_val='00000';
	if(unit=='CRORES')
		final_val='0000000';
	if(unit=='MILLIONS')
		final_val='000000';
	if(unit=='BILLIONS')
		final_val='000000000';
	
	var minfinalval=MinVal+final_val;
		
		
		
		var MaxVal=$('#req_investment_max').val();
		
		
		var unit2=$('#req_investment_max_price_unit').val();
		
	if(unit2=='THOUSANDS')
		final_val2='000';
	if(unit2=='LACS')
		final_val2='00000';
	if(unit2=='CRORES')
		final_val2='0000000';
	if(unit2=='MILLIONS')
		final_val2='000000';
	if(unit2=='BILLIONS')
		final_val2='000000000';
	
	var maxfinalval=MaxVal+final_val2;
		
		
  if(parseInt(minfinalval)>parseInt(maxfinalval)){
      $('#errorMsgREQ').show(); 
	 $('.buyerPP').attr("disabled", 'disabled');
	  
  }
 
  else{
    $('#errorMsgREQ').hide();
	$('.buyerPP').attr("disabled", false);
  }
});
$("#req_investment_max" ).keyup(function() {
	
		var MinVal=$('#req_investment_min').val();
		
		var unit=$('#req_investment_min_price_unit').val();
		
		if(unit=='THOUSANDS')
		final_val='000';
	if(unit=='LACS')
		final_val='00000';
	if(unit=='CRORES')
		final_val='0000000';
	if(unit=='MILLIONS')
		final_val='000000';
	if(unit=='BILLIONS')
		final_val='000000000';
	
	var minfinalval=MinVal+final_val;
		
		
		
		var MaxVal=$('#req_investment_max').val();
		
		
		var unit2=$('#req_investment_max_price_unit').val();
		
	if(unit2=='THOUSANDS')
		final_val2='000';
	if(unit2=='LACS')
		final_val2='00000';
	if(unit2=='CRORES')
		final_val2='0000000';
	if(unit2=='MILLIONS')
		final_val2='000000';
	if(unit2=='BILLIONS')
		final_val2='000000000';
	
	var maxfinalval=MaxVal+final_val2;
		
		
  if(parseInt(minfinalval)>parseInt(maxfinalval)){
      $('#errorMsgREQ').show(); 
	 $('.buyerPP').attr("disabled", 'disabled');
	  
  }
 
  else{
    $('#errorMsgREQ').hide();
	$('.buyerPP').attr("disabled", false);
  }
});


$("#req_investment_min_price_unit" ).change(function() {
	
		var MinVal=$('#req_investment_min').val();
		
		var unit=$('#req_investment_min_price_unit').val();
		
		if(unit=='THOUSANDS')
		final_val='000';
	if(unit=='LACS')
		final_val='00000';
	if(unit=='CRORES')
		final_val='0000000';
	if(unit=='MILLIONS')
		final_val='000000';
	if(unit=='BILLIONS')
		final_val='000000000';
	
	var minfinalval=MinVal+final_val;
		
		
		
		var MaxVal=$('#req_investment_max').val();
		
		
		var unit2=$('#req_investment_max_price_unit').val();
		
	if(unit2=='THOUSANDS')
		final_val2='000';
	if(unit2=='LACS')
		final_val2='00000';
	if(unit2=='CRORES')
		final_val2='0000000';
	if(unit2=='MILLIONS')
		final_val2='000000';
	if(unit2=='BILLIONS')
		final_val2='000000000';
	
	var maxfinalval=MaxVal+final_val2;
		
		
  if(parseInt(minfinalval)>parseInt(maxfinalval)){
      $('#errorMsgREQ').show(); 
	 $('.buyerPP').attr("disabled", 'disabled');
	  
  }
 
  else{
    $('#errorMsgREQ').hide();
	$('.buyerPP').attr("disabled", false);
  }
});

$("#req_investment_max_price_unit" ).change(function() {
	
		var MinVal=$('#req_investment_min').val();
		
		var unit=$('#req_investment_min_price_unit').val();
		
		if(unit=='THOUSANDS')
		final_val='000';
	if(unit=='LACS')
		final_val='00000';
	if(unit=='CRORES')
		final_val='0000000';
	if(unit=='MILLIONS')
		final_val='000000';
	if(unit=='BILLIONS')
		final_val='000000000';
	
	var minfinalval=MinVal+final_val;
		
		
		
		var MaxVal=$('#req_investment_max').val();
		
		
		var unit2=$('#req_investment_max_price_unit').val();
		
	if(unit2=='THOUSANDS')
		final_val2='000';
	if(unit2=='LACS')
		final_val2='00000';
	if(unit2=='CRORES')
		final_val2='0000000';
	if(unit2=='MILLIONS')
		final_val2='000000';
	if(unit2=='BILLIONS')
		final_val2='000000000';
	
	var maxfinalval=MaxVal+final_val2;
		
		
  if(parseInt(minfinalval)>parseInt(maxfinalval)){
      $('#errorMsgREQ').show(); 
	 $('.buyerPP').attr("disabled", 'disabled');
	  
  }
 
  else{
    $('#errorMsgREQ').hide();
	$('.buyerPP').attr("disabled", false);
  }
});

});
$(document).ready(function() {
    $("#Message").mouseout(function() {
        var Message = $("#Message").val();
        if (Message != '') {
            $(".contactForm2").hide();
            $(".contactForm1").show();
        }
    });
});
 </script>
 <script>
 $(document).ready(function() {
$(".wishno,.oneclose,.onesubmit").click(function() {
var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2, 4})+$/;
var pattern = /^[\s()+-]*([0-9][\s()+-]*){10}$/;
var name = $("#Name").val();
var email = $("#email").val();
if (!filter.test(email)) {
    $('.email-missing').show();
} else {
    $('.email-missing').hide();
}
var mobile = $("#Mobile").val();
if (!pattern.test(mobile)) {
    $('.mobile-missing').show();
} else {
    $('.mobile-missing').hide();
}
var address = $("#Address").val();
var city = $("#City").val();
var purpose = $("#Purpose").val();
var message = $("#Message").val();
var time1 = $("#time1").val();
var date1 = $("#date1").val();
var meeting_agenda = $("#meeting_agenda1").val();
var meeting_venue = $("#meeting_venue").val();
//var Business_deals = $('#Business_deals').get(0).attributes.onclick.nodeValue;	
//alert(Business_deals);	
var onesubmit = $('.onesubmit').val();
if (onesubmit != '') {
    $(".twosubmit").val('');
    var type = $("#Business_deals").val();
    if (time1 == '') { //alert("hello");	
        //$('#myModal_2').modal('toogle');	
        $('.time1-missing').show();
        //$('#myModal_2').modal('toogle');    
    } else {
        $('.time1-missing').hide();
    }
    if (date1 == '') {
        $('.date1-missing').show();
        $('#myModal_2').modal('toogle');
        //$('#myModal_2').modal('toogle');      
    } else {
        $('.date1-missing').hide();
    }
	if (meeting_agenda == '') {
        $('.meeting_agenda1').show();
        $('#myModal_2').modal('toogle');
        //$('#myModal_2').modal('toogle');      
    }else {
        $('.meeting_agenda1').hide();
    }
	if (meeting_venue == '') {
        $('.meeting_venue').show();
        $('#myModal_2').modal('toogle');
        //$('#myModal_2').modal('toogle');      
    }else {
        $('.meeting_venue').hide();
    }
}
// Returns successful data submission message when the entered information is stored in database. 
var dataString = 'name=' + name + '&email=' + email + '&mobile=' + mobile + '&address=' + address + '&city=' + city + '&purpose=' + purpose + '&message=' + message + '&time1=' + time1 + '&date1=' + date1 + '&type=' + type+ '&meeting_agenda=' + meeting_agenda + '&meeting_venue=' + meeting_venue;
if (name == '' || email == '' || mobile == '' || address == '' || city == '' || purpose == '' || message == '') {
    $(".messageval").show();
    $('#myModal_2').modal('hide');
} else {
    // AJAX Code To Submit Form.
    $.ajax({
        type: "POST",
        url: "<?php echo site_url("Contact/setContactDetails")?>",
        data: dataString,
        cache: false,
        success: function(result) {
            $(".messageval").hide();
            	
            $('#myModal_2').modal('hide');
            $('.mobile-missing').hide();
            $("#Name").val('');
            $("#email").val('');
            $("#Mobile").val('');
            $("#Address").val('');
            $("#City").val('');
            $("#Purpose").val('');
            $("#Message").val('');
            $(".place").val('');
            $(".tax").val('');
            $("#time1").val('');
            $("#date1").val('');
            $("#type").val('');
            $(".onesubmit").val('');
            $(".twosubmit").val('');
			swal("Success","Thanks for contacting us! We will get back to you soon.", "success");
			location.reload(true);
        }
    });
}
return false;
});
});

    $("#wishno").click(function() {
        


        var address = $("#Address").val();
        var email = $("#email").val();
        var Name = $("#Name").val();
        var city = $("#City").val();
        var mobile = $("#Mobile").val();
        var purpose = $("#Purpose").val();
        var message = $("#Message").val();
        var time = $("#time").val('');
        var date = $("#date").val('');
        var place = $("input[name='mlocation']:checked").val('');
        var tax = $("input[name='tax']:checked").val('');

        var twosubmit = $('.twosubmit').val('');
       
        var dataString = 'name=' + Name + '&email=' + email + '&mobile=' + mobile + '&address=' + address + '&city=' + city + '&message=' + message + '&purpose=' + purpose;
      
            // AJAX Code To Submit Form.
            $.ajax({
                type: "POST",
                url: "<?php echo site_url("Contact/setContactDetails")?>",
                data: dataString,
                cache: false,
                success: function(result) {

				//alert("hewllo");

                    swal("Success","Thanks for contacting us! We will get back to you soon.", "success");	
					location.reload(true);
                }
            });
       
        
 
});

    $(".oneclose,.twosubmit").click(function() {
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var pattern = /^[\s()+-]*([0-9][\s()+-]*){10}$/;
        var name = $("#Name").val();
        var email = $("#email").val();
        if (!filter.test(email)) {
            $('.email-missing').show();
        } else {
            $('.email-missing').hide();
        }
        var mobile = $("#Mobile").val();
        if (!pattern.test(mobile)) {
            $('.mobile-missing').show();
        } else {
            $('.mobile-missing').hide();
        }
        var address = $("#Address").val();
        var city = $("#City").val();
        var purpose = $("#Purpose").val();
        var message = $("#Message").val();
        var time = $("#time").val();
        var date = $("#date").val();
        var meeting_agenda = $("#meeting_agenda2").val();
        var meeting_venue = $("#meeting_venue2").val();
        var place = $("input[name='mlocation']:checked").val();
        var tax = $("input[name='tax']:checked").val();
        //var Business_deals = $('#Business_deals').get(0).attributes.onclick.nodeValue;	
        var twosubmit = $('.twosubmit').val();
        if (twosubmit != '') {
            var type = $("#Outside_Office").val();
            if (time == '') {
                //alert("hello");	
                //$('#myModal_2').modal('toogle');	
                $('.time-missing').show();
                //$('#myModal_2').modal('toogle');   
            } else {
                $('.time-missing').hide();
            }
            if (date == '') {
                $('.date-missing').show();
                $('#myModal_2').modal('toogle'); //$('#myModal_2').modal('toogle');   
            } else {
                $('.date-missing').hide();
            }
			if (meeting_agenda == '') {
        $('.meeting_agenda2').show();
        $('#myModal_2').modal('toogle');
        //$('#myModal_2').modal('toogle');      
    }else {
        $('.meeting_agenda2').hide();
    }
	if (meeting_venue == '') {
        $('.meeting_venue2').show();
        $('#myModal_2').modal('toogle');
        //$('#myModal_2').modal('toogle');      
    }else {
        $('.meeting_venue2').hide();
    }
        } // Returns successful data submission message when the entered information is stored in database.
        var dataString = 'name=' + name + '&email=' + email + '&mobile=' + mobile + '&address=' + address + '&city=' + city + '&purpose=' + purpose + '&message=' + message + '&place=' + place + '&time=' + time + '&date=' + date + '&tax=' + tax + '&type=' + type + '&meeting_agenda=' + meeting_agenda + '&meeting_venue=' + meeting_venue;   
        if (name == '' || email == '' || mobile == '' || address == '' || city == '' || purpose == '' || message == '') {
            $(".messageval").show();
            $('#myModal_2').modal('hide'); 
        } else {
            // AJAX Code To Submit Form.
            $.ajax({
                type: "POST",
                url: "<?php echo site_url("Contact/setContactDetails")?>",
                data: dataString,
                cache: false,
                success: function(result) {
                    $(".messageval").hide();
                   
                    $('#myModal_2').modal('hide');
                    $('.mobile-missing').hide();
                    $("#Name").val('');
                    $("#email").val('');
                    $("#Mobile").val('');
                    $("#Address").val('');
                    $("#City").val('');
                    $("#Purpose").val('');
                    $("#Message").val('');
                    $(".place").val('');
                    $(".tax").val('');
                    $("#time").val('');
                    $("#date").val('');
                    $("#time1").val('');
                    $("#date1").val('');
                    $("#type").val('');
                    $(".onesubmit").val('');
                    $(".twosubmit").val('');
					 swal("Success","Thanks for contacting us! We will get back to you soon.", "success");	
					location.reload(true);
                }
            });
        }
        return false;
 
});

$('.verifyotp').on("click",function(){	



var registeruserid =$("#registeruserid").val();
var otpnumber = $("#otpnumber").val();



		$.ajax({
			
			url: '<?php echo site_url("User/verifyotp")?>',
			type: "POST",
			data: {registeruserid: '' + registeruserid + '',otpnumber: '' + otpnumber + ''},
			
			success: function(data) {
				
			//alert(data);
			if(data == 2){
				
				//alert("ok"); 
				
				var url='<?php echo site_url("User/Loginverify")?>';
				
				
				
				window.location.href = url;
				
				//location.reload(true);
				
			}else{
				
				
				$(".otpresult2").show();
				
			}
					
        }, 
   
		});
});

$('.verifyUserid').on("click",function(){	


var userid =$("#userid").val();




		$.ajax({
			
			url: '<?php echo site_url("Login/verifyUserid")?>',
			type: "POST",
			data: {userid: '' + userid  + '' },
			
			success: function(data) {
				
			//alert(data);
			if(data == 2){
				
				
				 $("#forget_pwd_otp").modal("show");
				
			}else{
				
				
				$(".useridResult").show();
				
				$("#forget_pwd_otp").modal("hide");
				
			}
					
        }, 
   
		});
});
</script> 

<script type="text/javascript">
$(document).ready(function () {
	
$('.buyerBS').click(function() {
      /*checked = $("input[type=checkbox]:checked").length;

      if(!checked) {
        jQuery('.chk_err').html('Kindly select at least one option');
        return false;
      }else{
		 jQuery('.chk_err').html(''); 
	  }*/
	  
	  var resp = 1;
	  if ($('.cus-t:checked').length == 0) {
		  //alert('checkbox cust-t');
		jQuery('.chk_err').html('Kindly select at least one option');
		resp = 2;
       //return false;
	  }else{
		  jQuery('.chk_err').html(''); 
	  }
	  
	   
	  if(resp==2){
		  //alert('resp is 2');
		 return false;
	  }	
	  
    });	
	
$('.buyerBP').click(function() {
     //alert('abc');
	  var resp = 1;
	  if ($('.cus-t:checked').length == 0) {
		  //alert('buyer cus-t');
		jQuery('.chk_err').html('Kindly select at least one option');
		resp = 2;
       //return false;
	  }else{
		  jQuery('.chk_err').html(''); 
	  }
	  
	  if ($('.cus-bi:checked').length == 0) {
		  //alert('cust-bi');
		jQuery('.chk_err_bi').html('Kindly select at least one option');
		resp = 2;
        //return false;
	  }else{
		  jQuery('.chk_err_bi').html(''); 
	  }
	  
	  var max = $('#investment_max').val();
		  //alert(max);
		  if(max==''){
		  jQuery('.chk_err_max').html('Investment max value is required');
		  resp = 2;
	  }else{
		  jQuery('.chk_err_max').html('');
	  }

	  var min = $('#investment_min').val();
	  
	  if(min==''){
		  //alert('in min blank');
		  jQuery('.chk_err_min').html('Investment min value is required');
		  resp = 2;
	  }else{
		  jQuery('.chk_err_min').html('');
	  }	
	  
	  if(resp==2){
		  //alert('in resp');
		  return false;
	  }	  
	  

    });	
	
	
	

$('.buyerPP').click(function() {
     //alert('abc');
	  var resp = 1;
	  	  
	  var max = $('#req_investment_max').val();
		  //alert(max);
		  if(max==''){
		  jQuery('.chk_err_max_req').html('Investment max value is required');
		  resp = 2;
	  }else{
		  jQuery('.chk_err_max_req').html('');
	  }

	  var min = $('#req_investment_min').val();
	  
	  if(min==''){
		  //alert('in min blank');
		  jQuery('.chk_err_min_req').html('Investment min value is required');
		  resp = 2;
	  }else{
		  jQuery('.chk_err_min_req').html('');
	  }	
	  
	  if(resp==2){
		  //alert('in resp');
		  return false;
	  }	  
	  

    });	

	
	$('.saleBD').click(function() {
     //alert('abc');
	  var resp = 1;
	  	  
	  var max = $('#ask_price').val();
		  //alert(max);
		  if(max==''){
		  jQuery('.chk_err_min').html('Asking Price is required');
		  resp = 2;
	  }else{
		  jQuery('.chk_err_min').html('');
	  }

	  var min = $('#latest_revenu').val();
	  
	  if(min==''){
		  //alert('in min blank');
		  jQuery('.chk_err_max').html('Turnover/Revenue is required');
		  resp = 2;
	  }else{
		  jQuery('.chk_err_max').html('');
	  }	
	  
	  if(resp==2){
		  //alert('in resp');
		  return false;
	  }	  
	  

    });	
	
	
	
//alert("no");
	$("input[name='advice']:radio").change(function () {
		var flag_value=$(this).val();
		
		if(flag_value==1){
			$('#make-appointment').show();
		}else{
			$('#make-appointment').hide();
		}
	});	
	
	$("#vrfy_btm").click(function() {
			jQuery.ajax({
					type: "GET",
					dataType: 'json',
					cache: false,
					url: "<?php echo base_url(); ?>verify-captcha",
					success: function(data) {
						jQuery('#captcha2').val(data);
						userQuery('<?php echo base_url();?>', event);

					}
				});
	});	
	
	$("#reload").click(function() {

		$("img#img").remove();
		var id = Math.random();
		$('<img id="img" src="<?php echo base_url(); ?>call-captcha?id='+id+'"/>').appendTo("#imgdiv");
		id ='';
	});

	//validation function
	$('#button').click(function() {
	var name = $("#username1").val();
	var email = $("#email1").val();
	var captcha = $("#captcha1").val();


	if (name == '' || email == '' || captcha == '')
	{
		alert("Fill All Fields");
	}
	

	});

});	


$("input.par_numbers").keypress(function(event) {
  return /\d/.test(String.fromCharCode(event.keyCode));
});

$("input.con_numbers").keypress(function(event) {
  return /\d/.test(String.fromCharCode(event.keyCode));
});

function resetPriceRange(target_price_range,price_unit_value ){
	//alert(price_unit_value);
	var currency = $("#ask_price_currency").val();
	var numeric_val = $("#ask_price").val();
	var unit     = $("#ask_price_unit").val();
	var compare  = '';
	var final_val = '';
	
	//alert(unit);
	
	if(unit=='THOUSANDS' || unit=='Thousand')
		final_val='000';
	if(unit=='LACS'  || unit=='Lacs')
		final_val='00000';
	if(unit=='CRORES'  || unit=='Crores')
		final_val='0000000';
	if(unit=='MILLIONS'  || unit=='Millions')
		final_val='000000';
	if(unit=='BILLIONS'  || unit=='Billions')
		final_val='000000000';
	
	input_value = numeric_val+final_val;
		//alert(input_value);
	
	if(currency=='INR'){
		compare = 'PRICES_COMPARE_INR';
	}else{
		compare = 'PRICES_COMPARE_USD';
	}
	//alert(compare);
	input_value = Number(input_value);
	 var compare_saved='';
	 var split_id = 0;	
	 if(currency=='INR'){
	<?php 
		
	foreach( unserialize(PRICES_COMPARE_INR) as $priceUnitValue=>$priceUnitName ){ 
	?>
		compare_saved = '<?php echo $priceUnitValue ?>';
		compare_name  = '<?php echo $priceUnitName ?>';
		//alert(compare_saved);
		
		var split_id = compare_saved.split(',');
	
		var small = Number(split_id[0]);
		var large = Number(split_id[1]);
		if((input_value>=small && input_value<=large)){
			//alert(small+'  '+large+' '+compare_name);
			$("#price_range_type").val(compare_name);
		}		
		
	<?php } ?>	
	 }else{
		 
		 <?php 
		
	foreach( unserialize(PRICES_COMPARE_USD) as $priceUnitValue=>$priceUnitName ){ ?>
		compare_saved = '<?php echo $priceUnitValue ?>';
		compare_name  = '<?php echo $priceUnitName ?>';
		//alert(compare_saved);
		
		var split_id = compare_saved.split(',');
	
		var small = Number(split_id[0]);
		var large = Number(split_id[1]);
		if((input_value>=small && input_value<=large)){
			//alert(small+'  '+large+' '+compare_name);
			$("#price_range_type").val(compare_name);
		}	
	<?php } ?>
		 
	 }	 
		
}


function resetPriceUnit(target_price_range,price_unit_value ){
	
	//alert("hello");
	var currency = $("#price_currency").val();
	var numeric_val = $("#price_value").val();
	var unit     = $("#price_unit").val();
	var compare  = '';
	var final_val = '';
	
	//alert(unit);
	
	if(unit=='THOUSANDS' || unit=='Thousand')
		final_val='000';
	if(unit=='LACS'  || unit=='Lacs')
		final_val='00000';
	if(unit=='CRORES'  || unit=='Crores')
		final_val='0000000';
	if(unit=='MILLIONS'  || unit=='Millions')
		final_val='000000';
	if(unit=='BILLIONS'  || unit=='Billions')
		final_val='000000000';
	
	input_value = numeric_val+final_val;
		//alert(input_value);
	
	if(currency=='INR'){
		compare = 'PRICES_COMPARE_INR';
	}else{
		compare = 'PRICES_COMPARE_USD';
	}
	//alert(compare);
	input_value = Number(input_value);
	 var compare_saved='';
	 var split_id = 0;	
	 if(currency=='INR'){
	<?php 
		
	foreach( unserialize(PRICES_COMPARE_INR) as $priceUnitValue=>$priceUnitName ){ 
	?>
		compare_saved = '<?php echo $priceUnitValue ?>';
		compare_name  = '<?php echo $priceUnitName ?>';
		//alert(compare_saved);
		
		var split_id = compare_saved.split(',');
	
		var small = Number(split_id[0]);
		var large = Number(split_id[1]);
		if((input_value>=small && input_value<=large)){
			//alert(small+'  '+large+' '+compare_name);
			$("#price_range_type").val(compare_name);
		}		
		
	<?php } ?>	
	 }else{
		 
		 <?php 
		
	foreach( unserialize(PRICES_COMPARE_USD) as $priceUnitValue=>$priceUnitName ){ ?>
		compare_saved = '<?php echo $priceUnitValue ?>';
		compare_name  = '<?php echo $priceUnitName ?>';
		//alert(compare_saved);
		
		var split_id = compare_saved.split(',');
	
		var small = Number(split_id[0]);
		var large = Number(split_id[1]);
		if((input_value>=small && input_value<=large)){
			//alert(small+'  '+large+' '+compare_name);
			$("#price_range_type").val(compare_name);
		}	
	<?php } ?>
		 
	 }	 
		
}
$(document).ready(function() {
    $(".word_count").on('keyup', function() {
        var words = this.value.match(/\S+/g).length;
        if (words > 200) {
            // Split the string on first 200 words and rejoin on spaces
            var trimmed = $(this).val().split(/\s+/, 200).join(" ");
            // Add a space at the end to keep new typing making new words
            $(this).val(trimmed + " ");
        }
        else {
            $('#display_count').text(words);
            $('#word_left').text(200-words);
        }
    });
 }); 
</script>

<script src="<?php echo asset_url();?>js/multiple-select.js"></script>
<script>
 function Favourite(addtofavourite,action) {
	 
	//alert(action);
	//alert(addtofavourite);
	 
	$('.demo-table #favourite-'+addtofavourite+' li').each(function(index) {
		$(this).addClass('selected');
		$('#favourite-'+addtofavourite+' #rating').val((index+1));
		if(index == $('.demo-table #favourite-'+addtofavourite+' li').index(obj)) {
			return false;	
		}
	});
	$.ajax({
	url: "<?php echo base_url(); ?>Listingdetails/addtofavourite",
	data:'addtofavourite='+addtofavourite+'&action='+action,
	type: "POST",
	beforeSend: function(){
		$('#favourite-'+addtofavourite+' .btn-likes').html("<img src='<?php echo asset_url(); ?>images/LoaderIcon.gif' />");
	},
	success: function(data){
	var likes = parseInt($('#likes-'+addtofavourite).val());
	switch(action) {
		case "like":
		$('#favourite-'+addtofavourite+' .btn-likes').html('<input type="button" title="Remove from favourite" class="unlike" onClick="Favourite('+addtofavourite+',\'unlike\')" />');
		likes = likes+1;
		break;
		case "unlike":
		$('#favourite-'+addtofavourite+' .btn-likes').html('<input type="button" title="Add to favourite" class="like"  onClick="Favourite('+addtofavourite+',\'like\')" />')
		likes = likes-1;
		break;
	}
	$('#likes-'+addtofavourite).val(likes);
	if(likes>0) {
		$('#favourite-'+addtofavourite+' .label-likes').html(likes+" Like(s)");
	} else {
		$('#favourite-'+addtofavourite+' .label-likes').html('');
	}
	}
	});
}
</script>  

<script>
$(document).ready(function(event){
        $('#ask_price_currency').change(function() {
			
			//alert("hello");
          
		  $('#ask_price').val('');
    });
	
	$('#price_currency').change(function() {
			
			//alert("hello");
          
		  $('#price_value').val('');
    });
  });
  
    $(function() {
        $('#listing_category').change(function() {
            console.log($(this).val());
        }).multipleSelect({
            width: '100%'
        });
    });
</script>

<script>

  


    $(function() {
        $('#industry_preference').change(function() {
         
		 
			
        }).multipleSelect({
            width: '100%'
        });
    });

</script>
<script>
	$(".bviewed").click(function(){
		
	$(".mylistdata").hide();
	$(".savelistdata").hide();
	$(".contactselldata").hide();
	$(".recbusiness").hide();
	
	$(".bviewedlist").show();
});

$(".savelist").click(function(){
		
	$(".bviewedlist").hide();
	$(".contactselldata").hide();
	$(".mylistdata").hide();
	$(".savelistdata").show();
	$(".recbusiness").hide();
});
$(".contactsell").click(function(){
		
	$(".bviewedlist").hide();
	$(".savelistdata").hide();
	$(".mylistdata").hide();
	$(".contactselldata").show();
	$(".recbusiness").hide();
});
$(".rbusiness").click(function(){
		
	$(".bviewedlist").hide();
	$(".savelistdata").hide();
	$(".contactselldata").hide();
	$(".recbusiness").show();
	$(".mylistdata").hide();
	
});
<?php if( $this->session->userdata('is_logged_in')== ''){ ?>
$(".liketbl").click(function(){
	
	$('#myModal').modal('show');
	
});

$(".demo-table").click(function(){
	
	$('#myModal').modal('show');
	
});
<?php }?>
    $(function() {
        $('#state1').change(function() {
            console.log($(this).val());
        }).multipleSelect({
            width: '100%'
        });
    });
	
	$(function() {
        $('#state2').change(function() {
            console.log($(this).val());
        }).multipleSelect({
            width: '100%'
        });
    });
	
	$(function() {
        $('#state11').change(function() {
            console.log($(this).val());
        }).multipleSelect({
            width: '100%'
        });
    });
	
	$(function() {
        $('#industry_preference2').change(function() {
            console.log($(this).val());
        }).multipleSelect({
            width: '100%'
        });
    });
	
 $(document).ready(function(){

$('.changepassword').on("click",function(){
	

var pwd1 =$("#pwd1").val();
var pwd2 =$("#pwd2").val();

//alert(pwd1);

if(pwd1=='' || pwd1==null){	
	
	var password = document.getElementById("pwd1")
  , confirm_password = document.getElementById("pwd2");

function validatePassword(){
  if(password.value != confirm_password.value) {
    //confirm_password.setCustomValidity("Passwords Don't Match");
	document.getElementById("pwd2-val").innerHTML="Passwords Don't Match";
	 document.getElementById("pwd2").style.border='1px #FF8080 solid';
			 document.getElementById("pwd2-val").style.color='#FF8080';	
document.getElementById("pwd2").focus();			 
  } else {
    document.getElementById("pwd2-val").innerHTML='';		
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
}
	  else{
			 
			
			  
			  

		$.ajax({
			
			url: '<?php echo site_url("User/ChangeUserPassword")?>',
			type: "POST",
			data: {pwd1: '' + pwd1 + '',pwd2: '' + pwd2 + ''},
			
			success: function(data) {
				
			//alert(data);
			if(data == 2){
				
			
			swal("Success","Your password has been updated.", "success");	
			window.location.href = "change-password";
				
			}else{
				
			//swal("Action failed","There was a problem updating your password.", "error");	
				
			}
					
        }, 
   
		});
}	
});

$('.Forgetpassword').on("click",function(){
	

var pwd1 =$("#pwd1").val();
var pwd2 =$("#pwd2").val();
var Forgotpnumber =$("#Forgotpnumber").val();

//alert(pwd1);

if(pwd1=='' || pwd1==null){	
	
	var password = document.getElementById("pwd1")
  , confirm_password = document.getElementById("pwd2");

function validatePassword(){
  if(password.value != confirm_password.value) {
    //confirm_password.setCustomValidity("Passwords Don't Match");
	document.getElementById("pwd2-val").innerHTML="Passwords Don't Match";
	 document.getElementById("pwd2").style.border='1px #FF8080 solid';
			 document.getElementById("pwd2-val").style.color='#FF8080';	
document.getElementById("pwd2").focus();			 
  } else {
    document.getElementById("pwd2-val").innerHTML='';		
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
}
	  else{
			 
			
			  
			  

		$.ajax({
			
			url: '<?php echo site_url("User/ChangeUserForPassword")?>',
			type: "POST",
			data: {pwd1: '' + pwd1 + '',pwd2: '' + pwd2 + '',Forgotpnumber: '' + Forgotpnumber + ''},
			
			success: function(data) {
				
			//alert(data);
			if(data == 2){
				
			//alert('ok');
			swal("Success","Your password has been updated.", "success");

			$url='<?php echo base_url(); ?>';			
			
			window.location.href = $url;
				
			}if(data == 1){
				
			$(".otpresult2").show();	
				
			}
					
        }, 
   
		});
}	
});
	
 //$("form#myform").submit(function(event) {

		$('#loginsubmit').on("click",function(){	
	
	
		
		var userid = $(".userid33").val();
		var password = $("#password").val();
		
		//alert(userid33);
		
		
		$.ajax({
			
			url: '<?php echo site_url("login/index");?>',
			type: "POST",
			data: {userid: '' + userid + '',password: '' + password + ''},
			
			success: function(data) {
        //console.log(data); 
        if (data == 'true') {
          
			//swal("Success","user logged in successfully", "success");	
			$url="user_business_profile";
			
			window.location.href = $url;
        }
		else{
           
			swal("Action failed","Incorrect Userid Or Password", "error");
        }
    },
    error: function(){
        alert("failure");
    }
		});
		
	});	
	//});
	});
	
  $('#bstatus').on("change",function(){
	 
	 var bstatus=$("#bstatus").val();
	 
	
	 if(bstatus=="Other"){
		
		 
		 $('#bstatus_other').show();
		
	 }
	 
	 else{
		 
		 $('#bstatus_other').hide();
		 $('.bstatusmsg').hide();
		 
	 }
	 
  }); 
    $(window).load(function(){
	 
	 <?php if($sellBusinessBasicInformation[0]['current_status_of_business']!=''){?>
	 
	var bstatus='<?php echo $sellBusinessBasicInformation[0]['current_status_of_business'];?>';
	
	 <?php }else{?>
	var bstatus='<?php echo $businessDetails[0]['current_status_of_business'];?>';
	
	
	 <?php }?>
	
	//alert(bstatus);
	 
	 if(bstatus=='Other'){
		 
		 $('#bstatus_other').show(); 
	 }
	 else{
		 
		 $('#bstatus_other').hide();
		 $('.bstatusmsg').hide();
		 
	 }
	 
  });	

  $('#invester_role').on("change",function(){
	 
	 var invester_role=$("#invester_role").val();
	 
	
	 if(invester_role=="Others"){
		
		 
		 $('#invester_role_other').show();
		
	 }
	 
	 else{
		 
		 $('#invester_role_other').hide();
		  $('#invester_role_other').val("");
		 
	 }
	 
  }); 
    $(window).load(function(){
	 
	var invester_role='<?php echo $sellBusinessBasicInformation[0]['invester_role'];?>';
	var invester_role='<?php echo $businessDetails[0]['invester_role'];?>';
	var invester_role='<?php echo $sellJvDetails[0]['role_new_investo'];?>';
	var invester_role='<?php echo $businessDetails[0]['role_new_investo'];?>';
	
	//alert(invester_role);
	 
	 if(invester_role=='Others'){
		 
		 $('#invester_role_other').show(); 
	 }
	 else{
		 
		 $('#invester_role_other').hide();
		// $('#invester_role_other').val("");
		 
	 }
	 
  });
  
<?php if($sellBusinessBasicInformation[0]['location_country']==''){?>
jQuery(document).ready(function($){
  $('#country').find('option[value=71]').attr('selected','selected');
});	
<?php }?>


</script>
<?php
    }
   endforeach;
  endif;
?>
</script>
<script>
$(document).ready(function(event){
/*
$("#error_mob").hide();
var ccode = $('#country_code').val();	
var mobile = $("#uq_contact").val();
//alert(ccode);

if(ccode=='+91'){
	
var reg_mobile = /^[\s()+-]*([0-9][\s()+-]*){10}$/;
	
if (reg_mobile.test(mobile) == false){
//$("#error_mob").html('Please enter Valid Mobile No');
$("#error_mob").show('slow');
return false;
}else{
	$("#error_mob").hide();
}
}*/

	
$('#country_code').on("change",function(){
	
var ccode = $('#country_code').val();	
var mobile = $("#uq_contact").val();
//alert(ccode);
$("#error_mob").hide();
if(ccode=='+91'){
	
var reg_mobile = /^[\s()+-]*([0-9][\s()+-]*){10}$/;
	
if (reg_mobile.test(mobile) == false){

$("#error_mob").show('slow');
return false;
}else{
	$("#error_mob").hide();
}
}
/*if(ccode =='+61'){
	
	alert('hello122222222222222222');
	
$('.ajxuiq').validate({
		rules: {
            contact: {
                required: true,
				maxlength:20
            }
        },
        submitHandler: function(form) { // for demo
            alert('valid form');
            return false;
        }
    });
}if(ccode =='-'){
	
	
	alert('888888888888');
	
$('.ajxuiq').validate({
		rules: {
            contact: {
                required: true,
				maxlength:20
            }
        },
        submitHandler: function(form) { // for demo
            alert('valid form');
            return false;
        }
    });
}*/	
});	

/*	
var ccode = $('#country_code').val();	

//alert(ccode);

if(ccode=='+91'){
	
	//alert('hello1');
	
$('#ajxuiq').validate({
		rules: {
            contact: {
                number: true,
                required: true,
				maxlength:10
            }
        },
        submitHandler: function(form) { // for demo
            alert('valid form');
            return false;
        }
    });
}
else if(ccode !='+91'){
	
	//alert('hello1');
	
$('#ajxuiq').validate({
		rules: {
            contact: {
                required: true,
				maxlength:20
            }
        },
        submitHandler: function(form) { // for demo
            alert('valid form');
            return false;
        }
    });
}*/	
});		

			
</script>

</body>


<!-- Modal -->
<div class="modal fade login_modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
 <div class="modal-dialog mt160" role="document">
  <div class="modal-content">
   <div class="modal-header "> 	  
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h5 class="modal-title" id="myModalLabel">Login <a style="" href="<?php echo base_url();?>register">Sign Up</a></h5>
   </div>
   <div class="modal-body popup-1">
    <div class="row">
     <div class="col-md-12 login-sf">
   <form id="myform"  method="POST"  class="">
       <div class="col-sm-12 ">
        <div class="form-group">
         <label for="">User ID </label>
         <input type="email" class="form-control userid33" placeholder="User id" id="userid" name="userid" required>
        </div>
       </div>
       <div class="col-sm-12 ">
        <div class="form-group">
         <label for="">Password </label>
         <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
        </div>
       </div>
       <div class="col-sm-5 mt5">
       
        <input type="submit" id="loginsubmit" class="btn-ser" value="Login">
       </div>
	   </form>
       <div class="col-sm-7 mt5">
        <a class="mt5 forget_text" href="JavaScript:void(0);" data-toggle="modal" data-target="#forget_pwd">Forgot your password ?</a>
       </div>
       <div class="clearfix"></div>
        <div class="social_lbox">
          <h5>Login With Your Social Media Account</h5>
          <ul>
            <li><a href="JavaScript:void(0);"><i class="fa fa-google-plus"></i>Google</a></li>
            <li><a href="JavaScript:void(0);"><i class="fa fa-linkedin"></i>Linkedin</a></li>
            <li><a href="JavaScript:void(0);"><i class="fa fa-facebook"></i>Facebook</a></li>
          </ul>
        </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>


<!--
<div id="feedback">
 <a data-toggle="modal" data-target="#myModalsearch" >Search</a>
</div>


<div class="modal fade bs-example-modal-lg  main_search " id="myModalsearch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog mt160  modal-lg modal-custom" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 style="text-align:center;" class="modal-title" id="myModalLabel">Search</h4>
      </div>
      <div class="modal-body popup-1">

    <div class="row">
      <div class="col-md-12 back-sf padd0 right_fsearch_bg ">
        <ul class="tabs1 popup-tabs">

          <li class="active"><a href="#Search-tab-1" target="_self">Advance Search </a></li>
		      <li class=""><a href="#Search-tab-2" target="_self">Normal Search</a></li>
        </ul>
        <div class="tabs-content1 right_fsearch">
          <div id="Search-tab-1" class="tabs-panel1" style="display: block;">
             <div class="col-md-12 padd0">
              <div class="col-sm-12 padd0">
               <label for="Advanced">Advanced Search for Business</label>
              </div>
              <div class="adv-s" style="display:block;">
	      
		<form id="adv_search" name="adv_search" method="POST" action="<?php echo base_url();?>advance-search">
		<div class="col-md-3 popup-select">
		<select class="popselect custom-s" id="type" name="type">
                  <option value="">Business Type</option>
                  <option value="sell_a_business">Sell a Business</option>
                  <option value="buy_a_business">Buy a Business</option>
				  <option value="jv_business">Joint Venture</option>
				  <option value="startup_business">Start-Up</option>
				  <option value="re_business">Real Estate</option>

                </select>
				</div>
				<div class="col-md-3 popup-select">
		 <select id="country_" name="country" onChange="getChangeStates('<?php echo base_url();?>', this.value)" class="custom-s"  data-error="Country" >
                          <option value="">Country</option>
<?php
                          foreach( $this->cachemethods->getCountryDetails() as $country ){
?>
                          <option value="<?php echo $country->id;?>" <?php if($country->id == $this->input->post('country')){echo 'selected=selected';}?>><?php echo $country->country_name; ?></option>
<?php
                          }
?>
                         </select>
						 </div>
						 
					<div class="col-md-3">	 
		<select class="custom-s" id="state" name="state" onChange="getChangeCities('<?php echo base_url();?>', this.value)"  data-error="State required">
                         <option value="">State</option>
<?php

                          foreach( $this->cachemethods->getStateByCountry($businessDetails[0]['location_country']) as $statedet ){
?>
          <option value="<?php echo $statedet->id;?>" <?php if($statedet->id == $this->input->post('state')){
							  
							  echo 'selected=selected';} ?>><?php echo $statedet->state_name; ?></option>
<?php
                         }

?>							
			</select>
			</div>
			<div class="col-md-3">
                 <select class="custom-s" id="city" name="city"  data-error="City required">
                         <option value="">City</option>
						
<?php
                         foreach( $this->cachemethods->getCityByStateId($businessDetails[0]['location_state']) as $citydet ){
							 ?>
                         <option value="<?php echo $citydet->id;?>" <?php if($citydet->id == $this->input->post('city')){echo 'selected=selected';}?>><?php echo $citydet->city_name; ?></option>
					
				<?php		 }
?>						
                        </select>
						</div>
						<div class="clearfix"></div>
						<div class="col-md-3 popup-select">
               <Select class="custom-s popselect" id="category"  name="sector"  data-error="Listing Type required">
                          <option value="">Category</option>
<?php
                          foreach( $this->cachemethods->getSectorDetails() as $Sector ){
?>
                          <option value="<?php echo $Sector->id;?>" <?php if($Sector->id == $this->input->post('sector')){echo 'selected=selected';}?>><?php echo $Sector->sector_name; ?></option>
<?php
                          }
?>						
                        </select>
						</div>
						<div class="col-md-3 popup-select">
                 <select class="custom-s popselect" id="price_range_type" name="price" data-error="Price Range required" >
				 <option value="">Price Range</option>    
<?php
                            foreach( unserialize(PRICES) as $priceUnitValue=>$priceUnitName ){
?>
                            <option value="<?php echo $priceUnitValue;?>" <?php if($priceUnitValue == $this->input->post('price')){echo 'selected=selected';}?>><?php echo $priceUnitName;?></option>
<?php
                            }
?>
                          </select>
						  </div>
						  <div class="col-md-3 popup-select">
		<button class="btn-ser" > Search </button>
		</div>
               </form>
              </div>
            </div>



          </div>
         

          <div id="Search-tab-2" class="tabs-panel1" style="display: none;">
           <div class="col-md-12 padd0">
	   <form id="nrm_search" name="nrm_search" method="POST" action="<?php echo base_url();?>normal-search">
	   
             <div class="col-sm-12 padd0">
              <label for="Advanced">Normal Search</label>
             </div>
             <div class="form-group col-md-7 padd0">
              <div class="col-sm-12 padd0">
               <input style=" height: 38px;" type="text" class="form-control" id="search_key" name="search_key" placeholder="Normal Search">
              </div>
             </div>
             <div class="form-group col-md-5 ">
              <button class="btn-ser" type="submit"> Search </button>
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
</div>-->

<!-- marquee jquery -->
<script type="text/javascript">
  (function(){

function scroller() {

  var scroll =$('.marquee_box .marquee_scroll');
  
  var height = scroll.height();
  
  var topAdj = -height-30; 
  scroll.animate({
    'top' : [topAdj, 'linear'] 
  }, 13000, function(){
    scroll.css('top', 80); 
    scroller(); 
  });}
  
scroller();

})();

</script>
<script type="text/javascript">
  $(document).ready(function(){
    $(".post_link").click(function(){
      $(".post_dropbox").toggle();
    });
    // share icon js
    $(".share_box .share_icon .fa_share").click(function(){
      $(".share_info").toggle(200);
    });

  });
</script>
</html>
