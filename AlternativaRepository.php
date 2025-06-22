<?php
class AlternativaRepository {
    private $conexao;

    public function __construct(mysqli $conexao)
    {
        $this->conexao = $conexao;
    }

    public function buscarTodos() {
        $result = $this->conexao->query(
            "SELECT * FROM ALTERNATIVAS");

        $alternativas = [];
        while ($row = $result->fetch_assoc()) {
            array_push($alternativas, $row);
        }
        return $alternativas;
    }

    public function buscaPergunta($idPergunta)
    {
        $sql = "SELECT * FROM  ALTERNATIVAS WHERE ID_PERGUNTA = ? ";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bind_param("i", $idPergunta);
        $stmt->execute();
        $result = $stmt->get_result();

        $alternativas = [];
        while ($row = $result->fetch_assoc()) {
            $alternativas[] = $row;
        }

        return $alternativas;
    }
   
    public function buscarPorId($id) {
        $stmt = $this->conexao->prepare(
            "SELECT * FROM disciplinas WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }

    public function verificarLogin($login, $senha) {
        $stmt = $this->conexao->prepare(
            "SELECT * FROM disciplinas WHERE Login = ? && Senha = ?");
        $stmt->bind_param("ss", $login, $senha);
        $stmt->execute();

        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }


   public function Inserir($id_pergunta, $alt1, $alt2, $alt3, $correta) {
    $alternativas = [$alt1, $alt2, $alt3];

    for ($i = 0; $i < 3; $i++) {
        $eh_correta = ($correta == ($i + 1)) ? 1 : 0;

        $sql = "INSERT INTO alternativas (ID_PERGUNTA, ALTERNATIVA, CORRETA) VALUES (?, ?, ?)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bind_param("isi", $id_pergunta, $alternativas[$i], $eh_correta);
        $stmt->execute();
    }
}

    public function Editar($alternativa, $id)
    {
        $sql = "UPDATE ALTERNATIVAS set ALTERNATIVA = ?  where ID = ?";
                $stmt = $this->conexao->prepare($sql);
                $stmt->bind_param("si", $alternativa,$id);
                $stmt->execute();
    }



   public function excluirPorPergunta($id_pergunta) {
    $sql = "DELETE FROM ALTERNATIVAS WHERE ID_PERGUNTA = ?";
    $stmt = $this->conexao->prepare($sql);
    $stmt->bind_param("i", $id_pergunta);
    $stmt->execute();
}


}