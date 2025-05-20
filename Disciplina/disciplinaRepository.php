<?php
class disciplinaRepository {
    private $conexao;

    public function __construct(mysqli $conexao)
    {
        $this->conexao = $conexao;
    }

    public function buscarTodos() {
        $result = $this->conexao->query(
            "SELECT * FROM disciplina");

        $disciplina = [];
        while ($row = $result->fetch_assoc()) {
            array_push($disciplina, $row);
        }
        return $disciplina;
    }


    public function Pesquisar($busca){
        $sql ="SELECT * FROM disciplina WHERE LOGIN like '%$busca%'";
        $result = $this->conexao->query($sql);
        $usuarios =[];
        while ($row = $result->fetch_assoc()) {
            array_push($usuarios, $row);
        }
        return $disciplina;


    }
   
    public function buscarPorId($id) {
        $stmt = $this->conexao->prepare(
            "SELECT * FROM disciplina WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }
    public function Inserir($disciplina)
    {
        echo $ativo;
        
        $sql = "INSERT INTO disciplina (NOME, ATIVO) 
                VALUES (?, ?);";
                $stmt = $this->conexao->prepare($sql);
                $stmt->bind_param("si", $nome,$ativo);
                $stmt->execute();
    }

    public function Editar($nome, $id, $ativo)
    {
    
        
        $sql = "UPDATE disciplina set NOME = ?, ATIVO = ? where ID = ?"; 
                $stmt = $this->conexao->prepare($sql);
                $stmt->bind_param("sii", $login,$ativo,$id);
                $stmt->execute();
    }

    public function excluirDisciplina($id)
    {
        $sql = "DELETE FROM disciplina where id = ?";
        $preparar = $this->conexao->prepare($sql);
        $preparar->bind_param("i",$id);
        $preparar->execute();
    }

}