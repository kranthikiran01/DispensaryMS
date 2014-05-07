<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'; ?>">
	<link href="<?php echo base_url().'assets/css/bootstrap.css'; ?>" rel="stylesheet">
</head>
<body>

	
		<div class="header-section">
			<a href="#"><img src="<?php echo base_url().'assets/images/logo_nitw.png'; ?> " alt="NITWarangal">
			<img src="<?php echo base_url().'assets/images/loginlogo.png'; ?>" alt=""></a>
			<ul class="menu">
				<li><a href="index.html">Home</a></li>
				<li><a href="register.html">Sign up</a></li>
			</ul>
		</div><!--end of header -section-->
		
		<?php echo validation_errors('<p style="color:#F00">'); ?>
    <?php echo form_open('Forgot/recover'); ?>
    <div class="row">
    	<div class="col-lg-6 col-lg-offset-3">
    		<div class="well bs-component">
    		<div class="form-horizontal">
    			<LEGEND>Password Recovery!</LEGEND>
    			<div class="form-group">
    				<label class="col-lg-3 col-lg-offset-1 control-label" >Username:</label>
    				<div class="col-lg-6">
    					<input type="text" class="col-lg-3 form-control" name="uname" id="uname" placeholder="UserName">
    				</div>
    			</div>
    			<label class="col-lg-offset-3 control-label" style="margin-left:300px;">OR</label>
    			<div class="form-group">
    				<label class="col-lg-3 col-lg-offset-1 control-label" >RegNo/EmpID:</label>
    				<div class="col-lg-6">
    					<input type="text" class="col-lg-3 form-control" name="regno" id="regno" placeholder="ID Number">
    				</div>
    			</div>
    			<div class="form-group">
    				<label class="col-lg-3 col-lg-offset-1 control-label" >Date of Birth:</label>
    				<div class="col-lg-6">
    					<input type="date" class="col-lg-3 form-control" name="dob" id="dob" placeholder="Date Of Birth">
    				</div>
    			</div>
    			<div class="form-group">
                    <div class="col-lg-10 col-lg-offset-4">
                      <button class="btn btn-default">Cancel</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                  <p class=" col-lg-offset-1" disabled="">Your password will be mailed to your email address</p>
    			</div>
    		</div>
    	</div>
    </div>
    <?php echo form_close();?>
	
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