<?php

include "conexao.php";
require_once "disciplinaRepository.php";
$repo = new disciplinaRepository($conexao);

if( isset($_POST["ID"]) && isset($_POST['DISCIPLINA']) )
{
    $repo->Editar($_POST['DISCIPLINA'],$_POST['ID']);
    header('location: disciplina.php');
}
else
{
    header('location: disciplina.php');

}

?>