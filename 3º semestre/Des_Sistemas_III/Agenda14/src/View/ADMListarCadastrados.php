<?php
if (!isset($_SESSION)) {
    session_start();
}
include_once '../Model/Usuario.php';
include_once '../Controller/UsuarioController.php';


?>
<!DOCTYPE html>
<html lang=”pt-br”>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>DASHBOARD - ADM PRINCIPAL</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class=”w3-light-grey”>
    <header class="w3-container w3-padding-32 w3-center ">
        <h1 class="w3-text-white w3-panel w3-cyan w3-round-large">
            Lista de Usuários Cadastrados no Sistema
        </h1>
    </header>
    <div class="w3-padding-128 w3-content w3-text-grey">
        <div class="w3-container">
            <table class="w3-table-all w3-centered">
                <thead>
                    <tr class="w3-center w3-blue">
                        <th>Código</th>
                        <th>Nome</th>
                        <th>DADOS</th>
                    </tr>
                    <thead>

                        <?php
                        $usuario = new UsuarioController();
                        $results = $usuario->gerarLista();
                        if ($results != null) {
                            while ($row = $results->fetch_object()) {
                                echo '<tr>';
                                echo '<td style="width: 1%;">' . $row->idadministrador . '</td>';
                                echo '<td style="width: 50%;">' . $row->nome . '</td>';
                                echo '<td style="width: 50%;"><button class="w3-red"> + </button></a></td>';
                                echo '</tr>';
                            }
                        }
                        ?>


            </table>
        </div>
    </div>
    <a href="/Controller/Navegacao.php">VOLTAR</a>

</body>

</html>