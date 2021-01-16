<?php
class Pelanggan_model extends CI_Model {

	public function ambil_data() {
		$query = $this->db->get('pelanggan');
		return $query->result();
	}
	
	public function insert_pelanggan() {
		date_default_timezone_set('Asia/Jakarta');
		$data = array (
   			'kdpel'=>$this->input->post('kdpel'),
			'nmpel'=>$this->input->post('nmpel'),
			'alamat'=>$this->input->post('alamat'),
   			'jk'=>$this->input->post('jk'),
   			'dibuat'=>date('Y-m-d H:i:s'),
   			'diupdate'=>date('Y-m-d H:i:s'),
 		);
		$this->db->insert('pelanggan',$data);
		$hasil = $this->db->affected_rows(); 
		return ($hasil != 1) ? "Insert Gagal" : "Insert Berhasil";
	}

	public function select_pelanggan($kdpel) {
		$this->db->from('pelanggan');
		$this->db->where('kdpel',$kdpel);
		$query = $this->db->get();
		if ($query->num_rows() > 0) { return $query->result(); } else { return false; }
	}
	
	public function update_pelanggan() {
		date_default_timezone_set('Asia/Jakarta');
		$data = array (
			'nmpel'=>$this->input->post('nmpel'),
			'alamat'=>$this->input->post('alamat'),
   			'jk'=>$this->input->post('jk'),
   			'diupdate'=>date('Y-m-d H:i:s'),
 		);
		$this->db->where('kdpel',$this->input->post('kdpel'));
		$this->db->update('pelanggan',$data);
		$hasil = $this->db->affected_rows(); 
		return ($hasil != 1) ? "Update Gagal" : "Update Berhasil";
	}

	public function delete_pelanggan() {
		$this->db->where('kdpel',$this->input->post('kdpel'));
		$this->db->delete('pelanggan'); 
		$hasil = $this->db->affected_rows(); 
		return ($hasil != 1) ? "Delete Gagal" : "Delete Berhasil";
	}

}
?>
