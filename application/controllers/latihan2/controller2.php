<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Controller2 extends CI_Controller {

	public function index()	{
		$data['title'] = 'Master Barang';
		$data['heading'] = 'Input Barang';
		$data['pesan'] = '';		
		$this->load->view('latihan2/view3',$data);		
	}
	
	public function insert_barang()	{
		$data['title'] = 'Master Barang';
		$data['heading'] = 'Input Barang';
		$data['pesan'] = $this->barang_model->insert_barang();
		$this->load->view('latihan2/view3',$data);		
	}
	
}
?>
