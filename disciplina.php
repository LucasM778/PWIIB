<?php 

    // Inclui o cabeçalho da página (geralmente HTML padrão para topo da página)
    include "cabecalho.php"; 

    // Inclui o arquivo de conexão com o banco de dados (cria a variável $conexao)
    include "conexao.php";

    // Inclui a definição da classe disciplinaRepository, que lida com banco de dados
    require_once 'disciplinaRepository.php';

    // Cria um objeto do tipo disciplinaRepository, passando a conexão como parâmetro
    $repo = new disciplinaRepository($conexao);

    // Verifica se foi feita uma busca via GET e se não está vazia
    if( isset($_GET['busca']) && !empty($_GET['busca']) )
    {
        // Se sim, chama o método Pesquisar para buscar disciplinas com base no termo
        $disciplina = $repo->Pesquisar( $_GET['busca'] );
    }
    else
    {
        // Caso contrário, busca todas as disciplinas
        $disciplina = $repo->buscarTodos();
    }
?>

<div class="row">
    <div class="col-12">
        <br />
        <div class="card">
            <div class="card-header">
                <b>Lista de disciplinas</b>
            </div>
            <div class="card-body">
             <form action="disciplina.php" method="get">
                <div class="row">
                        <div class="col-4">
                            <a href="nova_disciplina.php" class="btn btn-success">
                            Nova disciplina
                            </a>
                        </div>
                        <div class="col-4">
                            <input name="busca" class="form-control" />
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary">
                                Pesquisar
                            </button>
                        </div>
                </div>
            </form>   

              <div class="row">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Disciplina</th>
                           
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            //foreach serve para ler todas as disciplinas
                            // vindos do banco em formato de array chave valor
                            foreach ($disciplina as $user) {
                                echo "<tr>
                                        <td>".$user['ID']."</td>
                                        <td>".$user['DISCIPLINA']."</td>
                                        
                                      
                                        <td>
                                            <a class='btn btn-danger'
                                                 href='excluir_disciplina.php?id=".$user['ID']."'>Excluir</a>
                                            <a class='btn btn-warning'
                                                 href='editar_disciplina.php?id=".$user['ID']."'>Editar</a>
                                        </td> 
                                      </tr>";
                            }
                        ?>
                    </tbody>
                </table>
              </div>
            </div>
        </div>

    </div>
</div>



<?php

    include "rodape.php"; 
?>