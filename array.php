<?php include "cabecalho.php" ?>

<h1>Página do Array</h1>
<P>
  São variaveis que podem guardar uma lista de valores
  identificados por indice ou chave.
</P>
<pre>
  $frutas = ["banana", "Maçã", "Abacaxi", "mamão", 10, true, array(), []];
  //ou
  $frutas = array("banana", "Maçã", "Abacaxi", "mamão");
</pre>

<?php
  $frutas = array("banana", "Maçã", "Abacaxi", "mamão");
  echo "<br> $frutas[2] ";
  
  array_push($frutas, "Limão");
  array_push($frutas, rand(1,75));
  for($i = 0; $i < count($frutas); $i++){
    echo "<br> $frutas[$i]";



 
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

  }
  
?>

<style>
   table, tr, td{
     border: 1px solid;
     font-size:50px;
     padding:20px;
   }
 
   </style>
 
 

 
 





 <?php include "rodape.php" ?>