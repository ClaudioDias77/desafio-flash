<?php

class EntregadorModel extends CI_Model {

    
    public function SelecionaTodos() {

        $retorno = $this->db->get('entregador', 200);

        return $retorno->result();
    }
    
    public function Novo(){
        $campos = array(
            'nm_entregador' => $_POST['nome'],
            'dt_nascimento' => $_POST['data'],
            'ds_email'      => $_POST['email'],
            'cep'           => $_POST['cep'],
            'rua'           => $_POST['rua'],
            'numero'        => $_POST['numero'],
            'bairro'        => $_POST['bairro'],
            'cidade'        => $_POST['cidade'],
            'estado'        => $_POST['estado']

        );



        $this->db->insert('entregador',$campos);
    }

    public function Selecionar($where) {

        $retorno = $this->db->get_where('entregador', $where);
        return $retorno->result();
    }

    public function SalvarAlteracao($where, $dados){
        $this->db->update('entregador', $dados, $where);

        return;

    }

    public function deletar($codigoEntregador){
        
        $this->db->where('cd_entregador', $codigoEntregador );
        $this->db->delete('entregador');
       
    }
}


?>