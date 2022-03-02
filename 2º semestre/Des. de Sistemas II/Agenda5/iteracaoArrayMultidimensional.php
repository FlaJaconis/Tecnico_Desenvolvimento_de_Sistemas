<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
</head>
<body>
    <?php 
    $produtosAssociativo = array(
        array("nome"=> "Processador","valor"=> "900" ),
        array("nome"=> "Mouse","valor"=> "15" ),
        array("nome"=> "Teclado","valor"=> "20" ),
        array("nome"=> "Impressora","valor"=> "500" ),
        array("nome"=> "Monitor","valor"=> "450" ),
        array("nome"=> "Placa de Vídeo","valor"=> "1500" ),
        array("nome"=> "Memória RAM 8G","valor"=> "500" ),
        array("nome"=> "Placa Mãe","valor"=> "600" ),
        array("nome"=> "Mouse Pad","valor"=> "25" ),
        array("nome"=> "SSD","valor"=> "245" ),
       );
       
       echo '<table class="w3-table-all w3-hoverable w3-text-black">';
        echo '<tr class="w3-teal ">';
        echo '<th class="w3-center"> Nome</th>';
        echo '<th class="w3-center"> Valor</th>';
        echo '</tr>'; 
        foreach($produtosAssociativo as $produto)
        {
        echo '<tr>';
        echo '<td class="w3-center">'.$produto['nome'].'</td>';
        echo '<td class="w3-center">'.$produto['valor'].'</td>';
        echo '</tr>';
        }
        echo '</table>';
                
    ?>
       
</body>
</html>