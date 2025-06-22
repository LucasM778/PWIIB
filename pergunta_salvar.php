<?php
include "conexao.php";
require_once "PerguntaRepository.php";
require_once 'AlternativaRepository.php';

$repo = new PerguntaRepository($conexao);
$repoAlt = new AlternativaRepository($conexao);

if (isset($_POST["salvar_pergunta"])) {

  
    $id_pergunta = $repo->Inserir($_POST['PERGUNTA'], $_POST['id_disciplina']);

 
    $alternativa1 = $_POST['alternativa1'];
    $alternativa2 = $_POST['alternativa2'];
    $alternativa3 = $_POST['alternativa3'];

    
    $correta = $_POST['correta'];

  
    $repoAlt->Inserir($id_pergunta, $alternativa1, $alternativa2, $alternativa3, $correta);

    header('location: perguntas.php?sucesso=cadastrado com sucesso');
} else {
    header('location: perguntas.php?erro=formulario inválido');
}
?>
