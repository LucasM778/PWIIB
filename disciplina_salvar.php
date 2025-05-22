<?php

include "conexao.php";
require_once "disciplinaRepository.php";
$repo = new disciplinaRepository($conexao);


if( isset($_POST["disciplina_salvar"]) )
{
    $ativo = isset( $_POST['ativo'] ) ? $_POST['ativo'] : false ;
    $repo->Inserir($_POST['nome'],$ativo);
    header('location: disciplinas.php');
}
else
{
    header('location: disiciplinas.php');

}

?>