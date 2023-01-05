<?php

class M_kamar extends CI_Model{
    
    public function tampil_data (){
        $this->db->select('*');
        $this->db->from('kamar');
        $query = $this->db->get();
        return $query->result();
    }
    public function input_data($data){
        $this->db->insert('kamar',$data);
    }
    public function edit_data($data){
        $this->db->update('kamar',$data, array('id_kamar'=>$data['id_kamar']));
    }
    public function get($id_kamar){
        $this->db->where('id_kamar',$id_kamar);
        $query=$this->db->get('kamar', 1);
        return $query->result_array();
    }
    public function hapus($id_kamar){
        $this->db->delete('kamar', array('id_kamar'=> $id_kamar));
    }
    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('kamar');
        $this->db->like('tipe_kamar', $keyword);
        $this->db->or_like('jml_kamar', $keyword);
        return $this->db->get()->result();
    }
}
?>
