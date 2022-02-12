<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
</head>

<body>
	<h1><?php echo $heading; ?></h1>
	<table border="1" cellpadding="5" cellspacing="0">
    	<tr>
        	<th>No</th><th>Kode Barang</th><th>Nama Barang</th><th>Stok</th><th>Harga Standar</th>
            <th>Kategori</th><th>Garansi</th><th>Dibuat</th><th>Diupdate</th>
        </tr>
        <?php
		$no = 1;
		foreach($query as $row) {
			if($row->garansi == 1) { $gar = 'Bergaransi'; } else { $gar = 'Tidak Bergaransi'; }
			echo '<tr>';
				echo '<td align="center">'.$no.'</td>';
				echo '<td>'.$row->kdbar.'</td>';
				echo '<td>'.$row->nmbar.'</td>';
				echo '<td align="right">'.$row->stok.'</td>';
				echo '<td align="right">'.number_format($row->harga_std).'</td>';
				echo '<td>'.$row->kategori.'</td>';
				echo '<td>'.$gar.'</td>';
				echo '<td>'.$row->dibuat.'</td>';
				echo '<td>'.$row->diupdate.'</td>';
			echo '</tr>';
			$no++;
		}
		?>
    </table>
</body>
</html>