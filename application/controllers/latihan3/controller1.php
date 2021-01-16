<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Controller1 extends CI_Controller {

	public function index()	{
		$data['title'] = 'Master Barang';
		$data['heading'] = 'Data Barang';
		$data['query'] = $this->barang_model->ambil_data();		
		$data['pesan'] = '';		
		$this->load->view('latihan3/view1',$data);
	}

	public function update_barang($kdbar) {
		$data['title'] = 'Master Barang';
		$data['heading'] = 'Update Barang';
		$data['query'] = $this->barang_model->select_barang($kdbar);		
		$this->load->view('latihan3/update_barang',$data);
	}

	public function update_barang_proses() {
		$data['pesan'] = $this->barang_model->update_barang();		
		$data['title'] = 'Master Barang';
		$data['heading'] = 'Data Barang';
		$data['query'] = $this->barang_model->ambil_data();		
		$this->load->view('latihan3/view1',$data);
	}

	public function delete_barang($kdbar) {
		$data['title'] = 'Master Barang';
		$data['heading'] = 'Delete Barang';
		$data['query'] = $this->barang_model->select_barang($kdbar);		
		$this->load->view('latihan3/delete_barang',$data);
	}

	public function delete_barang_proses() {
		$data['pesan'] = $this->barang_model->delete_barang();		
		$data['title'] = 'Master Barang';
		$data['heading'] = 'Data Barang';
		$data['query'] = $this->barang_model->ambil_data();		
		$this->load->view('latihan3/view1',$data);
	}
	
}
?>
