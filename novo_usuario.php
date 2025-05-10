<?php   
    include "cabecalho.php";
    include "conexao.php";
?>
<div class="row">
    <div class="col-4 offset-4">
        <form action="salvar_usuario.php" method="post">
            <br>
            <label>Login</label>
            <input name="login" type="text" class="form-control" />
            <br/>
            <label>Senha</label>
            <input name="senha" type="password" class="form-control" />
            <br />
            <input type="checkbox" name="ativo" value="1" />
            Usuário Ativo
            <br />
            <br />
            <button name="salvar_usuario" type="submit" class="btn btn-primary">
                Salvar usuário
            </button>
        </form>
    </div>
</div>


<?php include "rodape.php"; ?>