<?php  
 include "cabecalho.php"; 
  include "conexao.php";


     require_once 'DisciplinaRepository.php';
    require_once 'PerguntaRepository.php';
    require_once 'AlternativaRepository.php';


     $repo = new PerguntaRepository($conexao);
    $repoAlt = new AlternativaRepository($conexao);


      if( isset($_GET['id']) && !empty($_GET['id']) )
    {
        $obj = $repo->buscarPorId( $_GET['id'] );
    }
    else
    {
       header('location: perguntas.php');
    }

?>

<div class= "row">
    <div class="col-12"> <br>
        <div class ="card">
            <div class ="card-header">
                <b>Alternativas</b>
            </div>

            <div class ="card-body">
                <form action="perguntas.php" method="get">

                 <tbody>
                            <?php
                               
                                
                                echo $obj ['ID']; 
                                echo " . ";
                                echo $obj ['PERGUNTA'];

                            ?>            
                                        <div class="check">
                                       <div class="form-check">
                                            <input class="form-check-input" type="radio" name="Altenativa" id="A1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                 alternativa 1
                                            </label><br>
                                            </div>
                                               <div class="form-check">
                                            <input class="form-check-input" type="radio" name="Altenativa" id="A2">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                  alternativa 2
                                            </label><br>
                                            </div>
                                               <div class="form-check">
                                            <input class="form-check-input" type="radio" name="Altenativa" id="A3">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                 alternativa 3
                                            </label>
                                            </div>
                                            </div>
                                            <br>


                                              
                                            <a class='btn btn-primary'
                                                     href='alternativa.php?id=".$row['ID']."'>Salvar</a>

                        </tbody>

                </form>

            </div>
        </div>
    </div>
</div>














<?php

    include "rodape.php"; 
?>