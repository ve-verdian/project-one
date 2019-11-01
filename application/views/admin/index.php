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
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <?php if(!empty($stokBarangMasuk)){ ?>
                  <?php foreach($stokBarangMasuk as $d){ ?>
                  <h3><?=$d->jumlah?></h3>
                  <?php } ?>
                  <?php }else{ ?>
                  <h3>0</h3>
                  <?php } ?>
                  <p>Stock Barang Masuk</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="<?=base_url('admin/tabel_barangmasuk')?>" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <?php if(!empty($stokBarangKeluar)){ ?>
                  <?php foreach($stokBarangKeluar as $d){?>
                  <h3><?=$d->jumlah?></h3>
                  <?php } ?>
                  <?php }else{?>
                  <h3>0</h3>
                  <?php } ?>
                  <p>Stock Barang Keluar</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="<?= base_url('admin/tabel_barangkeluar')?>" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <?php if(!empty($dataPC)){ ?>
                  <h3><?=$dataPC?></h3>
                  <?php } ?>
                  <p>Data Komputer</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="<?= base_url('admin/tabel_pc')?>" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
								<?php if(!empty($dataPrinter)){ ?>
                <h3><?=$dataPrinter?></h3>
                <?php } ?>
                <p>Data Printer</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?= base_url('admin/tabel_printer')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
            <!-- ./col -->
          </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php $this->load->view("admin/_layouts/footer.php") ?>
    </body>
</html>
