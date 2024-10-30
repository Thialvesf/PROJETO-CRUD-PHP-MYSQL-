<?php
session_start();
 include "conexao.php";

 if (isset($_POST['create_usuario'])) {
    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $endereco = mysqli_real_escape_string($conexao, trim($_POST['endereco']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));

    $sql = "INSERT INTO pessoas  (nome, endereco, email, telefone) VALUES ('$nome','$endereco','$email','$telefone')";

    mysqli_query($conexao, $sql);

    if (mysqli_affected_rows($conexao) > 0 ){
        $_SESSION['mensagem'] = 'Cadastro realizado com sucesso';
        header('location: index.php');
        exit; 
    } 
    else {
        $_SESSION['mensagem'] = 'Usuário não foi cadastrado';
        header('location: index.php');
        exit;
    }
 }

 if (isset($_POST['update_usuario'])) {
    $pessoas_id = mysqli_real_escape_string($conexao, $_POST['pessoas_id']);
    
    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $endereco = mysqli_real_escape_string($conexao, trim($_POST['endereco']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));

    $sql = "UPDATE pessoas SET nome = '$nome', endereco = '$endereco', email = '$email', telefone = '$telefone' WHERE ID = '$pessoas_id'";

    mysqli_query($conexao, $sql);

    if (mysqli_affected_rows($conexao) > 0 ){
        $_SESSION['mensagem'] = 'Usuário atualizado com sucesso';
        header('location: index.php');
        exit; 
    } 
    else {
        $_SESSION['mensagem'] = 'Usuário não foi atualizado';
        header('location: index.php');
        exit;
    }
 }

 if (isset($_POST['delete_usuario'])) {
    $pessoa_id = mysqli_real_escape_string($conexao, $_POST['delete_usuario']);
    
    $sql = "DELETE FROM pessoas WHERE ID = '$pessoa_id'";

    mysqli_query($conexao, $sql);

    if (mysqli_affected_rows($conexao) > 0) {
        $_SESSION['message'] = 'Cadastro deletado com sucesso';
        header('location: index.php');
        exit;
    } else {
        $_SESSION['message'] = 'Cadastro não foi deletado';
        header('location: index.php');
        exit;
    }
}
?>  