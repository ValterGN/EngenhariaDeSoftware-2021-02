<?php

require_once("Connection.php");

class ReservaModel{
    private $codigo;
    private $codLeitor;
    private $codLivro1;
    private $codLivro2;
    private $codLivro3;
    private $status;
    private $dataAbertura;

    public function __construct(){
        $this->codLivro1 = "null";
        $this->codLivro2 = "null";
        $this->codLivro3 = "null";
        $this->qtdeLivros = 0;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    public function setCodLeitor($codLeitor){
        $this->codLeitor = $codLeitor;
    }

    public function setCodLivro1($codLivro1){
        $this->codLivro1 = $codLivro1;
    }

    public function setCodLivro2($codLivro2){
        $this->codLivro2 = $codLivro2;
    }

    public function setCodLivro3($codLivro3){
        $this->codLivro3 = $codLivro3;
    }

    public function setStatus($status){
        $this->status = $status;
    }

    public function setDataAbertura($data){
        $this->dataAbertura = $data;
    }

    /*
    * Método para cadastrar uma reserva
    * return = null
    */
    public function cadastraReserva(){


        $sql = "insert into Reserva (ID_Leitor, ID_Livro1, ID_Livro2, ID_Livro3, status, dataAbertura) values (".$this->codLeitor.", ".$this->codLivro1.", ".$this->codLivro2.", ".$this->codLivro3.",'".$this->status."', '".$this->dataAbertura."')";
        //echo("</br>SQL: " . $sql);

        $objConnection = new Connection();
        $objConnection->executaQuery($sql);
    }

    /*
    * Método para alterar uma reserva
    * return = null
    */
    public function alteraReserva(){

        $sql = "update Reserva set ID_Leitor = ".$this->codLeitor.", ID_Livro1 = ".$this->codLivro1.", ID_Livro2 = ".$this->codLivro2.", ID_Livro3 = ".$this->codLivro3.", status = '".$this->status."', dataAbertura = '".$this->dataAbertura."' where ID = ".$this->codigo;

        //echo("</br>SQL: " . $sql);

        $objConnection = new Connection();
        $objConnection->executaQuery($sql);
    }

    /*
    * Método para deletar uma reserva
    * return = null
    */
    public function deletaReserva(){

        $sql = "delete from Reserva where ID = ".$this->codigo;
        //echo("</br>SQL: " . $sql);
        
        $objConnection = new Connection();
        $objConnection->executaQuery($sql);
    }

    /*
    * Método para listar as reservas
    * retorna uma lista de reservas
    */
    public function listaReservas(){

        $sql = "Select Reserva.ID, Leitor.Nome, Reserva.status, Reserva.dataAbertura from Reserva join Leitor on Reserva.ID_Leitor = Leitor.id";
        
        $objConnection = new Connection();
        return $objConnection->retornaSelect($sql);
    }

    /*
    * Método para listar as reserva com base numa condição de busca
    * $condicaoBusca: condição utilizada na busca
    * retorna uma lista de reservas
    */
    public function buscaReservas($condicaoBusca){

        $sql = "Select Reserva.ID, Leitor.Nome, Reserva.status, Reserva.dataAbertura 
        from Reserva join Leitor on Reserva.ID_Leitor = Leitor.id
        where Reserva.ID = ".$condicaoBusca;
        //echo("</br>SQL: " . $sql);
        
        $objConnection = new Connection();
        return $objConnection->retornaSelect($sql);
    }

    /*
    * Método para buscar uma única reserva
    * codigo: código da reserva a ser recuperada
    * retorna uma reserva
    */
    public function buscaReservaUnica($codigo){
        $sql = "select *from Reserva where ID = ".$codigo;
        
        $objConnection = new Connection();
        $retorno = $objConnection->retornaSelect($sql);
        return $retorno->fetch_assoc();
    }

}

?>