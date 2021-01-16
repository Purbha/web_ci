<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Controller7 extends CI_Controller {

	public function index() {
		$data['title'] = 'Ini Adalah Title';
		$data['heading'] = 'Ini Adalah Header';
		$data['band'] = array('The Cranberries','Muse','System Of A Down');
		$this->load->view('latihan1/view4',$data);		
	}
	
}
?>
