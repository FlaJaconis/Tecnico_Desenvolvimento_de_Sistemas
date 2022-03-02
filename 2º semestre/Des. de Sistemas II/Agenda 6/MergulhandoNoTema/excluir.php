<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Excluir - MYSQLI</title>
</head>
<body>
<a href="index.php" class="w3-display-topmiddle w3-red w3-center w3-padding w3-button" style="text-decoration:none; ">
    <i class="fa fa-ban" style="font-size:5em"></i>
    <p style="font-weight:bold;">CANCELAR EXCLUSÃO</p>     
</a> 
<div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-middle">
    <h1 class="w3-center w3-teal w3-round-large w3-margin">EXLUIR - ID: <?php echo " ".$_GET['id']?> </h1>
    <form action="excluirAction.php" class="w3-container w" method='post'>
        <input name="txtID" class="w3-input w3-grey w3-border" type="hidden" value="<?php echo $_GET['id']?>">
        <br>
        <label class="w3-text-teal" style="font-weight: bold;">Nome</label>
        <input name="txtNome" class="w3-input w3-border w3-grey" disabled value="<?php echo $_GET['nome']?>">
        <br>
        <label class="w3-text-teal" style="font-weight: bold;">Apelido</label>
        <input name="txtApelido" class="w3-input w3-border w3-grey" disabled value="<?php echo $_GET['apelido']?>">
        <br>
        <label class="w3-text-teal" style="font-weight: bold;">Email</label>
        <input name="txtEmail" class="w3-input w3-border w3-grey" disabled value="<?php echo $_GET['email']?>">
        <br>
        <button name="btnExcuir" class="w3-button w3-teal w3-cell w3-round-large w3-right">     
            <i class="w3-xxlarge fa fa-check"></i> Confirmar Exclusão.
        </button>
    </form>
</div>
</body>
</html>