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
                <h3 class="card-title"><i class="fa fa-archive" aria-hidden="true"></i>  Input Data Printer</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="<?=base_url('admin/proses_databarang_masuk_insert')?>" role="form" method="post">
                
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
									<div class="form-group row">
										<label for="id_transaksi" class="col-sm-2 col-form-label">ID Transaksi</label>
										<div class="col-sm-10">
										<input type="text" name="id_transaksi" class="form-control" id="id_transaksi" placeholder="ID Transaksi" readonly="readonly" value="WG-<?=date("Y");?><?=random_string('numeric', 8);?>">
										</div>
									</div>
									<div class="form-group row">
										<label for="tanggal" class="col-sm-2 col-form-label">Tanggal Input</label>
										<div class="col-sm-10">
										<input type="text" name="tanggal" class="form-control" id="tanggal" placeholder="Tanggal Input">
										</div>
									</div>
									<div class="form-group row">
                    <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
											<div class="col-sm-10">
												<input type="text" name="kategori" class="form-control" id="kategori" placeholder="Kategori">
											</div>
                  	</div>
									<div class="form-group row">
										<label for="type" class="col-sm-2 col-form-label">Type</label>
										<div class="col-sm-10">
										<input type="text" name="type" class="form-control" id="type" placeholder="Type">
										</div>
									</div>
									<div class="form-group row">
										<label for="sn" class="col-sm-2 col-form-label">Serial Number</label>
										<div class="col-sm-10">
										<input type="text" name="sn" class="form-control" id="sn" placeholder="Serial Number">
										</div>
									</div>
									<div class="form-group row">
										<label for="qty_out" class="col-sm-2 col-form-label">Qty Out</label>
										<div class="col-sm-2">
											<input type="number" name="qty_out" class="form-control" id="qty_out" placeholder="Qty Out">
										</div>
									</div>
									<div class="form-group row">
										<label for="capacity" class="col-sm-2 col-form-label">Capacity (VA)</label>
										<div class="col-sm-2">
										<input type="text" name="capacity" class="form-control" id="capacity" placeholder="Capacity">
										</div>
									</div>
									<div class="form-group row">
										<label for="kondisi" class="col-sm-2 col-form-label">Kondisi</label>
										<div class="col-sm-2">
										<select class="custom-select" name="kondisi" id="kondisi">
											<option selected>-</option>
											<option value="baik">Baik</option>
											<option value="rusak">Rusak</option>
										</select>
										</div>
									</div>
									<div class="form-group row">
										<label for="status" class="col-sm-2 col-form-label">Status</label>
										<div class="col-sm-2">
										<select class="custom-select" name="status" id="status">
											<option selected>-</option>
											<option value="aktif">Aktif</option>
											<option value="tidak">Tidak</option>
										</select>
										</div>	
									</div>
									<div class="form-group row">
										<label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
										<div class="col-sm-10">
										<input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Keterangan">
										</div>
									</div>
									<div class="form-group row">
										<label for="warna" class="col-sm-2 col-form-label">Warna</label>
										<div class="col-sm-4">
										<input type="text" name="warna" class="form-control" id="warna" placeholder="Warna">
										</div>
									</div>
									<div class="form-group row">
										<label for="pengguna" class="col-sm-2 col-form-label">Pengguna</label>
										<div class="col-sm-10">
										<input type="text" name="pengguna" class="form-control" id="pengguna" placeholder="Pengguna">
										</div>
									</div>
									<div class="form-group row">
										<label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
										<div class="col-sm-3">
										<select class="custom-select" name="lokasi">
											<option selected>-</option>
											<option value="lt.l">Lobby</option>
											<option value="lt.1">Lantai 1</option>
											<option value="lt.2">Lantai 2</option>
											<option value="lt.3">Lantai 3</option>
											<option value="lt.5">Lantai 5</option>
										</select>
										</div>	
									</div>
									<div class="form-group row">
										<label for="qty" class="col-sm-2 col-form-label">Qty</label>
										<div class="col-sm-2">
											<input type="number" name="qty" class="form-control" id="qty" placeholder="Qty">
										</div>
									</div>
									<div class="form-group row">
										<label for="status" class="col-sm-2 col-form-label">Back Up</label>
										<div class="col-sm-2">
										<select class="custom-select" name="status" id="status">
											<option selected>-</option>
											<option value="ya">Ya</option>
											<option value="tidak">Tidak</option>
										</select>
										</div>
									</div>
									<div class="form-group row">
										<label for="status" class="col-sm-2 col-form-label">Kepemilikan</label>
										<div class="col-sm-10">
										<select class="custom-select" name="status" id="status">
											<option selected>-</option>
											<option value="rsiaf">RSIA Family</option>
											<option value="vendor">Vendor</option>
										</select>
										</div>
									</div>
								</div>
                
								<div class="form-group">
								<button type="reset" name="btn_reset" class="btn btn-secondary" style="margin-left:25px"><i class="fa fa-eraser" aria-hidden="true"></i> Reset</button>					
								</div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <a type="submit" class="btn btn-warning" onclick="history.back(-1)" name="btn_kembali"><i class="far fa-arrow-alt-circle-left" aria-hidden="true"></i>  Kembali</a>
                  <button type="submit" class="btn btn-success"><i class="far fa-save" aria-hidden="true"></i>  Simpan</button>
                  <a type="submit" class="btn btn-primary center-block" href="<?=base_url('admin/tabel_barangmasuk')?>" name="btn_listbarang"><i class="fa fa-table" aria-hidden="true"></i>  List Barang</a>
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
