<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Controller2 extends CI_Controller {

	public function index() {
		$data['page'] = 'latihan6/halaman_home';
		$data['title'] = 'Home';
		$data['heading'] = 'Halaman Home';
		$this->load->view('latihan6/index_view',$data);
	}

	public function pelanggan_view() {
		$data['page'] = 'latihan6/pelanggan_view';
		$data['title'] = 'Pelanggan';
		$data['heading'] = 'Master Pelanggan';
		$this->load->view('latihan6/index_view',$data);
	}

	public function pelanggan_detail($kdpel) {
		$data['kdpel'] = $kdpel;
		$data['page'] = 'latihan6/pelanggan_detail';
		$data['title'] = 'Pelanggan';
		$data['heading'] = 'Pelanggan Detail';
		$this->load->view('latihan6/index_view',$data);
	}

	public function pelanggan_update() {
		$pesan = $this->pelanggan_model->update_pelanggan();	
		$this->session->set_flashdata('pesan_sukses',$pesan);	
		$data['page'] = 'latihan6/pelanggan_view';
		$data['title'] = 'Pelanggan';
		$data['heading'] = 'Master Pelanggan';
		$this->load->view('latihan6/index_view',$data);
	}

	public function pelanggan_add() {
		$data['page'] = 'latihan6/pelanggan_add';
		$data['title'] = 'Pelanggan';
		$data['heading'] = 'Pelanggan Add';
		$this->load->view('latihan6/index_view',$data);
	}

	public function pelanggan_add_proses() {
		$kdpel = $this->input->post('kdpel');
		$pelanggan = $this->pelanggan_model->select_pelanggan($kdpel);
		if($pelanggan) {
			$this->session->set_flashdata('pesan_gagal','Kode Pelanggan sudah terdaftar');	
		} else {
			$pesan = $this->pelanggan_model->insert_pelanggan();	
			$this->session->set_flashdata('pesan_sukses',$pesan);	
		}
		$data['page'] = 'latihan6/pelanggan_view';
		$data['title'] = 'Pelanggan';
		$data['heading'] = 'Master Pelanggan';
		$this->load->view('latihan6/index_view',$data);
	}
		
}
?>