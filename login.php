<?php include "cabecalho.php" ?>


</style>
  
    <div class= "pt-4 pb-4">
   <div class=" col-4 offset-4 container text-center bg-primary rounded  "  >
    

    <img src="\PWIIB\imagens\def.jpg"  class ="rounded  col-8 py-1 w-100" alt="logo"  >
 
  
   
      <form action="verifica_login.php" method="post">
        <br>
        <div class = "form-floating ">
          <input type="text" class="form-control " id="login" name="login" placeholder="Digite seu login"/>
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



<?php include "rodape.php" ?>