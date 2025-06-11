<?php 

include "cabecalho.php"; 
    include "conexao.php";
    require_once 'referencias_Repository.php';

    //Crio um objeto do tipo referenciasRepository chamado repo
    //E recebe a conexão como parametro
    $repo = new referenciasRepository($conexao);

    if( isset($_GET['busca']) && !empty($_GET['busca']) )
    {
        $referencias = $repo->Pesquisar( $_GET['busca'] );
    }
    else
    {
        //Chamei o metodo BuscarTodos para puxar 
        // todas referencias do banco de dados
        $referencias= $repo->buscarTodos();
    }
    

?>
<div class="row">
    <div class="col-12">
        <br />
        <div class="card">
            <div class="card-header">
                <b>Lista de referencias</b>
            </div>
            <div class="card-body">
             <form action="referencias.php" method="get">
                <div class="row">
                        <div class="col-4">
                            <a href="nova_referencias.php" class="btn btn-success">
                            Novo referencias
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
                            <th>Nome</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            //foreach serve para ler todas as disciplinas
                            // vindos do banco em formato de array chave valor
                            foreach ($referencias as $user) {
                                echo "<tr>
                                        <td>".$user['ID']."</td>
                                        <td>".$user['NOME']."</td>
                                      
                                        <td>
                                            <a class='btn btn-danger'
                                                 href='excluir_referencias.php?id=".$user['ID']."'>Excluir</a>
                                            <a class='btn btn-warning'
                                                 href='editar_referencias.php?id=".$user['ID']."'>Editar</a>
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