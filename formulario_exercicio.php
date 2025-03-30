<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Formulario EXE</title>
</head>
<body>


<style>
  .Exercicio1{
    background-color: gray;
    padding: 20px;
    text-align:center;
    font-size:arial;


  }
</style>
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
<div class= "Exercicio1" >
<h1>Cadastro</h1>
<h2>Exercicio 1</h2>
<form action="salva_exerci.php" method= "get">

<label>Nome</label>
<input type="name" name="nome" value=""/>
<br><br>
<label >Idade</label>
<input type="number" name="Idade" value=""/>
<br><br>
<button type="submit">
    Enviar
</button>
<br><br><br>




<h2>Exercicio 2</h2>

<form action="salva_exerci.php" method="get">

 <label>Primeiro Numero</label>
 <input type="number" name="1_numero">
 <br><br>
 <label>Segundo Numero</label>
 <input type="number" name="2_numero">
 <br><br>
 <button type="submit">
    Enviar
</button>
</form>
<br><br><br>




<h2>Exercicio 3</h2>

<form action="salva_exerci.php" method="get">

 <label>Nome1</label>
 <input type="name" name="Nome1">
 <br><br>
 <button type="submit">
    Enviar
</button>
</form>
<br><br><br>


<h2>Exercicio 4</h2> 

<form action="salva_exerci.php" method="post">


 <label>Usuario(Lucas2)</label>
 <input type="text" name="Usuario">
 <br><br>
 <label>Senha( abc123)</label>
 <input type="password" name="Senha">
 <br><br>
 <button type="submit">
    Enviar
</button>
</form>
</div>


<script src="bootstrap.bundle.min.js"></script> 
</body>
</html>