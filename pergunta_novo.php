<?php   
    include "cabecalho.php";
    include "conexao.php";
?>
<div class="row">
    <div class="col-6 offset-3">
        <div class="card mt-3">
            <div class="card-header">
                Cadastro de perguntas
            </div>
            <div class="card-body">
        <form action="pergunta_salvar.php" method="post">
            
            <label>Pergunta</label>
            <textarea name="PERGUNTA" class="form-control"></textarea>
            <br/>
            <label>Disciplina</label>
            <select name="id_disciplina" class="form-control" >
                <?php
                    require_once 'DisciplinaRepository.php';
                    $repo = new DisciplinaRepository($conexao);

                    foreach ($repo->buscarTodos() as $item  ) {
                        echo "<option value='$item[ID]'> $item[DISCIPLINA] </option>";
                    }
                ?>
            </select><br>

            <label>Alternativas</label>
            <br><br>
                    <input type="text" name="alternativa1" class="form-control" placeholder="Alternativa 1" id="A1">
                    <br>
                    <input type="text" name="alternativa2" class="form-control" placeholder="Alternativa 2" id="A2">
                    <br>
                    <input type="text" name="alternativa3" class="form-control" placeholder="Alternativa 3" id="A3">
                    <br>

                
            <br>
            <button name="salvar_pergunta" type="submit" class="btn btn-primary">
                Salvar
            </button>
        </form>
</div>
</div>
    </div>
</div>


<?php include "rodape.php"; ?>