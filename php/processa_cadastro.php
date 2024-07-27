<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Incluir arquivo de conexão
include 'config.php';

// Define o tipo de conteúdo como JSON
header('Content-Type: application/json');

// Obter dados do formulário
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$celular = isset($_POST['celular']) ? $_POST['celular'] : '';
$senha = isset($_POST['senha']) ? password_hash($_POST['senha'], PASSWORD_BCRYPT) : '';

// Verificar se o email já está registrado
$query = "SELECT * FROM usuarios WHERE email_usuario='$email'";
$result = mysqli_query($conn, $query);

if (!$result) {
    echo json_encode(['success' => false, 'message' => 'Erro na consulta: ' . mysqli_error($conn)]);
    exit;
}

if (mysqli_num_rows($result) > 0) {
    echo json_encode(['success' => false, 'message' => 'Este email já está registrado!']);
} else {
    // Inserir dados no banco de dados
    $query = "INSERT INTO usuarios (nome_usuario, email_usuario, telefone_usuario, senha_usuario) VALUES ('$nome', '$email', '$celular', '$senha')";
    
    if (mysqli_query($conn, $query)) {
        // Responder com sucesso
        echo json_encode(['success' => true, 'message' => 'Cadastro realizado com sucesso!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Erro ao cadastrar usuário: ' . mysqli_error($conn)]);
    }
}

mysqli_close($conn);
?>
