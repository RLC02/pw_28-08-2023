<?php

define( 'SERVIDOR', 'localhost' );
define( 'USUARIO', 'root' );
define( 'SENHA', '' );
define( 'BANCO', 'projetoweb' );

class Conexao
 {

    protected $mysqli;

    public function __construct()
 {
        try {
            $this->conexaoMysql();
        } catch ( Exception $e ) {
            echo 'Banco não está conectado';
        }
    }

    public function conexaoMysql()
 {
        $this->mysqli = new mysqli( SERVIDOR, USUARIO, SENHA, BANCO );
    }

    public function setAgendamentos( $nome, $telefone, $origem, $data, $observacao )
 {
        $stmt = $this->mysqli->prepare( "INSERT INTO('nome' , 'telefone' , 'origem' , 'data', 'observacao') VALUES (?,?,?,?,?)" );
        $stmt->bind_param( 'sssss', $nome, $telefone, $origem, $data, $observacao );
        if ( $stmt->execute() == TRUE ) {
            return true;
        } else {
            return false;
        }
    }
}
?>