<?php
include 'Pessoa.php';
//$pesso1 = new Pessoa();
//$pesso1 -> nome = 'Flávia'; // para atribuir diretamente sem ter classe
//$pesso1 -> sobrenome = 'Jaconis';// para atribuir diretamente sem pegar da classe
//echo "<h3>{pesso1 -> getNome(}{pesso1 -> sobrenome}<h3>";

//var_dump($pessoa1); //só pra ver o que está acontecendo no navegador


$pessoa1 = new Pessoa();
$pessoa1 -> setNome('Flávia');
$pessoa1 -> setSobrenome('Jaconis');

echo "<h3>{$pessoa1 -> getNome()} {$pessoa1 -> getSobrenome()}</h3>";

?>

