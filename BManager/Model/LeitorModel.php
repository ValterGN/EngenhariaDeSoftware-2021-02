<?php

require_once("Connection.php");

class LeitorModel{
    private $codigo;
    private $nome;
    private $cpf;
    private $dataNasc;

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function setNascimento($dataNasc){
        $this->dataNasc = $dataNasc;
    }

    public function cadastraLeitor(){
        //echo("Entrou em LeitorModel/cadastraLeitor");
        //echo(" Nome: " . $this->nome);
        //echo(" CPF: " . $this->cpf);
        //echo(" Data: " . $this->dataNasc);

        $sql = "insert into Leitor (Nome, Cpf, DataNascimento) values ('".$this->nome."', '".$this->cpf."', '".$this->dataNasc."')";
        //echo("</br>SQL: " . $sql);

        $objConnection = new Connection();
        $objConnection->executaQuery($sql);
    }

    public function alteraLeitor(){
        //echo("Entrou em LeitorModel/alteraLeitor");
        //echo(" Codigo: " . $this->codigo);
        //echo(" Nome: " . $this->nome);
        //echo(" CPF: " . $this->cpf);
        //echo(" Data: " . $this->dataNasc);

        $sql = "update Leitor set nome = '".$this->nome."', cpf = '".$this->cpf."', dataNascimento = '".$this->dataNasc."' where id = ".$this->codigo;
        //echo("</br>SQL: " . $sql);
        
        $objConnection = new Connection();
        $objConnection->executaQuery($sql);
    }

    public function deletaLeitor(){
        //echo("Entrou em LeitorModel/deletaLeitor");
        //echo(" Codigo: " . $this->codigo);

        $sql = "delete from Leitor where id = ".$this->codigo;
        //echo("</br>SQL: " . $sql);
        
        $objConnection = new Connection();
        $objConnection->executaQuery($sql);
    }

    public function listaLeitores(){
        //echo("Entrou em LeitorModel/listaLeitores");

        $sql = "select *from Leitor";
        //echo("</br>SQL: " . $sql);
        
        $objConnection = new Connection();
        return $objConnection->retornaSelect($sql);
    }

}

?>