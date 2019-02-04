<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="keywords" content="">
<title>Business deal | Dashboard</title>
<!-- Site favicon -->
<link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
<!-- /site favicon -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/sweetalert2.min.js"></script>
<!-- Stylesheets -->
<link href="<?php echo base_url();?>assets/css/sweetalert2.css" rel="stylesheet" type="text/css"/>
<!-- Stylesheets -->
<?php
//print_r($_SESSION);

  if( isset( $css_name) && !is_null( $css_name ) ):
   foreach( $css_name as $css ):
    echo link_tag( asset_url().$css.'.css' );
   endforeach;
  endif;

  //get user type from session value
  
 $GetUserType=$this->session->userdata('admin_type');
 $GetUserid=$this->session->userdata('admin_id');
 
 
?>

</head>
<body>

<!-- Page container -->
<div class="page-container">

	<!-- Page Sidebar -->
	<div class="page-sidebar">
	
		<!-- Site header  -->
		<header class="site-header">
		<div class="site-logo"><a href="<?php echo base_url();?>admin/index"><img src="<?php echo asset_url();?>admin/images/logo.png" alt="Mouldifi" title="Mouldifi"></a></div>
		  <div class="sidebar-collapse hidden-xs"><a class="sidebar-collapse-icon" href="#"><i class="icon-menu"></i></a></div>
		  <div class="sidebar-mobile-menu visible-xs"><a data-target="#side-nav" data-toggle="collapse" class="mobile-menu-icon" href="#"><i class="icon-menu"></i></a></div>
		</header>
		<!-- /site header -->
		
		<!-- Main navigation -->
		<ul id="side-nav" class="main-menu navbar-collapse collapse">
		<?php if($GetUserType=='employee'  or $GetUserType=='admin'){?>
                 <li class="has-sub active" data-id="index"><a href="<?php echo base_url();?>admin/index"><i class="icon-gauge"></i><span class="title">Dashboard</span></a></li>
<li class="has-sub" data-id="newuser"> <a href="<?php echo base_url();?>admin/newuser"><i class="icon-user"></i><span class="title">User</span> <?php if($GetUserType=='admin'){?><span id="new_Cust" class="newUser"></span><?php }?></a> </li>
               <!--  <li class="has-sub" data-id="alluser"> <a href="<?php echo base_url();?>admin/alluser"><i class="icon-flow-tree"></i><span class="title">All User</span></a> </li>-->
				 <li class="has-sub" data-id="newquery"> <a href="<?php echo base_url();?>admin/newquery"><i class="icon-comment"></i><span class="title">Query </span> <?php if($GetUserType=='admin'){?><span id="new_query" class="newUser"></span><?php }?></a> </li>
				   <li class="has-sub"> <a href="<?php echo base_url();?>admin/contactquery"><i class="icon-phone"></i><span class="title"> Enquiry / Contact</span><?php if($GetUserType=='admin'){?><span id="Cnew_menu" class="newUser"></span><?php }?></a></li>  
<li class="has-sub" data-id="sell"><a href="<?php echo base_url();?>admin/seller"><i class="icon-list"></i><span class="title">Business for Sale</span></a></li>	
 <li class="has-sub" data-id="joint_venture"> <a href="<?php echo base_url();?>admin/jv"><i class="icon-doc-text"></i><span class="title"> Joint Ventures </span></a> </li>	
<li class="has-sub" data-id="start_up"> <a href="<?php echo base_url();?>admin/startup"><i class="icon-flow-tree"></i><span class="title">Start up</span></a> </li> 
 <li class="has-sub" data-id="realestate"> <a href="<?php echo base_url();?>admin/realestate"><i class="icon-home"></i><span class="title">Real Estate</span></a> </li>
                 <li class="has-sub" data-id="buyer"><a href="<?php echo base_url();?>admin/buy"><i class="icon-layout"></i><span class="title">Buyer</span></a> </li>
                 
				 
				
				 
				 
				 
				  <li class="has-sub" data-id="start_up"> <a href="<?php echo base_url();?>admin/propertytags"><i class="icon-tag"></i><span class="title">Business Tags</span></a> </li>
                 
				<!-- <li class="has-sub" data-id="allquery"> <a href="<?php echo base_url();?>admin/allquery"><i class="icon-flow-tree"></i><span class="title">All Query</span></a> </li>-->
		<?php } if($GetUserType=='admin'){?>
                 <li class="has-sub"> <a href="<?php echo base_url();?>admin/Payment.html"><i class="icon-ticket"></i><span class="title">Payment</span></a> </li>
                 <li class="has-sub" data-id="add_currency"> <a href="<?php echo base_url();?>admin/currency"><i class="icon-suitcase"></i><span class="title">Add Currency</span></a> </li>
                 <li class="has-sub"> <a href="<?php echo base_url();?>admin/Country"><i class="icon-globe"></i><span class="title">Add Country</span></a> </li>
                <li class="has-sub"> <a href="<?php echo base_url();?>admin/region"><i class="icon-globe"></i><span class="title">Add Region</span></a> </li>
                 <li class="has-sub"> <a href="<?php echo base_url();?>admin/State"><i class="icon-flag"></i><span class="title">Add State</span></a> </li>
                 <!--<li class="has-sub"> <a href="<?php echo base_url();?>admin/add_city.html"><i class="icon-map"></i><span class="title">Add City</span></a> </li>-->
                 <li class="has-sub" data-id="employee"> <a href="<?php echo base_url();?>admin/employee"><i class="icon-user-add"></i><span class="title">Add employee</span></a> </li>
              
                 <li class="has-sub"> <a href="<?php echo base_url();?>admin/Sector"><i class="icon-database"></i><span class="title">Manage sector</span></a> </li>
				  <li class="has-sub"> <a href="<?php echo base_url();?>admin/sub-sector"><i class="icon-database"></i><span class="title">Manage Sub sector</span></a> </li>
                 <li class="has-sub"> <a href="<?php echo base_url();?>admin/testimonials"><i class="icon-comment"></i><span class="title">Testimonials</span></a> </li>
                 <li class="has-sub"> <a href="<?php echo base_url();?>admin/advertisements"><i class="icon-newspaper"></i><span class="title">Advertisement</span></a> </li>
               
                
		<?php }?>
		</ul>
		<!-- /main navigation -->		
  </div>
  <!-- /page sidebar -->
  
  <!-- Main container -->
  <div class="main-container gray-bg">
  
		<!-- Main header -->
		<div class="main-header row">
		  <div class="col-sm-12 col-xs-12">
		  
			<!-- User info -->
			<ul class="user-info pull-right">          
			<li class="profile-info dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"> <img width="44" class="img-circle avatar" alt="" src="<?php echo asset_url();?>/images/blank-user.png"><?php echo ucwords(strtolower($_SESSION['admin_userid']));?><span class="caret"></span></a>
			  
				<!-- User action menu -->
				<ul class="dropdown-menu">
				  
				  <!--<li><a href="#/"><i class="icon-user"></i>My profile</a></li>
				  <li><a href="#/"><i class="icon-mail"></i>Messages</a></li>
				  <li><a href="#"><i class="icon-clipboard"></i>Tasks</a></li>
				  <li class="divider"></li>-->
				  <li><a href="#"><i class="icon-cog"></i>Account settings</a></li>
				  <li><a href="<?php echo base_url();?>admin/logout"><i class="icon-logout"></i>Logout</a></li>
				</ul>
				<!-- /user action menu -->
				
			  </li>
			</ul>
			<!-- /user info -->
			
		  </div>
		  
		 
		</div>
		<!-- /main header -->
