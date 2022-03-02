<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem</title>
</head>
<body>
<div class="w3-container w3-teal">
 <h1>
 <?php
 echo "".$_POST['txtNome']." ! <br>";
 echo "Valor total da Compra: R$ ".$_POST['txtValorTotal']."<br>";
 ?>
 <?php
 if($_POST['cmbRegiao'] == "Sudeste")
 {
 echo "Neste mês estamos com frete grátis para o SUDESTE";
 }
 ?>
 </h1>
</div>
</body>
</html>