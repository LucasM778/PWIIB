<?php
include "conexao.php";
require_once "disciplinaRepository.php";
$repo = new disciplinaRepository($conexao);

if( isset($_GET["id"]) && !empty($_GET["id"]) )
{
    $disciplina = $repo->buscarPorId($_GET["id"]);
    if($disciplina != null)
    {
        $repo->excluirdisciplina($_GET["id"]);
    }
    header('location: disciplina.php');
}
else
{
    header('location: disciplina.php');
}

?>