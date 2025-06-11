<?php
include "conexao.php";
require_once "PerguntaRepository.php";
$repo = new PerguntaRepository($conexao);


if( isset($_POST["salvar_pergunta"]) )
{
    $repo->Inserir($_POST['PERGUNTA'], $_POST['id_disciplina']);
    header('location: perguntas.php?sucesso=cadastrado com sucesso');
}
else
{
    header('location: perguntas.php?erro=formulario inválido');
}

?>