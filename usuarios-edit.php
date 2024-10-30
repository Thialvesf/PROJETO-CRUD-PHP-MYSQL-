<<<<<<< HEAD
<?php
session_start();
include 'conexao.php';
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro - Editar</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
 </head>
  <body>
    <?php include('navbar.php'); ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Editar cadastros
                            <a href="index.php" class="btn btn-danger floar-end"> voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                         if (isset($_GET['ID'])) {
                            $pessoa_id = mysqli_real_escape_string($conexao, $_GET['ID']);
                            $sql = "SELECT * FROM pessoas WHERE ID='$pessoa_id'";
                            $query = mysqli_query($conexao, $sql);

                            if (mysqli_num_rows($query) > 0){
                                $pessoa = mysqli_fetch_array($query);
                        ?>
                        <form action="acoes.php" method="POST">
                            <input type="hidden" name="pessoas_id" value="<?=$pessoa['ID']?>">
                        <div class="mb-3">
                            <label>Nome</label>
                            <input type="text" name="nome" value="<?=$pessoa['nome']?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Endereço</label>
                            <input type="text" name="endereco" value="<?=$pessoa['endereco']?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>E-mail</label>
                            <input type="text" name="email" value="<?=$pessoa['email']?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Telefone</label>
                            <input type="tel" name="telefone" value="<?=$pessoa['telefone']?>" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                           <button name="update_usuario" type="submit" class="btn btn-success">Salvar</button>
                         </div>
                        </form>
                        <?php
                         }  else {
                            echo "<h5>Nenhum cadastro encontrado</h5>";
                         }
                         }
                         ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
=======
<?php
session_start();
include 'conexao.php';
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro - Editar</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
 </head>
  <body>
    <?php include('navbar.php'); ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Editar cadastros
                            <a href="index.php" class="btn btn-danger floar-end"> voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                         if (isset($_GET['ID'])) {
                            $pessoas_id = mysqli_real_escape_string($conexao, $_GET['ID']);
                            $sql = "SELECT * FROM pessoas WHERE ID='$pessoas_id'";
                            $query = mysqli_query($conexao, $sql);

                            if (mysqli_num_rows($query) > 0){
                                $pessoas = mysqli_fetch_array($query);
                        ?>
                        <form action="acoes.php" method="POST">
                            <input type="hidden" name="pessoas_id" value="<?=$pessoas['ID']?>">
                        <div class="mb-3">
                            <label>Nome</label>
                            <input type="text" name="nome" value="<?=$pessoas['nome']?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Endereço</label>
                            <input type="text" name="endereco" value="<?=$pessoas['endereco']?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>E-mail</label>
                            <input type="text" name="email" value="<?=$pessoas['email']?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Telefone</label>
                            <input type="tel" name="telefone" value="<?=$pessoas['telefone']?>" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                           <button name="update_usuario" type="submit" class="btn btn-success">Salvar</button>
                         </div>
                        </form>
                        <?php
                         }  else {
                            echo "<h5>Nenhum cadastro encontrado</h5>";
                         }
                         }
                         ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
>>>>>>> 1a76b486b451fef5c5980b758b8f0e19301af34b
</html>