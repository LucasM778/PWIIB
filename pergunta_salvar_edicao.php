<?php


// Inclui o arquivo que estabelece a conexão com o banco de dados (normalmente cria a variável $conexao)
include "conexao.php";

// Importa a classe PerguntaRepository, que contém métodos para manipular dados de perguntas no banco
require_once "PerguntaRepository.php";

// Cria uma instância da classe PerguntaRepository, passando a conexão com o banco como argumento
$repo = new perguntaRepository($conexao);

// Verifica se os campos 'ID', 'NOME' e 'ID_DISCIPLINA' foram enviados via método POST (validação básica do formulário)
if (isset($_POST["ID"]) && isset($_POST['NOME']) && isset($_POST['ID_DISCIPLINA'])) {

    // Chama o método Editar da classe PerguntaRepository, passando os dados do formulário

    $repo->Editar($_POST['NOME'],$_POST['ID_DISCIPLINA'], $_POST['ID']);

    // Redireciona o usuário de volta para a página de listagem de perguntas após editar
    header('location: perguntas.php');
} else {
    // Se algum campo estiver faltando, redireciona para a mesma página (poderia ser melhor tratada com uma mensagem de erro)
    header('location: perguntas.php');
}

?>