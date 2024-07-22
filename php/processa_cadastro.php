<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Incluir arquivo de conexão
include 'config.php';

header('Content-Type: application/json');

// Obter dados do formulário
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$celular = $_POST['celular'] ?? '';
$senha = password_hash($_POST['senha'] ?? '', PASSWORD_BCRYPT);

// Verificar se o email já está registrado
$query = "SELECT * FROM usuarios WHERE email_usuario='$email'";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0) {
    echo json_encode(['success' => false, 'message' => 'Este email já está registrado!']);
} else {
    // Inserir dados no banco de dados
    $query = "INSERT INTO usuarios (nome_usuario, email_usuario, telefone_usuario, senha_usuario) VALUES ('$nome', '$email', '$celular', '$senha')";
    
    if(mysqli_query($conn, $query)) {
        // Responder com sucesso
        echo json_encode(['success' => true, 'message' => 'Cadastro realizado com sucesso!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Erro ao cadastrar usuário: ' . mysqli_error($conn)]);
    }
}

mysqli_close($conn);
?>
