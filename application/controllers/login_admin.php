<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_admin extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
    }

    public function index()
    {
        $this->load->view('login');

    }

    function aksi_login(){
        $username=$this->input->post('username');
        $password=md5($this->input->post('password'));
        $cek=count($this->m_login->cek_login($username,$password));
        if($cek > 0){
            $data_session = array(
            'nama' => $username,'status' => "login");
            $this->session->set_userdata($data_session);
            redirect('home_admin');
        
        }else{
            echo "Username dan Password Salah";
        }
    }
//BATAS AKSI LOGIN
//LOGOUT
    function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }
//BATAS FUNGSI LOGOUT 
}
?>