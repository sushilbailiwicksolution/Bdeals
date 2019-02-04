<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Login</title>
<!-- Site favicon -->
<link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
<!-- /site favicon -->

<!-- Entypo font stylesheet -->
<link href="<?php echo asset_url();?>admin/css/entypo.css" rel="stylesheet">
<!-- /entypo font stylesheet -->

<!-- Font awesome stylesheet -->
<link href="<?php echo asset_url();?>admincss/font-awesome.min.css" rel="stylesheet">
<!-- /font awesome stylesheet -->

<!-- Bootstrap stylesheet min version -->
<link href="<?php echo asset_url();?>admin/css/bootstrap.min.css" rel="stylesheet">
<!-- /bootstrap stylesheet min version -->

<!-- Mouldifi core stylesheet -->
<link href="<?php echo asset_url();?>admin/css/mouldifi-core.css" rel="stylesheet">
<!-- /mouldifi core stylesheet -->

<link href="<?php echo asset_url();?>admin/css/mouldifi-forms.css" rel="stylesheet">

</head>
<body class="login-page">
<div class="login-container">
	<div class="login-branding">
		<a href="index.html"><h1 style="color:#000;">Business deal</h1></a>
	</div>
	<div class="login-content">
		<h2><strong>Welcome</strong>, please login</h2>
		<form method="post" id="admin_login_frm" name="admin_login_frm" action="<?php echo base_url();?>admin/login">
			<div class="form-group">
				<input type="text" placeholder="Username" class="form-control" id="userid" name="userid">
			</div>                        
			<div class="form-group">
				<input type="password" placeholder="Password" class="form-control" id="password" name="password">
			</div>
			<div class="form-group">
				 <div class="checkbox checkbox-replace">
					<input type="checkbox" id="remeber">
					<label for="remeber">Remeber me</label>
				  </div>
			 </div>
			<div class="form-group">
				<button class="btn btn-primary btn-block">Login</button>
			</div>
			<p class="text-center"><a href="forgot-password.html">Forgot your password?</a></p>                        
		</form>
	</div>
</div>
<!--Load JQuery-->
<script src="<?php echo asset_url();?>admin/js/jquery.min.js"></script>
<script src="<?php echo asset_url();?>admin/js/bootstrap.min.js"></script>
</body>
</html>
