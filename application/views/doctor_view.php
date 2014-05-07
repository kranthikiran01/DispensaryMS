<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$title?></title>
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'; ?>">
	<link href="<?php echo base_url().'assets/css/bootstrap.css'; ?>" rel="stylesheet">
</head>
<body>
	<div class="welcome-page">
		<div class="header-section">
			<a href="#"><img src="<?php echo base_url().'assets/images/logo_nitw.png'; ?> " alt="NITWarangal">
				<img src="<?php echo base_url().'assets/images/loginlogo.png'; ?>" alt=""></a>

			<ul class="menu">
				<li><?=$this->session->userdata('user_name')?></li>
				<li><a href="index.html">Home</a></li>
				<li><a href="<?php echo site_url('Prescription');?>">Prescription</a></li>
				<li><a href="<?php echo site_url('MedicalHistory') ?>">Medical History</a></li>
				<li><a href="<?php echo site_url('Login/logout') ?>">Logout</a></li>
			</ul>
		</div><!--end of header -section-->
		<br>
	<!--<?php echo validation_errors('<p style="color:#F00">'); ?>
    <?php echo form_open(''); ?>
		<div class="form-section">-->
			<div class="container">
				<div class="well bs-component">
				<div class="legend">
	  				<h2>Welcome Back, <?php echo $this->session->userdata('user_name'); ?>!</h2>
  					<p>This section represents the area that only logged in members can access.</p>
				</div><!--<div class="content">-->
				</div>
			</div>
		<!--</div>end of form-section-->
		<?php echo form_close();?>
	</div><!--cnd of welcome-page-->
	
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