<?php

$geturl=$this->uri->segment(1);
?>
<!doctype html>
<html lang="en">
<head>
<title>Business Deals</title>
<meta charset="utf-8">
<!-- Meta -->
<meta name="keywords" content="" />
<meta name="author" content="">
<meta name="robots" content="" />
<meta name="description" content="" />

<!-- this styles only adds some repairs on idevices  -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.php">

<!-- Google fonts - witch you want to use - (rest you can just remove) -->
<link href="https://fonts.googleapis.com/css?family=Archivo:400,500,600,700|Hind+Siliguri:300,400,500,600,700|Hind:300,400,500,600,700|Roboto+Slab:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Aleo:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Charm:400,700" rel="stylesheet">
<script type="text/javascript" src="assets/js/jsvalidation.js"></script>
<script type="text/javascript" src="assets/js/sweetalert2.min.js"></script>
<!-- Stylesheets -->
<link href="assets/css/sweetalert2.css" rel="stylesheet" type="text/css"/>
<?php
  if( isset( $css_name) && !is_null( $css_name ) ):
   foreach( $css_name as $css ):
    echo link_tag( asset_url().$css.'.css' );
   endforeach;
  endif;
?>
<script src="<?php echo base_url();?>assets/js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_options = {
              $AutoPlay: 1,
              $DragOrientation: 2,
              $PlayOrientation: 2,
              
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 300;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });
    </script>
</head>

<body>

<div class="site_wrapper">
  <div class="topbar topbar-padding back">
    <div class="container">
      <div class="topbar-right-items box100">
	<div class="col-md-6">
        <ul class="toplist pull-left mt8">
          <li ><span class="call-us-box">Call us : +91-9811568568<span></li>		 
          <li class="color-black">Email : enquiry@businessdeals.in</li>
         </ul>
        </div>
	<div class="col-md-6">
         <ul class="toplist toppadding">
			
<?php if( $this->session->userdata('is_logged_in') != null && $this->session->userdata('is_logged_in') === true ): ?>
<li><a href="<?php echo base_url();?>user_business_profile"> <span>Welcome, <?php echo $_SESSION['username'];?> </span></a></li>
<?php endif; ?>

<?php if( $this->session->userdata('is_logged_in') == null || $this->session->userdata('is_logged_in') === false ): ?>
          <li style="margin-top: -2px;"><a data-toggle="modal" data-target="#myModal" href="#">Login</a></li>
		  <!--<li><a  href="<?php echo base_url();?>register-facebook">FacebookLogin</a></li>-->
	  <li  style="margin-top: -2px;"><a href="<?php echo base_url();?>register">Register</a></li>
<?php endif; ?>

<?php if( $this->session->userdata('is_logged_in') != null && $this->session->userdata('is_logged_in') === true ): ?>
          <li class="last"  style="margin-top: -2px;"> <a href="<?php echo base_url();?>logout"><i style="font-size: 14px;color:#fff;" class="fa fa-sign-out fa-2x" aria-hidden="true"></i><span> Logout</span></a> </li>
<?php endif; ?>

	 </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
    <div id="header">
    <div class="container-fluid">
      <div class="navbar green navbar-default yamm">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle two three"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
	  <a href="<?php echo base_url();?>" class="navbar-brand"><img src="<?php echo asset_url();?>images/logo.png" alt=""/></a> </div>
        <div id="navbar-collapse-grid" class="navbar-collapse collapse pull-right">
          <ul class="nav green navbar-nav">
            <li class="dropdown"> <a href="#" class="dropdown-toggle <?php if($geturl=='buy-a-business-profile' || $geturl=='Browse-sector' || $geturl=='steps-buy-business' || $geturl=='industry-alerts'){ echo 'head-col';}?>" >Buy a Business </a>
              <ul class="dropdown-menu" role="menu">
			    <li> <a 
				<?php if( $this->session->userdata('is_logged_in') == null || $this->session->userdata('is_logged_in') === false ){ ?>
				data-toggle="modal" data-target="#myModal" href="#"
				<?php }else{ ?>
				href="<?php echo base_url();?>buy-a-business-new-form"
				<?php }?>
				>Register as a Buyer </a></li> 
                <li> <a href="<?php echo base_url();?>Browse-sector">Browse By Sector</a> </li>
<!--<?php if( $this->session->userdata('is_logged_in') == null && $this->session->userdata('is_logged_in') === false ): ?>-->
                
<!--<?php endif; ?>-->
                <li> <a href="<?php echo base_url();?>steps-buy-business">Steps to Buy a Business </a> </li>
                <li> <a href="<?php echo base_url();?>industry-alerts">Industry Alerts</a> </li>
              </ul>
            </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle <?php if($geturl=='list-your-business-basic-information' || $geturl=='steps-sell-business' || $geturl=='business-services'){ echo 'head-col';}?>">Sell a Business </a>
              <ul class="dropdown-menu" role="menu">
                <li> <a 
				<?php if( $this->session->userdata('is_logged_in') == null || $this->session->userdata('is_logged_in') === false ){ ?>
				data-toggle="modal" data-target="#myModal" href="#"
				<?php }else{ ?>
				href="<?php echo base_url();?>list-your-business-new-form"
				<?php }?>
				>List your Business for Sale </a> </li>
                <li> <a href="<?php echo base_url();?>steps-sell-business">Steps to Sell a Business</a> </li>
                <li> <a href="<?php echo base_url();?>business-services">Business Services </a> </li>
              </ul>
            </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle <?php if($geturl=='list-your-business-basic-information-jv' || $geturl=='steps-jv' || $geturl=='benefits-jv'){ echo 'head-col';}?>">Joint Ventures </a>
              <ul class="dropdown-menu" role="menu">
                <li> <a 
				<?php if( $this->session->userdata('is_logged_in') == null || $this->session->userdata('is_logged_in') === false ){ ?>
				data-toggle="modal" data-target="#myModal" href="#"
				<?php }else{ ?>
				href="<?php echo base_url();?>list-your-business-new-form-jv"
				<?php }?>
				>List your Business as JV </a> </li>
                <li> <a href="<?php echo base_url();?>steps-jv">Steps for JV</a> </li>
                <li> <a href="<?php echo base_url();?>benefits-jv">Benefits of JV </a> </li>
              </ul>
            </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle <?php if($geturl=='start-up-basic-information' || $geturl=='steps-start-up' || $geturl=='business-idea'){ echo 'head-col';}?>"> Start-ups</a>
              <ul class="dropdown-menu" role="menu">
                <li> <a  
				<?php if( $this->session->userdata('is_logged_in') == null || $this->session->userdata('is_logged_in') === false ){ ?>
				data-toggle="modal" data-target="#myModal" href="#"
				<?php }else{ ?>
				href="<?php echo base_url();?>start-up-user-profile-new"
				<?php }?>
				>Register as a Start-Up </a> </li>
                <li> <a href="<?php echo base_url();?>steps-start-up">Steps for Start-up</a> </li>
                <li> <a href="<?php echo base_url();?>business-idea">Business Idea </a> </li>
              </ul>
            </li>
             <li class="dropdown"><a href="#" class="dropdown-toggle <?php if($geturl=='real-estate-basic-information'){ echo 'head-col';}?>">Real Estate </a>  
				<ul class="dropdown-menu" role="menu">
                <li> <a   
				<?php if( $this->session->userdata('is_logged_in') == null || $this->session->userdata('is_logged_in') === false ){ ?>
				data-toggle="modal" data-target="#myModal" href="#"
				<?php }else{ ?>
				href="<?php echo base_url();?>real-estate-user-profile-new"
				<?php }?>>Sell your preleased property </a> </li>
                <!--<li> <a href="<?php echo base_url();?>steps-start-up">Steps for Start-up</a> </li>
                <li> <a href="<?php echo base_url();?>business-idea">Business Idea </a> </li>-->
              </ul>
			 </li>		
            <li><a href="<?php echo base_url();?>services" class="dropdown-toggle <?php if($geturl=='services'){ echo 'head-col';}?>">Services</a></li>
            <li class="post_link"><a href="javascript:void(0);" class="dropdown-toggle postbusiness <?php if($geturl=='services'){ echo 'head-col';}?>" style="">Post A Business +</a>
              <div class="post_dropbox">
                <span></span>
                <ul>
                  <li><a 
				<?php if( $this->session->userdata('is_logged_in') == null || $this->session->userdata('is_logged_in') === false ){ ?>
				data-toggle="modal" data-target="#myModal" href="#"
				<?php }else{ ?>
				href="<?php echo base_url();?>list-your-business-new-form"
				<?php }?>
				>Sell a Business </a></li>
                  <li><a 
				<?php if( $this->session->userdata('is_logged_in') == null || $this->session->userdata('is_logged_in') === false ){ ?>
				data-toggle="modal" data-target="#myModal" href="#"
				<?php }else{ ?>
				href="<?php echo base_url();?>list-your-business-new-form-jv"
				<?php }?>
				>Joint Ventures</a></li>
                  <li> <a  
				<?php if( $this->session->userdata('is_logged_in') == null || $this->session->userdata('is_logged_in') === false ){ ?>
				data-toggle="modal" data-target="#myModal" href="#"
				<?php }else{ ?>
				href="<?php echo base_url();?>start-up-user-profile-new"
				<?php }?>
				>Startups</a></li>
                  <li><a   
				<?php if( $this->session->userdata('is_logged_in') == null || $this->session->userdata('is_logged_in') === false ){ ?>
				data-toggle="modal" data-target="#myModal" href="#"
				<?php }else{ ?>
				href="<?php echo base_url();?>real-estate-user-profile-new"
				<?php }?>>Real Estate</a></li>

                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!--end menu-->
  <div class="clearfix"></div>
