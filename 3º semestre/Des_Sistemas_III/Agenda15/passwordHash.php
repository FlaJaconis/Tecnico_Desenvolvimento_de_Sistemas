<?php
 $texto = "O curso de Técnico em Desenvolvimento de Sistemas está na reta final."; 
 $codificado = password_hash($texto, PASSWORD_DEFAULT);
 echo "Texto Codificado: ".$codificado."<br>";

 if (password_verify("O curso de Técnico em Desenvolvimento de Sistemas está na reta final.", $codificado)) {
    echo 'Texto Correto';
    } else {
    echo 'Texto Incorreto';
    }
?>