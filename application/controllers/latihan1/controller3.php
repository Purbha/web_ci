<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Controller3 extends CI_Controller {

	public function index($nilai1) {
		echo 'Nilai 1 adalah: '.$nilai1;
	}

	public function home($nilai1,$nilai2) {
		echo 'Nilai 1 adalah: '.$nilai1.'<br>';
		echo 'Nilai 2 adalah: '.$nilai2;
	}
	
}
?>
