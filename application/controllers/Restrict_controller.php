<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Restrict_controller extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->library("session");
    }

	public function index()
	{
		if ($this->session->userdata("codigo_usuario")) {
			$data = array(
				"scripts" => array(
					"util.js",
					"restrict.js" 
				),
				"codigo_usuario" => $this->session->userdata("codigo_usuario")
			);
			$this->template->show("testee.php", $data);
		} else {
			$data = array(
				"scripts" => array(
					"util.js",
					"login.js" 
				)
			);
			$this->template->show("login_view.php", $data);
		}
	}

	public function logoff(){
		$this->session->sess_destroy();
		header("Location: " . base_url() . "restrict_controller");
	}

	public function ajax_login() {

		if (!$this->input->is_ajax_request()) {
			exit("Nenhum acesso de script direto permitido!");
		}
	
		$json = array();
		$json["status"] = 1;
		$json["error_list"] = array();
	
		$username = $this->input->post("username");
		$password = $this->input->post("password");
	
		if (empty($username)) {
			$json["status"] = 0;
			$json["error_list"]["#username"] = "Usuário não pode ser vazio!";
		} else {
			$this->load->model("usuario_model");
			$result = $this->usuario_model->get_usuario_data($username);
			if ($result) {
				$codigo_usuario = $result->codigo_usuario;
				$senha_usuario_hash = $result->senha_usuario_hash;
				if (password_verify($password, $senha_usuario_hash)) {
					$this->session->userdata("codigo_usuario", $codigo_usuario);
				} else {
					$json["status"] = 0;
				}
			} else {
				$json["status"] = 0;
			}
			if ($json["status"] == 0) {
				$json["error_list"]["#btn_login"] = "Usuário e/ou senha incorretos!";
			}
		}
		echo json_encode($json);
	}

	public function restrict_view(){
		$this->load->view('template/header');
		$this->load->view('template/scripts');
		$this->load->view("restrict_view");
		$this->load->view('template/footer');
	}
}