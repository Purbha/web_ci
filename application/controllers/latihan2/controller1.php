<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Controller1 extends CI_Controller {

	public function index() {
		$data['title'] = 'Master Barang';
		$data['heading'] = 'Data Barang';
		$data['query'] = $this->barang_model->ambil_data();		
		$this->load->view('latihan2/view1',$data);		
	}
	
	public function barang_table() {
		$data['title'] = 'Master Barang';
		$data['heading'] = 'Data Barang';
		$data['query'] = $this->barang_model->ambil_data();		
		$this->load->view('latihan2/view2',$data);		
	}
	
}
?>
