<?php

if (isset($_GET['nome'])) {
  

    
    echo $_GET["nome"];
    echo "<br/>";
    echo $_GET["Idade"];} 
   

  echo"<br/><br/>";
?>


<?php
  if (isset($_GET['1_numero'])) {
  $um = $_GET["1_numero"];
  
  $dois = $_GET["2_numero"];
  $res = $um + $dois;
 echo  $res; }

 echo"<br/><br/>";
?>


<?php
if (isset($_GET['Nome1'])) {
  $nom1 = $_GET['Nome1'];

    echo "Olá $nom1";
}

?>
 

<?php
 
 $usu = "Lucas2";
 $sen = "abc123";
 

 if (isset($_POST['Usuario'])) {
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
}
?>