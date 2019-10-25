<?php $this->load->view("_partial/admin/header.php") ?>
<h3><span class="glyphicon glyphicon-book"></span> Sosial Media</h3>
<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah</button>
<br/>
<br/>


<?php 
//$per_hal=10;
//$jumlah_record=mysqli_query($koneksi,"SELECT COUNT(*) from pengalaman");
//jum=mysql_result($jumlah_record, 0);
//$jum=mysqli_fetch_array($jumlah_record,MYSQLI_NUM);
//$halaman=ceil($jum[0] / $per_hal);
//$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
//$start = ($page - 1) * $per_hal;
?>
<div class="col-md-12">
	<table class="col-md-2">
		<tr>
			<td>Jumlah Sosmed</td>		
			<td><?php //echo ':'.' '.$jum[0]; ?></td>
		</tr>
		<tr>
			<td>Jumlah Halaman</td>	
			<td><?php //echo ':'.' '.$halaman; ?></td>
		</tr>
		
	</table>
	<form action="cari_pengalaman.php" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari.." name="cari">
	</div>
	</form>
</div>
<table class="table table-hover">		
	</tr>
	<tr>
		<th class="col-sm-1">No</th>
		<th class="col-sm-3">Nama</th>
		<th class="col-sm-2">Username</th>
		<th class="col-sm-2">Keterangan</th>
		<th class="col-sm-2">Foto</th>
		<th class="col-sm-3">DLL</th>
		<!-- <th class="col-md-1">Sisa</th>		 -->
	</tr>
	<?php 
	//if(isset($_GET['cari'])){
		//$cari=mysqli_real_escape_string($koneksi,$_GET['cari']);
		//$brg=mysqli_query($koneksi,"select * from pengalaman where nama_perusahaan like '%$cari%'");
	//}else{
		//$brg=mysqli_query($koneksi,"select * from pengalaman limit $start, $per_hal");
	//}
	$no=1;
	//while($b=mysqli_fetch_array($brg)){
		foreach ($sosmed as $b):
	?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $b->nama ?></td>
			<td><?php echo $b->username ?></td>
			<td><?php echo $b->keterangan ?></td>
			<td><?php echo $b->foto ?></td>
			<td>
				<a href="<?= base_url('admin/sosmed/edit/') . $b->id_sosmed ?>" class="btn btn-warning">Edit</a>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href="<?= base_url('admin/sosmed/delete') . $b->id_sosmed ?>" }" class="btn btn-danger">Hapus</a>
			</td>
		</tr>		
		<?php 
	endforeach;

	?>
</table>

		<?php/*$query = "SELECT max (buku_kode) as maxKode FROM buku";
		$hasil = mysqli_query($koneksi, $query);
		$data = mysqli_fetch_array($hasil);
		$buku_kode = $data['maxKode'];
		$noUrut = (int) substr($buku_kode,4,4);
		$noUrut++;
		$kode = "B-";
		$newID = $kode . sprintf("%03s",$noUrut);*/
		//include 'kode_pengalaman.php';
		?>
<!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Sosmed Baru</h4>
			</div>
			<div class="modal-body">
				<form role="form" action="<?php base_url('admin/sosmed/add') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">
				
				<div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>" id="nama" placeholder="Nama" name="nama">
                    <div class="invalid-feedback">
                        <?php echo form_error('nama') ?>
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>" id="username" placeholder="Username" name="username">
                    <div class="invalid-feedback">
                        <?php echo form_error('username') ?>
                    </div>
                  </div>

				<div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea class="form-control <?php echo form_error('keterangan') ? 'is-invalid':'' ?>" id="keterangan" style="width: 100%" name="keterangan"></textarea>
                    <div class="invalid-feedback">
                        <?php echo form_error('keterangan') ?>
                    </div>
                  </div>

                  
				<div class="form-group">
                    <label for="foto">Foto</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input <?php echo form_error('foto') ? 'is-invalid':'' ?>" id="foto" name="foto">
                        <label class="custom-file-label" for="foto">Choose file</label>
                        <div class="invalid-feedback">
                            <?php echo form_error('foto') ?>
                        </div>
                      </div>
                    </div>
                  </div>
				  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="button" class="btn btn-warning" onclick="history.back();">Kembali</button>
                </div>
              </form>
		</div>
	</div>
</div>


<?php $this->load->view("_partial/admin/footer.php") ?>