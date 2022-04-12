<form action="../Controller/LeitorController.php" method="POST">
    <input type="text" name="funcao" id="funcao" value="nada" hidden>

    <label>Id: </label> <input type="text" name="txtCodigo" id="txtCodigo"> <br>
    <label>Nome: </label> <input type="text" name="txtNome" id="txtNome"> <br>
    <label>CPF: </label> <input type="text" name="txtCpf" id="txtCpf"> <br>
    <label>Data de nascimento: </label> <input type="date" name="txtDataNasc" id="txtDataNasc"> <br>

    <button name="btnSalvar" id="btnSalvar">Salvar</button>
    <button name="btnAlterar" id="btnAlterar">Alterar</button>
    <button name="btnExcluir" id="btnExcluir">Excluir</button>

</form>

<script>
    document.getElementById("btnSalvar").onclick = function() {modificaFuncao("cadastraLeitor")};
    document.getElementById("btnAlterar").onclick = function() {modificaFuncao("alteraLeitor")};
    document.getElementById("btnExcluir").onclick = function() {modificaFuncao("deletaLeitor")};

    function modificaFuncao(valor){
        document.getElementById("funcao").value = valor;

    }
</script>