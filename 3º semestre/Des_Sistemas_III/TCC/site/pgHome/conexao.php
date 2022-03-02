<?php

//CONEXÃO COM BANCO DE DADOS MYSQL
$usuario = 'root';
$senha = 'usbw';
$database = 'tcc_educacao';
$host = 'localhost:3307';


$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}
?>

