<?php
class User_model extends CI_model {
    function create($formArray){
        $this->db->insert('users',$formArray);
    }
    function all(){
        return $users=$this->db->get('users')->result_array();
    }
    function deleteUser($id){
        $this->db->where('id',$id);
        $this->db->delete('users');
    }
    function getUser($id){
        $this->db->where('id',$id);
        return $user=$this->db->get('users')->row_array();
    }
    function c($id,$formArray){
        $this->db->where('id',$id);
        $this->db->update('users',$formArray);
    }
}

?>