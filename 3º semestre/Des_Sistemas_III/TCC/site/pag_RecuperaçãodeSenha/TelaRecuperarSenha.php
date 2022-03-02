<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
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

    <form method="post" class="w3-container w3-card-4 w3-margin w3-display-middle" style="background-color: #46B6F4; width: 30%;">
        <h2 class="w3-center">RECUPERAÇÃO DE SENHA</h2>
                           
        <div class="w3-rest w3-text-white">
            <h6>Nova Senha:</h6>
            <input class="w3-card-4 w3-input w3-round" name="txtSenha" type="password">
        </div>        

        <div class="w3-rest w3-text-white">
            <h6>Confirme a nova senha:</h6>
            <input class="w3-card-4 w3-input w3-round" name="txtConfSenha" type="password">
        </div>   
        
        <div class="w3-right w3-text-white">
            <button name="btnEnviar" class="w3-card-4 w3-button w3-block w3-margin w3-cell 
            w3-round-large" style="background-color: #09C6C6; width: 80%;">Enviar</button>
        </div>    
    </form>
    
  </body>
</html>