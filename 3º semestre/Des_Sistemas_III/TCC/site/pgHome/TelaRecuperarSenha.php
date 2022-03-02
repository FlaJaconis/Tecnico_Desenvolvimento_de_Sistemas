<?php
include('conexao.php');
include('protect.php'); 



// Verifica se houve POST email está vazio
if (isset($_POST['email']))  {

    if (strlen($_POST['email']) == 0) {
        echo "<script>alert('Campo obrigatório.Preencha seu e-mail.',window.location.href='TelaRecuperarSenha.php')</script>";
    }else{    


        $email = $mysqli->real_escape_string($_POST['email']);


        // Validação do email digitado
        $sql_code = "SELECT * FROM usuarios WHERE email = '$email'";
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
            $_SESSION['email'] = $user['email'];
           
            // Caso localize e-mail: emite a msg abaixo
            echo "<script>alert('Um e-mail para a definição da sua senha lhe foi enviado.Caso não receba, entre em contato com o Administrador do sistema',window.location.href='index.php')</script>";

        } else {
            // Caso não o localize e-mail: emite a msg abaixo
            echo "<script>alert('E-mail incorreto. Tente novamente!',window.location.href='TelaRecuperarSenha.php')</script>";
        }
    }
}
?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fontawesome.min.css">
 <link rel="stylesheet" href="style.css">
 <title>Recuperação de Senha</title>
</head>
<style>
    body, h2, h6 {
        font-family: "trebuchet MS";
    }

    h2 { color:#FFC804;
         text-shadow: 2px 2px 4px #000000;}
</style>
<body style="background-color:#46A1F4">

<form action="" method="post" class="w3-container w3-card-4 w3-margin w3-display-middle" style="background-color: #46B6F4; width: 30%;">
    <h2 class="w3-center">RECUPERAÇÃO DE SENHA</h2>
    <div class="w3-row w3-section">
        <div class="w3-col" style="width:11%;">
         <i class="w3-xxlarge fa fa-user"></i>
        </div>

        <div class="w3-rest w3-text-white">
         <h6>Digite seu Login:</h6>
         <input class="w3-card-4 w3-input w3-round" name="email" type="email" placeholder="">
        </div>
    </div>

    <div class="w3-row w3-section w3-text-white">
        <div class="w3-right">
         <button name="btnCadastrar" class="w3-card-4 w3-button w3-block w3-margin w3-cell w3-round-large" 
         style="background-color: #09C6C6; width: 80%;">Enviar</button>
        </div>
    </div>
</form>

</body>
</html>