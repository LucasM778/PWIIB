<?php
include "conexao.php";
require_once "PerguntaRepository.php";
require_once "AlternativaRepository.php";

$repoPergunta = new PerguntaRepository($conexao);
$repoAlt = new AlternativaRepository($conexao);


if (isset($_POST["ID"]) && isset($_POST['NOME']) && isset($_POST['ID_DISCIPLINA']) && isset($_POST['correta'])) {
    
    $id_pergunta = $_POST['ID'];
    $nome_pergunta = $_POST['NOME'];
    $id_disciplina = $_POST['ID_DISCIPLINA'];
    $correta = $_POST['correta'];  

   
    $repoPergunta->Editar($nome_pergunta, $id_disciplina, $id_pergunta);

    
    for ($i = 1; $i <= 3; $i++) {
        if (isset($_POST["alt_id_$i"]) && isset($_POST["alt_$i"])) {
            $id_alt = $_POST["alt_id_$i"];
            $alt_esc = $_POST["alt_$i"];
            $eh_correta = ($correta == $i) ? 1 : 0;

            
            $sql = "UPDATE alternativas SET ALTERNATIVA = ?, CORRETA = ? WHERE ID = ?";
            $stmt = $conexao->prepare($sql);
            $stmt->bind_param("sii", $alt_esc, $eh_correta, $id_alt);
            $stmt->execute();
        }
    }

    header('location: perguntas.php?sucesso=Pergunta e alternativas atualizadas');
} else {
    header('location: perguntas.php?erro=Formulário incompleto');
}

?>
