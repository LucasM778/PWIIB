
<?php include "cabecalho.php" ?>

<style>
  .Exercicio1{
    background-color: gray;
    padding: 20px;
    text-align:center;
    font-size:arial;
  }


</style>
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


<?php include "rodape.php" ?>