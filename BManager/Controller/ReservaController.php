<?php
require_once("../Model/ReservaModel.php");

class ReservaController{
    
    /*
    * Construtor da classe. Chama o método a ser executado
    * $metodo: nome do método a ser executado
    * return = null
    */
    public function __construct($metodo){
        switch ($metodo) {
            case 'cadastraReserva':
                $this->cadastraReserva();
                break;
            case 'alteraReserva':
                $this->alteraReserva();
                break;
            case 'deletaReserva':
                $this->deletaReserva();
                break;
            case 'buscaReservas':
                $this->buscaReservas();
                break;    
            case 'editaLeitor':
                $this->buscaReservaUnico($metodo);
                break;
            default:
                $this->listaReservas();
                break;
        }
    }

    /*
    * Método para cadastrar uma reserva
    * return = null
    */    
    public function cadastraReserva(){
        $objReservaModel = new ReservaModel();
        $objReservaModel->setCodLeitor($_POST['txtCodLeitor']);
        $objReservaModel->setCodLivro1($_POST['txtCodLivro1']);
        if (isset($_POST['txtCodLivro2']) && $_POST['txtCodLivro2'] != null){
            $objReservaModel->setCodLivro2($_POST['txtCodLivro2']);
        }
        if (isset($_POST['txtCodLivro3']) && $_POST['txtCodLivro3'] != null){
            $objReservaModel->setCodLivro3($_POST['txtCodLivro3']);
        }
        $objReservaModel->setDataAbertura(date("Y-m-d"));
        $objReservaModel->setStatus("EM ESPERA");
        $objReservaModel->cadastraReserva();

        echo("<script>alert('Cadastro realizado com sucesso')</script>");
        $this->listaReservas();
    }

    /*
    * Método para alterar uma reserva
    * return = null
    */
    public function alteraReserva(){
        $objReservaModel = new ReservaModel();
        $objReservaModel->setCodigo($_POST['txtCodigo']);
        $objReservaModel->setCodLeitor($_POST['txtCodLeitor']);
        $objReservaModel->setCodLivro1($_POST['txtCodLivro1']);
        if (isset($_POST['txtCodLivro2']) && $_POST['txtCodLivro2'] != null){
            $objReservaModel->setCodLivro2($_POST['txtCodLivro2']);
        }
        if (isset($_POST['txtCodLivro3']) && $_POST['txtCodLivro3'] != null){
            $objReservaModel->setCodLivro3($_POST['txtCodLivro3']);
        }
        $objReservaModel->setDataAbertura(date("Y-m-d"));
        $objReservaModel->setStatus("EM ESPERA");
        $objReservaModel->alteraReserva();

        echo("<script>alert('Alteração realizado com sucesso')</script>");
        $this->listaReservas();
    }

    /*
    * Método para deletar uma reserva
    * return = null
    */
    public function deletaReserva(){
        $objReservaModel = new ReservaModel();
        $objReservaModel->setCodigo($_POST['txtCodigo']);
        $objReservaModel->deletaReserva();

        echo("<script>alert('Exclusão realizado com sucesso')</script>");
        $this->listaReservas();
    }

    /*
    * Método para listar as reservas
    * return = null
    */
    public function listaReservas(){
        $objReservaModel = new ReservaModel();
        $listaReservas = $objReservaModel->listaReservas();
        require("../View/ListarReservas.php");
    }

    /*
    * Método para listar as reserva com base numa condição de busca
    * return = null
    */
    public function buscaReservas(){
        $objReservaModel = new ReservaModel();
        $listaReservas = $objReservaModel->buscaReservas($_POST['txtBusca']);
        require("../View/ListarReservas.php");
    }

    /*
    * Método para buscar uma única reserva
    * return = null
    */
    public function buscaReservaUnico($metodo){
        $objReservaModel = new ReservaModel();
        $funcao = $metodo;
        $reserva = $objReservaModel->buscaReservaUnica($_POST['txtCodigo']);
        require("../View/ReservaCadastro.php");
    }

}

if (isset($_POST['funcao'])){
    $metodo = $_POST['funcao'];
} else {
    $metodo = "listaReservas";
}

$objController = new ReservaController($metodo);


?>