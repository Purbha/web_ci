<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
</head>

<body>
	<h1><?php echo $heading; ?></h1>
	<?php echo form_open('latihan2/controller2/insert_barang'); ?>
    <table border="1" cellpadding="5" cellspacing="0">
    	<tr><th width="150">Field</th><th>Value</th></tr>
    	<tr>
        	<td>Kode Barang</td>
            <td><input type="text" maxlength="5" size="10" name="kdbar" required="required" /></td>
    	</tr>
    	<tr>
        	<td>Nama Barang</td>
            <td><input type="text" maxlength="50" size="25" name="nmbar" required="required" /></td>
    	</tr>
    	<tr>
        	<td>Stok</td>
            <td><input type="text" maxlength="5" size="5" name="stok" required="required" /></td>
    	</tr>
    	<tr>
        	<td>Harga Standar</td>
            <td><input type="text" maxlength="15" size="15" name="harga_std" required="required" /></td>
    	</tr>     
    	<tr>
        	<td>Kategori</td>
            <td>
            	<select name="kategori">
					<option value="Komputer">Komputer</option>
					<option value="Elektronik">Elektronik</option>
					<option value="Aksesoris">Aksesoris</option>
                </select>
        	</td>
    	</tr>
    	<tr>
        	<td>Garansi</td>
            <td>
				<input type="radio" value="1" name="garansi" />Ada
				<input type="radio" value="0" name="garansi" />Tidak Ada
        	</td>
    	</tr>
    	<tr>
        	<td colspan="2" align="center"><input type="submit" value="Simpan" /></td>
    	</tr>
    </table>
    <?=form_close();?>
    <?php
		if($pesan != '') {
			echo '<h2>'.$pesan.'</h2>';
			echo '<a href="'.site_url().'/latihan2/controller2">Kembali</a>';
		}
	?>
</body>
</html>