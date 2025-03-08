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
          </ul>
       
      </ul>
      
    </div>
  </div>

</nav>

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


<script src="bootstrap.bundle.min.js"></script>


</body>
</html>