<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') !="login"){
			redirect('login');
		}
	}
	public function index()
    ##TAMPILKAN TABEL KAMAR DI VIEW
    {
        $this->load->view('Admin/home_admin');
    }
}
?>