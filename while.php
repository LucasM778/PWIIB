<?php include "cabecalho.php" ?>

<h1>Página do While</h1>

<p>
  While é uma estrutur ade repitição. Existem 3 configurações para 
  a estrutura de repetição funcionar:
  <ol>
    <li>Variavel de controle</li>
    <li>Condição de finalização</li>
    <li>Incremento da variavel de controle</li>
  </ol>
  <pre>
    $i = 0;
     while ($i < 10){
       echo "indice $i";
       $i = $i + 1;
     }
    </pre>
  <?php
    $i = 0;
    while($i <10){
      echo "indice $i <br/>";
      $i = $i + 1;
   }
   ?>   

</p>
<h2>Do While</h2>
<p>
  A diferença do Do while para While  é que no Do While sempre vai haver pelo menos
  uma execução do bloco de código.
  Você avalia a necessidade de qual estrutura de repetição é adequada.
  <pre>
     $i = 0;
     do{
       echo" while com indice $i <br> ";
       $i = $i + 1;
     } while($i < 10)   
  </pre> 

  <?php
   $i = 0;
   do{
     echo " Do while com indice $i  <br> ";
     $i = $i + 1;
   } while($i < 10)   
   ?>
</p>

<?php include "rodape.php" ?>