!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <title>Resultado Final</title>
</head>
<body>
<div class="w3-container w3-teal">
 <h1>
 <?php
//Encadeamento de decisões
 // o aluno será aprovado se obtiver nota maior ou igual 7;
//- o aluno será reprovado se obtiver nota menor que 5;
//- o aluno estará em exame se obtiver nota maior ou igual a 5 e menor de 7

 $n1 = $_POST['txtN1'];
 $n2 = $_POST['txtN2'];
 $n3 = $_POST['txtN3'];
 $media = ($n1+$n2+$n3)/3;
 $resultado;
 echo "".$_POST['txtNome']."! Sua Média foi ".$media."!!! <br>";
 if($media >= 7)
 {
 $resultado = "Aprovado";
 }
 else
 {
 if($media < 5)
 {
 $resultado = "Reprovado";
 }
 else
 {
 $reultado = "Exame";
 }
 }
?>