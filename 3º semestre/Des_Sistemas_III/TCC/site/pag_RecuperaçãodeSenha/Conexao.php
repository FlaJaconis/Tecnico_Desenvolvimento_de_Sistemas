<?php

//CONEXÃO COM BANCO DE DADOS MYSQL
$servername = "localhost";
$username = "root";
$password = "mabipasan";
$dbname = "tcc_educacao";


$conexao = new mysqli($servername, $username, $password, $dbname);
if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
}
?>