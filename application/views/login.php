<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'; ?>">
	<link href="<?php echo base_url().'assets/css/bootstrap.css'; ?>" rel="stylesheet">
</head>
<body>
	<div class="login-page">
		<div class="header-section">
			<a href="#"><img src="<?php echo base_url().'assets/images/loginlogo.png'; ?>" alt=""></a>
			<ul class="menu">
<!--
				<li><a href="index.html">Home</a></li>
				<li><a href="register.html">Sign up</a></li>
-->
			</ul>
		</div><!--end of header -section-->
		
	<?php echo validation_errors('<p style="color:#F00">'); ?>
    <?php echo form_open('Login/index'); ?>
		<div class="form-section">
			<div class="container">
				<div class="form-inputs">
					<h5><a href="<?php echo site_url('signup/index'); ?>" target="_blank">New to NITW DMS ?</a></h5>
					<div class="input-group">
						<input type="text" class="form-control" 
						placeholder="User name" name="uname">
					</div>
					<div class="input-group">
						<input type="password"  class="form-control" placeholder="Password" name="pwd">
					</div>
 
					<input class="polaris-input" type="checkbox" id="inlineCheckbox1" value="option1"> <span class="check-text">Remember me</span>
					<button type="submit" class="btn btn-info pull-right">Sign In</button>
					<h5><a href="forgot.html" target="_blank">Forgot Your Password ?</a></h5>
				</div>				
			</div>
		</div><!--emd of form-section-->
		</form>
	</div><!--cnd of login-page-->
	
</body>
<script src="js/jquery/jquery.js"></script>
<script src="js/icheck/icheck.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
  $('.polaris-input').iCheck({
         checkboxClass: 'icheckbox_polaris',
    radioClass: 'iradio_polaris',
        increaseArea: '20%' // optional
      });
});
</script>
</html>

<!-- Localized -->