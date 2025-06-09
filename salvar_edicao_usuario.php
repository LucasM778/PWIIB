<?php

include "conexao.php";
require_once "UsuarioRepository.php";
$repo = new UsuarioRepository($conexao);

if( isset($_POST["ID"]) && isset($_POST['LOGIN']) )
{
    $repo->Editar($_POST['LOGIN'],$_POST['ID'],$_POST['ATIVO']);
    header('location: usuarios.php');
}
else
{
    header('location: usuarios.php');

}

?>