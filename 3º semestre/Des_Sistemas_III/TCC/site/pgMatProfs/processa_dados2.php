<?php

include_once("conecta.php");

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=https://www.w3schools.com/w3css/4/w3.css>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2021.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="css/mat_profs.css">
    <title>Materiais do Professor</title>
</head>

<body>

    <?php

    //Verificando se há arquivo anexado
    if (isset($_FILES['esc_material'])) {
        $arquivo = $_FILES['esc_material'];
        // verficação de falha no upload (se o servidor está fora do ar por exemplo)
        if ($arquivo['error'])
            die("Falha ao enviar arquivo");
        //para limitar o tamanho do arquivo
        if ($arquivo['size'] > 2097152) //2MB
        
            die(
            
                "<div id=\"d_voltar\" class=\"w3-margin-top\">
                <button id=\"btnVoltar\" style=\"border: 0px; background-color:rgb(229,229,229);\">
                    <a href=\"./mat_profs.html\" style=\"text-decoration: none;\">
                        <i id=\"i_voltar\" class=\"fa fa-arrow-left w3-jumbo w3-hover-text-gray\"  style=\"text-shadow:1px 1px 0 #444; color: #09C6C6;\">
                            <h2 id=\"voltar\">Voltar</h2>
                        </i>
                    </a>
                </button>
            </div>
                <a href=\"./mat_profs.html\"></a>
                <div class =\"w3-display-middle w3-card w3-amber w3-text-white\" style=\"padding:20px;\">
                <h2>\"Arquivo maior que 2 MB!\"
                </p>
                </h2>"
            
            );
        //pasta para onde o arquivo vai
        $pasta = "materiais/";

        // name - identificador do nome original da imagem quando ela é guardada automaticamente pelo PHP até ser alocada na pasta final
        $nomeArquivo = $arquivo['name']; //nome original
        $nomeCode = uniqid(); // nome gerado automaticamente quando sobe

        //strtolower - converte tudo para minúsculo / pathinfo - captura parte do caminho de uma string
        $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));
        $path = $pasta . $nomeCode  . "." . $extensao;


        //validando a extensão do arquivo
        if ($extensao != "jpg" && $extensao != "png" && $extensao != "pdf")
            die(
            
            "<div id=\"d_voltar\" class=\"w3-margin-top\">
            <button id=\"btnVoltar\" style=\"border: 0px; background-color:rgb(229,229,229);\">
                <a href=\"./mat_profs.html\" style=\"text-decoration: none;\">
                    <i id=\"i_voltar\" class=\"fa fa-arrow-left w3-jumbo w3-hover-text-gray\"  style=\"text-shadow:1px 1px 0 #444; color: #09C6C6;\">
                        <h2 id=\"voltar\">Voltar</h2>
                    </i>
                </a>
            </button>
        </div>
            <a href=\"./mat_profs.html\"></a>
            <div class =\"w3-display-middle w3-card w3-amber w3-text-white\" style=\"padding:20px;\">
            <h2>Extesão de arquivo incorreta! Utilize apenas: jpg. png ou pdf.
            </p>
            </h2>"
        
        );

       
        $sql = "INSERT INTO materiais_aulas (turma, data_aula, materia, nome_material, descricao, caminho) VALUES ('" . $_POST['niveis_escolares'] . "', '" 
        . $_POST['data'] . "', '" . $_POST['materia'] . "', '" . $nomeArquivo . "', '" . $_POST['descricao'] . "', '" . $path . "')";

        //verificando se o upload foi executado com move_uploaded_file($) - retorna booleano
        // tmp_name - identificador do nome temporário da imagem  quando ela é guardada automaticamente pelo PHP até ser alocada na pasta final
        //verificando se o upload foi executado com move_uploaded_file($) - retorna booleano
        // tmp_name - identificador do nome temporário da imagem  quando ela é guardada automaticamente pelo PHP até ser alocada na pasta final
        
        $uploadOK = move_uploaded_file($arquivo["tmp_name"], $pasta . $nomeCode  . "." . $extensao);

        if ($conexao->query($sql) === TRUE && $uploadOK) {
            echo
            "<div id=\"d_voltar\" class=\"w3-margin-top\">
            <button id=\"btnVoltar\" style=\"border: 0px; background-color:rgb(229,229,229);\">
                <a href=\"./mat_profs.html\" style=\"text-decoration: none;\">
                    <i id=\"i_voltar\" class=\"fa fa-arrow-left w3-jumbo w3-hover-text-gray\"  style=\"text-shadow:1px 1px 0 #444; color: #09C6C6;\">
                        <h2 id=\"voltar\">Voltar</h2>
                    </i>
                </a>
            </button>
        </div>
            <a href=\"./mat_profs.html\"></a>
            <div class =\"w3-display-middle w3-card w3-blue w3-text-white\" style=\"padding:20px;\">
            <h2>Dados salvos com sucesso! 
            Para acessar o arquivo: <a target = \"_blank\" href =\"materiais/$nomeCode.$extensao\">Clique aqui!
            </a>
            </p>
            </h2>";

        }else{

            echo
            "<div id=\"d_voltar\" class=\"w3-margin-top\">
            <button id=\"btnVoltar\" style=\"border: 0px; background-color:rgb(229,229,229);\">
                <a href=\"./mat_profs.html\" style=\"text-decoration: none;\">
                    <i id=\"i_voltar\" class=\"fa fa-arrow-left w3-jumbo w3-hover-text-gray\" 
                     style=\"text-shadow:1px 1px 0 #444; color: #09C6C6;\">
                        <h2 id=\"voltar\">Voltar</h2>
                    </i>
                </a>
            </button>
        </div>
            <a href=\"./mat_profs.html\"></a>
            <div class =\"w3-display-middle w3-card w3-amber w3-text-white\" style=\"padding:20px;\">
            <h2>Falha ao gravar os dados! Tente novamente!
            </p>
            </h2>";
        }
        /*if ($conexao->query($sql) === FALSE && $uploadOK === TRUE) {
            echo  "<p>Falha ao gravar os dados!";*/
        }
    $conexao->close();
    ?>
</body>
</html>