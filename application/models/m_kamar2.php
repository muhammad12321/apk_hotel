<?php

class M_kamar2 extends CI_Model{
    
    public function tampil_data (){
        $this->db->select('
          f_kamar.*, kamar.id_kamar AS id_kamar, kamar.tipe_kamar, 
        ');
        $this->db->join('kamar', 'f_kamar.id_kamar = kamar.id_kamar');
        $this->db->from('f_kamar');
        $query = $this->db->get();
        return $query->result();
    }
    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM kamar ORDER BY tipe_kamar");
        return $query->result();
    }
    public function input_data($data){

        $this->db->insert('f_kamar',$data);
    }
    public function edit_data($data){
        $this->db->update('f_kamar',$data, array('id'=>$data['id']));
    }
    public function get($id){
        $this->db->where('id',$id);
        $query=$this->db->get('f_kamar', 1);
        return $query->result_array();
    }
    public function hapus($id){
        $this->db->delete('f_kamar', array('id'=> $id));
    }
}
?>
