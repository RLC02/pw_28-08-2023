<?php

class ControllerAgendamentos
 {

    private $agendamentos;

    public function __construct()
 {
        $this->agendamentos = new Agendamentos();
        $this->incluir();
    }

    private function incluir()
 {
        $this->agendamentos->setNome( $_POST[ 'txtNome' ] );
        $this->agendamentos->setTelefone( $_POST[ 'txtEndereco' ] );
        $this->agendamentos->setOrigem( $_POST[ 'txtOrigem' ] );
        $this->agendamentos->setData_Contato( $_POST[ 'txtData' ] );
        $this->agendamentos->setObservacao( $_POST[ 'txtObservacao' ] );
    }
}

?>