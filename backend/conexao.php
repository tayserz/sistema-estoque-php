<?php 
    $host= "localhost";
    $user = "root";
    $pass = "";
    $banco = "banco23";

    $conexao = @mysqli_connect($host,$user,$pass,$banco)
    or die("Problemas com a conexão do banco de dados");
?>
