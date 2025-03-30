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
          </ul>
       
      </ul>
      
    </div>
  </div>

</nav>

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

<script src="bootstrap.bundle.min.js"></script>


</body>
</html>