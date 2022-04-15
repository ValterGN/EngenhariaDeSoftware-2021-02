<head>
	<!-- Estilo da navbar utilizando bootstrap4 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<!-- Deixa navbar no modo responsivo -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="stylesheet" type="text/css"  href="../css/estilo.css">	
	<title>Listar Leitor</title>

</head>

<body>
<!--Inclusao do menu.php com include -->	
<?php include 'menu.php'; ?>
</body>


<legend id="txtListarLeitor">Leitores</legend>


<!--teste chamar busca de leitor controller -->




<!-- fim teste busca -->


<form action="LeitorController.php" method="POST">
	<center><input type="text" name="txtBusca" class="txtBusca"></input>
	<input type="text" name="funcao" id="funcao" value="buscaLeitores" hidden>
	<button type="submit" name="btnBuscaLeitor">Buscar</button>

</form>

<form action="../View/LeitorCRUD.php" method="POST" style="display: inline">
	<input type="text" name="funcao" id="funcao" value="insereLeitor" hidden>
	<button type="submit" name="btnInsereLeitor"> Inserir </button>
</form>

<br> <br>

<?php


echo"<table>
		<tr>
			<th>Código</th>	
			<th>Nome</th>
			<th>CPF</th>
			<th>Nascimento</th>
		
		
		
		</tr>";
	


while ($row = $listaLeitores->fetch_assoc()) {	
    echo "<tr>";
    echo "<td>" .$row["ID"]. "</td>".
		 "<td>" .$row["Nome"]. "</td>".
		 "<td>" .$row["CPF"]. "</td>".
		 "<td>" .$row["DataNascimento"]. "</td>".
	 
		/* "<td> $botaoEdit </td>".*/
		"<td style='background-color: white'> 
			<form action='../Controller/LeitorController.php' method='POST'> 
				<input type='text' name='funcao' id='funcao' value='crudAlteraLeitor' hidden> 
				<input type='text' name='txtCodigo' id='txtCodigo' value='".$row["ID"]."' hidden> 
				<button type='submit' class='botaoEditar'>  
					<i class='fa fa-pencil'></i> 
				</button>
			</form> 
		</td>

		<td style='background-color: white'>
			<form action='../Controller/LeitorController.php' method='POST'>
				<input type='text' name='funcao' id='funcao' value='crudExcluiLeitor' hidden>
				<input type='text' name='txtCodigo' id='txtCodigo' value='".$row["ID"]."' hidden> 
				<button type='submit' class='botaoExcluir'>
					<i class='fa fa-remove'></i>
				</button>
			</form>
		</td>";
		
		
	echo "</tr>";
}


		
	echo "</table>";
/*<?php echo $botaoEdit ?>*/
?>


