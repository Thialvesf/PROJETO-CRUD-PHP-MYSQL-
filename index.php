<?php
require 'conexao.php'; 
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto PHP</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
 </head>
  <body>
    <?php include('navbar.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col">
                    <form action="acoes.php" method="POST">
                        <div class="form-group mt-2">
                            <label for="nome" class="form-label">Nome completo</label>
                            <input type="text" name="nome" class="form-control" placeholder=" Digite o seu nome completo" required> 
                         </div>
                         <div class="form-group mt-2">
                            <label for="endereco" class="form-label">Endereço</label>
                            <input type="text" name="endereco" class="form-control" placeholder=" Digite o seu Endereço" required> 
                         </div>
                         <div class="form-group mt-2">
                            <label for="email" class="form-label">Endereço de e-mail</label>
                            <input type="email" name="email" class="form-control" placeholder=" Digite o seu e-mail" required> 
                         </div>
                         <div class="form-group mt-2">
                            <label for="telefone" class="form-label">Contato</label>
                            <input type="tel" name="telefone" class="form-control" placeholder=" Digite o seu contatos" required> 
                         </div>
                         <div class="form-group mt-3">
                           <button href="create_usuario" type="submit" class="btn btn-success">Salvar</button>
                         </div>
                    </form>
                    <div class="container-mt-4">
                      <div class="row">
                        <div class="col-md-12">
                        <div class="card mt-5">
                      <div class="card-header">
                        <h4>Lista de Usúarios</h4>
                      </div>
                      <div class="card-body">
                        <table class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>nome</th>
                              <th>endereco</th>
                              <th>email</th>
                              <th>telefone</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>teste</td>
                              <td>teste@gmail.com</td>
                              <td>rua tal do tal</td>
                              <td>13997</td>
                              <td><a href="" class="btn btn-secondary btn-sm">Visualizar</a>
                               <a href="" class="btn btn-success btn-sm">Editar</a>
                               <form action="" method="POST" class="D-inline">
                                <button type="submit" name="delete_usuario" value="1" class="btn btn-danger btn-sm mt-1">
                                  Excluir</button>
                               </form>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                        </div>
                      </div>
                    </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>