<?php
include "conexao.php";
require_once "referencias_Repository.php";
$repo = new referenciasRepository($conexao);

if( isset($_GET["id"]) && !empty($_GET["id"]) )
{
    $referencias = $repo->buscarPorId($_GET["id"]);
    if($referencias != null)
    {
        $repo->excluirreferencias($_GET["id"]);
    }
    header('location: referencias.php');
}
else
{
    header('location: referencias.php');
}

?>