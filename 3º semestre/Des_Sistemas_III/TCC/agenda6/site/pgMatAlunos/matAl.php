<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=https://www.w3schools.com/w3css/4/w3.css>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2021.css">
    <link rel="stylesheet" href="css/mat_alunos.css">

    </style>
    <title>Materiais do Aluno</title>
</head>

<body>
    <div id="conteudo" class="w3-row">
    <div id="conteudo" class="w3-row">
        <div id="div_titPrincipais" style="margin-bottom: 15px;">
            <h1 class="w3-text-blue w3-left-align">Materiais do Aluno</h1>
            <h5 class="w3-text-blue-gray  w3-left-align">TURMA: 1ª SÉRIE B - E.M.</h5>
        </div>
        <div id="pesquisa" class="w3-quarter w3-padding-24 w3-container">
            <form action="">
                <h6>Matérias</h6>
                <select name="tipo_vis" class="w3-select">
                    <option value="" disabled selected>Escolha</option>
                    <option class="w3-select w3-border w3-round ">Artes</option>
                    <option class="w3-select w3-border w3-round ">Biologia</option>
                    <option class="w3-select w3-border w3-round ">Ciências</option>
                    <option class="w3-select w3-border w3-round ">Educação Física</option>
                    <option class="w3-select w3-border w3-round ">Física</option>
                    <option class="w3-select w3-border w3-round ">Geografia</option>
                    <option class="w3-select w3-border w3-round ">História</option>
                    <option class="w3-select w3-border w3-round ">História da Arte</option>
                    <option class="w3-select w3-border w3-round ">HCG</option>
                    <option class="w3-select w3-border w3-round ">Língua Inglesa</option>
                    <option class="w3-select w3-border w3-round">Língua Portuguesa</option>
                    <option class="w3-select w3-border w3-round">Matemática</option>
                    <option class="w3-select w3-border w3-round ">Química</option>
                </select>
                <h6>Data da aula</h6>
                <input class="w3-input" type="date" id="data_aula">
                <div class="w3-right-align">
                    <button class="w3-button w3-border w3-text-color-white">Enviar</button>
                </div>
            </form>
        </div>

        <div id="result_pesquisa" class="w3-container w3-rest w3-padding-32">
            <div class="margem_abaixo">
                <h3>Materiais disponíveis</h3>
            </div>
            <div>
                <iframe class="dados_prof" src="" frameborder="0"></iframe>
            </div>
            <div>
                <iframe class="dados_prof" src="" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</body>
</html>