<?php  
 include "cabecalho.php"; 
  include "conexao.php";


     require_once 'DisciplinaRepository.php';
    require_once 'PerguntaRepository.php';
    require_once 'AlternativaRepository.php';


     $repo = new PerguntaRepository($conexao);
    $repoAlt = new AlternativaRepository($conexao);


      if( isset($_GET['busca']) && !empty($_GET['busca']) )
    {
        $obj = $repo->Pesquisar( $_GET['busca'] );
    }
    else
    {
        $obj = $repo->buscarTodos();
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
                                // Percorre cada pergunta retornada e exibe na tabela
                                foreach ($obj as $row) {
                                    echo
                                       "<tr>
                                            <td>".$row['ID']."</td>
                                            <td>".$row['PERGUNTA']."</td>
                                            <td>".$row['ID_DISCIPLINA']."</td>
                                            <td>

                                        </tr>";
                                        
                                }
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