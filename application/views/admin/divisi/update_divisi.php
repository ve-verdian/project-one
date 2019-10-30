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
              <h1>Update Data Divisi</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data Divisi</li>
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
                  <h3 class="card-title"><i class="fa fa-archive" aria-hidden="true"></i> Input Data Divisi</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="<?=base_url('admin/proses_divisi_update')?>" role="form"
                  method="post">

                  <?php if(validation_errors()){ ?>
                  <div class="alert alert-warning alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Warning!</strong><br> <?= validation_errors(); ?>
                  </div>
                  <?php } ?>

                  <div class="card-body">
                    <div class="form-row">
                      <?php foreach($data_divisi as $dv){ ?>
                      <div class="form-group col-md-3">
                        <input type="hidden" name="id_divisi" value="<?=$dv->id_divisi?>">
                        <label for="kode_divisi" style="margin-left:5px">Kode Divisi</label>
                        <input type="text" name="kode_divisi" style="margin-left:5px" class="form-control"
                          id="kode_divisi" placeholder="Kode Divisi" value="<?=$dv->kode_divisi?>">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="nama_divisi" style="margin-left:5px">Nama Divisi</label>
                        <input type="text" name="nama_divisi" style="margin-left:5px" class="form-control"
                          id="nama_divisi" placeholder="Nama Divisi" value="<?=$dv->nama_divisi?>">
                      </div>
                    </div>
                    <?php } ?>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <a type="submit" class="btn btn-warning" onclick="history.back(-1)" name="btn_kembali"><i
                          class="far fa-arrow-alt-circle-left"></i> Kembali</a>
                      <button type="submit" class="btn btn-success"><i class="far fa-save"></i> Simpan</button>
                      <a type="submit" class="btn btn-primary center-block" href="<?=base_url('admin/tabel_divisi')?>"
                        name="btn_listdivisi"><i class="fa fa-table" aria-hidden="true"></i> List Divisi</a>
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
    </body>
</html>
