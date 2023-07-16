<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daily Expense Tracker || Change Password</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<?php echo link_tag('assets/css/bootstrap.min.css') ?>
	<?php echo link_tag('assets/css/datepicker3.css') ?>
	<?php echo link_tag('assets/css/styles.css') ?>
	<?php echo link_tag('assets/css/font-awesome.min.css') ?>

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
		rel="stylesheet">

</head>

<body>
	<?php include APPPATH . 'views/includes/header.php'; ?>
	<?php include APPPATH . 'views/includes/sidebar.php'; ?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
				<li class="active">Change Password</li>
			</ol>
		</div><!--/.row-->




		<div class="row">
			<div class="col-lg-12">



				<div class="panel panel-default">
					<div class="panel-heading">Change Password</div>
					<!--success message -->
					<?php if ($this->session->flashdata('success')) { ?>
						<p style="color:red">
							<?php echo $this->session->flashdata('success'); ?>
						</p>
					<?php } ?>

					<!--error message -->
					<?php if ($this->session->flashdata('error')) { ?>
						<p style="color:red">
							<?php echo $this->session->flashdata('error'); ?>
						</p>
					<?php } ?>
					<div class="panel-body">

						<div class="col-md-12">

							<form method="post" action="<?= base_url() ?>Changepassword/changepassword">
								<div class="form-group">
									<label>Current Password</label>
									<input type="password" class="form-control" name="currentpassword" placeholder="Current Password">
									<?php echo form_error('currentpassword') ?>
								</div>
								<div class="form-group">
									<label style="color:#000">New Password</label>
									<input type="password" class="form-control" name="newpassword" placeholder="New Password">
									
									<?php echo form_error('newpassword') ?>
								</div>

								<div class="form-group">
									<label style="color:#000">Confirm Password</label>
									<input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password">
									
									<?php echo form_error('confirmpassword'); ?>
								</div>
								<!-- Checkbox to toggle password visibility -->


								<div class="form-group has-success">
									<?php echo form_submit(['name' => 'submit', 'id' => 'submit', 'class' => 'btn btn-primary', 'value' => 'Change']); ?>
								</div>

							</form>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
			<?php include APPPATH . 'views/includes/footer.php'; ?>
		</div><!-- /.row -->
	</div><!--/.main-->

	<script src="<?php echo base_url('assets/js/jquery-1.11.1.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/chart.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/chart-data.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/easypiechart.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/easypiechart-data.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap-datepicker.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
	<script>
		function togglePasswordVisibility(passwordFieldId) {
			var passwordField = document.getElementById(passwordFieldId);
			if (passwordField.type === "password") {
				passwordField.type = "text";
			} else {
				passwordField.type = "password";
			}
		}
	</script>

</body>

</html>