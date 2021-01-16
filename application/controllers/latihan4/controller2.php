<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Controller2 extends MY_Controller {

	public function index() {
		$idlogin = $this->session->userdata('idlogin');
		$login = $this->login_model->select(NULL,NULL,$idlogin);
		foreach($login as $row) { $login_nama = $row->login_nama; }
		$data['login_nama'] = $login_nama;
		$this->load->view('latihan4/view2',$data);
	}	
	
	public function logout() {
		$this->session->unset_userdata('idlogin');
		$this->session->sess_destroy();
		redirect('latihan4/controller1');
	}
	
}
?>