<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_kamar');
        $this->load->helper('form');
		
	}
	public function index()
    ##TAMPILKAN TABEL KAMAR DI VIEW
    {
        $data['kamar'] = $this->m_kamar->tampil_data();
        $this->load->view('Admin/kamar',$data);
    }
    function tambah(){
        $this->load->view('Admin/input_kamar');
    }   
    function tambah_aksi(){
        $tipe_kamar = $this->input->post('tipe_kamar');
        $jml_kamar = $this->input->post('jml_kamar');
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
            'tipe_kamar'       => $tipe_kamar,
            'jml_kamar'        => $jml_kamar,
            'foto'             => $foto
        );
        
        $this->m_kamar->input_data($data,'kamar');
        redirect('kamar');
    }
    function edit($id_kamar){
        $data['entry']=$this->m_kamar->get($id_kamar);
        $this->load->view('Admin/update_kamar',$data);
    }
    function edit2($id_kamar){
        $data['entry']=$this->m_kamar->get($id_kamar);
        $this->load->view('Admin/update_kamar-2',$data);
    }

    ##PROSES EDIT
    function ubah_aksi(){
        $data['id_kamar']=$this->input->post('id_kamar');
        $data['tipe_kamar']=$this->input->post('tipe_kamar');
        $data['jml_kamar']=$this->input->post('jml_kamar');
        
        $this->m_kamar->edit_data($data); ##proses query edit
        redirect('kamar');  ##kembali ketampilan awal
       
    }
    function ubah_aksi2(){
        $id_kamar = $this->input->post('id_kamar');
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
            'id_kamar'       => $id_kamar,
            'foto'             => $foto
        );
        $this->m_kamar->edit_data($data); ##proses query edit
        redirect('kamar');  ##kembali ketampilan awal
       
    }
       
    
    function hapus($id_kamar){
        $data['entry']=$this->m_kamar->hapus($id_kamar);
        redirect('kamar');
    }
    
}
?>