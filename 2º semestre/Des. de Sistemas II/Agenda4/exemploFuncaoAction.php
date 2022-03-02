<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <title>Função com e sem retorno.</title>
</head>
<body>
 <h2 class="w3-container w3-teal ">
 <?php
 
 function parImparRetorno($valor)
 {
 $resto = $valor % 2;
 if($resto == 0)
 return "PAR";
 else
 return "IMPAR";
 }
 function parImparVoid($valor)
 {
 $resto = $valor % 2;
 if($resto == 0)
 echo "PAR";
 else
 echo "IMPAR";
 }
 $t = $_POST['txtValor'];
 //Chamada ou Invocação da Função.
 echo parImparRetorno($t);
 echo "<br>";
 parImparVoid($t);
 ?>
 </h2>
</body>
</html>