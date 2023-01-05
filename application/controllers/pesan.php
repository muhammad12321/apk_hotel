<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model(array('m_pesan'));
    }
    public function index(){
        $data['pesanan'] = $this->m_pesan->getdata();
        $this->load->view('Tamu/pesan',$data);
    }
    function tambah_aksi(){
        $data['nama_pemesan'] = $this->input->post('nama_pemesan');
        $data['email'] = $this->input->post('email');
        $data['no_hp'] = $this->input->post('no_hp');
        $data['nama_tamu'] = $this->input->post('nama_tamu');
        $data['id_kamar'] = $this->input->post('id_kamar');
        $data['jml_kamar'] = $this->input->post('jml_kamar');
        $data['tgl_cek_in'] = $this->input->post('tgl_cek_in');
        $data['tgl_cek_out'] = $this->input->post('tgl_cek_out');

        $this->m_pesan->input_data($data);
        redirect('home/index');
    }
    function lihat(){
        $data['pesanan'] = $this->m_pesan->tampil_data();
        $this->load->view('Tamu/riwayat_reservasi',$data);
    }
    function print($id_pemesan)
    {
        $data['pesanan'] = $this->m_pesan->get($id_pemesan);
        $this->load->view('Tamu/print', $data);
    }
}
?>