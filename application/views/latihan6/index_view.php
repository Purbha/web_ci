<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=$title;?></title>
 	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->load->view('latihan6/halaman_include'); ?>
</head>
<body>
<?php $this->load->view('latihan6/halaman_header'); ?>
<div class="container" style="margin-top:30px">
	<div class="row">
    	<div class="col-sm-4">
			<?php $this->load->view('latihan6/halaman_menu'); ?>
    	</div>
    	<div class="col-sm-8">
			<?php $this->load->view($page); ?>
    	</div>
  	</div>
</div>
<?php $this->load->view('latihan6/halaman_footer'); ?>
</body>
</html>