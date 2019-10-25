<!DOCTYPE html>
<html>
<head>
	<?php 
	//session_start();
	//include 'cek.php';
	//include 'config.php';
	?>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/css/bootstrap.css')?> ">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/js/jquery-ui/jquery-ui.css')?> ">
	<script type="text/javascript" src="<?= base_url('assets/admin/js/jquery.js')?> "></script>
	<script type="text/javascript" src="<?= base_url('assets/admin/js/jquery.js')?> "></script>
	<script type="text/javascript" src="<?= base_url('assets/admin/js/bootstrap.js')?> "></script>
	<script type="text/javascript" src="<?= base_url('assets/admin/js/jquery-ui/jquery-ui.js')?> "></script>	
</head>

<body>	
	<div class="container">
		<div class="panel panel-default">
			<form action="<?= base_url('login/') ?>" method="post">
				<div class="col-md-4 col-md-offset-4 kotak mt-15">
					<h3>Silahkan Login ..</h3>
					<div class="input-group mb-2">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" class="form-control" placeholder="Username" name="username">
					</div>
					<div class="input-group mb-2">
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
						<input type="password" class="form-control" placeholder="Password" name="password">
					</div>
					<div class="input-group mb-2">			
						<input type="submit" class="btn btn-primary" value="Login">
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>