<?php
    session_start();

    $usuario_logado = false;
    $usuario_id = null;
    $usuario_login = null;
    $usuario_perfil_id = null;

    $perfis = array(
        0 => 'Administrador',
        1 => 'Usuário',
        2 => 'Atendente'
    );

    $usuarios_app = array(
        array('id' => 0, 'login' => 'adm', 'senha' => '123', 'perfil_id' => 0), 
        array('id' => 1, 'login' => 'teste', 'senha' => 'zxc', 'perfil_id' => 1)
    );
    
    foreach ($usuarios_app as $usuario) {
        
        if($usuario['login'] == $_POST['login'] && $usuario['senha'] == $_POST['senha']) {
            $usuario_logado = true;
            $usuario_id = $usuario['id'];
            $usuario_login = $usuario['login'];
            $usuario_perfil_id = $usuario['perfil_id'];
        }
    }

    $login = $_POST['login'];

    if($usuario_logado) {
        $_SESSION['autenticado'] = 'sim';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['login'] = $usuario_login;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header("Location: portal.php");
    } else {
        $_SESSION['autenticado'] = 'nao';
        header('Location: index.php?login=erro');
    }

?>