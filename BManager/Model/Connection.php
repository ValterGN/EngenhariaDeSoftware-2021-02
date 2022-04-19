<?php

class Connection{
    private $serverName = "localhost";
    private $userName = "root";
    private $password = "";
    private $db = "BD_BMnager";
    private $conn = null;   

    /*
    * Método para abrir uma conexão com o banco de dados
    * return = null
    */
    private function abreConexao(){
        if ($this->conn==null){
            $this->conn = new mysqli($this->serverName , $this->userName ,$this->password ,$this->db);
            //echo "conexão feita com sucesso";
        }
        if (! $this->conn){
            //die("fallhou a conexão:" .$conn->connect_error);
        }    
    
    }

    /*
    * Método para encerrar uma conexão com o banco de dados
    * return = null
    */
    private function encerraConexao(){
        $this->conn->close();
    }

    /*
    * Método para executar uma query que não retorna dados
    * $sql: query a ser executada
    * return = null
    */
    public function executaQuery($sql){
        $this->abreConexao();
        $this->conn->query($sql);
        $this->encerraConexao();
    }

    /*
    * Método para executar uma query que retorna dados
    * $sql: query a ser executada
    * retorna o resultado da consulta
    */
    public function retornaSelect($sql){
        $this->abreConexao();
        $resultado = $this->conn->query($sql);
        $this->encerraConexao(); 
        
        return $resultado;
    }
}

?>
