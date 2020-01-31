<?php

class teste_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_produtos(){
        $query = $this->db->get('usuarios');
        return $query->result();
    }

    public function deletar($codigo_usuario) {
        $this->db->where('codigo_usuario', $codigo_usuario);
        return $this->db->delete('usuarios');
    }
    
}
