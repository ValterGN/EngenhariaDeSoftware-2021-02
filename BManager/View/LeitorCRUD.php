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

<form action="../Controller/LeitorController.php" method="POST" class="formulario">
    <legend id="txtTitulo">Cadastro de Leitores </legend>
	
    <label>Id: </label> <input type="text" name="txtCodigo" id="txtCodigo" class="txt"> <br>
    <label>Nome: </label> <input type="text" name="txtNome" id="txtNome" class="txt"> <br>
    <label>CPF: </label> <input type="text" name="txtCpf" id="txtCpf" class="txt"> <br>
    <label>Nascimento: </label> <input type="date" name="txtDataNasc" id="txtDataNasc" class="txt"> <br>

    <button name="btnSalvar"  id="btnSalvar"  class="botao"> <i class="fa fa-check"></i> Salvar</button>
    <button name="btnAlterar" id="btnAlterar" class="botao"> <i class="fa fa-pencil"></i> Alterar</button>
    <button name="btnExcluir" id="btnExcluir" class="botao"> <i class="fa fa-trash"></i> Excluir</button>
</form>

<script>
    document.getElementById("btnSalvar").onclick = function() {modificaFuncao("cadastraLeitor")};
    document.getElementById("btnAlterar").onclick = function() {modificaFuncao("alteraLeitor")};
    document.getElementById("btnExcluir").onclick = function() {modificaFuncao("deletaLeitor")};

    function modificaFuncao(valor){
        document.getElementById("funcao").value = valor;

    }
</script>
