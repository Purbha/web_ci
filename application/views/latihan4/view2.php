<!DOCTYPE html>
<html lang="en">
<head>
	<title>User Form</title>
 	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css">
  	<script src="<?=base_url();?>assets/js/jquery.js"></script>
  	<script src="<?=base_url();?>assets/js/popper.min.js"></script>
  	<script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<h1>Login Berhasil</h1>
    <p>Selamat Datang <?=$login_nama?></p>
    <?php echo form_open('latihan4/controller2/logout'); ?>
	<div class="form-group">
    	<input type="submit" class="btn btn-primary" id="submit" value="Logout">
	</div>
    <?php echo form_close(); ?>
</div>
</body>
</html> 