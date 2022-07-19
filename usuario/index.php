<?php
    header('Content-Type: application/json');

    $acao = isset($_GET['acao']) ? $_GET['acao'] : '';

    if(!$acao) die(json_encode(['error' => 'Informe uma ação']));

    global $usuario;
    $usuario = array(
        'id' => '1',
        'nome' => 'Erick',
        'seguidores' => '100',
        'seguindo' => '10'
    );

    switch($acao){
        case 'detalhes':
                getUsuario();
            break;
        case 'inserir':
            insertUsuario();
        break;
        case 'alterar':
            updateUsuario();
        break;
        case 'delete':
            updateUsuario();
        break;
        default:
            echo 'Ação não encontrada';
        break;
    };

    function getUsuario(){
        $idUsuario = isset($_GET['id']) ? $_GET['id'] : '';
        if(!$idUsuario) die(json_encode(['error' => 'Informe o id do usuário para detalhes']));
        global $usuario;
        $result = array_search($idUsuario, $usuario);

        die(json_encode($result));
    };



?>