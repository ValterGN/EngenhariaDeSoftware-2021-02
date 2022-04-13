<?php
require_once("../Model/LeitorModel.php");

class LeitorController{
    
    /*
    * Construtor da classe. Chama o método a ser executado
    * $metodo: nome do método a ser executado
    * return = null
    */
    public function __construct($metodo){
        switch ($metodo) {
            case 'cadastraLeitor':
                $this->cadastraLeitor();
                break;
            case 'alteraLeitor':
                $this->alteraLeitor();
                break;
            case 'deletaLeitor':
                $this->deletaLeitor();
                break;
            case 'listaLeitores':
                $this->listaLeitores();
                break;
            default:
                $this->listaLeitores();
                break;
        }
    }

    /*
    * Método para cadastrar um leitor
    * return = null
    */
    public function cadastraLeitor(){
        //echo("chegou no cadastro de leitor");
        $objLeitorModel = new LeitorModel();
        $objLeitorModel->setNome($_POST['txtNome']);
        $objLeitorModel->setCpf($_POST['txtCpf']);
        $objLeitorModel->setNascimento($_POST['txtDataNasc']);
        $objLeitorModel->cadastraLeitor();
        echo("<script>alert('Cadastro realizado com sucesso')</script>");
        $this->listaLeitores();
    }

    /*
    * Método para alterar um leitor
    * return = null
    */
    public function alteraLeitor(){
        //echo("chegou na alteração de leitor");
        $objLeitorModel = new LeitorModel();
        $objLeitorModel->setCodigo($_POST['txtCodigo']);
        $objLeitorModel->setNome($_POST['txtNome']);
        $objLeitorModel->setCpf($_POST['txtCpf']);
        $objLeitorModel->setNascimento($_POST['txtDataNasc']);
        $objLeitorModel->alteraLeitor();
        echo("<script>alert('Alteração realizado com sucesso')</script>");
        $this->listaLeitores();
    }

    /*
    * Método para deletar um leitor
    * return = null
    */
    public function deletaLeitor(){
        //echo("chegou na remoção de leitor");
        $objLeitorModel = new LeitorModel();
        $objLeitorModel->setCodigo($_POST['txtCodigo']);
        $objLeitorModel->deletaLeitor();
        echo("<script>alert('Exclusão realizado com sucesso')</script>");
        $this->listaLeitores();
    }

    /*
    * Método para listar os leitores
    * return = null
    */
    public function listaLeitores(){
        //echo("chegou na listagem de leitores");
        $objLeitorModel = new LeitorModel();
        $listaLeitores = $objLeitorModel->listaLeitores();
        require("../View/ListarLeitor.php");
    }

}

if (isset($_POST['funcao'])){
    $metodo = $_POST['funcao'];
} else {
    $metodo = "listaLeitores";
}

$objController = new LeitorController($metodo);


?>