<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Atividade Online</title>
</head>
<body>
<div class=" w3-third w3-center w3-animate-top w3-padding"> <form class="w3-container" method="post" action="atividadeOnlineAction_forArray.php">
 <label class="w3-text-teal"><b>Nome do Cliente</b></label>
 <input class="w3-input w3-border w3-lightgrey" name="txtNome" type="text">
 <label class="w3-text-teal"><b>Valor da Compra</b></label>
 <input class="w3-input w3-border w3-lightgrey" name="txtValorCompra" type="number">
 <label class="w3-text-teal"><b>Estado para envio:</b></label>
 <select class="w3-input w3-border w3-light-grey" name = "cmbEstados">
 <?php
 $estados = array("Acre","Alagoas","Amapá","Amazonas","Bahia","Ceará", "Espírito Santo","Goiás","Maranhão","Mato Grosso","Mato Grosso
do Sul ", "Minas Gerais","Pará","Paraíba","Paraná", "Pernambuco","Piauí", "Rio de Janeiro", "Rio Grande do Norte","Rio Grande do Sul","Rondônia","Roraima"
,"Santa Catarina", "São Paulo","Santa Catarina", "Sergipe", "Tocantins","Distrito
Federal");
 
foreach($estados as $estado)
{
echo '<option>'.$estado.'</option>';
}
 ?>
 </select>
 <br>
 <button class="w3-btn w3-blue-grey">Enviar</button>
 </form>
</div>
</body>
</html>