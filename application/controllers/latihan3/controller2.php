<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Controller2 extends CI_Controller {

	public function index()	{
		$data['title'] = 'Master Pelanggan';
		$data['heading'] = 'Data Pelanggan';
		$data['query'] = $this->pelanggan_model->ambil_data();		
		$data['pesan'] = '';		
		$this->load->view('latihan3/view_pelanggan',$data);
	}

	public function update_Pelanggan($kdpel) {
		$data['title'] = 'Master Pelanggan';
		$data['heading'] = 'Update Pelanggan';
		$data['query'] = $this->pelanggan_model->select_pelanggan($kdpel);		
		$this->load->view('latihan3/update_pelanggan',$data);
	}

	public function update_pelanggan_proses() {
		$data['pesan'] = $this->pelanggan_model->update_pelanggan();		
		$data['title'] = 'Master Pelanggan';
		$data['heading'] = 'Data Pelanggan';
		$data['query'] = $this->pelanggan_model->ambil_data();		
		$this->load->view('latihan3/view_pelanggan',$data);
	}

	public function delete_pelanggan($kdpel) {
		$data['title'] = 'Master Pelanggan';
		$data['heading'] = 'Delete Pelanggan';
		$data['query'] = $this->pelanggan_model->select_pelanggan($kdpel);		
		$this->load->view('latihan3/delete_pelanggan',$data);
	}

	public function delete_pelanggan_proses() {
		$data['pesan'] = $this->pelanggan_model->delete_pelanggan();		
		$data['title'] = 'Master Pelanggan';
		$data['heading'] = 'Data Pelanggan';
		$data['query'] = $this->pelanggan_model->ambil_data();		
		$this->load->view('latihan3/view_pelanggan',$data);
	}

	public function tambah_pelanggan()	{
		$data['title'] = 'Master Pelanggan';
		$data['heading'] = 'Data Pelanggan';
		$data['pesan'] = '';		
		$this->load->view('latihan3/tambah_pelanggan',$data);
	}

	public function tambah_pelanggan_proses() {
		$data['pesan'] = $this->pelanggan_model->insert_pelanggan();		
		$data['title'] = 'Master Pelanggan';
		$data['heading'] = 'Data Pelanggan';
		$data['query'] = $this->pelanggan_model->ambil_data();		
		$this->load->view('latihan3/view_pelanggan',$data);
	}
	
}
?>
