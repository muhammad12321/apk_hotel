<?php

class M_fhotel extends CI_Model{
    
    public function tampil_data (){
        $this->db->select('*');
        $this->db->from('f_hotel');
        $query = $this->db->get();
        return $query->result();
    }
}
?>
