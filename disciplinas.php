<?php
    include "cabecalho.php"; 
    include "conexao.php";

    //Inclui o arquivo da classe Repository do usuário
    require_once 'disciplinaRepository.php';

    //Crio um objeto do tipo UsuarioRepository chamado repo
    //E recebe a conexão como parametro
    $repo = new disciplinaRepository($conexao);


    if(isset($_GET['busca']) && !empty($_GET['busca']))
    {

        $disciplina = $repo->Pesquisar($_GET['busca']);
    }
    else
    {
            //Chamei o metodo BuscarTodos para puxar 
            // todos usuarios do banco de dados
            $disciplina = $repo->buscarTodas();

    }


    

?>
<div class="row">
    <div class="col-12">
        <br />
        <div class="card">
            <div class="card-header">
                <b>Lista de Disciplina</b>
            </div>
            <div class="card-body">
                <form action="disciplinas.php" method ="get">
              <div class="row">
                    <div class="col-4">
                        <a href="disciplina_novo.php" class="btn btn-success">
                            Nova Disciplina
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
                            <th>Ativo</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            //foreach serve para ler todos os usuarios 
                            // vindos do banco em formato de array chave valor
                            foreach ($disciplina as $user) {
                                echo "<tr>
                                        <td>".$user['ID']."</td>
                                        <td>".$user['NOME']."</td>
                                        <td>".$user['ATIVO']."</td>
                                        <td>
                                            <a class='btn btn-danger'
                                                 href='disciplina_excluir.php?id=".$user['ID']."'>Excluir</a>
                                            <a class='btn btn-warning'
                                                 href='disciplina_editar.php?id=".$user['ID']."'>Editar</a>
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

   
?>