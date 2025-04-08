<?php include "cabecalho.php" ?>

<div class = "container" >
  <h1>Página do If</h1>
  <p>
    <h2> Estrutura de decisão</h2>

    A estrutura de decisão é composta por um teste boleano.
    Esse teste verifica a condição 
  </p> 
 <pre>
   $numero = 2;
  if($numero == 1){
    echo "Aqui siguinifica $numero igual a 1";
  }
  else
  {
    echo "Aqui siguinifica $numero diferente de 1";
  </pre>
  }
<?php
  $numero = 2;
  if($numero == 1){
    echo "Aqui siguinifica $numero igual a 1";
  }
  else
  {
    echo "Aqui siguinifica $numero diferente de 1";
  }
?>



  <h2>Estrutura de decisão encadeada</h2>
  São varios testes um seguido do outro até algum teste ser encontrado
  Caso não enconte um teste positivo todos os subsequentes não serão executados.
    <pre>
     $nome = "Lucas";
     if($nome == "joão"){
    }
    else if($nome == "Maria "){
     }
     else if($nome == "Lucas "){
     }
    else if($nome == "Pedro "){
    }
    else{
    echo "Nenhum nome é igual ao conteudo da variavel ";
    }</pre>

  

  <?php
  $nome = "Lucas";
  if($nome == "joão"){
  }
  else if($nome == "Maria "){
  }
  else if($nome == "Lucas "){
  }
  else if($nome == "Pedro "){

  }
  else{
    echo "Nenhum nome é igual ao conteudo da variavel ";
  }

  ?>

<h2>Vários testes em um If</h2>
Em uma estrutura de decisão única eu consigo realizar dois ou mais testes.
Nesse caso eu preciso utilizar os conceitos AND ou OR (E ou OU).
<h3>Conceito  E (AND)</h3>
No exemplo abaixo eu necessito que toda as condições resultem em verdadeiro 

<pre>
  $numero2 = 35;
  if($numero2 > 10 && $numero2 < 50){
     echo "$numero2 está entre 10 e 50";
  }
  //     FALSE        TRUE 
  if($numero2 > 36 && $numero2 < 50)
  {
    //Esse código não será executado 
  }
  else{
    echo "$numero2 não está entre 36 e 50";
  }


</pre>
<?php
$numero2 = 35;
  if($numero2 > 10 && $numero2 < 50){
     echo " $numero2 está entre 10 e 50 ";
  }
  //     FALSE        TRUE 
  if($numero2 > 36 && $numero2 < 50)
  {
    //Esse código não será executado 
  }
  else{
    echo " $numero2 não está entre 36 e 50 ";
  }
?>


<h3>Conectivo OU (or)</h3>
O conectivo OU testas as condições e executa o código se apenas umas das condições for verdadeira. 
Caso nenhuma condição for verdadeira o else é executado. 

<pre>
  $telefone = "14998888888";
  if($telefone == "149998888" || $telefone == "168888888"){
    echo " Aqui um dos telefone é igual a variavel ";
  }
</pre>
Quando temos várias condições apenas uma é necessario ao usar o 
conceito OU representado por dois PIPE (Teclado que fica do lado Z) ||

<?php
  $telefone = "14998888888";
  if($telefone == "149998888" || $telefone == "168888888"){
    echo " Aqui um dos telefone é igual a variavel ";
  }

?>
  <h2>Exercicios</h2>
  <p>
   Crie uma variavel idade preencha com um valor e  escreva
   na tela se ela pode ou não entrar em um evento
   considerando as seguintes regras:
   
   <ul>
   <li>Menor de 18 anos : Não pode entrar.</li>
   <li>Maior ou igual a 18 e menor que 60: Pode entrar.</li>
   <li>Maior ou igual a 60: Entrada gratuita.</li>
   </ul>
  </p>

</div>


<?php include "rodape.php" ?>