<?php
 $texto = $_POST["txtTexto"];
 $criptografada = base64_encode($texto);
 echo "Senha criptograda usando base64: " . $criptografada."<br>";
 $textoOriginal = base64_decode($criptografada);
 echo "Resultado da decodificação usando base64: " . $textoOriginal;
?>