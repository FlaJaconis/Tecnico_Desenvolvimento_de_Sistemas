<?php
include('conexao.php');
//include('protect.php'); incluir este código nas páginas de acesso apenas em pós login



// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
if (isset($_POST['usuario']) || isset($_POST['senha_usuario'])) {

    if (strlen($_POST['usuario']) == 0) {
        echo "<script>alert('Preencha seu usuario',window.location.href='index.php')</script>";
    } else if (strlen($_POST['senha_usuario']) == 0) {
        echo "<script>alert('Preencha sua senha',window.location.href='index.php')</script>";
    } else {

        $usuario = $mysqli->real_escape_string($_POST['usuario']);
        $senha = $mysqli->real_escape_string($_POST['senha_usuario']);

        // Validação do usuário/senha digitados
        $sql_code = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha_usuario = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        // Verifica a quantidade de resultado encontrado
        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {

            // Salva os dados encontrados na variável $user
            $user = $sql_query->fetch_assoc();

            // Se a sessão não existir, inicia uma
            if (!isset($_SESSION)) {
                session_start();
            }
            // Salva os dados encontrados na sessão
            $_SESSION['id'] = $user['id'];
            $_SESSION['nome'] = $user['nome'];
            $_SESSION['usuario_tipo'] = $user['tipo'];


            $usuario_tipo = $user['tipo'];
            //VERIFICA O TIPO DE USUÁRIO: ALUNO OU PROFESSOR E REDIRECIONA PARA PÁGINA CORRETA
            if ($usuario_tipo == 'A') {
                header('Location: areaAluno.php');
            } elseif ($usuario_tipo == 'P') {
                header('Location: areaProf.php');
            }
        } echo "<script>alert('Falha ao logar! E-mail ou senha incorretos',window.location.href='index.php')</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=TrebuchetMS;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <title>Home</title>
</head>

<style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p {
        font-family: 'Trebuchet MS';
    }

    h4 {
        color: #FFC804;
        text-align: center;
        text-shadow: 1px 1px 0 #444;
    }

    .w3-padding {
        padding: 8px 30px !important;

    }

    #fundo{
    background-color: #46A1F4;
}


input{
    margin-bottom: 25px ;
    width: 100%;
}

#topnavbar{
    background-color: #5F7187;
    font-weight: bold;
    color: #fff;
    text-shadow:1px 1px 0 #444;
}

#quadro{
background-color: #72B8F7;
}


.txtlogin{
    color: #FFFFFF;
}
.txtsenha{
    color: #FFFFFF;
}


#nav_fale{
    padding-left: 90px;
    color: #72B8F7;
    color:#09C6C6; 
}


#enviar{
    background-color: #09C6C6;
    color: #fff;
    align-items: flex-end;
}

</style>

<body>
    <!--NAVBAR!-->
    <div class="w3-row w3-center">
        <header>
            <img src="./img/logo.png" alt="logo" />
        </header>
    </div>
    <div id="topnavbar" class="w3-row">
        <div id="nav_quem" class="nav w3-container w3-threequarter">
            <a href="quem_somos.html" class="w3-bar-item w3-button w3-hover-teal">QUEM SOMOS</a>
            <a href="metodologia.html" class="w3-bar-item w3-button w3-hover-teal">METODOLOGIA DE ENSINO</a>
        </div>
        <div id="nav_fale" class=" nav w3-container w3-quarter">
            <a href="fale_conosco.html" class="w3-bar-item w3-button w3-hover-teal" href="#">FALE CONOSCO</a>
        </div>
    </div>
    <div id="fundo" class="w3-row">

        <div>
            <img class="mySlides w3-animate-fading w3-twothird  w3-padding-large  " src="./img/fachada.jpg" alt="fachada" />
            <img class="mySlides w3-animate-fading w3-twothird  w3-padding-large" src="./img/fachada2.jpg" alt="fachada" />
            <img class="mySlides w3-animate-fading w3-twothird  w3-padding-large" src="./img/fachada3.jpg" alt="fachada" />
        </div>

        <!-- SCRIPT JS PARA SLIDES DAS IMAGENS!-->

        <script>
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {
                    myIndex = 1
                }
                x[myIndex - 1].style.display = "block";
                setTimeout(carousel, 9000);
            }
        </script>
        <div class="w3-margin-left ">
            <div class="w3-container w3-third w3-padding-large w3-right ">
                <h4 class="w3-center">AVISOS GERAIS</h4>

                <div id="quadro" class="w3-card w3-padding w3-hover-shadow">
                    <p class="w3-text-white"><em>
                            Semana de recesso - 11 a 15/10 <br>
                            Matrículas e Rematrículas - 16 a 20/10 <br>
                            Marque uma visita para nos conhecer.
                    </p></em>
                </div>

            </div>
            <div class="w3-container w3-padding-large w3-margin-top w3-third w3-right  ">

                <!-- TELA DE LOGIN- INPUT-->
                <h4> Registro a alunos e professores</h4>
                <img src="./img/linha.png" alt="linha" style="width:100%" />
                <div id="linha-horizontal"></div>
                <div class="formulario w3-margin-top">
                    <form action="" method="POST">
                        <label class="txtlogin"><b>Login</b></label>
                        <input class="w3-input w3-border w3-round" type="text" name="usuario">
                        <label class="txtsenha"><b>Senha</b></label>
                        <input class="w3-input w3-border w3-round" type="password" name="senha_usuario">
                        <button id="enviar" class="w3-btn w3-right" name="SendLogin">Enviar</button>
                        <p class="w3-text-white w3-left w3-center "> Esqueceu a Senha?
                            <a href="TelaRecuperarSenha.php">Clique aqui.</a>
                        </p>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
