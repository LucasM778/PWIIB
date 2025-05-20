<?php

include "conexao.php";
require_once "disciplinaRepository.php";
$repo = new disciplinaRepository($conexao);


if( isset($_POST["salvar_disciplina"]) )
{
    $ativo = isset( $_POST['ativo'] ) ? $_POST['ativo'] : false ;
    $repo->Inserir($_POST['NOME'],$_POST['senha'],$ativo);
    header('location: disciplina.php');
}
else
{
    header('location: disciplina.php');

}

?>