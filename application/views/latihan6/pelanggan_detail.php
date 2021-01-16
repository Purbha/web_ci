<?php
	$pelanggan = $this->pelanggan_model->select_pelanggan($kdpel);
	foreach($pelanggan as $row) {
		$kdpel = $row->kdpel;
		$nmpel = $row->nmpel;
		$alamat = $row->alamat;
		$jk = $row->jk;
		$dibuat = $row->dibuat;
		$diupdate = $row->diupdate;
	}
	$tgl_dibuat = date("d-M-Y H:i:s", strtotime($dibuat));
	$tgl_diupdate = date("d-M-Y H:i:s", strtotime($diupdate));
?>
<h2>
	<?=$heading;?>
	<small>
		<?=anchor('latihan6/controller2/pelanggan_view','Back');?>
		<?=anchor('latihan6/controller2/pelanggan_detail/'.$kdpel,'Refresh');?>
    </small>
</h2>
<?=form_open('latihan6/controller2/pelanggan_update');?>
	<div class="form-group">
    	<label for="kdpel">Kode</label>
    	<input type="text" class="form-control" id="kdpel" name="kdpel" value="<?=$kdpel?>" readonly>
  	</div>
	<div class="form-group">
    	<label for="nmpel">Nama Pelanggan</label>
    	<input type="text" class="form-control" id="nmpel" name="nmpel" value="<?=$nmpel?>">
  	</div>
	<div class="form-group">
    	<label for="alamat">Alamat</label>
    	<input type="text" class="form-control" id="alamat" name="alamat" value="<?=$alamat?>">
  	</div>
    <div class="form-group">
  		<label for="jk">Jenis Kelamin</label>
  		<select class="form-control" id="jk">
    	<?php
			if($jk == "Pria") { $a = ' selected'; } else { $a = ''; }
			if($jk == "Wanita") { $b = ' selected'; } else { $b = ''; }
			echo '<option value="Pria"'.$a.'>Pria</option>';		
    		echo '<option value="Wanita"'.$b.'>Wanita</option>';
		?>
		</select>
	</div>
 	<div class="form-group">
    	<label for="dibuat">Tanggal Dibuat</label>
    	<input type="text" class="form-control" id="dibuat" name="dibuat" value="<?=$tgl_dibuat?>" readonly>
  	</div>
 	<div class="form-group">
    	<label for="diupdate">Tanggal Diupdate</label>
    	<input type="text" class="form-control" id="diupdate" name="diupdate" value="<?=$tgl_diupdate?>" readonly>
  	</div>
	<input type="submit" class="btn btn-primary" value="Submit">
<?=form_close();?>
<br>