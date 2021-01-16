<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Form</title>
 	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/fontawesome/css/solid.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/fontawesome/css/brands.min.css">    
  	<script src="<?=base_url();?>assets/js/jquery.js"></script>
  	<script src="<?=base_url();?>assets/js/popper.min.js"></script>
  	<script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="jumbotron text-center">
		<h1>CodeIgniter Login Form <i class="fas fa-camera"></i></h1>
      	<p>Metode login dengan pemblokiran akun jika terjadi 3x salah password.</p>
      </div>
    <?php echo form_open('latihan5/controller1/login_cek'); ?>
   	<div class="form-group">
        <label for="usr">Username:</label>
        <input type="text" class="form-control" id="usr" name="username" required>
	</div>
	<div class="form-group">
  		<label for="pwd">Password:</label>
  		<input type="password" class="form-control" id="pwd" name="password" required>
    </div>
	<div class="form-group">
    	<input type="submit" class="btn btn-primary" id="submit" value="Submit">
	</div>
    <?php echo form_close(); ?>
    <?php if(isset($err)){ ?>		
    <div class="alert alert-danger">
    	<strong>Perhatian!</strong><br><?=$err;?>
  	</div>	
	<?php } ?>
    <div class="jumbotron text-center">
  		<h3>Universitas Islam As-Syafi'iyah</h3>
  		<p>Copyright @2019 - Irsyad Purbha</p>
	</div>
</div>
</body>
</html> 