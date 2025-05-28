<?php   
    include "cabecalho.php";
    include "conexao.php";
?>
<div class="row">
    <div class="col-4 offset-4">
        <form action="referencias_salvar.php" method="post">
            <br>
            <label>Nome</label>
            <input name="nome" type="text" class="form-control" />
        
            <br />
            <br />
            <button name="referencias_salvar" type="submit" class="btn btn-primary">
                Salvar referencias
            </button>
        </form>
    </div>
</div>


<?php include "rodape.php"; ?>