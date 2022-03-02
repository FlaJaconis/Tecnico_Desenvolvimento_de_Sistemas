<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <title>Exclusão - PDO</title>
</head>
<body class="w3-black">
<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
 <?php
 $host = "localhost";
 $usuario = "root";
 $senha = "usbw";
 $bd = "pwii";
 try{
 $conecta = new PDO("mysql:dbname=$bd; host=$host; port=3306; chars
et=utf8", $usuario, $senha);
 $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }catch(PDOException $e){
 echo "falha ao conectar: ". $e->getMessage();
 }
 try{
 $sql = $conecta->prepare("DELETE FROM produto WHERE idproduto = ?;");
 $sql->bindParam(1,$_POST['txtID']);
 $sql->execute();
 echo '
 <a href="listar.php">
 <h1 class="w3-button w3-indigo">Produto Excluido com sucesso! </h1>
 </a>
 ';
 }catch(PDOException $e){
 echo '
 <a href="listar.php">
 <h1 class="w3-button w3-indigo">ERRO! </h1>
 </a>
 ';
 }
 ?>
</div>
</body>
</html>