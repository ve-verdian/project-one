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
              <h1>Tambah Data Printer</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data Printer</li>
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
                  <h3 class="card-title"><i class="fa fa-archive" aria-hidden="true"></i> Input Data Printer</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="<?=base_url('admin/proses_printer_insert')?>" role="form"
                  method="post">

                  <?php if($this->session->flashdata('msg_berhasil')){ ?>
                  <div class="alert alert-success alert-dismissible" style="width:90%">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong><br> <?= $this->session->flashdata('msg_berhasil');?>
                  </div>
                  <?php } ?>

                  <div class="card-body">
                    <div class="form-group row">
                      <label for="tgl_input" class="col-sm-2 col-form-label">Tanggal Input</label>
                      <div class="col-sm-10">
                        <input type="text" name="tgl_input" class="form-control form_datetime" id="tgl_input"
													placeholder="Tanggal Input">
													<?= form_error('tgl_input', '<small class="text-danger pl-3">', '</small>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                      <div class="col-sm-10">
                        <select class="custom-select" name="kategori" id="kategori">
                          <option selected>-</option>
                          <option value="Printer">Printer</option>
                          <option value="Scan">Scan</option>
                          <option value="Calc">Calc</option>
                          <option value="Fotocopy">Fotocopy</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="merk" class="col-sm-2 col-form-label">Merk</label>
                      <div class="col-sm-10">
												<input merk="text" name="merk" class="form-control" id="merk" placeholder="Merk">
												<?= form_error('merk', '<small class="text-danger pl-3">', '</small>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="type" class="col-sm-2 col-form-label">Type</label>
                      <div class="col-sm-10">
												<input type="text" name="type" class="form-control" id="type" placeholder="Type">
												<?= form_error('type', '<small class="text-danger pl-3">', '</small>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="serial_number" class="col-sm-2 col-form-label">Serial Number</label>
                      <div class="col-sm-10">
                        <input type="text" name="serial_number" class="form-control" id="serial_number"
													placeholder="Serial Number">
													<?= form_error('serial_number', '<small class="text-danger pl-3">', '</small>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="qty_out" class="col-sm-2 col-form-label">Qty Out</label>
                      <div class="col-sm-10">
                        <input type="number" name="qty_out" class="form-control" id="qty_out" placeholder="Qty Out">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="capacity" class="col-sm-2 col-form-label">Capacity (VA)</label>
                      <div class="col-sm-10">
                        <input type="number" name="capacity" class="form-control" id="capacity" placeholder="Capacity">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="kondisi" class="col-sm-2 col-form-label">Kondisi</label>
                      <div class="col-sm-10">
                        <select class="custom-select" name="kondisi" id="kondisi">
													<option selected>-</option>
													<option value="Baru">Baru</option>
                          <option value="Baik">Baik</option>
                          <option value="Rusak">Rusak</option>
                          <option value="Kurang">Kurang</option>
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
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                      <div class="col-sm-10">
                        <input type="text" name="keterangan" class="form-control" id="keterangan"
                          placeholder="Keterangan">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="warna" class="col-sm-2 col-form-label">Warna</label>
                      <div class="col-sm-10">
                        <select class="custom-select" name="warna" id="warna">
                          <option selected>-</option>
                          <option value="Hitam">Hitam</option>
                          <option value="Putih">Putih</option>
                          <option value="Krem">Krem</option>
                          <option value="Abu-abu">Abu-abu</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="pengguna" class="col-sm-2 col-form-label">Pengguna</label>
                      <div class="col-sm-10">
												<input type="text" name="pengguna" class="form-control" id="pengguna" placeholder="Pengguna">
												<?= form_error('pengguna', '<small class="text-danger pl-3">', '</small>') ?>
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
                      <label for="qty" class="col-sm-2 col-form-label">Qty</label>
                      <div class="col-sm-10">
                        <input type="number" name="qty" class="form-control" id="qty" placeholder="Qty">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="backup" class="col-sm-2 col-form-label">Back Up</label>
                      <div class="col-sm-10">
                        <select class="custom-select" name="backup" id="backup">
                          <option selected>-</option>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="kepemilikan" class="col-sm-2 col-form-label">Kepemilikan</label>
                      <div class="col-sm-10">
                        <select class="custom-select" name="kepemilikan" id="kepemilikan">
                          <option selected>-</option>
                          <option value="RSIA Family">RSIA Family</option>
                          <option value="Vendor">Vendor</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="posisi_skg" class="col-sm-2 col-form-label">Posisi Sekarang</label>
                      <div class="col-sm-10">
                        <input type="text" name="posisi_skg" class="form-control" id="posisi_skg"
                          placeholder="Posisi Sekarang">
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
                    <a type="submit" class="btn btn-primary center-block" href="<?=base_url('admin/tabel_printer')?>"
                      name="btn_listprinter"><i class="fa fa-table" aria-hidden="true"></i> List Data Printer</a>
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
