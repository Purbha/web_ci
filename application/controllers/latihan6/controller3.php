<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Controller3 extends CI_Controller {

	public function barang_view() {
		$data['page'] = 'latihan6/barang_view';
		$data['title'] = 'Barang';
		$data['heading'] = 'Master Barang';
		$this->load->view('latihan6/index_view',$data);
	}

	public function barang_detail($kdbar) {
		$data['kdbar'] = $kdbar;
		$data['page'] = 'latihan6/barang_detail';
		$data['title'] = 'Barang';
		$data['heading'] = 'Barang Detail';
		$this->load->view('latihan6/index_view',$data);
	}

	public function barang_update() {
		$pesan = $this->barang_model->update_barang();	
		$this->session->set_flashdata('pesan_sukses',$pesan);	
		$data['page'] = 'latihan6/barang_view';
		$data['title'] = 'Barang';
		$data['heading'] = 'Master Barang';
		$this->load->view('latihan6/index_view',$data);
	}

	public function barang_add() {
		$data['page'] = 'latihan6/barang_add';
		$data['title'] = 'Barang';
		$data['heading'] = 'Barang Add';
		$this->load->view('latihan6/index_view',$data);
	}

	public function barang_add_proses() {
		$kdbar = $this->input->post('kdbar');
		$barang = $this->barang_model->select_barang($kdbar);
		if($barang) {
			$this->session->set_flashdata('pesan_gagal','Kode Barang sudah terdaftar');	
		} else {
			$pesan = $this->barang_model->insert_barang();	
			$this->session->set_flashdata('pesan_sukses',$pesan);	
		}
		$data['page'] = 'latihan6/barang_view';
		$data['title'] = 'Barang';
		$data['heading'] = 'Master Barang';
		$this->load->view('latihan6/index_view',$data);
	}
		
}
?>