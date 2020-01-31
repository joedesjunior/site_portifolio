<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller {

	public function index()
	{
		$data = array(
			"scripts" => array(
				"owl.carousel.min.js",
				"cbpAnimatedHeader.js",
				"theme-scripts.js"
			),
			"codigo_usuario" => $this->session->userdata("codigo_usuario")
		);
		$this->template->show("home_view.php", $data);
	}
	
}
