<?php

class M_pesan extends CI_Model{
    public function getdata()
    {
        $this->db->select('
          pesanan.*, kamar.id_kamar AS id_kamar, kamar.tipe_kamar, 
        ');
        $this->db->join('kamar', 'pesanan.id_kamar = kamar.id_kamar');
        $this->db->from('pesanan');
        $query = $this->db->query("SELECT * FROM kamar ORDER BY tipe_kamar");
        return $query->result();
    }
    public function input_data($data){

        $this->db->insert('pesanan',$data);
    }
    public function tampil_data ()
    {
        $this->db->select('
          pesanan.*, kamar.id_kamar AS id_kamar, kamar.tipe_kamar, 
        ');
        $this->db->join('kamar', 'pesanan.id_kamar = kamar.id_kamar');
        $this->db->from('pesanan');
        $query = $this->db->get();
        return $query->result();
    }
    public function get($id_pemesan){
        $this->db->where('id_pemesan',$id_pemesan);
        $this->db->select('
          pesanan.*, kamar.id_kamar AS id_kamar, kamar.tipe_kamar, 
        ');
        $this->db->join('kamar', 'pesanan.id_kamar = kamar.id_kamar');
        $this->db->from('pesanan');
        $query=$this->db->get('', 1);
        return $query->result_array();
    }
}
?>
