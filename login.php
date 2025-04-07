<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Login</title>
</head>
<body>

<style>
.a{



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
            <li><a class="dropdown-item" href="login.php">Login</a></li>
            <li><a class="dropdown-item" href="formulario_exercicio.php">formulario Exercicios</a></li>
          </ul>
       
      </ul>
      
    </div>
  </div>

</nav>   
    <div class= "pt-4 pb-4">
   <div class=" col-4 offset-4 container text-center bg-primary rounded  "  >
    

    <img src="\PWIIB\imagens\def.jpg"  class ="rounded  col-8 py-1 w-100" alt="logo"  >
 
  
   
      <form action="verifica_login.php" method="post">
        <br>
        <div class = "form-floating ">
          <input type="text" class="form-control" id="login" name="login" placeholder="Digite seu login"/>
          <label for="login">Digite seu login</label> 
        </div>
          <br>
          <div class = "form-floating ">
            <input type="password" class="form-control" id ="senha" name="senha" placeholder="Digite sua senha"/>
            <label for="login"> Digite sua senha</label>
   
            <br>
    

      <?php
        if(isset($_GET["erro"]) && !empty($_GET["erro"])){
 
            echo $_GET["erro"];
        }
        ?>
        <br>
        <div class="d-grid gap-2 p-2">
        <button type= "submit" class="btn btn-danger">
       
           
          Entrar

        </button>
        </div>
        </div>
      </div>
      </div>
</div>








</form>



<script src="bootstrap.bundle.min.js"></script>
</body>
</html>