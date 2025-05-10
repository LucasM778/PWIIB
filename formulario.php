<?php include "cabecalho.php"; ?>


<h1>Cadastro de Usuário</h1>

<form action="salvar_dados.php" method="post">
    <label>Email</label>
    <input type="email" name="login" value="" />
    <br />
    <label>Senha</label>
    <input type="password" name="senha" value="" />
    <br />
    <button type="submit">
        Logar
    </button>
</form>


<?php include "rodape.php"; ?>