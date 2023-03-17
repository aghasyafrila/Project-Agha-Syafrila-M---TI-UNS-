<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kalkulator extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$hasil ['hasil']= 0;
		$this->load->view('vkalkulator' , $hasil);
	}
	public function hitung()
	{
		$bil1 = $this->input->post('bil1');
		$bil2 = $this->input->post('bil2');
		$hitung = $this->input->post('hitung');
		$hasil = 0;
		if($hitung == '+'){
			$hasil = $bil1 + $bil2;
		}
		if ($hitung == '-') {
			$hasil = $bil1 - $bil2;
		}
		if ($hitung == '*') {
			$hasil = $bil1 * $bil2;
		}
		if ($hitung == '/') {
			$hasil = $bil1 / $bil2;
		}
		$nilai['hasil'] = $hasil;
		echo json_encode($nilai);

	}



}

/* End of file Kalkulator.php */
/* Location: ./application/controllers/Kalkulator.php */