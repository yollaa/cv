<!DOCTYPE html>
<html>
<head>
	<?php 
	//session_start();
	//include 'cek.php';
	//include 'config.php';
	?>
	<title>Personal</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/css/bootstrap.css')?>">
	<link rel="stylesheet" type="text/css" href="../assets/admin/js/jquery-ui/jquery-ui.css">
	<script type="text/javascript" src="../assets/admin/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/admin/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/admin/js/bootstrap.js"></script>
	<script type="text/javascript" src="../assets/admin/js/jquery-ui/jquery-ui.js"></script>	
</head>
<body>
	<div class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="<?= base_url('admin')?>" class="navbar-brand"><b>Personal</b></a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse">				
				<ul class="nav navbar-nav navbar-right">
					<li><a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Hy , Admin<span class="glyphicon glyphicon-user"></span></a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- modal input -->
	<div id="modalpesan" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Pesan Notification</h4>
				</div>
				<div class="modal-body">
					<?php 
					//$periksa=mysqli_query($koneksi,"select * from barang where jumlah <=3");
					//while($q=mysqli_fetch_array($periksa)){	
						//if($q['jumlah']<=3){			
							//echo "<div style='padding:5px' class='alert alert-warning'><span class='glyphicon glyphicon-info-sign'></span> Stok  <a style='color:red'>". $q['nama']."</a> yang tersisa sudah kurang dari 3 . silahkan pesan lagi !!</div>";	
						//}
					//}
					?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>						
				</div>
				
			</div>
		</div>
	</div>

	<div class="col-md-2">
		

		<div class="row"></div>
		<ul class="nav nav-pills nav-stacked">
			<li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span>  Dashboard</a></li>			
			<li><a href="<?= base_url('admin/biodata') ?>"><span class="glyphicon glyphicon-user"></span> Biodata</a></li>
			<li><a href="<?= base_url('admin/pendidikan') ?>"><span class="glyphicon glyphicon-user"></span> Pendidikan</a></li>
			<li><a href="<?= base_url('admin/portfolio') ?>"><span class="glyphicon glyphicon-user"></span> Portfolio</a></li>
			<li><a href="<?= base_url('admin/pengalaman') ?>"><span class="glyphicon glyphicon-tag"></span> Pengalaman</a></li>
			<li><a href="<?= base_url('admin/skill') ?>"><span class="glyphicon glyphicon-tag"></span> Skill</a></li>
			<li><a href="<?= base_url('admin/sosmed') ?>"><span class="glyphicon glyphicon-user"></span> Sosmed</a></li>
			<li><a href="<?= base_url('login/logout') ?>"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>			
		</ul>
	</div>
	<div class="col-md-10">