<?php   
    include "cabecalho.php";
    include "conexao.php";
?>
<div class="row">
    <div class="col-4 offset-4">
        <form action="salvar_referencias.php" method="post">
            <br>
            <label>Nome da referencia </label>
            <input name="nome" type="text" class="form-control" />
            <br />
            <button name="salvar_referencias" type="submit" class="btn btn-primary">
                Salvar referencias
            </button>
        </form>
    </div>
</div>


<?php include "rodape.php"; ?>