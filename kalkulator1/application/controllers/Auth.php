<?php
class auth extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('model_userLog');
        $this->load->library('form_validation');
    }

    public function login(){
        if(isset($_POST['submit'])){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $berhasil = $this->model_userLog->login($username,$password);
            if($berhasil == 1){
                $this->session->set_userdata(array('status_login'=>'sukses'));
                redirect('Kalkulator');
            }else{
                redirect('auth/login');
            }

        }else{
            $this->load->view('Vform_login');

        }
    }

    public function registrasi(){
        if( $this->form_validation->run() == false) {
        $this->load->view('Vregistrasi');
        }else{
            echo 'data berhasil ditambahkan!';
        }
		

    }

    public function logout(){
		$this->session->sess_destroy();
		redirect('auth/login');
	}


}
?>