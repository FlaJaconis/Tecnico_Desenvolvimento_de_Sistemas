<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    //die("Você não pode acessar esta página porque não está logado.<p><a href=\"index.php\">Entrar</a></p>");
    echo "<script>alert('Você não pode acessar esta página porque não está logado',window.location.href='index.php')</script>";
}


?>