<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Entregador extends CI_Controller{

    public function index() {

        $this->load->model('EntregadorModel');
        
        $tabela = $this->EntregadorModel->SelecionaTodos();

        $dados = array(
            'tabela' => $tabela,
            'pagina' => 'entregador/index.php'
        );

        $this->load->view('index',$dados);
    }

    public function Cadastrar(){
        $dados = array(
            'titulo' => "Formulario de Cadastro",
            'pagina' => 'entregador/cadastrar.php'
        );

        $this->load->view('index',$dados);
       
    }

    public function login(){

        $dados = array(
            'pagina' => 'entregador/login.php'
        );

        $this->load->view('index',$dados);

    }

    public function Incluir() {
        $this->load->model('EntregadorModel');
        $this->EntregadorModel->Novo();

        redirect('entregador');
    }

    public function Alterar($codigo){
        $this->load->model('EntregadorModel');

        $where = array('cd_entregador' => $codigo);

        $resultado = $this->EntregadorModel->Selecionar($where);

        $dados = array(
            'titulo' => 'Alteração de Cadastro',
            'pagina' => 'entregador/alterar.php',
            'tabela' => $resultado
        );

        $this->load->view('index', $dados);
        
    }

    public function SalvarAlteracao(){

        $cd_entregador = $this->input->post('cdentregador');
        $nm_entregador = $this->input->post('nome');
        $dt_nascimento = $this->input->post('data');
        $ds_email = $this->input->post('email');
        $cep = $this->input->post('cep');
        $rua = $this->input->post('rua');
        $numero = $this->input->post('numero');
        $bairro = $this->input->post('bairro');
        $cidade = $this->input->post('cidade');
        $estado = $this->input->post('estado');


        $dados = array(
            'nm_entregador' => $nm_entregador,
            'dt_nascimento' => $dt_nascimento,
            'ds_email' => $ds_email,
            'cep' => $cep,
            'rua' => $rua,
            'Bairro' => $bairro,
            'numero' => $numero,
            'cidade' => $cidade,
            'estado' => $estado,

        );

        $where = array(

            'cd_entregador' => $cd_entregador

        );

        $this ->load->model('EntregadorModel');
        $this ->EntregadorModel-> SalvarAlteracao($where, $dados);

        redirect('entregador');

    }

    public function excluir($codigo){

        $this->load->model('EntregadorModel');
        $this->EntregadorModel->deletar($codigo);

        redirect('entregador');

    }
  
    
}

?>