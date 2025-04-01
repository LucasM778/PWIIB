<?php

if(isset($_POST["email"])== true && empty($_POST["email"])== false){

    echo "O email é:".$_POST["email"];
}else
{
    echo "Email não existe";


}

if(isset($_POST["senha"])== true && empty($_POST["senha"])== false){

    echo "O senha é:".$_POST["senha"];
}else
{
    
    header("location: login.php?erro=Senha não pode estar em branco");


}


?>