<?php
 include "cabecalho.php"; 
 include "conexao.php";

include "conexao.php";
require_once "disciplinaRepository.php";
$repo = new disciplinaRepository($conexao);

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
        $disciplina = $repo->buscarTodos();

}









include "rodape.php"; 
?>
<div class="row">
    <div class="col-12">
        <br />
        <div class="card">
            <div class="card-header">
                <b>Lista Disciplina</b>
            </div>
            <div class="card-body">
                <form action="Disciplina.php" method ="get">
              <div class="row">
                    <div class="col-4">
                        <a href="disciplina.php" class="btn btn-success">
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
                            foreach ($nome as $disc) {
                                echo "<tr>
                                        <td>".$disc['NOME']."</td>
                                        <td>".$disc['LOGIN']."</td>
                                        <td>".$disc['ATIVO']."</td>
                                        <td>
                                            <a class='btn btn-danger'
                                                 href='excluir_usuario.php?id=".$disc['ID']."'>Excluir</a>
                                            <a class='btn btn-warning'
                                                 href='editar_usuario.php?id=".$disc['ID']."'>Editar</a>
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