<?php
class M_login extends CI_Model{
    function cek_login ($username, $password){
    $this->db->select('*');
    $this->db->from('admin');
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    $query = $this->db->get();
    return $query->result();
    }
}