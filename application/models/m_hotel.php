<?php

class M_hotel extends CI_Model{
    
    public function tampil_data (){
        $this->db->select('*');
        $this->db->from('f_hotel');
        $query = $this->db->get();
        return $query->result();
    }
    public function input_data($data){
        $this->db->insert('f_hotel',$data);
    }
    public function edit_data($data){
        $this->db->update('f_hotel',$data, array('id'=>$data['id']));
    }
    public function get($id){
        $this->db->where('id',$id);
        $query=$this->db->get('f_hotel', 1);
        return $query->result_array();
    }
    public function hapus($id){
        $this->db->delete('f_hotel', array('id'=> $id));
    }
}
?>
