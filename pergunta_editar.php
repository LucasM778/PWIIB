<?php
include "conexao.php";
require_once "PerguntaRepository.php";
require_once "AlternativaRepository.php";
include "cabecalho.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $repo = new PerguntaRepository($conexao);
    $repoAlt = new AlternativaRepository($conexao);

    $PERGUNTA = $repo->buscarPorId($_GET['id']);
    $alternativas = $repoAlt->buscaPergunta($_GET['id']);  // Busca as alternativas dessa pergunta
} else {
    header('location: perguntas.php');
    exit;
}
?>

<div class="row">
    <div class="col-6 offset-3">
        <div class="card">
            <div class="card-header">Editar Pergunta e Alternativas</div>
            <div class="card-body">
                <form action="pergunta_salvar_edicao.php" method="post">
                    <label>ID da Pergunta</label>
                    <input type="text" value="<?php echo $PERGUNTA['ID']; ?>" class="form-control" name="ID" readonly />
                    <br/>

                    <label>ID Disciplina</label>
                    <input type="text" value="<?php echo $PERGUNTA['ID_DISCIPLINA']; ?>" class="form-control" name="ID_DISCIPLINA" readonly />
                    <br/>

                    <label>Pergunta</label>
                    <input type="text" value="<?php echo $PERGUNTA['PERGUNTA']; ?>" class="form-control" name="NOME" />
                    <br/>

                    <label>Alternativas</label>
                    <?php
                    $i = 1;
                    foreach ($alternativas as $alt) {
                        ?>
                        <div class="form-check">
                            <input type="hidden" name="alt_id_<?php echo $i; ?>" value="<?php echo $alt['ID']; ?>">
                            <input type="text" name="alt_<?php echo $i; ?>" class="form-control" value="<?php echo $alt['ALTERNATIVA']; ?>">
                            <input class="form-check-input mt-2" type="radio" name="correta" value="<?php echo $i; ?>"
                                <?php echo ($alt['CORRETA'] ? "checked" : ""); ?>>
                            <label class="form-check-label">Marcar como correta</label>
                        </div>
                        <br/>
                        <?php
                        $i++;
                    }
                    ?>
                    <br/>

                    <button class="btn btn-primary" type="submit">Salvar Alterações</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "rodape.php"; ?>
