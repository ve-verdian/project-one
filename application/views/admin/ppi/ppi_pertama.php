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
              <h1>Tambah Data PPI Pertama</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data PPI Pertama</li>
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
                  <h3 class="card-title"><i class="fa fa-archive" aria-hidden="true"></i> Input Data PPI</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="<?=base_url('admin/proses_ppi_pertama_insert')?>" role="form"
                  method="post">

                  <?php if($this->session->flashdata('msg_berhasil')){ ?>
                  <div class="alert alert-success alert-dismissible" style="width:91%">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong><br> <?= $this->session->flashdata('msg_berhasil');?>
                  </div>
                  <?php } ?>

                  <div class="card-body">
										<div class="form-row">
												<div class="form-group col-md-3">
													<label for="tgl_input">Tanggal Input</label>
													<input type="text" name="tgl_input" class="form-control form_datetime"
														id="tgl_input" placeholder="Tanggal Input">
														<?= form_error('tgl_input', '<small class="text-danger pl-3">', '</small>') ?>
												</div>
										</div>
                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="nama_pasien">Nama Pasien</label>
                        <input type="text" name="nama_pasien" class="form-control"
                          id="nama_pasien" placeholder="Nama Pasien">
                          <?= form_error('nama_pasien', '<small class="text-danger pl-3">', '</small>') ?>
											</div>
										</div>
                    <div class="form-row">
											<div class="form-group col-md-3">
                        <label for="tgl_psg_k">Tanggal Pasang Kateter</label>
                        <input type="text" name="tgl_psg_k" class="form-control form_datetime"
													id="tgl_psg_k" placeholder="Tanggal Pasang Kateter">
													<?= form_error('tgl_psg_k', '<small class="text-danger pl-3">', '</small>') ?>
											</div>
											<div class="form-group col-md-3">
                        <label for="tgl_lps_k">Tanggal Lepas Kateter</label>
                        <input type="text" name="tgl_lps_k" class="form-control form_datetime"
													id="tgl_lps_k" placeholder="Tanggal Lepas Kateter">
													<?= form_error('tgl_lps_k', '<small class="text-danger pl-3">', '</small>') ?>
											</div>
                      <div class="form-group col-md-6">
                        <label for="infeksi_satu">Infeksi</label>
                        <input type="text" name="infeksi_satu" class="form-control"
													id="infeksi_satu" placeholder="Infeksi">
												<?= form_error('infeksi_satu', '<small class="text-danger pl-3">', '</small>') ?>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-3">
                        <label for="tgl_psg_in">Tanggal Pasang Infus</label>
                        <input type="text" name="tgl_psg_in" class="form-control form_datetime"
													id="tgl_psg_in" placeholder="Tanggal Operasi">
													<?= form_error('tgl_psg_in', '<small class="text-danger pl-3">', '</small>') ?>
											</div>
											<div class="form-group col-md-3">
                        <label for="tgl_lps_in">Tanggal Lepas Infus</label>
                        <input type="text" name="tgl_lps_in" class="form-control form_datetime"
													id="tgl_lps_in" placeholder="Tanggal Pulang">
													<?= form_error('tgl_lps_in', '<small class="text-danger pl-3">', '</small>') ?>
											</div>
                      <div class="form-group col-md-6">
                        <label for="infeksi_dua">Infeksi</label>
                        <input type="text" name="infeksi_dua" class="form-control"
													id="infeksi_dua" placeholder="Infeksi">
													<?= form_error('infeksi_dua', '<small class="text-danger pl-3">', '</small>') ?>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-3">
                        <label for="tgl_opr">Tanggal Operasi</label>
                        <input type="text" name="tgl_opr" class="form-control form_datetime"
													id="tgl_opr" placeholder="Tanggal Operasi">
													<?= form_error('tgl_opr', '<small class="text-danger pl-3">', '</small>') ?>
											</div>
											<div class="form-group col-md-3">
                        <label for="tgl_plg">Tanggal Pulang</label>
                        <input type="text" name="tgl_plg" class="form-control form_datetime"
													id="tgl_plg" placeholder="Tanggal Pulang">
													<?= form_error('tgl_plg', '<small class="text-danger pl-3">', '</small>') ?>
											</div>
                      <div class="form-group col-md-6">
                        <label for="infeksi_tiga">Infeksi</label>
                        <input type="text" name="infeksi_tiga" class="form-control"
													id="infeksi_tiga" placeholder="Infeksi">
													<?= form_error('infeksi_tiga', '<small class="text-danger pl-3">', '</small>') ?>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-3">
                        <label for="tgl_psg_ven">Tanggal Pasang Ventilator</label>
                        <input type="text" name="tgl_psg_ven" class="form-control form_datetime"
													id="tgl_psg_ven" placeholder="Tanggal Pasang Ventilator">
													<?= form_error('tgl_psg_ven', '<small class="text-danger pl-3">', '</small>') ?>
											</div>
											<div class="form-group col-md-3">
                        <label for="tgl_lps_ven">Tanggal Lepas Ventilator</label>
                        <input type="text" name="tgl_lps_ven" class="form-control form_datetime"
													id="tgl_lps_ven" placeholder="Tanggal Lepas Ventilator">
													<?= form_error('tgl_lps_ven', '<small class="text-danger pl-3">', '</small>') ?>
											</div>
                      <div class="form-group col-md-6">
                        <label for="infeksi_empat">Infeksi</label>
                        <input type="text" name="infeksi_empat" class="form-control"
													id="infeksi_empat" placeholder="Infeksi">
													<?= form_error('infeksi_empat', '<small class="text-danger pl-3">', '</small>') ?>
											</div>
										</div>
										<div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control"
													id="keterangan" placeholder="Keterangan">
													<?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>') ?>
											</div>
										</div>
                  <div class="form-group">
                    <button type="reset" name="btn_reset" class="btn btn-secondary"><i
                        class="fa fa-eraser" aria-hidden="true"></i> Reset</button>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <a type="submit" class="btn btn-warning" onclick="history.back(-1)" name="btn_kembali"><i
                        class="far fa-arrow-alt-circle-left" aria-hidden="true"></i> Kembali</a>
                    <button type="submit" class="btn btn-success"><i class="far fa-save" aria-hidden="true"></i>
                      Simpan</button>
                    <a type="submit" class="btn btn-primary center-block"
                      href="<?=base_url('admin/tabel_ppisatu')?>" name="btn_listppi_1"><i class="fa fa-table"
                        aria-hidden="true"></i> List Data PPI Pertama</a>
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
