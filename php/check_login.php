<?php
session_start();

$response = array('logged_in' => false);

if (isset($_SESSION['email_usuario'])) {
    // Usuário está logado
    $response['logged_in'] = true;
    $response['nome_usuario'] = $_SESSION['nome_usuario']; // Substitua pelo campo correto no banco de dados
}

header('Content-Type: application/json');
echo json_encode($response);
?>
