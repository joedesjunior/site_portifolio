<?php

class usuario_model extends CI_model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_usuario_data($login_usuario) {
        $this->db
             ->SELECT("codigo_usuario, senha_usuario_hash, nome_completo_usuario, email_usuario")
             ->FROM("usuarios")
             ->WHERE("login_usuario", $login_usuario);
        $result = $this->db->get();

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return NULL;
        }
    }

    public function inserir_usuario_no_banco(){
        
    }
} 