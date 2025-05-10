<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PWII B</title>
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link href="estilo.css" rel="stylesheet" />
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      
     <img src="/pwiib/imagens/bootstrap-logo.svg" alt="Bootstrap" width="30" height="24" />
      Projeto PW 2 Turma B
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            php
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="variavel.php">Variável</a></li>
            <li><a class="dropdown-item" href="if.php">If</a></li>
            <li><a class="dropdown-item" href="while.php">While</a></li>
            <li><a class="dropdown-item" href="for.php">For</a></li>
            <li><a class="dropdown-item" href="switch.php">Switch</a></li>
            <li><a class="dropdown-item" href="array.php">Array/Vetor</a></li>
          </ul>
        </li>
       
      </ul>
     
    </div>
  </div>
</nav>

<h1>Array</h1>
<p>
São variaveis que podem guardar uma lista de valores 
identificados por indice ou chave.
</p>
<pre>
  $frutas = ["banana", "Maçã" , "Abacaxi", "mamão", 10, true, array(), [] ];
  //ou 
  $frutas = array("banana", "Maçã" , "Abacaxi", "mamão");
</pre>
<?php           //0       1         2         3
  $frutas = ["banana", "Maçã" , "Abacaxi", "mamão" ];
  echo "<br>$frutas[2]";

  for($i = 0; $i < count($frutas); $i++ )
  {
      echo "<br> $frutas[$i]";
  }

  array_push($frutas,"Limão");

  array_push($frutas, rand(1,75) );

  for($i = 0; $i < count($frutas); $i++ )
  {
      echo "<br> $frutas[$i]";
  }


  $b = array( rand(1,15), rand(1,15), rand(1,15), rand(1,15), rand(1,15) );
  
  $i = [];
  for($j = 0; $j<5; $j++){
    $i[$j] = rand(16,30); 
  }

  $n = [];
  for($j = 0; $j<5; $j++){
    $n[$j] = rand(31,45); 
  }

  $g = array();
  for($j = 0; $j<5; $j++){
    $g[$j] = rand(46,60); 
  }

  $o = array();

  for($j = 0; $j<5; $j++){
    $o[$j] = rand(61,75); 
  }
?>




<style>
  table, tr, td{
    border: 1px solid;
    font-size:50px;
    padding:20px;
  }

  </style>


<table border="5">
    <tr>
      <td>B</td>
      <td>I</td>
      <td>N</td>
      <td>G</td>
      <td>O</td>
    </tr>
    <?php
      for($ifor=0; $ifor < 5; $ifor++)
      {
        echo "<tr>";
        echo "<td>$b[$ifor]</td>";  
        echo "<td>$i[$ifor]</td>";
        echo "<td>$n[$ifor]</td>";
        echo "<td>$g[$ifor]</td>";
        echo "<td>$o[$ifor]</td>";
        echo "</tr>";
      }
    ?>

</table>

<h1>Sorteio</h1>
<?php

$Sorteio = array(12,7,3,9,5,2,4,1,11,8,13,6,14,15,10);

for ($i=0 ; $i < 15 ; $i++  ) 
{ 
    echo "<h2>Rodada ".($i+1)." número sorteado é : $Sorteio[$i]</h2>";
}


?>



<?php include "rodape.php"; ?>