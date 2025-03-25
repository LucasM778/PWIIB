<?php
    
    echo $_GET["nome"];
    echo "<br/>";
    echo $_GET["Idade"];


?>


<?php
  $um = $_GET["1_numero"];
  $dois = $_GET["2_numero"];
  $res = $um + $dois;
 echo  $res; 

?>


<?php
    $nom = $_GET["Nome1"]; 
    echo "Olá, $nom";
 

?>
 

<?php
 $usu = "Lucas2";
 $sen = "abc123";
 


 if( $_POST["Usuario"] == $usu){

    echo "Usuario aceito";
  }
  else
  {
    echo "Usuario incorreto";
    
  }

  echo "<br/>";


  if( $_POST["Senha"] == $sen){

    echo "Senha aceita";
  }
  else
  {
    echo "Senha incorreto";
  }

?>