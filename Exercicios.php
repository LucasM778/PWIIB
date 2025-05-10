
<?php include "cabecalho.php"; ?>

<div class="container">
      <div class="row">
      <div class="col-6 offset-3">
<ol class="list-group">
   <li class="list-group-item">
      1- Crie um formulário HTML que solicite o nome e a idade de um usuário.
      Ao enviar o formulário com o método GET, exiba o nome e a idade do usuário na página seguinte.

      <br />

   <form action="Exercicios.php" method="get">
         <div class="input-group mb-3">
               <span class="input-group-text">Nome</span>
               <input type="text" class="form-control" name="nome" >
         </div>
         <div class="input-group mb-3">
               <span class="input-group-text">Idade</span>
               <input type="number" class="form-control" name="idade"  >
         </div>
         <?php
            if(isset($_GET["idade"]) && empty($_GET["idade"]) )
            {
               echo "<div class='alert alert-danger'>";
               echo "   O campo idade não pode estar vazio";
               echo "</div>";
            }
         ?>
         <button type="submit" class="btn btn-primary">
            Enviar
         </button>
   </form>
   <br />
   <?php 
      if(isset($_GET["nome"]) && isset($_GET["idade"]) )
      {
   ?>      
        <div class="alert alert-success">
            Nome e idade: 
         <?php 
            echo $_GET["nome"];
          ?>
            <br/>
          <?php
            echo $_GET["idade"]; 
         ?>
   </div>
     
   <?php
      }
   ?>
  
</li>









<li class="list-group-item">
2-Crie um formulário HTML que receba dois números e, 
ao enviar com o método GET, exiba a soma desses dois números.
</li>
<li class="list-group-item">
3-Crie um formulário HTML que peça o nome do usuário. 
Quando o formulário for enviado com o método GET,
 exiba uma mensagem personalizada dizendo "Olá, [nome]".
</li>
<li class="list-group-item">
4-Crie um formulário de login que receba o nome de usuário e senha.
 Quando o formulário for enviado com o método POST,
  verifique se o nome de usuário e a senha são válidos
   (pode ser um simples exemplo de validação).
</li>
<li class="list-group-item">
5-Crie um formulário HTML que receba dois números e,
ao enviar com o método POST, exiba o produto desses números.
</li>
<li class="list-group-item">
6-Crie um formulário HTML que receba
 o nome e a mensagem de um usuário.
 Quando o formulário for enviado com o método POST,
  exiba a mensagem do usuário.

</li>









</div>
</div>
</div>

<?php include "rodape.php"; ?>