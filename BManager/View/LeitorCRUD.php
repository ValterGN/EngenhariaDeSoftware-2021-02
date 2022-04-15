<!--class LeitorCrud  -->


<head>
	<!-- Estilo da navbar utilizando bootstrap4 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<!-- Deixa navbar no modo responsivo -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	
	<link rel="stylesheet" type="text/css"  href="../css/estilo.css">	
	<title>Cadastro Leitores</title>

</head>

<body>
<?php include 'menu.php'; ?>
</body>

<?php

if (isset($_POST['funcao'])){
    $funcao = $_POST['funcao'];
}

?>

<form action="../Controller/LeitorController.php" method="POST" class="formulario">
    <legend id="txtTitulo">Cadastro de Leitores </legend>
    <input type="text" name="funcao" id="funcao" value="" hidden>
	
    <?php
        $valorNome = "";
        $valorCPF = "";
        $valorDataNasc = "";

        if($funcao != "insereLeitor"){
            echo('<label>Id: </label> <input type="text" name="txtCodigo" id="txtCodigo" value="'.$leitor["ID"].'" class="txt" disabled> <br>');
            $valorNome = $leitor["Nome"];
            $valorCPF = $leitor["CPF"];
            $valorDataNasc = $leitor["DataNascimento"];
        }
    ?>
        
    <label>Nome: </label> <input type="text" name="txtNome" id="txtNome" value="<?php echo($valorNome)?>" class="txt"> <br>
    <label>CPF: </label> <input type="text" name="txtCpf" id="txtCpf" value="<?php echo($valorCPF)?>" class="txt"> <br>
    <label>Nascimento: </label> <input type="date" name="txtDataNasc" value="<?php echo($valorDataNasc)?>" id="txtDataNasc" class="txt"> <br>

    <span <?php if($funcao != 'insereLeitor'){echo(" hidden");}?>>
        <button name="btnSalvar"  id="btnSalvar"  class="botao"> <i class="fa fa-check"></i> Salvar</button>
    </span>
    <span <?php if($funcao != 'crudAlteraLeitor'){echo(" hidden");}?>>
        <button name="btnAlterar" id="btnAlterar" class="botao"> <i class="fa fa-pencil"></i> Alterar</button>
    </span>
    <span <?php if($funcao != 'crudExcluiLeitor'){echo(" hidden");}?>>    
        <button name="btnExcluir" id="btnExcluir" class="botao"> <i class="fa fa-trash"></i> Excluir</button>
    </span>
</form>

<script>
    document.getElementById("btnSalvar").onclick = function() {modificaFuncao("cadastraLeitor")};
    document.getElementById("btnAlterar").onclick = function() {modificaFuncao("alteraLeitor")};
    document.getElementById("btnExcluir").onclick = function() {modificaFuncao("deletaLeitor")};

    function modificaFuncao(valor){
        document.getElementById("funcao").value = valor;
        document.getElementById("txtCodigo").disabled = false;

    }
</script>
