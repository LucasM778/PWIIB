<?php
include "conexao.php";
require_once "disciplinaRepository.php";
$repo = new disciplinaRepository($conexao);

if( isset($_GET["id"]) && !empty($_GET["id"]) )
{
    $discipina = $repo->buscarPorId($_GET["id"]);
    if($discipina != null)
    {
        $repo->excluirDisciplina($_GET["id"]);
    }
    header('location: disciplinas.php');
}
else
{
    header('location: disciplinas.php');
}

?>