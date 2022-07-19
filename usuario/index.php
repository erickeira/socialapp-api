<?php
    header('Content-Type: application/json');

    $idUsuario = isset($_GET['id']) ? $_GET['id'] : '';

    if(!$idUsuario) die(json_encode(['error' => 'Informe id do usuário']));

    $usuario = [
        'id' => '1',
        'nome' => 'Erick',
        'seguidores' => '100',
        'seguindo' => '10'
    ];

    switch($idUsuario){
        case '1':
            echo json_encode($usuario);
            break;
        default:
            echo 'Usuário não encontrado';
            break;
    };


?>