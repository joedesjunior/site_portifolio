<?php 

class Teste_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function index()
    {
        $this->load->model('teste_model', '', TRUE);
        $dados['usuarios'] = $this->teste_model->get_produtos();
        $this->load->view('teste_view', $dados);
    }


    function excluir($codigo_usuario) {
        $this->load->model('teste_model');
        if ($this->teste_model->deletar($codigo_usuario)) {
            redirect('teste_controller/teste_view');
        } else {
            log_message('error', 'Erro ao deletar...');
        }
    }
}