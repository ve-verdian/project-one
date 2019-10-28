<!DOCTYPE html>
<html lang="en">
<head>
  <!-- <title><?= $title; ?></title> -->
<?php $this->load->view("admin/_layouts/header.php") ?>
	<div class="wrapper">

		
	<?php
	if(!isset($page)){
		$this->load->view('admin/berkas/daftar_file');
	} else{
		$this->load->view($page);
	}
	?>

	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?= base_url();?>assets/js/bootstrap.js"></script>

<?php $this->load->view("admin/_layouts/footer.php") ?>
</body>
</html>
