<?php
 include "cabecalho.php"; 
 include "conexao.php";

 //Inclui o arquivo da classe Repository do usúario
require_once "UsuarioRepository.php";


//Crio um objeto do tipo UsuarioRepository chamado repo
//E recebe a conexão como parametro 
$repo = new UsuarioRepository($conexao);

//Chamei o metodo BuscarTodos para puxar
//Todos usuarios do banco de dados
$usuarios = $repo->buscarTodos();

?>


<div class= "row">
    <div class= "col-12">
        </br>
        <div class= "card">
            <div class ="card-header">
                <b>Lista de Usuarios</b>
            </div>
            <div class= "card-body">
            
                <div class="row">
                    <div class="col-4">
                        <a class="btn btn-success">
                        Novo Usuario
                         </a>  
                    </div>

            
                    <div class="col-4">
                        <input name="busca" class="form-control"/>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary">
                            Pesquisar
                        </button>
                    </div>
                    <div class="row">
                        <table class="table table-striped">
                            
                        </table>
                    </div> 
                    <div class="row">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Login</th>
                                    <th>Ativo</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                //foreach serve para ler todos usuarios
                                //vindos do banco em formato de array chave valor 
                                    foreach($usuarios as $user){
                                        echo "<tr>
                                            <td>$user[ID]</td>
                                            <td>$user[LOGIN]</td>
                                            <td>$user[ATIVO]</td>
                                            <td></td>
                        
                                        
                                        
                                        
                                        
                                        </tr>";
                                        }
                                        


                                ?>


                            </tbody>
                        </table>
                </div> 
            </div>    
        </div>
    </div>

</div>







<?php


 include "rodape.php";
 ?>