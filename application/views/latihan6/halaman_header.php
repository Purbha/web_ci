<?php
	$pesan_sukses = $this->session->flashdata('pesan_sukses');
	if($pesan_sukses != '') {
		$this->session->set_flashdata('pesan_sukses','');
 ?>
<div class="alert alert-success">
	<strong>Success!</strong> <?=$pesan_sukses;?>
</div>
<?php } ?>
<?php
	$pesan_gagal = $this->session->flashdata('pesan_gagal');
	if($pesan_gagal != '') {
		$this->session->set_flashdata('pesan_gagal','');
?>
<div class="alert alert-danger">
	<strong>Fail!</strong> <?=$pesan_gagal;?>
</div>
<?php } ?>
<div class="jumbotron text-center" style="margin-bottom:0">
	<h1>Latihan Codeigniter</h1>
  	<p>Dota blog untuk latihan CodeIgniter Framework</p> 
</div>
