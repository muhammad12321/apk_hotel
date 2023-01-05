<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller {

	
	public function index()
    ##TAMPILKAN TABEL KAMAR DI VIEW
    {
        $data['pesanan'] = $this->m_pesanan->tampil_data()->result();
        $this->load->view('Resepsionis/pesanan', $data);
    }
    public function detail($id_pemesan)
    {
        $this->load->model('m_pesanan');
        $detail = $this->m_pesanan->detail_data($id_pemesan);
        $data['detail'] = $detail;
        $this->load->view('Resepsionis/detail',$data);  
    }
    
}
?>