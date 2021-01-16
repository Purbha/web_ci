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
			$alamat = $row->alamat;
			$jk = $row->jk;
		}
		echo form_open('latihan3/controller2/update_pelanggan_proses');
		echo form_hidden('kdpel',$kdpel);
		$a = ''; $b = '';
		if($jk == "Pria") { $a = 'checked="checked"'; }
		if($jk == "Wanita") { $b = 'checked="checked"'; }
	?>
    
    <table border="1" cellpadding="5" cellspacing="0">
    	<tr><th width="150">Field</th><th>Value</th></tr>
    	<tr><td>Kode Pelanggan</td><td><?=$kdpel;?></td></tr>
    	<tr>
        	<td>Nama Pelanggan</td>
            <td>
            	<input type="text" maxlength="50" size="25" name="nmpel"
                	required="required" value="<?=$nmpel;?>" />
        	</td>
    	</tr>
    	<tr>
        	<td>Alamat</td>
            <td>
            	<textarea name="alamat" rows="5" cols="40"><?=$alamat;?></textarea>
            </td>
    	</tr>
    	<tr>
        	<td>Jenis Kelamin</td>
            <td>
				<input type="radio" value="Pria" name="jk" <?=$a;?> />Pria
				<input type="radio" value="Wanita" name="jk" <?=$b;?> />Wanita
        	</td>
    	</tr>
    	<tr>
        	<td colspan="2" align="center"><input type="submit" value="Update" /></td>
    	</tr>
    </table>
    <?=form_close();?>
</body>
</html>