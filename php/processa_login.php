<<<<<<< HEAD
<?php
// Incluir o arquivo de configuração do banco de dados
require_once 'config.php';

// Função para verificar se a senha está correta
function verifyPassword($senhaFornecida, $senhaHash) {
    return password_verify($senhaFornecida, $senhaHash);
}

// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Sanitize email para evitar SQL Injection
    $email = $conn->real_escape_string($email);

    // Query para buscar usuário pelo email
    $sql = "SELECT * FROM usuarios WHERE email_usuario = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Usuário encontrado, verificar senha
        $row = $result->fetch_assoc();
        $senhaHash = $row['senha_usuario'];

        if (verifyPassword($senha, $senhaHash)) {
            // Senha correta, iniciar sessão
            session_start();
            $_SESSION['email'] = $email; // Armazenar o email na sessão, se necessário
            $nomeUsuario = $row['nome_usuario']; // Obter o nome do usuário
            $response = array(
                "status" => "success",
                "message" => "Login realizado com sucesso.",
                "email" => $email,
                "nomeUsuario" => $nomeUsuario
            );
        } else {
            // Senha incorreta
            $response = array("status" => "error", "message" => "Email ou senha incorretos. Tente novamente.");
        }
    } else {
        // Usuário não encontrado
        $response = array("status" => "not_found", "message" => "Usuário não encontrado. Verifique seu email.");
    }

} else {
    // Redirecionar se o formulário não foi submetido
    $response = array("status" => "error", "message" => "Método de requisição inválido.");
}

// Retornar resposta JSON para o JavaScript
header('Content-Type: application/json');
echo json_encode($response);

// Fechar conexão com o banco de dados
$conn->close();
?>
=======
<?php
// Incluir o arquivo de configuração do banco de dados
require_once 'config.php';

// Função para verificar se a senha está correta
function verifyPassword($senhaFornecida, $senhaHash) {
    return password_verify($senhaFornecida, $senhaHash);
}

// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Sanitize email para evitar SQL Injection
    $email = $conn->real_escape_string($email);

    // Query para buscar usuário pelo email
    $sql = "SELECT * FROM usuarios WHERE email_usuario = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Usuário encontrado, verificar senha
        $row = $result->fetch_assoc();
        $senhaHash = $row['senha_usuario'];

        if (verifyPassword($senha, $senhaHash)) {
            // Senha correta, iniciar sessão
            session_start();
            $_SESSION['email'] = $email; // Armazenar o email na sessão, se necessário
            $nomeUsuario = $row['nome_usuario']; // Obter o nome do usuário
            $response = array(
                "status" => "success",
                "message" => "Login realizado com sucesso.",
                "email" => $email,
                "nomeUsuario" => $nomeUsuario
            );
        } else {
            // Senha incorreta
            $response = array("status" => "error", "message" => "Email ou senha incorretos. Tente novamente.");
        }
    } else {
        // Usuário não encontrado
        $response = array("status" => "not_found", "message" => "Usuário não encontrado. Verifique seu email.");
    }

} else {
    // Redirecionar se o formulário não foi submetido
    $response = array("status" => "error", "message" => "Método de requisição inválido.");
}

// Retornar resposta JSON para o JavaScript
header('Content-Type: application/json');
echo json_encode($response);

// Fechar conexão com o banco de dados
$conn->close();
?>
>>>>>>> 00923980e9edbe82e6b1895f6a70fd5e8358f27d
