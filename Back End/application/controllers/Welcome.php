<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

/**
* Halaman Indeks untuk pengontrol
*
* Peta ke URL berikut
* http://example.com/index.php/welcome
*	- atau -
* http://example.com/index.php/welcome/index
*	- atau -
* Karena pengontrol ini disetel sebagai pengontrol default di
* config/routes.php, ditampilkan di http://example.com/
*
* Jadi metode publik lainnya yang tidak diawali dengan garis bawah akan
* petakan ke /index.php/welcome/<method_name>
* @lihat https://codeigniter.com/user_guide/general/urls.html
*/
	public function __construct(){
		parent::__construct();
		$this->load->model('Setup_model');
	}

	public function index(){
		if($this->Setup_model->checkFirst() == true){
			redirect('setup');
		}else if ($this->session->userdata('logged_in') == false) {
			redirect('login');
		}else if ($this->session->userdata('logged_in') == true) {
			redirect('dashboard');
		}
	}
}
