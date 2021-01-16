<h2>
	<?=$heading;?>
	<small>
		<?=anchor('latihan6/controller3/barang_view','Back');?>
		<?=anchor('latihan6/controller3/barang_add','Refresh');?>
    </small>
</h2>
<?=form_open('latihan6/controller3/barang_add_proses');?>
	<div class="form-group">
    	<label for="kdbar">Kode</label>
    	<input type="text" class="form-control" id="kdbar" name="kdbar" required>
  	</div>
	<div class="form-group">
    	<label for="nmbar">Nama Barang</label>
    	<input type="text" class="form-control" id="nmbar" name="nmbar" required>
  	</div>
	<div class="form-group">
    	<label for="stok">Stok</label>
    	<input type="text" class="form-control" id="stok" name="stok" required>
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