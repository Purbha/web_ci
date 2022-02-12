<?php
class Barang_model extends CI_Model {

	public function ambil_data() {
		$query = $this->db->get('barang');
		return $query->result();
	}

	public function insert_barang() {
		date_default_timezone_set('Asia/Jakarta');
		$data = array (
   			'kdbar'=>$this->input->post('kdbar'),
			'nmbar'=>$this->input->post('nmbar'),
			'stok'=>$this->input->post('stok'),
   			'harga_std'=>$this->input->post('harga_std'),
   			'kategori'=>$this->input->post('kategori'),
   			'garansi'=>$this->input->post('garansi'),
   			'dibuat'=>date('Y-m-d H:i:s'),
   			'diupdate'=>date('Y-m-d H:i:s'),
 		);
		$this->db->insert('barang',$data);
		$hasil = $this->db->affected_rows(); 
		return ($hasil != 1) ? "Insert Gagal" : "Insert Berhasil";
	}
	
	public function select_barang($kdbar) {
		$this->db->from('barang');
		$this->db->where('kdbar',$kdbar);
		$query = $this->db->get();
		if ($query->num_rows() > 0) { return $query->result(); } else { return false; }
	}
	
	public function update_barang() {
		date_default_timezone_set('Asia/Jakarta');
		$data = array (
			'nmbar'=>$this->input->post('nmbar'),
			'stok'=>$this->input->post('stok'),
   			'harga_std'=>$this->input->post('harga_std'),
   			'kategori'=>$this->input->post('kategori'),
   			'garansi'=>$this->input->post('garansi'),
 		);
		$this->db->where('kdbar',$this->input->post('kdbar'));
		$this->db->update('barang',$data);
		$hasil = $this->db->affected_rows(); 
		return ($hasil != 1) ? "Update Gagal" : "Update Berhasil";
	}

	public function delete_barang() {
		$this->db->where('kdbar',$this->input->post('kdbar'));
		$this->db->delete('barang'); 
		$hasil = $this->db->affected_rows(); 
		return ($hasil != 1) ? "Delete Gagal" : "Delete Berhasil";
	}

}
?>
