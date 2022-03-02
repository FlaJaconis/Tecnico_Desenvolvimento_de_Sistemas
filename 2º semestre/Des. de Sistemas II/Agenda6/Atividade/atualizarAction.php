<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <title>Atualização - MYSQLI</title>
</head>
<body>
<a href="listar.php" class="w3-display-topleft">
  <i class="fa fa-arrow-circle-left w3-large w3-teal w3-button w3-xxlarge"></i> 
 </a>
 
<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle" >
 <?php
 $servername = "localhost";
 $username = "root";
 $password = "usbw";
 $dbname = "pwii";
 $conexao = new mysqli($servername, $username, $password, $dbname);
 if ($conexao->connect_error) {
 die("Connection failed: " . $conexao->connect_error);
 }
 $sql = "UPDATE alunos_ingles SET nome = '".$_POST['txtNome']."', nota1 = '".$_POST['txtMod1']."',
 nota2 = '".$_POST['txtMod2']."', nota3 = '".$_POST['txtMod3']."', nota4 = '".$_POST['txtMod4']."' WHERE idalunoconcluinte =". $_POST['txtID'].";";
 
 if ($conexao->query($sql) === TRUE) {
 echo '
 <a href="listar.php">
 <h1 class="w3-button w3-teal">Amigo Atualizado com sucesso! </h1>
 </a>
 ';
 $id = mysqli_insert_id($conexao);
 
 } else {
 echo '
 <a href="listar.php">
 <h1 class="w3-button w3-teal">ERRO! </h1>
 </a>
 ';
 }
 $conexao->close();
 ?>
</div>
</body>
</html>