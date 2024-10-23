<?php
session_start();
require 'conexao.php';

if (isset($_POST['create_usuario'])) {
    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $endereco = mysqli_real_escape_string($conexao, trim($_POST['endereco']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));

    $sql = "INSERT INTO usuarios (nome, endereco, email,  telefone) VALUES ('$nome','$endereco','$email','$telefone')";

    mysqli_query($conexao, $sql);
}

?>  