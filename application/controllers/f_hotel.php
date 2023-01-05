<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class F_hotel extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('m_fhotel');
    }

    public function index()

    {
        $data['f_hotel'] = $this->m_fhotel->tampil_data();
        $this->load->view('Tamu/fasilitas_hotel',$data);
    }
}
?>