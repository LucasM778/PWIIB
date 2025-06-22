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
        $alternativas = $repoAlt->buscaPergunta($_GET['id']);
    }
    else
    {
       header('location: perguntas.php');
    }

?>

<div class="row">
    <div class="col-12">
        <br>
        <div class="card">
            <div class="card-header">
                <b>Alternativas da Pergunta:</b><br>
                <?php echo $obj['ID'] . " - " . $obj['PERGUNTA']; ?>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Alternativa</th>
                            <th>Correta?</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($alternativas as $alt) {
                            echo "<tr>
                                    <td>{$alt['ID']}</td>
                                    <td>{$alt['ALTERNATIVA']}</td>
                                    <td>" . ($alt['CORRETA'] ? "<span style='color: green;'>✔️</span>" : "") . "</td>
                                  </tr>";
                        }
                        ?>
                    </tbody>
                </table>

                <a class='btn btn-primary' href='perguntas.php'>Voltar</a>
            </div>
        </div>
    </div>
</div>











<?php

    include "rodape.php"; 
?>