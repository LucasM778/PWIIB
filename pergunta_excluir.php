<?php
include "conexao.php";
require_once "PerguntaRepository.php";
require_once "AlternativaRepository.php";

$repo = new PerguntaRepository($conexao);
$repoAlt = new AlternativaRepository($conexao);

if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $referencias = $repo->buscarPorId($_GET["id"]);

    if ($referencias != null) {
       
        $repoAlt->excluirPorPergunta($_GET["id"]);

        $repo->Excluir($_GET["id"]);
    }

    header('location: perguntas.php?sucesso=Pergunta e alternativas excluídas');
} else {
    header('location: perguntas.php?erro=ID inválido');
}
?>
