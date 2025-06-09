<?php 
include "conexao.php";
require_once "disciplinaRepository.php";
include "cabecalho.php";
if(isset($_GET['id']) && !empty($_GET['id']) )
{
    $repo = new disciplinaRepository($conexao);
    $disciplina = $repo->buscarPorId($_GET['id']);
}
else
{
    header('location: disciplina.php');
}
?>
<br />
<div class="row">
    <div class="col-4 offset-4">
        <div class="card">
            <div class="card-header">Editar disciplina</div>
            <div class="card-body">
                <form action="salvar_edicao_disciplina.php" method="post">
                    <label>Id</label>
                    <input type="text"
                            value="<?php echo $disciplina['ID'] ?>"
                            class="form-control"
                            name="ID"
                            readonly 
                             />
                    <br />
                    <label>Disciplina</label>
                    <input type="text"
                            value="<?php echo $disciplina['DISCIPLINA'] ?>"
                            class="form-control"
                            name="DISCIPLINA"
                             />
                    <br />
                    
                    <br />
                    <button class="btn btn-primary" type="submit">
                            Salvar disciplina
                    </button>

                </form>
            </div>
        </div>
    </div>
</div>


<?php include "rodape.php"; ?>