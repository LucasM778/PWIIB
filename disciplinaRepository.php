<?php
class disciplinaRepository {
    private $conexao;

    public function __construct(mysqli $conexao)
    {
        $this->conexao = $conexao;
    }

    public function buscarTodos() {
        $result = $this->conexao->query(
            "SELECT * FROM disciplinas");

        $disciplina = [];
        while ($row = $result->fetch_assoc()) {
            array_push($disciplina, $row);
        }
        return $disciplina;
    }

    public function Pesquisar($busca)
    {
        $sql = "SELECT * FROM disciplinas WHERE DISCIPLINA like '%$busca%' ";
        $resultado = $this->conexao->query($sql);
        $disciplina = [];
        while ($row = $resultado->fetch_assoc()) {
            array_push($disciplina, $row);
        }
        return $disciplina;
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


    public function Inserir($disciplina)
    {
    
        
        $sql = "INSERT INTO disciplinas (disciplina) 
                VALUES (?);";
                $stmt = $this->conexao->prepare($sql);
                $stmt->bind_param("s", $disciplina);
                $stmt->execute();
    }

    public function Editar($DISCIPLINA, $id)
    {
        $sql = "UPDATE disciplinas set DISCIPLINA = ?  where ID = ?";
                $stmt = $this->conexao->prepare($sql);
                $stmt->bind_param("si", $DISCIPLINA,$id);
                $stmt->execute();
    }



    public function excluirdisciplina($id)
    {
        $sql = "DELETE FROM disciplinas where id = ?";
        $preparar = $this->conexao->prepare($sql);
        $preparar->bind_param("i",$id);
        $preparar->execute();
    }

}