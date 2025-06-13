<?php
include "conexao.php";
require_once "PerguntaRepository.php";
require_once 'AlternativaRepository.php';
$repo = new PerguntaRepository($conexao);
$repoAlt = new AlternativaRepository($conexao);


if( isset($_POST["salvar_pergunta"]) )
{
    $repo->Inserir($_POST['PERGUNTA'], $_POST['id_disciplina']);
    $repoAlt->Inserir($_POST['alternativa1'], $_POST['alternativa2'],$_POST['alternativa2'],
       $_POST['alternativa3'],$_POST['A1'],$_POST['A2'],$_POST['A3']);
    header('location: perguntas.php?sucesso=cadastrado com sucesso');
}
else
{
    header('location: perguntas.php?erro=formulario inválido');
}



?>