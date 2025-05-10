<?php include "cabecalho.php"; ?>


<h1>For</h1>
<p>
  For é uma estrutura de repetição. Existem 3 configurações para 
  a estrutura de repetição funcionar:
  <ol>
    <li>Variável de controle</li>
    <li>Condição de finalização</li>
    <li>Incremento da variavel de controle</li>
  </ol>
  <pre>
      for($i = 0; $i < 10; $i++){
        echo "indice $i";
      }
  </pre>
  <?php
    for($i = 0; $i < 10; $i++){
      echo "indice $i <br/>";
    }
  ?>
</p>

<?php include "rodape.php"; ?>