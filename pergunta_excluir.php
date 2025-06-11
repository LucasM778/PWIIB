<?php
include "conexao.php";
require_once "PerguntaRepository.php";
$repo = new perguntaRepository($conexao);

if( isset($_GET["id"]) && !empty($_GET["id"]) )
{
    $referencias = $repo->buscarPorId($_GET["id"]);
    if($referencias != null)
    {
        $repo->Excluir($_GET["id"]);
    }
    header('location: perguntas.php');
}
else
{
    header('location: perguntas.php');
}

?>