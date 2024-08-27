<?php
session_start();
header('Content-Type: application/json');

// Verificar se o usuário está autenticado
if (!isset($_SESSION['email'])) {
    http_response_code(403);
    echo json_encode(['error' => 'Usuário não autenticado']);
    exit;
}

// Verificar se o método é POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obter e validar os dados da solicitação
    $codigo_produto = isset($_POST['codigo_produto']) ? $_POST['codigo_produto'] : null;
    $quantidade = isset($_POST['quantidade']) ? intval($_POST['quantidade']) : 1;

    if (!$codigo_produto || $quantidade <= 0) {
        http_response_code(400);
        echo json_encode(['error' => 'Dados inválidos']);
        exit;
    }

    // Configurações de conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "usbw";
    $dbname = "dallas_pet";

    // Conectar ao banco de dados
    $mysqli = new mysqli($servername, $username, $password, $dbname);

    // Verificar a conexão
    if ($mysqli->connect_error) {
        http_response_code(500);
        echo json_encode(['error' => 'Falha na conexão com o banco de dados']);
        exit;
    }

    // Escapar o código do produto para evitar injeção SQL
    $codigo_produto = $mysqli->real_escape_string($codigo_produto);
    $email_usuario = $_SESSION['email'];

    // Verificar se o item já está no carrinho
    $stmt = $mysqli->prepare("SELECT quantidade FROM carrinho WHERE codigo_produto = ? AND email_usuario = ?");
    $stmt->bind_param("ss", $codigo_produto, $email_usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Atualizar a quantidade existente
        $stmt = $mysqli->prepare("UPDATE carrinho SET quantidade = quantidade + ? WHERE codigo_produto = ? AND email_usuario = ?");
        $stmt->bind_param("iss", $quantidade, $codigo_produto, $email_usuario);
    } else {
        // Inserir novo item no carrinho
        $stmt = $mysqli->prepare("INSERT INTO carrinho (codigo_produto, quantidade, email_usuario) VALUES (?, ?, ?)");
        $stmt->bind_param("sis", $codigo_produto, $quantidade, $email_usuario);
    }

    // Executar a query
    if ($stmt->execute()) {
        echo json_encode(['success' => 'Produto adicionado ao carrinho']);
    } else {
        http_response_code(500);
        echo json_encode(['error' => 'Erro ao adicionar produto ao carrinho']);
    }

    $stmt->close();
    $mysqli->close();
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Método não permitido']);
}
?>
