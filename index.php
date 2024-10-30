<?php
session_start();
include "conexao.php"; 
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto PHP</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
 </head>
  <body>
    <?php include('navbar.php'); ?>
    <div class="container">
      <?php include('mensagem.php') ?>
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
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="tel" name="telefone" class="form-control" placeholder=" Digite o seu contatos" required> 
                         </div>
                         <div class="form-group mt-3">
                           <button name="create_usuario" type="submit" class="btn btn-success">Salvar</button>
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
                              <th>Nome</th>
                              <th>Endereco</th>
                              <th>Email</th>
                              <th>Telefone</th>
                              <th>Ações</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $sql = 'SELECT * FROM pessoas';
                            $pessoas = mysqli_query($conexao, $sql);
                            if (mysqli_num_rows($pessoas) > 0){
                              foreach($pessoas as $pessoa) {
                            ?>
                            <tr>
                              <td><?=$pessoa['ID']?></td>
                              <td><?=$pessoa['nome']?></td>
                              <td><?=$pessoa['endereco']?></td>
                              <td><?=$pessoa['email']?></td>
                              <td><?=$pessoa['telefone']?></td>
                              <td><a href="usuarios-view.php?ID=<?=$pessoa['ID']?>" class="btn btn-secondary btn-sm"><span class="bi-eye-fill"</span>&nbsp;Visualizar</a>
                               <a href="usuarios-edit.php?ID=<?=$pessoa['ID']?>" class="btn btn-success btn-sm"><span class="bi-pencil-fill"</span>&nbsp;Editar</a>
                               <form action="acoes.php" method="POST" class="D-inline">
                                <button onclick="return confirm('Tem certeza que deseja excluir esse cadastro?')" type="submit" name="delete_usuario" value="<?=$pessoa['ID']?>" class="btn btn-danger btn-sm"><span class="bi-trash3-fill"</span>&nbsp;
                                  Excluir</button>
                               </form>
                              </td>
                            </tr>
                            <?php
                            } 
                           } else {
                            echo '<h5>Nenhum cadastro encontrado</h5>';
                           }
                           ?>
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