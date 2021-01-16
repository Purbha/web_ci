<h2>
	<?=$heading;?>
    <small>
		<?=anchor('latihan6/controller2/pelanggan_add','Add');?>
		<?=anchor('latihan6/controller2/pelanggan_view','Refresh');?>
    </small>
</h2>
<table class="table">
<thead class="thead-dark">
	<tr><th>No</th><th>Kode</th><th>Nama Pelanggan</th><th>Tools</th></tr>
</thead>
<tbody>
<?php
	$no = 1;
	$pelanggan = $this->pelanggan_model->ambil_data();
	foreach($pelanggan as $row) {
		echo '<tr>';
		echo '<td>'.$no.'</td>';
		echo '<td>'.$row->kdpel.'</td>';
		echo '<td>'.$row->nmpel.'</td>';
		echo '<td>'.anchor('latihan6/controller2/pelanggan_detail/'.$row->kdpel,'Detail').'</td>';
		echo '</tr>';
		$no++;
	}
?>
</tbody>
</table>
