<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Incluir arquivo de configuração
include 'config.php';

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];

    // Verificar se as senhas coincidem
    if ($senha != $confirmar_senha) {
        echo "As senhas não coincidem!";
        exit();
    }

    // Hash da senha para armazenamento seguro
    $senha_hashed = password_hash($senha, PASSWORD_DEFAULT);

    // Inserir dados no banco de dados usando prepared statement
    $stmt = $conn->prepare("INSERT INTO usuarios (email_usuario, nome_usuario, telefone_usuario, senha_usuario) VALUES (?, ?, ?, ?)");
    if ($stmt === false) {
        die('Erro ao preparar a consulta: ' . htmlspecialchars($conn->error));
    }
    
    $stmt->bind_param("ssss", $email, $nome, $celular, $senha_hashed);

    if ($stmt->execute() === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro: " . htmlspecialchars($stmt->error);
    }

    // Fechar a conexão
    $stmt->close();
    $conn->close();
}
?>
