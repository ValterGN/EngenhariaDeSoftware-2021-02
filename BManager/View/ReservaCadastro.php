<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Estilo da navbar utilizando bootstrap4 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<!-- Deixa navbar no modo responsivo -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="stylesheet" type="text/css"  href="../css/estilo.css">	
	<title>Reserva Cadastro</title>
</head>



<body>
	<?php include 'menu.php'; ?><!--INCLUSAO navbar-->
	<br><br>
    <center><h2>Cadastro de Reservas</h2></center><br>

    <?php
    if ($metodo == "editaLeitor"){
        $valorCodigo = $reserva['ID'];
        $codigoLeitor = $reserva['ID_Leitor'];
        $codigoLivro1 = $reserva['ID_Livro1'];
        $codigoLivro2 = $reserva['ID_Livro2'];
        $codigoLivro3 = $reserva['ID_Livro3'];

    } else {
        $valorCodigo = "";
        $codigoLeitor = "";
        $codigoLivro1 = "";
        $codigoLivro2 = "";
        $codigoLivro3 = "";
    }
    
    ?>

    <form action="../Controller/ReservaController.php" method="POST" class="formularioReserva">
        <input type="text" name="txtCodigo" id="txtCodigo" value="<?php echo($valorCodigo);?>" hidden>
        <input type="text" name="funcao" id="funcao" value="" hidden>
        <label>Código do leitor: </label> <input type="text" name="txtCodLeitor" value="<?php echo($codigoLeitor);?>" class="txtReserva">
        <label>Livro 1: <input type="text" name="txtCodLivro1" value="<?php echo($codigoLivro1);?>" class="txtReserva"></label>
        <label>Livro 2: <input type="text" name="txtCodLivro2" value="<?php echo($codigoLivro2);?>" class="txtReserva"> </label>
        <label>Livro 3: <input type="text" name="txtCodLivro3" value="<?php echo($codigoLivro3);?>" class="txtReserva"> </label>
    
        <br><br>

        <button class="botao" type="submit" name="btnSalvar" id="btnSalvar" <?php if($funcao == 'editaLeitor'){echo(" hidden");}?>>Cadastrar</button>
        <button class="botao" type="submit" name="btnAlterar" id="btnAlterar" <?php if($funcao != 'editaLeitor'){echo(" hidden");}?>>Alterar</button>
        <button class="botao" type="submit" name="btnExcluir" id="btnExcluir" <?php if($funcao != 'editaLeitor'){echo(" hidden");}?>>Excluir</button>
        <button class="botao" type="submit" hidden>Concluir</button>
    

    </form>
</body>
</html>


<script>
    document.getElementById("btnSalvar").onclick = function() {modificaFuncao("cadastraReserva")};
    document.getElementById("btnAlterar").onclick = function() {modificaFuncao("alteraReserva")};
    document.getElementById("btnExcluir").onclick = function() {modificaFuncao("deletaReserva")};

    function modificaFuncao(valor){
        document.getElementById("funcao").value = valor;

    }
</script>
