<?php
include "conexao.php";
require_once "referenciasRepository.php";
include "cabecalho.php";
if(isset($_GET['id']) && !empty($_GET['id'])){


    $repo = new referenciasRepository($conexao);
    $referencias = $repo->buscarPorId($_GET['id']);

}
else
{
    header('lacation: referencias.php');
}

?>
<div class="row">
    <div class="col-4 offset-4">
        <div class="card">
            <div class="card-header">Editar Usuario</div>
            <div class="card-body">
                <form action="referencias_editar_salvar.php" method="post">
                    <label>Id</label>
                    <input type="text"
                        value="<?php echo $referencias['ID'] ?>" class="form-control" name="ID" readonly/>

                    <br/>

                    <label>Nome</label>
                    <input type="text"
                        value="<?php echo $referencias['NOME'] ?>" class="form-control" name="NOME" />
                    <br/>

                 
                    </select>
                    <br/>
                    <button class="btn btn-primary" type ="submit"> Salvar Referencia</button>
                    
                </form>

            </div>

        </div>

    </div>

</div>

<?php
include "rodape.php";
?>