<?php
    // Inclui o cabeçalho da página (menu, CSS, etc.)
    include "cabecalho.php"; 

    // Inclui o script de conexão com o banco de dados
    include "conexao.php";

    // Inclui os repositórios necessários para acesso ao banco
    require_once 'DisciplinaRepository.php';
    require_once 'PerguntaRepository.php';
    require_once 'AlternativaRepository.php';


    // Cria um objeto do tipo DisciplinaRepository passando a conexão como parâmetro
    $repoDisciplina = new DisciplinaRepository($conexao);

    // Cria um objeto do tipo PerguntaRepository
    $repo = new PerguntaRepository($conexao);
    $repoAlt = new AlternativaRepository($conexao);

    // Verifica se há uma busca na URL (GET), e se tiver, chama o método de pesquisa
    if( isset($_GET['busca']) && !empty($_GET['busca']) )
    {
        $obj = $repo->Pesquisar( $_GET['busca'] );
    }
    else
    {
        // Se não houver busca, retorna todas as perguntas
        $obj = $repo->buscarTodos();
    }
?>
<!-- Início da estrutura visual com Bootstrap -->
<div class="row">
    <div class="col-12">
        <br />
        <div class="card">
            <!-- Cabeçalho do card com o título -->
            <div class="card-header">
                <b>Lista de Perguntas</b>
            </div>
            <div class="card-body">
                <!-- Formulário para buscar perguntas -->
                <form action="perguntas.php" method="get">
                    <div class="row">
                        <!-- Botão para adicionar nova pergunta -->
                        <div class="col-4">
                            <a href="pergunta_novo.php" class="btn btn-success">
                                Novo
                            </a>
                        </div>
                        <!-- Campo de texto para busca -->
                        <div class="col-4">
                            <input name="busca" class="form-control" />
                        </div>
                        <!-- Botão de pesquisa -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary">
                                Pesquisar
                            </button>
                        </div>
                    </div>
                </form>   

                <!-- Tabela de perguntas -->
                <div class="row">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Pergunta</th>
                                <th>Disciplina</th>
                                <th></th> <!-- Ações -->
                            </tr>
                        </thead>
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
                                                <!-- Botões de ação para a pergunta -->
                                                <a class='btn btn-primary'
                                                     href='alternativa.php?id=".$row['ID']."'>Alternativas</a>
                                                <a class='btn btn-danger'
                                                     href='pergunta_excluir.php?id=".$row['ID']."'>Excluir</a>
                                                <a class='btn btn-warning'
                                                     href='pergunta_editar.php?id=".$row['ID']."'>Editar</a>
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

    // Inclui o rodapé da página (footer)
    include "rodape.php"; 
?>
