<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $title; ?></title>
</head>
<body>
	<h1><?php echo $heading; ?></h1>
    <p>
	<?php
		echo anchor('latihan3/controller2','Refresh');
		echo ' | ';
		echo anchor('latihan3/controller2/tambah_pelanggan','Tambah Pelanggan');		
	?>
    </p>
	<table border="1" cellpadding="5" cellspacing="0">
    	<tr>
        	<th>No</th><th>Kode Pelanggan</th><th>Nama Pelanggan</th><th>Alamat</th><th>Jenis Kelamin</th>
            <th>Dibuat</th><th>Diupdate</th><th>Tools</th>
        </tr>
        <?php
		$no = 1;
		foreach($query as $row) {
			$dibuat = new DateTime($row->dibuat);
			$diupdate = new DateTime($row->diupdate);
			echo '<tr>';
			echo '<td align="center">'.$no.'</td>';
			echo '<td>'.$row->kdpel.'</td>';
			echo '<td>'.$row->nmpel.'</td>';
			echo '<td>'.$row->alamat.'</td>';
			echo '<td>'.$row->jk.'</td>';
			echo '<td>'.$dibuat->format('d-m-Y H:i:s').'</td>';
			echo '<td>'.$diupdate->format('d-m-Y H:i:s').'</td>';
			echo '<td>';
				echo anchor('latihan3/controller2/update_pelanggan/'.$row->kdpel,'Update');
				echo ' | ';
				echo anchor('latihan3/controller2/delete_pelanggan/'.$row->kdpel,'Delete');
			echo '</td>';
			echo '</tr>';
			$no++;
		}
		?>
    </table>
    <?php if($pesan != '') { echo '<h2>'.$pesan.'</h2>'; } ?>
</body>
</html>