<?php   
    include "cabecalho.php";
    include "conexao.php";
?>
<div class="row">
    <div class="col-4 offset-4">
        <form action="salvar_disciplina.php" method="post">
            <br>
            <label>Nome da disciplina</label>
            <input name="nome" type="text" class="form-control" />
            <br />
            <button name="salvar_disciplina" type="submit" class="btn btn-primary">
                Salvar disciplina
            </button>
        </form>
    </div>
</div>


<?php include "rodape.php"; ?>