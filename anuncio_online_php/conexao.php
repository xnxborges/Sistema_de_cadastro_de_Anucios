<?php
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $database = "cadastro";
    $conexao = mysqli_connect($hostname, $user, $password, $database);

    if(!$conexao){
        print "FALHA NA CONEXÃO COM O BANCO DE DADOS.";
    }

?>