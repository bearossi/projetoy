<?php

class Model extends CI_Model {
    public function insert(Usuario $usu){
        $this->db->insert('Usuario',$usu); //insere registro no bd
        }
    
    public function searchAll(){ 
        $query = $this->db->query("Select * from Usuario"); //User é o nome da tabela
        return $query->result();
    }
    
    
}