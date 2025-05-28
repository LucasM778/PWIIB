<?php
include "conexao.php";
require_once "disciplinaRepository.php";
include "cabecalho.php";
if(isset($_GET['id']) && !empty($_GET['id'])){


    $rep = new disciplinaRepository($conexao);
    $disciplina = $rep->buscarPorId($_GET['id']);

}
else
{
    header('lacation: disciplinas.php');
}

?>
<div class="row">
    <div class="col-4 offset-4">
        <div class="card">
            <div class="card-header">Editar Disciplina</div>
            <div class="card-body">
                <form action="disciplina_editar_salvar.php" method="post">
                    <label>Id</label>
                    <input type="text"
                        value="<?php echo $disciplina['ID'] ?>" class="form-control" name="ID" readonly/>

                    <br/>

                    <label>Disciplina</label>
                    <input type="text"disciplina
                        value="<?php echo $disciplina['NOME'] ?>" class="form-control" name="NOME" />
                    <br/>

                    <select name="ATIVO" class='form-control'>
                        <?php
                            if($disciplina['ATIVO'])
                              {
                                    ?>
                                        <option value="1" selected>Ativado</option>
                                        <option value="0">Desativado</option>

                                    <?php

                              }  
                              else
                              {
                                  ?>
                                <option value="1">Ativado</option>
                                <option value="0" selected>Desativado</option>
                                    <?php
                              }
                        
                                     ?>
                    </select>
                    <br/>
                    <button class="btn btn-primary" type ="submit"> Salvar Disciplina</button>
                    
                </form>

            </div>

        </div>

    </div>

</div>

<?php
include "rodape.php";
?>