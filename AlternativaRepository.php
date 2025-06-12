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

        $disciplina = [];
        while ($row = $result->fetch_assoc()) {
            array_push($disciplina, $row);
        }
        return $disciplina;
    }

    public function buscaPergunta($idPergunta)
    {
        $sql = "SELECT * FROM  ALTERNATIVAS WHERE ID_ PERGUNTA = ? ";
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


    public function Inserir($alternativa)
    {
    
        
        $sql = "INSERT INTO ALTERNATIVAS (alternativa) 
                VALUES (?);";
                $stmt = $this->conexao->prepare($sql);
                $stmt->bind_param("s", $alternativa);
                $stmt->execute();
    }

    public function Editar($alternativa, $id)
    {
        $sql = "UPDATE ALTERNATIVAS set ALTERNATIVA = ?  where ID = ?";
                $stmt = $this->conexao->prepare($sql);
                $stmt->bind_param("si", $alternativa,$id);
                $stmt->execute();
    }



    public function excluiralternativa($id)
    {
        $sql = "DELETE FROM ALTERNATIVAS where id = ?";
        $preparar = $this->conexao->prepare($sql);
        $preparar->bind_param("i",$id);
        $preparar->execute();
    }

}