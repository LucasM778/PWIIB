<?php

include "conexao.php";
require_once "disciplinaRepository.php";
$repo = new disciplinaRepository($conexao);


if( isset($_POST["ID"]) && isset($_POST['NOME']) )
{
   
    $repo->Editar($_POST['NOME'],$_POST['ID'],$_POST['ATIVO']);
    header('location: disciplina.php');
}
else
{
    header('location: disciplina.php');

}

?>