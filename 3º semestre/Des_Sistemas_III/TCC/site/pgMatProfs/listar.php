<?php
include_once("conecta.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href=https://www.w3schools.com/w3css/4/w3.css>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2021.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="css/mat_profs.css">
    <title> Listar Materiais do Professor</title>
</head>
<body>
        <?php
                echo '
                <div class="w3-paddingw3-content w3-container w3-margin">
                
                <table class="w3-table-all w3-centered">
                <thead>   
                    <tr class="w3-center w3-blue">
                    <th>Código</th>
                    <th>Data da aula</th>
                    <th>Matéria</th>
                    <th>Turma</th>
                    <th>Nome do material</th>
                    <th>Descrição</th>
                    <th>Caminho</th>
                    <th>Excluir</th>
                    </tr>
                <thead>
                ';
                $sql = "SELECT * FROM materiais_aulas" ;
                $resultado = $conexao->query($sql);
                if($resultado != null)
                foreach($resultado as $linha) {
                    echo '<tr>';
                    echo '<td>'.$linha['id_img'].'</td>';
                    echo '<td>'.$linha['data_aula'].'</td>';
                    echo '<td>'.$linha['materia'].'</td>';
                    echo '<td>'.$linha['turma'].'</td>';
                    echo '<td>'.$linha['nome_material'].'</td>';
                    echo '<td>'.$linha['descricao'].'</td>';
                    echo '<td>'.$linha['caminho'].'</td>';
                    echo '<td><a href="excluir.php?id='.$linha['id_img'].'&data_aula='.$linha['data_aula'] .'&turma='.$linha['materia']
                    .'&turma='.$linha['turma'].'&nome_material='.$linha['nome_material'].'&descricao='.$linha['descricao'].'&caminho='.$linha['caminho'].'">
                    <i class="fa fa-user-times w3-large w3-text-blue"></i> </a></td></td>';
                    echo '</tr>';
                    echo '</tr>';
                }
                echo '
                    </table>
                </div>';
               
            $conexao->close();
        ?>
        </div>
    </body>
</html>