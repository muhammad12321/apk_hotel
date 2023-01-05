<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class F_kamar extends CI_Controller {

    public function index()

    {
        $tipe_kamar = $this->db->get('kamar')->result();
        $data=[];
        foreach ($tipe_kamar as $key => $kamar) {
            $this->db->where('id_kamar', $kamar->id_kamar);
            $fasilitaskamar = $this->db->get('f_kamar')->result();
            $data[$key]=array(
                'Info_kamar' =>$kamar,
                'f_kamar'=>$fasilitaskamar
            );
        }
        $this->load->view('Tamu/fasilitas_kamar',['data'=>$data]);
    }
    }
?>