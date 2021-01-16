<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Controller6 extends CI_Controller {

	public function index() {
		$data['title'] = 'Ini Adalah Title';
		$data['heading'] = 'Ini Adalah Header';
		$this->load->view('latihan1/view3',$data);		
	}
	
}
?>
