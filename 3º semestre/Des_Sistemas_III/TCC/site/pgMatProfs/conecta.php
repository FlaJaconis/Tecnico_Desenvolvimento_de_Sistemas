<?php
$servername = "localhost:3307";
$username = "root";
$password = "usbw";
$dbname = "tcc_educacao";

//criando conexão
$conexao = new mysqli($servername, $username, $password, $dbname);
if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
}

?>