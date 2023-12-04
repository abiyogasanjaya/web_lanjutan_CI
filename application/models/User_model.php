<?php

class User_model extends CI_Model {
    private $table = 'tb_user';

    public function insert($payload){
        return $this->db->insert($this->table, $payload);
    }

    public function all(){
        return $this->db->get($this->table);
    }

    public function find($payload){
        return $this->db->get_where($this->table, $payload);
    }
}