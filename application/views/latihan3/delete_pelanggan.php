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
			$kdpel = $row->kdpel;
			$nmpel = $row->nmpel;
		}
		echo form_open('latihan3/controller2/delete_pelanggan_proses');
		echo form_hidden('kdpel',$kdpel);
	?>
    <table border="1" cellpadding="5" cellspacing="0">
    	<tr><th colspan="2">Apakah anda ingin menghapus pelanggan ini?</th></tr>
    	<tr><td>Kode Pelanggan</td><td><?=$kdpel;?></td></tr>
    	<tr><td>Nama Pelanggan</td><td><?=$nmpel;?></td></tr>
    	<tr>
        	<td colspan="2" align="center"><input type="submit" value="Delete" /></td>
    	</tr>
    </table>
    <?=form_close();?>
</body>
</html>