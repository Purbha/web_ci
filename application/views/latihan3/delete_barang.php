<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
</head>
<body>
	<h1><?php echo $heading; ?></h1>
    <?php
		foreach($query as $row) {
			$kdbar = $row->kdbar;
			$nmbar = $row->nmbar;
		}
		echo form_open('latihan3/controller1/delete_barang_proses');
		echo form_hidden('kdbar',$kdbar);
	?>
    <table border="1" cellpadding="5" cellspacing="0">
    	<tr><th colspan="2">Apakah anda ingin menghapus barang ini?</th></tr>
    	<tr><td>Kode Barang</td><td><?=$kdbar;?></td></tr>
    	<tr><td>Nama Barang</td><td><?=$nmbar;?></td></tr>
    	<tr>
        	<td colspan="2" align="center"><input type="submit" value="Delete" /></td>
    	</tr>
    </table>
    <?=form_close();?>
</body>
</html>