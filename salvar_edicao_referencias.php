<?php

include "conexao.php";
require_once "referencias_Repository.php";
$repo = new referenciasRepository($conexao);

if( isset($_POST["ID"]) && isset($_POST['NOME']) )
{
    $repo->Editar($_POST['NOME'],$_POST['ID']);
    header('location: referencias.php');
}
else
{
    header('location: referencias.php');

}

?>