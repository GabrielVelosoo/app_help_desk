<?php 
    session_start();

    $usuario_autenticado = false;
    $usuario_id = null;

    $perfis = [1 => 'ADM', 2 => 'USER'];
    $usuario_perfil_id = null;

    $usuarios_app = [
            ['id' => 1, 'email' => 'adm1@teste.com.br', 'senha' => '1234', 'perfil_id' => 1],
            ['id' => 2, 'email' => 'adm2@teste.com.br', 'senha' => '1234', 'perfil_id' => 1],
            ['id' => 3, 'email' => 'user1@teste.com.br', 'senha' => '1234', 'perfil_id' => 2],
            ['id' => 4, 'email' => 'user2@teste.com.br', 'senha' => '1234', 'perfil_id' => 2]
    ];

    foreach ($usuarios_app as $user) {
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }
    }

    if($usuario_autenticado){
        //echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id; 
        header('location: home.php');
    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('location: index.php?login=erro');
    }

    /*
    echo "<pre>";
    print_r($usuarios_app);
    echo "</pre>";
    */

    
?>