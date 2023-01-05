<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_hotel');
        $this->load->helper('form');
    }

    public function index()
    ##TAMPILKAN TABEL KAMAR DI VIEW
    {
        $data['f_hotel'] = $this->m_hotel->tampil_data();
        $this->load->view('Admin/fasilitas_hotel',$data);
    }
    function tambah(){
        $this->load->view('Admin/input_hotel');
    }   
    function tambah_aksi(){
        $nama_fasilitas = $this->input->post('nama_fasilitas');
        $ket = $this->input->post('ket');
        $foto = $_FILES['foto'];
        if ($foto='') {}else{
            $config['upload_path']     = './aset/dist/img';
            $config['allowed_types']   = 'jpg|jpeg|gif|png';
            $this->load->library('upload',$config);
            if (!$this->upload->do_upload('foto')) {
                echo "upload gagal"; die();
            }else{
                $foto=$this->upload->data('file_name');
            }

        }

        $data = array(
            'nama_fasilitas'   => $nama_fasilitas,
            'ket'              => $ket,
            'foto'             => $foto
        );
        
        $this->m_hotel->input_data($data,'f_hotel');
        redirect('hotel');
    }
    function edit($id){
        $data['entry']=$this->m_hotel->get($id);
        $this->load->view('Admin/update_hotel',$data);
    }
    function edit2($id){
        $data['entry']=$this->m_hotel->get($id);
        $this->load->view('Admin/update_hotel2',$data);
    }

    ##PROSES EDIT
    function ubah_aksi(){
        $data['id']=$this->input->post('id');
        $data['nama_fasilitas']=$this->input->post('nama_fasilitas');
        $data['ket']=$this->input->post('ket');
        
        $this->m_hotel->edit_data($data); ##proses query edit
        redirect('hotel');  ##kembali ketampilan awal
    }

    function ubah_aksi2(){
        $id = $this->input->post('id');
        $foto = $_FILES['foto'];
        if ($foto='') {}else{
            $config['upload_path']     = './aset/dist/img';
            $config['allowed_types']   = 'jpg|jpeg|gif|png';
            $this->load->library('upload',$config);
            if (!$this->upload->do_upload('foto')) {
                echo "upload gagal"; die();
            }else{
                $foto=$this->upload->data('file_name');
            }

        }

        $data = array(
            'id'       => $id,
            'foto'             => $foto
        );
        $this->m_hotel->edit_data($data); ##proses query edit
        redirect('hotel');  ##kembali ketampilan awal
       
    }

    function hapus($id){
        $data['entry']=$this->m_hotel->hapus($id);
        redirect('hotel');
    }
}
?>