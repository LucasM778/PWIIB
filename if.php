<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PWII B</title>
   <link rel="stylesheet" href="bootstrap.min.css">

    
</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark " data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> 
    <img src= "\PWIIB\imagens\bootstrap-logo.svg " alt="Logo" width="30" height="24" class="d-inline-block align-text-top"> PWIIB
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
            <li><a class="dropdown-item" href="variavel.php">Variavel</a></li>
            <li><a class="dropdown-item" href="if.php">If</a></li>
            <li><a class="dropdown-item" href="while.php">While</a></li>
            <li><a class="dropdown-item" href="for.php">For</a></li>
            <li><a class="dropdown-item" href="switch.php">Switch</a></li>
            <li><a class="dropdown-item" href="array.php">Array/Vetor</a></li>
            <li><a class="dropdown-item" href="formulario.php">formulario</a></li>
            <li><a class="dropdown-item" href="index.php">Index</a></li>
            <li><a class="dropdown-item" href="formulario_exercicio.php">formulario Exercicios</a></li>
            <li><a class="dropdown-item" href="login.php">Login</a></li>
          </ul>
       
      </ul>
      
    </div>
  </div>

</nav>

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


<script src="bootstrap.bundle.min.js"></script>


</body>
</html>