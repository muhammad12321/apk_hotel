<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar2 extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model(array('m_kamar2'));
    }

    public function index()
    ##TAMPILKAN TABEL KAMAR DI VIEW
    {
        $data['f_kamar'] = $this->m_kamar2->tampil_data();
        $this->load->view('Admin/fasilitas_kamar',$data);
    }
    function tambah(){
        $data['f_kamar'] = $this->m_kamar2->getdata();
        $this->load->view('Admin/input_kamar2',$data);
    }   
    function tambah_aksi(){
        $data['id_kamar'] = $this->input->post('id_kamar');
        $data['nama_fasilitas'] = $this->input->post('nama_fasilitas');
        
        $this->m_kamar2->input_data($data);
        redirect('kamar2');
    }
    function edit($id){
        $data['entry']=$this->m_kamar2->get($id);
        $this->load->view('Admin/update_kamar2',$data);
    }

    ##PROSES EDIT
    function ubah_aksi(){
        $data['id']=$this->input->post('id');
        $data['nama_fasilitas']=$this->input->post('nama_fasilitas');
        
        $this->m_kamar2->edit_data($data); ##proses query edit
        redirect('kamar2');  ##kembali ketampilan awal
    }
    function hapus($id){
        $data['entry']=$this->m_kamar2->hapus($id);
        redirect('kamar2');
    }
}
?>