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
                <h3 class="card-title">Edit Biodata</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php base_url('admin/biodata/edit') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">
                <input type="hidden" name="id_biodata" value="<?php echo $biodata->id_biodata ?>" />
				
                <div class="form-group">
                    <label for="profesi">profesi</label>
                    <input value="<?php echo $biodata->profesi ?>" type="text" class="form-control <?php echo form_error('profesi') ? 'is-invalid':'' ?>" id="profesi" placeholder="Profesi" name="profesi">
                    <div class="invalid-feedback">
                        <?php echo form_error('profesi') ?>
                    </div>
                </div>
				
                <div class="form-group">
                    <label for="nama">nama</label>
                    <input type="text" value="<?php echo $biodata->nama ?>" class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>" id="nama" placeholder="Nama" name="nama">
                    <div class="invalid-feedback">
                        <?php echo form_error('nama') ?>
                    </div>
                </div>
                  

                <div class="form-group">
                    <label for="jk">jk</label>
                    <input type="text" value="<?php echo $biodata->jk ?>" class="form-control <?php echo form_error('jk') ? 'is-invalid':'' ?>" id="jk" placeholder="Jenis Kelamin" name="jk">
                    <div class="invalid-feedback">
                        <?php echo form_error('jk') ?>
                    </div>
                </div>
				  
                <div class="form-group">
                    <label for="ttl">ttl</label>
                    <input type="text" value="<?php echo $biodata->ttl ?>" class="form-control <?php echo form_error('ttl') ? 'is-invalid':'' ?>" id="ttl" placeholder="Tempat, Tanggal Lahir" name="ttl">
                    <div class="invalid-feedback">
                        <?php echo form_error('ttl') ?>
                    </div>
                </div>
				  
                <div class="form-group">
                    <label for="alamat">alamat</label>
                    <input type="text" value="<?php echo $biodata->alamat ?>" class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>" id="alamat" placeholder="Alamat" name="alamat">
                    <div class="invalid-feedback">
                        <?php echo form_error('alamat') ?>
                    </div>
                </div>
				
                <div class="form-group">
                    <label for="agama">agama</label>
                    <input type="text" value="<?php echo $biodata->agama ?>" class="form-control <?php echo form_error('agama') ? 'is-invalid':'' ?>" id="agama" placeholder="Agama" name="agama">
                    <div class="invalid-feedback">
                        <?php echo form_error('agama') ?>
                    </div>
                </div>
				
                <div class="form-group">
                    <label for="status">status</label>
                    <input type="text" value="<?php echo $biodata->status ?>" class="form-control <?php echo form_error('status') ? 'is-invalid':'' ?>" id="status" placeholder="Status" name="status">
                    <div class="invalid-feedback">
                        <?php echo form_error('status') ?>
                    </div>
                </div>
				
				<div class="form-group">
                    <label for="foto">foto</label></br>
                    <img class="img-bordered-sm" style="height: auto;width: 30%;" src="<?php echo base_url('assets/img/biodata/'. $biodata->foto ) ?>" alt="user image">
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="hidden" name="old_image" value="<?php echo $biodata->foto ?>" />
                        <input type="file" class="custom-file-input <?php echo form_error('foto') ? 'is-invalid':'' ?>" id="foto" name="foto">
                        <label class="custom-file-label" for="foto">Choose file</label>
                        <div class="invalid-feedback">
                            <?php echo form_error('foto') ?>
                        </div>
                      </div>
                    </div>
                </div>
				  
                <div class="form-group">
                    <label for="resume">resume</label>
                    <textarea class="form-control <?php echo form_error('resume') ? 'is-invalid':'' ?>" id="resume" style="width: 100%" name="resume"><?php echo $biodata->resume ?></textarea>
                    <div class="invalid-feedback">
                        <?php echo form_error('resume') ?>
                    </div>
                </div>
                    
                <div class="form-group">
                    <label for="keterangan">keterangan</label>
                    <textarea class="form-control <?php echo form_error('keterangan') ? 'is-invalid':'' ?>" id="keterangan" style="width: 100%" name="keterangan"><?php echo $biodata->keterangan ?></textarea>
                    <div class="invalid-feedback">
                        <?php echo form_error('keterangan') ?>
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