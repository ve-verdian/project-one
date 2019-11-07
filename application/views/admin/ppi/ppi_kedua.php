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
              <h1>Tambah Data PPI Kedua/h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data PPI Kedua</li>
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
                <form class="form-horizontal" action="<?=base_url('admin/proses_ppi_kedua')?>" role="form"
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
                      <div class="form-group col-md-6">
                        <label for="nama_pasien">Nama Pasien</label>
                        <input type="text" name="nama_pasien" class="form-control"
													id="nama_pasien" placeholder="Nama Pasien">
													<?= form_error('nama_pasien', '<small class="text-danger pl-3">', '</small>') ?>
											</div>
											<div class="form-group col-md-6">
                        <label for="medical_record">Medical Record</label>
                        <input type="text" name="medical_record" class="form-control"
													id="medical_record" placeholder="Medical Record">
													<?= form_error('medical_record', '<small class="text-danger pl-3">', '</small>') ?>
											</div>
										</div>
                    <div class="form-row">
											<div class="form-group col-md-3">
                        <label for="tgl_psg_ivl">Tanggal Pasang IVL</label>
                        <input type="text" name="tgl_psg_ivl" class="form-control form_datetime"
													id="tgl_psg_ivl" placeholder="Tanggal Pasang IVL">
													<?= form_error('tgl_psg_ivl', '<small class="text-danger pl-3">', '</small>') ?>
											</div>
											<div class="form-group col-md-3">
                        <label for="tgl_lps_ivl">Tanggal Lepas IVL</label>
                        <input type="text" name="tgl_lps_ivl" class="form-control form_datetime"
													id="tgl_lps_ivl" placeholder="Tanggal Lepas Kateter">
													<?= form_error('tgl_lps_ivl', '<small class="text-danger pl-3">', '</small>') ?>
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
                        <label for="tgl_psg_cvl">Tanggal Pasang CVL</label>
                        <input type="text" name="tgl_psg_cvl" class="form-control form_datetime"
													id="tgl_psg_cvl" placeholder="Tanggal Pasang CVL">
													<?= form_error('tgl_psg_cvl', '<small class="text-danger pl-3">', '</small>') ?>
											</div>
											<div class="form-group col-md-3">
                        <label for="tgl_lps_cvl">Tanggal Lepas CVL</label>
                        <input type="text" name="tgl_lps_cvl" class="form-control form_datetime"
													id="tgl_lps_cvl" placeholder="Tanggal Lepas CVL">
													<?= form_error('tgl_lps_cvl', '<small class="text-danger pl-3">', '</small>') ?>
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
                        <label for="tgl_psg_ett">Tanggal Pasang ETT</label>
                        <input type="text" name="tgl_psg_ett" class="form-control form_datetime"
													id="tgl_psg_ett" placeholder="Tanggal Pasang ETT">
													<?= form_error('tgl_psg_ett', '<small class="text-danger pl-3">', '</small>') ?>
											</div>
											<div class="form-group col-md-3">
                        <label for="tgl_lps_ett">Tanggal Lepas ETT</label>
                        <input type="text" name="tgl_lps_ett" class="form-control form_datetime"
													id="tgl_lps_ett" placeholder="Tanggal Lepas ETT">
													<?= form_error('tgl_lps_ett', '<small class="text-danger pl-3">', '</small>') ?>
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
                        <label for="tgl_psg_nc">Tanggal Pasang NCPP</label>
                        <input type="text" name="tgl_psg_nc" class="form-control form_datetime"
													id="tgl_psg_nc" placeholder="Tanggal Pasang NCPP">
													<?= form_error('tgl_psg_nc', '<small class="text-danger pl-3">', '</small>') ?>
											</div>
											<div class="form-group col-md-3">
                        <label for="tgl_lps_nc">Tanggal Lepas NCPP</label>
                        <input type="text" name="tgl_lps_nc" class="form-control form_datetime"
													id="tgl_lps_nc" placeholder="Tanggal Lepas NCPP">
													<?= form_error('tgl_lps_nc', '<small class="text-danger pl-3">', '</small>') ?>
											</div>
                      <div class="form-group col-md-6">
                        <label for="infeksi_empat">Infeksi</label>
                        <input type="text" name="infeksi_empat" class="form-control"
													id="infeksi_empat" placeholder="Infeksi">
													<?= form_error('infeksi_empat', '<small class="text-danger pl-3">', '</small>') ?>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
													<label for="antibiotik">Antibiotik</label>
													<input type="text" name="antibiotik" class="form-control"
														id="antibiotik" placeholder="Antibiotik">
														<?= form_error('antibiotik', '<small class="text-danger pl-3">', '</small>') ?>
											</div>
											<div class="form-group col-md-6">
                        <label for="tgl_pulang">Tanggal Pulang</label>
                        <input type="text" name="tgl_pulang" class="form-control form_datetime"
													id="tgl_pulang" placeholder="Tanggal Pulang">
													<?= form_error('tgl_pulang', '<small class="text-danger pl-3">', '</small>') ?>
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
                      href="<?=base_url('admin/tabel_ppidua')?>" name="btn_listppi_2"><i class="fa fa-table"
                        aria-hidden="true"></i> List Data PPI Kedua</a>
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
