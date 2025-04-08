<?php include "cabecalho.php" ?>
<h1>Página do For</h1>

<p>
  For é uma estrutur ade repitição. Existem 3 configurações para 
  a estrutura de repetição funcionar:
  <ol>
    <li>Variavel de controle</li>
    <li>Condição de finalização</li>
    <li>Incremento da variavel de controle</li>
  </ol>
  <pre>
     for($i = 0; $i < 10; $i++){
        echo "indice $i"; <br/>
     }
  </pre>
  
  <?php
    for($i = 0; $i < 10; $i++){
      echo "indice $i <br/>";
   }
   ?>   

</p>


<?php include "rodape.php" ?>