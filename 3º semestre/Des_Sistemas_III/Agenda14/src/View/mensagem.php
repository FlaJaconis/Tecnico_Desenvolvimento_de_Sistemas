<?php
session_start();
$color = $_SESSION['msg'][0];
$btn   = $_SESSION['msg'][1];
$text  = $_SESSION['msg'][2];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Mensagem</title>
</head>

<body>
    <div style="display: flex; align-items: center; justify-content: center; height: 100vh;">
        <button class="w3-button w3-<?= $color ?>" name="<?= $btn ?>">
            <?= $text ?>
        </button>
    </div>
</body>

</html>