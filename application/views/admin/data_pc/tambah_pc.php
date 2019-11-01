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
              <h1>Tambah Data Komputer</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data Komputer</li>
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
                  <h3 class="card-title"><i class="fa fa-archive" aria-hidden="true"></i> Input Data Komputer</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="<?=base_url('admin/proses_pc_insert')?>" role="form"
                  method="post">

                  <?php if($this->session->flashdata('msg_berhasil')){ ?>
                  <div class="alert alert-success alert-dismissible" style="width:91%">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong><br> <?= $this->session->flashdata('msg_berhasil');?>
                  </div>
                  <?php } ?>

                  <div class="card-body">
                    <div class="form-group row">
                      <label for="tgl_input" class="col-sm-2 col-form-label">Tanggal Input</label>
                      <div class="col-sm-10">
												<input type="text" name="tgl_input" class="form-control form_datetime" id="tgl_input" placeholder="Tanggal Input">
												<?= form_error('tgl_input', '<small class="text-danger pl-3">', '</small>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="divisi" class="col-sm-2 col-form-label">Departemen / Divisi</label>
                      <div class="col-sm-10">
                        <select name="divisi" class="form-control">
                          <option value="" selected="">-- Pilih --</option>
                          <?php foreach($list_divisi as $ld){ ?>
                          <option value="<?=$ld->kode_divisi?>"><?=$ld->nama_divisi?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="hostname" class="col-sm-2 col-form-label">Hostname</label>
                      <div class="col-sm-10">
												<input type="text" name="hostname" class="form-control" id="hostname" placeholder="Hostname">
												<?= form_error('hostname', '<small class="text-danger pl-3">', '</small>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="user" class="col-sm-2 col-form-label">User</label>
                      <div class="col-sm-10">
												<input type="text" name="user" class="form-control" id="user" placeholder="User">
												<?= form_error('user', '<small class="text-danger pl-3">', '</small>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
                      <div class="col-sm-10">
												<input type="text" name="jenis" class="form-control" id="jenis" placeholder="Jenis">
												<?= form_error('jenis', '<small class="text-danger pl-3">', '</small>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="hard_disk" class="col-sm-2 col-form-label">Harddisk</label>
                      <div class="col-sm-10">
												<input type="text" name="hard_disk" class="form-control" id="hard_disk" placeholder="Harddisk">
												<?= form_error('hard_disk', '<small class="text-danger pl-3">', '</small>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="ram" class="col-sm-2 col-form-label">RAM</label>
                      <div class="col-sm-10">
												<input type="text" name="ram" class="form-control" id="ram" placeholder="Ram">
												<?= form_error('ram', '<small class="text-danger pl-3">', '</small>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="processor" class="col-sm-2 col-form-label">Processor</label>
                      <div class="col-sm-10">
												<input type="text" name="processor" class="form-control" id="processor" placeholder="Processor">
												<?= form_error('processor', '<small class="text-danger pl-3">', '</small>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="os" class="col-sm-2 col-form-label">Operating System</label>
                      <div class="col-sm-10">
												<input type="text" name="os" class="form-control" id="os" placeholder="Operating System">
												<?= form_error('os', '<small class="text-danger pl-3">', '</small>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="ip_address" class="col-sm-2 col-form-label">IP Address</label>
                      <div class="col-sm-10">
                        <input type="text" name="ip_address" class="form-control" id="ip_address"
													placeholder="IP Address">
													<?= form_error('ip_address', '<small class="text-danger pl-3">', '</small>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                      <div class="col-sm-10">
                        <select class="custom-select" name="lokasi" id="lokasi">
                          <option selected>-</option>
                          <option value="Lobby">Lobby</option>
                          <option value="Lantai 1">Lantai 1</option>
                          <option value="Lantai 2">Lantai 2</option>
                          <option value="Lantai 3">Lantai 3</option>
                          <option value="Lantai 5">Lantai 5</option>
                          <option value="Ruko">Ruko</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="internet" class="col-sm-2 col-form-label">Internet</label>
                      <div class="col-sm-10">
                        <select class="custom-select" name="internet" id="internet">
                          <option selected>-</option>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="lokal" class="col-sm-2 col-form-label">Lokal</label>
                      <div class="col-sm-10">
                        <select class="custom-select" name="lokal" id="lokal">
                          <option selected>-</option>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="simrs" class="col-sm-2 col-form-label">SIM-RS</label>
                      <div class="col-sm-10">
                        <select class="custom-select" name="simrs" id="simrs">
                          <option selected>-</option>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="status" class="col-sm-2 col-form-label">Status</label>
                      <div class="col-sm-10">
                        <select class="custom-select" name="status" id="status">
                          <option selected>-</option>
                          <option value="Aktif">Aktif</option>
                          <option value="Tidak">Tidak</option>
                          <option value="Non Aktif">Non Aktif</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="reset" name="btn_reset" class="btn btn-secondary" style="margin-left:25px"><i
                        class="fa fa-eraser" aria-hidden="true"></i> Reset</button>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <a type="submit" class="btn btn-warning" onclick="history.back(-1)" name="btn_kembali"><i
                        class="far fa-arrow-alt-circle-left" aria-hidden="true"></i> Kembali</a>
                    <button type="submit" class="btn btn-success"><i class="far fa-save" aria-hidden="true"></i>
                      Simpan</button>
                    <a type="submit" class="btn btn-primary center-block"
                      href="<?=base_url('admin/tabel_pc')?>" name="btn_listpc"><i class="fa fa-table"
                        aria-hidden="true"></i> List Data Komputer</a>
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
