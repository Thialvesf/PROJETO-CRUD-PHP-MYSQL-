<<<<<<< HEAD
<?php
include 'conexao.php';
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro - Visualizar</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
 </head>
  <body>
    <?php include('navbar.php'); ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Visualizar cadastros
                            <a href="index.php" class="btn btn-danger floar-end"> voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                         if (isset($_GET['ID'])) {
                           
                            $pessoa_id = mysqli_real_escape_string($conexao, $_GET['ID']);
                            $sql = "SELECT * FROM pessoas WHERE ID='$pessoa_id'";
                            $query = mysqli_query($conexao, $sql);
                            
                            if (mysqli_num_rows($query) > 0 ) {
                                $pessoa = mysqli_fetch_array($query);
                        ?>
                        <div class="mb-3">
                            <label>Nome</label>
                            <p class="form-control">
                                <?=$pessoa['nome'];?>
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>Endereço</label>
                            <p class="form-control">
                            <?=$pessoa['endereco'];?>
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>E-mail</label>
                            <p class="form-control">
                            <?=$pessoa['email'];?>
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>Telefone</label>
                            <p class="form-control">
                            <?=$pessoa['telefone'];?>
                            </p>
                        </div>
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
include 'conexao.php';
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro - Visualizar</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
 </head>
  <body>
    <?php include('navbar.php'); ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Visualizar cadastros
                            <a href="index.php" class="btn btn-danger floar-end"> voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                         if (isset($_GET['ID'])) {
                           
                            $pessoas_id = mysqli_real_escape_string($conexao, $_GET['ID']);
                            $sql = "SELECT * FROM pessoas WHERE ID='$pessoas_id'";
                            $query = mysqli_query($conexao, $sql);
                            
                            if (mysqli_num_rows($query) > 0 ) {
                                $pessoas = mysqli_fetch_array($query);
                        ?>
                        <div class="mb-3">
                            <label>Nome</label>
                            <p class="form-control">
                                <?=$pessoas['nome'];?>
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>Endereço</label>
                            <p class="form-control">
                            <?=$pessoas['endereco'];?>
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>E-mail</label>
                            <p class="form-control">
                            <?=$pessoas['email'];?>
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>Telefone</label>
                            <p class="form-control">
                            <?=$pessoas['telefone'];?>
                            </p>
                        </div>
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