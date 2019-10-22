<!DOCTYPE html>
<html lang="en">
<head>
  <title><?= $title; ?></title>
<?php $this->load->view("admin/_layouts/header.php") ?>
	<div class="wrapper">
<?php $this->load->view("admin/_layouts/navbar.php") ?>
<?php $this->load->view("admin/_layouts/sidebar.php") ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-archive" aria-hidden="true"></i>  Update Data User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="<?=base_url('admin/proses_update_user')?>" role="form" method="post">
                
							<?php if($this->session->flashdata('msg_berhasil')){ ?>
                <div class="alert alert-success alert-dismissible" style="width:91%">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong><br> <?= $this->session->flashdata('msg_berhasil');?>
               </div>
              <?php } ?>

              <?php if(validation_errors()){ ?>
              <div class="alert alert-warning alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Warning!</strong><br> <?= validation_errors(); ?>
             	</div>
            	<?php } ?>

								<div class="card-body">
                  <div class="form-row">
										<div class="form-group col-md-4">
										<?php foreach($list_data as $d){ ?>
											<input type="hidden" name="id" value="<?=$d->id?>">
											<label for="username" style="margin-left:20px">Username</label>
											<input type="text" name="username" style="margin-left:20px" class="form-control" id="username" placeholder="Username" required="" value="<?=$d->username?>">
										</div>
                  </div>
									<div class="form-row">
										<div class="form-group col-md-4">
											<label for="email" style="margin-left:20px">Email</label>
											<input type="text" name="email" style="margin-left:20px" class="form-control" id="email" placeholder="Email" required="" value="<?=$d->email?>">
										</div>
                  </div>    
                <div class="form-row">  
									<div class="form-group col-md-2">
                    <label for="role" style="margin-left:20px">Role</label>
                    <select name="role" class="form-control" style="margin-left:20px">
										<?php if($d->role == 1){ ?>
											<option value="1" selected="">User Admin</option>
											<option value="0">User Biasa</option>
										<?php }else{ ?>
											<option value="1">User Admin</option>
											<option value="0" selected="">User Biasa</option>
										<?php } ?>
                    </select>
                  </div>
								</div>
								<?php } ?>
									<?php if(isset($token_generate)){ ?>
										<input type="hidden" name="token"  class="form-control" value="<?= $token_generate?>">
									<?php }else {
										redirect(base_url('admin/update_user'));
									}?>
                <!-- /.card-body -->
                <div class="card-footer">
                  <a type="submit" class="btn btn-warning" onclick="history.back(-1)" name="btn_kembali"><i class="far fa-arrow-alt-circle-left" aria-hidden="true"></i>  Kembali</a>
                  <button type="submit" class="btn btn-success"><i class="far fa-save" aria-hidden="true"></i>  Simpan</button>
                  <a type="submit" class="btn btn-primary center-block" href="<?=base_url('admin/users')?>" name="btn_listusers"><i class="fa fa-table" aria-hidden="true"></i>  List Users</a>
                </div>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $this->load->view("admin/_layouts/footer.php") ?>
<script src="<?= base_url()?>assets/plugins/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
  <script type="text/javascript">
      $(".form_datetime").datetimepicker({
        format: 'dd/mm/yyyy',
        autoclose: true,
        todayBtn: true,
        pickTime: false,
        minView: 2,
        maxView: 4,
      });
  </script>
</body>
</html>
