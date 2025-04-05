<?php

if(isset($_POST["login"])== true && empty($_POST["login"])== false){

    echo "O usuario é:".$_POST["login"];
}else
{
    echo "Usuario não existe";


}

if(isset($_POST["senha"])== true && empty($_POST["senha"])== false){

    echo "O senha é:".$_POST["senha"];
}else
{
    
    header("location: login.php?erro=Senha não pode estar em branco");


}


?>