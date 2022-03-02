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

<body style="background-color:rgb(229,229,229);">
    <div class="w3-padding w3-content w3-text-grey  w3-margin w3-display-middle">
        <h1 class="w3-center w3-blue w3-margin">EXLUIR - ID: <?php echo " " . $_GET['id'] ?> </h1>
        <form action="excluirAction.php" class="w3-container w" method='post'>
            <input name="txtID" class="w3-input w3-grey w3-border" type="hidden" value="<?php echo $_GET['id'] ?>">
            <br>
            <label class="w3-text-black" style="font-weight: bold;">Nome do material</label>
            <input name="txtNomeMat" class="w3-input w3-white w3-border " disabled value="<?php echo $_GET['nome_material'] ?>">
            <br>
            <label class="w3-text-black" style="font-weight: bold;">Descrição</label>
            <input name="txtDesc" class="w3-input w3-white w3-border" disabled value="<?php echo $_GET['descricao'] ?>">
            <br>
            <label class="w3-text-black" style="font-weight: bold;">Data da aula</label>
            <input name="txtData" class="w3-input w3-white w3-border" disabled value="<?php echo $_GET['data_aula'] ?>">
            <br>
            <div class="w3-row">
                <div class="w3-container w3-half">
                    <button name="btnExcuir" class="w3-button w3-blue w3-cell w3-right" style="height: 130px" >
                        <i class="w3-xxxlarge fa fa-check"></i> 
                        <h3>Confirmar Exclusão</h3>
                </div>
                <div class="w3-container w3-half">
                    <a href="listar.php" class="w3-container w3-text-white w3-amber w3-padding w3-button" style="text-decoration:none; height: 130px;">
                        <i class="fa fa-close" style="font-size:5em;"></i>
                        <p style="font-weight:bold;">CANCELAR EXCLUSÃO</p>
                    </a>
                </div>
            </button>
        </form>
    </div>
</body>
</html>