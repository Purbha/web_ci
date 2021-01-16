<h2>
	<?=$heading;?>
    <small>
		<?=anchor('latihan6/controller3/barang_add','Add');?>
		<?=anchor('latihan6/controller3/barang_view','Refresh');?>
    </small>
</h2>
<table class="table">
<thead class="thead-dark">
	<tr><th>No</th><th>Kode</th><th>Nama Barang</th><th>Tools</th></tr>
</thead>
<tbody>
<?php
	$no = 1;
	$barang = $this->barang_model->ambil_data();
	foreach($barang as $row) {
		echo '<tr>';
		echo '<td>'.$no.'</td>';
		echo '<td>'.$row->kdbar.'</td>';
		echo '<td>'.$row->nmbar.'</td>';
		echo '<td>'.anchor('latihan6/controller3/barang_detail/'.$row->kdbar,'Detail').'</td>';
		echo '</tr>';
		$no++;
	}
?>
</tbody>
</table>
