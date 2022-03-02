<?php
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire'); // works
session_start();
// [ x ] ao inves de usar includes, estamos usando o header
// [ x ] validacao via session e pegando o campo hidden de cada formulario
// [ x ] criar a funcao callMsg para diminuir a repeticao de codigo

function callMsg($color, $btn, $text)
{
    $_SESSION['msg'] = array($color, $btn, $text);
    header("Location: ../View/mensagem.php");
}


if (!isset($_POST)) {
    header("Location: ../View/login.php");
}

//ROTA DO LOGIN
if (isset($_POST['frm_login'])) {
    //QUAL BOTAO FOI CLICADO { ENTRAR | PRIMEIRO ACESSO}
    if (isset($_POST['btnPrimeiroAcesso'])) {
        header("Location: ../View/primeiroAcesso.php");
    } else if (isset($_POST['btnADM'])) {
        header("Location: ../View/ADMLogin.php");
    } else {
        //valida usuario e senha
        echo 'CLICOU NO LOGIN';
    }
}

// ROTA PARA PRIMEIRO ACESSO
if (isset($_POST['frm_primeiro_acesso'])) {
    //O USUARIO ESTA NO FORM DE PRIMEIRO ACESSO E QUER CADASTRAR UM NOVO USUARIO
    //CODIGO DO INSERT DO FORMULARIO PRIMEIRO ACESSO
    echo 'NOVO USUARIO';
    $_SESSION['usuario'] = 'logado';
    if ($_SESSION['usuario'] == 'logado') {
        header("Location: ../View/principal.php");
    }
}

//ROTA DO PRINCIPAL
if (isset($_POST['frm_logout'])) {
    if (isset($_POST['btn_logout'])) {
        //destruir a sessao
        unset($_SESSION['usuario']);
        session_destroy();
        header("Location: ../View/login.php");
    }
}

// ROTA ADMINISTRADOR (LOGIN)

if (isset($_POST['frmLoginADM'])) {
    if (isset($_POST["btnLoginADM"])) {
        require_once '../Controller/AdministradorController.php';
        $aController = new AdministradorController();
        if ($aController->login($_POST['txtLoginADM'], $_POST['txtSenhaADM'])) {
            // SE deu certo o login (TRUE)
            header("Location: ../View/ADMPrincipal.php");
        } else {
            echo 'DEU ERRADO';
        }
    }
}


// ROTA DA ADMPRINCIPAL
if (isset($_POST['frmADMPrincipal'])) {
    if (isset($_POST["btnListarCadastrados"])) {
        header("Location: ../View/ADMListarCadastrados.php");
    }
}














// if (isset($_SESSION['Usuario'])) {
//     header("Location: View/principal.php");
// } else {
//     header("Location: http://localhost");
// }







// $action = isset($_GET['action']) ?: '';
// if ($action == 'destroy') {
//     session_destroy();
// }



















// // ROTA PARA CADASTRAR
// if (isset($_POST["btnCadastrar"])) {
//     //Qdo o usuario clicar em cadastrar
//     require_once '../Controller/UsuarioController.php';
//     $uController = new UsuarioController();
//     if ($uController->inserir($_POST["txtNome"], $_POST["txtCPF"], $_POST["txtEmail"], $_POST['txtSenha'])) {
//         callMsg('blue', 'btnCadRealizado', 'Cadastro Realizado com Sucesso');
//     } else {
//         callMsg('red', 'btnCadNRealizado', 'Erro ao Cadastrar Usuário');
//     }
// }

// // ROTA PARA ATUALIZAR CADASTRO
// if (isset($_POST["btnAtualizar"])) {
//     require_once '../Controller/UsuarioController.php';
//     $uController = new UsuarioController();
//     if ($uController->atualizar(
//         $_POST["txtID"],
//         $_POST["txtNome"],
//         $_POST["txtCPF"],
//         $_POST["txtEmail"],
//         date('Y-m-d', strtotime($_POST['txtData']))
//     )) {
//         callMsg('blue', 'btnAtualizacaoCadastro', 'Atualizado com Sucesso');
//     } else {
//         callMsg('red', 'btnOperacaoNRealizada', 'Erro ao Atualizar');
//     }
// }

// if (
//     isset($_POST["btnAtualizacaoCadastro"]) ||
//     isset($_POST["btnOperacaoNRealizada"])  ||
//     isset($_POST["btnCadRealizado"])
// ) {
//     header("Location: ../View/principal.php");
// }

// if (isset($_POST["btnPrimeiroAcesso"])) {
//     header("Location: ../View/primeiroAcesso.php");
// }
