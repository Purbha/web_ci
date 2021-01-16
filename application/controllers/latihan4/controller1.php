<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Controller1 extends CI_Controller {

	public function index() {
		$this->load->view('latihan4/view1');
	}
	
	public function login_cek() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->login_model->select($username,$password);
		if(!$cek){
			$data['err'] = "Username atau Password anda salah.";			
			$this->load->view('latihan4/view1',$data);
			return;
		}
		foreach($cek as $row){
			$idlogin = $row->idlogin;
			$login_nama = $row->login_nama;
		}
		$cred = array('idlogin'=>$idlogin);
		$this->session->set_userdata($cred);
		redirect('latihan4/controller2');
	}
	
}
?>