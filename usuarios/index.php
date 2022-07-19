<?php
    header('Content-Type: application/json');
    
    $usuarios = [
        'id' => '1',
        'nome' => 'Erick',
        'seguidores' => '100',
        'seguindo' => '10'
    ];

    echo json_encode($usuarios)
?>