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
<div class="w3-container w3-teal">
    <h1>
    PROMOÇÃO DE MÊS DE ANIVERSÁRIO!<br>
    <br>
    <?php
            echo "".$_POST['txtNome']."! <br>";
            echo "Valor da compra sem desconto: " .$_POST['txtValorCompra']."<br>";
            echo "Forma de pagamento escolhida: " .$_POST['cmbPag']."<br>";
            
            $valor_desc_bol = ($_POST['txtValorCompra'] * 10)/100;
            $valor_desc_dep = ($_POST['txtValorCompra'] * 8)/100;
            $valor_final;
                       
           if($_POST['cmbPag'] == 'boleto'){
                echo "Desconto de: 10% <br>";
                echo "Você economizou: R$" .$valor_desc_bol."<br>";
                echo "Valor a pagar: R$" .$valor_final = $_POST['txtValorCompra'] - $valor_desc_bol."<br>";
            }
            elseif ($_POST['cmbPag'] == 'deposito') {
                echo "Desconto de: 8% <br>";
                echo "Você economizou: R$" .$valor_desc_dep."<br>";
                echo "Valor a pagar: R$" .$valor_final = $_POST['txtValorCompra'] - $valor_desc_dep."<br>";
            }
            else {
                echo "Você está pagando um valor sem desconto. <br>";
                echo "Valor a pagar: R$" .$valor_final = $_POST['txtValorCompra']."<br>";
            }
        ?>
    </h1>
 </div>
 </body>
 </html>