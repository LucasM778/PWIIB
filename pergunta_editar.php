<?php
include "conexao.php";
require_once "PerguntaRepository.php";
include "cabecalho.php";
if(isset($_GET['id']) && !empty($_GET['id'])){


    $repo = new perguntaRepository($conexao);
    $PERGUNTA = $repo->buscarPorId($_GET['id']);

}
else
{
    header('lacation: perguntas.php');
}

?>
<div class="row">
    <div class="col-4 offset-4">
        <div class="card">
            <div class="card-header">Editar Pergunta</div>
            <div class="card-body">
                <form action="pergunta_salvar_edicao.php" method="post">
                    <label>Id</label>
                    <input type="text"
                        value="<?php echo $PERGUNTA['ID'] ?>" class="form-control" name="ID" readonly/>

                    <br/>

                     <label>Id Disciplina</label>
                    <input type="text"
                        value="<?php echo $PERGUNTA['ID_DISCIPLINA'] ?>" class="form-control" name="ID_DISCIPLINA" readonly/>

                    <br/>

                    <label>Pergunta</label>
                    <input type="text"
                        value="<?php echo $PERGUNTA['PERGUNTA'] ?>" class="form-control" name="NOME" />
                    <br/>

                 
                    </select>
                    <br/>
                    <button class="btn btn-primary" type ="submit"> Salvar Pergunta</button>
                    
                </form>

            </div>

        </div>

    </div>

</div>

<?php
include "rodape.php";
?>