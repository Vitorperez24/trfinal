<<<<<<< HEAD
<?php
include 'config.php'

// Simulação de adicionar produto ao carrinho
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    // Processamento para adicionar produto ao carrinho (simulado)
    // Aqui você deve implementar a lógica para adicionar o produto ao carrinho no banco de dados
    $response = [
        'success' => true,
        'message' => 'Produto adicionado ao carrinho com sucesso.',
        'product' => [
            'id_produto' => $data['id_produto'],
            'quantidade' => $data['quantidade']
        ]
    ];

    // Simula uma resposta JSON do servidor
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}

?>
=======
<?php
include 'config.php'

// Simulação de adicionar produto ao carrinho
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    // Processamento para adicionar produto ao carrinho (simulado)
    // Aqui você deve implementar a lógica para adicionar o produto ao carrinho no banco de dados
    $response = [
        'success' => true,
        'message' => 'Produto adicionado ao carrinho com sucesso.',
        'product' => [
            'id_produto' => $data['id_produto'],
            'quantidade' => $data['quantidade']
        ]
    ];

    // Simula uma resposta JSON do servidor
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}

?>
>>>>>>> 00923980e9edbe82e6b1895f6a70fd5e8358f27d
