<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Controller1 extends CI_Controller {

	public function index() {
		$this->load->view('latihan5/view1');
	}
	
	public function login_cek() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->login_model->select($username);
		if(!$cek){
			$data['err'] = "Username tidak terdaftar.";			
			$this->load->view('latihan5/view1',$data);
			return;
		}
		foreach($cek as $row){
			$idlogin = $row->idlogin;
			$login_password = $row->login_password;
			$login_nama = $row->login_nama;
			$login_fail = $row->login_fail;
		}
		if($login_fail >= 3) {
			$data['err'] = "Akun anda sudah terblokir. Silakan hubungi administrator.";			
			$this->load->view('latihan5/view1',$data);
			return;
		}
		if($password != $login_password) {
			$login_fail = $login_fail + 1;
			$this->login_model->update_fail($idlogin,$login_fail);
			$data['err'] = "Password anda salah. Silakan diperiksa kembali password anda.";			
			$this->load->view('latihan5/view1',$data);
			return;
		}
		$this->login_model->update_fail($idlogin,0);
		$cred = array('idlogin'=>$idlogin);
		$this->session->set_userdata($cred);
		redirect('latihan5/controller2');
	}
	
}
?>