<?php
    $server = "localhost:3306";
    $user = "root";
    $pass = "";
    $bd = "c";

    $conexao = mysqli_connect($server, $user, $pass, $bd);

    if ($conexao) {
    echo "conectado";
   } else 
    echo"não conectado";

?>