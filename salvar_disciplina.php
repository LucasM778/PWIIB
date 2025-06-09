<?php

include "conexao.php";
require_once "disciplinaRepository.php";
$repo = new disciplinaRepository($conexao);


if( isset($_POST["salvar_disciplina"]) )
{
   
    $repo->Inserir($_POST['nome']);
    header('location: disciplina.php');
}
else
{
    header('location: disciplina.php');

}

?>