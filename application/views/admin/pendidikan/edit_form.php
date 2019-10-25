<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("_partial/admin/header.php") ?>
</head>
<body class="hold-transition sidebar-mini">


<div class="wrapper">


	<div class="content-wrapper">


		<!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Pendidikan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php base_url('admin/pendidikan/edit') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">
                <input type="hidden" name="id" value="<?php echo $pendidikan->id_pendidikan ?>" />
				
                  

                <div class="form-group">
                    <label for="sekolah_asal">Sekolah Asal</label>
                    <input type="text" value="<?php echo $pendidikan->sekolah_asal ?>" class="form-control <?php echo form_error('sekolah_asal') ? 'is-invalid':'' ?>" id="sekolah_asal" placeholder="Perusahaan" name="sekolah_asal">
                    <div class="invalid-feedback">
                        <?php echo form_error('sekolah_asal') ?>
                    </div>
                </div>
				  
				  
                <div class="form-group">
                    <label for="tahun_ajaran">Tahun Ajaran</label>
                    <input type="text" value="<?php echo $pendidikan->tahun_ajaran ?>" class="form-control <?php echo form_error('tahun_ajaran') ? 'is-invalid':'' ?>" id="tahun_ajaran" placeholder="Perusahaan" name="tahun_ajaran">
                    <div class="invalid-feedback">
                        <?php echo form_error('tahun_ajaran') ?>
                    </div>
                </div>
                 
                <div class="form-group">
                    <label for="foto">Foto</label></br>
                    <img class="img-bordered-sm" style="height: auto;width: 30%;" src="<?php echo base_url('assets/img/pendidikan/'. $pendidikan->foto ) ?>" alt="user image">
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="hidden" name="old_image" value="<?php echo $pendidikan->foto ?>" />
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
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="button" class="btn btn-warning" onclick="history.back();">Back</button>
                </div>
              </form>
            </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->		
	</div>
    <!-- /.content-wrapper -->
    
    <!-- Sticky Footer -->
    <?php $this->load->view("_partial/admin/footer.php") ?>

</div>
<!-- /#wrapper -->

    
</body>
</html>