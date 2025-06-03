<?php include "logado.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PWII B</title>
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link href="estilo.css" rel="stylesheet" />
    <style>

          .btn-color {
              background-color: #0e1c36;
              color: #fff;
          }

          .profile-image-pic {
              height: 200px;
              width: 200px;
              object-fit: cover;
          }
          body {
              background-color: #F0F0F0;
          }


          .cardbody-color {
              /*background-color: #ebf2fa;*/
              background-color: #17458F;
          }

          a {
              text-decoration: none;
          }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      
     <img src="/pwiib/imagens/bootstrap-logo.svg" alt="Bootstrap" width="30" height="24" />
      Projeto PW 2 Turma B
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       <li class="nav-item">
            <a class="nav-link text-white" href="https://www.globo.com" > Acesse a Globo por aqui </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            php
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="professores.php">Professores</a></li>
            <li><a class="dropdown-item" href="if.php">If</a></li>
            <li><a class="dropdown-item" href="while.php">While</a></li>
            <li><a class="dropdown-item" href="for.php">For</a></li>
            <li><a class="dropdown-item" href="switch.php">Switch</a></li>
            <li><a class="dropdown-item" href="array.php">Array/Vetor</a></li>
          </ul>
        </li><!--Fim do menu dropdonw -->
        <li class="nav-item">
            <a class="nav-link text-white" href="instalar.php" > 
              Instalar o banco 
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white" href="usuarios.php" > 
              Usuarios
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white" href="disciplinas.php" > 
              Disciplinas
            </a>
        </li>
      </ul><!--Fim do menu  -->
<?php
      if (basename($_SERVER['PHP_SELF']) != 'login.php') {
        ?>
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                <li class="nav-item text-white">
                    Bem vindo <?php echo $_SESSION["Nome"]; ?> <a href="logoff.php"> Faça o logoff aqui </a>
                </li>
        </ul>

        <?php
      }
?>

    
    </div>
  </div>
</nav>
<div class="container">