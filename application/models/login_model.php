<?php
class Login_model extends CI_Model {

	function select($username=NULL,$password=NULL,$idlogin=NULL) {
	   	$this->db->from('login');
	   	if ($username != NULL) { $this->db->where('login_username',$username); }
	   	if ($password != NULL) { $this->db->where('login_password',$password); }
	   	if ($idlogin != NULL) { $this->db->where('idlogin',$idlogin); }
		$query = $this->db->get();
		if ($query->num_rows() > 0) { return $query->result(); } else { return false; }		
		$this->db->close();		
	}
	
	public function update_fail($idlogin,$login_fail) {
		$data = array (
			'login_fail'=>$login_fail,
 		);
		$this->db->where('idlogin',$idlogin);
		$this->db->update('login',$data);
		$hasil = $this->db->affected_rows(); 
		return ($hasil != 1) ? "Update Gagal" : "Update Berhasil";
	}
	
}
?>
