<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Controller4 extends CI_Controller {

	public function index()	{
		$this->load->view('latihan1/view1');
	}

	public function home() {
		$data['paragraf'] = 'Ini adalah Pelatihan CodeIgniter';
		$this->load->view('latihan1/view2',$data);		
	}
	
}
?>
