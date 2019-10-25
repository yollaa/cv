<?php $this->load->view("_partial/admin/header.php") ?>
<h3><span class="glyphicon glyphicon-user"></span> Skill</h3>
<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" type="submit" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Skill</button>
<br/>
<br/>


<?php 
//$per_hal=10;
//$jumlah_record=mysqli_query($koneksi,"SELECT COUNT(*) from biodata");
//jum=mysql_result($jumlah_record, 0);
//$jum=mysqli_fetch_array($jumlah_record,MYSQLI_NUM);
//$halaman=ceil($jum[0] / $per_hal);
//$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
//$start = ($page - 1) * $per_hal;
?>

	<form action="cari_act.php" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari.." name="cari">
	</div>
	</form>
<table class="table table-hover">		
	</tr>
	<tr>
		<th class="col-sm-1">No</th>
		<th class="col-sm-2">Keahlian</th>
		<th class="col-sm-2">Persentase</th>
		<th class="col-sm-3">DLL</th>
		<!-- <th class="col-md-1">Sisa</th>		 -->
	</tr>
	<?php 
	//if(isset($_GET['cari'])){
		//$cari=mysqli_real_escape_string($koneksi,$_GET['cari']);
		//$brg=mysqli_query($koneksi,"select * from biodata where nama like '%$cari%'");
	//}else{
		//$brg=mysqli_query($koneksi,"select * from biodata limit $start, $per_hal");
	//}
	$no=1;
	//while($b=mysqli_fetch_array($brg)){
	?>
			<?php foreach ($skill as $b): ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $b->nama_skill ?></td>
			<td><?php echo $b->persentase ?></td>
			<td>
				<a href="det_biodata.php?id_biodata=<?php echo $b->id_skill ?>" class="btn btn-info">Detail</a>
				<a href="<?= base_url('admin/edit_skill') ?>" class="btn btn-warning">Edit</a>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus_biodata.php?id<?php echo $b->id_skill ?>' }" class="btn btn-danger">Hapus</a>
			</td>
		</tr>		
			<?php endforeach; ?>
		<?php 
	//}

	?>
</table>
<!-- Disini Tampilan Halaman -->
		<?php/*$query = "SELECT max (buku_kode) as maxKode FROM buku";
		$hasil = mysqli_query($koneksi, $query);
		$data = mysqli_fetch_array($hasil);
		$buku_kode = $data['maxKode'];
		$noUrut = (int) substr($buku_kode,4,4);
		$noUrut++;
		$kode = "B-";
		$newID = $kode . sprintf("%03s",$noUrut);*/
		include 'kode_skill.php';
		?>
<!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Keahlian Baru</h4>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('master/skill/add')?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Id Skill</label>
						<input name="id_skill" readonly="" value="<?php echo $kodeskill; ?>" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Keahlian</label>
						<input name="nama_skill" type="text" class="form-control" placeholder="Keahlian Anda">
					</div>
					<div class="form-group">
						<label>Persentase</label>
						<input name="persentase" type="text" class="form-control" placeholder="Nama Anda">
					</div>			

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input type="submit" class="btn btn-primary" value="Simpan">
				</div>
			</form>
		</div>
	</div>
</div>

<?php $this->load->view("_partial/admin/footer.php") ?>
