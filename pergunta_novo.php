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
            <select name="id_disciplina" class="form-control">
                <?php
                    require_once 'AlternativaRepository.php';
                    require_once 'DisciplinaRepository.php';
                    $alt = new AlternativaRepository($conexao);
                    $repo = new DisciplinaRepository($conexao);

                    foreach ($repo->buscarTodos() as $item) {
                        echo "<option value='$item[ID]'> $item[DISCIPLINA] </option>";
                    }

                    foreach ($alt->buscarTodos() as $quest) {
                        echo "<option value ='$quest[ALTERNATIVA]'> $quest[ID] </option>"; 
                    }
                ?>
            </select>
            <br>

            <label>Alternativas</label>
            <br><br>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="correta" value="1" id="alt1">
                <input type="text" name="alternativa1" class="form-control" placeholder="Alternativa 1" id="A1">
                <label class="form-check-label" for="alt1">Marcar como correta</label>
            </div>
            <br>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="correta" value="2" id="alt2">
                <input type="text" name="alternativa2" class="form-control" placeholder="Alternativa 2" id="A2">
                <label class="form-check-label" for="alt2">Marcar como correta</label>
            </div>
            <br>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="correta" value="3" id="alt3">
                <input type="text" name="alternativa3" class="form-control" placeholder="Alternativa 3" id="A3">
                <label class="form-check-label" for="alt3">Marcar como correta</label>
            </div>
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
