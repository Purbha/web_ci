<h2>
	<?=$heading;?>
	<small>
		<?=anchor('latihan6/controller2/pelanggan_view','Back');?>
		<?=anchor('latihan6/controller2/pelanggan_add','Refresh');?>
    </small>
</h2>
<?=form_open('latihan6/controller2/pelanggan_add_proses');?>
	<div class="form-group">
    	<label for="kdpel">Kode</label>
    	<input type="text" class="form-control" id="kdpel" name="kdpel" required>
  	</div>
	<div class="form-group">
    	<label for="nmpel">Nama Pelanggan</label>
    	<input type="text" class="form-control" id="nmpel" name="nmpel" required>
  	</div>
	<div class="form-group">
    	<label for="alamat">Alamat</label>
    	<input type="text" class="form-control" id="alamat" name="alamat" required>
  	</div>
    <div class="form-group">
  		<label for="jk">Jenis Kelamin</label>
  		<select class="form-control" id="jk">
			<option value="Pria">Pria</option>		
    		<option value="Wanita">Wanita</option>
		</select>
	</div>
	<input type="submit" class="btn btn-primary" value="Submit">
<?=form_close();?>
<br>