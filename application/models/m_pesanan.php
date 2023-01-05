<?php

class M_pesanan extends CI_Model{
    
    public function tampil_data (){
        $this->db->select('
          pesanan.*, kamar.id_kamar AS id_kamar, kamar.tipe_kamar, 
        ');
        $this->db->join('kamar', 'pesanan.id_kamar = kamar.id_kamar');
        $this->db->from('pesanan');
        return $this->db->get();
    }
    public function detail_data($id_pemesan)
    {
        $this->db->select('
          pesanan.*, kamar.id_kamar AS id_kamar, kamar.tipe_kamar, 
        ');
        $this->db->join('kamar', 'pesanan.id_kamar = kamar.id_kamar');
        $this->db->from('pesanan');
        $query = $this->db->get_where('', array('id_pemesan' => $id_pemesan))->row();
        return $query;
    }
    
}
?>
