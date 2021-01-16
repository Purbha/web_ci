<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Controller5 extends CI_Controller {

	public function index() {
		$data['paragraf'] = 'Pelatihan CodeIgniter';
		$this->load->view('latihan1/view1');
		$this->load->view('latihan1/view2',$data);		
	}
	
}
?>
