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
                <h3 class="card-title">Edit Skill</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php base_url('admin/skill/edit') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">
                <input type="hidden" name="id" value="<?php echo $skill->id_skill ?>" />
				
                  

                <div class="form-group">
                    <label for="nama_skill">Keahlian</label>
                    <input type="text" value="<?php echo $skill->nama_skill ?>" class="form-control <?php echo form_error('nama_skill') ? 'is-invalid':'' ?>" id="nama_skill" placeholder="Keahlian" name="nama_skill">
                    <div class="invalid-feedback">
                        <?php echo form_error('nama_skill') ?>
                    </div>
                </div>
				  
				<div class="form-group">
                    <label for="persentase">Persentase</label>
                    <input type="text" value="<?php echo $skill->persentase ?>" class="form-control <?php echo form_error('persentase') ? 'is-invalid':'' ?>" id="persentase" placeholder="Persentase" name="persentase">
                    <div class="invalid-feedback">
                        <?php echo form_error('persentase') ?>
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