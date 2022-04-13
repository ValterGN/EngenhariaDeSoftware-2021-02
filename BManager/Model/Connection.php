<?php

class Connection{
    private $serverName = "localhost";
    private $userName = "root";
    private $password = "";
    private $db = "BD_BMnager";
    private $conn = null;   

    private function abreConexao(){
        if ($this->conn==null){
            $this->conn = new mysqli($this->serverName , $this->userName ,$this->password ,$this->db);
            //echo "conexão feita com sucesso";
        }
        if (! $this->conn){
            //die("fallhou a conexão:" .$conn->connect_error);
        }    
    
    }

    private function encerraConexao(){
        $this->conn->close();
    }

    public function executaQuery($sql){
        $this->abreConexao();
        $this->conn->query($sql);
        $this->encerraConexao();
    }

    public function retornaSelect($sql){
        $this->abreConexao();
        $resultado = $this->conn->query($sql);
        $this->encerraConexao(); 
        
        return $resultado;
    }
}

?>
