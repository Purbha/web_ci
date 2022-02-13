<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
</head>
<body>
	<h1><?php echo $heading; ?></h1>
    <?php
		foreach($query as $row) {
			$kdbar = $row->kdbar;
			$nmbar = $row->nmbar;
			$stok = $row->stok;
			$harga_std = $row->harga_std;
			$kategori = $row->kategori;
			$garansi = $row->garansi;		
		}
		echo form_open('latihan3/controller1/update_barang_proses');
		echo form_hidden('kdbar',$kdbar);
		$a = ''; $b = ''; $c = '';
		if($kategori == 'Komputer') { $a = 'selected="selected"'; }
		if($kategori == 'Elektronik') { $b = 'selected="selected"'; }
		if($kategori == 'Aksesoris') { $c = 'selected="selected"'; }
		$d = ''; $e = '';
		if($garansi == 1) { $d = 'checked="checked"'; }
		if($garansi == 0) { $e = 'checked="checked"'; }
	?>
    
    <table border="1" cellpadding="5" cellspacing="0">
    	<tr><th width="150">Field</th><th>Value</th></tr>
    	<tr><td>Kode Barang</td><td><?=$kdbar;?></td></tr>
    	<tr>
        	<td>Nama Barang</td>
            <td>
            	<input type="text" maxlength="50" size="25" name="nmbar"
                	required="required" value="<?=$nmbar;?>" />
        	</td>
    	</tr>
    	<tr>
        	<td>Stok</td>
            <td>
            	<input type="text" maxlength="5" size="5" name="stok"
                	required="required" value="<?=$stok;?>" />
            </td>
    	</tr>
    	<tr>
        	<td>Harga Standar</td>
            <td>
            	<input type="text" maxlength="15" size="15" name="harga_std"
                	required="required" value="<?=$harga_std;?>" />
            </td>
    	</tr>
    	<tr>
        	<td>Kategori</td>
            <td>
            	<select name="kategori">
					<option value="Komputer" <?=$a;?>>Komputer</option>
					<option value="Elektronik" <?=$b;?>>Elektronik</option>
					<option value="Aksesoris" <?=$c;?>>Aksesoris</option>
                </select>
        	</td>
    	</tr>
    	<tr>
        	<td>Garansi</td>
            <td>
				<input type="radio" value="1" name="garansi" <?=$d;?> />Ada
				<input type="radio" value="0" name="garansi" <?=$e;?> />Tidak Ada
        	</td>
    	</tr>
    	<tr>
        	<td colspan="2" align="center"><input type="submit" value="Update" /></td>
    	</tr>
    </table>
    <?=form_close();?>
</body>
</html>